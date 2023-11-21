<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
$root_url = 'https://' . $_SERVER['HTTP_HOST'] . '/';
?>

<!DOCTYPE html>

<html>

<head>
    <!-- Google Tag Manager -->
    <!-- <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-MBDL2PVB');
    </script> -->
    <!-- End Google Tag Manager -->
    <link rel="canonical" href="<?php echo $canonical; ?>" />
    <meta lang="fr">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php if (isset($page_description)) : ?>
        <meta name="description" content="<?php echo $page_description; ?>">
    <?php endif; ?>

 

    <title><?= $title ?></title>

    <!-- css -->
    <link rel="stylesheet" href="<?= $root_url ?>css/output.css">
    <link rel="stylesheet" href="<?= $root_url ?>css/style.css">


    <!-- social -->
    <meta property="og:url" content="<?= $url ?>" />
    <!-- <meta property="og:type" content="< $articleType ?>" /> -->
    <meta property="og:title" content="<?= $articleTitle ?>" />
    <meta property="og:description" content="<?= $articleDescription ?>" />
    <meta property="og:image" content="<?= $root_url . 'images/img_articles/' . $image ?>" />
    <meta property="fb:app_id" content=" 875936140209292" />

</head>

<body class="w-full m-0 p-0">

    <!-- Google Tag Manager (noscript) -->
    <!-- <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MBDL2PVB" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript> -->
    <!-- End Google Tag Manager (noscript) -->

    <?php include(dirname(__FILE__) . "/nav.php"); ?>
