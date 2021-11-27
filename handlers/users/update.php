<?php

require_once "../../core/config.php";
getFile(HANDELER_FOLDER . "database");
getFile(HANDELER_FOLDER . "validation");
getFile(HANDELER_FOLDER . "session");
getFile(HANDELER_FOLDER . "requests");

$errors = [];

if( isset($_GET["id"]) && postMethod()){

   foreach($_POST as $key => $value){
       $$key = $value;
   }
    $id = intSan($_GET['id']);
    $f_name = strSan($firstname); 
    $s_name = strSan($lastname); 
    $email = emailSan($email); 
    $password = strSan($password); 
    $address = strSan($address); 
    $type = strSan($type); 
    $phone = intSan($phone); 
    $birthday = intSan($birthday); 

    if(!requiredVal($f_name)):
        $errors[] = "please write your first name";
    elseif(!minVal($f_name , 3)):
            $errors[] = "first name must be atleast 3 chars";
    endif;

    if(!requiredVal($s_name)):
        $errors[] = "please write your first name";
    elseif(!minVal($s_name , 3)):
            $errors[] = "first name must be atleast 3 chars";
    endif;

    if(!requiredVal($email)):
        $errors[] = "email must be not empty";
    elseif(!emailVal($email)):
        $errors[] = "write correct email please";
    endif;

    if(requiredVal($password)):
        if(!minVal($password , 8)):
            $errors[] = "password must be atleast 8 chars or numbers";
        endif;
    endif;

    if(!requiredVal($address)):
        $errors[] = "address must be not empty";
    elseif(!maxVal($address , 30)):
        $errors[] = "quantity must be maxmuim 12 chars";
    endif;

    if(!requiredVal($type)):
        $errors[] = "type must be not empty";
    endif;

    if(!requiredVal($phone)):
        $errors[] = "phone must be not empty";
    elseif(!minVal($phone , 11)):
        $errors[] = "phone must be atleast 11 chars";
    elseif(!maxVal($phone , 11)):
        $errors[] = "phone must be maxmuim 11 chars";
    endif;

    if(!requiredVal($birthday)):
        $errors[] = "birthday must be not empty";
    endif;

   
    $password = hashVal($password);


    if(empty($errors)):

        $result = db_get_row("users","`id_user`= '$id'");
       
        if( $result):
            $field['first_name'] = $f_name;
            $field['last_name'] = $s_name;
            if( $password != ''):
                $field['password'] = $password;
            endif;
            $field['email'] = $email;
            $field['address'] = $address;
            $field['phone'] = $phone ;
            $field['type'] = $type ;
            $field['birthday'] = $birthday ;
    
        if(UpdateTable("users",$field,"`id_user`= '$id'")):
            setSession("success","you Updated User successfully");
        else:
            setSession("errors",["you have error try again"]);
        endif;
        else:
            setSession("errors",["you id not exists"]);
        endif;
        redirect("pages/users/view");
    else:
        setSession("errors",$errors);
        setSession("id",$id);
        redirect("pages/users/edit");
    endif;


}
