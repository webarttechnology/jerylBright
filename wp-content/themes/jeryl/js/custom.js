$(document).ready(function () {

    $('.banner-slider').owlCarousel({

        loop: true,

        margin: 20,

        nav: false,

        autoplay:true,

        responsive: {

            0: {

                items: 1,

                nav: false,

            },

            600: {

                items: 1,

                nav: false,

                dots: true,

            },

            1000: {

                items: 1

            }

        }

    })



    $('.blog-slider').owlCarousel({
        loop: true,
        margin: 0,
        autoplay: true,
        dots: true,
        nav: false,
        navText : [
            '<i class="fas fa-angle-left"></i>',
            '<i class="fas fa-angle-right"></i>'
        ],
        responsive: {

            0: {

                items: 1,

                nav: false,

                dots: true,

            },

            600: {

                items: 2,

                nav: true,

                dots: true,

            },

            1000: {

                items:3

            }

        }

    })



    $('.review-slider').owlCarousel({

        loop: true,

        margin: 20,

        nav: true,
        navText : [
            '<i class="fas fa-angle-left"></i>',
            '<i class="fas fa-angle-right"></i>'
        ],

        dots: true,
        nav:false,
        autoplay:true,

        responsive: {

            0: {

                items: 1,

                nav: false,

                dots: true,

            },

            600: {

                items: 2,

                nav: false,

                dots: true,

            },

            1000: {

                items: 2

            }

        }

    })







});























// start scroll 







$(document).ready(function () {



    $(function () {



        $(document).on('scroll', function () {



            if ($(window).scrollTop() > 100) {

                $('.scroll-top-wrapper').addClass('show');

            } else {

                $('.scroll-top-wrapper').removeClass('show');

            }

        });



        $('.scroll-top-wrapper').on('click', scrollToTop);

    });



    function scrollToTop() {

        verticalOffset = typeof (verticalOffset) != 'undefined' ? verticalOffset : 0;

        element = $('body');

        offset = element.offset();

        offsetTop = offset.top;

        $('html, body').animate({ scrollTop: offsetTop }, 2000, 'linear');

    }



});







$(document).on("scroll", function () {

    if

        ($(document).scrollTop() > 86) {

        $("#banner").addClass("shrink");

    }

    else {

        $("#banner").removeClass("shrink");

    }

});