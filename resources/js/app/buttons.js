function activateButtons(buttonClass, activeClass) {
    const buttons = $('.' + buttonClass);

    buttons.on('click', function () {
        const clickedButton = $(this);

        if (clickedButton.hasClass(activeClass)) {
            buttons.removeClass(activeClass);
        } else {
            buttons.removeClass(activeClass);
            clickedButton.addClass(activeClass);
        }
    });
}

$(window).on('DOMContentLoaded', function () {
    activateButtons('tabs__item', 'tabs__item--active');
});
