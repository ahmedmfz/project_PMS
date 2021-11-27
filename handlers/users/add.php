<?php

require_once "../../core/config.php";
getFile(HANDELER_FOLDER . "database");
getFile(HANDELER_FOLDER . "validation");
getFile(HANDELER_FOLDER . "session");
getFile(HANDELER_FOLDER . "requests");


$errors = [];

if( isset($_POST["submit"]) && postMethod()){

   foreach($_POST as $key => $value){
       $$key = $value;
   }

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

    if(!requiredVal($password)):
        $errors[] = "password must be not empty";
    elseif(!minVal($password , 8)):
        $errors[] = "password must be atleast 8 chars or numbers";
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
        $field['first_name'] = $f_name;
        $field['last_name'] = $s_name;
        $field['password'] = $password;
        $field['email'] = $email;
        $field['address'] = $address;
        $field['phone'] = $phone ;
        $field['type'] = $type ;
        $field['birthday'] = $birthday ;

        InsertInTable("users",$field);
        setSession('success',"You Added User Success");
        redirect("pages/users/add");
    else:
        setSession('errors',$errors);
        setSession('f_name',$f_name);
        setSession('s_name',$s_name);
        setSession('password',$password);
        setSession('email',$email);
        setSession('address',$address);
        setSession('phone',$phone);
        setSession('type',$type);
        setSession('birthday',$birthday);
        redirect("pages/users/add");
    endif;


}
