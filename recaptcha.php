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
    // var_dump($is_human->score); die;
    $mail = new PHPMailer(true); 
    try {
        $nom = $_POST["last-name"];
        $email = $_POST["email"];
        $message = $_POST["message"];
    
        $to = "chaounisaid.cs@gmail.com";
        $sujet = "Éclar & Rénov --> Message de la page Contact";
    
        $mail->isSMTP();
        $mail->Host = 'mailout.one.com'; // Hôte SMTP de votre hébergeur
        $mail->SMTPAuth = true;
        $mail->Username = 'chaounisaid.cs@gmail.com'; // Votre adresse e-mail
        $mail->Password = 'Electriciter'; // Le mot de passe de votre adresse e-mail
        $mail->SMTPSecure = 'STARTTLS '; // Chiffrement TLS
        $mail->Port = 587; // Port SMTP TLS de votre hébergeur
    
        $mail->setFrom("chaounisaid.cs@gmail.com", "chaounisaid.cs@gmail.com");
        $mail->addReplyTo('chaounisaid.cs@gmail.com', 'info');
        $mail->addAddress('chaounisaid.cs@gmail.com', 'Nom du destinataire');
        $mail->isHTML(true);
        $mail->Subject = $sujet;
        $mail->Body = "Nom: $nom<br>Email: $email<br><br>Message:<br>$message";
    
        $mail->send();
        echo 'L\'e-mail a été envoyé avec succès!';
    } catch (Exception $e) {
        echo 'Erreur lors de l\'envoi de l\'e-mail: ', $mail->ErrorInfo;
    }

    // if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //     $nom = $_POST["last-name"];
    //     $email = $_POST["email"];
    //     $message = $_POST["message"];

    //     $to = "chaounisaid.cs@gmail.com";
    //     $sujet = "Éclar & Rénov --> Message de la page Contact";

    //     $contenu = "Nom: $nom\n";
    //     $contenu .= "Email: $email\n\n";
    //     $contenu .= "Message:\n$message";

    //     $headers = "From: $email";
    //     // var_dump($to, $sujet, $contenu, $headers); die;
    //     // Envoi de l'e-mail
    //     if (mail($to, $sujet, $contenu, $headers)) {
    //         header("Location: confirmSendMessage.php");
    //         exit();
    //     } else {
    //         $error_message = error_get_last()['message']; // Récupérer le message d'erreur
    //         echo "Erreur lors de l'envoi de l'e-mail : $error_message";
    //         // header("Location: contact.php");
    //     }
    // }

    // var_dump($is_human->score);
} else {
    var_dump("L'utilisateur est un robot");
}
