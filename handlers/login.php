<?php

require_once "../core/config.php";
getFile(PREV_FOLDER . "core/database");
getFile(PREV_FOLDER . "core/validation");
getFile(PREV_FOLDER . "core/session");
getFile(PREV_FOLDER . "core/requests");

$errors = ['email'=>'','password'=>''];

if (isset($_POST["login"]) && postMethod()) {

    $email = emailSan($_POST['email']);
    $password = strSan($_POST['password']);

    //validate input
    if (!requiredVal($email)) :
        $errors['email'] = "email must not empty";
    elseif (!emailVal($email)) :
        $errors['email'] = "please write correct email";
    endif;

    if (!requiredVal($password)) :
        $errors['password'] = "password must not empty";
    elseif (!minVal($password, 8)) :
        $errors['password'] = "password must be at least 8 chars or numbers";
    endif;

    if(valuesempty($errors)):
         // check if user is exist or not 
         $row = db_get_row("users"," `email` = '$email'");

         if($row){
             $check_password = password_verify($password , $row['password']);
             if( $check_password){
                 setSession('user',[
                     'user_name'=>$row['first_name'] ." ". $row['last_name'],
                     'user_email'=>$row['email'],
                     'user_type'=>$row['type'],
                 ]);
                 redirect("index");
             }else{
             setSession('errors',['email or passsword not correct']);
             }
         }else{
             setSession('errors',['email or passsword not correct']);  
         }
     else:
         // define errors
         setSession('errors',$errors);
    endif;
    redirect("login");

}