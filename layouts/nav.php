<?php
$url = $_SERVER['REQUEST_URI'];
$current_page = basename(urldecode($url));
?>


<nav class="fixed top-0 left-0 w-full h-0  md:shadow-md z-20 bg-transparent">

    <div id="nav" class=" relative flex h-24 justify-between bg-white">

        <div class="absolute inset-y-0 left-5 flex items-center md:hidden">
            <button type="button" id="hamburger-btn" class="z-10 h-12 w-12 inline-flex items-center justify-center rounded-md p-2 text-gray-50 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500 cursor-pointer bg-sky-800">
                <span class="sr-only">Ouvrir le menu principal</span>
                <!-- Icon when menu is closed -->
                <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
                <!-- Icon when menu is open -->
                <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        <div class="md:hidden w-auto ml-28 flex justify-end items-center">
            <a href="tel:0476 96 32 15" class="h-12 pl-2 pr-3 z-10 rounded-lg flex justify-center items-center bg-[#962320]">
                <span class="h-8 w-8 rounded-md flex justify-center items-center bg-white">
                    <img class="h-6 w-auto" src="/images/logo-only.png" alt="logo Éclair & Rénov" />
                </span>

                <span class="text-white text-lg font-semibold tracking-wide ml-4">
                    0476 96 32 15
                </span>
            </a>
        </div>

        <div class="relative h-full flex flex-1 items-center justify-center sm:items-stretch">
            <div class="hidden md:flex sm:space-x-8 text-sm 2xl:text-base items-center">
                <div class="h-full flex flex-shrink-0 items-center">
                    <a href="/"><img class="hidden h-16 w-auto lg:block" src="/images/logo.png" alt="logo Éclair & Rénov" /></a>
                </div>

                <a href="/" class="hover-underline-animation h-10 menu-item inline-flex items-center px-1 text-center hover:text-blue-700 uppercase <?= ($current_page == "") ? 'font-bold text-blue-800' : 'font-normal text-gray-800'; ?>">
                    Éclair & Rénov
                </a>

                <a href="installations-électriques.php" class="hover-underline-animation h-10 menu-item inline-flex items-center px-1 text-center   hover:text-blue-700 uppercase <?= ($current_page == 'installations-électriques.php') ? 'font-bold text-blue-800' : 'font-normal text-gray-800'; ?>">
                    Installations électriques
                </a>

                <a href="rénovation-et-mise-en-conformité.php" class="hover-underline-animation h-10 menu-item inline-flex items-center px-1 text-center  hover:text-blue-700 uppercase <?= ($current_page == 'rénovation-et-mise-en-conformité.php') ? 'font-bold text-blue-800' : 'font-normal text-gray-800'; ?>">
                    Rénovation et mise en conformité
                </a>

                <a href="dépannage-électrique.php" class="hover-underline-animation h-10 menu-item inline-flex items-center px-1 text-center  hover:text-blue-700 uppercase <?= ($current_page == 'dépannage-électrique.php') ? 'font-bold text-blue-800' : 'font-normal text-gray-800'; ?>">
                    Dépannage électrique
                </a>

                <div class="h-full flex items-center px-5 bg-[#206296]">
                    <a href="contact.php" class="hover-underline-animation-white h-10 menu-item inline-flex items-center text-center uppercase <?= ($current_page == 'contact.php') ? 'font-bold text-white' : 'font-normal text-white'; ?>">
                        Contact - Devis Gratuit
                    </a>
                    </divef=>
                </div>
            </div>

        </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="md:hidden w-full bg-sky-50 -translate-x-full" id="mobile-menu">
        <div class="space-y-1 pt-2 text-base">

            <a href="/" class="block py-5 pl-3 pr-4 hover:bg-gray-50 hover:text-blue-700 uppercase border-y border-gray-300 <?= ($current_page == "") ? 'font-bold text-blue-800' : 'font-normal text-gray-800'; ?>">
                Éclair & Rénov
            </a>

            <a href="installations-électriques.php" class="block py-5 pl-3 pr-4  hover:bg-gray-50 hover:text-blue-700 uppercase border-b border-gray-300 <?= ($current_page == 'installations-électriques.php') ? 'font-bold text-blue-800' : 'font-normal text-gray-800'; ?>">
                Installations électriques
            </a>

            <a href="rénovation-et-mise-en-conformité.php" class="block py-5 pl-3 pr-4  hover:bg-gray-50 hover:text-blue-700 uppercase border-b border-gray-300 <?= ($current_page == 'rénovation-et-mise-en-conformité.php') ? 'font-bold text-blue-800' : 'font-normal text-gray-800'; ?>">
                Rénovation et mise en conformité
            </a>

            <a href="dépannage-électrique.php" class="block py-5 pl-3 pr-4  hover:bg-gray-50 hover:text-blue-700 uppercase border-b border-gray-300 <?= ($current_page == 'dépannage-électrique.php') ? 'font-bold text-blue-800' : 'font-normal text-gray-800'; ?>">
                Dépannage électrique
            </a>

            <a href="contact.php" class="block py-5 pl-3 pr-4  hover:bg-gray-50 hover:text-blue-700 uppercase border-b border-gray-300 <?= ($current_page == 'contact.php') ? 'font-bold text-blue-800' : 'font-normal text-gray-800'; ?>">
                Contact - Devis Gratuit
            </a>
        </div>
</nav>

<script src="/js/menu.js"></script>