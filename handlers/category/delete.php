<?php

require_once "../../core/config.php";
getFile(HANDELER_FOLDER . "database");
getFile(HANDELER_FOLDER . "validation");
getFile(HANDELER_FOLDER . "session");
getFile(HANDELER_FOLDER . "requests");



if(isset($_GET['id']) && getMethod()){

    $id = intSan($_GET['id']);

    $result = db_get_row("sections","`id_section`= '$id'");
    if( $result):
       if(db_delete("sections","`id_section`= '$id'")):
        setSession("success","you delete category successfully");
       else:
        setSession("errors",["you have error try again"]);
       endif;
    else:
        setSession("errors",["you id not exists"]);
    endif;
    redirect("pages/category/view");
}