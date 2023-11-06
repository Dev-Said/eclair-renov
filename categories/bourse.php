<?php
$title = "Bourse";
$page_description = "Catégorie Bourse";
$root_url = 'https://' . $_SERVER['HTTP_HOST'] . '/';
$canonical = $root_url . "bourse.php/";
require '../layouts/header.php';
?>

<div class="w-full px-3 lg:w-11/12 xl:w-10/12 2xl:w-8/12 md:px-0 mt-28 mx-auto flex flex-wrap justify-start items-start py-6">

    <div class="w-full mb-5 flex justify-start items-center">
        <h1 class="text-3xl font-bold">Bourse</h1>
    </div>

    <section class="w-full md:w-2/3 grid grid-cols-1 lg:grid-cols-2 gap-x-6 gap-y-10">

        <div class="w-full flex flex-col justify-start items-center bg-white border border-gray-200 rounded-lg shadow">
            <a href="<?= $root_url ?>articles/comment-trader-la-figure-chartiste-du-drapeau.php">
                <img class="w-full h-80 object-cover rounded-t-lg" src="../images/img_articles/wall-street.jpg" alt="" />
            </a>
            <div class="w-full p-5">
                <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                    Comment trader la figure chartiste du drapeau ?
                </h2>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                    Une configuration simple avec un faible risque et un gain potentiel élevé
                </p>
                <a href="<?= $root_url ?>articles/comment-trader-la-figure-chartiste-du-drapeau.php" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                    Lire l'article
                    <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Sidebar Section -->
    <?php
    $amazonLink = "https://www.amazon.fr/Ma%C3%AEtriser-Trading-D%C3%A9butants-Apprendre-Cryptomonnaies-ebook/dp/B0BSVCSY76/ref=sr_1_1?__mk_fr_FR=%C3%85M%C3%85%C5%BD%C3%95%C3%91&crid=2WUPTTHH9ETGQ&keywords=maitriser+le+trading&qid=1696670338&s=books&sprefix=maitriser+le+trading%2Cstripbooks%2C81&sr=1-1";
    $amazonLinkImage = "maîtriser-le-trading.jpg";
    require '../layouts/side.php';
    ?>

</div>


<?php
require '../layouts/footer.php';
?>