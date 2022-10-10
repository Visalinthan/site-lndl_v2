<?php

require_once "../phpmailer/Config.php";
include "recaptcha.php";

$mail = $_POST['mail'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$tel = $_POST['tel'];
$objet = $_POST['objet'];
$message = $_POST['message'];


$mailto = "vishal@lndl.fr";
$addCC = null;
$subject = "Contact de ". $nom . " pour " . $objet ;
$msg = "<h3> Contact </h3>";
$msg .= "<ul><li>Nom : <strong>" . $nom . "</strong></li>";
$msg .= "<li>Prénom : <strong>" . $prenom . "</strong></li>";
$msg .= "<li>N° Tél : <strong>" . $tel . "</strong></li>";
$msg .= "<li>Adresse mail : <strong>" . $mail . "</strong></li>";
$msg .= "<li>Objet : <strong>" . $objet . "</strong></li>";
$msg .= "<li> Message : <strong>" . $message . "</strong></li></ul>";

sendmail($mailto, $addCC, $subject, $msg);