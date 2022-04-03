<?php

  require_once '../vendor/autoload.php';

  require_once 'db/connexion/session.php';
  $isConnected = isConnected();

  $router = new AltoRouter();

  $router->map('GET', '/userhome', 'userhome', 'userhome');
  $router->map('GET', '/home', 'home', 'home');

  $router->map('GET', '/connexion', 'connexion', 'connexion');
  $router->map('GET', '/inscription', 'inscription', 'inscription');
  $router->map('GET', '/deconnexion', 'logout', 'logout');

  $match = $router->match();
  
  if (!empty($match)) {
    // require_once '../app/templates/navbar.php';

    require_once "../app/pages/{$match['target']}.php";
    
  } else {
    header('location: /home');
  }

  
?>
