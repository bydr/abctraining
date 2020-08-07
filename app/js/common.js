$(function () {

    // Custom JS

    /*dropdown*/
    $('.dropdown-header').on('click', function(e){
        e.preventDefault();
        $(this).closest('.dropdown').toggleClass('is-active');
        $(this).toggleClass('is-active');
    });
    $(document).on('click', function (e) {
        if (!$(e.target).closest('.dropdown').length) {
            $('.dropdown').removeClass('is-active');
        }
    });
    /*dropdown*/

    /*mobile menu*/
    $('.dr-btn__mobile-menu').on('click', function (e) {
        e.preventDefault();
        $(this).closest('.page').find('.page-sidebar__wrapper').addClass('is-active');
        $('body, html').addClass('overflow-hidden');
    });
    $('.dr-btn__mobile-menu_close').on('click', function (e) {
        e.preventDefault();
        $(this).closest('.page').find('.page-sidebar__wrapper').removeClass('is-active');
        $('body, html').removeClass('overflow-hidden');
    });
    /*mobile menu*/


    /*custom scroll*/
    $(window).on('load resize', function () {
        if ($(window).width() < 600) {
            $('.customscroll')
                .addClass('active-customscroll')
                .customScroll({
                    prefix: 'custom-scroll_',

                    /* vertical */
                    barMinHeight: 3,
                    offsetTop: 0,
                    offsetBottom: 0,
                    /* will be added to offsetBottom in case of horizontal scroll */
                    trackWidth: 3,

                    /* horizontal */
                    barMinWidth: 3,
                    offsetLeft: 0,
                    offsetRight: 0,
                    /* will be added to offsetRight in case of vertical scroll */
                    trackHeight: 3,

                    /* each bar will have custom-scroll_bar-x or y class */
                    barHtml: '<div />',

                    /* both vertical or horizontal bar can be disabled */
                    vertical: false,
                    horizontal: true
                });

        } else {
            $('.customscroll').customScroll('destroy');
        }
    });
    /*custom scroll*/
});
