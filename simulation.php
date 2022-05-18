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

    <nav class="navbar simule">
        <div class="nav-logo">
            <a href="home.php">
                <img class="logo-lndl" alt="logo LNDL" src="img/logo.png" />
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
    
    <main id="simulation" class="container">
        <div class="bloc">
            <div class="row bloc_3">
                <div class="col-md-12">
                    <h5>En quelques minutes, estimez le montant de votre projet !</h5>
                    <h5>Nos experts reviendront par la suite vers vous pour vous donner une estimation plus précise !
                    </h5>
                </div>

            </div>
            <form id="form-simule" class="form" name="form" method="POST">

                <div class="row form-step">
                    <h1 class="col-md-12">Mon type de logement :</h1>
                    <input type="radio" id="maison" name="logement" value="maison" required />
                    <label for="maison" class="case col-md-6">
                        <img alt="maison" src="img/simuler/House.png">
                        <h6>Maison</h6>
                    </label>
                    <input type="radio" id="appartement" name="logement" value="appartement" required />
                    <label for="appartement" class="case col-md-6">
                        <img alt="appartement" src="img/simuler/Building.png">
                        <h6>Appartement</h6>
                    </label>
                </div>

                <div class="row form-step">
                    <h1 class="col-md-12">Votre statut :</h1>
                    <input type="radio" id="proprietaire" name="statut" value="proprietaire" required />
                    <label class="case col-md-6" for="proprietaire">
                        <img alt="propriétaire" src="img/simuler/House.png">
                        <h6>Proprétaire</h6>
                    </label>
                    <input type="radio" id="locataire" name="statut" value="locataire" required />
                    <label class="case col-md-6" for="locataire">
                        <img alt="Locataire" src="img/simuler/Building.png">
                        <h6>Locataire</h6>
                    </label>
                </div>

                <div class="row form-step">
                    <h1 class="col-md-12">Quelle est votre surface habitable ?</h1>
                    <div class="form-input">
                        <div class="col-md-6 mb-5">
                            <label for="surface" class="form-label">Surface habitable m²</label>
                            <input type="text" class="form-control" id="surface">
                        </div>
                        <div class="col-md-6 mb-5">
                            <label for="codepostale" class="form-label">Code Postale</label>
                            <input type="number" class="form-control" id="codepostale">
                        </div>
                        <div class="col-md-6 mb-5">
                            <label for="ville" class="form-label">Ville</label>
                            <input type="text" class="form-control" id="ville">
                        </div>
                    </div>
                </div>


                <div class="row form-step">
                    <h1 class="col-md-12">Quelle est la date de construction de votre logement ?</h1>
                    <input type="radio" id="inf2" name="construction" value="inf2" required />
                    <label class="case col-md-4" for="inf2">
                        <h4>Moins de 2 ans</h4>
                    </label>
                    <input type="radio" id="inf15" name="construction" value="inf15" required />
                    <label class="case col-md-4" for="inf15">
                        <h4>Entre 2 et 15 ans</h4>
                    </label>
                    <input type="radio" id="sup15" name="construction" value="sup15" required />
                    <label class="case col-md-4" for="sup15">
                        <h4>Plus de 15 ans</h4>
                    </label>
                </div>

                <div class="row form-step">
                    <h1 class="col-md-12">Quelle est l'énergie de chauffage actuelle de votre logement ?</h1>
                    <input type="radio" id="electricite" name="chauffage" value="electricite" required />
                    <label class="case col-md-4" for="electricite">
                        <img alt="électricité" src="img/simuler/light-bulb.png">
                        <h6>électricite</h6>
                    </label>
                    <input type="radio" id="chauffegaz" name="chauffage" value="chauffegaz" required />
                    <label class="case col-md-4" for="chauffegaz">
                        <img alt="chauffage gaz" src="img/simuler/fire.png">
                        <h6>chauffage au gaz</h6>
                    </label>
                    <input type="radio" id="chauffefioul" name="chauffage" value="chauffefioul" required />
                    <label class="case col-md-4" for="chauffefioul">
                        <img alt="chauffage fioul" src="img/simuler/oil-drum.png">
                        <h6>chauffage au fioul</h6>
                    </label>
                    <input type="radio" id="chauffebois" name="chauffage" value="chauffebois" required />
                    <label class="case col-md-4" for="chauffebois">
                        <img alt="chauffage bois" src="img/simuler/noto_wood.png">
                        <h6>chauffage au bois</h6>
                    </label>
                    <input type="radio" id="chauffecharbon" name="chauffage" value="chauffecharbon" required />
                    <label class="case col-md-4" for="chauffecharbon">
                        <img alt="chauffage charbon" src="img/simuler/combustible.png">
                        <h6>chauffage au charbon</h6>
                    </label>
                    <input type="radio" id="autrechauffe" name="chauffage" value="autrechauffe" required />
                    <label class="case col-md-4" for="autrechauffe">
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

                <div class="btn-form-step">
                    <button type="button" id="prevBtn" class="btn btn-simuler" onclick="nextPrev(-1)">Précédent</button>
                    <button type="button" id="nextBtn" class="btn btn-simuler" onclick="nextPrev(1)">Suivant</button>
                </div>

            </form>

        </div>

    </main>
    <?php include("module/footer.php"); ?>
</body>

</html>

<script src="js/form-step.js"></script>