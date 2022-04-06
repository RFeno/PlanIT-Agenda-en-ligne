<!DOCTYPE html>
<html lang="fr" class="h-full w-1/1 relative">
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

    <body class=" bg-blue-500 min-h-screen pt-12 md:pt-20 pb-6 px-2 md:px-0">
        <section id="formulaire" class="bg-blue-50 max-w-lg mx-auto p-8 md:p-12 my-10 rounded-lg shadow-2xl">
            <h4 class="font-bold text-2xl">Inscription</h4>
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
                        <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="password">Mot de passe</label>
                        <input type="password" id="password" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-blue-500 transition duration-500 px-3 pb-3">
                    </div>
                        <button class="bg-blue-200 hover:bg-blue-700 text-white font-bold py-2 rounded shadow-lg hover:shadow-xl" type="submit">S'inscrire</button>
                        <a href="<?= $router->generate('home') ?>" class=" mt-4 text-center bg-blue-200 hover:bg-blue-700 text-white font-bold py-2 rounded shadow-lg hover:shadow-xl">
                            <button type="button" value="click here">Retour à l'accueil</button>
                        </a>
                </form>
            </section>
        </section>

        <div class="max-w-lg mx-auto text-center mt-12 mb-6">
            <p class="text-white">Vous avez déjà un compte ?   <a href="<?= $router->generate('connexion') ?>" class="font-bold hover:underline">Se connecter</a></p>
        </div>
    </body>
</html>