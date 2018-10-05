@extends('layouts.parallax') 
@section('title')
RealPro | Apie mus
@endsection
@section('content')
<!-- cover-->
<section class="bg blog-cover" id="about-top-img">
</section>
<!-- cover end-->

<!-- start features -->
<section id="feature" class="position-relative">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 text-center center-col last-paragraph-no-margin" style="width: 100%;">
                <div class="sec-title margin-100px-bottom">
                    <h3 class="text-capitalize alt-font text-extra-dark-gray font-weight-300">
                        Apie mus</h3>
                    <p class="width-75 margin-lr-auto md-width-90 xs-width-100 xs-margin-30px-bottom" style="width: 90%;">
                        Mes esame tarpininkai tarp Jūsų ir Pirkėjo. Mūsų užduotis – profesionaliu darbu palengvinti jūsų NT pardavimo procesą be
                        jokių papildomų tarpininkavimo mokesčių ir palūkanų. Užsisakius vienkartinį paslaugų paketą mes pateiksime
                        jūsų objekto skelbimus šimtui tūkstančių potencialių pirkėjų, priimsime skambučius ir atrinksime
                        geriausius kandidatus. Taip pat padėsime sutvarkyti pirkimo dokumentus bei konsultuosime visais kilusiais
                        klausimais susijusiais su NT pardavimu. Klientai kartais skuba mūsų klausti, kodėl Realpro paslaugos
                        yra tokios pigios, o mes keliame klausimą, kodėl kitos NT agentūros yra tokios brangios? Mes išsikėlėme
                        tikslą suteikti geriausią patirtį užtikrinant mažiausią kainą. Tai sėkmingai darome dirbdami atsisakant
                        nereikalingų išlaidų. Dirbame internetu ir visas paslaugas teikiame iš vieno ofiso, taip mūsų darbo
                        sąnaudos lieka mažos, o darbo kokybė išlieka aukšta.
                    </p>
                    <h3 class="text-capitalize alt-font text-extra-dark-gray font-weight-300" style="font-size: 35px; margin-bottom: 0;">
                            Kokybė</h3>
                    <p class="width-75 margin-lr-auto md-width-90 xs-width-100 xs-margin-30px-bottom" style="margin-top: 10px;">
                        Mūsų komanda yra kokybiško darbo garantija. Ją sudaro 10 žmonių, tačiau kiekvienas iš jų yra kompetentingas savo srities
                        ekspertas turintis ilgalaikę darbo patirtį. Įgūdžių palaikymą užtvirtiname įvairiais mokymais bei
                        entuziastingu NT tendencijų domėjimusi. Esame įsitikinę, kad aukščiausios rūšies paslaugas teikia
                        darbuotojai mylintys savo darbą ☺
                    </p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12 margin-30px-bottom">
                <div class="services-item text-center">
                    <i class="fa fa-eye" aria-hidden="true"></i>
                    <h6 class="text-extra-dark-gray margin-10px-tb alt-font font-weight-400">Vizija</h6>
                    <hr class="services-hr">
                    <p>Padėti klientams parduoti savo nekilnojamąjį turtą saugiai, greitai ir mažiausiomis išlaidomis.</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 margin-30px-bottom">
                <div class="services-item text-center">
                    <i class="fa fa-bullseye" aria-hidden="true"></i>
                    <h6 class="text-extra-dark-gray margin-10px-tb alt-font font-weight-400">Misija</h6>
                    <hr class="services-hr">
                    <p>Būti lyderiais tarp Lietuvoje egzistuojančių NT agentūrų teikiamų paslaugų kokybės bei kainos atžvilgiu.
                        </p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 margin-30px-bottom">
                <div class="services-item text-center">
                    <i class="fa fa-info-circle" aria-hidden="true"></i>
                    <h6 class="text-extra-dark-gray margin-10px-tb alt-font font-weight-400">Pagrindiniai principai</h6>
                    <hr class="services-hr">
                    <p>Pagrindiniai principai ir vertybės kuriomis grindžiame savo veiklą: profesionalumas savo srityje, greitas,
                        pigus ir kokybiškas aptarnavimas. </p>
                </div>
            </div>
        </div>
    </div>

</section>
@endsection
@section('scripts')
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
@endsection