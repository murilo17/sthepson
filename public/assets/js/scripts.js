$(function () {
    var nav = $('#menuHeader');
    $(window).scroll(function () {
        if ($(this).scrollTop() > 50) {
            nav.addClass("menu-fixo");
            $('body').css('padding-top', 40);
        } else {
            nav.removeClass("menu-fixo");
            $('body').css('padding-top', 0);
        }
    });
});

$(".nav a[href^='#']").on('click', function(e) {
    e.preventDefault();
    var id = $(this).attr('href'),
        targetOffset = $(id).offset().top;

    $('html, body').animate({
        scrollTop: targetOffset - 100
    }, 500);
});

$('.box a[href^="#"]').on('click', function(e) {
    e.preventDefault();
    var id = $(this).attr('href'),
        targetOffset = $(id).offset().top;

    $('html, body').animate({
        scrollTop: targetOffset - 100
    }, 500);
});

$(document).ready(function(){

    $('.box').hide();

    $(window).scroll(function(){

        if($(this).scrollTop()>300){
            $('.box').fadeIn();
        }else{
            $('.box').fadeOut();
        }

    });

    $('.box').click(function(){
        $('html,body').animate({
            scrollTop: 0
        }, 2000);

    });

});

$(document).ready(function () {
    $('.nav li a').click(function(event) {
        $('.nav li').removeClass('active');

        var $parent = $(this).parent();
        if (!$parent.hasClass('active')) {
            $parent.addClass('active');
        }
        event.preventDefaul();
    });
});

