<?php
  session_start();
  if (!isset($_SESSION['mail'])) {
    header("Location: home.html");
  }
?>

<!doctype html>
<html lang="fr" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="shortcut icon" href="app/images/logo.png" type="image/x-icon"/>
    <title>PlanIT - Accueil</title>
</head>
<body class="bg-blue-500">
  <!-- debut nav bar -->

  <nav class="bg-gray-800">
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
      <div class="relative flex items-center justify-between h-16">
        <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
          <!-- Mobile menu button-->
          <button type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
          </button>
        </div>
        <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
          <div class="flex-shrink-0 flex items-center">
            <img class="h-8 w-8 rounded-full " src="../images/logoInverse.png" alt="logo avatar">
          </div>
          <div class="hidden sm:block sm:ml-6">
            <div class="flex space-x-4">
              <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
              <a href="#" class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium" aria-current="page">Tableau de bord</a>
  
              <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Section entreprise</a>
  
              <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Section employé</a>
  
              <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Section client</a>
            </div>
          </div>
        </div>
        <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
          <button type="button" class="bg-gray-800 p-1 rounded-full text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white">
            <span class="sr-only">View notifications</span>
            <!-- svg notif Heroicon name: outline/bell -->
            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
            </svg>
          </button>
  
          <!-- Profile dropdown -->
          <div class="ml-3 relative">
            <div>
              <button type="button" class="bg-gray-800 flex text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                <span class="sr-only">Open user menu</span>
                <img class="h-8 w-8 rounded-full " src="../images/avatar.png" alt="logo avatar">
              </button>
            </div>
  
    
            <div class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
              <!-- Active: "bg-gray-100", Not Active: "" -->
              <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Profil</a>
              <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-1">Paramètres</a>
              <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-2">Se déconnecter</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  
    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="sm:hidden" id="mobile-menu">
      <div class="px-2 pt-2 pb-3 space-y-1">
        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
        <a href="#" class="bg-gray-900 text-white block px-3 py-2 rounded-md text-base font-medium" aria-current="page">Tableau de board</a>
  
        <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Entreprise</a>
  
        <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Employé</a>
  
        <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Client</a>
      </div>
    </div>
  </nav>
  <!-- fin nav bar-->

  <!-- debut section main-->
  <div class="bg-white">
    <div class="max-w-2xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
      <h2 class="sr-only">Products</h2>
  
      <div class="grid grid-cols-1 gap-y-10 sm:grid-cols-2 gap-x-6 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
        <a href="#" class="group">
          <div class="w-full aspect-w-1 aspect-h-1 bg-gray-200 rounded-lg overflow-hidden xl:aspect-w-7 xl:aspect-h-8">
            <img class="w-full h-full object-center object-cover group-hover:opacity-75" src="../images/avatar.png" alt="logo avatar">
          </div>
          <h3 class="mt-4 text-sm text-gray-700">Entreprise</h3>
          <p class="mt-1 text-lg font-medium text-gray-900">Voir la section</p>
        </a>
  
        <a href="#" class="group">
          <div class="w-full aspect-w-1 aspect-h-1 bg-gray-200 rounded-lg overflow-hidden xl:aspect-w-7 xl:aspect-h-8">
            <img class="w-full h-full object-center object-cover group-hover:opacity-75" src="../images/avatar.png" alt="logo avatar">
          </div>
          <h3 class="mt-4 text-sm text-gray-700">Employés</h3>
          <p class="mt-1 text-lg font-medium text-gray-900">Voir la section</p>
        </a>
  
        <a href="#" class="group">
          <div class="w-full aspect-w-1 aspect-h-1 bg-gray-200 rounded-lg overflow-hidden xl:aspect-w-7 xl:aspect-h-8">
            <img class="w-full h-full object-center object-cover group-hover:opacity-75" src="../images/avatar.png" alt="logo avatar">
          </div>
          <h3 class="mt-4 text-sm text-gray-700">Client</h3>
          <p class="mt-1 text-lg font-medium text-gray-900">Voir la section</p>
        </a>
  
        <a href="#" class="group">
          <div class="w-full aspect-w-1 aspect-h-1 bg-gray-200 rounded-lg overflow-hidden xl:aspect-w-7 xl:aspect-h-8">
            <img class="w-full h-full object-center object-cover group-hover:opacity-75" src="../images/avatar.png" alt="logo avatar">
          </div>
          <h3 class="mt-4 text-sm text-gray-700">euh</h3>
          <p class="mt-1 text-lg font-medium text-gray-900">Voir la section</p>
        </a>
      </div>
    </div>
  </div>
  <!-- fin section main-->
  
  <!-- debut footer-->
  <footer class=" aboslute bottom-0 p-4 rounded-lg shadow md:flex md:items-center md:justify-between md:p-6">
    <span class="text-sm text-blue-50 sm:text-center">© 2022 <a href="https://rfeno.fr" class="hover:underline">PlanIT™</a>. Tous les droits réservés.
    </span>
    <ul class="flex flex-wrap items-center mt-3 text-sm text-blue-50 sm:mt-0">
        <li>
            <a href="#about" class="mr-4 hover:underline md:mr-6 ">About</a>
        </li>

        <li>
            <a href="#contact" class="hover:underline">Contact</a>
        </li>
    </ul>
  </footer>
  <!--fin footer-->

</body>
</html>