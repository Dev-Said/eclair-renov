<?php
$title = "Électricien Rénovation et Mise en Conformité 1060 Saint-Gilles";
require 'layouts/header.php';
?>

<div class='w-full h-full min-h-[100vh] mt-24 flex flex-col justify-start items-center'>
    <header class="relative w-full flex flex-row justify-between items-center">
        <div class="w-full pt-5 py-10 md:py-20 px-4 md:px-8 bg-gradient-to-r from-[#206396] to-[#243441]">
            <div class="mx-auto w-full max-w-7xl flex flex-col lg:grid lg:grid-cols-2 gap-x-10 justify-start items-center">

                <div class="w-full mt-5 pr-5 xl:pr-0 flex flex-col justify-start items-center md:items-start">
                    <h1 class="w-auto text-2xl font-bold tracking-tight text-white lg:text-3xl text-center md:text-left leading-10 z-10">
                        25 ans d'expérience au service des particuliers et des professionnels
                    </h1>

                    <P class="hidden md:block mt-5 text-lg font-normal text-justify leading-7 text-white">
                        Grâce à notre expertise dans l'installation, la rénovation et le dépannage électrique, nous vous garantissons des solutions fiables et sécurisées. Nous restons à la pointe des dernières avancées et tendances en matière d’électricité afin de vous proposer des services de haute qualité. Que vous soyez un particulier ou un professionnel (entreprise, institution, syndic de copropriété, etc.), nous mettons tout en œuvre pour vous offrir une solution sur mesure, adaptée à votre situation spécifique.
                    </p>
                </div>


                <div class="relative aspect-[2/1] h-full md:-mx-8 xl:mx-0 xl:aspect-auto">
                    <img class="absolute inset-0 h-full w-full object-cover object-top brightness-125 saturate-0" src="/images/technicien-électricité.webp" alt="technicien électricien">
                    <div class="absolute inset-0 bg-[#93ccf8] mix-blend-multiply"></div>
                </div>
            </div>
        </section>
    </header>


    <div class="w-full bg-white">
        <div class="relative isolate bg-white py-8 px-6 md:py-10 lg:px-8"> 
            <svg class="absolute inset-0 -z-10 h-full w-full stroke-gray-200 [mask-image:radial-gradient(100%_100%_at_top_right,white,transparent)]" aria-hidden="true">
                <defs>
                    <pattern id="83fd4e5a-9d52-42fc-97b6-718e5d7ee527" width="200" height="200" x="50%" y="-64" patternUnits="userSpaceOnUse">
                        <path d="M100 200V.5M.5 .5H200" fill="none" />
                    </pattern>
                </defs>
                <svg x="50%" y="-64" class="overflow-visible fill-gray-50">
                    <path d="M-100.5 0h201v201h-201Z M699.5 0h201v201h-201Z M499.5 400h201v201h-201Z M299.5 800h201v201h-201Z" stroke-width="0" />
                </svg>
                <rect width="100%" height="100%" stroke-width="0" fill="url(#83fd4e5a-9d52-42fc-97b6-718e5d7ee527)" />
            </svg>
            <div class="mx-auto max-w-xl lg:max-w-4xl">
                <h2 class="text-4xl font-bold tracking-tight text-gray-900">
                    Parlons de votre projet
                </h2>
                <p class="mt-2 text-base leading-8 text-gray-600">
                    Résolvons vos problèmes d'électricité avec expertise et fiabilité.
                </p>

                <div class="mt-4 md:mt-10 flex flex-col md:gap-16 sm:gap-y-16 lg:flex-row">

                    <form method="POST" action="sendmail.php" class="lg:flex-auto">
                        <div class="grid grid-cols-1 md:gap-y-6 gap-x-8 sm:grid-cols-2">
                            <div> <label for="first-name" class="mt-2 md:mt-0 block text-sm font-semibold leading-4 md:leading-6 text-gray-900">Prénom</label>
                                <div class="mt-2.5"> <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="block w-full rounded-md border-0 py-2 px-3.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"> </div>
                            </div>
                            <div> <label for="last-name" class="mt-2 md:mt-0 block text-sm font-semibold leading-4 md:leading-6 text-gray-900">Nom*</label>
                                <div class="mt-2.5"> <input type="text" name="last-name" id="last-name" autocomplete="family-name" required class="block w-full rounded-md border-0 py-2 px-3.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"> </div>
                            </div>
                            <div> <label for="budget" class="mt-2 md:mt-0 block text-sm font-semibold leading-4 md:leading-6 text-gray-900">Adresse e-mail*</label>
                                <div class="mt-2.5"> <input id="email" name="email" type="email" required class="block w-full rounded-md border-0 py-2 px-3.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"> </div>
                            </div>
                            <div> <label for="website" class="mt-2 md:mt-0 block text-sm font-semibold leading-4 md:leading-6 text-gray-900">Téléphone</label>
                                <div class="mt-2.5"> <input type="phone" name="phone" id="phone" class="block w-full rounded-md border-0 py-2 px-3.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"> </div>
                            </div>
                            <div class="sm:col-span-2"> <label for="message" class="mt-2 md:mt-0 block text-sm font-semibold leading-4 md:leading-6 text-gray-900">Message*</label>
                                <div class="mt-2.5"> <textarea id="message" name="message" required rows="4" class="block w-full rounded-md border-0 py-2 px-3.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea> </div>
                            </div>
                        </div>
                        <div class="mt-10">
                            <button type="submit" class="block w-full rounded-md bg-[#206296] px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-[#206296] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#206296]">
                                Envoyer
                            </button>
                        </div>
                        <p class="mt-4 text-sm leading-6 text-gray-900">En soumettant ce formulaire, j'accepte la <a href="/pc.php" class="font-semibold text-blue-700 underline underline-offset-1">politique&nbsp;de confidentialité</a> de Éclair & Rénov SPRL.</p>
                    </form>


                    <div class="mt-0 lg:w-80 lg:flex-none">
                        <div class="text-base mt-2 font-semibold leading-7 text-gray-900">
                            Demandez votre devis gratuit.
                        </div>
                        <div class="mt-0 md:mt-4 pb-10 md:pb-0">
                            <div class="text-base mt-4 font-normal leading-7 text-gray-900">
                                <p>Nous sommes là pour répondre à tous vos besoins en matière d'électricité. Que ce soit pour des installations, des réparations ou des conseils, notre équipe d'experts est à votre disposition.</p>
                            </div>

                            <div class="mt-5 flex flex-col justify-start items-start space-y-2">
                                <a href="mailto:eclairenov@gmail.com" class="text-sm leading-2 text-gray-900 hover:text-blue-700 flex justify-center items-center">
                                    <div class="p-2 mr-1.5 bg-[#206296] rounded-md flex justify-center items-center">
                                        <img src="/images/envelope.svg" alt="icon envelope" class="h-4" />
                                    </div>
                                    <span class="ml-1 font-semibold">
                                        eclairenov@gmail.com
                                    </span>
                                </a>
                                <a href="tel:0476 96 32 15" class="text-sm leading-2 text-gray-900 hover:text-blue-700 flex justify-center items-center">
                                    <div class="p-2 mr-1.5 bg-[#206296] rounded-md flex justify-center items-center">
                                        <img src="/images/telephone.svg" alt="icon téléphone" class="h-4" />
                                    </div>
                                    <span class="ml-1 font-semibold">
                                        0476 96 32 15
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>


<footer class="bg-gradient-to-r from-[#206396] to-[#243441]">
    <div class="mx-auto max-w-5xl overflow-hidden pb-8 pt-7 px-6 lg:px-8">
        <div class="w-full mt-4 flex flex-col md:flex-row justify-start md:justify-center items-center md:space-x-2">
            <p class="text-left text-xs leading-5 text-gray-100">
                &copy; <?= date("Y") ?>
                Éclair & Rénov.Tous droits réservés.
            </p>
            <p class="text-left text-xs leading-5 text-gray-100 underline underline-offset-1">
                <a href="/mentions-légales.php" rel="nofollow">
                    Mentions légales
                </a>
            </p>
            <p class="text-left text-xs leading-5 text-gray-100 underline underline-offset-1">
                <a href="/pc.php" rel="nofollow">
                    Politique de confidentialité.
                </a>
            </p>
        </div>
    </div>
</footer>

</body>

</html>