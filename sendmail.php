<?php

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
?>