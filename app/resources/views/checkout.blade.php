<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,500" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <title>Apmokejimas</title>
    <link rel="stylesheet" href="../css/scss.css">
  </head>
  <body>
    <a href='#'><img src='../img/logo.png' class='logo'></a>
    <div class='afterLogo'>
    <h2>Užsakymas</h2>
    <form method="POST" action='/realpro/app/order'>
      @csrf
    <div class="field is-grouped is-grouped-centered">
<p class="control has-icons-left">
  <span class="select">
    <select name='nuosavybes_tipas'>
      <option selected value='butas'>Butas</option>
      <option value="namas">Namas</option>
      <option value="sklypas">Sklypas</option>
    </select>
  </span>
  <span class="icon is-small is-left">
    <i class="fas fa-home"></i>
  </span>
</p>
<p class="control">
  <span class="select">
    <select name='pardavimo_tipas'>
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
<div class='field'>
<label class="label">Plotas m<sup>2</sup></label>
<div class="control">
  <input class="input" type="number" placeholder="Plotas" name='plotas'>
</div>
</div>
<div class='field'>
<label class="label">Kambarių sk.</label>
<div class="control">
  <input class="input" type="number" placeholder="Kambarių sk." name='kambariu_skaicius'>
</div>
</div>
<div class='field'>
<label class="label">Aukštas</label>
<div class="control">
  <input class="input" type="number" placeholder="Aukštas" name='aukstas'>
</div>
</div>
<div class='field'>
<label class="label">Aukštų sk.</label>
<div class="control">
  <input class="input" type="number" placeholder="Aukštų sk." name='aukstu_skaicius'>
</div>
</div>
<div class='field'>
<label class="label">Statybos metai</label>
<div class="control">
  <input class="input" type="number" placeholder="Statybos metai" name='statybos_metai'>
</div>
</div>
<div class="field">
  <input class="is-checkradio is-block is-success" id="exampleCheckbox" type="checkbox" name="renovuotas">
  <label for="exampleCheckbox">Butas renovuotas</label>
</div>
<hr>
<div class='field'>
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

<div class='field'>
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
<div class='field leftAlign'>
<label class="label">Šildymas</label>
<div class='columns'>
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
<hr>
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
<label class="label">Kaina &euro;</label>
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
      Įkelti nuotraukas...
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
<script   src="https://code.jquery.com/jquery-3.3.1.min.js"   integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="   crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"></script>

<script>
$('#images').on("change",function(){
    var options = {
        type:"post",
        url: "{{ route('upload') }}",
        beforeSend: function()
        {
            $("#progress3").show();
            //clear everything
            $("#bar3").width('0%');
            $("#message3").html("");
            $("#percent3").html("0%");
        },
        uploadProgress: function(event, position, total, percentComplete)
        {
            $("#bar3").width(percentComplete+'%');
            $("#percent3").html(percentComplete+'%');
        },
        success: function()
        {
            $("#bar3").width('100%');
            $("#percent3").html('100%');

        },
        complete: function(response)
        {
            $("#message3").html("<span style='color: green;'>"+'Įkelta sėkmingai!'+"</span>");
        },
        error: function()
        {
            $("#message3").html("<span style='color: red;'> ERROR: unable to upload files</span>");
        }
    };

    $("#myForm").ajaxSubmit(options);
});
</script>
  </body>
</html>
