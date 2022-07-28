<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>La Nationnale Du Logement</title>
    <meta name="description"
        content="Découvrez l'ensemble des travaux de rénovation énergétique à réaliser et réduisez le coût de vos factures énergie ">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include("module/links.php"); ?>


    <link rel="stylesheet" type="text/css" href="assets/css/form-step.css">
</head>

<body>

    <!-- preloader -->
    <div class="preload preload-container">
        <div class="preload-logo"></div>
    </div>
    <!-- /preloader -->

    <nav class="navbar simule">
        <div class="nav-logo">
            <a href="home.php">
                <img class="logo-lndl" alt="logo LNDL" src="assets/img/logo.png" />
            </a>
        </div>
        <div class="progressbar">
            <div class="progress-step active">
                <div class="point"></div>
            </div>
            <div class="progress-step">
                <div class="point"></div>
            </div>
            <div class="progress-step">
                <div class="point"></div>
            </div>
            <div class="progress-step">
                <div class="point"></div>
            </div>
        </div>
    </nav>

    <main id="simulation">
        <div class="bloc">
            <div class="row bloc_3">
                <div class="col-md-12">
                    <h5>En quelques minutes, estimez le montant de votre projet !</h5>
                    <h5>Nos experts reviendront par la suite vers vous pour vous donner une estimation plus précise !
                    </h5>
                </div>

            </div>
            <form id="form-simule" class="form needs-validation " name="form" method="POST" novalidate>

                 <div class="row form-step">
                    <h1 class="col-md-12">Mon type de logement :</h1>
                    <input type="radio" id="maison" name="logement" value="maison" required />
                    <label for="maison" class="case col-md-6 picto">
                        <img alt="maison" src="assets/img/simuler/House.png">
                        <h6>Maison</h6>
                    </label>
                    <input type="radio" id="appartement" name="logement" value="appartement" required />
                    <label for="appartement" class="case col-md-6 picto">
                        <img alt="appartement" src="assets/img/simuler/Building.png">
                        <h6>Appartement</h6>
                    </label>
                </div>

                <div class="row form-step">
                    <h1 class="col-md-12">Votre statut :</h1>
                    <input type="radio" id="proprietaire" name="statut" value="proprietaire" required />
                    <label class="case col-md-6 picto" for="proprietaire">
                        <img alt="propriétaire" src="assets/img/simuler/House.png">
                        <h6>Proprétaire</h6>
                    </label>
                    <input type="radio" id="locataire" name="statut" value="locataire" required />
                    <label class="case col-md-6 picto" for="locataire">
                        <img alt="Locataire" src="assets/img/simuler/Building.png">
                        <h6>Locataire</h6>
                    </label>
                </div>

                <div class="row form-step">
                    <h1 class="col-md-12">Quelle est votre surface habitable ?</h1>
                    <div class="form-input">
                        <div class="col-md-6 mb-5">
                            <label for="surface" class="form-label">Surface habitable m²</label>
                            <input type="text" class="form-control" id="surface" name="surface">
                        </div>
                        <div class="col-md-6 mb-5">
                            <label for="codepostale" class="form-label">Code Postale</label>
                            <input type="number" class="form-control" id="codepostale" name="codepostale">
                            <div style="display: none; color: #f55;" id="error-message"></div>
                        </div>
                        <div class="col-md-6 mb-5">
                            <label for="ville" class="form-label">Ville</label>

                            <select class="form-control" name="ville" id="ville"></select>
                        </div>
                    </div>
                </div>


                <div class="row form-step">
                    <h1 class="col-md-12">Quelle est la date de construction de votre logement ?</h1>
                    <input type="radio" id="inf2" name="construction" value="inf2" required />
                    <label class="case col-md-4 picto" for="inf2">
                        <h4>Moins de 2 ans</h4>
                    </label>
                    <input type="radio" id="inf15" name="construction" value="inf15" required />
                    <label class="case col-md-4 picto" for="inf15">
                        <h4>Entre 2 et 15 ans</h4>
                    </label>
                    <input type="radio" id="sup15" name="construction" value="sup15" required />
                    <label class="case col-md-4 picto" for="sup15">
                        <h4>Plus de 15 ans</h4>
                    </label>
                </div>

                <div class="row form-step">
                    <h1 class="col-md-12">Quelle est l'énergie de chauffage actuelle de votre logement ?</h1>
                    <input type="radio" id="electricite" name="chauffage" value="electricite" required />
                    <label class="case col-md-4 picto" for="electricite">
                        <img alt="électricité" src="assets/img/simuler/light-bulb.png">
                        <h6>électricite</h6>
                    </label>
                    <input type="radio" id="chauffegaz" name="chauffage" value="chauffegaz" required />
                    <label class="case col-md-4 picto" for="chauffegaz">
                        <img alt="chauffage gaz" src="assets/img/simuler/fire.png">
                        <h6>chauffage au gaz</h6>
                    </label>
                    <input type="radio" id="chauffefioul" name="chauffage" value="chauffefioul" required />
                    <label class="case col-md-4 picto" for="chauffefioul">
                        <img alt="chauffage fioul" src="assets/img/simuler/oil-drum.png">
                        <h6>chauffage au fioul</h6>
                    </label>
                    <input type="radio" id="chauffebois" name="chauffage" value="chauffebois" required />
                    <label class="case col-md-4 picto" for="chauffebois">
                        <img alt="chauffage bois" src="assets/img/simuler/noto_wood.png">
                        <h6>chauffage au bois</h6>
                    </label>
                    <input type="radio" id="chauffecharbon" name="chauffage" value="chauffecharbon" required />
                    <label class="case col-md-4 picto" for="chauffecharbon">
                        <img alt="chauffage charbon" src="assets/img/simuler/combustible.png">
                        <h6>chauffage au charbon</h6>
                    </label>
                    <input type="radio" id="autrechauffe" name="chauffage" value="autrechauffe" required />
                    <label class="case col-md-4 picto" for="autrechauffe">
                        <h6>Autre</h6>
                    </label>
                </div>

                <div class="row form-step">
                    <h1 class="col-md-12">Quelle est la composition de votre foyer ?</h1>
                    <div class="form-input">
                        <div class="col-md-6 mb-5">
                            <label for="nbFoyer" class="form-label">Nombre de personne dans votre foyer :</label>
                            <input type="text" class="form-control" id="nbFoyer">
                        </div>
                        <div class="col-md-6 mb-5">
                            <label for="revenuFiscal" class="form-label">Revenu fiscal de référence</label>
                            <input type="number" class="form-control" id="revenuFiscal">
                        </div>
                    </div>
                </div>


                <div class="row form-step">
                    <h2 class="col-md-12">Votre Projet</h2>

                    <input type="checkbox" id="iso" name="projet" value="iso" required />
                    <label class="case col-md-3 picto" for="iso">
                        <h4>Isolation</h4>
                    </label>
                    <input type="checkbox" id="chauffage" name="projet" value="chauffage" required />
                    <label class="case col-md-3 picto" for="chauffage">
                        <h4>Chauffage climatisation</h4>
                    </label>
                    <input type="checkbox" id="ventilation" name="projet" value="ventilation" required />
                    <label class="case col-md-3 picto" for="ventilation">
                        <h4>Ventilation</h4>
                    </label>
                    <input type="checkbox" id="tce" name="projet" value="tce" required />
                    <label class="case col-md-3 picto" for="tce">
                        <h4>TCE</h4>
                    </label>

                </div>
                <div class="row form-step isolation">

                    <h2 class="col-md-12">Isolation</h2>
                    <input type="radio" id="combles" name="isolation" value="combles" required />
                    <label class="case col-md-4 picto" for="combles">
                        <h4>Isolation des combles</h4>
                    </label>
                    <input type="radio" id="toiture" name="isolation" value="toiture" required />
                    <label class="case col-md-4 picto" for="toiture">
                        <h4>Isolation de la toiture</h4>
                    </label>
                    <input type="radio" id="sanitaires" name="isolation" value="sanitaires" required />
                    <label class="case col-md-4 picto" for="sanitaires">
                        <h4>Isolation des vides sanitaires</h4>
                    </label>
                    <input type="radio" id="garages" name="isolation" value="garages" required />
                    <label class="case col-md-4 picto" for="garages">
                        <h4>Isolation des garages</h4>
                    </label>
                    <input type="radio" id="caves" name="isolation" value="caves" required />
                    <label class="case col-md-4 picto" for="caves">
                        <h4>Isolation des caves et sous-sol</h4>
                    </label>

                </div>
                <div class="row form-step chauffage">

                    <h2 class="col-md-12">Chauffage climatisation</h2>
                    <input type="radio" id="air-eau" name="pac" value="air-eau" required />
                    <label class="case col-md-4 picto" for="air-eau">
                        <h4>Pompe à chaleur air-eau</h4>
                    </label>
                    <input type="radio" id="air-air" name="pac" value="air-air" required />
                    <label class="case col-md-4 picto" for="air-air">
                        <h4>Pompe à chaleur air-air</h4>
                    </label>
                    <input type="radio" id="thermo" name="pac" value="thermo" required />
                    <label class="case col-md-4 picto" for="thermo">
                        <h4>Chauffe-eau thermodynamique</h4>
                    </label>
                    <input type="radio" id="geothermique" name="pac" value="geothermique" required />
                    <label class="case col-md-4 picto" for="geothermique">
                        <h4>Pompe à chaleur géothermique</h4>
                    </label>
                    <input type="radio" id="climatiseur" name="pac" value="climatiseur" required />
                    <label class="case col-md-4 picto" for="climatiseur">
                        <h4>Climatiseur</h4>
                    </label>

                </div>
                <div class="row form-step ventilation">

                    <h2 class="col-md-12">Ventilation</h2>
                    <input type="radio" id="vmc" name="ventilation" value="vmc" required />
                    <label class="case col-md-4 picto" for="vmc">
                        <h4>VMC</h4>
                    </label>
                    <input type="radio" id="vmr" name="ventilation" value="vmr" required />
                    <label class="case col-md-4 picto" for="vmr">
                        <h4>VMR</h4>
                    </label>

                </div>
                <div class="row form-step tce">

                    <h2 class="col-md-12">TCE</h2>
                    <input type="radio" id="peinture" name="tce" value="peinture" required />
                    <label class="case col-md-4 picto" for="peinture">
                        <h4>Peinture</h4>
                    </label>
                    <input type="radio" id="electricite" name="tce" value="electricite" required />
                    <label class="case col-md-4 picto" for="electricite">
                        <h4>Electricité</h4>
                    </label>
                    <input type="radio" id="plomberie" name="tce" value="plomberie" required />
                    <label class="case col-md-4 picto" for="plomberie">
                        <h4>Plomberie</h4>
                    </label>
                    <input type="radio" id="maconnerie" name="tce" value="maconnerie" required />
                    <label class="case col-md-4 picto" for="maconnerie">
                        <h4>Maçonnerie</h4>
                    </label>
                    <input type="radio" id="placo" name="tce" value="placo" required />
                    <label class="case col-md-4 picto" for="placo">
                        <h4>Placoplatre</h4>
                    </label>
                    <input type="radio" id="demolition" name="tce" value="demolition" required />
                    <label class="case col-md-4 picto" for="demolition">
                        <h4>Démolition</h4>
                    </label>
                    <input type="radio" id="autre-tce" name="tce" value="autre-tce" required />
                    <label class="case col-md-4 picto" for="autre-tce">
                        <h4>Autres</h4>
                    </label>

                </div>

                <div class="btn-form-step">
                    <button type="button" id="prevBtn" class="btn btn-simuler" onclick="nextPrev(-1)">Précédent</button>
                    <button type="button" id="nextBtn" class="btn btn-simuler" onclick="nextPrev(1)">Suivant</button>
                </div>

            </form>

        </div>

    </main>
    <?php include("module/footer.php"); ?>
    <script src="assets/js/form-step.js"></script>
    <script src="assets/js/api-zipcode.js"></script>

</body>

</html>