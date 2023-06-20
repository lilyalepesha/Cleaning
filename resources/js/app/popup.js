import Scroll from './scroll';

function popupScroll(formOverlay, closeButtonClass, formClass, buttonClass) {
    const popup = document.querySelector('.' + formOverlay);
    const closeButton = popup.querySelector('.' + closeButtonClass);
    const button = popup.querySelector('.' + buttonClass);
    let isOpened = false;
    window.addEventListener('scroll', function () {
        if (window.scrollY >= 1000 && !isOpened) {
            Scroll.disableScroll(popup);
            popup.classList.add('active');
            isOpened = true;
        }
    });

    closeButton.addEventListener('click', function () {
        popup.classList.remove('active');
        Scroll.enableScroll(popup);
    });

    popup.addEventListener('click', function (e) {
        if (!e.target.closest('.' + formClass)) {
            popup.classList.remove('active');
            Scroll.enableScroll(popup);
        }
    });

}

window.addEventListener('DOMContentLoaded', function () {
    popupScroll('register__form-wrapper', 'register__form-close', 'register__form', 'register__form-button');
});
