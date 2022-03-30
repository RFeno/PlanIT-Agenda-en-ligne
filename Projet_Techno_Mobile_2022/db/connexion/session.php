<?php

function isConnected(){
    session_start();
    if(!isset($_SESSION['mail'])) {
        header("Location: app/pages/home.html");
    } else {
        header("Location: app/pages/userhome.php");
    }
}

function disconnect() {
    session_start();
    session_destroy();
    header("Location: ../../index.php");
}

?>