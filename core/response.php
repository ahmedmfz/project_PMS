<?php


function redirect($url=''){
    header("location:".URL.$url.".php");
    exit;
    die;
}


function redirectAfter($url,$period)
{
    header("refresh:".$period.";url=" . URL.$url.".php");
    exit();
    die;
}

// dire of file 
