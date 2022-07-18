<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<!--<![endif]-->

<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>Business Consulting HTML Template</title>

    <meta name="author" content="themesflat.com">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

    <!-- icomoon font -->
    <link rel="stylesheet" type="text/css" href="assets/css/icomoon.css">

    <!-- Reponsive -->
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">

    <link rel="stylesheet" type="text/css" href="assets/css/swiper-bundle.min.css">

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="assets/icon/Favicon.png">
    <link rel="apple-touch-icon-precomposed" href="assets/icon/Favicon.png">
    <!--[if lt IE 9]>
        <script src="javascript/html5shiv.js"></script>
        <script src="javascript/respond.min.js"></script>
    <![endif]-->

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
            <?php include("module/header.php")?>
            <!-- #site-header-wrap -->

            <!-- title page -->
            <section class="flat-title-page parallax parallax-9 contact-page-title">
                <div class="container-fluid">
                    <div class="row">
                        <div class="breadcrumbs">
                            <h2 class="section-title-page">Get in Touch</h2>
                            <div class="breadcrumb-trail link-style-2">
                                <a class="home" href="index.html">Home</a><span>Contact Us</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- flat contact -->
            <section class="tf-space flat-contact">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="section-title link-style-2">
                                <h3 class="section-heading">Let's Talk</h3>
                                <div class="features-content-left">
                                    <h2>Speak With Our<br>
                                        Consulti</h2>
                                </div>
                                <div class="contact-icon-box wow fadeInUp" data-wow-delay="0ms"
                                    data-wow-duration="1500ms">
                                    <div class="icon meta-address"></div>
                                    <div class="content">
                                        <h4>66 Broklyant, India 3269 Road.
                                            New Eskaton, New York, USA</h4>
                                    </div>
                                </div>
                                <div class="contact-icon-box wow fadeInUp" data-wow-delay="300ms"
                                    data-wow-duration="1500ms">
                                    <div class="icon meta-mail"></div>
                                    <div class="content">
                                        <a href="mailto:abc@gmail.com">
                                            <h4>Your.Agency@Gmail.Com</h4>
                                        </a>
                                        <a href="mailto:abc@gmail.com">
                                            <h4>My.Shop@Hotmail.Com</h4>
                                        </a>
                                    </div>
                                </div>
                                <div class="contact-icon-box wow fadeInUp" data-wow-delay="600ms"
                                    data-wow-duration="1500ms">
                                    <div class="icon meta-phone"></div>
                                    <div class="content">
                                        <a href="tel:012345678">
                                            <h4>+11 012 888 598 9303</h4>
                                        </a>
                                        <a href="tel:012345678">
                                            <h4>+88 096 965 678 9203</h4>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="title">
                                <h3>Don’t Hesitate<br>
                                    To Send Your Message To Us</h3>
                            </div>
                            <div class="contact-form wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms"
                                id="comments">
                                <form method="post" id="contactform" class="comment-form form-submit"
                                    action="./contact/contact-process.php" accept-charset="utf-8"
                                    novalidate="novalidate">
                                    <div class="text-wrap clearfix">
                                        <fieldset class="name-wrap">
                                            <input type="text" id="name" class="tb-my-input" name="name" tabindex="1"
                                                placeholder="Name*" value="" size="32" aria-required="true" required="">
                                        </fieldset>
                                        <fieldset class="email-wrap">
                                            <input type="email" id="email" class="tb-my-input" name="email" tabindex="2"
                                                placeholder="Email*" value="" size="32" aria-required="true"
                                                required="">
                                        </fieldset>
                                    </div>
                                    <fieldset class="message-wrap">
                                        <textarea id="comment-message" name="message" rows="13" tabindex="4"
                                            placeholder="write your comment" aria-required="true"></textarea>
                                    </fieldset>
                                    <button name="submit" type="submit" id="comment-reply"
                                        class="button btn-style4 btn-submit-comment">Send Message</button>
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
                                src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d7302.453092836291!2d90.47477022812872!3d23.77494577893369!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1svi!2s!4v1627293157601!5m2!1svi!2s"
                                class="map-contact" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /map -->

            <!-- Footer -->
            <?php include("module/footer.php") ?>
            <!-- /#footer -->
</body>

</html>