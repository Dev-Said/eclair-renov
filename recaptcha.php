<?php

require __DIR__ . '/vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


function verify_recaptcha($response)
{
    $secret_key = "6LfnDCQpAAAAANBtLIIVOO1G8iqr0iaNYwCH7VSM";
    $rep = [];

    $url = "https://www.google.com/recaptcha/api/siteverify";
    $data = [
        "secret" => $secret_key,
        "response" => $response
    ];
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);

    $json = json_decode($response);
    $rep = $json;

    if ($json->success) {
        return $rep;
    } else {
        return false;
    }
}

$response = $_POST['token'];
$is_human = verify_recaptcha($response);


if ($is_human && $is_human->score > 0.4) {

    $mail = new PHPMailer(true); 

     try {
        if (isset($_POST["first-name"])) {
            $nom = $_POST["first-name"] . ' ' . $_POST["last-name"];
        } else {
            $nom = $_POST["last-name"];
        }
        
        $email = $_POST["email"];
        $message = $_POST["message"];
        $sujet = "Devis / Contact";

        $mail->isSMTP();
        $mail->Host = 'send.one.com'; // Serveur SMTP de votre hébergeur
        $mail->SMTPAuth = true;
        $mail->Username = 'contact@electricite-eclair.be'; // Votre adresse e-mail
        $mail->Password = 'Electriciter'; // Le mot de passe de votre adresse e-mail
        $mail->SMTPSecure = 'ssl'; // Chiffrement SSL
        $mail->Port = 465; // Port SMTP SSL de votre hébergeur
        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        ); // désactivation contôle du certificat ssl

        $mail->setFrom("contact@electricite-eclair.be", "ECLAIR & RENOV");
        $mail->addReplyTo($email, $nom);
        $mail->addAddress('chaounisaid.cs@gmail.com', 'Nom du destinataire');
        $mail->isHTML(true);
        $mail->Subject = $sujet;
        $mail->Body = "Nom: $nom<br>Email: $email<br><br>Message:<br>$message";

        $mail->send();
        header('Location: confirmSendMessage.php');
    } catch (Exception $e) {
        echo 'Erreur lors de l\'envoi de l\'e-mail: ', $mail->ErrorInfo;
    }
    

} else {
    var_dump("L'utilisateur est un robot");
}
