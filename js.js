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

var speed = 700;

    // check for hash and if div exist... scroll to div
    var hash = window.location.hash;
    if($(hash).length) scrollToID(hash, speed);

    // scroll to div on nav click
    $('.nav-item, .footerLinks').click(function (e) {
        var id = $(this).attr('href');
        if($(id).length) scrollToID(id, speed);
        return false;
    });
    var isAnimating = false;
$('.questionNumberIcon').click(function () {
  if (isAnimating) {
          return;
      }
      isAnimating = true;
$('.questionNumberIcon').removeClass('active');
$(this).addClass('active');
var target = $(this).attr('name');
$('.box[style*="display: block"]').fadeOut(300, function () {
  $("#"+target).fadeIn(300);
});
    setTimeout(function() {
        isAnimating = false;
    }, 1000);
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
$('#calculate').on('click touchstart', function (e) {
  e.preventDefault();
var val = $('#sum').val();
if(!val.length) {
  $('.error1').fadeIn(300);
}
else {
  $('.error1').fadeOut(300);
var percent = parseFloat(val*0.030).toFixed(2);
var parsed = parseFloat(val);
$('#broker').val(percent+' €').addClass("show");
$('#ourPrice').val('99 €').addClass("show");
return false;
}
});
$("#sum").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110]) !== -1 ||
             // Allow: Ctrl+A, Command+A
            (e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) ||
             // Allow: home, end, left, right, down, up
            (e.keyCode >= 35 && e.keyCode <= 40)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });

$( ".product" ).click(function() {
$(".product").removeClass('activep');
$(this).addClass('activep');
});
$('#susisiekti').on('click', function (e) {
  e.preventDefault();
  FB.CustomerChat.showDialog();
});
})
function scrollToID(id, speed) {
    var offSet = 50;
    var obj = $(id).offset();
    var targetOffset = obj.top - offSet;
    $('html,body').animate({ scrollTop: targetOffset }, speed);
}
