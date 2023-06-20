function accordion(wrapperClass, triggerClass, accordionClass, activeClass) {
    const wrapper = $('.' + wrapperClass);
    wrapper.each(function () {
        const trigger = $(this).find('.' + triggerClass);
        const accordion = $(this).find('.' + accordionClass);
        trigger.on('click', function (e) {
            $(this).find('button').toggleClass(activeClass);
            accordion.toggleClass(activeClass);
        });
    });
}

$(window).on('DOMContentLoaded', function () {
    accordion('asks__item-wrapper', 'asks__item', 'asks__item-content', 'active');
});
