$(document).ready(function () {
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    });

    $('main.fade-in').fadeIn(750);

    const insta = $("img.insta-thumb");
    const resizeInsta = function () {
        insta.outerHeight(insta.outerWidth() * 1);
    };
    resizeInsta();
    $(window).resize(resizeInsta);
});