<?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}
$root_url = 'https://' . $_SERVER['HTTP_HOST'] . '/';
?>

<!DOCTYPE html>

<html>

<head>
  <script src="https://www.google.com/recaptcha/api.js?render=6LfnDCQpAAAAAO5b_IGv3-EBwgeIO-JnB5IM_lTW"></script>



  <meta lang="fr">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, height=device-height, user-scalable=no">
  <meta name="HandheldFriendly" content="true" />

  <title><?= $title ?></title>

  <!-- css -->
  <link rel="stylesheet" href="<?= $root_url ?>css/output.css">
  <link rel="stylesheet" href="<?= $root_url ?>css/style.css">

</head>

<body class="w-full m-0 p-0">

  <?php include(dirname(__FILE__) . "/nav.php"); ?>