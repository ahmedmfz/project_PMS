<?php 

if(!isset($_SESSION['user']['user_name'])){
    redirect("login");
    die;
    exit;
}