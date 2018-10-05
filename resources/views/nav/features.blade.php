@extends('layouts.parallax') 
@section('title')
RealPro | Kaip tai veikia?
@endsection
@section('content')
<!-- cover-->
<section class="bg blog-cover" id="features-top-img">
</section>
<!-- cover end-->

<!-- start features -->
<section id="features" class="position-relative" style="padding-top: 40px; padding-bottom: 40px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 text-center center-col last-paragraph-no-margin" style="width: 100%;">
                <div class="sec-title margin-100px-bottom">
                    <h3 class="text-capitalize alt-font text-extra-dark-gray font-weight-300">
                        Kaip tai veikia</h3>
                    <p class="width-75 margin-lr-auto md-width-90 xs-width-100 xs-margin-30px-bottom">Realpro yra platforma tarpininkaujanti tarp NT pardavėjų ir galimų pirkėjų. Tai yra svetainė skirta taupantiems
                        savo laiką apsisaugant nuo ilgų ir komplikuotų pardavimo darbų. Tiems, kuriems būsto pardavimo klausimai
                        kelia stresą ir tiems, kurie nežino nuo ko geriausia pradėti šį procesą. Tuo metu, kol jūs mąstote
                        apie efektyviausią pardavimo būdą, mes esame suinteresuoti jums padėti tai įgyvendinti. Greitai,
                        saugiai ir vienareikšmiškai pigiau nei darant tai patiems ar per kitas nekilnojamojo turto įmones,
                        tačiau pirmiausia kyla klausimas – kaip tai veikia?</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12 margin-30px-bottom">
                <div class="services-item text-center">
                    <i class="fa fa-bicycle" aria-hidden="true"></i>
                    <h6 class="text-extra-dark-gray margin-10px-tb alt-font font-weight-400">Paslaugų paketo pasirinkimas.</h6>
                    <hr class="services-hr">
                    <p>Šiuo metu siūlome tris paslaugų paketus su skirtingais pasiūlymais atsižvelgiant į tai, kas klientams
                        yra aktualiausia. Išsirinkę Jūsų poreikius atitinkantį planą (info. žemiau), užpildykite registracijos
                        formą. Mūsų specialistai susisieks su jumis per ateinančias 12 valandų ir suteiks daugiau informacijos
                        apie tolimesnius veiksmus. </p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 margin-30px-bottom">
                <div class="services-item text-center">
                    <i class="fa fa-umbrella" aria-hidden="true"></i>
                    <h6 class="text-extra-dark-gray margin-10px-tb alt-font font-weight-400">Paslaugų aktyvavimas. </h6>
                    <hr class="services-hr">
                    <p>Priklausomai nuo pasirinkto plano, srities ekspertai aktyvuos plane įskaičiuotas paslaugas per 24 valandas
                        nuo užsakymo įvykdymo.</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 margin-30px-bottom">
                <div class="services-item text-center">
                    <i class="fa fa-bar-chart" aria-hidden="true"></i>
                    <h6 class="text-extra-dark-gray margin-10px-tb alt-font font-weight-400">Atsipūskite, likusiu pasirūpinsime mes!</h6>
                    <hr class="services-hr">
                    <p>Jūsų NT objekto informacija taps matoma šimtui tūkstančių potencialių pirkėjų, iš kurių atrinksime jums
                        labiausiai priimtiną ir tinkamą klientą. Mes komunikuosime su visais susidomėjusiais, per jų atsiųstas
                        užklausas, o jums siųsime atliktų darbų ataskaitas. </p>
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