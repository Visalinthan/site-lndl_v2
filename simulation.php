<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>La Nationnale Du Logement</title>
    <meta name="description"
        content="Découvrez l'ensemble des travaux de rénovation énergétique à réaliser et réduisez le coût de vos factures énergie ">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include("module/links.php"); ?>


    <link rel="stylesheet" type="text/css" href="assets/css/form-step.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
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
    </nav>
    <div class="progress">
        <div class="progress-bar"></div>
    </div>
    <main id="simulation">
        <div class="bloc">
            <div class="row bloc_3">
                <div class="col-md-12">
                    <h2>Renseigner les informations de votre projet<br /> vous prendra moins de 2 minutes.</h2>
                    <h5> Essentiel pour que l’on puisse vous conseiller et vous accompagner au plus près de la
                        réalité,<br /> un
                        interlocuteur spécialisé vous contactera dans les 24h ouvrées.
                    </h5>
                </div>

            </div>
            <form id="form-simule" class="form needs-validation " name="form" method="POST" novalidate>

                <div class="row form-step">
                    <h2 class="col-md-12">Quel est votre type de logement ?</h2>

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

                    <h2 class="col-md-12">Votre statut :</h2>

                    <input type="radio" id="proprietaire" name="statut" value="propriétaire" required />
                    <label class="case col-md-6 picto" for="proprietaire">
                        <img alt="propriétaire" src="assets/img/simuler/key">
                        <h6>Proprétaire</h6>
                    </label>
                    <input type="radio" id="locataire" name="statut" value="locataire" required />
                    <label class="case col-md-6 picto" for="locataire">
                        <img alt="Locataire" src="assets/img/simuler/nokey.png">
                        <h6>Locataire</h6>
                    </label>

                </div>

                <div class="row form-step">
                    <h2 class="col-md-12">Quelle est votre surface habitable ?</h2>
                    <div class="form-input">
                        <div class="col-md-4 mb-5">
                            <label for="surface" class="form-label">Surface habitable m²</label>
                            <input type="number" class="form-control" id="surface" name="surface" required>
                        </div>
                    </div>
                    <h2 class="col-md-12">Quelle est votre code postal ? </h2>
                    <div class="row form-input">
                        <div class="col-md-4 mb-5">
                            <label for="codepostale" class="form-label">Code Postal</label>
                            <input type="number" class="form-control" id="codepostale" name="codepostale" required>
                            <div id="error-message"></div>
                        </div>
                        <div class="col-md-4 mb-5">
                            <label for="ville" class="form-label">Ville</label>
                            <select class="form-control" name="ville" id="ville"></select>
                        </div>
                    </div>

                    <h2 class="col-md-12">Quelle est la date de construction de votre logement ?</h2>
                    <input type="radio" id="inf2" name="construction" value="moins de 2 ans" required />
                    <label class="case col-md-4 picto" for="inf2">
                        <h4>Moins de 2 ans</h4>
                    </label>
                    <input type="radio" id="inf15" name="construction" value="plus de 2 ans / moins de 15 ans"
                        required />
                    <label class="case col-md-4 picto" for="inf15">
                        <h4>Entre 2 et 15 ans</h4>
                    </label>
                    <input type="radio" id="sup15" name="construction" value="plus de 15 ans" required />
                    <label class="case col-md-4 picto" for="sup15">
                        <h4>Plus de 15 ans</h4>
                    </label>
                </div>


                <div class="row form-step">

                    <h2 class="col-md-12">Quelle est la composition de votre foyer ?</h2>
                    <div class="form-input">
                        <div class="col-md-6 mb-5">
                            <label for="nbFoyer" class="form-label">Nombre de personne dans votre foyer</label>
                            <input type="number" class="form-control" id="nbFoyer" name="nbFoyer" required>
                        </div>
                    </div>

                </div>

                <div class="row form-step chauffage">
                    <h2 class="col-md-12">Quelle est l'énergie de chauffage actuelle de votre logement ?</h2>
                    <input type="radio" id="electricite" name="chauffage" value="électricité" required />
                    <label class="case col-md-4 picto" for="electricite">
                        <img alt="électricité" src="assets/img/simuler/light-bulb.png">
                        <h6>électricité</h6>
                    </label>
                    <input type="radio" id="chauffegaz" name="chauffage" value="chauffage au gaz" required />
                    <label class="case col-md-4 picto" for="chauffegaz">
                        <img alt="chauffage gaz" src="assets/img/simuler/fire.png">
                        <h6>chauffage au gaz</h6>
                    </label>
                    <input type="radio" id="chauffefioul" name="chauffage" value="chauffage au fioul" required />
                    <label class="case col-md-4 picto" for="chauffefioul">
                        <img alt="chauffage fioul" src="assets/img/simuler/oil-drum.png">
                        <h6>chauffage au fioul</h6>
                    </label>
                    <input type="radio" id="chauffebois" name="chauffage" value="chauffage au bois" required />
                    <label class="case col-md-4 picto" for="chauffebois">
                        <img alt="chauffage bois" src="assets/img/simuler/noto_wood.png">
                        <h6>chauffage au bois</h6>
                    </label>
                    <input type="radio" id="chauffecharbon" name="chauffage" value="chauffage au charbon" required />
                    <label class="case col-md-4 picto" for="chauffecharbon">
                        <img alt="chauffage charbon" src="assets/img/simuler/combustible.png">
                        <h6>chauffage au charbon</h6>
                    </label>
                    <input type="radio" id="autrechauffe" name="chauffage" value="autre chauffage" required />
                    <label class="case col-md-4 picto" for="autrechauffe">
                        <h6>Autre</h6>
                    </label>

                    <!--<div class="form-input" id="input-other-chauffe">
                        <div class="col-md-6 mb-5">
                            <label for="other-chauffe" class="form-label">Autre chauffage</label>
                            <input type="text" class="form-control" id="other-chauffe" name="other-chauffe" required>
                        </div>
                    </div>-->
                </div>

                <div class="row form-step">
                    <h2 class="col-md-12">Quel est votre revenu fiscal ? </h2>
                    <div class="row display-flex">
                        <div class="col-md-6  display-flex">
                            <input type="radio" id="inf26" name="revenu" value="inférieur à 26 844 €" required />
                            <label for="inf26" class="case col-md-6 picto">
                                <img alt="inf26" src="assets/img/simuler/cash.png">
                                <h6>Inférieur à 26 844 € </h6>
                            </label>
                        </div>
                        <div class="col-md-6  display-flex">
                            <input type="radio" id="inf34" name="revenu" value="inférieur à 34 411 €" required />
                            <label for="inf34" class="case col-md-6 picto">
                                <img alt="inf34" src="assets/img/simuler/cash.png">
                                <h6>Inférieur à 34 411 €</h6>
                            </label>
                        </div>
                        <div class="col-md-6  display-flex">
                            <input type="radio" id="inf42" name="revenu" value="inférieur à 42 848 €" required />
                            <label for="inf42" class="case col-md-6 picto">
                                <img alt="inf42" src="assets/img/simuler/cash.png">
                                <h6>Inférieur à 42 848 €</h6>
                            </label>
                        </div>
                        <div class="col-md-6  display-flex">
                            <input type="radio" id="sup51" name="revenu" value="supérieur à 51 592 €" required />
                            <label for="sup51" class="case col-md-6 picto">
                                <img alt="sup51" src="assets/img/simuler/cash.png">
                                <h6>Supérieur à 51 592 € </h6>
                            </label>
                        </div>

                    </div>

                </div>

                <div class="row form-step projet">
                    <h2 class="col-md-12">Votre Projet</h2>

                    <div class="col-md-3">
                        <input type="checkbox" id="iso" name="projet[]" value="isolation" required />
                        <label class="case col-md-3 picto" for="iso">
                            <img alt="isolation" src="assets/img/simuler/isolation.png">
                            <h4>Isolation</h4>
                        </label>
                    </div>

                    <div class="col-md-3">
                        <input type="checkbox" id="pac" name="projet[]" value="pac" required />
                        <label class="case col-md-3 picto" for="pac">
                            <img alt="pompe à chaleur" src="assets/img/simuler/pac.png">
                            <h4>Pompe à chaleur</h4>
                        </label>
                    </div>

                    <div class="col-md-3">
                        <input type="checkbox" id="ventilation" name="projet[]" value="ventilation" required />
                        <label class="case col-md-3 picto" for="ventilation">
                            <img alt="ventilation" src="assets/img/simuler/vmc.png">
                            <h4>Ventilation</h4>
                        </label>
                    </div>

                    <div class="col-md-3">
                        <input type="checkbox" id="tce" name="projet[]" value="tce" required />
                        <label class="case col-md-3 picto" for="tce">
                            <img alt="tout corps d'état" src="assets/img/simuler/tce.png">
                            <h4>Tout Corps d'Etat</h4>
                        </label>
                    </div>

                </div>
                <div class="row form-step serv" id="isolation">

                    <h2 class="col-md-12">Isolation</h2>
                    <input type="checkbox" id="ite" name="isolation[]" value="isolation thermique extérieur" required />
                    <label class="case col-md-4 picto" for="ite">
                        <h4>Isolation thermique extérieur</h4>
                    </label>
                    <input type="checkbox" id="iti" name="isolation[]" value="isolation thermique intérieur" required />
                    <label class="case col-md-4 picto" for="iti">
                        <h4>Isolation thermique intérieur</h4>
                    </label>

                </div>

                <div class="row form-step serv" id="tce">

                    <h2 class="col-md-12">Tout Corps d'État</h2>
                    <input type="checkbox" id="peinture" name="tce[]" value="peinture" required />
                    <label class="case col-md-4 picto" for="peinture">
                        <h4>Peinture</h4>
                    </label>
                    <input type="checkbox" id="electricity" name="tce[]" value="électricité" required />
                    <label class="case col-md-4 picto" for="electricity">
                        <h4>Électricité</h4>
                    </label>
                    <input type="checkbox" id="plomberie" name="tce[]" value="plomberie" required />
                    <label class="case col-md-4 picto" for="plomberie">
                        <h4>Plomberie</h4>
                    </label>
                    <input type="checkbox" id="maconnerie" name="tce[]" value="maçonnerie" required />
                    <label class="case col-md-4 picto" for="maconnerie">
                        <h4>Maçonnerie</h4>
                    </label>
                    <input type="checkbox" id="placo" name="tce[]" value="placoplatre" required />
                    <label class="case col-md-4 picto" for="placo">
                        <h4>Placoplatre</h4>
                    </label>
                    <input type="checkbox" id="demolition" name="tce[]" value="démolition" required />
                    <label class="case col-md-4 picto" for="demolition">
                        <h4>Démolition</h4>
                    </label>
                    <input type="checkbox" id="autre-tce" name="tce[]" value="autre-tce" required />
                    <label class="case col-md-4 picto" for="autre-tce">
                        <h4>Autres</h4>
                    </label>
                    <div class="form-input" id="input-other-chauffe">
                        <div class="col-md-6 mb-5">
                            <label for="other-tce" class="form-label">Autre</label>
                            <input type="text" class="form-control" id="other-tce" name="other-tce" required>
                        </div>
                    </div>
                </div>


                <div class="row form-step">
                    <h2 class="col-md-12">Vos coordonnées</h2>
                    <div class="form-input row">
                        <div class="col-md-6 mb-5">
                            <label for="name" class="form-label">Nom</label>
                            <input type="text" class="form-control" id="name" name="nom" required>
                        </div>
                        <div class="col-md-6 mb-5">
                            <label for="surname" class="form-label">Prénom</label>
                            <input type="text" class="form-control" id="surname" name="prenom" required>
                        </div>
                        <div class="col-md-6 mb-5">
                            <label for="mail" class="form-label">Mail</label>
                            <input type="text" class="form-control" id="mail" name="email" required>
                        </div>
                        <div class="col-md-6 mb-5">
                            <label for="phone" class="form-label">N° Tél</label>
                            <input type="number" class="form-control" id="phone" name="tel" required>
                        </div>
                    </div>

                    <div class="checkbox-accept">
                        <input type="checkbox" name="accept" id="accept">
                        <label for="accept"> J'accepte que mes informations soient recueillies par La Nationale du
                            Logement pour pouvoir
                            être contacté.</label>
                    </div>
                    <div class="form-group row g-recaptcha" data-sitekey="6LdfVB8dAAAAAAc9dXHFkLND44qnPFV8NbQUmwsc">
                    </div>
                </div>

                <div class="row form-step">
                    <h2>Votre simulation a été prise en compte avec succès !</h2>
                    <h6>Merci pour ces informations !</h6>
                    <h6>Notre équipe s’efforce de vous contacter dans les 24h ouvrées pour vous faire la meilleure
                        proposition d’accompagnement.</h6>
                    <img src="assets/img/simuler/success.png" alt="success" class="img-success">
                </div>

                <div class="btn-form-step">
                    <button type="button" id="prevBtn" class="btn btn-simuler" onclick="nextPrev(-1)">Précédent</button>
                    <button type="button" id="nextBtn" class="btn btn-simuler" onclick="nextPrev(1)">Suivant</button>
                </div>

            </form>

        </div>

    </main>
    <?php include("module/footer.php"); ?>
    <script src="assets/js/validation.js"></script>
    <script src="assets/js/form-step.js"></script>
    <script src="assets/js/api-zipcode.js"></script>

    <script>
    /* let otherChauffe = $('#input-other-chauffe');

    $("input").on('change', function(event) {
        if (document.getElementById("autrechauffe").checked) {
            console.log($(this));
            $(this).after(otherChauffe);
        } else {
            $('#input-other-chauffe').remove();
        }
    });*/
    </script>
</body>

</html>