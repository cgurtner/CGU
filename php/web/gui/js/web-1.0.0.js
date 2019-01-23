$(document).ready(function () {
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    });

    $('main.fade-in').fadeIn(750);

    window.addEventListener('resize', () => {
        let vh = window.innerHeight * 0.01;
        document.documentElement.style.setProperty('--vh', `${vh}px`);
    });

    const insta = $("img.insta-thumb");
    const resizeInsta = () => {
        insta.outerHeight(insta.outerWidth() * 1);
    };
    resizeInsta();
    $(window).resize(resizeInsta);

    $("#scroll-to-content").click(function (e) {
        e.preventDefault();
        $('html, body').animate({scrollTop: $('main div.bg').height() - $('nav').height() - 15}, 750);
    });
});