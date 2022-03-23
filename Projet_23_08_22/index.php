<!doctype html>
<html lang="fr" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="assets/css/animate.css" />
    <link rel="stylesheet" href="assets/css/tailwind.css" />
    <!-- ==== WOW JS ==== -->
    <script src="assets/js/wow.min.js"></script>
    <title>Bienvenue</title>
</head>
<body class="bg-blue-500">
 
   
    <!--nav bar début -->
    <div id="positionNavBar" class="ud-header bg-transparent absolute top-0 
        left-0 z-40 w-full flex items center">
        <!-- debut cliquables -->
        <div class="container">
            <!-- debut container-->
            <div class="flex -mx-4 items-center justify-between relative">
                <!--debut logo -->
                <div id="logoImage" class="px-4 w-60 max-w-full">
                            <a href="#" class="navbar-logo w-full block py-5">
                                <img src="images/logo.png" alt="logo de plan it" class="w-full header-logo"/>
                            </a>
                </div>
                <!--fin logo -->
                <div class="flex px-4 justify-between items-center w-full">        
                    <div>
                        <button id="navbarToggler" class="block absolute right-4 top-1/2 -translate-y-1/2
                                lg:hidden focus:ring-2 ring-primary px-3 py-[6px] rounded-lg">

                                <span
                                class="relative w-[30px] h-[2px] my-[6px] block bg-white"></span>
                                <span class="relative w-[30px] h-[2px] my-[6px] block bg-white"></span>
                                <span class="relative w-[30px] h-[2px] my-[6px] block bg-white">
                                </span>

                            </button>
                        
                            <!--debut nav -->
                            <nav id="navbarCollapse" class="absolute
                                    py-5
                                    lg:py-0 lg:px-4
                                    xl:px-6
                                    bg-white
                                    lg:bg-transparent
                                    shadow-lg
                                    rounded-lg
                                    max-w-[250px]
                                    w-full
                                    lg:max-w-full lg:w-full
                                    right-4
                                    top-full
                                    hidden
                                    lg:block lg:static lg:shadow-none">
                                <!-- dans la nav -->
                                <ul class="blcok lg:flex">
                                    <!-- Accueil -->
                                    <li class="relative group">
                                        <a href="#" class=" ud-menu-scroll text-base text-dark   lg:text-white
                                            lg:group-hover:opacity-70  lg:group-hover:text-white
                                            group-hover:text-primary py-2  lg:py-6 lg:inline-flex lg:px-0
                                            flex mx-8 lg:mr-0">
                                            Accueil
                                        </a>
                                    </li>
                                    <!-- Contact -->
                                    <li class="relative group">
                                        <a href="#" class="ud-menu-scroll text-base text-dark  lg:text-white
                                            lg:group-hover:opacity-70 lg:group-hover:text-white
                                            group-hover:text-primary py-2 lg:py-6 lg:inline-flex lg:px-0
                                            flex mx-8 lg:mr-0 lg:ml-7 xl:ml-12">
                                            Contact
                                        </a>
                                    </li>
                                    <!-- A propos -->
                                    <li class="relative group">
                                        <a href="#" class="ud-menu-scroll text-base 
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
                        <!--fin nav -->
                    
                        <!-- se connecter & s'inscrire -->
                        <div class="sm:flex justify-end hidden pr-16 lg:pr-0">
                            <a href="inscription.php" class="text-base font-medium
                            text-white hover:opacity-70 py-3 px-7 loginBtn ">
                            S'inscrire
                            </a>
                            <a href="connexion.php" class="text-base font-medium
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

  
</body>
</html>