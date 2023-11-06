<?php
$url = $_SERVER['REQUEST_URI'];
$page = basename($url);
$root_url = 'https://' . $_SERVER['HTTP_HOST'] . '/';
?>


<nav class="fixed top-0 left-0 w-full bg-white shadow-md z-20">
    <div class="w-full h-auto">
        <div class="relative flex h-24 justify-between">

            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                <!-- Mobile menu button -->
                <button type="button" class="inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" aria-controls="mobile-menu" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <!--        	Icon when menu is closed.        	Menu open: "hidden", Menu closed: "block"      	-->
                    <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                    <!--        	Icon when menu is open.        	Menu open: "block", Menu closed: "hidden"      	-->
                    <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>


            <div class="relative flex flex-1 items-center justify-center sm:items-stretch">
                <div class="hidden sm:flex sm:space-x-8 text-xl">
                    <div class="flex flex-shrink-0 items-center">
                        <a href="/"><img class="block h-16 w-auto lg:hidden" src="/images/logo.jpg" alt="logo Éclair & Rénov" /></a>
                        <a href="/"><img class="hidden h-16 w-auto lg:block" src="/images/logo.jpg" alt="logo Éclair & Rénov" /></a>
                    </div>

                    <a href="/" class="menu-item inline-flex items-center border-indigo-500 px-1 pt-1 font-medium text-gray-900">Éclair & Rénov</a>
                    <a href="<?= $root_url ?>categories/bourse.php" class="menu-item inline-flex items-center px-1 pt-1  font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700">Installations électriques</a>
                    <a href="<?= $root_url ?>categories/immobilier.php" class="menu-item inline-flex items-center px-1 pt-1 font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700">Rénovation et mise en conformité</a>
                    <a href="<?= $root_url ?>categories/immobilier.php" class="menu-item inline-flex items-center px-1 pt-1 font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700">Dépannage électrique</a>
                    <a href="<?= $root_url ?>categories/immobilier.php" class="menu-item inline-flex items-center px-5 font-medium text-white hover:border-gray-300 bg-[#206296]">Contact - Devis Gratuit</a>
                </div>
            </div>

        </div>
    </div>
    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="sm:hidden" id="mobile-menu">
        <div class="space-y-1 pt-2 pb-4">
            <a href="/" class="block border-l-4 border-indigo-500 bg-indigo-50 py-2 pl-3 pr-4 font-medium text-indigo-700">Éclair & Rénov</a>
            <a href="<?= $root_url ?>categories/bourse.php" class="block border-l-4 border-transparent py-2 pl-3 pr-4 font-medium text-gray-500 hover:border-gray-300 hover:bg-gray-50 hover:text-gray-700">Installations électriques</a>
            <a href="<?= $root_url ?>categories/immobilier.php" class="block border-l-4 border-transparent py-2 pl-3 pr-4 font-medium text-gray-500 hover:border-gray-300 hover:bg-gray-50 hover:text-gray-700">Rénovation et mise en conformité</a>
            <a href="<?= $root_url ?>categories/immobilier.php" class="block border-l-4 border-transparent py-2 pl-3 pr-4 font-medium text-gray-500 hover:border-gray-300 hover:bg-gray-50 hover:text-gray-700">Dépannage électrique</a>
            <a href="<?= $root_url ?>categories/immobilier.php" class="block border-l-4 border-transparent py-2 pl-3 pr-4 font-medium text-gray-500 hover:border-gray-300 hover:bg-gray-50 hover:text-gray-700">Contact - Devis Gratuit</a>
        </div>
    </div>
</nav>