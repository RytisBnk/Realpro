@extends('layouts.parallax') 
@section('title')
RealPro | Dažniausiai užduodami klausimai
@endsection
@section('content')
<!-- cover-->
<section class="bg blog-cover" id="faq-top-img">
</section>
<!-- cover end-->

<section id="faq" style="margin-bottom: 50px;">
    <h1 id="faq-heading">DUK</h1>
    <p class="faq-heading-subtext">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
        aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    <p class="faq-heading-subtext">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
        aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    <p class="faq-heading-subtext">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
        aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

    <div class="columns tab" style="margin: 30px 15px;">
        <div class="column is-narrow" style="width: 48px;"></div>
        <div class="column tab-column"><button class="tab-link" onclick="openCategory(event, 'category_1')" id="default-tab">Category 1</button></div>
        <div class="column tab-column"><button class="tab-link" onclick="openCategory(event, 'category_2')">Category 2</button></div>
        <div class="column tab-column"><button class="tab-link" onclick="openCategory(event, 'category_3')">Category 3</button></div>
        <div class="column is-narrow" style="width: 48px;"></div>
    </div>

    <div class="tab-content" id="category_1">
        <div class="faq-item">
            <button class="faq-question"><span class="faq-num">1</span>. Lorem ipsum dolor sit amet?</button>
            <div class="faq-answer">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </div>
        </div>
        <div class="faq-item">
            <button class="faq-question"><span class="faq-num">1</span>. Lorem ipsum dolor sit amet?</button>
            <div class="faq-answer">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </div>
        </div>
        <div class="faq-item">
            <button class="faq-question"><span class="faq-num">1</span>. Lorem ipsum dolor sit amet?</button>
            <div class="faq-answer">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </div>
        </div>
        <div class="faq-item">
            <button class="faq-question"><span class="faq-num">1</span>. Lorem ipsum dolor sit amet?</button>
            <div class="faq-answer">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </div>
        </div>
        <div class="faq-item">
            <button class="faq-question"><span class="faq-num">1</span>. Lorem ipsum dolor sit amet?</button>
            <div class="faq-answer">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </div>
        </div>
    </div>
    <div class="tab-content" id="category_2">
        <div class="faq-item">
            <button class="faq-question"><span class="faq-num">1</span>. Lorem ipsum dolor sit amet?</button>
            <div class="faq-answer">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </div>
        </div>
        <div class="faq-item">
            <button class="faq-question"><span class="faq-num">1</span>. Lorem ipsum dolor sit amet?</button>
            <div class="faq-answer">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </div>
        </div>
        <div class="faq-item">
            <button class="faq-question"><span class="faq-num">1</span>. Lorem ipsum dolor sit amet?</button>
            <div class="faq-answer">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </div>
        </div>
        <div class="faq-item">
            <button class="faq-question"><span class="faq-num">1</span>. Lorem ipsum dolor sit amet?</button>
            <div class="faq-answer">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </div>
        </div>
        <div class="faq-item">
            <button class="faq-question"><span class="faq-num">1</span>. Lorem ipsum dolor sit amet?</button>
            <div class="faq-answer">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </div>
        </div>
    </div>
    <div class="tab-content" id="category_3">
        <div class="faq-item">
            <button class="faq-question"><span class="faq-num">1</span>. Lorem ipsum dolor sit amet?</button>
            <div class="faq-answer">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </div>
        </div>
        <div class="faq-item">
            <button class="faq-question"><span class="faq-num">1</span>. Lorem ipsum dolor sit amet?</button>
            <div class="faq-answer">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </div>
        </div>
        <div class="faq-item">
            <button class="faq-question"><span class="faq-num">1</span>. Lorem ipsum dolor sit amet?</button>
            <div class="faq-answer">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </div>
        </div>
        <div class="faq-item">
            <button class="faq-question"><span class="faq-num">1</span>. Lorem ipsum dolor sit amet?</button>
            <div class="faq-answer">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </div>
        </div>
        <div class="faq-item">
            <button class="faq-question"><span class="faq-num">1</span>. Lorem ipsum dolor sit amet?</button>
            <div class="faq-answer">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </div>
        </div>
    </div>
</section>
@endsection
 
@section('scripts')
<script src="js/tab-layout.js"></script>
<script src="js/question-dropdowns.js"></script>
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