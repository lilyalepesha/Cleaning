function slider(slider, buttonNext, buttonPrev, pagination = null, sliderPerView){
    const swiper = new Swiper('.' + slider, {
        slidesPerView: sliderPerView,
        navigation: {
            nextEl: '.' + buttonNext,
            prevEl: '.' + buttonPrev,
        },
        pagination: {
            el: '.' + pagination,
            clickable: true,
        },
    });
}

window.addEventListener('DOMContentLoaded', function(){
    slider('complexity__slider', 'complexity__slider-button--next',
        'complexity__slider-button--prev', 'swiper-pagination', 1);
    slider('certificates__slider', 'certificates__slider-button--next',
        'certificates__slider-button--prev', null, 3);
});
