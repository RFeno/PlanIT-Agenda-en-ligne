<!DOCTYPE html>
<html lang="fr" class="h-full">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="stylesheet" href="/assets/css/animate.css" />
        <link rel="stylesheet" href="/assets/css/tailwind.css" />
        <link rel="shortcut icon" href="/assets/images/logo.png" type="image/x-icon"/>
        <script src="/assets/jquery/jquery.js"></script>
        <title>PlanIT</title>
    </head>
    <body class="bg-blue-500 h-full">
      <!-- debut nav bar -->

      <nav class="bg-blue-900">
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
                <img class="h-8 w-8 rounded-full " src="../images/logoInverse.png" alt="logo avatar"/>
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
                   <a href="" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-2">Se déconnecter</a>
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

      <!-- debut entreprise -->
      <div class="w-3/4 mx-auto">
        <div class="px-4">
          <h3 class="mt-8 text-lg font-medium leading-6 text-white">Création d'entreprise</h3>
          <p class="mt-1 mb-5 text-sm text-white">formulaire pour ajouter votre entreprise au site</p>
        </div>

        <form action="#" method="POST">
          <div class="shadow sm:rounded-md sm:overflow-hidden">
            <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
              <label for="company" class="block text-sm font-medium text-blue-700"> Nom entreprise </label>
                <div class="mt-1 flex rounded-md shadow-sm">
                  <input type="text" name="company" id="company" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="PlanIT">
                </div>

              <div>
                <label for="about" class="block text-sm font-medium text-blue-700"> A propos </label>
                  <p class="mt-2 text-sm text-blue-500">Brève description de votre entreprise</p>
                  <div class="mt-1">
                    <textarea id="about" name="about" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md" placeholder="PlanIT une entreprise de gestion d'agenda en ligne !"></textarea>
                  </div>
              </div>

              <div>
              <label class="block text-sm font-medium text-blue-700"> Adresse </label>
                <div class="mt-1 flex rounded-md shadow-sm">
                  <input type="text" name="adresse" id="adresse" class="focus:ring-blue-500 focus:border-blue-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="Rue de la vesdre, 18"/>
                </div>
              </div>

              <fieldset>
                <div>
                  <legend class="text-blue-900 font-medium ">Type d'entreprise</legend>
                  <p class="text-sm text-blue-500">Choissisez le type d'entreprise pour savoir si un employé peut demander à rejoindre votre entreprise</p>
                </div>
                <div class="mt-4 space-y-4">
                  <div class="flex items-center">
                    <input id="independant" name="type-entreprise" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-blue-300">
                    <label for="independant" class="ml-3 block text-sm font-medium text-blue-700"> Indépendant </label>
                  </div>
                  <div class="flex items-center">
                    <input id="entreprise" name="type-entreprise" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-blue-300">
                    <label for="entreprise" class="ml-3 block text-sm font-medium text-blue-700"> Entreprise </label>
                  </div>
                </div>
              </fieldset>

              <div class="bg-blue-50 px-4 py-3 text-center sm:px-6">
                <button type="submit" class=" inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">Créer l'entreprise</button>
              </div>
                    </div>
                  </div>
                </form>
              </div>

        <!--fin entreprise -->

        <!--debut options -->
        <div class="w-3/4 mx-auto mb-5 mt-5">
          <div class="px-4">
            <h3 class="mt-8 text-lg font-medium leading-6 text-white">Notifications</h3>
            <p class="mt-1 mb-5 text-sm text-white">paramétrer les notifications d'entreprise</p>
          </div>
          <form action="#" method="POST">
            <div class="shadow overflow-hidden sm:rounded-md">
              <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                <fieldset>
                  <legend class="text-base font-medium text-blue-900">Par mail</legend>
                  <div class="mt-4 space-y-4">
                    <div class="flex items-start">
                      <div class="flex items-center h-5">
                        <input id="comments" name="comments" type="checkbox" class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300 rounded">
                      </div>
                      <div class="ml-3 text-sm">
                        <label for="comments" class="font-medium text-blue-700">Client</label>
                        <p class="text-gray-500">Soyez notifié quand un client demande un rendez-vous</p>
                      </div>
                    </div>
                    <div class="flex items-start">
                      <div class="flex items-center h-5">
                        <input id="candidates" name="candidates" type="checkbox" class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300 rounded">
                      </div>
                      <div class="ml-3 text-sm">
                        <label for="candidates" class="font-medium text-blue-700">Employé</label>
                        <p class="text-gray-500">Soyez notifié quand un utilisateur/employé demande à rejoindre votre entreprise</p>
                      </div>
                    </div>
                    <div class="flex items-start">
                      <div class="flex items-center h-5">
                        <input id="offers" name="offers" type="checkbox" class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300 rounded">
                      </div>
                      <div class="ml-3 text-sm">
                        <label for="offers" class="font-medium text-blue-700">Offres</label>
                        <p class="text-gray-500">Recevez un mail quand</p>
                      </div>
                    </div>
                  </div>
                </fieldset>
              </div>
              <div class="px-4 py-3 bg-blue-50 text-center sm:px-6">
                <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">Sauvegarder</button>
              </div>
            </div>
          </form>
      </div>
      
      
      <footer class="sticky top-[100vh] w-full bg-blue-900 absolute bottom-0 p-4  md:items-center md:justify-between md:p-6">
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
    </body>
</html>