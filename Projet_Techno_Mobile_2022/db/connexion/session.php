<?php

function isConnected(){
    if(!isset($_SESSION['firstname'])) {
        session_start();
        header("Location: app/pages/home.html");
    } else {
        // TODO Afficher la page de l'utilisateur
    }
}

function disconnect() {
    // session_start();
    session_destroy() ;

    header("Location: ../../index.php");
}

?>