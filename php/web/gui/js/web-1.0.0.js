$(document).ready(function () {
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    });

    $('main.fade-in').fadeIn(750);
    const insta = $("img.insta-thumb");
    const resizeInsta = () => {
        insta.outerHeight(insta.outerWidth() * 1);
    };

    resizeInsta();
    $(window).resize(resizeInsta);

    $("#scroll-to-content").click(function (e) {
        e.preventDefault();
        $([document.documentElement, document.body]).animate({
            scrollTop: $("#content").offset().top
        }, 750);
    });
});