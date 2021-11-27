<?php

function postMethod(){

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        
        return true;
    }
    return false;
}

function getMethod(){

    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        
        return true;
    }
    return false;
}



function data(){

    if(getMethod()){
        return $_GET;
    }

    if(postMethod()){
        return $_POST;
    }
    return false;
}

function dd($data){
    echo "<pre>";
    print_r($data);
    echo "</pre>";
    die();
    exit();
}


function getUrl(){

    echo "<pre>";
    print_r($_SERVER['REQUEST_SCHEME']."://".$_SERVER['SERVER_NAME']);
    echo "</pre>";
}


// getUrl();
//HTTP_HOST
//SERVER_NAME
//PHP_SELF
//SERVER_PROTOCOL
