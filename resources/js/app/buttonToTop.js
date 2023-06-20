function buttonToTop(buttonClass) {
    window.addEventListener('scroll', function () {
        const button = document.querySelector('.' + buttonClass);
        if (document.documentElement.scrollTop > 300) {
            button.classList.add('active');
        } else {
            button.classList.remove('active');
        }
        button.addEventListener('click', function () {
            document.documentElement.style.scrollBehavior = 'smooth';
            document.documentElement.scrollTop = 0;
        });
    });
}

window.addEventListener('DOMContentLoaded', function () {
    buttonToTop('up-button');
});
