<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>La Nationnale Du Logement</title>
    <meta name="description"
        content="Découvrez l'ensemble des travaux de rénovation énergétique à réaliser et réduisez le coût de vos factures énergie ">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include("module/links.php"); ?>
</head>

<style>
.bloc {
    height: 90vh;
    z-index: 10;
    background-image: url('img/bg.jpg');
    position: relative;
}

.triangle {
    width: 0;
    height: 0;
    border-style: solid;
}

.bloc-right-up {
    position: absolute;
    top: 0;
    right: 0;
    z-index: 12;
}

.bloc-right-up .triangle {
    border-width: 0 25vw 44vh 0;
    border-color: transparent #fff transparent transparent;
}


.bloc-left-down {
    position: absolute;
    bottom: 0;
    left: 0;
    z-index: 12;
}

.bloc-left-down .triangle {
    border-width: 88vh 0 0 30vw;
    border-color: transparent transparent transparent #fff;
}

.bloc-right-down {
    position: absolute;
    bottom: 0;
    right: 0;
    z-index: 12;
}

.bloc-right-down .triangle {
    border-width: 0 0 40vh 25vw;
    border-color: transparent transparent #fff transparent;
}

.bloc-left-up {
    position: absolute;
    top: 0;
    left: 0;
    z-index: 12;
}

.bloc-left-up .triangle {
    border-width: 40vh 30vw 0 0;
    border-color: #fff transparent transparent transparent;

}

.content {
    height: 50%;
    width: 50%;
    position: absolute;
    z-index: 1;
    display: flex;
    align-items: center;
    justify-content: center;
}

.bloc-right-up .content {
    right: 0;
}

.bloc-left-down .content {
    left: 2vw;
    bottom: 5vh;
}

.bloc-left-up .content {
    left: 2vw;
    top: 0;
}

.bloc-right-down .content {
    right: 0;
    bottom: 0;
}

.bloc-center {
    text-align: center;
    margin: 0 auto;
    border: 1px solid red;
    width: 50vw;
}
</style>

<body>

    <?php include("module/nav.php"); ?>
    <?php include("module/overlay.php"); ?>
    <main id="home" class="container">

        <div class="bloc">
            <div class="bloc-right-up">
                <div class="triangle">
                    <div class="content">
                        <a href="simulation.php" class="btn-simuler">Testez votre éligibilité</a>
                    </div>
                </div>
            </div>

            <div class="bloc-left-down">
                <div class="triangle">
                    <div class="content part">
                        <h1>Réalisez des économies, gagnez en confort et agissez pour la planète.</h1>
                    </div>
                    <div class="content pro">
                        <h4>La Nationale Du Logement s’est diversifiée et qualifiée dans le secteur de la rénovation
                            depuis quelques années pour répondre aux besoins de tous.</h4>
                    </div>
                </div>
            </div>

        </div>

        <div class="bloc">
            <div class="bloc-left-up">
                <div class="triangle">
                    <div class="content">
                        <p class="part">
                            La Nationale Du Logement respecte une charte de qualité et possède toutes les certifications
                            et labels permettant d’être Reconnu Garant de l'Environnement (RGE).
                        </p>
                        <p class="pro">
                            Confier vos travaux à des professionnels experts en rénovation.
                        </p>
                    </div>
                </div>
            </div>
            <div class="bloc-center">

                <div class="col-md-12 part">
                    <h2>Nous choisir c'est...</h2>
                    <h4>...confier ses travaux à des professionnels experts dans leur domaine !</h4>
                </div>

                <div class="col-md-12 pro">
                    <h2>Nous faire confiance</h2>
                </div>

                <div class="row bloc_4">
                    <div class="col-md-4">
                        <div class="choice part">
                            <img src="img/home/ep_service.png" alt="Assistance Complète avec la LNDL" />
                            <p>Une assistance complète</p>
                        </div>

                        <div class="choice pro">
                            <h5>Accompagnement de A à Z</h5>
                        </div>

                    </div>
                    <div class="col-md-4">
                        <div class="choice part">
                            <img src="img/home/Protect.png" alt="Certifié RGE avec la LNDL" />
                            <p>Des artisans partenaires certifiés RGE</p>
                        </div>

                        <div class="choice pro">
                            <h5>Un savoir faire reconnu</h5>
                        </div>

                    </div>
                    <div class="col-md-4">
                        <div class="choice part">
                            <img src="img/home/Guarantee.png" alt="Garantie décénnale avec la LNDL" />
                            <p>Garantie décénnale</p>
                        </div>
                        <div class="choice pro">
                            <h5>RGE</h5>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bloc-right-down">
                <div class="triangle">
                    <div class="content">
                        <a href="simulation.php" class="btn-simuler">Testez votre éligibilité</a>
                    </div>
                </div>
            </div>

        </div>

        <div class="bloc">
            <div class="bloc-right-up">
                <div class="triangle">
                    <div class="content">
                        <a href="simulation.php" class="btn-simuler">Testez votre éligibilité</a>
                    </div>
                </div>
            </div>

            <div class="boc-center">
                <div class="col-md-12 part">
                    <h2>Nos Expertises</h2>
                    <p>
                        Acteur de la rénovation énergétique en France, La Nationale du Logement vous accompagne dans
                        vos
                        projets
                        de rénovation.
                    </p>
                    <p>
                        Nous vous conseillons et nous réalisons vos projets sur-mesure, en restant disponible tout
                        au
                        long
                        de vos travaux de rénovation. Votre confort est notre priorité et c'est la raison pour
                        laquelle
                        nous
                        améliorons constamment la qualité de nos services.
                    </p>
                </div>
                <div class="col-md-12 pro">
                    <h2>Nos Prestations</h2>
                </div>
                <div class="row part">

                    <div class="col-md-3">
                        <div class="service" id="img-iti">
                            <h3>ITE / ITI</h3>
                        </div>

                    </div>
                    <div class="col-md-3">
                        <div class="service" id="img-pac">
                            <h3>PAC</h3>
                        </div>

                    </div>
                    <div class="col-md-3">
                        <div class="service" id="img-vmc">
                            <h3>VMC</h3>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="service" id="img-tce">
                            <h3>TCE</h3>
                        </div>
                    </div>
                </div>
                <div class="row pro">

                    <div class="col-md-4">
                        <div class="flip-card">
                            <div class="flip-card-inner">
                                <div class="flip-card-front">
                                    <h3>Rénovation énérgétique</h3>
                                </div>
                                <div class="flip-card-back">
                                    <ul>
                                        <li>Calorifugeage</li>
                                        <li>Les points singuliers</li>
                                        <li>Rééquilibrage de réseau hydraulique</li>
                                        <li>ITE</li>
                                        <li>Pompe à chaleur</li>
                                        <li>VMC</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="flip-card">
                            <div class="flip-card-inner">
                                <div class="flip-card-front">
                                    <h3>Tout corp d’état</h3>
                                </div>
                                <div class="flip-card-back">
                                    <ul>
                                        <li>Ventilation</li>
                                        <li>Ravalement</li>
                                        <li>Couverture étanchéité</li>
                                        <li>Peinture</li>
                                        <li>Revetement de sol</li>
                                        <li>Plomberie</li>
                                        <li>Electricité</li>
                                        <li>Maçonnerie Platrerie</li>
                                        <li>Gros Oeuvre</li>
                                        <li>Second Oeuvre</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="flip-card">
                            <div class="flip-card-inner">
                                <div class="flip-card-front">
                                    <h3>Démolition</h3>
                                </div>
                                <div class="flip-card-back">
                                    <ul>
                                        <li>Désamiantage</li>
                                        <li>Déplombage</li>
                                        <li>Curage</li>
                                        <li>Déconstruction</li>
                                        <li>Démolition</li>
                                        <li>Recyclage</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <div class="bloc-left-down">
                <div class="triangle">
                    <div class="content">
                    </div>
                </div>
            </div>

        </div>

        <div class="bloc">
            <div class="bloc-left-up">
                <div class="triangle">
                    <div class="content">

                    </div>
                </div>
            </div>
            <div class="bloc-center">


            </div>

            <div class="bloc-right-down">
                <div class="triangle">
                    <div class="content">
                        <a href="simulation.php" class="btn-simuler">Testez votre éligibilité</a>
                    </div>
                </div>
            </div>

        </div>

    </main>

    <?php include("module/footer.php"); ?>

</body>

</html>