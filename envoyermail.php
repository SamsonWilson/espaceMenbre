<?php
$destinataire = 'hugueswilson3@gmail.com';
$sujet = 'Ceci est le sujet';
$message = 'Mon message';
//$headers = "conteent-type: texte/plain; charset=utf-8\r\n";
$headers = 'From: hw9025443@gmail.com\r\n';

// Envoi de l'email
$mailEnvoye = mail($destinataire, $sujet, $message, $headers);

if ($mailEnvoye) {
    echo 'Email envoyé avec succès !';
} else {
    echo 'Erreur lors de l\'envoi de l\'email.';
}
?>
