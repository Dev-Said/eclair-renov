<?php

// $api_key = 'AIzaSyDpbwWNhfeRuoVaO6r2BTmAR6AkAzPJvjM';
// $siteKey = '6Lc54x0pAAAAAF3HVt_FaiRcdqJvJUPJHVrey8FZ';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['token'])) {
    // Récupérer le token ReCaptcha envoyé depuis le client
    $recaptchaToken = $_POST['token'];
    var_dump( $recaptchaToken);
    die;

    // Construire le corps de la requête à envoyer à l'API ReCaptcha Enterprise
    $requestBody = json_encode([
        "event" => [
            "token" => $recaptchaToken,
            "expectedAction" => "submit_form", // Remplacez par votre action ReCaptcha
            "siteKey" => "6Lc54x0pAAAAAF3HVt_FaiRcdqJvJUPJHVrey8FZ" // Remplacez par votre clé de site ReCaptcha
        ]
    ]);

    // Envoyer la requête à l'API ReCaptcha Enterprise
    $apiKey = 'AIzaSyDpbwWNhfeRuoVaO6r2BTmAR6AkAzPJvjM'; // Remplacez par votre clé API ReCaptcha Enterprise
    $url = "https://recaptchaenterprise.googleapis.com/v1/projects/YOUR_PROJECT_ID/assessments?key=$apiKey"; // Remplacez par l'URL appropriée

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $requestBody);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Content-Type: application/json',
        'Content-Length: ' . strlen($requestBody)
    ]);

    $result = curl_exec($ch);
    curl_close($ch);

    // Afficher la réponse de l'API ReCaptcha Enterprise
    var_dump($result); // Vous pouvez traiter la réponse selon vos besoins
}