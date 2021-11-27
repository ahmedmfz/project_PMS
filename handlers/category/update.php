<?php

require_once "../../core/config.php";
getFile(HANDELER_FOLDER . "database");
getFile(HANDELER_FOLDER . "validation");
getFile(HANDELER_FOLDER . "session");
getFile(HANDELER_FOLDER . "requests");


$errors = [];

if(isset($_GET['id']) && postMethod()){

    $id = intSan($_GET['id']);
    $name = strSan($_POST['name']);
    $description = strSan($_POST['description']);
    
    //validate input
    if(!requiredVal($name)):
        $errors[] = "Name must not empty";
    elseif(!minVal($name , 3)):
        $errors[] = "Name must be at least 3 chars";
    endif;
   
    if(empty($errors)):

        $result = db_get_row("sections","`id_section`= '$id'");
        if( $result):
            $field['name_section'] = $name;
            $field['description_section'] = $description;
        if(UpdateTable("sections",$field,"`id_section`= '$id'")):
            setSession("success","you Updated category successfully");
        else:
            setSession("errors",["you have error try again"]);
        endif;
        else:
            setSession("errors",["you id not exists"]);
        endif;
        redirect("pages/category/view");
    else:
        setSession("errors",$errors);
        setSession('name',$name);
        setSession('description',$description);
        setSession('id',$id);
        redirect("pages/category/edit");
    endif;
    
}