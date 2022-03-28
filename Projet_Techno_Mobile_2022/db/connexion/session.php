<?php

function isConnected(){
    if(!isset($_SESSION['mail'])) {
        header("Location: app/pages/home.html");
    } else {
        header("Location: app/pages/userhome.php");
    }
}

function disconnect() {
    // session_start();
    // header("Location: ../../index.php");
    session_destroy() ;
}

?>