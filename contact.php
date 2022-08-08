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

<body class="header-fixed">

    <!-- preloader -->
    <div class="preload preload-container">
        <div class="preload-logo"></div>
    </div>
    <!-- /preloader -->

    <div id="wrapper" class="animsition">
        <div id="page" class="clearfix">
            <!-- Header Wrap -->
            <?php include("module/nav.php")?>

            <!-- flat contact -->
            <section class="tf-space flat-contact">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="section-title link-style-2">
                                <h3 class="section-heading">Echangeons</h3>
                                <div class="features-content-left">
                                    <h2>Nous répondons...</h2>
                                </div>
                                <div class="contact-icon-box wow fadeInUp" data-wow-delay="0ms"
                                    data-wow-duration="1500ms">
                                    <div class="icon meta-address"></div>
                                    <div class="content">
                                        <h4>1 rue de Rome <br /> 93110 Rosny-Sous-Bois</h4>
                                    </div>
                                </div>
                                <div class="contact-icon-box wow fadeInUp" data-wow-delay="300ms"
                                    data-wow-duration="1500ms">
                                    <div class="icon meta-mail"></div>
                                    <div class="content">
                                        <a href="mailto:infos@lndl.fr">
                                            <h4>infos@lndl.fr</h4>
                                        </a>
                                    </div>
                                </div>
                                <div class="contact-icon-box wow fadeInUp" data-wow-delay="600ms"
                                    data-wow-duration="1500ms">
                                    <div class="icon meta-phone"></div>
                                    <div class="content">
                                        <a href="tel:0148551647">
                                            <h4>01 48 55 16 47</h4>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="title">
                                <h3>N'hésitez pas<br />
                                    Pour nous envoyer votre message</h3>
                            </div>
                            <div class="contact-form wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms"
                                id="comments">
                                <form method="post" id="contactform" class="comment-form form-submit"
                                    action="./contact/contact-process.php" accept-charset="utf-8"
                                    novalidate="novalidate">
                                    <div class="text-wrap clearfix">
                                        <fieldset class="name-wrap">
                                            <input type="text" id="name" class="tb-my-input" name="name" tabindex="1"
                                                placeholder="Nom*" value="" size="32" aria-required="true" required="">
                                        </fieldset>
                                        <fieldset class="tel-wrap">
                                            <input type="number" id="email" class="tb-my-input" name="tel" tabindex="2"
                                                placeholder="Téléphone*" value="" size="32" aria-required="true"
                                                required="">
                                        </fieldset>
                                    </div>
                                    <div class="text-wrap clearfix">
                                        <fieldset class="surname-wrap">
                                            <input type="text" id="surname" class="tb-my-input" name="surname" tabindex="1"
                                                placeholder="Prénom*" value="" size="32" aria-required="true" required="">
                                        </fieldset>
                                        <fieldset class="email-wrap">
                                            <input type="email" id="email" class="tb-my-input" name="email" tabindex="2"
                                                placeholder="Email*" value="" size="32" aria-required="true"
                                                required="">
                                        </fieldset>
                                    </div>
                                    <fieldset class="message-wrap">
                                        <textarea id="comment-message" name="message" rows="13" tabindex="4"
                                            placeholder="Ecrivez votre demande" aria-required="true"></textarea>
                                    </fieldset>
                                    <button name="submit" type="submit" id="comment-reply"
                                        class="button btn-style4 btn-submit-comment">Envoyer</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /flat contact -->

            <!-- map -->
            <div class="tf-map">
                <div class="container-fluid">
                    <div class="row">
                        <div class="inner">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.0203341422643!2d2.4721955158539872!3d48.876888907357774!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e612c6c2e64f8f%3A0xce6d8c62340082e!2s1%20Rue%20de%20Rome%2C%2093110%20Rosny-sous-Bois!5e0!3m2!1sfr!2sfr!4v1658756278201!5m2!1sfr!2sfr"
                                class="map-contact" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /map -->

            <!-- Footer -->
            <?php include("module/footer.php") ?>
            <!-- /#footer -->
        </div>
    </div>
</body>

</html>