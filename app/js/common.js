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

    /*показать/скрыть пароль*/
    var btnVisibleHiddenPswrd = ".dr-btn_password";
    var parent = ".form-control__group-btn";
    $(btnVisibleHiddenPswrd).on("click", function () {
        var inputPswrd = $(this).closest(parent).find('input');
        var typeInput = inputPswrd.attr("type") === "password"?"text":"password";
        inputPswrd.attr("type", typeInput);
        $(this).toggleClass('is-active');
    });
    /*показать/скрыть пароль*/


    $('body').on('click', '.video-btn_play', function () {
       var videoWrapper = $(this).closest('.video-wrapper');
        videoWrapper
           .find('.video-preview')
           .addClass('video-preview_hidden');
        videoWrapper
            .find('video')
            .eq(0)
            .trigger('play');
    });


    let modalBtnClose = ".dr-modal__close";
    let activeClass = "is-active";

    /* открытие модалки по нажатию на кнопку */
    $("*[data-modal]").on('click', function (e) {
        e.preventDefault();
        drModalShow($(this));
    });

    /* закрытие модалки по нажатию на кнопку */
    $(modalBtnClose).on('click', function () {
        drModalHide($(this));
    });

    function drModalHide(context) {
        $(context).closest('.dr-modal').removeClass(activeClass);
        $('html').removeClass('o-hidden');
    }

    function drModalShow(currentTarget, overlayStatus = true) {
        let btnModalId = currentTarget.data('modal');
        let modal = `.dr-modal[id="${btnModalId}"]`;
        if (btnModalId) {
            $(modal).addClass(activeClass);
        }
        $(modal).find('.dr-modal__overlay').eq(0).css("opacity", overlayStatus ? "1" : "0");
        $('html').addClass('o-hidden');
    }

    $(".modal-cancel, #btn_deleteAccount").on("click", function () {
        drModalHide($(this));
    });

    // $('.field-time').timepicker({
    //     timeFormat: 'h:mm p',
    //     interval: 1,
    //     // minTime: '10',
    //     // maxTime: '6:00pm',
    //     defaultTime: '12',
    //     startTime: '12:00',
    //     dynamic: false,
    //     dropdown: true,
    //     scrollbar: true
    // });

    $('.timer-task__controls .dr-btn').on('click', function () {
        //TODO: сделать по окончании таймера код ниже

        $(this).removeClass('is-active');
        if (!$(this).hasClass('timer-task__btn_repeat')) {
            $(this).next().addClass('is-active');
        } else {
            $(this)
                .closest('.timer-task__controls')
                .find('.dr-btn')
                .eq(0)
                .addClass('is-active');
        }
    });

    $('.tooltip-custom').on('click', function () {
        let txtTooltip = $(this).data('tooltip-c-content');
        let htmlTooltipNotice = `<span class="tooltip-custom__content">${txtTooltip}</span>`;

        if ($(this).hasClass('is-active')) {
            $(this).removeClass('is-active');
            $(this).find('.tooltip-custom__content').remove();
        } else {
            $(this).append(htmlTooltipNotice);
            $(this).addClass('is-active');
        }

    });

    var $quantityArrowMinus = $('.quantity-arrow__minus');
    var $quantityArrowPlus = $('.quantity-arrow__plus');
    var $quantityNum = $('.quantity-num');

    $quantityArrowMinus.on('click', function () {
        let quantityNum = $(this).closest('.quantity-block').find('.quantity-num');
        quantityMinus(quantityNum);
    })
    $quantityArrowPlus.on('click', function () {
        let quantityNum = $(this).closest('.quantity-block').find('.quantity-num');
        quantityPlus(quantityNum);
    })
    $(window).on('load', function () {
        changeInput($quantityNum);
    });

    function quantityMinus(el) {
        if (el.val() > 1) {
            el.val(+el.val() - 1);
        }
        changeInput(el);
    }
    function quantityPlus(el) {
        el.val(+el.val() + 1);
        changeInput(el);
    }
    function changeInput(el) {
        let block = el.closest('.quantity-block');

        if (el.val() > 1) {
            block.removeClass('quantity-min-none');
        } else {
            block.addClass('quantity-min-none');
        }
    }

    $(window).on('load resize', function () {
            getMaxHeightTaskItem($('.task-item__info_inner'), '.testing-panel');
            getMaxHeightTaskItem($('.task-item__info_inner'), '.task-item');
    });

    function getMaxHeightTaskItem(elToHeight, classParentItem) {
        if ($(window).width() > 768) {
            elToHeight.css('max-height',
                `${elToHeight
                    .closest(classParentItem)
                    .find('.video-wrapper')
                    .height()}px`);
        } else {
            elToHeight.css('max-height', "initial");
        }
    }

    $(document).ready(function () {
        $('.month-day').each(function () {
            if ($(this).text() === '11') {
                $(this).closest('.dr-t-cell').addClass('current-day');
            }
        });
    });

    // var $tableRow = $('.dr-t-row');
    // $tableRow.on('mousemove', function () {
    //     if (!$(this).hasClass('hovered')) {
    //         $(this).addClass('hovered');
    //         $(this).closest('.dr-t').addClass('hovered');
    //     }
    // });
    // $tableRow.on('mouseout', function () {
    //     $(this).removeClass('hovered');
    //     $(this).closest('.dr-t').removeClass('hovered');
    // });

    $(window).on('resize load', function() {
        if ($(this).width() > 1024) {
            $('.shedule-title').each(function () {
                $(this).text($(this).data('shedule-title-full'))
            });
        } else {
            $('.shedule-title').each(function () {
                $(this).text($(this).data('shedule-title-short'))
            });
        }
    });

    $(document).ready(function() {
        var $progressPointsContainer = $('.progress-points');
        var $progressPointsCount = $progressPointsContainer.find('.progress-point').length;
        /* get position number active element */
        var $progressPointActiveInd = $progressPointsContainer
            .find('.progress-point')
            .index($('.active'));

        /* width for one section (ex. for 3 section - width one = 33.333% */
        var widthOneSection = 100 / ($progressPointsCount - 1);
        /* start width value */
        var $progressPointLineWidth = 0;

        if ($progressPointActiveInd === ($progressPointsCount - 1)) {
            $progressPointLineWidth = 100;
        } else {
            var i = 0;
            while (i < $progressPointActiveInd) {
                $progressPointLineWidth += widthOneSection;
                i++;
            }
        }

        $progressPointsContainer
            .find('.progress-points__line')
            .css('width', `${$progressPointLineWidth}%`);
    });

    var $weekRow = $('.week-row');
    if (!$weekRow.closest('.week-list').hasClass('week-list_notjs')) {
        $weekRow.on('click', function () {
            if (!$(this).hasClass('is-active')) {
                $weekRow.each(function () {
                    $(this).removeClass('is-active');
                });
                $(this).addClass('is-active');
            }
        });
    }


    var $fieldTime = $(".field-time");
    $(document).ready(function () {
        if ($fieldTime) {
            var sArrHours = getHoursList();
            console.log(sArrHours);
            var oArrDataSource = [
                {
                    component: 0,
                    data: sArrHours
                }
            ];
            $fieldTime.AnyPicker(
                {
                    mode: "datetime",
                    dateTimeFormat: "hh:mm",
                    theme: "iOS", // "Default", "iOS", "Android", "Windows"
                    // layout: "inline",
                    // inputChangeEvent: "onChange",
                    dataSource: oArrDataSource
                });
        }
    });

});

function getHoursList(endHoursVal = 24) {
    let sArrHours = [];
    for (let i = 1; i <= endHoursVal; i++ ) {
        sArrHours.push({
            val: i,
            label: i
        });
    }
    return sArrHours;
}
