$(document).ready(function () {
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    });

    const insta = $("img.insta-thumb");
    const resizeInsta = () => {
        insta.outerHeight(insta.outerWidth() * 1);
    };

    resizeInsta();
    $(window).resize(resizeInsta);
});