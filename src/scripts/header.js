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
            $('#mob-menu').toggleClass('active');
            $('body').toggleClass('overflow-hidden');
        });
        $("#masthead .col .logo-wrapper").prependTo("#masthead");

        $("#masthead").append("<div id='mob-menu'></div>");
        $('#mob-menu').css('top', $("#masthead").outerHeight());
        $('#mob-menu').css('height', 'calc(100vh - ' + $("#masthead").outerHeight() + 'px)');
        let primaryMenu = $('#masthead .col ul#primary-menu');
        let primaryToolbar = $('#masthead .col ul#primary-toolbar');

        $('#mob-menu').append(primaryMenu);
        $('#mob-menu').append(primaryToolbar);
        $('#masthead .col').remove();

        $('#primary-menu li.menu-item-has-children > a').append('<span class="sub-menu-trigger"><span></span><span></span></span>');


        $('.sub-menu-trigger').on('click', function () {
            $(this).toggleClass('active');
            $('#masthead #mob-menu #primary-menu li').removeClass('active');
            $(this).parent().parent().toggleClass('active');
            $(this).parent().siblings('.sub-menu').slideToggle()
        })
    }
});
