$(document).ready(function() {
    var altura = $('.menu').offset().top;
    $(window).on('scroll', function() {
        if ($(window).scrollTop() >= altura) {
            $('.menu').addClass('menu-fixed');
            $('.nada_marquesina').addClass('top_marquesina').fadeIn();

        } else {
            $('.menu').removeClass('menu-fixed');
            $('.nada_marquesina').removeClass('top_marquesina');
        }
    });

});
