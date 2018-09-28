@extends('layouts.parallax') 
@section('title')
RealPro | Užsakymas
@endsection
@section('content')
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

<section id="checkout">
    <h1 id="checkout-title">Užsakymas</h1>
    @if (session('selectedPlan') !== null)
    <h2 id="checkout-plan">Pasirinktas planas:
        <span class="selected-plan">
            <?php echo(session('selectedPlan')) ?>
        </span>
    </h2>
    <a class="checkout-change" href="{{ route('plans') }}">Keisti</a> @else
    <h2 id="checkout-plan">Planas nepasirinktas</h2>
    <a class="checkout-change" href="{{ route('plans') }}">Keisti</a> @endif
    <p id="checkout-afterheadings-text">Pasirinkite NT objekto tipą bei pasiūlymo būdą:</p>
    <form method="POST" action="{{ route('order.store') }}" class="checkout-form">
        @csrf
        <div class="checkout-select" style="margin-right: 10px;">
            <span class="fa fa-home house-icon"></span>
            <select name="nuosavybes_tipas" id="property-type">
                <option selected value="butas">Butas</option>
                <option value="namas">Namas</option>
                <option value="sklypas">Sklypas</option>
                <option value="patalpos">Patalpos</option>
                <option value="garazas">Garažas</option>
            </select>
            <span class="fa fa-angle-down checkout-select-arrow"></span>
        </div>
        <div class="checkout-select">
            <select name="pardavimo_tipas" id="selling-type">
                <option selected value='pardavimas'>Parduoti</option>
                <option value='nuoma'>Nuomuoti</option>
            </select>
            <span class="fa fa-angle-down checkout-select-arrow"></span>
        </div>
        <div class="checkout-field">
            <label class="checkout-label">El. Paštas</label>
            <input class="checkout-input" name="email" type="text" placeholder="El. Paštas" required>
        </div>
        <div class="checkout-field">
            <label class="checkout-label">Pilnas vardas</label>
            <input class="checkout-input" name="name" type="text" placeholder="Vardas" required>
        </div>
        <div class="checkout-field">
            <label class="checkout-label">Tel. Nr</label>
            <input class="checkout-input" name="tel" type="tel" placeholder="Tel. Nr" required>
        </div>
        <div class="checkout-field">
            <label class="checkout-label">Gimimo data</label>
            <input class="checkout-input" name="date" type="date" placeholder="Pvz 1990-10-07" required>
        </div>
        <hr class="checkout-hr" />
        <div class="checkout-field">
            <label class="checkout-label">Pilnas objekto adresas</label>
            <input class="checkout-input" type="text" placeholder="Pvz. Vilniaus g. 20-55, Vilnius, Lietuva" name='adresas' required>
        </div>
        <div class="checkout-field" id='plotas'>
            <label class="checkout-label">Plotas, m<sup>2</sup></label>
            <input class="checkout-input" type="number" placeholder="Plotas" name='plotas' required>
        </div>
        <div class="checkout-field" id='kambariu_skaicius'>
            <label class="checkout-label">Kambarių sk.</label>
            <input class="checkout-input" type="number" placeholder="Kambarių sk." name='kambariu_skaicius'>
        </div>
        <div class="checkout-field" id='aukstas'>
            <label class="checkout-label">Aukštas</label>
            <input class="checkout-input" type="number" placeholder="Aukštas" name='aukstas'>
        </div>
        <div class="checkout-field" id='sklypas'>
            <label class="checkout-label">Sklypo plotas (a)</label>
            <input class="checkout-input" type="number" placeholder="Bendras sklypo plotas (a)" name='sklypo_plotas'>
        </div>
        <div class="checkout-field" id='aukstu_skaicius'>
            <label class="checkout-label">Aukštų sk.</label>
            <input class="checkout-input" type="number" placeholder="Aukštų sk." name='aukstu_skaicius'>
        </div>
        <div class="checkout-field" id='statybos_metai'>
            <label class="checkout-label">Statybos metai</label>
            <input class="checkout-input" type="number" placeholder="Statybos metai" name='statybos_metai'>
        </div>
        <div class="checkout-field" id='talpa'>
            <label class="checkout-label">Telpa automobilių</label>
            <input class="checkout-input" type="number" placeholder="Telpa automobilių" name='talpa'>
        </div>
        <div class="checkout-field" id="renovacija">
            <input class="checkout-checkbox" type="checkbox" id="renovationCheck">
            <label for="renovationCheck" class="checkout-check-label" id="renovuotas">Butas renovuotas</label>
        </div>
        <hr class="checkout-hr" id='sklypo_hr'>
        <div class="checkout-field" id='namo_tipas'>
            <label class="checkout-label display-block">Namo tipas</label>
            <div class="checkout-select is-fullwidth">
                <select name="namo_tipas" class="checkout-selector">
                    <option selected value='namasGyv'>Namas (gyvenamasis)</option>
                    <option value='namo_dalis'>Namo dalis</option>
                    <option value='sodo_namas'>Sodo namas</option>
                    <option value='sublokuotas'>Sublokuotas namas</option>
                    <option value='sodyba'>Sodyba</option>
                </select>
                <span class="fa fa-angle-down checkout-select-arrow"></span>
            </div>
        </div>
        <div class="checkout-field" id='garazo_tipas'>
            <label class="checkout-label display-block">Tipas</label>
            <div class="checkout-select is-fullwidth">
                <select name="garazo_tipas" class="checkout-selector">
                    <option selected value='murinis'>Mūrinis</option>
                    <option value='namo_dalis'>Geležinis</option>
                    <option value='pozeminis'>Požeminis</option>
                    <option value='daugiaaukstis'>Daugiaaukštis</option>
                </select>
                <span class="fa fa-angle-down checkout-select-arrow"></span>
            </div>
        </div>
        <div class="checkout-field" id='pastato_tipas'>
            <label class="checkout-label display-block">Tipas</label>
            <div class="checkout-select is-fullwidth">
                <select name="pastato_tipas" class="checkout-selector">
                    <option selected value='murinis'>Mūrinis</option>
                    <option value='blokinis'>Blokinis</option>
                    <option value='monolitinis'>Monolitinis</option>
                    <option value='medinis'>Medinis</option>
                    <option value='karkasinis'>Karkasinis</option>
                    <option value='rastinis'>Rąstinis</option>
                </select>
                <span class="fa fa-angle-down checkout-select-arrow"></span>
            </div>
        </div>
        <div class="checkout-field" id='irengimas'>
            <label class="checkout-label display-block">Įrengimas</label>
            <div class="checkout-select is-fullwidth">
                <select name="irengimas" class="checkout-selector">
                    <option selected value='irengtas'>Įrengtas</option>
                    <option value='dalineApdaila'>Dalinė apdaila</option>
                    <option value='neirengtas'>Neįrengtas</option>
                    <option value='nebaigtas'>Nebaigtas statyti</option>
                    <option value='pamatai'>Pamatai</option>
                    <option value='kita'>Kita</option>
                </select>
                <span class="fa fa-angle-down checkout-select-arrow"></span>
            </div>
        </div>
        <hr class="checkout-hr">
        <div class="checkout-field" id='sildymas'>
            <label class="checkout-label">Šildymas</label>
            <div class="columns is-multiline">
                <div class="column breakable">
                    <div class="checkout-field">
                        <input class="checkout-checkbox" type="checkbox" id="centrinisSildymas" name="centrinis">
                        <label for="centrinisSildymas" class="checkout-check-label">Centrinis</label>
                    </div>
                    <div class="checkout-field">
                        <input class="checkout-checkbox" type="checkbox" id="centrinisKolektorius" name="centrinisKol">
                        <label for="centrinisKolektorius" class="checkout-check-label">Centrinis kolektorius</label>
                    </div>
                    <div class="checkout-field">
                        <input class="checkout-checkbox" type="checkbox" id="dujinis" name="dujinis">
                        <label for="dujinis" class="checkout-check-label">Dujinis</label>
                    </div>
                </div>
                <div class="column breakable">
                    <div class="checkout-field">
                        <input class="checkout-checkbox" type="checkbox" id="elektra" name="elektra">
                        <label for="elektra" class="checkout-check-label">Elektra</label>
                    </div>
                    <div class="checkout-field">
                        <input class="checkout-checkbox" type="checkbox" id="geoterminis" name="geoterminis">
                        <label for="geoterminis" class="checkout-check-label">Geoterminis</label>
                    </div>
                    <div class="checkout-field">
                        <input class="checkout-checkbox" type="checkbox" id="kietasKuras" name="kietasKuras">
                        <label for="kietasKuras" class="checkout-check-label">Kietas kuras</label>
                    </div>
                </div>
                <div class="column breakable">
                    <div class="checkout-field">
                        <input class="checkout-checkbox" type="checkbox" id="skystasKuras" name="skystasKuras">
                        <label for="skystasKuras" class="checkout-check-label">Elektra</label>
                    </div>
                    <div class="checkout-field">
                        <input class="checkout-checkbox" type="checkbox" id="kita" name="kita">
                        <label for="kita" class="checkout-check-label">Geoterminis</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="checkout-field" id='paskirtis'>
            <label class="checkout-label">Paskirtis</label>
            <div class="columns is-multiline">
                <div class="column breakable">
                    <div class="checkout-field">
                        <input class="checkout-checkbox" type="checkbox" id="namu_valda" name="namu_valda">
                        <label for="namu_valda" class="checkout-check-label">Namų valda</label>
                    </div>
                    <div class="checkout-field">
                        <input class="checkout-checkbox" type="checkbox" id="sklypas_soduose" name="sklypas_soduose">
                        <label for="sklypas_soduose" class="checkout-check-label">Sklypas soduose</label>
                    </div>
                    <div class="checkout-field">
                        <input class="checkout-checkbox" type="checkbox" id="sandeliavimo" name="sandeliavimo">
                        <label for="sandeliavimo" class="checkout-check-label">Sandeliavimo</label>
                    </div>
                    <div class="checkout-field">
                        <input class="checkout-checkbox" type="checkbox" id="kitas" name="kita">
                        <label for="kitas" class="checkout-check-label">Kita</label>
                    </div>
                </div>
                <div class="column breakable">
                    <div class="checkout-field">
                        <input class="checkout-checkbox" type="checkbox" id="daugiabucioStatyba" name="daugiabuciu_statyba">
                        <label for="daugiabucioStatyba" class="checkout-check-label">Daugiabučių statyba</label>
                    </div>
                    <div class="checkout-field">
                        <input class="checkout-checkbox" type="checkbox" id="miskoUkio" name="misko_ukio">
                        <label for="miskoUkio" class="checkout-check-label">Miško ūkio</label>
                    </div>
                    <div class="checkout-field">
                        <input class="checkout-checkbox" type="checkbox" id="komercine" name="komercine">
                        <label for="komercine" class="checkout-check-label">Komercinė</label>
                    </div>
                </div>
                <div class="column breakable">
                    <div class="checkout-field">
                        <input class="checkout-checkbox" type="checkbox" id="zemesUkio" name="zemes_ukio">
                        <label for="zemesUkio" class="checkout-check-label">Žemės ūkio</label>
                    </div>
                    <div class="checkout-field">
                        <input class="checkout-checkbox" type="checkbox" id="pramones" name="pramones">
                        <label for="pramones" class="checkout-check-label">Pramonės</label>
                    </div>
                    <div class="checkout-field">
                        <input class="checkout-checkbox" type="checkbox" id="rekreacine" name="rekreacine">
                        <label for="rekreacine" class="checkout-check-label">Rekreacinė</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="checkout-field" id='paskirtis_kom'>
            <label class="checkout-label">Paskirtis</label>
            <div class="columns is-multiline">
                <div class="column breakable">
                    <div class="checkout-field">
                        <input class="checkout-checkbox" type="checkbox" id="administracine" name="administracine">
                        <label for="administracine" class="checkout-check-label">Administracinė</label>
                    </div>
                    <div class="checkout-field">
                        <input class="checkout-checkbox" type="checkbox" id="paslaugu" name="paslaugu">
                        <label for="paslaugu" class="checkout-check-label">Paslaugų</label>
                    </div>
                    <div class="checkout-field">
                        <input class="checkout-checkbox" type="checkbox" id="maitinimo" name="maitinimo">
                        <label for="maitinimo" class="checkout-check-label">Maitinimo</label>
                    </div>
                </div>
                <div class="column breakable">
                    <div class="checkout-field">
                        <input class="checkout-checkbox" type="checkbox" id="prekybos" name="prekybos">
                        <label for="prekybos" class="checkout-check-label">Prekybos</label>
                    </div>
                    <div class="checkout-field">
                        <input class="checkout-checkbox" type="checkbox" id="sandeliavimo_kom" name="sandeliavimo_kom">
                        <label for="sandeliavimo_kom" class="checkout-check-label">Sandėliavimo</label>
                    </div>
                    <div class="checkout-field">
                        <input class="checkout-checkbox" type="checkbox" id="kita_kom" name="kita_kom">
                        <label for="kita_kom" class="checkout-check-label">Kita</label>
                    </div>
                </div>
                <div class="column breakable">
                    <div class="checkout-field">
                        <input class="checkout-checkbox" type="checkbox" id="viesbuciu" name="viesbuciu">
                        <label for="viesbuciu" class="checkout-check-label">Viesbučių</label>
                    </div>
                    <div class="checkout-field">
                        <input class="checkout-checkbox" type="checkbox" id="gamybos" name="gamybos">
                        <label for="gamybos" class="checkout-check-label">Gamybos ir pramonės</label>
                    </div>
                </div>
            </div>
        </div>
        <hr class="checkout-hr" id="garazas_hr">
        <div class="checkout-field">
            <label class="checkout-label">Ypatybės</label>
            <textarea class="checkout-textarea" placeholder="Pvz. Ypatybės, papildomos patalpos, papildoma įranga, apsauga" name='ypatybes'></textarea>
        </div>
        <hr class="checkout-hr">
        <div class="checkout-field">
            <label class="checkout-label">Komentaras</label>
            <textarea class="checkout-textarea" placeholder="Komentaras" name='komentaras'></textarea>
        </div>
        <div class="checkout-field" style="margin-top: 140px;">
            <label class="checkout-label">Kaina, &euro;</label>
            <input class="checkout-input" type="number" placeholder="Kaina" name="kaina" required>
        </div>
        <div class="checkout-field" style="text-align: center;">
            <input type="checkbox" name="aggree" id="aggree" required style="height: auto; width: auto;">
            <label id="aggree-label" for="aggree">Sutinku su <a href="#">sąlygomis ir taisyklėmis</a></label>
        </div>
        <div class="checkout-field" style="text-align: center;">
            <button class="checkout-submit" type="submit">UŽSISAKYTI</button>
        </div>
    </form>
    <form method="POST" id="myForm" enctype="multipart/form-data">
        @csrf
        <div class="ajax">
            <div class="checkout-field" id="image-field">
                <label for="images" class="checkout-label">Nuotraukos</label>
                <label class="upload-label">
                    Įkelti nuotraukas
                    <input class="checkout-upload" type="file" multiple name="images[]" id="images"> 
                </label>
                <div id="progress3">
                    <div id="bar3"></div>
                    <div id="percent3">0%</div>
                </div>
                <div id="message3"></div>
            </div>
        </div>
    </form>
</section>
@endsection
 
@section('scripts')
<script type="text/javascript">
    var uploadUri = "{{ route('upload') }}";

</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"></script>
<script src="js/checkout.js" type="text/javascript"></script>
@endsection