document.addEventListener('DOMContentLoaded', function () {

// Get all "navbar-burger" elements
var $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

// Check if there are any nav burgers
if ($navbarBurgers.length > 0) {

// Add a click event on each of them
$navbarBurgers.forEach(function ($el) {
$el.addEventListener('click', function () {

  // Get the target from the "data-target" attribute
  var target = $el.dataset.target;
  var $target = document.getElementById(target);

  // Toggle the class on both the "navbar-burger" and the "navbar-menu"
  $el.classList.toggle('is-active');
  $target.classList.toggle('is-active');

});
});
}

});
$(document).ready(function () {
  $('.slider').slick({
    infinite: true,
    arrows: false,
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    adaptiveHeight: true,
    responsive: [{

      breakpoint: 1081,
      settings: {
        slidesToShow: 2,
        infinite: true
      }

    },
    {

      breakpoint: 788,
      settings: "unslick" // destroys slick

    }]
});
var currentSlide = $('.slider').slick('slickCurrentSlide')+1;
$('.slick-slide[data-slick-index="'+currentSlide+'"]').children().children().addClass('current');
$('.slick-slide[data-slick-index="'+currentSlide+'"]').children().children().children().css('filter', 'blur(0)');
$('.slider').on('afterChange', function(event, slick, currentSlide){
  var currentSlide = $('.slider').slick('slickCurrentSlide')+1;
  $('.slick-slide').children().children().children().css('filter', 'blur(3px)');
  $('.slick-slide[data-slick-index="'+currentSlide+'"]').children().children().children().css('filter', 'blur(0)');
  $('.slick-slide').children().children().removeClass('current');
  $('.slick-slide[data-slick-index="'+currentSlide+'"]').children().children().addClass('current');
});

$('a[href*="#"]').click(function() {
if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
  var target = $(this.hash);
  target = target.length ? target : $('[name="' + this.hash.slice(1) +'"]');
  if (target.length) {
    $('html,body').animate({
      scrollTop: target.offset().top-50
    }, 500);
    return false;
  }
}
});
$('.questionNumberIcon').click(function () {
$('.questionNumberIcon').removeClass('active');
$(this).addClass('active');
var target = $(this).attr('name');
$('.box[style*="display: block"]').fadeOut(300, function () {
  $("#"+target).fadeIn(300);
});
});
$(document).on("mousedown", "[data-ripple]", function(e) {

var $self = $(this);

if($self.is(".btn-disabled")) {
  return;
}
if($self.closest("[data-ripple]")) {
  e.stopPropagation();
}

var initPos = $self.css("position"),
    offs = $self.offset(),
    x = e.pageX - offs.left,
    y = e.pageY - offs.top,
    dia = Math.min(this.offsetHeight, this.offsetWidth, 100), // start diameter
    $ripple = $('<div/>', {class : "ripple",appendTo : $self });

if(!initPos || initPos==="static") {
  $self.css({position:"relative"});
}

$('<div/>', {
  class : "rippleWave",
  css : {
    background: $self.data("ripple"),
    width: dia,
    height: dia,
    left: x - (dia/2),
    top: y - (dia/2),
  },
  appendTo : $ripple,
  one : {
    animationend : function(){
      $ripple.remove();
    }
  }
});

});
});
$('#calculate').click(function () {
var val = $('#sum').val();
var percent = parseFloat(val*0.030).toFixed(2);
var parsed = parseFloat(val);
$('#broker').val(percent).addClass("show");
if (parsed <= 35000) {
$('#ourPrice').val('99').addClass("show");
}
else if (parsed > 35000 && parsed <= 55000) {
$('#ourPrice').val('199').addClass("show");
}
else if (parsed > 55000) {
$('#ourPrice').val('299').addClass("show");
}
else {
$('#ourPrice').val('0').addClass("show");
}
});
$( ".product" ).click(function() {
$(".product").removeClass('activep');
$(this).addClass('activep');
});
