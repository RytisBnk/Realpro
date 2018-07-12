<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>NT</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,700" rel="stylesheet">
    <!-- Add the slick-theme.css if you want default styling -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
<!-- Add the slick-theme.css if you want default styling -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css">
    <link rel="stylesheet" href="css/scss.css">

  </head>
  <body class="has-navbar-fixed-top">
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
        <div class="navbar-item"><a href='#'><img src="img/logo.png" alt="Realpro NT agentura" style="padding-top: 20px; width: 150px;"></a>
        </div>
      </div>
      <div class="navbar-end">
        <div class="navbar-item" style="margin-left: -80px;"><a class='nav-item'  data-ripple="rgba(0,0,0, 0.3)" href="#duk">DUK</a>
        </div>
        <div class="navbar-item" style="margin-left: -20px;"><a class='nav-item'  data-ripple="rgba(0,0,0, 0.3)" href="#apie">Apie Mus</a>
        </div>
        @guest
        <div class="navbar-item" style="margin-right: -60px;"><a data-ripple="rgba(0,0,0, 0.3)" class="button" href="{{ route('login') }}" id="login">Prisijungti</a>
        @else
        <div class="navbar-item" style="margin-right: -60px;"><a data-ripple="rgba(0,0,0, 0.3)" class="button" href="{{ route('order.list') }}" id="orders">Užsakymai</a>
        @endguest
        </div>
      </div>
    </div>
  </nav>


    <div class="after-nav">
      <span class="header">Parduok savo būstą<br>
      be gailesčio</span>
      <div class="label2">Už kiek norite parduoti?</div>
      <input type="text" id='sum' style="min-width: 350px;" placeholder="Įveskite sumą">
      <div style="margin-top: 20px;"><a id='calculate' class="button2" data-ripple href="#">Skaičiuoti</a></div>
      <div class="columns is-mobile">
        <div class="column auto"></div>
            <div class="column is-narrow" style="margin-left: -10px;">
              <div class="label2">NT brokeris paimtų 3 %</div>
              <input type="text" id='broker' class="lower working">
            </div>
            <div class="column is-narrow">
              <div class="label2">Mūsų paslaugos kaina</div>
              <input type="text" id='ourPrice' class="lower working">
            </div>
            <div class="column auto"></div>
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
              <div class="header-text" style='padding-left: 75px;'><img src='img/2icon.png' alt='Paslaugos pirkejams' class="icon2">Pirkėjams</div>
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
              <div class="header-text" style='padding-left: 50px;'><img src='img/3icon.png' alt='Kitos paslaugos' class="icon">Kitos paslaugos</div>
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
            <div class="top" style='padding: 0 40px;'>Optimalus</div>
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
            <div class='triangle'><span>Super!</span></div>
            <div class="top">Populiariausias</div>
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
            <div class="top" style='padding: 0 18px;'>Praktiškiausias</div>
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
      <div style="margin-top: 40px;" id="select_plan"><a class="button3 btn" data-ripple href="#" id="select_plan" onClick="redirectToForm()">Rinktis paslaugų paketą</a></div>

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
    <div class="after-nav3">
      <div class="text3">Reikia gyvos konsultacijos?</div>
      <div style="margin-top: 50px;"><a class="button2" data-ripple href="#">Susisiekti</a></div>
    </div>
    <div class='container-2' style='text-align: center; background-color: #fbfbfb; padding-bottom: 100px;'>
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
    <div class="container-2" id='apie'>
      <div class="columns is-centered">
        <div class="column is-5" style="display: flex; align-items: center;">
          <div class="foto"></div>
        </div>
        <div class="column" style="flex: 1;">
          <div style="color: #0b0146; font-size: 40px; padding-bottom: 20px;">Apie Mus</div>
          <div class="bottom">Pagrindinis skirtumas tarp Realta.lt ir visų kitų Lietuvoje veikiančių NT agentūrų yra kaina ir klientų aptarnavimas. Kadangi mes dirbame internetu, mūsų įmonė neturi didelių išlaidų, todėl mūsų darbo sąnaudos yra žymiai mažesnės, tai reiškia, kad mes galime dirbti efektyviau, ekologiškiau ir ekonomiškiau. Antra, mūsų klientai gali patys nuspręsti, kiek gali sumokėti ir kokias paslaugas gauti pardavimo procese. Nes mes sujungiam kuo daugiau pardavėjų, pirkėjų ir paslaugų tiekėjų vienoje vietoje.</div>
        </div>
      </div>
    </div>
    <div class="container-3">
      <div class="columns is-desktop">
        <div class="column is-3" style="padding-top: 40px; justify-content: center;">
          <img src="img/logo.png" style="width: 200px;">
        </div>
        <div class="column is-2">
          <div class="footerTxt">Apie Mus</div>
          <div class="links"><a href="#">Paslaugos</a></div>
          <div class="links"><a href="#">Kaip tai veikia</a></div>
          <div class="links"><a href="#">Kainos</a></div>
          <div class="links"><a href="#">DUK</a></div>
          <div class="links"><a href="#">Užsisakyti</a></div>
        </div>
        <div class="column is-2">
          <div class="footerTxt">Klientams</div>
          <div class="links"><a href="#">Taisyklės ir sąlygos</a></div>
          <div class="links"><a href="#">Privatumo politika</a></div>
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
    function redirectToForm(){
        var selectedPlan = document.getElementsByClassName("activep")[0].getElementsByClassName("top")[0].innerHTML;
        var data = { plan: selectedPlan, _token: '{{csrf_token()}}' };

        var baseUrl = window.location.href;
        var url = baseUrl.concat("plan");

        $.post(url, data, function(response){
            window.location.replace(baseUrl.concat("register"));
        });                
        }
</script>

  </body>
</html>
