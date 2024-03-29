<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-123099861-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-123099861-1');
</script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no">
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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <title>Užsakymas | RealPro</title>
    <link rel="stylesheet" href="css/scss.css">
    <script type="text/javascript">
	 	    var uploadUri = "{{ route('upload') }}";
    </script>
  </head>
  <body class='has-navbar-fixed-top'>
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
    <div class='afterLogo'>
    <h2>Užsakymas</h2>
    <form method="POST" action="{{ route('order.store') }}">
    @csrf
    @if (session('selectedPlan') !== null)
    <h3>Pasirinktas planas: <span style='color: rgb(63,	115, 213);'><?php echo session('selectedPlan'); ?></span> <a href="{{ route('plans') }}" class='change'>Keisti</a></h3>
    @else
    <h3>Planas nepasirinktas <span style='color: rgb(63,	115, 213);'><?php echo session('selectedPlan'); ?></span> <a href="{{ route('plans') }}" class='change'>Pasirinkti</a></h3>
    @endif
      <h4>Pasirinkite NT objekto tipą bei pasiūlymo būdą:</h4>
    <div class="field is-grouped is-grouped-centered">
<p class="control has-icons-left">
  <span class="select">
    <select name='nuosavybes_tipas' id='tipas'>
      <option selected value="butas">Butas</option>
      <option value="namas">Namas</option>
      <option value="sklypas">Sklypas</option>
      <option value="patalpos">Patalpos</option>
      <option value="garazas">Garažas</option>
    </select>
  </span>
  <span class="icon is-small is-left">
    <i class="fas fa-home"></i>
  </span>
</p>
<p class="control">
  <span class="select">
    <select name='pardavimo_tipas' id='pardavimo_tipas'>
      <option selected value='pardavimas'>Parduoti</option>
      <option value='nuoma'>Nuomuoti</option>
    </select>
  </span>
</p>
</div>
<div class="field">
  <label class="label">Pilnas vardas</label>
  <div class="control">
    <input class="input" type="text" placeholder="Vardas" name='vardas' required>
  </div>
</div>
<div class="field">
  <label class="label">Tel. nr.</label>
  <div class="control">
    <input class="input" type="tel" placeholder="Tel. nr." name='tel' required>
  </div>
</div>
<div class="field">
  <label class="label">Gimimo data</label>
  <div class="control">
    <input class="input" type="date" placeholder="Pvz. 1990-10-07" name='gimimas' required>
  </div>
</div>
<hr>
  <div class='field'>
  <label class="label">Pilnas objekto adresas</label>
  <div class="control">
    <input class="input" type="text" placeholder="Pvz. Vilniaus g. 20-55, Vilnius, Lietuva" name='adresas' required>
  </div>
</div>
<div class='field' id='plotas'>
<label class="label">Plotas, m<sup>2</sup></label>
<div class="control">
  <input class="input" type="number" placeholder="Plotas" name='plotas' required>
</div>
</div>
<div class='field' id='kambariu_skaicius'>
<label class="label">Kambarių sk.</label>
<div class="control">
  <input class="input" type="number" placeholder="Kambarių sk." name='kambariu_skaicius'>
</div>
</div>
<div class='field' id='aukstas'>
<label class="label">Aukštas</label>
<div class="control">
  <input class="input" type="number" placeholder="Aukštas" name='aukstas'>
</div>
</div>
<div class='field' id='sklypas'>
<label class="label">Sklypo plotas (a)</label>
<div class="control">
  <input class="input" type="number" placeholder="Bendras sklypo plotas (a)" name='sklypo_plotas'>
</div>
</div>
<div class='field' id='aukstu_skaicius'>
<label class="label">Aukštų sk.</label>
<div class="control">
  <input class="input" type="number" placeholder="Aukštų sk." name='aukstu_skaicius'>
</div>
</div>
<div class='field' id='statybos_metai'>
<label class="label">Statybos metai</label>
<div class="control">
  <input class="input" type="number" placeholder="Statybos metai" name='statybos_metai'>
</div>
</div>
<div class='field' id='talpa'>
<label class="label">Telpa automobilių</label>
<div class="control">
  <input class="input" type="number" placeholder="Telpa automobilių" name='talpa'>
</div>
</div>
<div class="field" id='renovacija'>
  <input class="is-checkradio is-block is-success" id="exampleCheckbox" type="checkbox" name="renovuotas">
  <label for="exampleCheckbox" id='renovuotas'>Butas renovuotas</label>
</div>
<hr id='sklypo_hr'>
<div class='field' id='namo_tipas'>
<label class="label">Namo Tipas</label>
<div class="control is-expanded">
  <div class="select is-fullwidth">
    <select name='namo_tipas'>
      <option selected value='namasGyv'>Namas (gyvenamasis)</option>
      <option value='namo_dalis'>Namo dalis</option>
      <option value='sodo_namas'>Sodo namas</option>
      <option value='sublokuotas'>Sublokuotas namas</option>
      <option value='sodyba'>Sodyba</option>
    </select>
  </div>
</div>
</div>
<div class='field' id='garazo_tipas'>
<label class="label">Tipas</label>
<div class="control is-expanded">
  <div class="select is-fullwidth">
    <select name='garazo_tipas'>
      <option selected value='murinis'>Mūrinis</option>
      <option value='namo_dalis'>Geležinis</option>
      <option value='pozeminis'>Požeminis</option>
      <option value='daugiaaukstis'>Daugiaaukštis</option>
    </select>
  </div>
</div>
</div>
<div class='field' id='pastato_tipas'>
<label class="label">Pastato tipas</label>
<div class="control is-expanded">
  <div class="select is-fullwidth">
    <select name='pastato_tipas'>
      <option selected value='murinis'>Mūrinis</option>
      <option value='blokinis'>Blokinis</option>
      <option value='monolitinis'>Monolitinis</option>
      <option value='medinis'>Medinis</option>
      <option value='karkasinis'>Karkasinis</option>
      <option value='rastinis'>Rąstinis</option>
    </select>
  </div>
</div>
</div>

<div class='field' id='irengimas'>
<label class="label">Įrengimas</label>
<div class="control is-expanded">
  <div class="select is-fullwidth">
    <select name='irengimas'>
      <option selected value='irengtas'>Įrengtas</option>
      <option value='dalineApdaila'>Dalinė apdaila</option>
      <option value='neirengtas'>Neįrengtas</option>
      <option value='nebaigtas'>Nebaigtas statyti</option>
      <option value='pamatai'>Pamatai</option>
      <option value='kita'>Kita</option>
    </select>
  </div>
</div>
</div>
<hr>
<div class='field leftAlign' id='sildymas'>
<label class="label">Šildymas</label>
<div class='columns is-multiline'>
  <div class='column breakable'>
<div class='field'>
  <input class="is-checkradio is-block is-success" id="centrinisSildymas" type="checkbox" name="centrinis">
  <label for="centrinisSildymas">Centrinis</label>
</div>
<div class='field'>
  <input class="is-checkradio is-block is-success" id="centrinisKol" type="checkbox" name="centrinisKol">
  <label for="centrinisKol" class='smaller'>Centrinis Kolektorius</label>
</div>
<div class='field'>
  <input class="is-checkradio is-block is-success" id="dujinis" type="checkbox" name="dujinis">
  <label for="dujinis">Dujinis</label>
</div>
</div>
<div class='column breakable'>
  <div class='field'>
    <input class="is-checkradio is-block is-success" id="elektra" type="checkbox" name="elektra">
    <label for="elektra">Elektra</label>
  </div>
  <div class='field'>
    <input class="is-checkradio is-block is-success" id="geoterminis" type="checkbox" name="geoterminis">
    <label for="geoterminis">Geoterminis</label>
  </div>
  <div class='field'>
    <input class="is-checkradio is-block is-success" id="kietasKuras" type="checkbox" name="kietasKuras">
    <label for="kietasKuras" class='smaller'>Kietu kuru</label>
  </div>
</div>
<div class='column breakable'>
  <div class='field'>
    <input class="is-checkradio is-block is-success" id="skystasKuras" type="checkbox" name="skystasKuras">
    <label for="skystasKuras">Skystu kuru</label>
  </div>
  <div class='field'>
    <input class="is-checkradio is-block is-success" id="kita" type="checkbox" name="kita">
    <label for="kita">Kita</label>
  </div>
</div>
</div>
</div>
<div class='field leftAlign' id='paskirtis'>
<label class="label">Paskirtis</label>
<div class='columns is-multiline'>
  <div class='column breakable'>
<div class='field'>
  <input class="is-checkradio is-block is-success" id="namuValda" type="checkbox" name="namu_valda">
  <label for="namuValda">Namų valda</label>
</div>
<div class='field'>
  <input class="is-checkradio is-block is-success" id="sklypasSoduose" type="checkbox" name="sklypas_soduose">
  <label for="sklypasSoduose" class='smaller'>Sklypas soduose</label>
</div>
<div class='field'>
  <input class="is-checkradio is-block is-success" id="sandeliavimo" type="checkbox" name="sandeliavimo">
  <label for="sandeliavimo">Sandėliavimo</label>
</div>
<div class='field'>
  <input class="is-checkradio is-block is-success" id="kitas" type="checkbox" name="kita">
  <label for="kitas">Kita</label>
</div>
</div>
<div class='column breakable'>
  <div class='field'>
    <input class="is-checkradio is-block is-success" id="daugiabucioStatyba" type="checkbox" name="daugiabuciu_statyba">
    <label for="daugiabucioStatyba" class='smaller'>Daugiabučių statyba</label>
  </div>
  <div class='field'>
    <input class="is-checkradio is-block is-success" id="miskoUkio" type="checkbox" name="misko_ukio">
    <label for="miskoUkio">Miško ūkio</label>
  </div>
  <div class='field'>
    <input class="is-checkradio is-block is-success" id="komercine" type="checkbox" name="komercine">
    <label for="komercine">Komercinė</label>
  </div>
</div>
<div class='column'>
  <div class='field'>
    <input class="is-checkradio is-block is-success" id="zemesUkio" type="checkbox" name="zemes_ukio">
    <label for="zemesUkio">Žemės ūkio</label>
  </div>
  <div class='field'>
    <input class="is-checkradio is-block is-success" id="pramones" type="checkbox" name="pramones">
    <label for="pramones">Pramonės</label>
  </div>
  <div class='field'>
    <input class="is-checkradio is-block is-success" id="rekreacine" type="checkbox" name="rekreacine">
    <label for="rekreacine">Rekreacinė</label>
  </div>
</div>
</div>
</div>
<div class='field leftAlign' id='paskirtis_kom'>
<label class="label">Paskirtis</label>
<div class='columns is-multiline'>
  <div class='column'>
<div class='field'>
  <input class="is-checkradio is-block is-success" id="administracine" type="checkbox" name="administracine">
  <label for="administracine">Administracinė</label>
</div>
<div class='field'>
  <input class="is-checkradio is-block is-success" id="paslaugu" type="checkbox" name="paslaugu">
  <label for="paslaugu">Paslaugų</label>
</div>
<div class='field'>
  <input class="is-checkradio is-block is-success" id="maitinimo" type="checkbox" name="maitinimo">
  <label for="maitinimo">Maitinimo</label>
</div>
</div>
<div class='column'>
  <div class='field'>
    <input class="is-checkradio is-block is-success" id="prekybos" type="checkbox" name="prekybos">
    <label for="prekybos">Prekybos</label>
  </div>
  <div class='field'>
    <input class="is-checkradio is-block is-success" id="sandeliavimo_kom" type="checkbox" name="sandeliavimo_kom">
    <label for="sandeliavimo_kom">Sandėliavimo</label>
  </div>
  <div class='field'>
    <input class="is-checkradio is-block is-success" id="kita_kom" type="checkbox" name="kita_kom">
    <label for="kita_kom">Kita</label>
  </div>
</div>
<div class='column breakable'>
  <div class='field'>
    <input class="is-checkradio is-block is-success" id="viesbuciu" type="checkbox" name="viesbuciu">
    <label for="viesbuciu">Viešbučių</label>
  </div>
  <div class='field'>
    <input class="is-checkradio is-block is-success" id="gamybos" type="checkbox" name="gamybos">
    <label for="gamybos" class='smaller'>Gamybos ir pramonės</label>
  </div>
</div>
</div>
</div>
<hr id='garazas_hr'>
<div class='field'>
<label class="label">Ypatybės</label>
<div class="control">
  <textarea class="textarea" placeholder="Pvz. Ypatybės, papildomos patalpos, papildoma įranga, apsauga" name='ypatybes'></textarea>
</div>
</div>
<hr>
<div class='field'>
<label class="label">Komentaras</label>
<div class="control">
  <textarea class="textarea" placeholder="Komentaras" name='komentaras'></textarea>
</div>
</div>
<hr>
<div class='ajax-hidden'>
<div class="field">
  <label class="label">Nuotraukos</label>
    <div class="field">
<div class="file is-primary">
<label class="file-label">
  <input class="file-input" size='60' type="file">
  <span class="file-cta">
    <span class="file-icon">
      <i class="fas fa-upload"></i>
    </span>
    <span class="file-label">
      Nuotraukos
    </span>
  </span>
</label>
</div>
</div>
<div id="progress">
    <div id="bar"></div>
    <div id="percent">0%</div>
</div>
<div id="message"></div>
</div>
<hr>
</div>
<div class='field'>
<label class="label" id='kaina'>Kaina, &euro;</label>
<div class="control">
  <input type='number' class='input' name='kaina' required>
</div>
</div>
<label class="checkbox">
<input type="checkbox" class='sutinku' required>
Sutinku su <a href="https://realpro.lt/terms" target='_blank'>sąlygomis ir taisyklėmis.</a>
</label>
<div><button type='submit' class='button4'>UŽSISAKYTI</button></div>
</div>
</form>
<div class='ajax'>
<div class="field">
  <label class="label">Nuotraukos</label>
  <form method="post" id='myForm' enctype="multipart/form-data">
    @csrf
    <div class="field">
<div class="file is-primary">
<label class="file-label">
  <input class="file-input" size='60' type="file" multiple name='images[]' id='images'>
  <span class="file-cta">
    <span class="file-icon">
      <i class="fas fa-upload"></i>
    </span>
    <span class="file-label">
      Įkelti nuotraukas
    </span>
  </span>
</label>
</div>
</div>
</form>
<div id="progress3">
    <div id="bar3"></div>
    <div id="percent3">0%</div>
</div>
<div id="message3"></div>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"   integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="   crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"></script>
<script src='js/checkout.js'>
</script>
  </body>
</html>
