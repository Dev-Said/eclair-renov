<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST["last-name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "chaaounisaid.cs@gmail.com";  
    $sujet = "Éclar & Rénov --> Message de la page Contact";

    $contenu = "Nom: $nom\n";
    $contenu .= "Email: $email\n\n";
    $contenu .= "Message:\n$message";

    $headers = "From: $email";

    // Envoi de l'e-mail
    if (mail($to, $sujet, $contenu, $headers)) {
        header("Location: confirmSendMessage.php"); 
        exit();
    } else {
        header("Location: contact.php"); 
    }
}
?>
