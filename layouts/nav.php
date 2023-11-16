<?php
$url = $_SERVER['REQUEST_URI'];
$current_page = basename(urldecode($url));
?>


<nav class="fixed top-0 left-0 w-full h-24 sm:h-auto shadow-md z-20">
    <div class="w-full h-full">
        <div id="nav" class="h_transition relative flex h-24 justify-between bg-sky-50">

            <div class="absolute inset-y-0 left-5 flex items-center sm:hidden">
                <!-- Mobile menu button -->
                <button type="button" id="hamburger-btn" class="z-10 h-10 w-10 inline-flex items-center justify-center rounded-md p-2 text-gray-600 hover:bg-gray-200 hover:text-gray-800 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500 cursor-pointer bg-gray-300">
                    <span class="sr-only">Open main menu</span>
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

            <div class="relative h-full flex flex-1 items-center justify-center sm:items-stretch">
                <div class="hidden sm:flex sm:space-x-8 text-base">
                    <div class="h-full flex flex-shrink-0 items-center">
                        <a href="/"><img class="hidden h-16 w-auto lg:block" src="/images/logo.png" alt="logo Éclair & Rénov" /></a>
                    </div>

                    <a href="/" class="menu-item inline-flex items-center px-1 hover:text-blue-700 uppercase <?= ($current_page == "") ? 'font-bold text-blue-800' : 'font-normal text-gray-700'; ?>">
                        Éclair & Rénov
                    </a>

                    <a href="installations-électriques.php" class="menu-item inline-flex items-center px-1   hover:text-blue-700 uppercase <?= ($current_page == 'installations-électriques.php') ? 'font-bold text-blue-800' : 'font-normal text-gray-700'; ?>">
                        Installations électriques
                    </a>

                    <a href="rénovation-et-mise-en-conformité.php" class="menu-item inline-flex items-center px-1  hover:text-blue-700 uppercase <?= ($current_page == 'rénovation-et-mise-en-conformité.php') ? 'font-bold text-blue-800' : 'font-normal text-gray-700'; ?>">
                        Rénovation et mise en conformité
                    </a>

                    <a href="dépannage-électrique.php" class="menu-item inline-flex items-center px-1  hover:text-blue-700 uppercase <?= ($current_page == 'dépannage-électrique.php') ? 'font-bold text-blue-800' : 'font-normal text-gray-700'; ?>">
                        Dépannage électrique
                    </a>

                    <a href="contact.php" class="menu-item inline-flex items-center px-5 bg-[#206296] uppercase <?= ($current_page == 'contact.php') ? 'font-bold text-white' : 'font-normal text-white'; ?>">
                        Contact - Devis Gratuit
                    </a>
                </div>
            </div>

        </div>
    </div>
    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="sm:hidden bg-sky-50 -translate-x-full" id="mobile-menu">
        <div class="space-y-1 pt-2 text-base">

            <a href="/" class="block py-3 pl-3 pr-4  hover:bg-gray-50 hover:text-blue-700 uppercase border-y border-gray-300 <?= ($current_page == "") ? 'font-bold text-blue-800' : 'font-normal text-gray-700'; ?>">
                Éclair & Rénov
            </a>

            <a href="installations-électriques.php" class="block py-3 pl-3 pr-4  hover:bg-gray-50 hover:text-blue-700 uppercase border-b border-gray-300 <?= ($current_page == 'installations-électriques.php') ? 'font-bold text-blue-800' : 'font-normal text-gray-700'; ?>">
                Installations électriques
            </a>

            <a href="rénovation-et-mise-en-conformité.php" class="block py-3 pl-3 pr-4  hover:bg-gray-50 hover:text-blue-700 uppercase border-b border-gray-300 <?= ($current_page == 'rénovation-et-mise-en-conformité.php') ? 'font-bold text-blue-800' : 'font-normal text-gray-700'; ?>">
                Rénovation et mise en conformité
            </a>

            <a href="dépannage-électrique.php" class="block py-3 pl-3 pr-4  hover:bg-gray-50 hover:text-blue-700 uppercase border-b border-gray-300 <?= ($current_page == 'dépannage-électrique.php') ? 'font-bold text-blue-800' : 'font-normal text-gray-700'; ?>">
                Dépannage électrique
            </a>

            <a href="contact.php" class="block py-3 pl-3 pr-4  hover:bg-gray-50 hover:text-blue-700 uppercase border-b border-gray-300 <?= ($current_page == 'contact.php') ? 'font-bold text-blue-800' : 'font-normal text-gray-700'; ?>">
                Contact - Devis Gratuit
            </a>
        </div>
    </div>
</nav>

<script src="/js/menu.js"></script>