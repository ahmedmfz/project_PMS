<?php

require_once 'helpers.php';

//check empty input
function requiredVal($val)
{
    return isset($val) && !empty($val);
}

//check min length input
function minVal($val, $length)
{
    return strlen($val) >= $length;
}

//check max length input
function maxVal($val, $length)
{
    return strlen($val) <= $length;
}

//check email is email
function emailVal($val)
{
    if(!filter_var($val, FILTER_VALIDATE_EMAIL)):
        return false;
    endif;
    return true;
}

//check number is number
function numVal($val)
{
    return is_numeric($val);
}

//check string is string
function stringVal($val)
{
    return is_string($val);
}

//check santize string 
function strSan($val)
{
    return filter_var($val, FILTER_SANITIZE_STRING , FILTER_FLAG_ENCODE_HIGH);
}

//check santize int 
function intSan($val)
{
    return filter_var($val, FILTER_SANITIZE_NUMBER_INT);
}

//check santize float
function floatSan($val)
{
    return filter_var($val, FILTER_SANITIZE_NUMBER_FLOAT);
}

//check santize email
function emailSan($val)
{
    return filter_var($val, FILTER_SANITIZE_EMAIL);
}

//check password incraption 
function hashVal($val)
{
    return password_hash($val, PASSWORD_DEFAULT);
}

// check in logic
function bool_Val($val)
{
    return is_bool($val);
}

// check float number
function float_Val($val)
{
    return is_float($val);
}

// check integr number
function int_Val($val)
{
    return is_int($val);
}

//check image is uploaded
function checkUploadFile($filename)
{
    return isset($_FILES[$filename]);
}

//check value of assoiactive array
function valuesempty($arry){
    foreach( $arry as $key => $value){
        if($value != ''){
            return false;
        }
    }
    return true;
}

