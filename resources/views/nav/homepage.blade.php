@extends('layouts.parallax') 
@section('content')
<section id="top">
    <h2>Patikima ekspertų pagalba perkant, parduodant ir nuomojant nekilnojamą turtą.</h2>
    <h1>Parduok savo būstą lengvai ir greitai</h1>
    <a href="{{ route('features') }}" class="btn btn-rounded btn-blue btn-hvr-white btn-large" id="btn-more-info">Sužinoti daugiau</a>
</section>

<!-- start feature -->
<section id="feature" class="how-it-work text-center bg-light-gray no-transition">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 text-center center-col last-paragraph-no-margin">
                <div class="sec-title margin-100px-bottom">
                    <h3 class="text-capitalize alt-font text-extra-dark-gray font-weight-300">
                        Kaip tai veikia?</h3>
                    <p class="width-75 margin-lr-auto md-width-90 xs-width-100 xs-margin-30px-bottom">
                        Mūsų misija visuomet buvo viena. - Padėti žmonėms parduoti savo nekilnojamą turtą saugiai, greitai ir su mažiausiomis išlaidomis!
                    </p>
                </div>
            </div>
        </div>

        <div class="how-one-container">
            <!--how it work Box-->
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="how-box-one inner-box xs-margin-150px-bottom feature-fix" id="feature-mobile">
                    <div class="icon-box bg-blue">
                        <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                    </div>
                    <div class="text-large text-extra-dark-gray margin-20px-bottom">Pasirenkate paslaugų paketą</div>
                    <p>Išsirenkite Jūsų poreikius atitinkantį planą ir užpildykite informacinę formą. Mūsų specialistai susisieks
                        su Jumis per ateinančias 12h ir suteiks papildomą informaciją.
                    </p>
                </div>
            </div>

            <!--how it work Box-->
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="how-box-one inner-box sm-margin-100px-bottom xs-margin-100px-bottom feature-fix">
                    <div class="icon-box bg-blue">
                        <i class="fa fa-group" aria-hidden="true"></i>
                    </div>
                    <div class="text-large text-extra-dark-gray margin-20px-bottom">Paslaugų aktyvavimas</div>
                    <p>Atsižvelgiant į pasirinktą planą, mūsų eksperstai aktyvuos ir atliks visas plane paminėtas paslaugas
                        per ateinančias 24 valandas po užsakymo įvykdymo.
                    </p>
                </div>
            </div>

            <!--how it work Box-->
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="how-box-one inner-box feature-fix">
                    <div class="icon-box bg-blue">
                        <i class="fa fa-comments-o" aria-hidden="true"></i>
                    </div>
                    <div class="text-large text-extra-dark-gray margin-20px-bottom">Palikite tai mums</div>
                    <p>
                        Jūsų NT objekto informacija taps matoma šimtui tūkstančių potencialių pirkėjų, iš kurių atrinksime geriausią. Aptarnausime
                        visas susidomėjusias užklausas ir siūsime darbų ataskaitas Jums.
                    </p>
                </div>
            </div>

        </div>
        <a href="{{ route('features') }}" class="btn btn-transparent-blue btn-rounded btn-large margin-20px-top" style="margin-top: 75px;">Sužinokite daugiau</a>
    </div>
</section>
<!--end feature -->

<!-- start about -->
<section id="about" class="no-padding">

    <div class="half-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 no-padding">
                    <div class="about-image hover-effect">
                        <img alt="" src="img/about-1-transparent.png" class="equalheight">
                    </div>
                </div>
                <div class="col-md-6 sm-padding-50px-tb">
                    <div class="split-box text-center center-block equalheight">
                        <div class="about-box">
                            <h3 class="text-capitalize alt-font text-extra-dark-gray font-weight-300">
                                Esame tarpininkai tarp jūsų ir pirkėjo.</h3>
                            <p>Mes esame tam, kad palengvinti Jūsų NT pardavimo procesą. Paruošime ir pateiksime Jūsų objekto
                                skelbimus šimtui tūkstančių potencialių pirkėjų . Priimsime skambučius ir atrinksime jums
                                geriausią pirkėją. Padėsime sutvarkyti pirkimo dokumentus. O Jums tereikės patogiai atsisėsti
                                ir neišsigasti, kuomet sekančią dieną pirkėjas pasibels į Jūsų duris.
                            </p>
                            <a href="{{ route('about') }}" class="btn btn-transparent-blue btn-rounded btn-large margin-20px-top">Sužinokite daugiau</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="half-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 no-padding pull-right sm-float-none">
                    <div class="about-image hover-effect">
                        <img alt="" src="img/about-right.jpg" class="equalheight">
                    </div>
                </div>
                <div class="col-md-6 sm-padding-50px-tb">
                    <div class="split-box text-center center-block equalheight">
                        <div class="about-box">
                            <h3 class="text-capitalize alt-font text-extra-dark-gray font-weight-300">
                                Vos už 99 eur plano mokęstį!</h3>
                            <p>Su Realpro parduokite savo namus mažiau nei už šimtą eurų, neišeinant iš namų. Sąžiningas, skaidrus
                                ir nekeliantis rūpesčių būdas parduoti nekilnojamą turtą jau Čia!</p>
                            <a href="{{ route('about') }}" class="btn btn-transparent-blue btn-rounded btn-large margin-20px-top">Sužinokite daugiau</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about end -->

<!-- start parallax -->
<section class="parallax no-transition bg-img1" id="story-bg">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-left sm-text-center center-col">
                <h1 class="text-capitalize alt-font text-white margin-30px-bottom font-weight-300 sm-width-100 xs-width-100 story-text">
                    Mes jums padėsime sutaupyti laiko ir pinigų.</h1>
            </div>
        </div>
    </div>
</section>
<!-- end parallax -->

<!-- start price -->
<section id="price">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 text-center center-col last-paragraph-no-margin">
                <div class="sec-title margin-100px-bottom">
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
                    <div class="price-tag clearfix alt-font" id="plan-populiariausias">
                        <span class="price alt-font text-dark-gray">
                                        <span class="currency">&ensp;&ensp;99</span>
                        <span class="sign">&euro;</span>
                        </span>
                        <span class="price-text text-dark-gray no-margin">Paprastas paketas tiems, kurie nori pigiai ir lengvai parduoti savo NT tik už 99€ . Gera kaina, įspūdingas greitis ir svarbiausia - JOKIŲ KOMISINIŲ UŽ PARDAVIMĄ!</span>
                    </div>
                    <ul class="packages">
                        <li><i class="fa fa-check" aria-hidden="true"></i>Nemokamas NT objekto įvertinimas</li>
                        <li><i class="fa fa-check" aria-hidden="true"></i>Pardavimo progresas ir derybos</li>
                        <li><i class="fa fa-check" aria-hidden="true"></i>Jūsų NT rodomas tūkstančiams pirkėjų</li>
                        <li><i class="fa fa-check" aria-hidden="true"></i>Savaitinės atąskaitos esant poreikiui</li>
                    </ul>
                    <p class="plan-triplepoint">...</p>
                    <a href="#." class="btn btn-blue btn-rounded width-100 btn-large">Užsisakykite dabar</a>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 sm-margin-30px-bottom">
                <div class="price-item center text-left">
                    <h6 class="alt-font font-weight-500 margin-10px-bottom">Populiariausias</h6>
                    <div class="price-tag clearfix alt-font">
                        <span class="price alt-font text-white">
                                        <span class="currency">199</span>
                        <span class="sign">&euro;</span>
                        </span>
                        <span class="price-text text-white no-margin">Pamėgtas paketas tų, kurie vertina savo laiką ir supranta, kad kiekvienas sutaupytas euras yra uždirbtas euras. Tik 199€, jokių komisinių! Geriausia! - jokie rūpesčiai dėl NT pardavimo Jūsų nebekamuos! </span>
                    </div>
                    <ul class="packages">
                        <li><i class="fa fa-check" aria-hidden="true"></i>Visos 'Optimalaus' plano paslaugos</li>
                        <li><i class="fa fa-check" aria-hidden="true"></i>Profesionalaus fotografo nuotraukos</li>
                        <li><i class="fa fa-check" aria-hidden="true"></i>Detalus 2D aukšto planas</li>
                        <li><i class="fa fa-check" aria-hidden="true"></i>Pilnas NT objekto aprašymas</li>
                    </ul>
                    <p class="plan-triplepoint">...</p>
                    <a href="#." class="btn btn-white btn-rounded width-100 btn-large">Užsisakykite dabar</a>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="price-item text-left">
                    <h6 class="alt-font font-weight-500 margin-10px-bottom">Praktiškiausias</h6>
                    <div class="price-tag clearfix alt-font">
                        <span class="price alt-font text-dark-gray">
                                        <span class="currency">299</span>
                        <span class="sign">&euro;</span>
                        </span>
                        <span class="price-text text-dark-gray no-margin">Geriausias paketas nuosavų valdų savininkams, kurie tiki mūsų žodžiais:  Greitai. Saugiai. Atsakingai. Pigiai, ir palieka visą NT objekto pateikimo ir pardavimo procesą Mums vos už 299€ ir be JOKIŲ PAPILDOMŲ IŠLAIDŲ!
                        </span>
                    </div>
                    <ul class="packages">
                        <li><i class="fa fa-check" aria-hidden="true"></i>Visos 'Populiariausio' plano paslaugos</li>
                        <li><i class="fa fa-check" aria-hidden="true"></i>Iškelti/išryškinti NT skelbimai</li>
                        <li><i class="fa fa-check" aria-hidden="true"></i>Pardavimo ženklas ant pastato</li>
                        <li><i class="fa fa-check" aria-hidden="true"></i>Premium skelbimai portaluose</li>
                    </ul>
                    <p class="plan-triplepoint">...</p>
                    <a href="#." class="btn btn-blue btn-rounded width-100 btn-large">Užsisakykite dabar</a>
                </div>
            </div>
        </div>
        <div id="btn-plansinfo">
            <a href="{{ route('plans') }}" class="btn btn-transparent-blue btn-rounded btn-large margin-20px-top" style="margin-top: 75px;">Sužinokite daugiau</a>
        </div>
    </div>
</section>
<!-- start price -->

<!-- testimonials -->
<section class="testimonial-two no-padding-top bg-very-light-gray">
    <div class="parallax testimonial-two-bg no-transition" id="reviews-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-offset-4 col-sm-8 equalheight">
                    <div class="testimonial-two-title">
                        <h3 class="area-title text-capitalize alt-font text-white font-weight-300">
                            Susipažinkite su<br><span class="font-weight-400">Mūsų klientais</span>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">

        <div class="owl-theme owl-carousel owl-testimonial-two">
            <div class="testimonial-two-block item">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="testimonial-client-img">
                            <img src="images/testimonial-two-client2.jpg" alt="image">
                        </div>
                        <div class="testimonial-client-name">
                            <h6 class="text-large text-blue font-weight-600 margin-5px-bottom margin-30px-top text-center">Elic York</h6>
                            <p class="text-center">Upwork, New York</p>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="testimonial-client-says text-left margin-135px-top xs-margin-30px-top xs-text-center">
                            <p> We have a number of different teams within our agency that specialise in different areas of business
                                so you can be sure that you won’t receive a generic service and although we can’t boast years
                                and years of service. you won’t receive a generic service.
                            </p>
                            <div class="testimonial-two-rating margin-20px-top">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonial-two-block item">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="testimonial-client-img">
                            <img src="images/testimonial-two-client1.jpg" alt="image">
                        </div>
                        <div class="testimonial-client-name">
                            <h6 class="text-large text-blue font-weight-600 margin-5px-bottom margin-30px-top text-center">Adward David</h6>
                            <p class="text-center">Abacus, CEO</p>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="testimonial-client-says text-left margin-135px-top xs-margin-30px-top xs-text-center">
                            <p> We have a number of different teams within our agency that specialise in different areas of business
                                so you can be sure that you won’t receive a generic service and although we can’t boast years.
                            </p>
                            <div class="testimonial-two-rating margin-20px-top">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-half-o" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonial-two-block item">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="testimonial-client-img">
                            <img src="images/testimonial-two-client3.jpg" alt="image">
                        </div>
                        <div class="testimonial-client-name">
                            <h6 class="text-large text-blue font-weight-600 margin-5px-bottom margin-30px-top text-center">Steph Erick</h6>
                            <p class="text-center">Enavto, Australia</p>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="testimonial-client-says text-left margin-135px-top xs-margin-30px-top xs-text-center">
                            <p> We have a number of different teams within our agency that specialise in different areas of business
                                so you can be sure that you won’t receive a generic service and although we can’t boast.
                            </p>
                            <div class="testimonial-two-rating margin-20px-top">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</section>
<!-- testimonials end -->

<!-- contact-->
<section id="contact" class="btn-version">
    <div class="get-quote-section xs-text-center">
        <div class="container">
            <div class="row clearfix">
                <!--Form Column-->
                <div class="col-md-6">
                    <div class="sec-title margin-50px-bottom">
                        <h3 class="text-capitalize alt-font text-extra-dark-gray font-weight-300">
                            Susisiekite su mumis</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum illum ratione atque praesentium laudantium
                            quaerat laborum consecteturLorem ipsum dolor sit amet, consectetur adipisicing elit.
                        </p>
                    </div>
                    <div class="row margin-15px-bottom">
                        <div class="col-sm-1 no-padding">
                            <div class="contact-icon text-blue">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="col-sm-11">
                            <p class="text-small">+370 6126 6668</p>
                        </div>
                    </div>
                    <div class="row margin-15px-bottom" id="email-display">
                        <div class="col-sm-1 no-padding">
                            <div class="contact-icon text-blue">
                                <i class="fa fa-globe" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="col-sm-11 xs-margin-50px-bottom">
                            <p class="text-small">info@realpro.lt</p>
                        </div>
                    </div>
                    <div class="row margin-15px-bottom">
                        <div class="col-sm-1 no-padding" id="location-icon">
                            <div class="contact-icon text-blue">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="col-sm-11">
                            <p class="text-small">UAB "Emiras"</p>
                            <p class="text-small">Įmonės kodas: 304836394</p>
                            <p class="text-small">Įmonės adresas: Girulių g. 10, LT-12112 Vilnius</p>
                        </div>
                    </div>
                </div>
                <div class="form-column col-md-6">
                    <div class="contact-form">
                        <!--Title-->
                        <form class="form_class">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input type="text" class="form_inputs" name="name" placeholder="Vardas">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form_inputs" name="email" placeholder="El. Paštas">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form_inputs" name="phone no" placeholder="Telefonas">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 no-padding">
                                <div class="form-group">
                                    <textarea name="message" id="message" class="form_inputs form_inputs_two" rows="6" cols="25" placeholder="Jūsų žinutė"></textarea>
                                </div>
                                <div class="button">
                                    <a href="#." class="btn btn-blue btn-rounded btn-large text-extra-small width-100">Susisiekti</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact end -->
@endsection