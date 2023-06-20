$(window).on('load', function () {
    $('body').addClass('loaded_hiding');
    window.setTimeout(function () {
        $('body').addClass('loaded').removeClass('loaded_hiding');
    }, 500);
});
