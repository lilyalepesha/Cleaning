import Scroll from './scroll';

function burgerMenu(burgerButtonClass, menuClass, activeClass) {
    const burgerButton = document.querySelector('.' + burgerButtonClass);
    const header = document.querySelector('.' + menuClass);

    burgerButton.addEventListener('click', function (e) {
        header.classList.toggle(activeClass);
        burgerButton.classList.toggle(activeClass);

        if (header.classList.contains(activeClass)) {
            Scroll.disableScroll(header);
        } else {
            Scroll.enableScroll(header);
        }
    });
}

document.addEventListener('DOMContentLoaded', function () {
    burgerMenu('icon__menu', 'header', 'active');
});
