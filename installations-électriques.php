<?php
$title = "Electricien Bruxelles";
require 'layouts/header.php';
?>

<div class='w-full h-full min-h-[100vh] mt-24 flex flex-col justify-start items-center'>
    <header class="relative w-full flex flex-row justify-between items-center">
    <div class="shadow-2xl w-full h-auto lg:max-w-full">
            <img id="img_index" class=" h-[300px] lg:h-[450px] w-full object-cover" src="/images/schema-electrique-3.webp" alt="">
            <div class="w-full max-h-full absolute inset-0 bg-[#53a4ea] opacity-10"></div>
        </div>

        <div class="absolute top-0 bottom-0 left-0 right-0 w-full p-5 flex flex-col justify-center items-center">
            <span class="absolute top-0 left-0 w-full h-full bg-black opacity-50"></span>
            <div class="absolute top-0 bottom-0 left-0 right-0 w-full p-5 flex flex-col justify-center items-center">
            <h1 class="w-auto text-3xl leading-[40px] lg:text-4xl lg:leading-[40px] xl:text-5xl xl:leading-[60px] min-[1740px]:text-6xl min-[1740px]:leading-[80px] text-white font-bold text-center z-10">
                <span class="text-5xl md:text-6xl xl:text-7xl">Éclair & Rénov</span> <br>Installations et Rénovations Électriques <br> <span class="text-xl leading-[20px] lg:text-2xl lg:leading-[30px] xl:text-4xl">À Uccle, Saint-Gilles, Forest, Bruxelles</span>
            </h1>

            <div class="px-5 py-3 mt-6 z-10 rounded-lg hidden md:flex justify-center items-center bg-[#962320] hover:scale-105 transition-all ease-in-out duration-300">
                <a href="tel:0476 96 32 15" class="text-sm leading-6 text-gray-900 font-semibold hover:text-gray-700 flex justify-start items-center">
                    <span>
                        <svg data-bbox="25.849 20.098 148.61 159.903" xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 200 200" data-type="shape">
                            <g>
                                <path fill-rule="evenodd" fill="white" clip-rule="evenodd" d="M70.759 24.278c-2.483-4.574-7.721-5.499-11.759-2.255L43 35.18c-20.174 16.202-23.035 44.171-6 63.76l56 64.772c17.02 19.572 46.23 21.812 66 5.06l12-10.121c3.953-3.35 4.827-8.637 1-12.145l-28-25.301c-3.815-3.497-9.893-4.152-14-1.012l-15 14.169-45-51.616L84 69.59c4-3.036 6-9.109 4-13.157L70.759 24.278z"></path>
                            </g>
                        </svg>
                    </span>
                    <span class="text-white text-xl xl:text-2xl font-semibold tracking-wide ml-1">
                        0476 96 32 15
                    </span>
                </a>
            </div>
        </div>
    </header>

<!-- bg-[url('/images/prise-électrique-blanche.webp')] bg-cover bg-no-repeat -->
    <section class="py-24 sm:py-32">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto grid max-w-4xl grid-cols-1 gap-y-16 gap-x-8 sm:gap-y-24 lg:mx-0 lg:max-w-none lg:grid-cols-2">

                <div class="hidden lg:block lg:pr-4 lg:mt-12">
                    <div class="relative overflow-hidden rounded-3xl bg-gray-900 px-6 pb-9 pt-28 md:pt-40 lg:pt-96 shadow-2xl sm:px-12 lg:max-w-lg lg:px-8 lg:pb-8 xl:px-10 xl:pb-10">
                        <img class="absolute inset-0 h-full w-full object-cover" src="/images/lustre22.webp" alt="installation électrique">
                        <div class="absolute inset-x-0 top-[50%] bottom-0 h-[50%] bg-gradient-to-b from-transparent to-[#000000] opacity-100"></div>
                        <svg viewBox="0 0 1097 845" aria-hidden="true" class="absolute top-1/2 left-1/2 -ml-16 w-[68.5625rem] -translate-x-1/2 -translate-y-1/2 transform-gpu blur-3xl">
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
                            <figcaption class="mt-6 text-sm leading-6 text-gray-300">
                                <strong class="font-semibold text-white">
                                    Votre électricien
                                </strong>
                                près de chez vous
                            </figcaption>
                        </figure>
                    </div>
                </div>

                <div>
                    <div class="text-base leading-7 text-gray-700 lg:max-w-lg">
                        <p class="text-base font-semibold leading-7 text-[#206296]">Éclair & Rénov</p>
                        <h2 class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Installation électrique totalement personnalisée</h2>
                        <div class="max-w-xl">
                            <p class="mt-6">Vous rénovez complètement votre maison ? Vous construisez un local professionnel ? Avec 25 années d'expérience, Éclair & Rénov réalise tout votre système électrique. Nous prenons en charge l'ensemble des services suivants :
                            </p>

                            <ul class="mt-3 space-y-3">
                                <li class="leading-10 text-base font-semibold text-gray-900 flex justify-start items-center">
                                    <span class="h-6 w-6 mr-2 border-2 border-[#206296] rounded-full flex justify-center items-center">
                                        <img src="/images/check-circle.svg" class="h-5 rounded-full">
                                    </span>
                                    Nouvelle installation électrique
                                </li>
                                <li class="leading-10 text-base font-semibold text-gray-900 flex justify-start items-center">
                                    <span class="h-6 w-6 mr-2 border-2 border-[#206296] rounded-full flex justify-center items-center">
                                        <img src="/images/check-circle.svg" class="h-5 rounded-full">
                                    </span>
                                    Rénovation de l'installation existante
                                </li>
                                <li class="leading-10 text-base font-semibold text-gray-900 flex justify-start items-center">
                                    <span class="h-6 w-6 mr-2 border-2 border-[#206296] rounded-full flex justify-center items-center">
                                        <img src="/images/check-circle.svg" class="h-5 rounded-full">
                                    </span>
                                    Mise en conformité
                                </li>
                                <li class="leading-10 text-base font-semibold text-gray-900 flex justify-start items-center">
                                    <span class="h-6 w-6 mr-2 border-2 border-[#206296] rounded-full flex justify-center items-center">
                                        <img src="/images/check-circle.svg" class="h-5 rounded-full">
                                    </span>
                                    Réalisation d'une mise à la terre
                                </li>
                                <li class="leading-10 text-base font-semibold text-gray-900 flex justify-start items-center">
                                    <span class="h-6 w-6 mr-2 border-2 border-[#206296] rounded-full flex justify-center items-center">
                                        <img src="/images/check-circle.svg" class="h-5 rounded-full">
                                    </span>
                                    Réseaux internet et ligne téléphonique
                                </li>
                                <li class="leading-10 text-base font-semibold text-gray-900 flex justify-start items-center">
                                    <span class="h-6 w-6 mr-2 border-2 border-[#206296] rounded-full flex justify-center items-center">
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
                        <a href="/contact" class="px-4 py-2 flex justify-center items-center text-base font-semibold leading-7 text-white bg-[#206296] rounded-lg">Demandez votre devis gratuit <span aria-hidden="true"> &nbsp; &rarr;</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="w-full bg-gray-800 py-24 sm:py-32">
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
    </section>





    <section class="w-full h-auto px-4 md:px-8 flex justify-center items-center bg-white">
        <div class="mx-auto max-w-4xl py-8 md:pt-28 md:pb-20 grid grid-cols-1 md:grid-cols-[288px_1fr] md:gap-x-4 items-start justify-center bg-white">

            <div class="w-72 h-72 hidden md:block rounded-xl lg:rounded-3xl relative overflow-hidden shadow-2xl">
                <img class="absolute inset-0 h-full w-full object-cover brightness-125 saturate-0" src="/images/secrétaire-électricien.webp" alt="secrétaire électricien">
                <div class="absolute inset-0 bg-[#80a4c0] mix-blend-multiply"></div>
            </div>
            <div class="h-full w-auto px-2 pb-4 md:px-0 pt-10 md:pt-0 ml-0 md:ml-4 text-gray-900 flex flex-col justify-center items-start">
                <h2 class="text-2xl text-gray-900 font-bold">
                    Pour une installation électrique neuve, complète ou partielle, appelez un électricien chevronné !
                </h2>
                <p class="w-2xl md:w-6xl md:max-w-6xl mt-1 md:mt-2 text-left">
                    Nous intervenons auprès des particuliers et des professionnels. Nous sommes disponibles 7 j/7 autour de Bruxelles.(Uccle, Forest, Saint-Gilles, Ixelles)
                </p>
                <h3 class="text-gray-900 text-lg pt-5 font-semibold">
                    Contactez-nous
                </h3>
                <div class="mt-5 flex flex-col justify-start items-start space-y-2">
                    <a href="mailto:eclairenov@gmail.com" class="text-sm leading-6 text-gray-900 font-semibold hover:text-gray-700 flex justify-start items-center">
                        <div class="flex h-9 w-9 items-center justify-center rounded-md bg-[#206296]">
                            <img src="/images/envelope.svg" alt="icon envelope" class="h-4" />
                        </div>
                        <span class="ml-2 text-lg text-gray-900">
                            eclairenov@gmail.com
                        </span>
                    </a>
                    <a href="tel:0476 96 32 15" class="text-sm leading-6 text-gray-900 font-semibold hover:text-gray-700 flex justify-start items-center">
                        <div class="flex h-9 w-9 items-center justify-center rounded-md bg-[#206296]">
                            <img src="/images/telephone.svg" alt="icon téléphone" class="h-4" />
                        </div>
                        <span class="ml-2 text-lg text-gray-900">
                            0476 96 32 15
                        </span>
                    </a>
                    <span class="text-sm leading-6 text-gray-900 flex justify-start items-center">
                        <div class="flex h-9 w-9 items-center justify-center rounded-md bg-[#206296]">
                            <img src="/images/house.svg" alt="icon maison" class="h-5" />
                        </div>
                        <span class="ml-2">
                            Chaussée de Waterloo, 284A 1060 Saint-Gilles
                        </span>
                    </span>

                    <a href="https://www.facebook.com/Eclair-Renov-1125749410891095" class="text-sm leading-6 text-white flex justify-start items-center">
                        <div class="flex h-9 w-9 items-center justify-center rounded-md bg-[#206296]">
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <span class="ml-2 text-gray-900">
                            Rejoignez-nous sur Facebook
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </section>

</div>

<?php
require 'layouts/footer.php';
?>