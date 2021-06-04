 
$('.slide-banner').slick({
    autoplay: false,
    arrow: false,
    dots: true,
    slidesToShow: 1,
    slidesToScroll: 1, 
    prevArrow: '',
    nextArrow: '',
});  

$('.slide-feedback').slick({
    autoplay: false,
    arrow: false,
    dots: false, 
    slidesToShow: 4,
    slidesToScroll: 2, 
    prevArrow: '',
    nextArrow: '',
    responsive: [
        {
            breakpoint: 767, 
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
            } 
        }, 
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
            }
        }
    ]
}); 


$(document).ready(function(){
   $(window).bind('scroll', function() {
   var navHeight = $( window ).height() - 70;
         if ($(window).scrollTop() > 50) {
             $('.header-menu, main').addClass('fixed');
         }
         else {
             $('.header-menu, main').removeClass('fixed');
         }
    }); 
});

if($(window).innerWidth() >= 1024){
    new WOW().init();
}

if($(window).innerWidth() >= 1024){
    $(document).ready(function(){
       $(window).bind('scroll', function() {
             if ($(window).scrollTop() > 1) {
                 $('.header-top, main').addClass('fixed');
             }
             else {
                 $('.header-top, main').removeClass('fixed');
             }
        });
    });
}

jQuery(document).ready(function( $ ) {
  $("#menu").mmenu({
     "extensions": [
        "fx-menu-zoom"
     ],
     "counters": true
  });
}); 