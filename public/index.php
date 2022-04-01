<?php

  require_once '../vendor/autoload.php';

  require_once 'db/connexion/session.php';
  $isConnected = isConnected();

  $router = new AltoRouter();

  $router->map('GET', '/projet/userhome', 'userhome', 'userhome');
  $router->map('GET', '/projet/home', 'home', 'home');

  $router->map('GET', '/projet/connexion', 'connexion', 'connexion');
  $router->map('GET', '/projet/inscription', 'inscription', 'inscription');
  $router->map('GET', '/projet/deconnexion', 'logout', 'logout');

  $match = $router->match();
  
  if (!empty($match)) {
    // require_once '../app/templates/navbar.php';

    require_once "../app/pages/{$match['target']}.php";
    
  } else {
    header('location: /projet/home');
  }

  
?>
