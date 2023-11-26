<?php
$title = "Électricien 1060 Saint-Gilles";
require 'layouts/header.php';
?>

<div class='w-full h-full min-h-[100vh] mt-24 flex flex-col justify-start items-center'>

    <header class="relative w-full flex flex-row justify-between items-center">
        <div class="shadow-2xl w-full h-auto max-h-[450px] overflow-hidden lg:max-w-full">
            <img id="img_index" class="w-full min-h-[350px] max-h-[450px] object-cover brightness-125 saturate-0" src="/images/cable-électrique.webp" alt="cables et materiel électriques">
            <div class="w-full max-h-full absolute inset-0 bg-[#284257] mix-blend-hard-light"></div>
        </div>

        <div class="absolute top-0 bottom-0 left-0 right-0 w-full p-5 flex flex-col justify-center items-center">
            <h1 class="w-auto text-3xl leading-[40px] lg:text-4xl lg:leading-[40px] xl:text-5xl xl:leading-[60px] min-[1740px]:text-6xl min-[1740px]:leading-[80px] text-white font-bold text-center z-10">
                <span class="text-5xl md:text-6xl xl:text-7xl">Éclair & Rénov</span> <br>Votre Installateur Électricien de Confiance <br> <span class="text-xl leading-[20px] lg:text-2xl lg:leading-[30px] xl:text-4xl xl:leading-[60px] min-[1740px]:text-4xl min-[1740px]:leading-[80px]">À Bruxelles (Saint-Gilles, Forest, Uccle, Ixelles)</span>
            </h1>
            <!-- <div class="px-8 py-3 mt-6 z-10 rounded-lg flex justify-center items-center bg-[#962320] hover:scale-105 transition-all ease-in-out duration-300"> -->
            <a href="tel:0476 96 32 15" class="px-8 py-3 mt-6 z-10 rounded-lg flex justify-center items-center bg-[#962320] hover:scale-105 transition-all ease-in-out duration-300">
                <span>
                    <svg data-bbox="25.849 20.098 148.61 159.903" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 200 200" data-type="shape">
                        <g>
                            <path fill-rule="evenodd" fill="white" clip-rule="evenodd" d="M70.759 24.278c-2.483-4.574-7.721-5.499-11.759-2.255L43 35.18c-20.174 16.202-23.035 44.171-6 63.76l56 64.772c17.02 19.572 46.23 21.812 66 5.06l12-10.121c3.953-3.35 4.827-8.637 1-12.145l-28-25.301c-3.815-3.497-9.893-4.152-14-1.012l-15 14.169-45-51.616L84 69.59c4-3.036 6-9.109 4-13.157L70.759 24.278z"></path>
                        </g>
                    </svg>
                </span>
                <span class="text-white text-xl xl:text-2xl font-semibold tracking-wide ml-1">
                    0476 96 32 15
                </span>
            </a>
            <!-- </div> -->
        </div>
    </header>


    <section class="w-full max-w-7xl mx-auto mt-10 pb-5 lg:mt-20 grid grid-cols-3 justify-center items-start gap-y-10 lg:gap-y-0 gap-x-4">

        <a href="/installations-électriques.php">
            <div class="group/index w-full flex flex-col justify-start items-center bg-white hover:bg-gray-50 border border-gray-200 px-5 py-10 rounded-xl">
                <figure id="floatingElement1" class="mb-4 h-24 lg:h-28 w-24 lg:w-28 rounded-full bg-[#206296] group-hover/index:bg-[#203D96] border-[12px] border-[#20967D] flex justify-center items-center">
                    <img src="/images/house2.svg" alt="icon maison" class="h-8 lg:h-12">
                </figure>
                <h2 class="mb-3 text-xl xl:text-2xl font-semibold text-gray-900 text-center">
                    Installation <span class="hidden md:inline">électrique</span>
                </h2>
                <p class="text-sm text-gray-900 text-center hidden md:block">
                    Sécurité, fiabilité et innovation. Avec Éclair & Rénov vous avez la garantie d'une installation électrique de pointe et d'un budget maîtrisé.
                </p>
            </div>
        </a>

        <a href="/rénovation-et-mise-en-conformité.php">
            <div class="group/index w-full flex flex-col justify-start items-center bg-white hover:bg-gray-50 border border-gray-200 px-5 py-10 rounded-xl">
                <figure id="floatingElement2" class="mb-4 h-24 lg:h-28 w-24 lg:w-28 rounded-full bg-[#206296] group-hover/index:bg-[#203D96] border-[12px] border-[#20967D] flex justify-center items-center">
                    <img src="/images/policy.svg" alt="icon certificat" class="h-8 lg:h-12">
                </figure>
                <h2 class="mb-3 text-xl xl:text-2xl font-semibold text-gray-900 text-center">
                    Rénovation <span class="hidden md:inline">et mise en conformité</span>
                </h2>
                <p class="text-sm text-gray-900 text-center hidden md:block">
                    Transformez votre espace avec notre expertise en rénovation et mise en conformité électrique. Assurez votre tranquillité avec des professionnels près de chez vous.
                </p>
            </div>
        </a>

        <a href="/dépannage-électrique.php">
            <div class="group/index w-full flex flex-col justify-start items-center bg-white hover:bg-gray-50 border border-gray-200 px-5 py-10 rounded-xl">
                <figure id="floatingElement3" class="mb-4 h-24 lg:h-28 w-24 lg:w-28 rounded-full bg-[#206296] group-hover/index:bg-[#203D96] border-[12px] border-[#20967D] flex justify-center items-center">
                    <img src="/images/truck2.svg" alt="icon camionnette" class="h-10 lg:h-14">
                </figure>
                <h2 class="mb-3 text-xl xl:text-2xl font-semibold text-gray-900 text-center">
                    Dépannage <span class="hidden md:inline">électrique</span>
                </h2>
                <p class="text-sm text-gray-900 text-center hidden md:block">
                    Retrouvez la sérénité avec notre service de dépannage électrique fiable et rapide. Nos électriciens sont à votre disposition 7j/7.
                </p>
            </div>
        </a>
    </section>


    <section class="w-full bg-white pt-6 md:pt-20 lg:pt-28 pb-6 px-2 xl:px-5 2xl:px-0">
        <div class="relative w-full mx-auto py-10 xl:py-0 flex flex-col  bg-[#243441]">
            <!-- <span class="bg-[url('/images/led.jpg')] absolute inset-0 bg-cover bg-center bg-no-repeat opacity-5"></span> -->
            <div class="h-full mx-auto flex max-w-7xl flex-col items-center gap-x-8 px-6 lg:px-14 xl:flex-row xl:items-stretch">
                <div class="hidden xl:flex w-full max-h-[350px] min-h-[350px] mt-4 xl:mb-20 xl:mt-28 max-w-2xl xl:w-96 justify-center">
                    <div class="relative aspect-[1/1] h-full w-full md:-mx-8 xl:mx-0 xl:aspect-auto flex justify-center">
                        <img class="absolute inset-0 h-full w-full object-cover object-center " src="/images/ouvrier-electricien.webp" alt="ouvrier électricien">
                        <div class="absolute inset-0 bg-[#93ccf8] mix-blend-multiply"></div>
                    </div>
                </div>
                <div class="w-full max-w-2xl flex-col xl:max-w-none xl:flex-auto xl:py-14 xl:pl-7">

                    <div class="w-full pt-6 pb-6 flex flex-col justify-center items-start">
                        <h2 class="py-5 text-3xl font-semibold text-left text-white leading-10">
                            Votre spécialiste en électricité depuis 25 ans
                        </h2>
                    </div>

                    <p class="text-lg font-normal text-justify text-white leading-7">
                        En cas de souci électrique, de coupure de courant ou pour des travaux de mise aux normes ou d'installation, faites appel à l'expertise d'un <b class="font-bold text-sky-400"> professionnel de l'électricité à Bruxelles</b>.
                    </p>

                    <p class="mt-2 text-lg font-normal text-justify text-white leading-7">
                        Basée à Saint-Gilles, notre équipe d'électriciens est disponible sept jours sur sept pour convenir d'un rendez-vous selon vos besoins spécifiques ou pour <b class="font-bold text-sky-400">une intervention rapide en cas d'urgence</b> dans les dix-neuf communes de Bruxelles, ainsi que dans le Brabant Wallon et le Brabant Flamand.
                    </p>

                    <p class="mt-2 text-lg font-normal text-justify text-white leading-7">
                        Éclair & Rénov vous assure <b class="font-bold text-sky-400">un travail parfait pour tous vos projets</b>, que ce soit pour une nouvelle installation, des réparations, une mise en conformité, la mise en place de systèmes d'interphones ou d'éclairage extérieur.
                    </p>

                    <p class="mt-2 text-lg font-normal text-justify text-white leading-7">
                        Nos interventions en dépannage sont éffectuées dans <b class="font-bold text-sky-400">les délais les plus courts</b>.
                    </p>

                    <div class="pb-5 pt-10 mt-6 md:mt-16 w-full mx-auto flex flex-col justify-start items-center md:items-start bg-[#243441] border-t border-gray-400">
                        <h2 class="text-3xl text-center md:text-left font-bold tracking-wide text-gray-100 sm:text-4xl leading-[50px]">
                            Devis et Conseils Gratuits ! <br> Contactez-nous 7j/7
                        </h2>
                        <div class="mt-10 flex flex-col md:flex-row items-center justify-center gap-x-6">
                            <a href="tel:0476 96 32 15" class="rounded-md bg-[#206296] h-14 px-5 mb-4 md:mb-0 order-2 md:order-none min-w-[300px] md:min-w-0 text-lg font-semibold text-white shadow-sm hover:bg-[#407aa5] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#206296] flex justify-center items-center">
                                <img src="/images/telephone.svg" alt="icon téléphone" class="h-5" />
                                <span class="ml-2 text-lg text-gray-100">
                                    0476 96 32 15
                                </span>
                            </a>
                            <a href="mailto:eclairenov@gmail.com" class="rounded-md bg-[#206296] h-14 px-5 order-3 md:order-none min-w-[300px] md:min-w-0 text-lg font-semibold text-white shadow-sm hover:bg-[#407aa5] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#206296] flex justify-center items-center">
                                <img src="/images/envelope.svg" alt="icon envelope" class="h-4" />
                                <span class="ml-2 text-lg text-gray-100">
                                    eclairenov@gmail.com
                                </span>
                            </a>
                            <a href="/contact.php" class="h-14 px-5 py-2 mb-4 md:mb-0 order-1 md:order-none min-w-[300px] md:min-w-0 flex justify-center items-center text-lg font-semibold leading-7 text-white bg-[#206296] hover:bg-[#6b94b5] rounded-lg">
                                Contactez-nous
                            </a>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>


    <section class="w-auto xl:w-[1280px] max-w-7xl mx-auto px-4 mt-4 md:mt-10 mb-20 pb-10 flex flex-col justify-center items-center bg-white">
        <div class="py-10 px-2 lg:px-0 w-auto flex flex-col justify-start items-center">
            <h2 class="w-full max-w-4xl text-2xl leading-8 md:leading-10 lg:text-4xl xl:text-4xl xl:leading-[40px] text-center font-bold text-gray-900">
                Matériaux de haute qualité
            </h2>
            <h3 class="w-full max-w-2xl lg:max-w-3xl mt-2 lg:mt-5 text-lg lg:text-xl leading-6 lg:leading-7 text-center font-normal text-gray-900">
                Nous travaillons avec des marques et des matériaux réputés pour leur fiabilité et leur durabilité tels que Niko - Legrand - BTicino - Tem - Vynckier - Urmet - Elvox...
            </h3>
        </div>

        <ul role="list" class="w-full max-w-7xl space-y-2 lg:space-y-0 flex flex-row flex-wrap justify-around items-center">
            <li class="h-24 px-4 border border-gray-200 rounded-lg flex justify-center items-center">
                <img class="w-32 h-auto" src="/images/niko.webp" alt="Niko">
            </li>
            <li class="h-24 px-4 border border-gray-200 rounded-lg flex justify-center items-center">
                <img class="w-32 h-auto" src="/images/legrand.webp" alt="legrand">
            </li>
            <li class="h-24 px-4 border border-gray-200 rounded-lg flex justify-center items-center">
                <img class="w-32 h-auto" src="/images/bticino.webp" alt="bticino">
            </li>
            <li class="h-24 px-4 border border-gray-200 rounded-lg flex justify-center items-center">
                <img class="w-32 h-auto" src="/images/Vynkier.webp" alt="Vynkier">
            </li>
            <li class="h-24 px-4 border border-gray-200 rounded-lg flex justify-center items-center">
                <img class="w-32 h-auto" src="/images/urmet.webp" alt="urmet">
            </li>
            <li class="h-24 px-4 border border-gray-200 rounded-lg flex justify-center items-center">
                <img class="w-32 h-auto" src="/images/Elvox.webp" alt="Elvox">
            </li>
            <li class="h-24 px-4 border border-gray-200 rounded-lg flex justify-center items-center">
                <img class="w-32 h-auto" src="/images/tem.webp" alt="tem">
            </li>
        </ul>
    </section>



    <section class="w-full max-w-7xl px-4 bg-slate-50 rounded-2xl">
        <div class="mx-auto py-12 md:py-28 px-2 md:px-20">

            <div class="w-full">
                <h2 class="w-auto text-2xl font-bold tracking-tight text-gray-900 sm:text-4xl text-center z-10">
                    Professionnels de l'Électricité
                </h2>
                <h2 class="w-auto text-lg mt-4 font-semibold tracking-tight text-gray-900 sm:text-2xl text-center z-10">
                    Installation - Rénovation - Dépannage
                </h2>
            </div>

            <div class="mx-auto mt-12 px-4 2xl:px-0 grid max-w-7xl grid-cols-1 gap-y-20 gap-x-10 lg:grid-cols-3">
                <a href="/installations-électriques.php" class="w-auto">
                    <article class="pb-5 flex flex-col items-start justify-between group/block1 rounded-xl bg-white transition-all ease-in-out duration-300 hover:shadow-xl">
                        <div class="w-full overflow-hidden rounded-t-xl">
                            <img src="/images/installation-électrique-performante.webp" alt="électricité cuisine" class="aspect-[16/9] w-full rounded-t-xl bg-gray-100 object-cover transition-all ease-in-out duration-300 group-hover/block1:scale-110">
                        </div>
                        <div class="w-full p-5 rounded-b-xl">
                            <div>
                                <h3 class="mt-3 text-xl text-center font-semibold leading-6 text-gray-900">
                                    Des installations électriques performantes et résistantes
                                </h3>
                                <p class="mt-5 text-base text-center leading-6 text-gray-600">
                                    Optez pour une installation électrique professionnelle et conforme. Notre équipe expérimentée conçoit et installe des systèmes électriques fiables, sûrs et adaptés à vos besoins.
                                </p>
                            </div>
                        </div>
                    </article>
                </a>

                <a href="/rénovation-et-mise-en-conformité.php" class="w-auto">
                    <article class="pb-5 flex flex-col items-start justify-between group/block2 rounded-xl bg-white transition-all ease-in-out duration-300 hover:shadow-xl">
                        <div class="w-full overflow-hidden rounded-t-xl">
                            <img src="/images/tableau électrique.webp" alt="mise en tension" class="aspect-[16/9] w-full rounded-t-xl bg-gray-100 object-cover transition-all ease-in-out duration-300 group-hover/block2:scale-110">
                        </div>
                        <div class="w-full p-5 rounded-b-xl">
                            <div>
                                <h3 class="mt-3 text-xl text-center font-semibold leading-6 text-gray-900">
                                    Une large expérience en rénovation et en mise en conformité électrique
                                </h3>
                                <p class="mt-5 text-base text-center leading-6 text-gray-600">
                                    Au fil des années, votre installation électrique peut devenir moins performante tout en restant trop énergivore. Eclair & Rénov améliore votre installation électrique de A à Z : mise en conformité, modernisation du système…
                                </p>
                            </div>
                        </div>
                    </article>
                </a>

                <a href="/dépannage-électrique.php" class="w-auto">
                    <article class="pb-5 flex flex-col items-start justify-between group/block3 rounded-xl bg-white transition-all ease-in-out duration-300 hover:shadow-xl">
                        <div class="w-full overflow-hidden rounded-t-xl">
                            <img src="/images/dépannage-électricien.webp" alt="tableau électrique" class="aspect-[16/9] w-full rounded-t-xl bg-gray-100 object-cover transition-all ease-in-out duration-300 group-hover/block3:scale-110">
                        </div>
                        <div class="w-full p-5 rounded-b-xl">
                            <div>
                                <h3 class="mt-3 text-xl text-center font-semibold leading-6 text-gray-900">
                                    Dépannage d'urgence 7 j/7
                                </h3>
                                <p class="mt-5 text-base text-center leading-6 text-gray-600">
                                    Quel que soit votre problème électrique (court-circuit, panne de compteur, d'éclairage...), appelez-nous tous les jours de 9 h à 22 h. Nous vous proposons des solutions efficaces rapidement.
                                </p>
                            </div>
                        </div>
                    </article>
                </a>

                <a href="/eclairage.php" class="w-auto">
                    <article class="pb-5 flex flex-col items-start justify-between group/block4 rounded-xl bg-white transition-all ease-in-out duration-300 hover:shadow-xl">
                        <div class="w-full overflow-hidden rounded-t-xl">
                            <img src="/images/éclairages-ampoules.webp" alt="lampes de plafond avec plusieurs ampoules " class="aspect-[16/9] w-full rounded-t-xl bg-gray-100 object-cover transition-all ease-in-out duration-300 group-hover/block4:scale-110">
                        </div>
                        <div class="w-full p-5 rounded-b-xl">
                            <div>
                                <h3 class="mt-3 text-xl text-center font-semibold leading-6 text-gray-900">
                                    Optimisation de votre éclairage
                                </h3>
                                <p class="mt-5 text-base text-center leading-6 text-gray-600">
                                    Nos experts vous offrent des solutions d'éclairage sur mesure pour maximiser la luminosité et l'efficacité énergétique. Contactez-nous pour une expertise en optimisation lumineuse adaptée à vos espaces.
                                </p>
                            </div>
                        </div>
                    </article>
                </a>

                <a href="/parlophone.php" class="w-auto">
                    <article class="pb-5 flex flex-col items-start justify-between group/block5 rounded-xl bg-white transition-all ease-in-out duration-300 hover:shadow-xl">
                        <div class="w-full overflow-hidden rounded-t-xl">
                            <img src="/images/cameras.webp" alt="camera de surveillance" class="aspect-[16/9] w-full rounded-t-xl bg-gray-100 object-cover transition-all ease-in-out duration-300 group-hover/block5:scale-110">
                        </div>
                        <div class="w-full p-5 rounded-b-xl">
                            <div>
                                <h3 class="mt-3 text-xl text-center font-semibold leading-6 text-gray-900">
                                    Parlophone et vidéophone
                                </h3>
                                <p class="mt-5 text-base text-center leading-6 text-gray-600">
                                Améliorez votre sécurité avec nos solutions de parlophones et vidéophones. Nous proposons des installations sur mesure pour renforcer votre contrôle d'accès.
                                </p>
                            </div>
                        </div>
                    </article>
                </a>

                <a href="/contact.php" class="w-auto">
                    <article class="pb-5 flex flex-col items-start justify-between group/block6 rounded-xl bg-white transition-all ease-in-out duration-300 hover:shadow-xl">
                        <div class="w-full overflow-hidden rounded-t-xl">
                            <img src="/images/contact.webp" alt="un homme appel un électricien" class="aspect-[16/9] w-full rounded-t-xl bg-gray-100 object-cover transition-all ease-in-out duration-300 group-hover/block6:scale-110">
                        </div>
                        <div class="w-full p-5 rounded-b-xl">
                            <div>
                                <h3 class="mt-3 text-xl text-center font-semibold leading-6 text-gray-900">
                                    Contactez-nous
                                </h3>
                                <p class="mt-5 text-base text-center leading-6 text-gray-600">
                                    Contactez Éclair & Rénov pour tous vos travaux d'installation, de rénovation ou de dépannage électrique. Autour de Bruxelles ? Le devis est gratuit. Contactez-nous 7 j/7.
                                </p>
                            </div>
                        </div>
                    </article>
                </a>
            </div>
        </div>
    </section>


    <section class="w-full mt-16 md:pt-20 md:pb-5 px-2 lg:px-0 flex justify-center items-center bg-gray-800 rounded-t-2xl xl:rounded-none">
        <div class="w-full max-w-3xl xl:max-w-7xl flex flex-col xl:flex-row justify-start items-start">
            <div class="w-full px-2 pt-10 md:py-5 md:pr-5 xl:pr-10 flex flex-col justify-start items-start">
                <img src="/images/clock.svg" alt="icon horloge" class="w-10 mb-5 xl:mb-2 p-0">
                <p class="w-full text-lg leading-7 text-justify text-white">
                    Basés à Saint-Gilles, nous intervenons rapidement sur Uccle, Ixelles, Forest et dans le reste des 19 communes de Bruxelles. Nous nous déplaçons aussi dans le Brabant Wallon et le Brabant Flamand pour répondre aux besoins des particuliers et professionnels.
                </p>
                <h3 class="text-white text-lg pt-5 font-semibold">
                    Contactez-nous
                </h3>
                <div class="w-full mt-5 mb-5 xl:mb-0 grid grid-cols-2 gap-x-5 xl:flex xl:flex-col justify-start xl:justify-center items-start space-y-2">
                    <a href="mailto:eclairenov@gmail.com" class="text-sm leading-6 text-gray-900 font-semibold hover:text-gray-700 flex justify-start items-center">
                        <div class="flex h-9 w-9 items-center justify-center rounded-md bg-[#206296]">
                            <img src="/images/envelope.svg" alt="icon envelope" class="h-4" />
                        </div>
                        <span class="ml-2 text-lg text-gray-200">
                            eclairenov@gmail.com
                        </span>
                    </a>
                    <a href="tel:0476 96 32 15" class="text-sm leading-6 text-gray-900 font-semibold hover:text-gray-700 flex justify-start items-center">
                        <div class="flex h-9 w-9 items-center justify-center rounded-md bg-[#206296]">
                            <img src="/images/telephone.svg" alt="icon téléphone" class="h-4" />
                        </div>
                        <span class="ml-2 text-lg text-gray-200">
                            0476 96 32 15
                        </span>
                    </a>
                    <span class="text-sm leading-6 text-gray-100 hover:text-white flex justify-start items-center">
                        <div class="flex h-9 w-9 items-center justify-center rounded-md bg-[#206296]">
                            <img src="/images/house.svg" alt="icon maison" class="h-5" />
                        </div>
                        <span class="ml-2">
                            Chaussée de Waterloo, 284A 1060 Saint-Gilles
                        </span>
                    </span>

                    <a href="https://www.facebook.com/Eclair-Renov-1125749410891095" class="text-sm leading-6 text-gray-100 hover:text-white flex justify-start items-center">
                        <div class="flex h-9 w-9 items-center justify-center rounded-md bg-[#206296]">
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <span class="ml-2">
                            Rejoignez-nous sur Facebook
                        </span>
                    </a>
                </div>
            </div>

            <div class="responsive-iframe-container mt-6 xl:mt-0 rounded-xl">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2520.318552331692!2d4.348297777339662!3d50.825263192709!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c3c45dda3de36d%3A0xe3b38bff1607a309!2sChau.%20de%20Waterloo%20284%2C%201060%20Saint-Gilles%2C%20Belgique!5e0!3m2!1sfr!2sfr!4v1699029871049!5m2!1sfr!2sfr" class="rounded-xl" frameborder="0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

        </div>
    </section>


</div>

<?php
require 'layouts/footer.php';
?>

<script src="/js/floatting.js"></script>

<script>
    let prevScreenWidth = window.innerWidth;
    let imgIndex = document.getElementById('img_index');

    function getScreenWidth() {
        let currentWidth = window.innerWidth;
        if (currentWidth !== prevScreenWidth) {
            console.log('La largeur de l\'écran a changé ! Nouvelle largeur : ' + currentWidth);
            if (currentWidth <= 160) {
                imgIndex.src = '/images/cable électrique 2.png';
            } else {
                imgIndex.src = '/images/cable électrique.png';
            }
            prevScreenWidth = currentWidth;
        }
    }

    window.addEventListener('resize', getScreenWidth);
</script>