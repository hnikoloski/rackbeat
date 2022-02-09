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

    $('#slider-section .slider-wrapper .slider').slick({
        rows: 0,
        infinite: false,
        slidesToShow: 2.2,
        arrows: false,
        dots: false,
        swipeToSlide: true,
        variableHeight: true,
        responsive: [{
            breakpoint: 501,
            settings: {
                variableWidth: false,
                slidesToShow: 1
            }
        }]
    })

    $('#slider-section .top .btns-wrapper .next').on('click', function (e) {
        e.preventDefault();
        $('#slider-section .slider-wrapper .slider').slick('slickNext');
    });
    $('#slider-section .top .btns-wrapper .prev').on('click', function (e) {
        e.preventDefault();
        $('#slider-section .slider-wrapper .slider').slick('slickPrev');
    });

    $('.page-template-prices #hero .slider-wrapper').slick({
        rows: 0,
        infinite: true,
        slidesToShow: 2,
        arrows: false,
        autoplay: true,
        dots: false,
        swipeToSlide: true,
        variableHeight: true,
        responsive: [{
            breakpoint: 501,
            settings: {
                variableWidth: false,
                slidesToShow: 1
            }
        }]
    })
    $('.page-template-prices #slider-section .slider-wrapper').slick({
        rows: 0,
        infinite: false,
        slidesToShow: 4,
        arrows: false,
        dots: false,
        swipeToSlide: true,
        variableHeight: true,
        slide: '.card',
        responsive: [{
            breakpoint: 501,
            settings: {
                variableWidth: false,
                slidesToShow: 1
            }
        }]
    })
    $('.page-template-prices #slider-section .next').on('click', function (e) {
        e.preventDefault();
        $('.page-template-prices #slider-section .slider-wrapper').slick('slickNext');
    });
    $('.page-template-prices #slider-section .prev').on('click', function (e) {
        e.preventDefault();
        $('.page-template-prices #slider-section .slider-wrapper').slick('slickPrev');
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
