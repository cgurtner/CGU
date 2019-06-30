$(document).ready(function () {
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    });

    $('main.fade-in').fadeIn(750);

    var vh = window.innerHeight * 0.01;
    document.documentElement.style.setProperty('--vh', vh + 'px');

    const resizeBG = function () {
        const headerHeight = $('body.bg-fullscreen header').height();
        $('div.bg-fullscreen').height($('div.bg-fullscreen').height() - headerHeight)
    }

    resizeBG();
    $('.navbar-collapse').on('shown.bs.collapse', function () {
        resizeBG();
    });

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

    var contactAlert = $('#alert-anker');
    if (contactAlert.length > 0) {
        $(window).scrollTop(contactAlert.offset().top);
    }
});