<?php

function isConnected(){
    if(session_status() == PHP_SESSION_NONE){
        session_start();
    }
    
    if(!isset($_SESSION['mail'])) {
        return false;
    } else {
        return true;
    }
}

function disconnect() {
    // session_start();
    session_destroy();
}

?>