<?php
/**
 * @file      gabarit.php
 * @brief     This view is designed to centralize all common graphical component like header and footer (will be call by all views)
 * @author    Created by Pascal.BENZONANA
 * @author    Updated by Nicolas.GLASSEY
 * @version   13-APR-2020
 */

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>aranoz</title>


    <link rel="icon" href="view/content/img/favicon.png" type="text/css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="view/content/css/bootstrap.min.css" type="text/css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="view/content/css/animate.css" type="text/css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="view/content/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="view/content/css/lightslider.min.css">
    <!-- nice select CSS -->
    <link rel="stylesheet" href="view/content/css/nice-select.css" type="text/css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="view/content/css/all.css" type="text/css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="view/content/css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="view/content/css/themify-icons.css" type="text/css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="view/content/css/magnific-popup.css" type="text/css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="view/content/css/slick.css" type="text/css">
    <link rel="stylesheet" href="view/content/css/price_rangs.css" type="text/css"> <!-- Not working -->
    <!-- style CSS -->
    <link rel="stylesheet" href="view/content/css/style.css" type="text/css">


</head>
<body>

<!--::header part start::-->
<header class="main_menu home_menu">

    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="index.php"> <img src="view/content/img/logo.png" alt="logo"> </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                        <span class="menu_icon"><i class="fas fa-bars"></i></span>
                    </button>

                    <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="index.php?action=home" <?php if ((@$_GET['action'] == 'home')): ?> style="color:#FC05CB"  <?php endif; ?>>Accueil</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="index.php?action=displayArticles" <?php if (@$_GET['action'] == "displayArticles"): ?> style="color:#FC05CB"  <?php endif; ?>>Produits</a>
                            </li>
                            <!--<?php echo 'userEmailAddress : ' . !isset($_SESSION['userEmailAddress']) . ' action : ' . !isset($_GET['action'])?> -->
                            <?php if (!isset($_SESSION['userEmailAddress']) || (!isset($_GET['action'])) || ((@$_GET['action'] == "logout"))) : ?>
                                <li class="nav-item"><a class="nav-link" href="index.php?action=login" <?php if (@$_GET['action'] == "login"): ?> style="color:#FC05CB"  <?php endif; ?>>Login</a></li>
                                <li class="nav-item"><a class="nav-link" href="index.php?action=register" <?php if (@$_GET['action'] == "register"): ?> style="color:#FC05CB"  <?php endif; ?>> S'inscrire</a>
                                </li>
                            <?php else : ?>
                                <!-- Display the button useful for logout-->
                                <li class="nav-item"><a class="nav-link" href="index.php?action=logout" <?php if (@$_GET['action'] == "logout"): ?> style="color:#FC05CB"  <?php endif; ?>>Se déconnecter</a></li>
                            <?php endif; ?>
                            <!-- after login, we display the user name-->
                            <?php if (isset($_SESSION['userEmailAddress'])) : ?>
                                <li class="nav-item" style="padding-left: 200px">
                                    <a class="nav-link">Vous êtes connecté : <?= $_SESSION['userEmailAddress']; ?></a>
                                </li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- Header part end-->


<div class="span12" id="divMain">
    <?= $content; ?>
</div>

<!--________FIN CONTENU________-->


<!--::footer_part start::-->
<footer class="footer_part">
    <div class="container">
        <div class="row justify-content-around">
            <div class="col-sm-6 col-lg-2">
                <div class="single_footer_part">
                    <h4>Top Products</h4>
                    <ul class="list-unstyled">
                        <li><a href="">Managed Website</a></li>
                        <li><a href="">Manage Reputation</a></li>
                        <li><a href="">Power Tools</a></li>
                        <li><a href="">Marketing Service</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 col-lg-2">
                <div class="single_footer_part">
                    <h4>Quick Links</h4>
                    <ul class="list-unstyled">
                        <li><a href="">Jobs</a></li>
                        <li><a href="">Brand Assets</a></li>
                        <li><a href="">Investor Relations</a></li>
                        <li><a href="">Terms of Service</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 col-lg-2">
                <div class="single_footer_part">
                    <h4>Features</h4>
                    <ul class="list-unstyled">
                        <li><a href="">Jobs</a></li>
                        <li><a href="">Brand Assets</a></li>
                        <li><a href="">Investor Relations</a></li>
                        <li><a href="">Terms of Service</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 col-lg-2">
                <div class="single_footer_part">
                    <h4>Resources</h4>
                    <ul class="list-unstyled">
                        <li><a href="">Guides</a></li>
                        <li><a href="">Research</a></li>
                        <li><a href="">Experts</a></li>
                        <li><a href="">Agencies</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="single_footer_part">
                    <h4>Newsletter</h4>
                    <p>Heaven fruitful doesn't over lesser in days. Appear creeping
                    </p>
                    <div id="mc_embed_signup">
                        <form target="_blank"
                              action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                              method="get" class="subscribe_form relative mail_part">
                            <input type="email" name="email" id="newsletter-form-email" placeholder="Email Address"
                                   class="placeholder hide-on-focus" onfocus="this.placeholder = ''"
                                   onblur="this.placeholder = ' Email Address '">
                            <button type="submit" name="submit" id="newsletter-submit"
                                    class="email_icon newsletter-submit button-contactForm">subscribe
                            </button>
                            <div class="mt-10 info"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="copyright_part">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="copyright_text">
                        <P><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                            All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i>
                            by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></P>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="footer_icon social_icon">
                        <ul class="list-unstyled">
                            <li><a href="#" class="single_social_icon"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#" class="single_social_icon"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#" class="single_social_icon"><i class="fas fa-globe"></i></a></li>
                            <li><a href="#" class="single_social_icon"><i class="fab fa-behance"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--::footer_part end::-->

<!-- jquery plugins here-->
<script src="view/content/js/jquery-1.12.1.min.js"></script>
<!-- popper js -->
<script src="view/content/js/popper.min.js"></script>
<!-- bootstrap js -->
<script src="view/content/js/bootstrap.min.js"></script>
<!-- easing js -->
<script src="view/content/js/jquery.magnific-popup.js"></script>
<!-- swiper js -->
<script src="view/content/js/swiper.min.js"></script>
<!-- swiper js -->
<script src="view/content/js/masonry.pkgd.js"></script>
<script src="view/content/js/lightslider.min.js"></script>
<script src="view/content/js/masonry.pkgd.js"></script>
<!-- particles js -->
<script src="view/content/js/owl.carousel.min.js"></script>
<script src="view/content/js/jquery.nice-select.min.js"></script>
<!-- slick js -->
<script src="view/content/js/slick.min.js"></script>
<script src="view/content/js/jquery.counterup.min.js"></script>
<script src="view/content/js/swiper.jquery.js"></script>
<script src="view/content/js/waypoints.min.js"></script>
<script src="view/content/js/contact.js"></script>
<script src="view/content/js/jquery.ajaxchimp.min.js"></script>
<script src="view/content/js/jquery.form.js"></script>
<script src="view/content/js/jquery.validate.min.js"></script>
<script src="view/content/js/mail-script.js"></script>
<script src="view/content/js/price_rangs.js"></script>
<script src="view/content/js/stellar.js"></script>
<!-- custom js -->
<script src="view/content/js/custom.js"></script>
<script src="view/content/js/theme.js"></script>


</body>
</html>