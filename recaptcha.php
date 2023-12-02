<?php

require 'layouts/header.php';
require_once 'vendor/autoload.php';

// var_dump($_POST); die;
if (isset($_POST['first-name'])) {
    $recaptcha = new \ReCaptcha\ReCaptcha('6LfnDCQpAAAAANBtLIIVOO1G8iqr0iaNYwCH7VSM');
    // var_dump($recaptcha); die;
    $gRecaptchaResponse = $_POST['g-recaptcha-response'];
    $resp = $recaptcha->setExpectedHostname('electricite-eclair.be')
        ->setExpectedAction('submit')
        ->setScoreThreshold(0.5)
        ->verify($gRecaptchaResponse, $remoteIp);

    if ($resp->isSuccess()) {
        echo 'succes';
    } else {
        $errors = $resp->getErrorCodes();
        var_dump($errors);
    }


    // // var_dump($_POST);
    // $recaptcha = new \ReCaptcha\ReCaptcha('6LfnDCQpAAAAANBtLIIVOO1G8iqr0iaNYwCH7VSM');
    // // $gRecaptchaResponse = $_POST['g-recaptcha-response'];
    // var_dump($recaptcha);
    // var_dump($_POST['first-name']);
    // die;
    // // var_dump($gRecaptchaResponse); die;
    // $resp = $recaptcha->setExpectedHostname('www.electricite-eclair.be')
    //     ->verify($gRecaptchaResponse, $remoteIp);
    // echo 'ok ok';
    // if ($resp->isSuccess()) {
    //     echo 'succes';
    // } else {
    //     $errors = $resp->getErrorCodes();
    //     var_dump($errors);
    // }
}

?>