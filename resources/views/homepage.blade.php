<!DOCTYPE html>
<html lang="lt" dir="ltr">
  <head>
    <meta name="description" content="Internetiniai nekilnojamo turto brokeriai. Minimalaus plano kaina TIK 99eur! Parduosime Jūsų nekilnojamą turtą geriausia kaina! Surasime Jums tik geriausius nuomininkus! Jokių paslėptų mokęsčių! Jokių papildomų išlaidų! ">
    <meta name="keywords" content="nekilnojamas turtas,agentas,NT,brokeris,
    namai,parduoti,butai,namai,brokeriai,komersinis,prekyba,sklypas,pigiausia,99eur">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no">
    <title>Lietuvos NT ekspertai: RealPro. Kaina nuo 99&euro;</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,700" rel="stylesheet">
    <!-- Add the slick-theme.css if you want default styling -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
<!-- Add the slick-theme.css if you want default styling -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css">
<link rel="stylesheet" href="css/fontello.css">
    <link rel="stylesheet" href="css/scss.css">

  </head>
  <body class="has-navbar-fixed-top">
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
    <div id="slideout">
  <div class='slideout'><i class='icon-phone'></i>SUSISIEKTI</div>
  <div id="slideout_inner">
    <span class='telNr'>Turite klausimų? Klauskite!<br><br>
  Tel. nr. <a href="tel:+37061266668"><strong>+370 612 66 668</strong></a></span>
  </div>
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
  <div class="navbar-item" style="margin-right: -80px;"><a href="#paslaugos" style='z-index: 999999;' class='nav-item' data-ripple="rgba(0,0,0, 0.3)">Paslaugos</a>
  </div>
  <div class="navbar-item" style="margin-right: -120px;"><a class='nav-item' style='z-index: 999999;' data-ripple="rgba(0,0,0, 0.3)" href="#kainos">Kainos</a>
  </div>
</div>
<div class="my-navbar-center">
  <div class="navbar-item"><a href='http://realpro.lt/'><img src="img/logo.png" alt="Realpro NT agentura" style="padding-top: 20px; width: 150px;"></a>
  </div>
</div>
<div class="navbar-end">
  <div class="navbar-item" style="margin-left: -80px;"><a class='nav-item'  data-ripple="rgba(0,0,0, 0.3)" href="#duk">DUK</a>
  </div>
  <div class="navbar-item" style="margin-left: -20px;"><a class='nav-item'  data-ripple="rgba(0,0,0, 0.3)" href="#apie">Apie Mus</a>
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

    <div class="after-nav">
      <span class="header">Parduok savo būstą<br>
      be gailesčio</span>
      <div class="label2">Už kiek norite parduoti NT?</div>
      <input type="number" min='0' id='sum' placeholder="Įveskite sumą">
      <div class='error1'>Neįvedėte sumos</div>
      <div style="margin-top: 20px;"><a id='calculate' class="button2" data-ripple href="#">Skaičiuoti</a></div>
      <div class="columns is-mobile is-multiline is-centered">
            <div class="column is-narrow" style="margin-left: -10px;">
              <div class="label2">NT brokeris paimtų 3 %</div>
              <input type="text" id='broker' class="lower working" readonly>
            </div>
            <div class="column is-narrow">
              <div class="label2">Mūsų paslaugos kaina</div>
              <input type="text" id='ourPrice' class="lower second working" readonly>
            </div>
  </div>
    </div>
    <div class="container-2" id="paslaugos">
      <div style="color: #0b0146; font-size: 40px; padding-bottom: 20px;">Mūsų teikiamos paslaugos</div>
      <div class="par">Patikimas tarpininkas tarp pardavėjo ir pirkėjo, užtikrinantis platų ir kokybiškų paslaugų spektą.</div>
      <div class="par">Vertiname kokybę, todėl stengiamės maksimaliai patenkinti klientų lūkesčius.</div>
      <div class="columns is-centered is-multiline" style="padding-top: 70px; text-align: left;">
        <div class="column is-narrow is-three-quarters-mobile">
          <div class="card">
            <div class="head1">
              <div class="header-text"><img src='img/1icon.png' alt='Paslaugos pirkejams' class="icon">Pardavėjams</div>
            </div>
            <div class="cardText" style="padding-top: 30px;">- Nemokama NT eksperto konsultacija</div>
            <div class="cardText">- Profesionalių fotografų paslaugos</div>
            <div class="cardText">- Dokumentų ruošimas sandoriams</div>
            <div class="cardText">- Turto vertinimas</div>
            <div class="cardText">- Skambučių priėmimas</div>
            <div class="cardText">- Pastovūs informacijos atnaujinimai</div>
            <div class="cardText">- Skelbimų talpinimas į lankomiausius portalus</div>
            <div class="cardText">- Tinkamo pirkėjo suradimas</div>
            <div class="cardText" style="padding-bottom: 40px;">- Maketavimo paslaugos</div>
          </div>
        </div>
        <div class="column is-narrow is-three-quarters-mobile">
          <div class="card">
            <div class="head2">
              <div class="header-text2"><img src='img/2icon.png' alt='Paslaugos pirkejams' class="icon2">Pirkėjams</div>
            </div>
            <div class="cardText" style="padding-top: 30px; padding-right: 90px;">- Nemokama NT eksperto konsultacija</div>
            <div class="cardText">- Teisinė konsultacija</div>
            <div class="cardText">- Detali norimo įsigyti objekto informacija</div>
            <div class="cardText">- Norimų objektų paieška</div>
            <div class="cardText">- Geriausi paskolos pasiūlymai</div>
            <div class="cardText" style="padding-bottom: 146px;">- Geriausios kainos rinkoje</div>
          </div>
        </div>
        <div class="column is-narrow is-three-quarters-mobile">
          <div class="card">
            <div class="head3">
              <div class="header-text3"><img src='img/3icon.png' alt='Kitos paslaugos' class="icon">Kitos paslaugos</div>
            </div>
            <div class="cardText" style="padding-top: 30px; ">- Išsamus objektų vertinimas</div>
            <div class="cardText">- Teisinė konsultacija</div>
            <div class="cardText">- Architektų konsultacija</div>
            <div class="cardText">- Pardavimų organizavimas</div>
            <div class="cardText">- Kadastriniai matavimai</div>
            <div class="cardText">- Vizualių maketų ruošimas</div>
            <div class="cardText">- Interjero dizainerio konsultacija</div>
            <div class="cardText" style="padding-bottom: 76px; padding-right: 68px;">- Ekologiškumo bei energetikos sertifikatai</div>
          </div>
        </div>
        </div>
      </div>
    <div class="after-nav2" id='kainos'>
      <div style="color: #0b0146; font-size: 40px; padding-bottom: 20px;">Kainos</div>
      <div class="par">Su Realpro.lt parduokite savo namą ar būtą be jokių tarpininkų ir papildomų paslėptų mokesčių.</div>
      <div class="par">Sutaupyk daugiau nei 1500 eurų.</div>
      <div class="columns is-centered is-multiline" style="padding-top: 70px; text-align: left;" id="columns">

        <div class="column is-narrow is-half-mobile">
          <div class="product">
            <div class="top smallerMobile" style='padding: 0 40px;'>Optimalus</div>
            <div class="price">99 &euro;</div>
            <div class="cardText2" style="padding-top: 30px;">- Nemokamas NT</div>
            <div class="cardText2">objekto įvertinimas</div>
            <div class="cardText2">- Pardavimo progresas</div>
            <div class="cardText2">ir derybos</div>
            <div class="cardText2">- Jūsų NT rodomas</div>
            <div class="cardText2">tūkstančiams pirkėjų</div>
            <div class="cardText2">- Savaitinės atąskaitos</div>
            <div class="cardText2">esant poreikiui</div>
          </div>
        </div>
        <div class="column is-narrow is-half-mobile">
          <div class="product activep" style='padding-top: 0;'>
            <div class='triangle'><span>Value!</span></div>
            <div class="top popularPlan smallerMobile">Populiariausias</div>
            <div class="price">199 &euro;</div>
            <div class="cardText2" style="padding-top: 30px;">- Visos 'Optimalaus'</div>
            <div class="cardText2">plano paslaugos</div>
            <div class="cardText2">- Profesionalaus fotografo</div>
            <div class="cardText2">nuotraukos</div>
            <div class="cardText2">- Detalus 2D aukšto</div>
            <div class="cardText2">planas</div>
            <div class="cardText2">- Pilnas NT objekto</div>
            <div class="cardText2">aprašymas</div>
          </div>
        </div>
        <div class="column is-narrow is-half-mobile">
          <div class="product">
            <div class="top smallerMobile" style='padding: 0 18px;'>Praktiškiausias</div>
            <div class="price">299 &euro;</div>
            <div class="cardText2" style="padding-top: 30px;">- Visos 'Populiariausio'</div>
            <div class="cardText2">plano paslaugos</div>
            <div class="cardText2">- Iškelti/išryškinti NT</div>
            <div class="cardText2">skelbimai</div>
            <div class="cardText2">- Pardavimo ženklas</div>
            <div class="cardText2">ant pastato</div>
            <div class="cardText2">- Premium skelbimai</div>
            <div class="cardText2">portaluose</div>
          </div>
        </div>
        </div>
      <div style="margin-top: 40px;" id="select_plan"><a class="button3 btn" data-ripple href="{{ route('plans') }}" id="select_plan">Daugiau planų</a></div>
    </div>
    <div class="apieMus" id='apie'>
      <section class="section" style="padding-left: 8%; padding-right: 8%;">

      <div class='steps3'>Kaip tai veikia?</div>

      <!-- pirmas -->
      <div class="columns">
        <div class="column is-8">
          <div class="column is-narrow" id="numbers" style="float: left; margin-right: 12px;">1</div>
          <h4 class="title is-size-5">Pasirinkite planą</h4>

          <p>Išsirinkite Jūsų norus patenkinantį planą ir užregistruokite savo nekilnojamą turtą Realpro.lt sistemoje. Mūsų agentas susisieks su Jumis per artimiausias kelias valandas.</p>
        </div>
        <div class="column icons" id="large"><i class="icon-chart-pie"></i>
        </div>
      </div>
      <!-- antras -->
      <div class="columns">
        <div class="column is-4 icons" id="large" style='margin-top: 20px;'><i class="icon-calendar-check-o"></i>
        </div>
        <div class="column">
          <div class="column is-narrow" id="numbers" style="float: right; margin-left: 12px;">2</div>

          <h4 class="title is-size-5" align="right">Informacijos patvirtinimas</h4>
          <p>Agentas sutikrina visą Jūsų objekto suvestą informaciją bei pagal Jūsų pasirinktą planą paruošia visą proceso grafiką, kurį pristato privačiai Jums nurodytais kontaktais. Per ateinančias 24-48 val., Jūsų nekilnojamojo turto prekyba atsiras daugiau nei 300 tūkst. naujo būsto beieškančių asmenų akiratyje, skelbimų portaluose kaip Aruodas, DomoPlius ir kiti.</p>
        </div>
      </div>
      <!-- trecias -->
      <div class="columns">
        <div class="column is-8">
          <div class="column is-narrow" id="numbers" style="float: left; margin-right: 12px;">3</div>
          <h4 class="title is-size-5">Stebėkite progresą</h4>

          <p>Atsipalaiduokite ir mėgaukitės. Mūsų profesonalių agentų komanda viskuo pasirūpins, paruoš visus dokumentus, suras geriausius pirkėjus ar nuomininkus bei pateiks visas ataskaitas Jums privačiai. Suderinsime palankiausią Jūsų atžvilgiu kainą!</p>
        </div>
        <div class="column icons" id="large"><i class="icon-ok-circled"></i>
        </div>
      </div>
      </section>
    </div>
    <div class="after-nav3">
      <div class="text3">Reikia gyvos konsultacijos?</div>
      <div style="margin-top: 50px;"><a class="button2" id='susisiekti' data-ripple href="#">Susisiekti</a></div>
    </div>
    <div class='container-2' id='atsiliepimai' style='text-align: center; background-color: #fbfbfb; padding-bottom: 100px;'>
      <div style="color: #0b0146; font-size: 40px; padding-bottom:50px;">Atsiliepimai</div>
      <div class='slider'>
        <div class='slide'><img src='img/stars.png' class='stars' alt='Reitingas'>"Puikiai dirbanti profesionalų komanda.<br>Padėjo greitai parduoti butą už rinkos kainą."
          <div class='name'>Jonas Boružis</div>
          <div class='realpro'>Realpro.lt Klientas</div>
        </div>
        <div class='slide'><img src='img/stars.png' class='stars' alt='Reitingas'>"Ačiū už puikų darbą!<br>Greitai ir kokybiškai pardavė namą."
          <div class='name'>Justina Mikėnaitė</div>
          <div class='realpro'>Realpro.lt Klientas</div>
        </div>
        <div class='slide'><img src='img/stars.png' class='stars' alt='Reitingas'>"Puikus pavyzdys kaip reikia dirbti.<br>Padėjo nupirkti puikų butą už geriausią kainą."
          <div class='name'>Saulius</div>
          <div class='realpro'>Realpro.lt Klientas</div>
        </div>
        <div class='slide'><img src='img/stars.png' class='stars' alt='Reitingas'>"Labai sklandžiai pardavė butą.<br>Ačiū!"
          <div class='name'>Martynas</div>
          <div class='realpro'>Realpro.lt Klientas</div>
        </div>
        <div class='slide'><img src='img/stars.png' class='stars' alt='Reitingas'>"Padėjo greitai parduoti butą už rinkos kainą"
          <div class='name'>Artūras</div>
          <div class='realpro'>Realpro.lt Klientas</div>
        </div>
      </div>
    </div>
    <div class="container-2" id='duk'>
      <div style="color: #0b0146; font-size: 40px; padding-bottom: 20px;">Dažniausiai užduodami klausimai</div>
      <div class="par">Jums rūpimi klausimai apie mūsų paslaugas ir kainų skirtumus tarp eilinės NT agentūros.</div>
      <div class="content-wrapper">
<div class="ng-modal-number-container">
   <div class="questionNumbers">
        <div class="questionNumberIcon active" name='pirmas'></div>
   </div>
   <div class="questionNumbers">
        <div class="questionNumberIcon" name='antras'></div>
   </div>
   <div class="questionNumbers">
        <div class="questionNumberIcon" name='trecias'></div>
   </div>
   <div class="questionNumbers">
        <div class="questionNumberIcon" name='ketvirtas'></div>
   </div>
   <div class="questionNumbers">
        <div class="questionNumberIcon" name='penktas'></div>
   </div>
</div>
</div>
  <div id='pirmas' class='box' style='display: block;'>
      <div class="question">Kodėl Realpro.lt yra pigesnė nei kitos NT agentūros</div>
      <div class="par">Tikras klausimas yra 'kodėl kitos NT agentūros yra tokios brangios?'<br><br>
         Realpro.lt misija yra suteiktį geriausią patirtį užtikrinant mažiausią kainą.<br><br>Taip pat mes išlaikome mažas išlaidas dėl ko kaina yra atitinkamai mažesnė.</div>
    </div>
    <div id='antras' class='box'>
        <div class="question">Kodėl kainos taip stipriai skiriasi nuo kitų NT agentūrų?</div>
        <div class="par">Realpro efektyviai aptarnauja visas užklausas iš vieno ofiso,<br><br>
           taip sumažinant kainą ir didinant kokybę.</div>
      </div>
      <div id='trecias' class='box'>
          <div class="question">Ar norint pakeisti NT aprašymą ar nuotraukas nereikės papildomai mokėti?</div>
          <div class="par">TAIP! Jokių papildomų išlaidų po pirmojo ir vienintelio apmokėjimo į priekį.<br><br>
          Galėsite koreguoti nuotraukas, aprašymą ir t.t VISIŠKAI NEMOKAMAI</div>
        </div>
        <div id='ketvirtas' class='box'>
            <div class="question">Kaip greitai mano NT bus paviešinta?</div>
            <div class="par">Mes stengiames paviešint Jūsų NT objektą per 24-48 val.<br><br>
               po nuotraukų, aprašymo, 2D plano gavimo ir t.t.</div>
          </div>
          <div id='penktas' class='box'>
              <div class="question">Kaip vyksta namo apžiūra?</div>
              <div class="par">Mūsų administratorius užrezervuos apžiūras (jeigu mes turime Jūsų laisvų valandų<br><br>
                 grafiką, kitaip pirma susisieksime su Jumis)<br><br>tuomet Jūs pravesite Jūsų NT apžiūrą. Vėliau procesas toliau vyksta su mumis (įskaitant atsiliepimus, kainų derybas ir t.t)<br><br>
               P.S Mūsų praktika rodo, kad žmonėms labiau patinka kai apžiūrą praveda buto/namo savininkas, nes jie suteikia detaliausią informaciją.</div>
            </div>
  </div>
    <div class="container-3">
      <div class="columns is-desktop">
        <div class="column is-3" style="padding-top: 40px; justify-content: center;">
          <img src="img/logo.png" style="width: 200px;">
        </div>
        <div class="column is-2">
          <div class="footerTxt">Apie Mus</div>
          <div class="links"><a href="#paslaugos" class='footerLinks'>Paslaugos</a></div>
          <div class="links"><a href="#apie" class='footerLinks'>Kaip tai veikia</a></div>
          <div class="links"><a href="#kainos" class='footerLinks'>Kainos</a></div>
          <div class="links"><a href="#duk" class='footerLinks'>DUK</a></div>
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
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js'></script>
  <script src='js.js'>
</script>
<script>
$('body').on('touchstart', function(event){});
    function redirect(){
        var selectedPlan = document.getElementsByClassName("activep")[0].getElementsByClassName("top")[0].innerHTML;
        var data = { plan: selectedPlan, _token: '{{csrf_token()}}' };

        var baseUrl = window.location.href;
        if (baseUrl.includes("#")){
            baseUrl = baseUrl.substring(0, baseUrl.length - 1);
        }
        var url = baseUrl.concat("plan");

        $.post(url, data, function(response){
            window.location.href = response;
        });
    }
</script>

  </body>
</html>
