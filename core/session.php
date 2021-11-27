<?php 



// Set Session
function setSession($key, $val){
    if (!isset($_SESSION[$key])) {
        $_SESSION[$key] = $val;
    }
}
// Get Session
function getSession($key){
    if(isset($_SESSION[$key])){
        return $_SESSION[$key];
    }
    return null;
}

// Flash Session
function flashSession($key){
    $val='';
    if (isset($_SESSION[$key])) {
        $val = $_SESSION[$key];
        removeSession($key);
    }
    
    echo $val;
}

// Remove Session
function removeSession($key){
    unset($_SESSION[$key]);
}

// Destroy Session
function destroySession(){
    if(session_status() == PHP_SESSION_ACTIVE){
        unset($_SESSION);
        session_destroy();
    }
}



// Session Error
function getErrors(){
    $val = [];
    if(isset($_SESSION['errors'])){
        $val  = $_SESSION['errors'];
        removeSession('errors');
    }

    return $val;
}


// Session succcess
function succcessSession($msg)
{   
    $_SESSION['succcess'] = $msg;
    $succcess = $_SESSION['succcess'];
    unset($_SESSION['succcess']);
    return $succcess;
}


