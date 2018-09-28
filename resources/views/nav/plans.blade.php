@extends('layouts.parallax') 
@section('title')
RealPro | Kainoraštis
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
<!-- cover-->
<section class="bg blog-cover">
    <div class="container">
        <div class="text-center sm-padding-40px-tb sm-padding-15px-lr">
            <h5 class="text-uppercase alt-font text-white margin-20px-bottom font-weight-700">
                Contact Us</h5>
            <p class="text-white margin-5px-bottom">We offer the most complete finance services in the country</p>
            <div class="page_nav">
                <span class="text-white">You are here:</span> <a href="index.html" class="text-white">Home</a> <span class="text-white"><i class="fa fa-angle-double-right"></i> 404</span>
            </div>
        </div>
    </div>
</section>
<!-- cover end-->

<!-- start price -->
<section id="price">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 text-center center-col last-paragraph-no-margin">
                <div class="sec-title margin-100px-bottom" style="margin-bottom: 50px;">
                    <div class="text-large text-red margin-10px-bottom font-weight-400 text-blue">Pasirinkite jūsų poreikius atitinkantį planą.</div>
                    <h3 class="text-capitalize alt-font text-extra-dark-gray font-weight-300">
                        Mūsų planai</h3>
                    <p class="width-75 margin-lr-auto md-width-90 xs-width-100 xs-margin-30px-bottom">Su Realpro.lt parduokite savo namą ar būtą be jokių tarpininkų ir papildomų paslėptų mokesčių. Sutaupyk
                        daugiau nei 1500 eurų.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12 sm-margin-30px-bottom">
                <div class="price-item text-left">
                    <h6 class="alt-font font-weight-500 margin-10px-bottom">Optimalus</h6>
                    <div class="price-tag clearfix alt-font" id="plan-populiariausias" style="height: 284px;">
                        <span class="price alt-font text-dark-gray">
                                            <span class="currency">&ensp;&ensp;99</span>
                        <span class="sign">&euro;</span>
                        </span>
                        <span class="price-text text-dark-gray no-margin">Paprastas paketas norintiems pigiai ir lengvai parduoti savo NT. Po konsultacijos su NT pardavimo ekspertu, jūsų skelbimą greitai ir efektyviai patalpinsime į visus populiariausius Lietuvos portalus, užtikrinančius greitą pardavimą. Paslaugų mokestis – vos 99€. Na ir svarbiausia, jokių papildomų komisinių! </span>
                    </div>
                    <ul class="packages packages-collapse" id="plan-1" style="max-height: 190px;">
                        <li><i class="fa fa-check" aria-hidden="true"></i>Nemokamas NT objekto įvertinimas</li>
                        <li><i class="fa fa-check" aria-hidden="true"></i>Pardavimo progresas ir derybos</li>
                        <li><i class="fa fa-check" aria-hidden="true"></i>Jūsų NT rodomas tūkstančiams pirkėjų</li>
                        <li><i class="fa fa-check" aria-hidden="true"></i>Savaitinės atąskaitos esant poreikiui</li>
                        <li><i class="fa fa-check" aria-hidden="true"></i>Savaitinės atąskaitos esant poreikiui</li>
                        <li><i class="fa fa-check" aria-hidden="true"></i>Savaitinės atąskaitos esant poreikiui</li>
                        <li><i class="fa fa-check" aria-hidden="true"></i>Savaitinės atąskaitos esant poreikiui</li>
                    </ul>
                    <div class="plan-dropdown">
                        <div class="solid-black-line-1px"></div>
                        <button id="plan-1-btn" onclick="showPlanDropdown('plan-1', 'plan-1-btn')"><img src="img/down-arrow-02.png"></button>
                    </div>
                    <a href="{{ route('plan', 1) }}" class="btn btn-blue btn-rounded width-100 btn-large margin-20px-t">Užsisakykite dabar</a>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 sm-margin-30px-bottom">
                <div class="price-item center text-left">
                    <h6 class="alt-font font-weight-500 margin-10px-bottom">Populiariausias</h6>
                    <div class="price-tag clearfix alt-font" style="height: 284px;">
                        <span class="price alt-font text-white">
                                            <span class="currency">199</span>
                        <span class="sign">&euro;</span>
                        </span>
                        <span class="price-text text-white no-margin">Paketas gyvenantiems posakiu ,,laikas-pinigai“. Neturintiems laiko ieškoti profesionalių fotografų būsto nuotraukoms ar rašyti NT aprašymus. Kruopštus ir kokybiškas darbas greitai, vėlgi – jokių komisinių! 199€</span>
                    </div>
                    <ul class="packages packages-collapse" id="plan-2" style="max-height: 190px;">
                        <li><i class="fa fa-check" aria-hidden="true"></i>Visos 'Optimalaus' plano paslaugos</li>
                        <li><i class="fa fa-check" aria-hidden="true"></i>Profesionalaus fotografo nuotraukos</li>
                        <li><i class="fa fa-check" aria-hidden="true"></i>Detalus 2D aukšto planas</li>
                        <li><i class="fa fa-check" aria-hidden="true"></i>Pilnas NT objekto aprašymas</li>
                        <li><i class="fa fa-check" aria-hidden="true"></i>Savaitinės atąskaitos esant poreikiui</li>
                        <li><i class="fa fa-check" aria-hidden="true"></i>Savaitinės atąskaitos esant poreikiui</li>
                        <li><i class="fa fa-check" aria-hidden="true"></i>Savaitinės atąskaitos esant poreikiui</li>
                    </ul>
                    <div class="plan-dropdown">
                        <div class="solid-black-line-1px"></div>
                        <button id="plan-2-btn" onclick="showPlanDropdown('plan-2', 'plan-2-btn')"><img src="img/down-arrow-02.png"</button>
                    </div>
                    <a href="{{ route('plan', 2) }}" class="btn btn-white btn-rounded width-100 btn-large margin-20px-t">Užsisakykite dabar</a>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="price-item text-left">
                    <h6 class="alt-font font-weight-500 margin-10px-bottom ">Namams</h6>
                    <div class="price-tag clearfix alt-font">
                        <span class="price alt-font text-dark-gray">
                                            <span class="currency">299</span>
                        <span class="sign">&euro;</span>
                        </span>
                        <span class="price-text text-dark-gray no-margin">Šį planą pamatę klientai aikteli, tad mes nutarėme jį vadinti GASP.  Tai yra paketas norintiems Greitai, Aiškiai, Saugiai ir Pigiai. Mes pasirūpinsime NT objekto pateikimo ir pardavimo procesu. Į planą įeina viskas, kas yra siūloma ankstesniuose planuose, tik dar daugiau. Jūsų skelbimai internete bus iškelti/išryškinti, o prie pastato pastatysime pardavimo ženklą. Užtikrintas greitas pardavimas be jokių papildomų išlaidų!
                            </span>
                    </div>
                    <ul class="packages packages-collapse" id="plan-3" style="max-height: 190px;">
                        <li><i class="fa fa-check" aria-hidden="true"></i>Visos 'Populiariausio' plano paslaugos</li>
                        <li><i class="fa fa-check" aria-hidden="true"></i>Iškelti/išryškinti NT skelbimai</li>
                        <li><i class="fa fa-check" aria-hidden="true"></i>Pardavimo ženklas ant pastato</li>
                        <li><i class="fa fa-check" aria-hidden="true"></i>Premium skelbimai portaluose</li>
                        <li><i class="fa fa-check" aria-hidden="true"></i>Savaitinės atąskaitos esant poreikiui</li>
                        <li><i class="fa fa-check" aria-hidden="true"></i>Savaitinės atąskaitos esant poreikiui</li>
                        <li><i class="fa fa-check" aria-hidden="true"></i>Savaitinės atąskaitos esant poreikiui</li>
                    </ul>
                    <div class="plan-dropdown">
                        <div class="solid-black-line-1px"></div>
                        <button id="plan-3-btn" onclick="showPlanDropdown('plan-3', 'plan-3-btn')"><img src="img/down-arrow-02.png"></button>
                    </div>
                    <a href="{{ route('plan', 3) }}" class="btn btn-blue btn-rounded width-100 btn-large margin-20px-t">Užsisakykite dabar</a>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- start price -->
@endsection
 
@section('scripts')
<script src="js/plan-dropdown.js"></script>
@endsection