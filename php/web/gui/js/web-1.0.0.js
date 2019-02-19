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

    const insta = $("img.insta-thumb");
    const resizeInsta = function () {
        insta.outerHeight(insta.outerWidth() * 1);
    };
    resizeInsta();
    $(window).resize(resizeInsta);

    let vh = window.innerHeight * 0.01;
    document.documentElement.style.setProperty('--vh', vh + 'px');

    const headerHeight = $('body.bg-fullscreen header').height();
    $('div.bg-fullscreen').height($('div.bg-fullscreen').height() - headerHeight)
});