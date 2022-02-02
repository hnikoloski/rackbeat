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
        pauseOnHover: true
    });
    $('.testemonials-slider').slick({
        rows: 0,
        infinite: true,
        slidesToShow: 3,
        arrows: false,
        dots: false,
        swipeToSlide: true,
        variableWidth: true
    })
    $('#testemonials-section header .next').on('click', function (e) {
        e.preventDefault();
        $('.testemonials-slider').slick('slickNext');
    });
    $('#testemonials-section header .prev').on('click', function (e) {
        e.preventDefault();
        $('.testemonials-slider').slick('slickPrev');
    });
});
