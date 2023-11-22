<?php
$url = $_SERVER['REQUEST_URI'];
$current_page = basename(urldecode($url));
?>


<nav class="fixed top-0 left-0 w-full h_transition sm:shadow-md z-20 bg-transparent">
    <div class="w-full h-full">

        <div id="nav" class=" relative flex h-24 justify-between bg-sky-50">

            <div class="absolute inset-y-0 left-5 flex items-center sm:hidden">
                <button type="button" id="hamburger-btn" class="z-10 h-10 w-10 inline-flex items-center justify-center rounded-md p-2 text-gray-600 hover:bg-gray-200 hover:text-gray-800 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500 cursor-pointer bg-red-300">
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

            <div class="absolute inset-y-0 left-24 w-auto flex justify-around items-center sm:hidden">
                <a href="/" class="z-10">
                    <img class="h-14 w-auto lg:block" src="/images/logo.png" alt="logo Éclair & Rénov" />
                </a>
                <a href="tel:0476 96 32 15" class="h-14 px-3 ml-3 z-10 rounded-lg flex justify-center items-center bg-[#206296]">
                    <span>
                        <svg data-bbox="25.849 20.098 148.61 159.903" xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 200 200" data-type="shape">
                            <g>
                                <path fill-rule="evenodd" fill="white" clip-rule="evenodd" d="M70.759 24.278c-2.483-4.574-7.721-5.499-11.759-2.255L43 35.18c-20.174 16.202-23.035 44.171-6 63.76l56 64.772c17.02 19.572 46.23 21.812 66 5.06l12-10.121c3.953-3.35 4.827-8.637 1-12.145l-28-25.301c-3.815-3.497-9.893-4.152-14-1.012l-15 14.169-45-51.616L84 69.59c4-3.036 6-9.109 4-13.157L70.759 24.278z"></path>
                            </g>
                        </svg>
                    </span>
                    <span class="text-white text-lg font-semibold tracking-wide ml-1">
                        0476 96 32 15
                    </span>
                </a>
            </div>

            <div class="relative h-full flex flex-1 items-center justify-center sm:items-stretch">
                <div class="hidden sm:flex sm:space-x-8 text-base items-center">
                    <div class="h-full flex flex-shrink-0 items-center">
                        <a href="/"><img class="hidden h-16 w-auto lg:block" src="/images/logo.png" alt="logo Éclair & Rénov" /></a>
                    </div>

                    <a href="/" class="hover-underline-animation h-10 menu-item inline-flex items-center px-1 hover:text-blue-700 uppercase <?= ($current_page == "") ? 'font-bold text-blue-800' : 'font-normal text-gray-800'; ?>">
                        Éclair & Rénov---x--
                    </a>

                    <a href="installations-électriques.php" class="hover-underline-animation h-10 menu-item inline-flex items-center px-1   hover:text-blue-700 uppercase <?= ($current_page == 'installations-électriques.php') ? 'font-bold text-blue-800' : 'font-normal text-gray-800'; ?>">
                        Installations électriques
                    </a>

                    <a href="rénovation-et-mise-en-conformité.php" class="hover-underline-animation h-10 menu-item inline-flex items-center px-1  hover:text-blue-700 uppercase <?= ($current_page == 'rénovation-et-mise-en-conformité.php') ? 'font-bold text-blue-800' : 'font-normal text-gray-800'; ?>">
                        Rénovation et mise en conformité
                    </a>

                    <a href="dépannage-électrique.php" class="hover-underline-animation h-10 menu-item inline-flex items-center px-1  hover:text-blue-700 uppercase <?= ($current_page == 'dépannage-électrique.php') ? 'font-bold text-blue-800' : 'font-normal text-gray-800'; ?>">
                        Dépannage électrique
                    </a>

                    <div class="h-full flex items-center px-5 bg-[#206296]">
                        <a href="contact.php" class="hover-underline-animation-white h-10 menu-item inline-flex items-center  uppercase <?= ($current_page == 'contact.php') ? 'font-bold text-white' : 'font-normal text-white'; ?>">
                            Contact - Devis Gratuit
                        </a>
                        </divef=>
                    </div>
                </div>

            </div>
        </div>
        <!-- Mobile menu, show/hide based on menu state. -->
        <div class="sm:hidden w-full bg-sky-50 -translate-x-full" id="mobile-menu">
            <div class="space-y-1 pt-2 text-base">

                <a href="/" class="block py-4 pl-3 pr-4 hover:bg-gray-50 hover:text-blue-700 uppercase border-y border-gray-300 <?= ($current_page == "") ? 'font-bold text-blue-800' : 'font-normal text-gray-800'; ?>">
                    Éclair & Rénov
                </a>

                <a href="installations-électriques.php" class="block py-4 pl-3 pr-4  hover:bg-gray-50 hover:text-blue-700 uppercase border-b border-gray-300 <?= ($current_page == 'installations-électriques.php') ? 'font-bold text-blue-800' : 'font-normal text-gray-800'; ?>">
                    Installations électriques
                </a>

                <a href="rénovation-et-mise-en-conformité.php" class="block py-4 pl-3 pr-4  hover:bg-gray-50 hover:text-blue-700 uppercase border-b border-gray-300 <?= ($current_page == 'rénovation-et-mise-en-conformité.php') ? 'font-bold text-blue-800' : 'font-normal text-gray-800'; ?>">
                    Rénovation et mise en conformité
                </a>

                <a href="dépannage-électrique.php" class="block py-4 pl-3 pr-4  hover:bg-gray-50 hover:text-blue-700 uppercase border-b border-gray-300 <?= ($current_page == 'dépannage-électrique.php') ? 'font-bold text-blue-800' : 'font-normal text-gray-800'; ?>">
                    Dépannage électrique
                </a>

                <a href="contact.php" class="block py-4 pl-3 pr-4  hover:bg-gray-50 hover:text-blue-700 uppercase border-b border-gray-300 <?= ($current_page == 'contact.php') ? 'font-bold text-blue-800' : 'font-normal text-gray-800'; ?>">
                    Contact - Devis Gratuit
                </a>
            </div>
        </div>
</nav>

<script src="/js/menu.js"></script>