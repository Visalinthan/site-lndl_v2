<?php

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require_once "Exception.php";
require_once "PHPMailer.php";
require_once "SMTP.php";

function sendmail($destinataire,$addCC, $objet, $contenu)
{
    try {

        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = 'ssl0.ovh.net'; // Spécifier le serveur SMTP
        $mail->Port = 465;
        $mail->SMTPAuth = 1; // Activer authentication SMTP
        
        if($mail->SMTPAuth){
            $mail->SMTPSecure = 'ssl';               //Protocole de sécurisation des échanges avec le SMTP
            $mail->Username = 'site_lndl@lndl.fr'; // Votre adresse email d'envoi
            $mail->Password = 'M4dCd9xJ2'; // Le mot de passe de cette adresse email   
         }
        // Configuration
        $mail->setLanguage('fr', '../PHPMailer/language/');
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;
        $mail->CharSet = "utf-8";
        $mail->isHTML(true);
        $mail->setFrom("noreply@lndl.fr");
        $mail->addAddress($destinataire);
        if(!empty($addCC)){
           $mail->AddCC($addCC); 
        }
        
        $mail->Subject = $objet;
        $mail->Body = $contenu;
        $mail->send();

        echo 'Message has been sent';

    } catch (Exception $err) {
        echo "Message non envoyé. Erreur: {$err->ErrorInfo}";
    }
}
