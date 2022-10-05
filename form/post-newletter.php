<?php

require_once "../phpmailer/Config.php";
include "recaptcha.php";

$mail = $_POST['email'];


$mailto = "vishal@lndl.fr";
$addCC = null;
$subject = "Demande de newsletter" ;
$msg = "<h3> Newsletter </h3>";
$msg .= "<ul><li>Adresse mail : <strong>" . $mail . "</strong></li></ul>";

sendmail($mailto, $addCC, $subject, $msg);

?>