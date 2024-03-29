<?php
  if (isConnected()) {
    header('location: ' . $router->generate('userhome'));
  }
?>

<!DOCTYPE html>
<html lang="fr" class="h-full">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="stylesheet" href="/assets/css/animate.css" />
        <link rel="stylesheet" href="/assets/css/tailwind.css" />
        <link rel="shortcut icon" href="/assets/images/logo.png" type="image/x-icon"/>
        <script src="/assets/js/wow.min.js"></script>
        <script src="/assets/jquery/jquery.js"></script>
        <script src="/assets/js/main.js"></script>
        <title>PlanIT</title>
    </head>
    <body class="bg-blue-500 h-full">
        <!--nav bar début -->
        <div style="top:0; position:fixed" id="positionNavBar" class="bg-blue-900 ud-header  absolute top-0 
            left-0 z-40 w-full flex items-center">
            <!-- debut cliquables -->
            <div class="container">
                <!-- debut container-->
                <div class="flex -mx-4 items-center justify-between relative">
                    <!--debut logo -->
                    <div id="logoImage" class="px-4 w-60 max-w-full">
                                <a href="#" class="navbar-logo w-full block">
                                    <img src="/images/logoInverse.png" alt="logo de plan it" class="w-8/12 header-logo"/>
                                </a>
                    </div>
                    <!--fin logo -->
                    <div class="flex px-4 justify-between items-center w-full">        
                        <div>
                            <button id="navbarToggler" class="block absolute right-4 top-1/2 -translate-y-1/2
                                    lg:hidden focus:ring-2 ring-primary px-3 py-[6px] rounded-lg">

                                    <span class="relative w-[30px] h-[2px] my-[6px] block bg-white"></span>
                                    <span class="relative w-[30px] h-[2px] my-[6px] block bg-white"></span>
                                    <span class="relative w-[30px] h-[2px] my-[6px] block bg-white"></span>

                            </button>
                            
                                <!--debut nav -->
                                <nav id="navbarCollapse" class="absolute
                                        py-5 lg:py-0 lg:px-4 xl:px-6
                                        bg-white lg:bg-transparent shadow-lg
                                        rounded-lg max-w-[250px] w-full
                                        lg:max-w-full lg:w-full right-4
                                        top-full hidden lg:block lg:static lg:shadow-none">
                                    <!-- dans la nav -->
                                    <ul class="blcok lg:flex">
                                        <!-- Accueil -->
                                        <li class="relative group">
                                            <a href="#" class="text-base text-dark   lg:text-white
                                                lg:group-hover:opacity-70  lg:group-hover:text-white
                                                group-hover:text-primary py-2  lg:py-6 lg:inline-flex lg:px-0
                                                flex mx-8 lg:mr-0">
                                                Accueil
                                            </a>
                                        </li>
                                        <!-- Contact -->
                                        <li class="relative group">
                                            <a href="#contact" class="text-base text-dark  lg:text-white
                                                lg:group-hover:opacity-70 lg:group-hover:text-white
                                                group-hover:text-primary py-2 lg:py-6 lg:inline-flex lg:px-0
                                                flex mx-8 lg:mr-0 lg:ml-7 xl:ml-12">
                                                Contact
                                            </a>
                                        </li>
                                        <!-- A propos -->
                                        <li class="relative group">
                                            <a href="#about" class="text-base 
                                                text-dark lg:text-white
                                                lg:group-hover:opacity-70 lg:group-hover:text-white
                                                group-hover:text-primary py-2
                                                lg:py-6 lg:inline-flex lg:px-0
                                                flex mx-8 lg:mr-0 lg:ml-7 xl:ml-12" >
                                                A propos
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <!--fin nav -->
                        
                            <!-- se connecter & s'inscrire -->
                            <div class="sm:flex justify-end hidden pr-16 lg:pr-0">
                                <a href="<?= $router->generate('inscription') ?>" class="text-base font-medium
                                text-white hover:opacity-70 py-3 px-7 loginBtn">
                                Inscription
                                </a>
                                <a href="<?= $router->generate('connexion') ?>" class="text-base font-medium
                                text-white bg-white bg-opacity-20 rounded-lg
                                py-3 px-7 hover:bg-opacity-50 hover:text-dark">
                                Connexion
                                </a>
                            </div>
                    </div>
                </div>
                <!-- fin container-->
          </div>
            <!-- fin cliquables -->
        </div>
      <!--nav bar fin -->

      <!-- debut main -->
      <div class="w-full mt-50 relative  z-10  inset-x-0 p-2 transition transform origin-top-right md:hidden">
            
        </div>
          <section class="mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
            <div class="sm:text-center lg:text-left mt-4">
              <h2 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
                <span class="block xl:inline"><br>Agenda en ligne = </span>
                <span class="block text-white xl:inline">vie facile</span>
              </h2>
              <p class="mt-3 text-base text-blue-50 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">Inscrivez-vous pour que vos clients puissent prendre un rendez-vous avec vous directement via PlanIT !</p>
              <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
                <div class="rounded-md shadow">
                  <a href="<?= $router->generate('inscription') ?>" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-blue-800 hover:bg-white hover:text-blue-800 md:py-4 md:text-lg md:px-10"> S'inscrire </a>
                </div>
                <div class="mt-3 sm:mt-0 sm:ml-3">
                  <a href="<?= $router->generate('connexion') ?>" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-blue-700 bg-blue-100 hover:bg-blue-300 hover:text-white md:py-4 md:text-lg md:px-10"> Se connecter </a>
                </div>
              </div>
            </div>
          </section>
        </body>
    
      <!-- fin main -->

      <!-- debut a propos-->
    <div id="about"></div>
    <section  class="py-12 bg-white mt-5">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div class="lg:text-center">
            <h2 class="text-base text-blue-600 font-semibold tracking-wide uppercase">A propos</h2>
            <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">En savoir un peu plus</p>
            <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">Notre but est tout simplement de répondre à un besoin, grâce notre expérience vie, nous avons pu remarquer qu'il y avait beaucoup de professionels qui avaient du mal à gérer correctement leur agenda.</p>
          </div>
      
          <div class="mt-10">
            <dl class="space-y-10 md:space-y-0 md:grid md:grid-cols-2 md:gap-x-8 md:gap-y-10">
              <div class="relative">
                <dt>
                  <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-blue-500 text-white">
                    <!-- Heroicon name: outline/globe-alt -->
                  <img src="/images/entreprise.png">
                  </div>
                  <p class="ml-16 text-lg leading-6 font-medium text-blue-900">Les entreprises</p>
                </dt>
                <dd class="mt-2 ml-16 text-base text-gray-500">En tant qu'entreprise vous pouvez vous inscrire et avoir des employés qui gèrent leur agenda ou celui de l'entreprise</dd>
              </div>
      
              <div class="relative">
                <dt>
                  <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-blue-500 text-white">
                    <!-- Heroicon name: outline/scale -->
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" />
                    </svg>
                  </div>
                  <p class="ml-16 text-lg leading-6 font-medium text-blue-900">Les employés</p>
                </dt>
                <dd class="mt-2 ml-16 text-base text-gray-500">Si vous êtes employé ou indépendant, vous pouvez avoir un compte employé pour gérer votre agenda.</dd>
              </div>
      
              <div class="relative">
                <dt>
                  <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-blue-500 text-white">
                    <!-- Heroicon name: outline/lightning-bolt -->
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                  </div>
                  <p class="ml-16 text-lg leading-6 font-medium text-blue-900">Les clients</p>
                </dt>
                <dd class="mt-2 ml-16 text-base text-gray-500">Inscrivez-vous pour pouvoir prendre des rendez-vous avec un employé en particulier,une entreprise ou encore un indépendant.</dd>
              </div>
      
              <div class="relative">
                <dt>
                  <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-blue-500 text-white">
                    <!-- Heroicon name: outline/annotation -->
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                    </svg>
                  </div>
                  <p class="ml-16 text-lg leading-6 font-medium text-blue-900">les créateurs</p>
                </dt>
                <dd class="mt-2 ml-16 text-base text-gray-500">Nous sommes 2 : Adamaheto Saviour & Guillaume Victor, étudiants en informatique de gestion à la helha, nous avons décidé de développer un projet commun qui sera utile pour tous.</dd>
              </div>
            </dl>
          </div>
        </div>
      </div>
    </section>
      <!-- fin a propos-->

      <!--debut contact-->
      <section id="contact" class="bg-blue-50 max-w-lg mx-auto p-8 md:p-12 my-10 rounded-lg shadow-2xl">
        <h4 class="font-bold text-2xl">Contact</h4>
        <section class="mt-10">
            <form class="flex flex-col" method="POST" action="#">
                <div id="nomprenom" class="flex flex-row">
                    <div class="mb-4 pt-1 rounded bg-gray-100 mr-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="name">Nom</label>
                        <input type="text" id="name" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-blue-500 transition duration-500 px-3 pb-3">
                    </div>
                    <div class=" ml-4 mb-4 pt-1 rounded bg-gray-100">
                        <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="firstname">Prenom</label>
                        <input type="text" id="firstname" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-blue-500 transition duration-500 px-3 pb-3">
                    </div>
                </div>
                <div class="mb-4 pt-1 rounded bg-gray-100">
                    <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="email">Adresse email</label>
                    <input type="text" id="email" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-blue-500 transition duration-500 px-3 pb-3">
                </div>
                <div class="mb-4 pt-1 rounded bg-gray-100">
                    <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="password">Votre message</label>
                    <textarea type="text" id="password" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-blue-500 transition duration-500 px-3 pb-3"></textarea>
                </div>
                    <button class="bg-blue-200 hover:bg-blue-700 text-white font-bold py-2 rounded shadow-lg hover:shadow-xl" type="submit">Envoyer</button>
                  
            </form>
        </section>
    </section>
     <!-- debut footer-->
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
    </div>
    </body>
</html>