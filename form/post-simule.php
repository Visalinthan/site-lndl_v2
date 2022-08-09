<?php

require_once "../phpmailer/Config.php";
include "recaptcha.php";

$type = $_POST['type'];
$mail = $_POST['mail'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$tel = $_POST['tel'];
$statut = $_POST['statut'];
$projet = $_POST['projet'];
$ville = $_POST['ville'];
$surface = $_POST['surface'];
$dateConstruct = $_POST['construction'];
$chauffage = $_POST['chauffage'];

if ($type == 'part') {
    $logement = $_POST['logement'];
    $persFoyer = $_POST['nombrePersonne'];
    $numFiscale = $_POST['reference'];

    $mailto = 'infos@lndl.fr';
    $addCC = $mail;
    $subject = "Simulation projet pour " . $nom . " " . $prenom;
    $msg = "<h3> Logement </h3>";
    $msg .= "<ul><li>Type de logement : <strong>" . $logement . "</strong></li>";
    $msg .= "<li> Statut : <strong>" . $statut . "</strong></li>";
    $msg .= "<li> Ville : <strong>" . $ville . "</strong></li>";
    $msg .= "<li> Date de construction : <strong>" . $dateConstruct . "</strong></li>";
    $msg .= "<li> Type de chauffage : <strong>" . $chauffage . "</strong></li>";
    $msg .= "<li>Nombre de personne au foyer <strong>: " . $persFoyer . "</strong></li>";
    $msg .= "<li> Revenu fiscale de référence <strong>: " . $numFiscale . "</strong></li></ul>";
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
    $msg .= "<ul><li>Nom : <strong>" . $nom . "</strong></li>";
    $msg .= "<li>Prénom : <strong>" . $prenom . "</strong></li>";
    $msg .= "<li>Adresse mail : <strong>" . $mail . "</strong></li>";
    $msg .= "<li> Tél : <strong>" . $tel . "</strong></li></ul>";

} elseif ($type == 'pro') {
    $organisation = $_POST['organisation'];
    $siret = $_POST['siret'];
    $impot = $_POST['impot'];
    $fonction = $_POST['fonction'];

    if (!empty($_POST['structure'])) {
        $structure = $_POST['structure'];
    }else{
        $structure = $_POST['other_struct'];
    }
    if (!empty($_POST['immatriculation'])) {
        $immatriculation = $_POST['immatriculation'];
    }
    if (!empty($_POST['nombreLogement'])) {
        $nbLogement = $_POST['nombreLogement'];
    }

    $mailto = 'infos@lndl.fr';
    $addCC = $mail;
    $subject = "Simulation projet pour la société " . $organisation . " par " . $nom . " " . $prenom;
    $msg = "<h3> Structure </h3>";
    $msg .= "<ul><li>Type de structure : <strong>" . $structure . "</strong></li>";
    $msg .= "<li> Statut : <strong>" . $statut . "</strong></li>";
    if (!empty($_POST['nombreLogement'])) {
        $msg .= "<li> Nombre de logement : <strong>" . $nbLogement . "</strong></li>";
    }
    $msg .= "<li> Ville : <strong>" . $ville . "</strong></li>";
    $msg .= "<li> Date de construction : <strong>" . $dateConstruct . "</strong></li>";
    $msg .= "<li> Type de chauffage : <strong>" . $chauffage . "</strong></li>";
    $msg .= "<li>N° Siret <strong>: " . $siret . "</strong></li>";
    if (!empty($_POST['immatriculation'])) {
        $msg .= "<li>N° d'immatriculation copro <strong>: " . $immatriculation . "</strong></li>";
    }
    $msg .= "<li> Impot sur les sociétés : <strong>: " . $impot . "</strong></li></ul>";
    $msg .= "<h3> Projet </h3><ul>";
    foreach ($projet as $value) {
        $msg .= "<li>" . $value;

        if (isset($_POST[$value])) {
            $serv = $_POST[$value];
            $msg .= " : ";
            foreach ($serv as $val) {
                $msg .= "<strong>" . $val . "</strong>, ";
            }
        }

        $msg .= "</li>";
    }

    $msg .= "</ul><h3> Coordonnées </h3>";
    $msg .= "<ul><li>Organisation : <strong>" . $organisation . "</strong></li>";
    $msg .= "<li>Nom : <strong>" . $nom . "</strong></li>";
    $msg .= "<li>Prénom : <strong>" . $prenom . "</strong></li>";
    $msg .= "<li>Fonction : <strong>" . $fonction . "</strong></li>";
    $msg .= "<li>Adresse mail : <strong>" . $mail . "</strong></li>";
    $msg .= "<li> Tél : <strong>" . $tel . "</strong></li></ul>";
}

sendmail($mailto,$addCC, $subject, $msg);