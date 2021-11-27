<?php

require_once "../../core/config.php";
getFile(HANDELER_FOLDER . "database");
getFile(HANDELER_FOLDER . "validation");
getFile(HANDELER_FOLDER . "session");
getFile(HANDELER_FOLDER . "requests");


$errors = [];

if( isset($_POST["submit"]) && postMethod()){

    // dd(data());

    //sanitize input
    $name = strSan($_POST['name']);
    $description = strSan($_POST['description']);

    //validate input
    if(!requiredVal($name)):
        $errors[] = "Name must not empty";
    elseif(!minVal($name , 3)):
        $errors[] = "Name must be at least 3 chars";
    endif;

    if(requiredVal($description)):
        if(!minVal($name , 10)):
            $errors[] = "Description must be at least 10 chars";
        endif;
    endif;

    
    if(empty($errors)):
        $field['name_section'] = $name;
        $field['description_section'] = $description ;

        InsertInTable("sections",$field);
        setSession('success',"You Added Category Success");
        redirect("pages/category/add");
    else:
        setSession('errors',$errors);
        setSession('name',$name);
        setSession('description',$description);
        redirect("pages/category/add");
    endif;
}


