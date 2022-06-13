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

<body>

    <?php include("module/nav.php"); ?>
    <?php include("module/overlay.php"); ?>
    <main id="home" class="container">
        <div class="bloc" data-aos="fade-down" data-aos-duration="500">
            <div class="row" id="bloc_1">
                <div class="col text" data-aos="fade-right" data-aos-duration="1200">
                    <h1>Réalisez des économies, gagnez en confort et agissez pour la planète.</h1>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore repellat quibusdam fugit
                        sequi
                        perferendis ullam fugiat neque tenetur earum autem, libero veniam animi voluptatum totam nisi
                        culpa
                        ea voluptatem quod!</p>
                    <a href="simulation.php" class="btn-simuler">Testez votre éligibilité</a>
                </div>
                <div class="col image" data-aos="fade-left" data-aos-duration="1500">
                    <img src="img/home/famille.png" alt="Lndl vous aide à économiser " />
                </div>
            </div>
        </div>

        <div class="bloc">
            <div class="row">
                <div class="line" data-aos="fade-right" data-aos-duration="1000"></div>
                <div class="col-md-12" data-aos="fade-up" data-aos-duration="1000">
                    <h2>Nous choisir c'est...</h2>
                    <p>
                        Confier ses travaux à des professionnels experts dans leur domaine. Notre entreprise respecte
                        une charte de qualité et nos certifications nous labellisé comme professionnel Reconnu Garant de
                        l'Environnement (RGE).
                    </p>
                </div>
            </div>
            <div class="row bloc_4">
                <div class="col-md-4">
                    <div class="choice" data-aos="flip-right" data-aos-duration="700">
                        <img src="img/home/ep_service.png" alt="Assistance Complète avec la LNDL" />
                        <p>Une assistance complète</p>
                    </div>

                </div>
                <div class="col-md-4">
                    <div class="choice" data-aos="flip-right" data-aos-duration="1000">
                        <img src="img/home/Protect.png" alt="Certifié RGE avec la LNDL" />
                        <p>Des artisans partenaires certifiés RGE</p>
                    </div>

                </div>
                <div class="col-md-4">
                    <div class="choice" data-aos="flip-right" data-aos-duration="1200">
                        <img src="img/home/Guarantee.png" alt="Garantie décénnale avec la LNDL" />
                        <p>Garantie décénnale</p>
                    </div>
                </div>
            </div>
        </div>


        <div class="bloc">
            <div class="row">
                <div class="line" data-aos="fade-right" data-aos-duration="1000"></div>
                <div class="col-md-12">
                    <h2 data-aos="fade-up" data-aos-duration="500">Nos Expertises</h2>
                    <p data-aos="fade-up" data-aos-duration="1000">
                        Acteur de la rénovation énergétique en France, La Nationale du Logement vous accompagne dans vos
                        projets
                        de rénovation.
                    </p>
                    <p data-aos="fade-up" data-aos-duration="1500">
                        Nous vous conseillons et nous réalisons vos projets sur-mesure, en restant disponible tout au
                        long
                        de vos travaux de rénovation. Votre confort est notre priorité et c'est la raison pour laquelle
                        nous
                        améliorons constamment la qualité de nos services.
                    </p>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="service" id="img-iti" data-aos="flip-right" data-aos-duration="700">
                            <h3>ITE / ITI</h3>
                        </div>

                    </div>
                    <div class="col-md-3">
                        <div class="service" id="img-pac" data-aos="flip-right" data-aos-duration="1000">
                            <h3>PAC</h3>
                        </div>

                    </div>
                    <div class="col-md-3">
                        <div class="service" id="img-vmc" data-aos="flip-right" data-aos-duration="1200">
                            <h3>VMC</h3>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="service" id="img-tce" data-aos="flip-right" data-aos-duration="1300">
                            <h3>TCE</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="bloc">
            <div class="row">
                <div class="line" data-aos="flip-right" data-aos-duration="1000"></div>
                <div class="col-md-12 " data-aos="fade-up" data-aos-duration="1000">
                    <h2>Nos certifications</h2>
                    <p>
                        Avec l’augmentation du prix des énergies, ne rien faire revient souvent plus cher !
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 certif" data-aos="flip-right" data-aos-duration="700">
                    <img src="img/home/lndl-certification-rge-qualibat.png" alt="LNDL certification RGE Qualibat" />
                </div>
                <div class="col-md-3 certif" data-aos="flip-right" data-aos-duration="1000">
                    <img src="img/home/lndl-certification-rge-qualipac.png" alt="LNDL certification RGE QualiPac" />
                </div>
                <div class="col-md-3 certif" data-aos="flip-right" data-aos-duration="1200">
                    <img src="img/home/lndl-certification-rge-chauffage.png" alt="LNDL certification RGE Chauffage" />
                </div>
                <div class="col-md-3 certif" data-aos="flip-right" data-aos-duration="1500">
                    <img src="img/home/lndl-certification-rge-ventilation-plus.png"
                        alt="LNDL certification RGE Ventilation Plus" />
                </div>
            </div>
        </div>

    </main>

    <?php include("module/footer.php"); ?>

</body>

</html>