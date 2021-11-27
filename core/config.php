<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pms";

$connection = mysqli_connect($servername,$username,$password,$dbname);

if(!$connection){
    echo "error in connection" . mysqli_connect_error();
}


// define base url 
define("URL","http://127.0.0.1/newproject/");
define("FOLDER_PATH","");
define("PREV_FOLDER","../");
define("HANDELER_FOLDER","../../core/");
define("FILE_DIRE",__DIR__);


// helper functions 
function url($url=''){
    echo URL . $url.".php";
}

function full_url($url=''){
    echo URL . $url;
}

function getFile($path){
    require_once $path .".php";
}

// for count 
function iteration(){
    static $i=1;
    echo $i;
    $i++;
}

function redirect($url=''){
    header("location:".URL.$url.".php");
    exit;
    die;
}


