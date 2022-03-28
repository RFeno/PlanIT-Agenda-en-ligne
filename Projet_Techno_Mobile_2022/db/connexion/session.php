<?php

function isConnected(){
    session_start();
    if(!isset($_SESSION['firstname'])) {
        // header("Location: ../../index.php"); // TODO Mettre la page de l'utilisateur
    } else {
        disconnect();
    }
}

function disconnect() {
    // session_start();
    session_destroy() ;

    header("Location: ../../index.php");
}

?>