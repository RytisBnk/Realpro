<!DOCTYPE html>
<html lang="lt" dir="ltr">
<head>
  <title>Atšaukėte užsakymą. Realpro.lt</title>
  <meta name="description" content="Internetiniai nekilnojamo turto brokeriai. Minimalaus plano kaina TIK 99eur! Parduosime Jūsų nekilnojamą turtą geriausia kaina! Surasime Jums tik geriausius nuomininkus! Jokių paslėptų mokęsčių! Jokių papildomų išlaidų! ">
  <meta name="keywords" content="nekilnojamas turtas,agentas,NT,brokeris,
  namai,parduoti,butai,namai,brokeriai,komersinis,prekyba,sklypas,pigiausia,99eur">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <link rel="apple-touch-icon" sizes="180x180" href="https://realpro.lt/img/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="https://realpro.lt/img/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="https://realpro.lt/img/favicon-16x16.png">
<link rel="manifest" href="https://realpro.lt/img/site.webmanifest">
<link rel="mask-icon" href="https://realpro.lt/img/safari-pinned-tab.svg" color="#5bbad5">
<link rel="shortcut icon" href="https://realpro.lt/img/favicon.ico">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="msapplication-config" content="https://realpro.lt/img/browserconfig.xml">
<meta name="theme-color" content="#ffffff">
<link href="https://fonts.googleapis.com/css?family=Raleway:400,500" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/scss.css">
</head>

<body class='has-navbar-fixed-top terms'>
  <!-- Load Facebook SDK for JavaScript -->
  <div id="fb-root"></div>
  <script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js#xfbml=1&version=v2.12&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>

  <!-- Your customer chat code -->
  <div class="fb-customerchat"
  attribution=install_email
  page_id="270623553670577"
  logged_in_greeting="Sveiki, kaip galime padėti Jums?"
  logged_out_greeting="Sveiki, kaip galime padėti Jums?">
  </div>
  <nav class="navbar is-fixed-top my-navbar">
<div class="navbar-brand">
  <div class="navbar-burger burger" data-target="my-navbar-menu">
    <span></span>
    <span></span>
    <span></span>
  </div>
</div>
<div id="my-navbar-menu" class="navbar-menu">
  <div class="navbar-start">
    <div class="navbar-item" style="margin-right: -80px;"><a href="https://realpro.lt/#paslaugos" style='z-index: 999999;' class='nav-item' data-ripple="rgba(0,0,0, 0.3)">Paslaugos</a>
    </div>
    <div class="navbar-item" style="margin-right: -120px;"><a class='nav-item' style='z-index: 999999;' data-ripple="rgba(0,0,0, 0.3)" href="https://realpro.lt/#kainos">Kainos</a>
    </div>
  </div>
  <div class="my-navbar-center">
    <div class="navbar-item"><a href='https://realpro.lt/'><img src="img/logo.png" alt="Realpro NT agentura" style="padding-top: 20px; width: 150px;"></a>
    </div>
  </div>
  <div class="navbar-end">
    <div class="navbar-item" style="margin-left: -80px;"><a class='nav-item'  data-ripple="rgba(0,0,0, 0.3)" href="https://realpro.lt/#duk">DUK</a>
    </div>
    <div class="navbar-item" style="margin-left: -20px;"><a class='nav-item'  data-ripple="rgba(0,0,0, 0.3)" href="https://realpro.lt/#apie">Apie Mus</a>
    </div>
    @guest
    <div class="navbar-item" style="margin-right: -60px;"><a data-ripple="rgba(0,0,0, 0.3)" class="button" href="{{ route('login') }}" id="login">Prisijungti</a>
    </div>
    @else
    <div class="navbar-item" style="margin-right: -60px;"><a data-ripple="rgba(0,0,0, 0.3)" class="button" href="{{ route('order.list') }}" id="orders">Užsakymai</a>
    </div>
    @endguest
    </div>
  </div>
</nav>
<div class='container' style='padding: 400px 0;'>
	<h1 style='color: red; text-align: center;'>Atšaukėte mokėjimą. Pradėkit iš naujo spausdami <a href='https://realpro.lt/plans'>čia</a></h1>
</div>
<div class="container-3">
  <div class="columns is-desktop">
    <div class="column is-3" style="padding-top: 40px; justify-content: center;">
      <img src="img/logo.png" style="width: 200px;">
    </div>
    <div class="column is-2">
      <div class="footerTxt">Apie Mus</div>
      <div class="links"><a href="https://realpro.lt/#paslaugos" class='footerLinks'>Paslaugos</a></div>
      <div class="links"><a href="https://realpro.lt/#apie" class='footerLinks'>Kaip tai veikia</a></div>
      <div class="links"><a href="https://realpro.lt/#kainos" class='footerLinks'>Kainos</a></div>
      <div class="links"><a href="https://realpro.lt/#duk" class='footerLinks'>DUK</a></div>
      <div class="links"><a href="{{ route('plans') }}">Užsisakyti</a></div>
    </div>
    <div class="column is-2">
      <div class="footerTxt">Klientams</div>
      <div class="links"><a href="{{ route('terms') }}">Taisyklės ir sąlygos</a></div>
      <div class="links"><a href="{{ route('privacy') }}">Privatumo politika</a></div>
    </div>
    <div class="column is-2">
      <div class="footerTxt">Kontaktai</div>
      <div class="links">info@realpro.lt</div>
      <div class="links">+370 612 66 668</div>
    </div>
    <div class="column is-auto">
    </div>
  </div>
</div>
<div class="footext">
  2018 © Realpro.lt, UAB "Emiras", įmonės kodas 304836394, Tel. nr. +370 612 66 668
</div>
  <script src='js.js'></script>
</body>
</html>
