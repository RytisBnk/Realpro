<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
    <!-- description -->
    <meta name="description" content="Internetiniai nekilnojamo turto brokeriai. Minimalaus plano kaina TIK 99eur! Parduosime Jūsų nekilnojamą turtą geriausia kaina! Jokių paslėptų mokęsčių!">
    <!-- keywords -->
    <meta name="keywords" content="nekilnojamas turtas,agentas,NT,brokeris,
    namai,parduoti,butai,namai,brokeriai,komersinis,prekyba,sklypas,pigiausia,99eur">
    <!-- title -->
    <title>@yield('title')</title>
    <!-- favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="https://realpro.lt/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="https://realpro.lt/img/favicon-16x16.png">
    <!-- animation -->
    <link rel="stylesheet" href="css/animate.min.css" />
    <!-- bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- font-awesome icon -->
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <!-- magnific popup -->
    <link rel="stylesheet" href="css/magnific-popup.min.css" />
    <!-- cube Portfolio -->
    <link rel="stylesheet" href="css/jquery.fancybox.min.css" />
    <!-- revolution slider -->
    <link rel="stylesheet" href="revolution/css/settings.css" />
    <!-- owl carousel -->
    <link rel="stylesheet" href="css/owl.carousel.min.css" />
    <link rel="stylesheet" href="css/owl.theme.default.min.css" />
    <!-- bundle css -->
    <link rel="stylesheet" href="css/core.css" />
    <!-- style -->
    <link rel="stylesheet" href="css/style.css" />
    <!-- Custom Style -->
    <link rel="stylesheet" href="css/custom.css" /> @yield('style')
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="90" class="side-nav">
    <?php 
    /*
    <div id="loader">
        <div class="loader-inner">
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div>
    </div> */
    ?>

    <!-- start header -->
    <header class="sticky header-appear">
        <!-- start navigation -->
        <nav class="navbar navbar-default bootsnav navbar-fixed-top nav-white header-light bg-transparent nav_line">
            <div class="container nav-header-container nav-row">
                <div class="row">
                    <div class="col-md-2 col-xs-5">
                        <a href="{{ route('index') }}" title="Logo" class="logo"><img src="img/logo.png"
                                                                              class="logo-dark" alt="realpro"><img
                            src="img/logo.png" alt="realpro" class="logo-light default"></a>
                        <div class="contact-detail">
                            <i style="margin-left: 30px;" class="fa fa-phone"></i>
                            <a href="tel:+37061266668">+370 6126 6668</a>
                        </div>
                        <div class="contact-detail">
                            <i style="margin-left: 30px;" class="fa fa-envelope"></i>
                            <a href="mailto:info@realpro.lt">info@realpro.lt</a>
                        </div>
                    </div>
                    <!-- end logo -->
                    <div class="col-md-7 col-xs-2 width-auto pull-right accordion-menu xs-no-padding-right hidden-sm hidden-xs">
                        <div class="navbar-collapse collapse pull-right" id="navbar-collapse-toggle-1">
                            <ul class="nav navbar-nav navbar-left no-margin alt-font text-normal">
                                <!-- start menu item -->
                                <li class="top-navbar-link">
                                    <a href="{{ route('features') }}">Kaip tai veikia</a>
                                </li>
                                <li class="top-navbar-link">
                                    <a href="{{ route('about') }}">Apie mus</a>
                                </li>
                                <li class="top-navbar-link">
                                    <a href="{{ route('plans') }}">Kainoraštis</a>
                                </li>
                                <li class="top-navbar-link">
                                    <a href="{{ route('contact') }}" id="top-left-nav-item">Kontaktai</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--side nav -->
                    <div id="menu_bars" class="right menu_bars side-menu">
                        <span class="t1"></span>
                        <span class="t2"></span>
                        <span class="t3"></span>
                    </div>
                    <div class="sidebar_menu">
                        <nav class="pushmenu pushmenu-right">
                            <a class="push-logo" href="#."><img src="img/logo.png" alt="logo"></a>
                            <div class="medium-icon side-nav-social-icon list-inline" style="padding-right: 0; margin-right: 0;">
                                <a class="facebook-bg-hvr" href="#."><i class="fa fa-facebook" aria-hidden="true"></i></a>

                                <a class="pinterest-bg-hvr" href="#."><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>

                                <a class="instagram-bg-hvr" href="#."><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                <a class="phone-icon" href="#"><i class="fa fa-phone"></i></a>
                                <a class="email-icon" href="#"><i class="fa fa-envelope"></i></a>
                            </div>
                            <ul class="push_nav centered">
                                <li class="clearfix">
                                    <a href="{{ route('features') }}"> <span>01.</span>Kaip tai veikia</a>

                                </li>
                                <li class="clearfix">
                                    <a href="{{ route('about') }}"> <span>02.</span>Apie mus</a>

                                </li>
                                <li class="clearfix">
                                    <a href="{{ route('plans') }}"> <span>03.</span>Kainoraštis</a>

                                </li>
                                <li class="clearfix">
                                    <a href="{{ route('contact') }}"> <span>04.</span>Kontaktai</a>
                                </li>

                            </ul>

                            <p class="push-bottom text-white text-small">2018 © Realpro.lt, UAB "Emiras", įmonės kodas 304836394, Tel. nr. +370 612 66 668</p>
                        </nav>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <!-- end header -->

    @yield('content')

    <footer class="bg-extra-dark-gray text-center footer-sizing">
        <div class="medium-icon social-icon-style-3 social_icon list-inline" style="margin-top: -20px;">
            <a class="facebook text-white facebook-bg-hvr wow fadeInUp" data-wow-duration=".5s" href="http://facebook.com"><i class="fa fa-facebook"
                                                                                                                        aria-hidden="true"></i><span></span></a>
            <a class="twitter text-white twitter-bg-hvr wow fadeInDown" data-wow-duration=".5s" href="#."><i class="fa fa-twitter"
                                                                                                                        aria-hidden="true"></i><span></span></a>
            <a class="google text-white google-bg-hvr wow fadeInDown" data-wow-duration=".5s" href="#."><i class="fa fa-google" 
                                                                                                                        aria-hidden="true"></i><span></span></a>
        </div>
        <div style="border-bottom: 2px solid #FFFFFF; margin: 0 50px; margin-top: 15px;">
        </div>
        <div class="columns is-centered is-multiline wow fadeInUp">
            <div class="column is-1"></div>
            <div class="column">
                <h2 class="footer-heading">Navigacija</h2>
                <div class="footer-link">
                    <a href="{{ route('features') }}">Kaip tai veikia</a>
                </div>
                <div class="footer-link">
                    <a href="{{ route('about') }}">Apie mus</a>
                </div>
                <div class="footer-link">
                    <a href="{{ route('plans') }}">Kainoraštis</a>
                </div>
                <div class="footer-link">
                    <a href="{{ route('contact') }}">Kontaktai</a>
                </div>
            </div>
            <div class="column">
                <h2 class="footer-heading">Klientams</h2>
                <div class="footer-link">
                    <a href="{{ route('terms') }}">Taisyklės ir sąlygos</a>
                </div>
                <div class="footer-link">
                    <a href="{{ route('privacy') }}">Privatumo politika</a>
                </div>
                <div class="footer-link">
                    <a href="{{ route('faq') }}">DUK</a>
                </div>
            </div>
            <div class="column">
                <h2 class="footer-heading">Kontaktai</h2>
                <a href="tel:+37061266668">
                    <div class="footer-text">
                        +370 6126 6668
                    </div>
                </a>
                <a href="mailto:info@realpro.lt">
                    <div class="footer-text">
                        info@realpro.lt
                    </div>
                </a>
            </div>
            <div class="column">
                <h2 class="footer-heading">Rekvizitai</h2>
                <div class="footer-text">
                    UAB "Emiras"
                </div>
                <div class="footer-text">
                    Girulių g. 10, LT-12112 Vilnius
                </div>
                <div class="footer-text">
                    Įmonės kodas: 304836394
                </div>
            </div>
        </div>
        <div style="border-top: 2px solid #FFFFFF; margin: 0 50px; margin-top: 15px; padding: 30px 0; color: #FFFFFF;">
                2018 © Realpro.lt, UAB "Emiras"
        </div>
    </footer>
    <!-- javascript libraries -->
    <script src="js/jquery-3.2.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.appear.min.js"></script>
    <!-- owl carousel -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- magnific popup -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <!-- fancybox -->
    <script src="js/jquery.fancybox.min.js"></script>
    <!-- wow -->
    <script src="js/wow.js"></script>
    <!-- parallax -->
    <script src="js/parallaxie.min.js"></script>
    <!-- equal hieght -->
    <script src="js/jquery.matchHeight-min.js"></script>
    <!-- text-rotate -->
    <script src="js/morphext.min.js"></script>
    <!-- text-rotate -->
    <script src="js/isotope.pkgd.min.js"></script>
    <!-- revolution -->
    <script src="revolution/js/jquery.themepunch.tools.min.js"></script>
    <script src="revolution/js/jquery.themepunch.revolution.min.js"></script>
    <!-- setting -->
    <script src="js/main.js"></script>
    @yield('scripts')
</body>

</html>