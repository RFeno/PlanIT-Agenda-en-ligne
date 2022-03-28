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
    // header("Location: ../../index.php");
    session_destroy() ;
}

?>