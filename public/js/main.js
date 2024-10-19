 (function ($) {
     "use strict";

     var $constrom_window = $(window);
     var THE = {};
     var plugin_track = 'static/plugin/';

     // ************************
     // :: Preloader Active Code
     // ************************

     $constrom_window.on('load', function () {
         $('.preloader').fadeOut('1000', function () {
             $(this).remove();
         });


     });

     // ****************************
     // :: TOP Menu Active Code
     // ****************************

     if ($.fn.classyNav) {
         $('#onitaNav').classyNav({
             stickyNav: true,
         });
     }

     $(document).ready(function () {

         // ********************************
         // :: One Page Nav Active Code
         // ********************************

         if ($.fn.onePageNav) {
             $('#nav').onePageNav({
                 currentClass: 'active',
                 scrollSpeed: 1500,
                 easing: 'easeOutQuad'
             });
         }


         // ***********************
         // :: Scrollup Active Code
         // ***********************

         if ($.fn.scrollUp) {
             $constrom_window.scrollUp({
                 scrollSpeed: 1000,
                 scrollText: '<i class="fa fa-long-arrow-up" aria-hidden="true"></i>'
             });
         }

         // ***********************
         // :: According Active Code
         // ***********************

         $('.collapse').on('shown.bs.collapse', function () {
             $(this).prev().addClass('active');
         });

         $('.collapse').on('hidden.bs.collapse', function () {
             $(this).prev().removeClass('active');
         });


         // ************************************
         // :: CLient Slides Active Code
         // ************************************

         if ($.fn.owlCarousel) {
             var clientArea = $('.client-silder');
             clientArea.owlCarousel({
                 items: 3,
                 loop: true,
                 autoplay: false,
                 smartSpeed: 1500,
                 margin: 50,
                 nav: false,
                 dots: false,
                 responsive: {
                     0: {
                         items: 1
                     },
                     768: {
                         items: 3
                     }
                 }
             });
         }

         // ******************************
         // :: App shot slider Active Code
         // ******************************

         $('.app-shot').slick({
             slidesToShow: 3,
             slidesToScroll: 1,
             autoplay: true,
             speed: 2000,
             autoplaySpeed: 1500,

             responsive: [{
                     breakpoint: 600,
                     settings: {
                         slidesToShow: 2,
                         slidesToScroll: 2
                     }
                 },
                 {
                     breakpoint: 480,
                     settings: {
                         slidesToShow: 1,
                         slidesToScroll: 1
                     }
                 },

             ]
         });



         // **********************
         // :: Wow js Active Code
         // **********************

         if ($constrom_window.width() > 767) {
             new WOW().init();
         }

         // *************************
         // :: Counter Up Active Code
         // *************************

         if ($.fn.counterUp) {
             $('.counter').counterUp({
                 delay: 10,
                 time: 1500
             });
         }






     });

     // **************************
     // :: Nice Delect Active Code
     // **************************

     if (document.getElementById('default-select')) {
         $('select').niceSelect();
     }

     // *********************************
     // :: Prevent Default 'a' Click
     // *********************************
     $('a[href="#"]').on('click', function ($) {
         $.preventDefault();
     });


 })(jQuery);