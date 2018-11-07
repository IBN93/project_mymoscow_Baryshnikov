$(document).ready(function() {

    QandA.forEach(function(item, i) {
        $('#QA').append('<div class="question">' + item.question + '</div>');
        $('#QA').append('<div class="answer">' + item.answer + '</div>');
        $('#QA').append('<div class="answer-button">' + '&#11015; показать ответ</div>');
    });

    album.forEach(function(photo, i) {
        $('.slider').append(`<img src="${photo.url}" alt="${photo.alt}" class="${photo.image}">`);
    });

    $('.answer-button').click(function() {
        if ($(this).prev().is(':visible')) {
            $(this).prev().slideUp(500);
            $(this).text('\u2193 показать ответ').css('color', 'green');
        } else {
            $(this).prev().slideDown(500);
            $(this).text('\u2191 скрыть ответ').css('color', 'red');
        };
    });

    $('nav > a').click(function() {
        let goTo = $(this).attr('href');
        $('html, body').animate({ scrollTop: $(`${goTo}`).offset().top }, 500);
        return false;
    });

    let isCounted = false;
    const counter = (element, acc, iter, N) => {
        if (acc >= N) {
            return element.text(`${N}`);
        }
        element.text(acc);
        return setTimeout(function() {
            counter(element, acc + iter, iter, N);
        }, 5);
    };
    $(window).scroll(function() {
        let coord = $('.flex-stat')[0].getBoundingClientRect().top;
        if (coord < window.innerHeight && isCounted == false) {
                counter($('.number-1'), 1, 8, 1127);
                counter($('.number-2'), 1, 136, 18634);
                isCounted = true;
        }
    });

    let width = parseInt($('.slider-box').css('width'));

    $('.slider').css('margin-left', -width);
    setInterval(function() {
        let marginLeft = parseInt($('.slider').css('margin-left'));
        if (marginLeft == -width * 9) {
            $('.slider').css('margin-left', -width);
            marginLeft = -width * 2;
        } else {
            marginLeft -= width;
        }
        $('.slider').animate({marginLeft: marginLeft}, 1500);
    }, 3000);

    // Обратный слайдер
    // setInterval(function() {
    //         let marginLeft = parseInt($('.slider').css('margin-left'));
    //         if (marginLeft == 0) {
    //             $('.slider').css('margin-left', -width * 8);
    //             marginLeft = -width * 7;
    //         } else {
    //             marginLeft += width;
    //         }
    //         $('.slider').animate({marginLeft: marginLeft}, 1500);
    //     }, 3000);

    $('.information-type > div').click(function() {
        if (!$(this).hasClass('active')) {
            $(this).addClass('active');
            $(this).siblings().removeClass('active');
            const id = $(this).data('text');
            const thisInfo = $('.information-text > div[data-text="' + id + '"]');
            thisInfo.siblings().hide();
            thisInfo.show(500);
        }
    });

    // let isOpened = 0;
    $('.menu-button').click(function() {
        $('nav').slideToggle(250);
            // if (isOpened == 0) {
            //     $('nav > a').addClass('vertical-menu-items');
            //     $('nav').addClass('sliding-menu');
            //     isOpened = 1;
            // } else {
            //     $('nav').hide();
            //     $('nav > a').removeClass('vertical-menu-items');
            //     $('nav').removeClass('sliding-menu');
            //     isOpened = 0;
            // }
            
        // $('nav > a').css('display', 'block').css('padding-bottom', '5px');
        // $('nav').css('position', 'absolute').css('right', '0').css('top', '100%').css('background', 'rgba(61, 60, 60, 0.404)');
    });
});

$('header').ready(function() {
    $('.header-center').fadeIn(2500);
});

$('.left-icons > a').click(function() {
    var goTo = $(this).attr('href');
    $('html, body').animate({ scrollTop: $(`${goTo}`).offset().top }, 500);
    return false;
});