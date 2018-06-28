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
    <form method="POST" action='/order'>
    <div class="field is-grouped is-grouped-centered">
<p class="control has-icons-left">
  <span class="select">
    <select name='tipas'>
      <option selected value='namas'>Namas</option>
      <option value="butas">Butas</option>
      <option value="sklypas">Sklypas</option>
    </select>
  </span>
  <span class="icon is-small is-left">
    <i class="fas fa-home"></i>
  </span>
</p>
<p class="control">
  <span class="select">
    <select name='arParduoti'>
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
  <input class="input" type="number" placeholder="Statybos metai" name="statybos_metai">
  <label class="checkbox">
    <input type="checkbox" name='renovuotas'>
    Namas renovuotas
  </label>
</div>
</div>
</div>
</form>
  </body>
</html>
