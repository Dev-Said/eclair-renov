<?php

// $api_key = 'AIzaSyDpbwWNhfeRuoVaO6r2BTmAR6AkAzPJvjM';
// $siteKey = '6Lc54x0pAAAAAF3HVt_FaiRcdqJvJUPJHVrey8FZ';

require 'vendor/autoload.php';

use Google\Cloud\RecaptchaEnterprise\V1\RecaptchaEnterpriseServiceClient;
use Google\Cloud\RecaptchaEnterprise\V1\Event;
use Google\Cloud\RecaptchaEnterprise\V1\Assessment;
use Google\Cloud\RecaptchaEnterprise\V1\TokenProperties\InvalidReason;



function create_assessment(
    string $recaptchaKey,
    string $token,
    string $project,
    string $action
): void {
    $client = new RecaptchaEnterpriseServiceClient();
    $projectName = $client->projectName($project);

    $event = (new Event())
        ->setSiteKey($recaptchaKey)
        ->setToken($token);

    $assessment = (new Assessment())
        ->setEvent($event);

    try {
        $response = $client->createAssessment(
            $projectName,
            $assessment
        );

        if ($response->getTokenProperties()->getValid() == false) {
            printf('The CreateAssessment() call failed because the token was invalid for the following reason: ');
            printf(InvalidReason::name($response->getTokenProperties()->getInvalidReason()));
            return;
        }

        if ($response->getTokenProperties()->getAction() == $action) {
            printf('The score for the protection action is:');
            printf($response->getRiskAnalysis()->getScore());
        } else {
            printf('The action attribute in your reCAPTCHA tag does not match the action you are expecting to score');
        }
    } catch (Exception $e) {
        echo 'CreateAssessment() call failed with the following error: ' . $e->getMessage();
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['token'])) {
    $recaptchaToken = $_POST['token'];

    try {
        create_assessment(
            '6Lc54x0pAAAAAF3HVt_FaiRcdqJvJUPJHVrey8FZ',
            $recaptchaToken,
            'eclair-renov-1701075863658',
            'submit_form'
        );
    } catch (Exception $e) {
        echo 'Error: ' . $e->getMessage();
    }
}


?>