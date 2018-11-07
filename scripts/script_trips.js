$(document).ready(function() {

    $('nav > a').click(function() {
        let goTo = $(this).attr('href');
        $('html, body').animate({ scrollTop: $(`${goTo}`).offset().top }, 500);
        return false;
    });

    // let isOpened = 0;
    $('.menu-button').click(function() {
        $('nav').slideToggle(250);
    });
});

$('header').ready(function() {
    $('.header-center').fadeIn(2500);
});