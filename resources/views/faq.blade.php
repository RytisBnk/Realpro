@extends('layouts.parallax') 
@section('content')
<!-- cover-->
<section class="bg blog-cover">
    <div class="container">
        <div class="text-center sm-padding-40px-tb sm-padding-15px-lr">
            <h5 class="text-uppercase alt-font text-white margin-20px-bottom font-weight-700">
                Our Features</h5>
            <p class="text-white margin-5px-bottom">We offer the most complete finance services in the country</p>
            <div class="page_nav">
                <span class="text-white">You are here:</span> <a href="index.html" class="text-white">Home</a> <span class="text-white"><i class="fa fa-angle-double-right"></i> 404</span>
            </div>
        </div>
    </div>
</section>
<!-- cover end-->

<section id="faq">
    <h1 id="faq-heading">DUK</h1>
    <p class="faq-heading-subtext">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
        aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    <p class="faq-heading-subtext">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
        aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    <p class="faq-heading-subtext">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
        aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

    <div class="columns tab">
        <div class="column is-narrow" style="width: 48px;"></div>
        <div class="column tab-column"><button class="tab-link" onclick="openCategory(event, 'category_1')" id="default-tab">Category 1</button></div>
        <div class="column tab-column"><button class="tab-link" onclick="openCategory(event, 'category_2')">Category 2</button></div>
        <div class="column tab-column"><button class="tab-link" onclick="openCategory(event, 'category_3')">Category 3</button></div>
        <div class="column is-narrow" style="width: 48px;"></div>
    </div>

    <div class="tab-content" id="category_1">
        <button class="faq-question">QUESTION 1</button>
        <div class="faq-answer">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </div>
        <button class="faq-question">QUESTION 2</button>
        <div class="faq-answer">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </div>
        <button class="faq-question">QUESTION 3</button>
        <div class="faq-answer">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </div>
        <button class="faq-question">QUESTION 4</button>
        <div class="faq-answer">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </div>
    </div>
    <div class="tab-content" id="category_2">
        <button class="faq-question">QUESTION 1</button>
        <div class="faq-answer">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </div>
        <button class="faq-question">QUESTION 2</button>
        <div class="faq-answer">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </div>
        <button class="faq-question">QUESTION 3</button>
        <div class="faq-answer">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </div>
        <button class="faq-question">QUESTION 4</button>
        <div class="faq-answer">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </div>
    </div>
    <div class="tab-content" id="category_3">
        <button class="faq-question">QUESTION 1</button>
        <div class="faq-answer">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </div>
        <button class="faq-question">QUESTION 2</button>
        <div class="faq-answer">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </div>
        <button class="faq-question">QUESTION 3</button>
        <div class="faq-answer">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </div>
        <button class="faq-question">QUESTION 4</button>
        <div class="faq-answer">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </div>
    </div>
</section>
@endsection