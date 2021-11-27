<?php

require_once "../../core/config.php";
getFile(HANDELER_FOLDER . "database");
getFile(HANDELER_FOLDER . "validation");
getFile(HANDELER_FOLDER . "session");
getFile(HANDELER_FOLDER . "requests");

if(isset($_GET['id']) && getMethod()){

    $id = intSan($_GET['id']);

    $result = db_get_row("users","`id_user`= '$id'");
    if( $result):
       if(db_delete("users","`id_user`= '$id'")):
        setSession("success","you delete User successfully");
       else:
        setSession("errors",["you have error try again"]);
       endif;
    else:
        setSession("errors",["you id not exists"]);
    endif;
    redirect("pages/users/view");
}