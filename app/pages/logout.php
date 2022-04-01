<?php
    disconnect();
    header('location: ' . $router->generate('home'));
?>