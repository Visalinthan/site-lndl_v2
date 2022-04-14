<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>La Nationnale Du Logement</title>
    <meta name="description"
        content="Découvrez l'ensemble des travaux de rénovation énergétique à réaliser et réduisez le coût de vos factures énergie ">
    <?php include("module/links.php"); ?>
</head>

<style>
.container-fluid {
    text-align: center;
}

.container .logo {
    padding: 50px;
}

.service-card {
    display: flex;
    justify-content: space-around;

}

.row {
    margin: 0;
    padding: 0;
    --bs-gutter-x: 0
}

/* The flip card container - set the width and height to whatever you want. We have added the border property to demonstrate that the flip itself goes out of the box on hover (remove perspective if you don't want the 3D effect */
.flip-card {
    background-color: transparent;
    width: 30vw;
    height: 50vh;
    border: 1px solid #f1f1f1;
    perspective: 1000px;
    cursor: pointer;
    /* Remove this if you don't want the 3D effect */
}

.service-particulier {
    background-color: transparent;
    width: 90%;
    height: 90%;
    perspective: 1000px;
    cursor: pointer;
    /* Remove this if you don't want the 3D effect */
}

/* This container is needed to position the front and back side */
.flip-card-inner {
    position: relative;
    width: 100%;
    height: 100%;
    text-align: center;
    transition: transform 0.8s;
    transform-style: preserve-3d;
}

.service-particulier-inner {
    position: relative;
    text-align: center;
    transition: transform 0.8s;
    transform-style: preserve-3d;
}

/* Do an horizontal flip when you move the mouse over the flip box container */
.flip-card:hover .flip-card-inner {
    transform: rotateY(-180deg);
}

#service-iso:hover,
#service-pac:hover,
#service-vmc:hover,
#autre-service:hover {
    transform: rotateY(180deg);
}

/* Position the front and back side */
.flip-card-front,
.flip-card-back,
.service-particulier-front,
.service-particulier-back {
    position: absolute;
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    flex-direction: column;
    justify-content: space-around;
    -webkit-backface-visibility: hidden;
    /* Safari */
    backface-visibility: hidden;
    border-radius: 10px;
}


/* Style the front side (fallback if image is missing) */
.flip-card-front,
.service-particulier-front {
    background-color: #bbb;
    color: black;

}


/* Style the back side */
.flip-card-back,
.service-particulier-back {
    background-color: #bbb;
    color: black;
    transform: rotateY(180deg);

}

.service-particulier-front,
.service-particulier-back {
    border: 1px solid #528B37;
}

</style>

<body>

    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-12 logo">
                    <img class="logo-lndl" alt="logo LNDL" src="../img/logo.png" />
                </div>

            </div>
            <div class="row service-card">

                <div class=" col-md-6 flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <h1>Particuliers</h1>
                        </div>
                        <div class="flip-card-back">
                            <div class="service-particulier row">
                                <div id="service-iso" class="col-md-6 service-particulier-inner">
                                    <div class="service-particulier-front">
                                        <h5>Isolation</h5>
                                    </div>
                                    <div class="service-particulier-back">
                                        <button class="btn btn-success">Voir</button>
                                    </div>
                                </div>
                                <div id="service-pac" class="col-md-6 service-particulier-inner">
                                    <div class="service-particulier-front">
                                        <h5>PAC</h5>
                                    </div>
                                    <div class="service-particulier-back">
                                        <button class="btn btn-success">Voir</button>
                                    </div>
                                </div>
                                <div id="service-vmc" class="col-md-6 service-particulier-inner">
                                    <div class="service-particulier-front">
                                        <h5>VMC</h5>
                                    </div>
                                    <div class="service-particulier-back">
                                        <button class="btn btn-success">Voir</button>
                                    </div>
                                </div>
                                <div id="autre-service" class="col-md-6 service-particulier-inner">
                                    <div class="service-particulier-front">
                                        <h5>Autre</h5>
                                    </div>
                                    <div class="service-particulier-back">
                                        <button class="btn btn-success">Voir</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <h1>Professionnels</h1>
                        </div>
                        <div class="flip-card-back">
                            <div class="service-particulier row">
                                <div id="service-iso" class="col-md-6 service-particulier-inner">
                                    <div class="service-particulier-front">
                                        <h5>Isolation</h5>
                                    </div>
                                    <div class="service-particulier-back">
                                        <button class="btn btn-success">Voir</button>
                                    </div>
                                </div>
                                <div id="service-pac" class="col-md-6 service-particulier-inner">
                                    <div class="service-particulier-front">
                                        <h5>PAC</h5>
                                    </div>
                                    <div class="service-particulier-back">
                                        <button class="btn btn-success">Voir</button>
                                    </div>
                                </div>
                                <div id="service-vmc" class="col-md-6 service-particulier-inner">
                                    <div class="service-particulier-front">
                                        <h5>VMC</h5>
                                    </div>
                                    <div class="service-particulier-back">
                                        <button class="btn btn-success">Voir</button>
                                    </div>
                                </div>
                                <div id="autre-service" class="col-md-6 service-particulier-inner">
                                    <div class="service-particulier-front">
                                        <h5>Autre</h5>
                                    </div>
                                    <div class="service-particulier-back">
                                        <button class="btn btn-success">Voir</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


        </div>
        <script src="js/scripts.js"></script>
</body>

</html>