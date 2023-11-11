<?php
$title = "Electricien Bruxelles";
require 'layouts/header.php';
?>

<div class='w-full h-full min-h-[100vh] mt-24 flex flex-col justify-start items-center'>
    <header class="relative w-full flex flex-row justify-between items-center">
        <!-- <img src='images/cuisine.jpg' alt='accueil' class='w-full h-[500px] object-cover'> -->

        <div class="hadow-2xl w-full h-[500px] lg:max-w-full">
            <img class="h-full w-full object-cover" src="/images/schema electrique.png" alt="">
            <div class="absolute inset-0 bg-gradient-to-b from-sky-500 to-cyan-900 opacity-70"></div>
        </div>

        <div class="absolute top-0 bottom-0 left-0 right-0 w-full p-5 flex flex-col justify-center items-center">
            <span class="absolute top-0 left-0 w-full h-full bg-black opacity-50"></span>
            <h1 class="w-auto text-xl leading-5 md:text-6xl md:leading-[80px] text-white font-bold text-center z-10">
                Éclair & Rénov <br> Installations et rénovations électriques <br> à Uccle, Saint-Gilles, Forest, Bruxelles
            </h1>
            <div class="px-5 py-3 mt-4 z-10 flex justify-center items-center bg-[#962320]">
                <span>
                    <svg data-bbox="25.849 20.098 148.61 159.903" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 200 200" data-type="shape">
                        <g>
                            <path fill-rule="evenodd" fill="white" clip-rule="evenodd" d="M70.759 24.278c-2.483-4.574-7.721-5.499-11.759-2.255L43 35.18c-20.174 16.202-23.035 44.171-6 63.76l56 64.772c17.02 19.572 46.23 21.812 66 5.06l12-10.121c3.953-3.35 4.827-8.637 1-12.145l-28-25.301c-3.815-3.497-9.893-4.152-14-1.012l-15 14.169-45-51.616L84 69.59c4-3.036 6-9.109 4-13.157L70.759 24.278z"></path>
                        </g>
                    </svg>
                </span>
                <span class="text-white text-2xl font-semibold tracking-wide ml-1">
                    0476 96 32 15
                </span>
            </div>
        </div>
    </header>


    <div class="bg-white py-24 sm:py-32">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto grid max-w-2xl grid-cols-1 items-start gap-y-16 gap-x-8 sm:gap-y-24 lg:mx-0 lg:max-w-none lg:grid-cols-2">

                <div class="lg:pr-4">
                    <div class="relative overflow-hidden rounded-3xl bg-gray-900 px-6 pb-9 pt-64 shadow-2xl sm:px-12 lg:max-w-lg lg:px-8 lg:pb-8 xl:px-10 xl:pb-10"> <img class="absolute inset-0 h-full w-full object-cover brightness-125 saturate-0" src="/images/installation électrique.png" alt="installation électrique">
                        <div class="absolute inset-0 bg-[#208896] mix-blend-multiply"></div> <svg viewBox="0 0 1097 845" aria-hidden="true" class="absolute top-1/2 left-1/2 -ml-16 w-[68.5625rem] -translate-x-1/2 -translate-y-1/2 transform-gpu blur-3xl">
                            <path fill="url(#e7ccf164-908d-46dd-9194-2f8a16ad5a93)" fill-opacity=".4" d="M301.174 646.641 193.541 844.786 0 546.172l301.174 100.469 193.845-356.855c1.241 164.891 42.802 431.935 199.124 180.978 195.402-313.696 143.295-588.18 284.729-419.266 113.148 135.13 124.068 367.989 115.378 467.527L811.753 372.553l20.102 451.119-530.681-177.031Z" />
                            <defs>
                                <linearGradient id="e7ccf164-908d-46dd-9194-2f8a16ad5a93" x1="1097.04" x2="-141.165" y1=".22" y2="363.075" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#282096" />
                                    <stop offset="1" stop-color="#66a5e8" />
                                </linearGradient>
                            </defs>
                        </svg>
                        <figure class="relative isolate">
                            <div class="w-full flex justify-start items-center">
                                <img src="/images/logo.svg" alt="" class="h-8 w-auto">
                                <span class="ml-1 text-base font-semibold text-white">Électricité</span>
                            </div>
                            <blockquote class="mt-4 text-lg font-semibold leading-8 text-white">
                                <p>
                                    Votre espace, votre énergie. Une installation électrique conçue sur mesure pour répondre à vos besoins uniques.
                                </p>
                            </blockquote>
                            <figcaption class="mt-6 text-sm leading-6 text-gray-300"><strong class="font-semibold text-white">Judith Rogers,</strong> CEO at Workcation</figcaption>
                        </figure>
                    </div>
                </div>

                <div>
                    <div class="text-base leading-7 text-gray-700 lg:max-w-lg">
                        <p class="text-base font-semibold leading-7 text-[#206296]">Éclair & Rénov</p>
                        <h2 class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Installation électrique totalement personnalisée</h2>
                        <div class="max-w-xl">
                            <p class="mt-6">Vous rénovez complètement votre maison ? Vous construisez un local professionnel ? Grâce à 25 ans d'expérience, Éclair & Rénov réalise tout votre système électrique. Nous prenons en charge l'ensemble des services suivants :
                            </p>

                            <ul class="mt-3 space-y-3">
                                <li class="leading-10 text-base font-semibold text-gray-900 flex justify-start items-center">
                                    <span class="h-6 w-6 mr-3 border-2 border-[#206296] rounded-full flex justify-center items-center">
                                        <img src="/images/check-circle.svg" class="h-5 rounded-full">
                                    </span>
                                    Nouvelle installation électrique
                                </li>
                                <li class="leading-10 text-base font-semibold text-gray-900 flex justify-start items-center">
                                    <span class="h-6 w-6 mr-3 border-2 border-[#206296] rounded-full flex justify-center items-center">
                                        <img src="/images/check-circle.svg" class="h-5 rounded-full">
                                    </span>
                                    Rénovation de l'installation existante
                                </li>
                                <li class="leading-10 text-base font-semibold text-gray-900 flex justify-start items-center">
                                    <span class="h-6 w-6 mr-3 border-2 border-[#206296] rounded-full flex justify-center items-center">
                                        <img src="/images/check-circle.svg" class="h-5 rounded-full">
                                    </span>
                                    Mise en conformité
                                </li>
                                <li class="leading-10 text-base font-semibold text-gray-900 flex justify-start items-center">
                                    <span class="h-6 w-6 mr-3 border-2 border-[#206296] rounded-full flex justify-center items-center">
                                        <img src="/images/check-circle.svg" class="h-5 rounded-full">
                                    </span>
                                    Réalisation d'une mise à la terre
                                </li>
                                <li class="leading-10 text-base font-semibold text-gray-900 flex justify-start items-center">
                                    <span class="h-6 w-6 mr-3 border-2 border-[#206296] rounded-full flex justify-center items-center">
                                        <img src="/images/check-circle.svg" class="h-5 rounded-full">
                                    </span>
                                    Réseaux internet et ligne téléphonique
                                </li>
                                <li class="leading-10 text-base font-semibold text-gray-900 flex justify-start items-center">
                                    <span class="h-6 w-6 mr-3 border-2 border-[#206296] rounded-full flex justify-center items-center">
                                        <img src="/images/check-circle.svg" class="h-5 rounded-full">
                                    </span>
                                    Parlophone et vidéophone
                                </li>
                            </ul>

                            <p class="mt-8">
                                Notre travail rigoureux est exécuté proprement, notamment en cas d'ouverture de plancher, de pose de plafonds ou de cloisons. Nous intervenons à Saint-Gilles, Uccle, Forest, Bruxelles et Ixelles
                            </p>
                        </div>
                    </div>
                    <dl class="mt-10 grid grid-cols-2 gap-8 border-t border-gray-900/10 pt-10 sm:grid-cols-4">
                        <div>
                            <dt class="text-sm font-semibold leading-6 text-gray-600">Expérience</dt>
                            <dd class="mt-2 text-3xl font-bold leading-10 tracking-tight text-gray-900">25 Ans</dd>
                        </div>
                        <div>
                            <dt class="text-sm font-semibold leading-6 text-gray-600">Matériaux</dt>
                            <dd class="mt-2 text-3xl font-bold leading-10 tracking-tight text-gray-900">Best</dd>
                        </div>
                        <div>
                            <dt class="text-sm font-semibold leading-6 text-gray-600">Devis</dt>
                            <dd class="mt-2 text-3xl font-bold leading-10 tracking-tight text-gray-900">Gratuit</dd>
                        </div>
                        <div>
                            <dt class="text-sm font-semibold leading-6 text-gray-600">Réactivité </dt>
                            <dd class="mt-2 text-3xl font-bold leading-10 tracking-tight text-gray-900">100%</dd>
                        </div>
                    </dl>
                    <div class="mt-10 flex">
                        <a href="/contact.php" class="px-4 py-2 flex justify-center items-center text-base font-semibold leading-7 text-white bg-[#206296] rounded-lg">Demandez votre devis gratuit <span aria-hidden="true"> &nbsp; &rarr;</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="w-full bg-gray-800 py-24 sm:py-32">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl lg:text-center">
                <h2 class="text-base font-semibold leading-7 text-gray-400">Devis rapide</h2>
                <p class="mt-2 text-3xl font-bold tracking-tight text-white sm:text-4xl">Tarification Transparente et Compétitive</p>
                <p class="mt-6 text-lg leading-8 text-gray-200">Votre Confiance Mérite Notre Professionnalisme</p>
            </div>
            <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-4xl">
                <dl class="grid max-w-xl grid-cols-1 gap-y-10 gap-x-8 lg:max-w-none lg:grid-cols-2 lg:gap-y-16">
                    <div class="relative pl-16">
                        <dt class="text-base font-semibold leading-7 text-white">
                            <div class="absolute top-0 left-0 flex h-12 w-12 items-center justify-center rounded-lg bg-[#5498df] border-4 border-[#5498df]">
                                <img src="/images/currency-euro.svg" alt="icon euro" class="h-5">
                            </div> Demande de devis
                        </dt>
                        <dd class="mt-2 text-base leading-7 text-gray-200">Afin de vous fournir un service adapté à vos besoins, nous devons analyser votre demande et prendre en compte tous les paramètres de votre future installation électrique.​</dd>
                    </div>
                    <div class="relative pl-16">
                        <dt class="text-base font-semibold leading-7 text-white">
                            <div class="absolute top-0 left-0 flex h-12 w-12 items-center justify-center rounded-lg bg-[#5498df] border-4 border-[#5498df]">
                                <img src="/images/list-check.svg" alt="icon liste" class="h-5">
                            </div> Un devis clair et détaillé
                        </dt>
                        <dd class="mt-2 text-base leading-7 text-gray-200">Sur base de votre demande, nous vous remettrons un devis précis et détaillé afin que vous puissiez y voir clair sur les travaux électriques qui seront réalisés.</dd>
                    </div>
                    <div class="relative pl-16">
                        <dt class="text-base font-semibold leading-7 text-white">
                            <div class="absolute top-0 left-0 flex h-12 w-12 items-center justify-center rounded-lg bg-[#5498df] border-4 border-[#5498df]">
                                <img src="/images/hand-thumbs-up.svg" alt="icon pouce en l'air" class="h-5">
                            </div> Votre accord, notre engagement
                        </dt>
                        <dd class="mt-2 text-base leading-7 text-gray-200">Nous nous engageons à tout mettre en œuvre afin que vous soyez satisfait de votre choix, que ce soit par nos produits ou nos services.</dd>
                    </div>
                    <div class="relative pl-16">
                        <dt class="text-base font-semibold leading-7 text-white">
                            <div class="absolute top-0 left-0 flex h-12 w-12 items-center justify-center rounded-lg bg-[#5498df] border-4 border-[#5498df]">
                                <img src="/images/lightbulb.svg" alt="icon ampoule" class="h-5">
                            </div> Réalisation de l'installation
                        </dt>
                        <dd class="mt-2 text-base leading-7 text-gray-200">Dès votre accord, notre équipe se charge de réaliser toute l'installation conformément à notre devis, ainsi que la délivrance d'une attestation de conformité de l'installation électrique réalisée.</dd>
                    </div>
                </dl>
            </div>
        </div>
    </div>


    <section class="mx-auto max-w-4xl py-8 md:py-28 grid grid-cols-1 md:grid-cols-[300px_1fr] items-start justify-center md:flex-row md:items-center md:justify-start">
        <div class="w-72 h-72 rounded-xl lg:rounded-3xl relative overflow-hidden shadow-2xl">
            <img class="absolute inset-0 h-full w-full object-cover brightness-125 saturate-0" src="/images/secrétaire électricien.png" alt="secrétaire électricien">
            <div class="absolute inset-0 bg-[#8dbadf] mix-blend-multiply"></div>
        </div>

        <div class="h-full w-auto p-4 md:px-0 ml-0 md:ml-4 flex flex-col justify-center items-start">
            <p class="text-base font-normal leading-6 text-gray-900">
                Pour une installation électrique neuve, complète ou partielle, appelez un électricien chevronné ! Nous intervenons auprès des particuliers et des professionnels. Nous sommes disponibles 7 j/7 autour de Bruxelles.(Uccle, Forest, Saint-Gilles, Ixelles)
            </p>
            <div class="mt-5 flex flex-col justify-start items-start space-y-2">
                <a href="mailto:eclairenov@gmail.com" class="text-sm leading-6 text-gray-900 font-semibold hover:text-gray-700 flex justify-start items-center">
                    <div class="flex h-9 w-9 items-center justify-center rounded-md bg-[#206296]">
                        <img src="/images/envelope.svg" alt="icon envelope" class="h-4" />
                    </div>
                    <span class="ml-2 text-lg">
                        eclairenov@gmail.com
                    </span>
                </a>
                <a href="tel:0476 96 32 15" class="text-sm leading-6 text-gray-900 font-semibold hover:text-gray-700 flex justify-start items-center">
                    <div class="flex h-9 w-9 items-center justify-center rounded-md bg-[#206296]">
                        <img src="/images/telephone.svg" alt="icon téléphone" class="h-4" />
                    </div>
                    <span class="ml-2 text-lg">
                        0476 96 32 15
                    </span>
                </a>
            </div>
        </div>
    </section>

</div>

<?php
require 'layouts/footer.php';
?>