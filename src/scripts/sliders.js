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
        swipeToSlide: true
    });
});
