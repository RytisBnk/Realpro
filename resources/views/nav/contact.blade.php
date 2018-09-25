@extends('layouts.parallax') 
@section('content')
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

<!-- address start -->
<section class="no-transition">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 text-center center-col last-paragraph-no-margin">
                <div class="sec-title margin-100px-bottom">
                    <div class="text-large text-red margin-10px-bottom font-weight-400 text-blue">Turite klausimų!!?</div>
                    <h3 class="text-capitalize alt-font text-extra-dark-gray font-weight-300">
                        Susisiekite su mumis</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-7">
                <div class="map-wrapper no-transition">
                    <div class="map-two" id="map"></div>
                </div>
            </div>
            <div class="col-sm-5">
                <div class="address-block">
                    <?php //<div class="text-small text-dark-gray font-weight-400 margin-20px-bottom">Reone Agency Worldwide</div> ?>
                    <h5 class="area-title text-capitalize alt-font text-blue margin-20px-bottom font-weight-400 sm-width-100 xs-width-100">
                        UAB "Emiras" <?php //<span class="text-dark-gray">Landon</span> ?></h5>
                    <p class="text-medium-gray">Adresas: Girulių g. 10, LT-12112, Vilnius</p>
                    <p class="text-medium-gray">Įmonės kodas: 304836394</p>
                    <p><a href="#." class="text-medium-gray">info@realpro.lt</a></p>
                    <p class="text-medium-gray">+370 6126 6668</p>
                    <div class="adress-icon">
                        <a href="#." class="facebook-bg-hvr"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="#." class="twitter-bg-hvr"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="#." class="google-bg-hvr"><i class="fa fa-google" aria-hidden="true"></i></a>
                        <a href="#." class="instagram-bg-hvr"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- address end -->

<!-- contact start -->
<section class="contact-page-form no-padding-top">
    <div class="container">
        <div class="row">
            <div class="contact-form">
                <form class="margin-50px-bottom">
                    <div class="col-xs-12 no-padding">
                        <input type="text" class="form-control margin-30px-bottom" placeholder="Jūsų vardas">
                    </div>
                    <div class="col-xs-12 no-padding">
                        <input type="email" class="form-control margin-30px-bottom" placeholder="Jūsų El. Paštas">
                    </div>

                    <div class="col-xs-12 no-padding">
                        <textarea class="form-control margin-50px-bottom" placeholder="Jūsų žinutė"></textarea>
                    </div>
                    <a href="#." class="btn btn-transparent-blue btn-large width-100">Susisiekti</a>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- contact end -->
@endsection