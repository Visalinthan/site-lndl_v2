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
.bloc{
    height: 90vh;
    border: 1px solid red;
    position: relative;
    z-index: 10;
    background-color: #fff;
    
}
.diagonal-right {
	background-image: linear-gradient(45deg, #6303B1, #ff0099);
    height: 90vh;
    transform: skewY(31deg);
    z-index: -10;
} 

.diagonal-left {
	background-image: linear-gradient(45deg, #6303B1, #ff0099);
    height: 90vh;
    transform: skewY(-31deg);
    z-index: -10;
} 

.content { 	
	max-width: 50em;
    margin: 0 auto; 
}
</style>
<body>

    <?php include("module/nav.php"); ?>
    <?php include("module/overlay.php"); ?>
    <main id="home" class="container">

        <div class="bloc">
            <div class="diagonal-right">
                <div class="content"> ... </div>
            </div>
        </div>

        <div class="bloc">
            <div class="diagonal-left">
                <div class="content"> ... </div>
            </div>
        </div>
        <div class="bloc">
            <div class="diagonal-right">
                <div class="content"> ... </div>
            </div>
        </div>

        <div class="bloc">
            <div class="diagonal-left">
                <div class="content"> ... </div>
            </div>
        </div>
        <div class="bloc">
            <div class="diagonal-right">
                <div class="content"> ... </div>
            </div>
        </div>

        <div class="bloc">
            <div class="diagonal-left">
                <div class="content"> ... </div>
            </div>
        </div>
    </main>

    <?php //include("module/footer.php"); ?>

</body>

</html>