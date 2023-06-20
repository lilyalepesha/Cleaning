export default class Scroll {
    static  get paddingRight() {
        return window.innerWidth - document.documentElement.clientWidth + 'px';

    }

    static disableScroll(block) {
        console.log(Scroll.paddingRight);
        block.style.paddingRight = Scroll.paddingRight;
        document.body.classList.add('lock');
    }

    static enableScroll(block, padding = 0){
        block.style.paddingRight = padding + 'px';
        document.body.classList.remove('lock');
    }
}

