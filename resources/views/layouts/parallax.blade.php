<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
    <meta name="author" content="Theme Industry">
    <!-- description -->
    <meta name="description" content="Internetiniai nekilnojamo turto brokeriai. Minimalaus plano kaina TIK 99eur! Parduosime Jūsų nekilnojamą turtą geriausia kaina! Jokių paslėptų mokęsčių!">
    <!-- keywords -->
    <meta name="keywords" content="nekilnojamas turtas,agentas,NT,brokeris,
    namai,parduoti,butai,namai,brokeriai,komersinis,prekyba,sklypas,pigiausia,99eur">
    <!-- title -->
    <title>Lietuvos NT ekspertai: RealPro. Kaina nuo 99&euro;</title>
    <!-- favicon -->
    <link rel="icon" href="images/fav-icon.ico">
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
    <link rel="stylesheet" href="css/custom.css" />
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
    </div>*/
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
                    </div>
                    <!-- end logo -->
                    <div class="col-md-7 col-xs-2 width-auto pull-right accordion-menu xs-no-padding-right hidden-sm hidden-xs">
                        <div class="navbar-collapse collapse pull-right" id="navbar-collapse-toggle-1">
                            <ul id="accordion" class="nav navbar-nav navbar-left no-margin alt-font text-normal" data-in="fadeIn" data-out="fadeOut">
                                <!-- start menu item -->
                                <li>
                                    <a href="{{ route('features') }}">Kaip tai veikia</a>
                                </li>
                                <li>
                                    <a href="{{ route('about') }}">Apie mus</a>
                                </li>
                                <li>
                                    <a href="{{ route('plans') }}">Kainoraštis</a>
                                </li>
                                <li>
                                    <a href="{{ route('contact') }}">Kontaktai</a>
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
                            <div class="medium-icon side-nav-social-icon list-inline">
                                <a class="facebook-bg-hvr" href="#."><i class="fa fa-facebook" aria-hidden="true"></i></a>

                                <a class="pinterest-bg-hvr" href="#."><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>

                                <a class="instagram-bg-hvr" href="#."><i class="fa fa-instagram" aria-hidden="true"></i></a>
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

    <!--footer Start-->
    <footer class="bg-extra-dark-gray padding-30px-tb text-center">
        <div class="footer-widget-area">
            <div class="container">
                <div class="row">
                    <div class="medium-icon social-icon-style-3 social_icon list-inline margin-20px-top">
                        <a class="facebook text-white facebook-bg-hvr wow fadeInUp" data-wow-duration=".5s" href="http://facebook.com"><i class="fa fa-facebook"
                                                                                                                         aria-hidden="true"></i><span></span></a>
                        <a class="twitter text-white twitter-bg-hvr wow fadeInDown" data-wow-duration=".5s" href="#."><i class="fa fa-twitter"
                                                                                                                         aria-hidden="true"></i><span></span></a>
                        <a class="pinterest text-white pinterest-bg-hvr wow fadeInUp" data-wow-duration=".5s" href="#."><i class="fa fa-pinterest-p"
                                                                                                                           aria-hidden="true"></i><span></span></a>
                        <a class="google text-white google-bg-hvr wow fadeInDown" data-wow-duration=".5s" href="#."><i class="fa fa-google"
                                                                                                                       aria-hidden="true"></i><span></span></a>
                    </div>
                </div>
                <p class="text-white text-large margin-10px-bottom margin-20px-top">2018 © Realpro.lt</p>
                <p class="text-light-gray margin-10px-bottom"> UAB "Emiras", įmonės kodas 304836394, Tel. nr. +370 612 66 668</p>
            </div>
        </div>

    </footer>
    <!-- end footer -->

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
</body>

</html>