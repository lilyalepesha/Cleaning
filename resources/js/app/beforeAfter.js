function beforeAfterSlider(slider) {
    const resize = slider.find('.complexity-slide__img-before');
    const button = slider.find('.complexity-slide__img-button');

    slider.on('mousemove', function (e) {
        button.removeClass('transition');
        resize.removeClass('transition');

        let x = e.offsetX;
        button.css('transition', '0.1s');
        resize.css('transition', '0.1s');
        button.css('left', x + 'px');
        resize.css('width', x + 'px');
    });

    slider.on('mouseleave', function (e) {
        button.addClass('transition');
        button.css('left', '50%');
        resize.addClass('transition');
        resize.css('width', '50%');
    });
}

$(window).on('DOMContentLoaded', function () {
    const sliders = $('.complexity-slide__img');
    sliders.each(function () {
        beforeAfterSlider($(this));
    });
});
