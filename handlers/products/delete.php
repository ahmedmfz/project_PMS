<?php

require_once "../../core/config.php";
getFile(HANDELER_FOLDER . "database");
getFile(HANDELER_FOLDER . "validation");
getFile(HANDELER_FOLDER . "session");
getFile(HANDELER_FOLDER . "requests");



if(isset($_GET['id']) && getMethod()){

    $id = intSan($_GET['id']);

    $result = db_get_row("products","`id_product`= '$id'");
    if( $result):
        if(file_exists(__DIR__."/../../files/".$result['image'])){
            unlink(__DIR__."/../../files/".$result['image']);
        }
       if(db_delete("products","`id_product`= '$id'")):
        setSession("success","you delete product successfully");
       else:
        setSession("errors",["you have error try again"]);
       endif;
    else:
        setSession("errors",["you id not exists"]);
    endif;
    redirect("pages/product/view");
}