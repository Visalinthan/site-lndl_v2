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

/* This container is needed to position the front and back side */
.flip-card-inner {
    position: relative;
    width: 100%;
    height: 100%;
    text-align: center;
    transition: transform 0.8s;
    transform-style: preserve-3d;
}

/* Do an horizontal flip when you move the mouse over the flip box container */
.flip-card:hover .flip-card-inner {
    transform: rotateY(180deg);
}

/* Position the front and back side */
.flip-card-front,
.flip-card-back {
    position: absolute;
    width: 100%;
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: space-around;
    -webkit-backface-visibility: hidden;
    /* Safari */
    backface-visibility: hidden;
}

/* Style the front side (fallback if image is missing) */
.flip-card-front {
    background-color: #bbb;
    color: black;
}

/* Style the back side */
.flip-card-back {
    background-color: #bbb;
    color: black;
    transform: rotateY(180deg);
}

.flip-card-back ul {
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
}

.flip-card-back ul li{
    display: flex;
    align-items: center;
    justify-content: center;
    border: 1px solid red;
    width: 50%;
    height: 50%;
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

                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <h1>Particuliers</h1>
                        </div>
                        <div class="flip-card-back">
                            <ul>
                                <li>Isolation</li>
                                <li>PAC</li>
                                <li>VMC</li>
                                <li>Autres Travaux</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <h1>Professionnel</h1>
                        </div>
                        <div class="flip-card-back">
                            <ul>
                                <li>Isolation</li>
                                <li>PAC</li>
                                <li>VMC</li>
                                <li>Autres Travaux</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>


        </div>
        <script src="js/scripts.js"></script>
</body>

</html>