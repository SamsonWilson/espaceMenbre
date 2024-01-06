<?php
//require_once &quot;vendor/autoload.php&quot;

/*use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

/*require 'src/PHPMailer.php';
require 'src/SMTP.php';

$mail = new PHPMailer(True);

$mail->isSMTP(); // Paramétrer le Mailer pour utiliser SMTP 
$mail->Host = 'mail.gmail.com'; // Spécifier le serveur SMTP
$mail->SMTPAuth = true; // Activer authentication SMTP
$mail->Username = 'hw9025443@gmail.com'; // Votre adresse email d'envoi
$mail->Password = '@zerty28'; // Le mot de passe de cette adresse email
$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // Accepter SSL
$mail->Port = 465;

$mail->setFrom('hw9025443@gmail.com', 'Mailer'); // Personnaliser l'envoyeur
$mail->addAddress('hugueswilson16@gmail.com', 'Karim User'); // Ajouter le destinataire
$mail->addAddress('hugueswilson16@gmail.com'); 
$mail->addReplyTo('ugueswilson16@gmail', 'Information'); // L'adresse de réponse
$mail->addCC('ugueswilson16@gmail.com');
$mail->addBCC('ugueswilson16@gmail.com');

$mail->addAttachment('/var/tmp/file.tar.gz'); // Ajouter un attachement
$mail->addAttachment('/tmp/image.jpg', 'new.jpg'); 
$mail->isHTML(true); // Paramétrer le format des emails en HTML ou non

$mail->Subject = 'Here is the subject';
$mail->Body = 'This is the HTML message body';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
   echo 'Erreur, message non envoyé.';
   echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
   echo 'Le message a bien été envoyé !';
}
























require('PHPMailer/PHPMailerAutoload.php');
$mail = new PHPMailer();

$mail->IsSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->SMTPDebug = 2; // Active le mode débogage
$mail->Username = 'hw9025443@gmail.com';
$mail->Password = '@zerty28';
$mail->SMTPSecure = 'tls/ssl';
$mail->Port = 587;

$mail->setFrom('hw9025443@gmail.com','ATANYS');
$mail->addAddress('hugueswilson16@gmail.com');

$mail->isHTML(true);
$mail->Subject = 'cet email est un test';
$mail->Body = 'afin de valider votre adresse email, merci de clique sur le lien suivant';

if(!$mail->send()) {
    echo "mail non envoyé";
    echo"ERREURS". $mail->ErrorInfo;
}else{
    echo "votre email a bien été envoyé";
}
?> */



use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
/* Classe de traitement des exceptions et des erreurs */
    require 'PHPMailer\src\Exception.php';
/* Classe-PHPMailer */
    require 'PHPMailer\src\PHPMailer.php';
/* Classe SMTP nécessaire pour établir la connexion avec un serveur SMTP */
    require 'PHPMailer\src\SMTP.php';
$email = new PHPMailer(TRUE);

try {
    // Tentative de création d’une nouvelle instance de la classe PHPMailer
    $mail = new PHPMailer (true);
// (…)
} catch (Exception $e) {
        echo "Mailer Error: ".$mail->ErrorInfo;
}

$mail->isSMTP();
$mail->SMTPAuth = true;
// Informations personnelles
$mail->Host = "smtp.gmail.com";
$mail->Port = "587";
$mail->Username = "hw9025443@gmail.com";
$mail->Password = "@zerty28";
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;

// Expéditeur
$mail->setFrom('hw9025443@gmail.com', 'ATANYS');
// Destinataire dont le nom peut également être indiqué en option
$mail->addAddress('hugueswilson', 'hugues');
// Copie
$mail->addCC('hw9025443@gmail.com');
// Copie cachée
$mail->addBCC('hw9025443@gmail.com', 'ATANYS');

$mail->isHTML(true);
// Betreff
$mail->Subject = 'teste email';
// HTML-Inhalt
$mail->Body = 'Le texte de votre email en HTML. Il est également possible des mettre des éléments en <b>gras</b>, par exemple.';
$mail->AltBody = 'Le texte comme simple élément textuel';
// Ajouter une pièce jointe
$mail->addAttachment("/home/user/Desktop/image.png", "image.png");

$mail->CharSet = 'UTF-8';
$mail->Encoding = 'base64';

$mail->send();





/*
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require_once "vendor/autoload.php";
try {
        // Créer une instance de classe PHPMailer
        $mail = new PHPMailer($debug);
        if ($debug) {
                // donne un journal détaillé
                $mail->SMTPDebug = PHPMailer\PHPMailer\SMTP::DEBUG_SERVER; }
        }
        // Authentification via SMTP
        $mail->isSMTP();
        $mail->SMTPAuth = true;
        // Connexion
        $mail->Host = "smtp.gmail.com";
        $mail->Port = "587";
        $mail->Username = "hw9025443@gmail.com";
        $mail->Password = "@zerty28";
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->addAttachment("/home/user/Desktop/image.png", "image.png");
     $mail->CharSet = 'UTF-8';
     $mail->Encoding = 'base64';
        $mail->isHTML(true);
        $mail->Subject = 'Objet de votre email';
     $mail->Body = 'Le texte de votre email en HTML. Il est également possible des mettre des éléments en <b>gras</b>, par exemple.';
     $mail->AltBody = 'Le texte comme simple élément textuel';
        $mail->send();
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: ".$mail->ErrorInfo;
}*/

