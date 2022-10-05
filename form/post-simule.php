<?php

require_once "../phpmailer/Config.php";
include "recaptcha.php";

$logement = $_POST['logement'];
$statut = $_POST['statut'];

$surface = $_POST['surface'];
$cp = $_POST['codepostale'];
$ville = $_POST['ville'];
$construction = $_POST['construction'];

$nbFoyer = $_POST['nbFoyer'];

$chauffage = $_POST['chauffage'];

$revenu = $_POST['revenu'];

$projet = $_POST['projet'];

if (!empty($_POST['iso'])) {
    $iso = $_POST['iso'];
}

if (!empty($_POST['tce'])) {
    $tce = $_POST['tce'];
}

if (!empty($_POST['other-chauffe'])) {
    $otherChauffe = $_POST['other-chauffe'];
}



$name = $_POST['nom'];
$surname = $_POST['prenom'];
$mail = $_POST['email'];
$phone = $_POST['tel'];



$mailto = 'infos@lndl.fr';
$addCC = null;
$subject = "Simulation projet pour " . $name . " " . $surname;
$msg = "<h3> Logement </h3>";
$msg .= "<ul><li>Type de logement : <strong>" . $logement . "</strong></li>";
$msg .= "<li> Statut : <strong>" . $statut . "</strong></li>";
$msg .= "<li> Surface habitable : <strong>" . $surface . "</strong></li>";
$msg .= "<li> Code Postale : <strong>" . $cp . "</strong></li>";
$msg .= "<li> Ville : <strong>" . $ville . "</strong></li>";
$msg .= "<li> Date de construction : <strong>" . $construction . "</strong></li>";
$msg .= "<li> Nombre de personne au foyer <strong>: " . $nbFoyer . "</strong></li>";

if (!empty($_POST['other-chauffe'])) {
    $msg .= "<li> Autre type de chauffage : <strong>" . $otherChauffe . "</strong></li>";
}else{
    $msg .= "<li> Type de chauffage : <strong>" . $chauffage . "</strong></li>";
}

$msg .= "<li> Revenu fiscal : <strong>" . $revenu . "</strong></li></ul>";


$msg .= "<h3> Projet </h3><ul>";

foreach ($projet as $value) {
    $msg .= "<li>" . $value;
    if (!empty($_POST[$value])) {
        $serv = $_POST[$value];
        $msg .= " : ";
        foreach ($serv as $val) {
            if ($val == "autre-tce"){
                $msg .=  $val . ": ";
            }else{
                $msg .= "<strong>" . $val . "</strong>, ";
            }
        }
    }
    $msg .= "</li>";
}

$msg .= "</ul><h3> Coordonnées </h3>";
$msg .= "<ul><li>Nom : <strong>" . $name . "</strong></li>";
$msg .= "<li>Prénom : <strong>" . $surname . "</strong></li>";
$msg .= "<li>Mail : <strong>" . $mail . "</strong></li>";
$msg .= "<li> Tél : <strong>" . $phone . "</strong></li></ul>";


sendmail($mailto,$addCC, $subject, $msg);