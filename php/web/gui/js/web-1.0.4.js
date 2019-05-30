$(document).ready(function () {
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    });

    $('main.fade-in').fadeIn(750);

    $('div.bg-fullscreen a').click(function (e) {
        e.preventDefault();
        $('html, body').animate({
            scrollTop: $("div.container").offset().top
        }, 500);
    })
    
    var vh = window.innerHeight * 0.01;
    document.documentElement.style.setProperty('--vh', vh + 'px');

    const headerHeight = $('body.bg-fullscreen header').height();
    $('div.bg-fullscreen').height($('div.bg-fullscreen').height() - headerHeight)

    const insta = $("img.insta-thumb");
    const resizeInsta = function () {
        insta.outerHeight(insta.outerWidth() * 1);
    };
    resizeInsta();
    $(window).resize(resizeInsta);

    var t = 'm' + 'e';
    var y = 'cgu' + 'r' + 'tner'
    var a = '@';
    var e = '.c' + 'h';
    var cml = t + a + y + e;
    var mlc = 'ma' + 'il' + 'to' + ':';

    var field = $('#cml');
    if (field.length > 0) {
        field.attr('href', mlc + cml);
        field.text(cml);
    }

    var contactAlert = $('#alert-contact');
    if (contactAlert.length > 0) {
        $(window).scrollTop(contactAlert.offset().top);
    }
});