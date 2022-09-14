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
                        <h3 class="section-heading part">Vous avez un projet ou une réflexion?<br/> Nos interlocuteurs
                            spécialisés LNDL sont à votre écoute<br/> pour construire ensemble la meilleure expertise.
                        </h3>
                        <h3 class="section-heading pro">Nos interlocuteurs spécialisés LNDL sont à votre écoute pour construire ensemble la meilleure expertise.</h3>
                        <div class="col-md-4">

                            <div class="section-title link-style-2">

                                <div class="features-content-left">
                                    <h2> Échangeons</h2>
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
                                <h3 class="part">Avec la hausse des prix de l'énergie, ne rien faire coûte souvent plus cher ! </h3>
                                <h3 class="pro">Réserver aux professionnels </h3>
                            </div>
                            <div class="contact-form wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms"
                                id="comments">
                                <form method="post" id="contactform" class="comment-form form-submit"
                                    accept-charset="utf-8">
                                    <div class="text-wrap clearfix">
                                        <fieldset class="name-wrap">
                                            <input type="text" id="nom" class="tb-my-input" name="nom" tabindex="1"
                                                placeholder="Nom*" value="">
                                        </fieldset>
                                        <fieldset class="tel-wrap">
                                            <input type="number" id="tel" class="tb-my-input" name="tel" tabindex="2"
                                                placeholder="Téléphone*" value="">
                                        </fieldset>
                                    </div>
                                    <div class="text-wrap clearfix">
                                        <fieldset class="surname-wrap">
                                            <input type="text" id="prenom" class="tb-my-input" name="prenom"
                                                tabindex="1" placeholder="Prénom*" value="">
                                        </fieldset>
                                        <fieldset class="email-wrap">
                                            <input type="email" id="mail" class="tb-my-input" name="mail" tabindex="2"
                                                placeholder="Email*" value="">
                                        </fieldset>
                                    </div>

                                    <fieldset class="select-wrap">
                                        <h5 for="choose" style="color: #fff">Vous souhaitez :</h5>
                                        <select name="objet" id="choose">
                                            <option value="">--Choisissez --</option>
                                            <option value="prendre rendez-vous">prendre rendez-vous</option>
                                            <option value="être recontacté">être recontacté</option>
                                            <option value="recevoir une documentation">recevoir une documentation</option>
                                            <option class="part" value="nous rejoindre">nous rejoindre</option>
                                            <option class="pro" value="rejoindre notre réseau de professionnels">rejoindre notre réseau de professionnels</option>
                                            <option value="autre">autre</option>
                                        </select>
                                    </fieldset>

                                    <fieldset class="message-wrap">
                                        <textarea id="comment-message" name="message" rows="13" tabindex="4"
                                            placeholder="Ecrivez votre demande" style="color: #000"></textarea>
                                    </fieldset>

                                    <fieldset class="checkbox-wrap">
                                        <input type="checkbox" name="accept" id="accept">
                                        <label for="accept">J'accepte de recevoir vos e-mails et confirme avoir pris
                                            connaissance de votre politique de confidentialité et mentions légales.
                                            *</label>
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

            <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
            <?php include "module/modal.php"?>

            <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/js/bootstrap.min.js"></script>
            <script src="assets/js/validation.js"></script>
            <script src="assets/js/contact.js"></script>
            <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
            <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>

            <!-- Footer -->
            <?php include("module/footer.php") ?>
            <!-- /#footer -->


        </div>
    </div>
</body>

</html>