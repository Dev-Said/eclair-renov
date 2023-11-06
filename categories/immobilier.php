<?php
$title = "Immobilier";
$page_description = "Catégorie Immobilier";
$root_url = 'https://' . $_SERVER['HTTP_HOST'] . '/';
$canonical = $root_url . "immobilier.php";
require '../layouts/header.php';
?>


<div class="w-full px-3 lg:w-11/12 xl:w-10/12 2xl:w-8/12 md:px-0 mt-28 mx-auto flex flex-wrap justify-start items-start py-6">

    <div class="w-full mb-5 flex justify-start items-center">
        <h1 class="text-3xl font-bold">Immobilier</h1>
    </div>

    <section class="w-full md:w-2/3 grid grid-cols-1 lg:grid-cols-2 gap-x-6 gap-y-10">

        <div class="w-full flex flex-col justify-start items-center bg-white border border-gray-200 rounded-lg shadow">
            <a href="<?= $root_url ?>articles/comment-trouver-le-bon-emplacement.php">
                <img class="w-full h-80 object-cover rounded-t-lg" src="<?= $root_url ?>images/img_articles/bel-emplacement-de-maison.jpg" alt="" />
            </a>
            <div class="w-full p-5">
                <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                    Comment trouver le bon emplacement pour un investissement immobilier ?
                </h2>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                    Les points à ne pas négliger
                </p>
                <a href="<?= $root_url ?>articles/comment-trouver-le-bon-emplacement.php" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                    Lire l'article
                    <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
            </div>
        </div>

        <div class="w-full flex flex-col justify-start items-center bg-white border border-gray-200 rounded-lg shadow">
            <a href="<?= $root_url ?>articles/strategies-d-achat.php">
                <img class="w-full h-80 object-cover rounded-t-lg" src="../images/img_articles/villa.jpg" alt="" />
            </a>
            <div class="w-full p-5">
                <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                    Les stratégies d'achat
                </h2>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                    Les avantages spécifiques à divers profils d'investisseurs
                </p>
                <a href="<?= $root_url ?>articles/strategies-d-achat.php" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                    Lire l'article
                    <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
            </div>
        </div>

        <div class="w-full flex flex-col justify-start items-center bg-white border border-gray-200 rounded-lg shadow">
            <a href="<?= $root_url ?>articles/pret-immobilier.php">
                <img class="w-full h-80 object-cover rounded-t-lg" src="<?= $root_url ?>images/img_articles/pret-immobilier.jpg" alt="" />
            </a>
            <div class="w-full p-5">
                <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                    Prêt immobilier
                </h2>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                    Conseils pour avoir un dossier solide auprès des banques
                </p>
                <a href="<?= $root_url ?>articles/pret-immobilier.php" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                    Lire l'article
                    <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
            </div>
        </div>

        <div class="w-full flex flex-col justify-start items-center bg-white border border-gray-200 rounded-lg shadow">
            <a href="<?= $root_url ?>articles/estimation-bien-immobilier.php">
                <img class="w-full h-80 object-cover rounded-t-lg" src="<?= $root_url ?>images/img_articles/estimation-propriété-immobilière.jpg" alt="" />
            </a>
            <div class="w-full p-5">
                <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                    Estimation de la valeur d'un bien immobilier
                </h2>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                    Méthodes et Astuces d'Expert
                </p>
                <a href="<?= $root_url ?>articles/estimation-bien-immobilier.php" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                    Lire l'article
                    <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
            </div>
    </section>

    <!-- Sidebar Section -->
    <?php
    $amazonLink = "https://www.amazon.fr/Investissement-Immobilier-Achat-Revente-nouvelle-ebook/dp/B0CK5146G1/ref=sr_1_20?crid=1199ZB55VY74A&keywords=investissement+immobilier+achat+revente&qid=1696325615&s=books&sprefix=investissement+immobilier+a%2Cstripbooks%2C85&sr=1-20";
    $amazonLinkImage = "immobilier.jpg";
    require '../layouts/side.php';
    ?>

</div>

<?php
require '../layouts/footer.php';
?>