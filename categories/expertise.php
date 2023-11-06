<?php
$title = "Expertise";
$root_url = 'https://' . $_SERVER['HTTP_HOST'] . '/';
$canonical = $root_url . "expertise.php";
$page_description = "Catégorie Expertise";
require '../layouts/header.php';
?>

<div class="w-full px-3 lg:w-11/12 xl:w-10/12 2xl:w-8/12 md:px-0 mt-28 mx-auto flex flex-wrap justify-start items-start py-6">
    <div class='w-full px-5 lg:px-0 lg:w-11/12 xl:w-10/12 2xl:w-9/12 h-auto mt-32 flex flex-col justify-between items-center'>

        <div class="flottant w-full p-5 flex flex-col justify-center items-center">
            <h1 class="w-full text-[50px] font-bold text-center">Expertise</h1>
            <p class="max-w-2xl mt-10 text-center">
                <span class="text-base">
                    Nos articles sur l'expertise'
                </span>
            </p>
        </div>

        <div class="w-full grid grid-cols-1 lg:grid-cols-2 gap-7">
            
        </div>

    </div>
</div>

<?php
require '../layouts/footer.php';
?>