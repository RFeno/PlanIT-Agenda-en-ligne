<!doctype html>
<html lang="fr" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="assets/css/animate.css" />
    <link rel="stylesheet" href="assets/css/tailwind.css" />
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon"/>
    <script src="assets/js/wow.min.js"></script>
    <title>PlanIT - Accueil</title>
</head>
<body class="bg-blue-500">
    <!--nav bar début -->
    <div id="positionNavBar" class="ud-header bg-transparent absolute top-0 
        left-0 z-40 w-full flex items-center">
        <!-- debut cliquables -->
        <div class="container">
            <!-- debut container-->
            <div class="flex -mx-4 items-center justify-between relative">
                <!--debut logo -->
                <div id="logoImage" class="px-4 w-60 max-w-full">
                            <a href="#" class="navbar-logo w-full block py-5">
                                <img src="images/logo.png" alt="logo de plan it" class="w-9/12 header-logo"/>
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
                                        <a href="#" class=" ud-menu-scroll text-base text-dark   lg:text-white
                                            lg:group-hover:opacity-70  lg:group-hover:text-white
                                            group-hover:text-primary py-2  lg:py-6 lg:inline-flex lg:px-0
                                            flex mx-8 lg:mr-0">
                                            Accueil
                                        </a>
                                    </li>
                                    <!-- Contact -->
                                    <li class="relative group">
                                        <a href="#contact" class="ud-menu-scroll text-base text-dark  lg:text-white
                                            lg:group-hover:opacity-70 lg:group-hover:text-white
                                            group-hover:text-primary py-2 lg:py-6 lg:inline-flex lg:px-0
                                            flex mx-8 lg:mr-0 lg:ml-7 xl:ml-12">
                                            Contact
                                        </a>
                                    </li>
                                    <!-- A propos -->
                                    <li class="relative group">
                                        <a href="#about" class="ud-menu-scroll text-base 
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

  <!-- debut main -->
  <div class="w-full mt-50 relative  z-10  inset-x-0 p-2 transition transform origin-top-right md:hidden">
         
    </div>

      <section class="mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
        <div class="sm:text-center lg:text-left">
          <h2 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
            <span class="block xl:inline"><br><br>Agenda facile = </span>
            <span class="block text-white xl:inline">vie facile</span>
          </h2>
          <p class="mt-3 text-base text-blue-50 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">Inscrivez-vous pour que vos clients puissent prendre un rendez-vous avec vous directement via PlanIT !</p>
          <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
            <div class="rounded-md shadow">
              <a href="inscription.php" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-blue-800 hover:bg-white hover:text-blue-800 md:py-4 md:text-lg md:px-10"> S'inscrire </a>
            </div>
            <div class="mt-3 sm:mt-0 sm:ml-3">
              <a href="connexion.php" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-blue-700 bg-blue-100 hover:bg-blue-300 hover:text-white md:py-4 md:text-lg md:px-10"> Se connecter </a>
            </div>
          </div>
        </div>
       </section>
    </div>
 
  <!-- fin main -->


     <!--les scripts -->

    <script src="assets/js/main.js"></script>
    <script>
      // ==== for menu scroll
      const pageLink = document.querySelectorAll(".ud-menu-scroll");

      pageLink.forEach((elem) => {
        elem.addEventListener("click", (e) => {
          e.preventDefault();
          document.querySelector(elem.getAttribute("href")).scrollIntoView({
            behavior: "smooth",
            offsetTop: 1 - 60,
          });
        });
      });

      // section menu active
      function onScroll(event) {
        const sections = document.querySelectorAll(".ud-menu-scroll");
        const scrollPos =
          window.pageYOffset ||
          document.documentElement.scrollTop ||
          document.body.scrollTop;

        for (let i = 0; i < sections.length; i++) {
          const currLink = sections[i];
          const val = currLink.getAttribute("href");
          const refElement = document.querySelector(val);
          const scrollTopMinus = scrollPos + 73;
          if (
            refElement.offsetTop <= scrollTopMinus &&
            refElement.offsetTop + refElement.offsetHeight > scrollTopMinus
          ) {
            document
              .querySelector(".ud-menu-scroll")
              .classList.remove("active");
            currLink.classList.add("active");
          } else {
            currLink.classList.remove("active");
          }
        }
      }
      window.document.addEventListener("scroll", onScroll);
    </script>

  
</body>
</html>