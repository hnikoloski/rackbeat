import $ from 'jquery';
window.$ = window.jQuery = $;
import 'slick-carousel'

jQuery(document).ready(function ($) {
    $('.slick-slider').slick({
        rows: 0,
        infinite: true,
        slidesToShow: 5,
        arrows: false,
        dots: false,
        swipeToSlide: true,
        autoplay: true,
        autoplaySpeed: 3000,
        pauseOnHover: true,
        responsive: [{
            breakpoint: 501,
            settings: {
                slidesToShow: 2
            }
        }]
    });
    $('.testemonials-slider').slick({
        rows: 0,
        infinite: true,
        slidesToShow: 3,
        arrows: false,
        dots: false,
        swipeToSlide: true,
        variableWidth: true,
        responsive: [{
            breakpoint: 501,
            settings: {
                variableWidth: false,
                slidesToShow: 1
            }
        }]
    })
    $('#testemonials-section header .next').on('click', function (e) {
        e.preventDefault();
        $('.testemonials-slider').slick('slickNext');
    });
    $('#testemonials-section header .prev').on('click', function (e) {
        e.preventDefault();
        $('.testemonials-slider').slick('slickPrev');
    });

    if ($(window).width() < 501) {
        $('#product-long-description .wrapper p.decorator').remove();
        $('#product-long-description .wrapper').slick({
            rows: 0,
            infinite: false,
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            dots: false,
            swipeToSlide: true,
            // variableWidth: true
        })

    }
});
