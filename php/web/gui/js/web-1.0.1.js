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

    if ($('#instagram-loader').length > 0) {
        console.log(true);
        $.ajax({
            type: "GET",
            url: 'instagram.php',
            success: function (data) {
                console.log(data)
                $('#instagram-loader').replaceWith(data);
                console.log(data);
                const insta = $("img.insta-thumb");
                const resizeInsta = function () {
                    insta.outerHeight(insta.outerWidth() * 1);
                };
                resizeInsta();
                $(window).resize(resizeInsta);
            }
        });
    }
});