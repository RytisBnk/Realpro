<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,500" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <title>Apmokejimas</title>
    <link rel="stylesheet" href="css/scss.css">
    <script type="text/javascript">
	 	    var uploadUri = "{{ route('upload') }}";
    </script>
  </head>
  <body>
    <a href='#'><img src='img/logo.png' class='logo'></a>
    <div class='afterLogo'>
    <h2>Užsakymas</h2>
    <form method="POST" action="{{ route('order.store') }}">
      @csrf
      <h4>Pasirinkite NT objekto tipą bei pasiūlymo būdą:</h4>
    <div class="field is-grouped is-grouped-centered">
<p class="control has-icons-left">
  <span class="select">
    <select name='nuosavybes_tipas' id='tipas'>
      <option selected value='butas'>Butas</option>
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
      <option selected value='parduoti'>Parduoti</option>
      <option value='nuomuoti'>Nuomuoti</option>
    </select>
  </span>
</p>
</div>
<div class="field">
  <label class="label">Vardas</label>
  <div class="control">
    <input class="input" type="text" placeholder="Vardas" name='vardas'>
  </div>
</div>
<div class="field">
  <label class="label">Tel. nr.</label>
  <div class="control">
    <input class="input" type="tel" placeholder="Tel. nr." name='tel'>
  </div>
</div>
<div class="field">
  <label class="label">Gimimo data</label>
  <div class="control">
    <input class="input" type="date" placeholder="Pvz. 1990-10-07" name='gimimas'>
  </div>
</div>
<hr>
  <div class='field'>
  <label class="label">Pilnas objekto adresas</label>
  <div class="control">
    <input class="input" type="text" placeholder="Pvz. Vilniaus g. 20-55, Vilnius, Lietuva" name='adresas'>
  </div>
</div>
<div class='field' id='plotas'>
<label class="label">Plotas, m<sup>2</sup></label>
<div class="control">
  <input class="input" type="number" placeholder="Plotas" name='plotas'>
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
  <div class='column'>
<div class='field'>
  <input class="is-checkradio is-block is-success" id="centrinisSildymas" type="checkbox" name="centrinis">
  <label for="centrinisSildymas">Centrinis</label>
</div>
<div class='field'>
  <input class="is-checkradio is-block is-success" id="centrinisKol" type="checkbox" name="centrinisKol">
  <label for="centrinisKol">Centrinis Kolektorius</label>
</div>
<div class='field'>
  <input class="is-checkradio is-block is-success" id="dujinis" type="checkbox" name="dujinis">
  <label for="dujinis">Dujinis</label>
</div>
</div>
<div class='column'>
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
    <label for="kietasKuras">Kietu kuru</label>
  </div>
</div>
<div class='column'>
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
  <div class='column'>
<div class='field'>
  <input class="is-checkradio is-block is-success" id="namuValda" type="checkbox" name="namu_valda">
  <label for="namuValda">Namų valda</label>
</div>
<div class='field'>
  <input class="is-checkradio is-block is-success" id="sklypasSoduose" type="checkbox" name="sklypas_soduose">
  <label for="sklypasSoduose">Sklypas soduose</label>
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
<div class='column'>
  <div class='field'>
    <input class="is-checkradio is-block is-success" id="daugiabucioStatyba" type="checkbox" name="daugiabuciu_statyba">
    <label for="daugiabucioStatyba">Daugiabučių statyba</label>
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
<div class='column'>
  <div class='field'>
    <input class="is-checkradio is-block is-success" id="viesbuciu" type="checkbox" name="viesbuciu">
    <label for="viesbuciu">Viešbučių</label>
  </div>
  <div class='field'>
    <input class="is-checkradio is-block is-success" id="gamybos" type="checkbox" name="gamybos">
    <label for="gamybos" style='font-size: 12px;'>Gamybos ir pramonės</label>
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
  <input type='number' class='input' name='kaina'>
</div>
</div>
<button type='submit' class='button4'>Užsisakyti</button>
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
