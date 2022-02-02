jQuery(document).ready(function ($) {
    $("#page").css("padding-top", $("#masthead").outerHeight());
    $(window).on('scroll', function () {
        scroll = $(window).scrollTop();
        if (scroll >= 100) {
            $("#masthead").addClass("sticky");
        } else {
            $("#masthead").removeClass("sticky");
        }
    });
    if ($(window).width() < 500) {
        $('#masthead').append('<div id="mob-menu-trigger"><span></span><span></span><span></span></div>');
        $('#mob-menu-trigger').on('click', function (e) {
            e.preventDefault();
            $(this).toggleClass('active');
        });
        $("#masthead .col .logo-wrapper").prependTo("#masthead");

        $("#masthead").append("<div id='mob-menu'></div>");
        $('#mob-menu').css('top', $("#masthead").outerHeight());
        $('#mob-menu').css('height', 'calc(100vh - ' + $("#masthead").outerHeight() + 'px)');
    }
});
