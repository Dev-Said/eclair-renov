<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
$root_url = 'https://' . $_SERVER['HTTP_HOST'] . '/';
?>

<!DOCTYPE html>

<html>

<head>

    <script src="https://www.google.com/recaptcha/enterprise.js?render=6Lc54x0pAAAAAF3HVt_FaiRcdqJvJUPJHVrey8FZ" async defer></script>

    <meta lang="fr">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= $title ?></title>

    <!-- css -->
    <link rel="stylesheet" href="<?= $root_url ?>css/output.css">
    <link rel="stylesheet" href="<?= $root_url ?>css/style.css">

</head>

<body class="w-full m-0 p-0">

    <?php include(dirname(__FILE__) . "/nav.php"); ?>