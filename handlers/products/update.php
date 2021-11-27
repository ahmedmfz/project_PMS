<?php

require_once "../../core/config.php";
getFile(HANDELER_FOLDER . "database");
getFile(HANDELER_FOLDER . "validation");
getFile(HANDELER_FOLDER . "session");
getFile(HANDELER_FOLDER . "requests");


$errors = [];

if (isset($_GET["id"]) && postMethod()) {

    foreach ($_POST as $key => $value) {
        $$key = $value;
    }

    $id = intSan($_GET['id']);
    $category = intSan($category);
    $name = strSan($name);
    $price = intSan($price);
    $quantity = intSan($quantity);
    $description = strSan($description);

    if (!requiredVal($category)) :
        $errors[] = "please choose category to this product";
    endif;

    if (!requiredVal($name)) :
        $errors[] = "name must be not empty";
    elseif (!minVal($name, 3)) :
        $errors[] = "name must be atleast 3 chars";
    elseif (!maxVal($name, 30)) :
        $errors[] = "name must be maxmuim 30 chars";
    endif;

    if (!requiredVal($price)) :
        $errors[] = "price must be not empty";
    elseif (!maxVal($price, 30)) :
        $errors[] = "price must be maxmuim 12 chars";
    endif;

    if (!requiredVal($quantity)) :
        $errors[] = "quantity must be not empty";
    elseif (!maxVal($quantity, 30)) :
        $errors[] = "quantity must be maxmuim 12 chars";
    endif;

    if (!requiredVal($description)) :
        $errors[] = "description must be not empty";
    elseif (!minVal($description, 5)) :
        $errors[] = "description must be atleast 5 chars";
    elseif (!maxVal($description, 50)) :
        $errors[] = "description must be maxmuim 50 chars";
    endif;


    $file = $_FILES['image'];
    if ($file['error'] != 4) :

        $f_name = $file['name'];
        $f_size = $file['size'];
        $f_error = $file['error'];
        $f_tmp_name = $file['tmp_name'];
        $f_type = $file['type'];
        $new_name = null;

        if ($f_name != '') :
            $file_path = pathinfo($f_name);
            $file_name = $file_path['filename'];
            $extention = $file_path['extension'];

            if ($f_size < 50000) :

                if (checkimage($f_tmp_name) == true) :

                    $new_name = uniqid("", true) . "." . $extention;
                    $desnation = __DIR__ . "/../../files/" . $new_name;
                    move_uploaded_file($f_tmp_name, $desnation);

                else :
                    $errors[] = checkimage($f_tmp_name);
                endif;

            else :
                $errors[] = " max size of file is 5 MB";
            endif;
        else :
            $errors[] = "please choose your image";
        endif;

    endif;

    if (empty($errors)) :

        $result = db_get_row("products", "`id_product`= '$id'");

        if ($result) :
            if($new_name != '') :
                if(file_exists(__DIR__."/../../files/".$result['image'])){
                    unlink(__DIR__."/../../files/".$result['image']);
                }
                $field['image'] = $new_name;
            endif;
            $field['section_id'] = $category;
            $field['name_product'] = $name;
            $field['price'] = $price;
            $field['quantity'] = $quantity;
            $field['description_product'] = $description;

            if(UpdateTable("products",$field,"`id_product`= '$id'")):
                setSession("success","you Updated product successfully");
            else:
                setSession("errors",["you have error try again"]);
            endif;

        else:
            setSession("errors",["you id not exists"]);
        endif;
        
        redirect("pages/product/view");
    else :
        setSession('errors', $errors);
        setSession('id', $id);
        redirect("pages/product/edit");
    endif;
}
