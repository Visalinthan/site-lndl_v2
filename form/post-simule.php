<?php

require_once "../phpmailer/Config.php";
include "recaptcha.php";

$logement = $_POST['logement'];

$statut = $_POST['statut'];

$construction = $_POST['construction'];

$chauffage = $_POST['chauffage'];

$surface = $_POST['surface'];
$cp = $_POST['codepostale'];
$ville = $_POST['ville'];


$projet = $_POST['projet'];

if (!empty($_POST['iso'])) {
    $iso = $_POST['iso'];
}

if (!empty($_POST['pac'])) {
    $pac = $_POST['pac'];
}

if (!empty($_POST['ventilation'])) {
    $ventilation = $_POST['ventilation'];
}

if (!empty($_POST['tce'])) {
    $tce = $_POST['tce'];
}

$name = $_POST['name'];
$surname = $_POST['surname'];
$phone = $_POST['phone'];
$mail = $_POST['mail'];
$phone = $_POST['phone'];

$nbFoyer = $_POST['nbFoyer'];


$road = $_POST['road'];
$cp = $_POST['cp'];
$address = $_POST['address'];

$revenu = $_POST['revenu'];

$mailto = 'vishal@lndl.fr';
$addCC = $mail;
$subject = "Simulation projet pour " . $nom . " " . $prenom;
$msg = "<h3> Logement </h3>";
$msg .= "<ul><li>Type de logement : <strong>" . $logement . "</strong></li>";
$msg .= "<li> Statut : <strong>" . $statut . "</strong></li>";
$msg .= "<li> Ville : <strong>" . $ville . "</strong></li>";
$msg .= "<li> Date de construction : <strong>" . $construction . "</strong></li>";
$msg .= "<li> Type de chauffage : <strong>" . $chauffage . "</strong></li>";
$msg .= "<li>Nombre de personne au foyer <strong>: " . $nbFoyer . "</strong></li></ul>";
$msg .= "<h3> Projet </h3><ul>";

foreach ($projet as $value) {
    $msg .= "<li>" . $value;
    if (!empty($_POST[$value])) {
        $serv = $_POST[$value];
        $msg .= " : ";
        foreach ($serv as $val) {
            $msg .= "<strong>" . $val . "</strong>, ";
        }
    }
    $msg .= "</li>";
}

$msg .= "</ul><h3> Coordonnées </h3>";
$msg .= "<ul><li>Nom : <strong>" . $name . "</strong></li>";
$msg .= "<li>Prénom : <strong>" . $surname . "</strong></li>";
$msg .= "<li> Tél : <strong>" . $phone . "</strong></li></ul>";


sendmail($mailto,$addCC, $subject, $msg);