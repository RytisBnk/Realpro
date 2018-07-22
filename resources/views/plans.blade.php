<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,500" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
    <link rel="stylesheet" href="css/fontello.css">
    <link rel="stylesheet" href="css/scss.css">
    <title>Planai | RealPro</title>
  </head>
  <body class='plans has-navbar-fixed-top'>
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
      <div class="navbar-item" style="margin-right: -80px;"><a href="http://realpro.lt/#paslaugos" style='z-index: 999999;' class='nav-item' data-ripple="rgba(0,0,0, 0.3)">Paslaugos</a>
      </div>
      <div class="navbar-item" style="margin-right: -120px;"><a class='nav-item' style='z-index: 999999;' data-ripple="rgba(0,0,0, 0.3)" href="http://realpro.lt/#kainos">Kainos</a>
      </div>
    </div>
    <div class="my-navbar-center">
      <div class="navbar-item"><a href='http://realpro.lt/'><img src="img/logo.png" alt="Realpro NT agentura" style="padding-top: 20px; width: 150px;"></a>
      </div>
    </div>
    <div class="navbar-end">
      <div class="navbar-item" style="margin-left: -80px;"><a class='nav-item'  data-ripple="rgba(0,0,0, 0.3)" href="http://realpro.lt/#duk">DUK</a>
      </div>
      <div class="navbar-item" style="margin-left: -20px;"><a class='nav-item'  data-ripple="rgba(0,0,0, 0.3)" href="http://realpro.lt/#apie">Apie Mus</a>
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
    <h1 style='padding-top: 40px;'>DETALŪS PLANAI</h1>
    <h4>Išsirinkite sau tinkamiausią planą:</h4>

    <div class='container'>
      <div class='search-table-outter'>
      <table class='table is-bordered is-fullwidth'>
        <thead>
          <tr>
            <th style='border-bottom: 0;' class='thOnMobile'></th>
            <th class='optimalus'><span class='name'>OPTIMALUS</span><br>Planas<br>99&euro;</th>
            <th class='popular'><span class='name'>POPULIARIAUSIAS</span><br>Planas<br>199&euro;</th>
            <th class='praktik'><span class='name'>PRAKTIŠKIAUSIAS</span><br>Planas<br>299&euro;</th>
            <th class='ypatingas'><span class='name'>YPATINGAS</span><br>Planas<br>399&euro;</th>
            <th class='komercinis'><span class='name'>KOMERCINIS</span><br>Planas<br>399&euro;</th>
          </tr>
        </thead>
        <tbody>
          <tr class='rowOnMobile'>
        <td align="center" colspan="5">Nemokamas NT objekto įvertinimas</td>
          </tr>
          <tr>
            <td class='leftAlign'>Nemokamas NT objekto įvertinimas</td>
            <td><i class="icon-ok-circled"></td>
            <td><i class="icon-ok-circled"></td>
            <td><i class="icon-ok-circled"></td>
            <td><i class="icon-ok-circled"></td>
            <td><i class="icon-ok-circled"></td>
          </tr>
          <tr class='rowOnMobile'>
        <td align="center" colspan="5">Pardavimo progresas ir derybos</td>
          </tr>
          <tr>
            <td class='leftAlign'>Pardavimo progresas ir derybos</td>
            <td><i class="icon-ok-circled"></td>
            <td><i class="icon-ok-circled"></td>
            <td><i class="icon-ok-circled"></td>
            <td><i class="icon-ok-circled"></td>
            <td><i class="icon-ok-circled"></td>
          </tr>
          <tr class='rowOnMobile'>
        <td align="center" colspan="5">Jūsų NT rodomas tūkstančiams pirkėjų</td>
          </tr>
          <tr>
            <td class='leftAlign'>Jūsų NT rodomas tūkstančiams pirkėjų</td>
            <td><i class="icon-ok-circled"></td>
            <td><i class="icon-ok-circled"></td>
            <td><i class="icon-ok-circled"></td>
            <td><i class="icon-ok-circled"></td>
            <td><i class="icon-ok-circled"></td>
          </tr>
          <tr class='rowOnMobile'>
        <td align="center" colspan="5">Savaitinės atąskaitos esant poreikiui</td>
          </tr>
          <tr>
            <td class='leftAlign'>Savaitinės atąskaitos esant poreikiui</td>
            <td><i class="icon-ok-circled"></td>
            <td><i class="icon-ok-circled"></td>
            <td><i class="icon-ok-circled"></td>
            <td><i class="icon-ok-circled"></td>
            <td><i class="icon-ok-circled"></td>
          </tr>
          <tr class='rowOnMobile'>
        <td align="center" colspan="5">Profesionalaus fotografo nuotraukos</td>
          </tr>
          <tr>
            <td class='leftAlign'>Profesionalaus fotografo nuotraukos</td>
            <td><i class="icon-cancel-circled"></td>
            <td><i class="icon-ok-circled"></td>
            <td><i class="icon-ok-circled"></td>
            <td><i class="icon-ok-circled"></td>
            <td><i class="icon-ok-circled"></td>
          </tr>
          <tr class='rowOnMobile'>
        <td align="center" colspan="5">Detalus 2D aukšto planas</td>
          </tr>
          <tr>
            <td class='leftAlign'>Detalus 2D aukšto planas</td>
            <td><i class="icon-cancel-circled"></td>
            <td><i class="icon-ok-circled"></td>
            <td><i class="icon-ok-circled"></td>
            <td><i class="icon-ok-circled"></td>
            <td><i class="icon-ok-circled"></td>
          </tr>
          <tr class='rowOnMobile'>
        <td align="center" colspan="5">Iškelti/išryškinti NT skelbimai</td>
          </tr>
          <tr>
            <td class='leftAlign'>Iškelti/išryškinti NT skelbimai</td>
            <td><i class="icon-cancel-circled"></td>
            <td><i class="icon-ok-circled"></td>
            <td><i class="icon-ok-circled"></td>
            <td><i class="icon-ok-circled"></td>
            <td><i class="icon-ok-circled"></td>
          </tr>
          <tr class='rowOnMobile'>
        <td align="center" colspan="5">Pardavimo ženklas ant pastato</td>
          </tr>
          <tr>
            <td class='leftAlign'>Pardavimo ženklas ant pastato</td>
            <td><i class="icon-cancel-circled"></td>
            <td><i class="icon-cancel-circled"></td>
            <td><i class="icon-ok-circled"></td>
            <td><i class="icon-ok-circled"></td>
            <td><i class="icon-ok-circled"></td>
          </tr>
          <tr class='rowOnMobile'>
        <td align="center" colspan="5">Premium skelbimai portaluose</td>
          </tr>
          <tr>
            <td class='leftAlign'>Premium skelbimai portaluose</td>
            <td><i class="icon-cancel-circled"></td>
            <td><i class="icon-cancel-circled"></td>
            <td><i class="icon-ok-circled"></td>
            <td><i class="icon-ok-circled"></td>
            <td><i class="icon-ok-circled"></td>
          </tr>
          <tr class='rowOnMobile'>
        <td align="center" colspan="5">Pilnas NT objekto aprašymas</td>
          </tr>
          <tr>
            <td class='leftAlign'>Pilnas NT objekto aprašymas</td>
            <td><i class="icon-cancel-circled"></td>
            <td><i class="icon-cancel-circled"></td>
            <td><i class="icon-ok-circled"></td>
            <td><i class="icon-ok-circled"></td>
            <td><i class="icon-ok-circled"></td>
          </tr>
          <tr class='rowOnMobile'>
        <td align="center" colspan="5">Patalpos aprodymas pirkėjams</td>
          </tr>
          <tr>
            <td class='leftAlign'>Patalpos aprodymas pirkėjams</td>
            <td><i class="icon-cancel-circled"></td>
            <td><i class="icon-cancel-circled"></td>
            <td><i class="icon-cancel-circled"></td>
            <td><i class="icon-ok-circled"></td>
            <td><i class="icon-ok-circled"></td>
          </tr>
          <tr class='rowOnMobile'>
        <td align="center" colspan="5">3D šablono paruošimas</td>
          </tr>
          <tr>
            <td class='leftAlign'>3D šablono paruošimas</td>
            <td><i class="icon-cancel-circled"></td>
            <td><i class="icon-cancel-circled"></td>
            <td><i class="icon-cancel-circled"></td>
            <td><i class="icon-ok-circled"></td>
            <td><i class="icon-ok-circled"></td>
          </tr>
        </tbody>
        <tfoot>
          <td class='tdOnMobile'></td>
          <td><a href="{{ route('plan', ['planID' => 1]) }}"><button type='button' class='pasirinkti' data-ripple>PASIRINKTI</button></a></td>
          <td><a href="{{ route('plan', ['planID' => 2]) }}"><button type='button' class='pasirinkti' data-ripple>PASIRINKTI</button></a></td>
          <td><a href="{{ route('plan', ['planID' => 3]) }}"><button type='button' class='pasirinkti' data-ripple>PASIRINKTI</button></a></td>
          <td><a href="{{ route('plan', ['planID' => 4]) }}"><button type='button' class='pasirinkti' data-ripple>PASIRINKTI</button></a></td>
          <td><a href="{{ route('plan', ['planID' => 5]) }}"><button type='button' class='pasirinkti' data-ripple>PASIRINKTI</button></a></td>
        </tfoot>
      </table>
    </div>
    </div>
    <div class="container-3">
      <div class="columns is-desktop">
        <div class="column is-3" style="padding-top: 40px; justify-content: center;">
          <img src="img/logo.png" style="width: 200px;">
        </div>
        <div class="column is-2">
          <div class="footerTxt">Apie Mus</div>
          <div class="links"><a href="http://realpro.lt/#paslaugos" class='footerLinks'>Paslaugos</a></div>
          <div class="links"><a href="http://realpro.lt/#apie" class='footerLinks'>Kaip tai veikia</a></div>
          <div class="links"><a href="http://realpro.lt/#kainos" class='footerLinks'>Kainos</a></div>
          <div class="links"><a href="http://realpro.lt/#duk" class='footerLinks'>DUK</a></div>
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
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.slim.min.js'></script>
  <script src='js.js'></script>
  </body>
</html>
