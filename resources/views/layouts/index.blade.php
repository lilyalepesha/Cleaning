<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('/dist/css/app/app.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{asset('/dist/js/app/app.js')}}"></script>
    <title>Cleaning Company</title>
</head>
<body>
@include('components.header')
@include('components.status')
<div class="wrapper">
    <main class="main">
        <section class="hero">
            <div class="hero__container container">
                <div class="hero__content">
                    <h1 class="hero__content-title title-content">Бережная уборка квартир и домов
                        в СПБ <span class="title-content-сost">по фиксированной стоимости от 80₽/м²</span>
                        <span class="title-content-guarantee">с гарантий качества по договору</span>
                    </h1>
                    <p class="hero__content-text">
                        Выберите вид уборки, получите точный расчёт стоимости и <span>скидку 10%</span> на первый заказ
                    </p>
                    <div class="hero__content-buttons content-buttons">
                        <button class="content-button button__blue">Рассчитать стоимость</button>
                        <button class="content-button button__orange">Выбрать вид уборки</button>
                    </div>
                </div>
                <div class="hero__desc-wrapper">
                    <div class="hero__desc-button"></div>
                    <div class="hero__desc">
                        <div class="hero__desc-text">
                            Убрано <span>более 535</span> объектов
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="advantages">
            <div class="advantages__container container">
                <div class="advantages__items">
                    <div class="advantages__item advantages__item--blue">
                        <p class="advantages__item-text">Немецкое и Американское оборудование</p>
                        <img src="{{asset('/images/karcher.png')}}" alt="advantage">
                    </div>
                    <div class="advantages__item advantages__item--orange">
                        <p class="advantages__item-text">Гипоаллергенные безопасные моющие</p>
                        <img src="{{asset('/images/sniffer.png')}}" alt="advantage">
                    </div>
                    <div class="advantages__item advantages__item--blue">
                        <p class="advantages__item-text">Немецкое и Американское оборудование</p>
                        <img src="{{asset('/images/Gloves.png')}}" alt="advantage">
                    </div>
                    <div class="advantages__item advantages__item--orange">
                        <p class="advantages__item-text">Немецкое и Американское оборудование</p>
                        <img src="{{asset('/images/Check.png')}}" alt="advantage">
                    </div>
                </div>
            </div>
        </section>
        <section class="tabs">
            <div class="tabs__container container">
                <nav class="tabs__nav">
                    <ul class="tabs__list">
                        <li class="tabs__item"><a href="#!" class="tabs__link">Услуги</a></li>
                        <li class="tabs__item"><a href="#!" class="tabs__link">Рассчитать стоимость</a></li>
                        <li class="tabs__item"><a href="#!" class="tabs__link">Почему мы</a></li>
                        <li class="tabs__item"><a href="#!" class="tabs__link">Как мы делаем уборку</a></li>
                        <li class="tabs__item"><a href="#!" class="tabs__link">Отзывы</a></li>
                        <li class="tabs__item"><a href="#!" class="tabs__link">Акции</a></li>
                    </ul>
                </nav>
            </div>
        </section>
        <section class="calculator">
            <div class="calculator__container container">
                <h1 class="calculator__title">Калькулятор стоимости уборки <span>с точностью до 98%</span></h1>
                <p class="calculator__text">Это бесплатно и ни к чему не обязывает!</p>
                <div class="calculator__item">
                    <h2 class="calculator__item-title">
                        Отлично! Ваши ответы получены,
                        менеджер уже приступает к расчёту
                    </h2>
                    <p class="calculator__item-text">
                        Где вам удобнее получить расчёт?
                    </p>
                    <div class="calculator__item-buttons buttons-calculator">
                        <button class="button-calculator__telegram">
                            <img src="{{asset('/images/Telegram.svg')}}" alt="telegram">
                        </button>
                        <button class="button-calculator__whatsapp">
                            <img src="{{asset('/images/Whatsapp.svg')}}" alt="whatsapp">
                        </button>
                    </div>
                    <form class="calculator__item-form" action="#!">
                        <label for="phone" id="phone" class="calculator__item-input">
                            <input type="tel" name="phone" placeholder="Введите ваш телефон">
                        </label>
                        <span class="error">Неккоректный номер</span>
                        <button type="submit" class="calculator__item-button button__orange">Получить расчёт и бонусы
                        </button>
                    </form>
                    <label for="policy" class="calculator__item-policy">
                        <input type="checkbox" id="policy" name="policy">
                        <p>
                            Нажимая на кнопку вы соглашаетесь
                            с условиями <span>Политики конфиденциальности</span>
                        </p>
                    </label>
                    <div class="calculator__item-block block-calculator">
                        <h4 class="block-calculator__title">Ваши бонусы:</h4>
                        <ul class="block-calculator__listblock-calculator__list">
                            <li class="block-calculator__list-item">Скидка 10% на первый заказ</li>
                            <li class="block-calculator__list-item">Книга «Магическая уборка»</li>
                        </ul>
                        <span>(в бумажном переплёте)</span>
                    </div>
                </div>
            </div>
        </section>
        <section class="confidence">
            <div class="confidence__container container">
                <button class="confidence__button simple__orange-button">
                    А вы знали?
                </button>
                <h1 class="confidence__title">
                    <span>70% клининговых компаний в СПБ, зачастую</span> подвергают
                    своих клиентов рискам и дискомфорту.
                </h1>
                <p class="confidence__text">
                    И вот некоторые факты, с которыми вы можете столкнуться,
                    обращаясь в другие компании:
                </p>
                <div class="confidence__carts carts">
                    <div class="carts-item confidence__carts-item cart-confidence">
                        <div class="cart-confidence__images carts-item__images">
                            <img src="{{asset('/images/cash.png')}}" alt="cart">
                            <img src="{{asset('/images/Checkout.png')}}" alt="cart">
                        </div>
                        <div class="cart-confidence__content carts-item__content">
                            <h3>Чёрная касса</h3>
                            <p>Клининговые компании завлекают
                                клиентов обманчиво низкой стоимостью.
                                Менеджеры умалчивают стоимость
                                доп. работ, а на объекте, когда клиенту
                                сложно отказать, насчитывают
                                стоимость выше заявленной.</p>
                        </div>
                    </div>
                    <div class="carts-item confidence__carts-item cart-confidence">
                        <div class="carts-item__images cart-confidence__images">
                            <img src="{{asset('/images/pan.png')}}" alt="cart">
                            <img src="{{asset('/images/comet.png')}}" alt="cart">
                        </div>
                        <div class="carts-item__content cart-confidence__content">
                            <h3>Порча имущества</h3>
                            <p>Неправильно подобранные клинерами
                                моющие средства могут повредить
                                поверхность мебели и бытовых приборов.
                                Неправильная влажная уборка может испортить новый паркет или повредить проводку.</p>
                        </div>
                    </div>
                    <div class="carts-item confidence__carts-item cart-confidence">
                        <div class="carts-item__images cart-confidence__images">
                            <img src="{{asset('/images/broom.png')}}" alt="cart">
                            <img src="{{asset('/images/dist.png')}}" alt="cart">
                        </div>
                        <div class="carts-item__content cart-confidence__content">
                            <h3>Имитация деятельности</h3>
                            <p>Клинеры часто выполняют свою
                                работу недобросовестно. Не убирают
                                труднодоступные места и экономят
                                моющее средство. В результате Вы
                                получаете некачественную уборку
                                и испорченное настроение.</p>
                        </div>
                    </div>
                </div>
                <div class="confidence__timer">
                    <div class="confidence__timer-workers workers-timer">
                        <img src="{{asset('/images/time.png')}}" alt="time">
                        <div class="workers-timer-content">
                            <h3>Безответственность персонала</h3>
                            <p>Клинеры приезжают раньше/позже назначенного времени,
                                что доставляет дискомфорт хозяину. Не соблюдают инструктаж
                                владельца квартиры и нарушают бытовой порядок.
                            </p>
                        </div>

                    </div>
                    <div class="confidence__timer-message">
                        <h5>Друзья, Будьте внимательны!</h5>
                        <p>При выборе клинговой компании и заказе
                            уборки, внимательно читайте договор
                            на оказание услуг
                        </p>
                        <a href="#!">Посмотреть договор</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="professionals">
            <div class="professionals__container container">
                <h1 class="professionals__title">
                    <span>Наша работа построена</span>
                    на профессионализме и честности
                </h1>
                <div class="professionals__help">
                    Обращаясь за помощью к нам, вы можете быть
                    спокойны за качество и ваш комфорт
                </div>
                <div class="professionals__carts carts">
                    <div class="carts-item professionals__carts-item cart-professionals">
                        <div class="cart-professionals__images carts-item__images">
                            <img src="{{asset('/images/CheckLeft.png')}}" alt="cart">
                            <img src="{{asset('/images/list.png')}}" alt="cart">
                        </div>
                        <div class="cart-professionals__content carts-item__content">
                            <h3>Чёрная касса</h3>
                            <p>Клининговые компании завлекают
                                клиентов обманчиво низкой стоимостью.
                                Менеджеры умалчивают стоимость
                                доп. работ, а на объекте, когда клиенту
                                сложно отказать, насчитывают
                                стоимость выше заявленной.</p>
                        </div>
                    </div>
                    <div class="carts-item professionals__carts-item cart-professionals">
                        <div class="carts-item__images cart-professionals__images">
                            <img src="{{asset('/images/bottle1.png')}}" alt="cart">
                            <img src="{{asset('/images/bottle2.png')}}" alt="cart">
                        </div>
                        <div class="carts-item__content cart-professionals__content">
                            <h3>Порча имущества</h3>
                            <p>Неправильно подобранные клинерами
                                моющие средства могут повредить
                                поверхность мебели и бытовых приборов.
                                Неправильная влажная уборка может испортить новый паркет или повредить проводку.</p>
                        </div>
                    </div>
                    <div class="carts-item professionals__carts-item professionals-confidence">
                        <div class="carts-item__images cart-professionals__images shield">
                            <img src="{{asset('/images/Shield.png')}}" alt="cart">
                        </div>
                        <div class="carts-item__content cart-professionals__content">
                            <h3>Имитация деятельности</h3>
                            <p>Клинеры часто выполняют свою
                                работу недобросовестно. Не убирают
                                труднодоступные места и экономят
                                моющее средство. В результате Вы
                                получаете некачественную уборку
                                и испорченное настроение.</p>
                        </div>
                    </div>
                </div>
                <div class="professionals__consultation">
                    <h4 class="professionals__consultation-title">Оставьте заявку <span>на консультацию и расчёт стоимости БЕСПЛАТНО</span>
                    </h4>
                    <form action="#!" class="professionals__consultation-form">
                        <label id="phone" for="phone" class="professionals__consultation-call call-professionals">
                            <input type="text" name="phone" placeholder="Введите ваш телефон">
                        </label>
                        <span class="error">Неверный номер телефона</span>
                        <button class="button__orange call-professionals__button">
                            Жду звонка
                        </button>

                    </form>
                    <label for="policy-prof" id="policy-prof" class="professionals__policy">
                        <input type="checkbox" name="policy-prof">
                        <span>Нажимая на кнопку вы соглашаетесь с условиями <a
                                href="#!">Политики конфиденциальности</a></span>
                    </label>
                </div>
            </div>
        </section>
        <section class="kinds">
            <div class="kinds__container container">
                <h1 class="kinds__title">6 видов уборки <span>под любую Вашу задачу</span></h1>
                <p class="kinds__text">
                    Наши услуги подойдут для семейных пар с детьми,
                    владельцев животных, аллергиков, арендодателей
                </p>
                <div class="kinds__carts">
                    <div class="kinds__carts-item kinds-carts">
                        <div class="kinds-carts__image">
                            <img src="{{asset('/images/kinds1.png')}}" alt="kinds">
                        </div>
                        <h4 class="kinds-carts__title">Генеральная уборка</h4>
                        <p class="kinds-carts__text">Комплексная уборка с удалением
                            пыли, жира и грязи</p>
                        <p class="kinds-carts__time">Время работы: <span>5-7 часов</span></p>
                        <button class="kinds-carts__button--outline blue__button-outline">от 150 ₽/м²</button>
                        <button class="kinds-carts__button--filled button__blue">Рассчитать стоимость</button>
                        <a href="#!" class="kinds-carts__about">Подробнее</a>
                    </div>
                    <div class="kinds__carts-item kinds-carts">
                        <div class="kinds-carts__image">
                            <img src="{{asset('/images/kinds2.png')}}" alt="kinds">
                        </div>
                        <h4 class="kinds-carts__title">Уборка после ремонта</h4>
                        <p class="kinds-carts__text">Подготовим ваше помещение
                            к комфортному проживанию</p>
                        <p class="kinds-carts__time">Время работы: <span>5-7 часов</span></p>
                        <button class="kinds-carts__button--outline blue__button-outline">от 150 ₽/м²</button>
                        <button class="kinds-carts__button--filled button__blue">Рассчитать стоимость</button>
                        <a href="#!" class="kinds-carts__about">Подробнее</a>
                    </div>
                    <div class="kinds__carts-item kinds-carts">
                        <div class="kinds-carts__image">
                            <img src="{{asset('/images/kinds3.png')}}" alt="kinds">
                        </div>
                        <h4 class="kinds-carts__title">Поддерживающая уборка</h4>
                        <p class="kinds-carts__text">Уборка, для поддержания
                            чистоты в квартире</p>
                        <p class="kinds-carts__time">Время работы: <span>2-4 часов</span></p>
                        <button class="kinds-carts__button--outline blue__button-outline">от 80 ₽/м²</button>
                        <button class="kinds-carts__button--filled button__blue">Рассчитать стоимость</button>
                        <a href="#!" class="kinds-carts__about">Подробнее</a>
                    </div>
                    <div class="kinds__carts-item kinds-carts">
                        <div class="kinds-carts__image">
                            <img src="{{asset('/images/kinds6.png')}}" alt="kinds">
                        </div>
                        <h4 class="kinds-carts__title">Мойка окон и понорам</h4>
                        <p class="kinds-carts__text">За чистыми окнами — грязь
                            не живёт!</p>
                        <p class="kinds-carts__time">Время работы: <span>2-4 часов</span></p>
                        <button class="kinds-carts__button--outline blue__button-outline">от 500 ₽</button>
                        <button class="kinds-carts__button--filled button__blue">Рассчитать стоимость</button>
                        <a href="#!" class="kinds-carts__about">Подробнее</a>
                    </div>
                    <div class="kinds__carts-item kinds-carts">
                        <div class="kinds-carts__image">
                            <img src="{{asset('/images/kinds4.png')}}" alt="kinds">
                        </div>
                        <h4 class="kinds-carts__title">Защитное покрытие</h4>
                        <p class="kinds-carts__text">Глубокая очистка и нанесение
                            защитного слоя полироли </p>
                        <p class="kinds-carts__time">Время работы: <span>8-12 часов</span></p>
                        <button class="kinds-carts__button--outline blue__button-outline">от 100 ₽/м²</button>
                        <button class="kinds-carts__button--filled button__blue">Рассчитать стоимость</button>
                        <a href="#!" class="kinds-carts__about">Подробнее</a>
                    </div>
                    <div class="kinds__carts-item kinds-carts">
                        <div class="kinds-carts__image">
                            <img src="{{asset('/images/kinds5.png')}}" alt="kinds">
                        </div>
                        <h4 class="kinds-carts__title">Экспресс уборка</h4>
                        <p class="kinds-carts__text">Срочная уборка с выездом
                            в течении часа</p>
                        <p class="kinds-carts__time">Время работы: <span>5-7 часов</span></p>
                        <button class="kinds-carts__button--outline blue__button-outline">от 150 ₽/м²</button>
                        <button class="kinds-carts__button--filled button__blue">Рассчитать стоимость</button>
                        <a href="#!" class="kinds-carts__about">Подробнее</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="additional">
            <div class="additional__container container">
                <div class="additional__block">
                    <span>Не нашли нужный вариант?</span>
                </div>
                <h1 class="additional__title">
                    Посмотрите дополнительные услуги
                </h1>
                <p class="additional__text">
                    Устраним любой каприз в уборке
                </p>
                <div class="additional__carts">
                    <div class="additional__carts-item additional-item">
                        <img src="{{asset('/images/additional1.png')}}" alt="additional">
                        <div class="additional-item-content">
                            <p>Мойка холодильника</p>
                            <span><span class="line"></span>600 ₽</span>
                        </div>
                    </div>
                    <div class="additional__carts-item additional-item">
                        <img src="{{asset('/images/additional2.png')}}" alt="additional">
                        <div class="additional-item-content">
                            <p>Мойка микроволновки</p>
                            <span><span class="line"></span>400 ₽</span>
                        </div>
                    </div>
                    <div class="additional__carts-item additional-item">
                        <img src="{{asset('/images/additional3.png')}}" alt="additional">
                        <div class="additional-item-content">
                            <p>Мойка варочной плиты</p>
                            <span><span class="line"></span>400 ₽</span>
                        </div>
                    </div>
                    <div class="additional__carts-item additional-item">
                        <img src="{{asset('/images/additional4.png')}}" alt="additional">
                        <div class="additional-item-content">
                            <p>Мойка духовки</p>
                            <span><span class="line"></span>500 ₽</span>
                        </div>
                    </div>
                    <div class="additional__carts-item additional-item">
                        <img src="{{asset('/images/additional5.png')}}" alt="additional">
                        <div class="additional-item-content">
                            <p>Мойка вытяжки</p>
                            <span><span class="line"></span>500 ₽</span>
                        </div>
                    </div>
                    <div class="additional__carts-item additional-item">
                        <img src="{{asset('/images/additional6.png')}}" alt="additional">
                        <div class="additional-item-content">
                            <p>Убраться на балконе</p>
                            <span><span class="line"></span>от 1000 ₽</span>
                        </div>
                    </div>
                    <div class="additional__carts-item additional-item">
                        <img src="{{asset('/images/additional7.png')}}" alt="additional">
                        <div class="additional-item-content">
                            <p>Мойка потолков</p>
                            <span><span class="line"></span>от 35 ₽/м²</span>
                        </div>
                    </div>
                    <div class="additional__carts-item additional-item">
                        <img src="{{asset('/images/additional8.png')}}" alt="additional">
                        <div class="additional-item-content">
                            <p>Мойка стен</p>
                            <span><span class="line"></span>50 ₽/м²</span>
                        </div>
                    </div>
                    <div class="additional__carts-item additional-item">
                        <img src="{{asset('/images/additional9.png')}}" alt="additional">
                        <div class="additional-item-content">
                            <p>Поменяем постельное</p>
                            <span><span class="line"></span>200 ₽</span>
                        </div>
                    </div>

                </div>
                <div class="additional__order">
                    <p>Закажите 3 дополнительные услуги <span>и получите четвёртую в подарок</span></p>
                    <button class="additional__order-button button__blue">Заказать уборку</button>
                </div>
            </div>
        </section>
        <section class="price">
            <div class="price__container container">
                <div class="price__item">
                    <h2 class="price__item-title">Хотите приценится?
                        Получите актуальный прайс-лист
                        <span>услуг всего в 1 клик</span>
                    </h2>
                    <span class="price__item-comfort">- Где вам удобнее получить?</span>
                    <div class="price__item-buttons">
                        <button class="price__item-button--telegram">
                            <img src="{{asset('/images/Telegram.svg')}}" alt="telegram">
                        </button>
                        <button class="price__item-button--whatsapp">
                            <img src="{{asset('/images/Whatsapp.svg')}}" alt="whatsapp">
                        </button>
                    </div>
                    <form action="#!" class="price__item-form">
                        <label for="phone" class="price__item-phone">
                            <input type="text" placeholder="Введите ваш телефон">
                        </label>
                        <span class="error">
                        Неверный номер телефона
                    </span>
                        <button class="price__item-button button__orange">Получить прайс</button>
                    </form>
                    <label id="policy" class="price__item-policy">
                        <input type="checkbox" name="policy">
                        <span>Нажимая на кнопку вы соглашаетесь с условиями <a
                                href="#!">Политики конфиденциальности</a></span>
                    </label>
                </div>
            </div>
        </section>
        <section class="cleaning">
            <div class="cleaning__container container">
                <h1 class="cleaning__title">
                    Посмотрите наглядно как мы делаем уборку
                </h1>
                <p class="cleaning__text">
                    Так выглядит уборка в глазах наших клинеров
                </p>
                <nav class="cleaning__nav">
                    <ul class="cleaning__list">
                        <li class="cleaning__list-item" data-button="1"><a href="#!" class="cleaning__list-link">Cпальная комната</a></li>
                        <li class="cleaning__list-item" data-button="2"><a href="#!" class="cleaning__list-link">Кухня</a></li>
                        <li class="cleaning__list-item" data-button="3"><a href="#!" class="cleaning__list-link">Ванная</a></li>
                        <li class="cleaning__list-item" data-button="4"><a href="#!" class="cleaning__list-link">Прихожая</a></li>
                    </ul>
                </nav>
                <div class="cleaning__tab" data-content="1">
                    Lorem Ipsum1 - это текст-"рыба", часто используемый в печати и вэб-дизайне.
                    Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века.
                    В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов,
                    используя Lorem Ipsum для распечатки образцов.
                    Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн.
                </div>
                <div class="cleaning__tab" data-content="2">
                    Lorem Ipsum2 - это текст-"рыба", часто используемый в печати и вэб-дизайне.
                    Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века.
                    В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов,
                    используя Lorem Ipsum для распечатки образцов.
                    Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн.
                </div>
                <div class="cleaning__tab" data-content="3">
                    Lorem Ipsum3 - это текст-"рыба", часто используемый в печати и вэб-дизайне.
                    Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века.
                    В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов,
                    используя Lorem Ipsum для распечатки образцов.
                    Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн.
                </div>
                <div class="cleaning__tab" data-content="4">
                    Lorem Ipsum4 - это текст-"рыба", часто используемый в печати и вэб-дизайне.
                    Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века.
                    В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов,
                    используя Lorem Ipsum для распечатки образцов.
                    Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн.
                </div>
                <div class="cleaning__image">
                    <img src="{{asset('/images/sleep.png')}}" alt="sleep">
                </div>
            </div>
        </section>
        <section class="complexity">
            <div class="complexity__container container">
                <h1 class="complexity__title">
                    Исполним уборку любой сложности
                </h1>
                <p class="complexity__text">Посмотрите как преображается квартира, даже в самых сложных ситуациях</p>
                <div class="swiper complexity__slider">
                    <div class="swiper-wrapper complexity__slider-wrapper">
                        <div class="swiper-slide complexity__slider-slide complexity-slide">
                            <div class="complexity-slide__img">
                                <img class="complexity-slide__img-before" src="{{asset('images/before.png')}}"
                                     alt="slider">
                                <img class="complexity-slide__img-after" src="{{asset('images/complexity-slider.png')}}"
                                     alt="slider">
                                <img class="complexity-slide__img-button" src="{{asset('images/slider.png')}}" alt="button">
                            </div>
                            <div class="complexity-slide__content">
                                <h3>Объект: однокомнатная квартира</h3>
                                <p>Пакет: <span>Генеральная уборка</span></p>
                                <p>Площадь:<span>32 м2:</span></p>
                                <p>Сложные загрязнения: <span>ржавчина, сильный налёт на ванне</span></p>
                                <p>Время работы: <span>4 часа</span></p>
                                <p>Бригада: <span>1 человека</span></p>
                                <button class="complexity-slide__button blue__button-outline">Стоимость: 3 456 ₽</button>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                        <div class="swiper-slide complexity__slider-slide complexity-slide">
                            <div class="complexity-slide__img">
                                <img class="complexity-slide__img-before" src="{{asset('images/before.png')}}"
                                     alt="slider">
                                <img class="complexity-slide__img-after" src="{{asset('images/complexity-slider.png')}}"
                                     alt="slider">
                                <img class="complexity-slide__img-button" src="{{asset('images/slider.png')}}" alt="button">
                            </div>
                            <div class="complexity-slide__content">
                                <h3>Объект: однокомнатная квартира</h3>
                                <p>Пакет: <span>Генеральная уборка</span></p>
                                <p>Площадь:<span>32 м2:</span></p>
                                <p>Сложные загрязнения: <span>ржавчина, сильный налёт на ванне</span></p>
                                <p>Время работы: <span>4 часа</span></p>
                                <p>Бригада: <span>1 человека</span></p>
                                <button class="complexity-slide__button blue__button-outline">Стоимость: 3 456 ₽</button>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                        <div class="swiper-slide complexity__slider-slide complexity-slide">
                            <div class="complexity-slide__img">
                                <img class="complexity-slide__img-before" src="{{asset('images/before.png')}}"
                                     alt="slider">
                                <img class="complexity-slide__img-after" src="{{asset('images/complexity-slider.png')}}"
                                     alt="slider">
                                <img class="complexity-slide__img-button" src="{{asset('images/slider.png')}}" alt="button">
                            </div>
                            <div class="complexity-slide__content">
                                <h3>Объект: однокомнатная квартира</h3>
                                <p>Пакет: <span>Генеральная уборка</span></p>
                                <p>Площадь:<span>32 м2:</span></p>
                                <p>Сложные загрязнения: <span>ржавчина, сильный налёт на ванне</span></p>
                                <p>Время работы: <span>4 часа</span></p>
                                <p>Бригада: <span>1 человека</span></p>
                                <button class="complexity-slide__button blue__button-outline">Стоимость: 3 456 ₽</button>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="complexity__slider-buttons">
                    <div class="complexity__slider-button complexity__slider-button--prev">
                        <img src="{{asset('images/arrow-left.png')}}" alt="prev">
                    </div>
                    <div class="complexity__slider-button complexity__slider-button--next">
                        <img src="{{asset('images/arrow-right.png')}}" alt="next">
                    </div>
                </div>
            </div>
        </section>
        <section class="calculation">
            <div class="calculation__container container">
                <h1 class="calculation__title">
                    Моментальный Рассчёт стоимости по фотографии
                </h1>
                <p class="calculation__text">
                    Пришлите фото в мессенджере, чтобы рассчитать стоимость, быстро заказать уборку или задать нам вопрос
                </p>
                <div class="calculation__block">
                    <p class="calculation__block-text">Кликните на удобный способ связи и напишите нам:</p>
                    <div class="calculation__block-buttons">
                        <button class="calculation__block-button calculation__block-button--telegram">
                            <svg width="32" height="27" viewBox="0 0 32 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12.5562 17.5752L12.0269 25.0205C12.7842 25.0205 13.1122 24.6952 13.5056 24.3045L17.0562 20.9112L24.4136 26.2992C25.7629 27.0512 26.7136 26.6552 27.0776 25.0579L31.9069 2.42854L31.9082 2.42721C32.3362 0.43254 31.1869 -0.347459 29.8722 0.141874L1.48557 11.0099C-0.451763 11.7619 -0.42243 12.8419 1.15624 13.3312L8.41357 15.5885L25.2709 5.04054C26.0642 4.51521 26.7856 4.80587 26.1922 5.33121L12.5562 17.5752Z"
                                    fill="white"/>
                            </svg>
                        </button>
                        <button class="calculation__block-button calculation__block-button--whatsapp">
                            <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M13.2079 0.0161927C5.81314 0.368289 -0.0223685 6.5267 6.44603e-05 13.9298C0.00689479 16.1846 0.551245 18.3129 1.51151 20.1934L0.0371625 27.35C-0.0425916 27.7371 0.306559 28.0761 0.691133 27.985L7.7038 26.3236C9.50547 27.2211 11.5291 27.7394 13.6708 27.7721C21.229 27.8875 27.5312 21.8862 27.7668 14.3308C28.0193 6.23199 21.3351 -0.370859 13.2079 0.0161927ZM21.5755 21.5756C19.5218 23.6293 16.7912 24.7603 13.8869 24.7603C12.1862 24.7603 10.5581 24.3788 9.04744 23.6263L8.07083 23.1398L3.77134 24.1585L4.67636 19.7651L4.19523 18.823C3.41101 17.2871 3.01338 15.6264 3.01338 13.8868C3.01338 10.9824 4.1444 8.25189 6.19812 6.19811C8.23349 4.16274 11.0086 3.0133 13.8871 3.0133C16.7914 3.01337 19.5219 4.14439 21.5756 6.19804C23.6293 8.25176 24.7603 10.9823 24.7604 13.8866C24.7603 16.7652 23.6109 19.5403 21.5755 21.5756Z"
                                    fill="white"/>
                                <path
                                    d="M20.6264 16.8982L17.9365 16.1259C17.5829 16.0243 17.2021 16.1247 16.9444 16.3872L16.2866 17.0574C16.0092 17.34 15.5884 17.4308 15.2213 17.2823C13.9488 16.7673 11.2721 14.3874 10.5886 13.197C10.3913 12.8536 10.424 12.4243 10.6661 12.111L11.2404 11.368C11.4654 11.0769 11.5129 10.686 11.3641 10.3495L10.2324 7.78991C9.9613 7.17686 9.17789 6.9984 8.66608 7.43126C7.91535 8.06621 7.02459 9.03109 6.91631 10.1C6.7254 11.9847 7.53365 14.3604 10.5901 17.2131C14.1211 20.5087 16.9487 20.9441 18.7898 20.4981C19.834 20.2452 20.6685 19.2313 21.1952 18.401C21.5543 17.835 21.2707 17.0832 20.6264 16.8982Z"
                                    fill="white"/>
                            </svg>
                        </button>
                    </div>
                    <div class="calculation__block-time">
                        <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M8.49998 1.37516C6.97335 1.37516 5.48101 1.82785 4.21167 2.676C2.94233 3.52415 1.953 4.72965 1.36878 6.14007C0.784568 7.55048 0.631711 9.10247 0.929541 10.5998C1.22737 12.097 1.96251 13.4724 3.042 14.5519C4.12148 15.6314 5.49683 16.3665 6.99412 16.6643C8.49142 16.9622 10.0434 16.8093 11.4538 16.2251C12.8642 15.6409 14.0697 14.6516 14.9179 13.3822C15.766 12.1129 16.2187 10.6205 16.2187 9.0939C16.2164 7.04749 15.4024 5.08556 13.9554 3.63853C12.5083 2.19149 10.5464 1.37751 8.49998 1.37516ZM8.49998 15.6252C7.20822 15.6252 5.94547 15.2421 4.87141 14.5244C3.79735 13.8068 2.96022 12.7867 2.46589 11.5933C1.97155 10.3999 1.84221 9.08666 2.09422 7.81972C2.34623 6.55278 2.96827 5.38903 3.88169 4.47561C4.7951 3.5622 5.95886 2.94016 7.22579 2.68815C8.49273 2.43614 9.80595 2.56548 10.9994 3.05982C12.1928 3.55415 13.2128 4.39128 13.9305 5.46534C14.6482 6.53939 15.0312 7.80214 15.0312 9.0939C15.0292 10.8255 14.3404 12.4855 13.116 13.7099C11.8916 14.9343 10.2315 15.6231 8.49998 15.6252ZM9.09373 4.70906V9.0939C9.09369 9.25136 9.03112 9.40236 8.91976 9.51369L6.72763 11.7064C6.67247 11.7616 6.60698 11.8053 6.5349 11.8352C6.46282 11.865 6.38557 11.8804 6.30756 11.8804C6.22954 11.8804 6.15229 11.865 6.08021 11.8352C6.00813 11.8053 5.94264 11.7616 5.88748 11.7064C5.83231 11.6512 5.78855 11.5857 5.7587 11.5137C5.72884 11.4416 5.71348 11.3643 5.71348 11.2863C5.71348 11.2083 5.72884 11.1311 5.7587 11.059C5.78855 10.9869 5.83231 10.9214 5.88748 10.8662L7.90623 8.8475V4.70906C7.90623 4.55159 7.96878 4.40057 8.08013 4.28922C8.19148 4.17787 8.34251 4.11531 8.49998 4.11531C8.65745 4.11531 8.80847 4.17787 8.91982 4.28922C9.03117 4.40057 9.09373 4.55159 9.09373 4.70906ZM16.6747 4.13016C16.5739 4.25105 16.4292 4.32697 16.2725 4.34123C16.1157 4.35548 15.9597 4.30689 15.8387 4.20616L12.2762 1.23741C12.1596 1.13535 12.0874 0.99171 12.0753 0.837184C12.0631 0.682659 12.1118 0.529497 12.211 0.41042C12.3103 0.291342 12.4521 0.21579 12.6063 0.199905C12.7605 0.18402 12.9148 0.229062 13.0362 0.325407L16.5987 3.29416C16.7196 3.39496 16.7955 3.53966 16.8098 3.69642C16.824 3.85319 16.7755 4.0092 16.6747 4.13016ZM0.781227 4.34391C0.659246 4.34385 0.540243 4.30623 0.440399 4.23615C0.340555 4.16608 0.264717 4.06695 0.223197 3.95225C0.181678 3.83756 0.176493 3.71285 0.208346 3.59511C0.240199 3.47736 0.307546 3.37228 0.401227 3.29416L3.96373 0.325407C4.08515 0.229062 4.23944 0.18402 4.39363 0.199905C4.54782 0.21579 4.68968 0.291342 4.78891 0.41042C4.88814 0.529497 4.93687 0.682659 4.92469 0.837184C4.91251 0.99171 4.84039 1.13535 4.72373 1.23741L1.16123 4.20616C1.05457 4.2951 0.920106 4.34384 0.781227 4.34391Z"
                                fill="#43AAFF"/>
                        </svg>
                        <span>Скорость ответа 60 секунд</span>
                    </div>
                </div>
            </div>
        </section>
        <section class="inventory">
            <div class="inventory__container container">
                <h1 class="inventory__title">
                    Что входит в инвентарь нашего клинера
                </h1>
                <p class="inventory__text">
                    Инструменты, с помощью которых
                    создаём уют в вашем доме
                </p>
                <div class="inventory__images">
                    <div class="inventory__images-items">
                        <div class="inventory__images-item inventory-item">
                            <img src="{{asset('/images/inventory1.png')}}" alt="inventory__images">
                            <h3 class="inventory-item__title">5 видов моющих средств</h3>
                            <p class="inventory-item__text">подходят для всех типов поверхностей, от паркета до кафеля</p>
                        </div>
                        <div class="inventory__images-item inventory-item">
                            <img src="{{asset('/images/inventory2.png')}}" alt="inventory__images">
                            <h3 class="inventory-item__title">Маски и перчатки</h3>
                            <p class="inventory-item__text">Соблюдаем меры санитарной безопасности</p>
                        </div>
                    </div>
                    <div class="inventory__images-main inventory-main">
                        <div class="inventory-main__image">
                            <img src="{{asset('/images/inventoryGirl.png')}}" alt="inventory__images">
                        </div>
                        <form action="#!" class="inventory-main__form">
                            <label for="phone" id="phone" class="inventory-main__content content-inventory">
                                <input name="phone" type="text" placeholder="Введите ваш телефон">
                            </label>
                            <span class="error">Неверный номер</span>
                            <button class="button__orange inventory-main__button">ЗАКЗАТЬ УБОРКУ</button>
                            <label id="policy" for="policy" class="content-inventory__checkbox">
                                <input name="policy" type="checkbox">
                                Нажимая на кнопку вы соглашаетесь с условиями Политики конфиденциальности
                            </label>
                        </form>
                    </div>
                    <div class="inventory__images-items">
                        <div class="inventory__images-item inventory-item">
                            <img src="{{asset('/images/inventory3.png')}}" alt="inventory__images">
                            <h3 class="inventory-item__title">8 видов оборудования</h3>
                            <p class="inventory-item__text">Профессиональная техника для создания чистоты на уровне
                                блеска</p>
                        </div>
                        <div class="inventory__images-item inventory-item">
                            <img src="{{asset('/images/inventory4.png')}}" alt="inventory__images">
                            <h3 class="inventory-item__title">Швабры и салфетки</h3>
                            <p class="inventory-item__text">Из различной ткани, для эффективной уборки всех типов
                                поверхностей</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="gift">
            <div class="gift__container container">
                <h1 class="gift__title">
                    Выберите подарок и закажите
                    бережную уборку, <span>без наценок
                и скрытых платежей</span>
                </h1>
                <div class="gift__items">
                    <div class="gift__item">
                        <svg width="70" height="71" viewBox="0 0 70 71" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="35" cy="35.0107" r="35" fill="#43AAFF"/>
                            <path
                                d="M54.0666 32.2866L52.435 30.27C52.0486 29.7955 51.8525 29.1943 51.885 28.5833L52.0133 25.9983C52.0583 25.0121 51.7673 24.0397 51.1878 23.2404C50.6083 22.4411 49.7747 21.8622 48.8233 21.5983L46.33 20.92C45.7366 20.7585 45.2219 20.3872 44.8816 19.875L43.47 17.7116C42.9282 16.8898 42.124 16.2756 41.1884 15.9693C40.2529 15.6631 39.2412 15.6827 38.3183 16.025L35.88 16.96C35.3139 17.18 34.686 17.18 34.12 16.96L31.7 16.025C30.7745 15.68 29.7594 15.659 28.8204 15.9654C27.8814 16.2717 27.074 16.8873 26.53 17.7116L25.1183 19.875C24.778 20.3872 24.2633 20.7585 23.67 20.92L21.1766 21.5983C20.2253 21.8622 19.3916 22.4411 18.8121 23.2404C18.2326 24.0397 17.9416 25.0121 17.9866 25.9983L18.115 28.5833C18.1474 29.1943 17.9513 29.7955 17.565 30.27L15.9333 32.2866C15.319 33.0576 14.9845 34.0142 14.9845 35C14.9845 35.9858 15.319 36.9423 15.9333 37.7133L17.565 39.73C17.9513 40.2044 18.1474 40.8056 18.115 41.4166L17.9866 44.0016C17.9416 44.9879 18.2326 45.9602 18.8121 46.7595C19.3916 47.5589 20.2253 48.1378 21.1766 48.4016L23.67 49.08C24.2633 49.2414 24.778 49.6128 25.1183 50.125L26.53 52.2883C27.0699 53.1122 27.874 53.728 28.8102 54.0345C29.7464 54.341 30.7589 54.32 31.6816 53.975L34.12 53.04C34.686 52.82 35.3139 52.82 35.88 53.04L38.3 53.975C39.2255 54.3199 40.2405 54.3409 41.1795 54.0346C42.1185 53.7283 42.9259 53.1127 43.47 52.2883L44.8816 50.125C45.2219 49.6128 45.7366 49.2414 46.33 49.08L48.8233 48.4016C49.7747 48.1378 50.6083 47.5589 51.1878 46.7595C51.7673 45.9602 52.0583 44.9879 52.0133 44.0016L51.885 41.4166C51.8525 40.8056 52.0486 40.2044 52.435 39.73L54.0666 37.7133C54.6809 36.9423 55.0154 35.9858 55.0154 35C55.0154 34.0142 54.6809 33.0576 54.0666 32.2866V32.2866ZM52.6366 36.5583L51.005 38.575C50.3394 39.4034 50.0003 40.4469 50.0516 41.5083L50.18 44.0933C50.2084 44.6608 50.0421 45.221 49.7087 45.6811C49.3753 46.1412 48.8948 46.4736 48.3466 46.6233L45.8533 47.3016C44.8239 47.5724 43.9339 48.2203 43.36 49.1167L41.93 51.28C41.6207 51.7572 41.1572 52.114 40.6167 52.2908C40.0762 52.4676 39.4915 52.4538 38.96 52.2516L36.54 51.335C35.5494 50.95 34.4505 50.95 33.46 51.335L31.04 52.2516C30.5087 52.4566 29.923 52.4719 29.3819 52.2948C28.8407 52.1178 28.3773 51.7593 28.07 51.28L26.64 49.1167C26.066 48.2203 25.176 47.5724 24.1466 47.3016L21.6533 46.6233C21.1052 46.4736 20.6246 46.1412 20.2912 45.6811C19.9578 45.221 19.7915 44.6608 19.82 44.0933L19.9483 41.5083C19.9996 40.4469 19.6605 39.4034 18.995 38.575L17.3633 36.5583C17.0073 36.1169 16.8132 35.567 16.8132 35C16.8132 34.433 17.0073 33.883 17.3633 33.4416L18.995 31.425C19.6605 30.5965 19.9996 29.5531 19.9483 28.4916L19.82 25.9066C19.7915 25.3392 19.9578 24.779 20.2912 24.3189C20.6246 23.8588 21.1052 23.5263 21.6533 23.3766L24.1466 22.6983C25.176 22.4275 26.066 21.7797 26.64 20.8833L28.07 18.72C28.2935 18.369 28.6026 18.0806 28.9682 17.8818C29.3337 17.683 29.7438 17.5803 30.16 17.5833C30.4608 17.5847 30.759 17.6406 31.04 17.7483L33.46 18.665C34.4494 19.0561 35.5505 19.0561 36.54 18.665L38.96 17.7483C39.4912 17.5433 40.0769 17.5281 40.618 17.7051C41.1592 17.8822 41.6226 18.2407 41.93 18.72L43.36 20.8833C43.9339 21.7797 44.8239 22.4275 45.8533 22.6983L48.3466 23.3766C48.8948 23.5263 49.3753 23.8588 49.7087 24.3189C50.0421 24.779 50.2084 25.3392 50.18 25.9066L50.0516 28.4916C50.0003 29.5531 50.3394 30.5965 51.005 31.425L52.6366 33.4416C52.9926 33.883 53.1867 34.433 53.1867 35C53.1867 35.567 52.9926 36.1169 52.6366 36.5583V36.5583Z"
                                fill="white"/>
                            <path
                                d="M42.4433 28.8584L28.8583 42.4434C28.6857 42.616 28.4516 42.7129 28.2075 42.7129C27.9634 42.7129 27.7292 42.616 27.5566 42.4434C27.384 42.2707 27.287 42.0366 27.287 41.7925C27.287 41.5484 27.384 41.3143 27.5566 41.1417L41.1416 27.5567C41.3142 27.3841 41.5484 27.2871 41.7925 27.2871C42.0366 27.2871 42.2707 27.3841 42.4433 27.5567C42.6159 27.7293 42.7129 27.9634 42.7129 28.2075C42.7129 28.4516 42.6159 28.6857 42.4433 28.8584V28.8584Z"
                                fill="white"/>
                            <path
                                d="M40.83 36.998C40.0721 36.998 39.3313 37.2228 38.7012 37.6438C38.0711 38.0648 37.58 38.6633 37.29 39.3634C37 40.0635 36.9241 40.834 37.0719 41.5772C37.2198 42.3205 37.5847 43.0032 38.1206 43.5391C38.6564 44.075 39.3392 44.4399 40.0824 44.5877C40.8257 44.7356 41.5961 44.6597 42.2963 44.3697C42.9964 44.0797 43.5948 43.5886 44.0159 42.9585C44.4369 42.3284 44.6616 41.5875 44.6616 40.8297C44.6568 39.815 44.2516 38.8432 43.534 38.1256C42.8165 37.4081 41.8447 37.0029 40.83 36.998V36.998ZM40.83 42.828C40.4347 42.828 40.0484 42.7108 39.7197 42.4913C39.3911 42.2717 39.135 41.9596 38.9837 41.5944C38.8325 41.2293 38.7929 40.8275 38.87 40.4399C38.9471 40.0522 39.1375 39.6961 39.4169 39.4167C39.6964 39.1372 40.0525 38.9469 40.4401 38.8698C40.8277 38.7927 41.2295 38.8322 41.5947 38.9835C41.9598 39.1347 42.2719 39.3909 42.4915 39.7195C42.7111 40.0481 42.8283 40.4345 42.8283 40.8297C42.8268 41.3593 42.6158 41.8667 42.2414 42.2411C41.8669 42.6156 41.3595 42.8266 40.83 42.828Z"
                                fill="white"/>
                            <path
                                d="M29.1699 25.3379C28.4121 25.3379 27.6713 25.5626 27.0412 25.9836C26.4111 26.4047 25.9199 27.0031 25.6299 27.7032C25.3399 28.4034 25.264 29.1738 25.4119 29.9171C25.5597 30.6603 25.9247 31.3431 26.4605 31.879C26.9964 32.4148 27.6791 32.7798 28.4224 32.9276C29.1657 33.0754 29.9361 32.9996 30.6362 32.7096C31.3364 32.4195 31.9348 31.9284 32.3558 31.2983C32.7769 30.6682 33.0016 29.9274 33.0016 29.1696C32.9968 28.1548 32.5915 27.183 31.874 26.4655C31.1565 25.748 30.1847 25.3427 29.1699 25.3379ZM29.1699 31.1679C28.7747 31.1679 28.3883 31.0507 28.0597 30.8311C27.7311 30.6115 27.475 30.2994 27.3237 29.9343C27.1725 29.5691 27.1329 29.1673 27.21 28.7797C27.2871 28.3921 27.4774 28.036 27.7569 27.7565C28.0364 27.477 28.3924 27.2867 28.7801 27.2096C29.1677 27.1325 29.5695 27.1721 29.9347 27.3233C30.2998 27.4746 30.6119 27.7307 30.8315 28.0593C31.0511 28.388 31.1683 28.7743 31.1683 29.1696C31.1668 29.6991 30.9558 30.2065 30.5814 30.581C30.2069 30.9554 29.6995 31.1664 29.1699 31.1679Z"
                                fill="white"/>
                        </svg>
                        <div class="gift__item-content">
                            <h4>Скидка 10% при первом заказе</h4>
                            <p>Действует на все пакеты услуг</p>
                            <button class="blue__button-outline">Получить подарок</button>
                        </div>
                    </div>
                    <div class="gift__item">
                        <svg width="70" height="70" viewBox="0 0 70 70" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="35" cy="35" r="35" fill="#43AAFF"/>
                            <g clip-path="url(#clip0_126_159)">
                                <path
                                    d="M47.5477 17H22.4523C19.4459 17 17 19.4459 17 22.4523V47.5477C17 50.5541 19.4459 53 22.4523 53H47.5477C50.5541 53 53 50.5541 53 47.5477V22.4523C53 19.4459 50.5541 17 47.5477 17ZM51.6556 47.5477C51.6556 49.8128 49.8128 51.6556 47.5477 51.6556H22.4523C20.1872 51.6556 18.3444 49.8128 18.3444 47.5477V22.4523C18.3444 20.1872 20.1872 18.3444 22.4523 18.3444H47.5477C49.8128 18.3444 51.6556 20.1872 51.6556 22.4523V47.5477ZM33.805 27.2324C33.805 27.6036 33.5041 27.9046 33.1328 27.9046C32.7615 27.9046 32.4606 27.6036 32.4606 27.2324C32.4606 24.3495 30.1152 22.0041 27.2324 22.0041C24.3495 22.0041 22.0041 24.3495 22.0041 27.2324C22.0041 31.7558 27.3723 34.1119 30.7098 31.1365C30.9869 30.8895 31.4119 30.9139 31.6589 31.1909C31.9059 31.468 31.8815 31.8929 31.6044 32.14C27.4084 35.8805 20.6598 32.9201 20.6598 27.2324C20.6598 23.6082 23.6082 20.6598 27.2324 20.6598C30.8565 20.6598 33.805 23.6082 33.805 27.2324ZM24.7676 27.2324C24.7676 28.5914 25.8733 29.6971 27.2324 29.6971C28.5914 29.6971 29.6971 28.5914 29.6971 27.2324C29.6971 25.8733 28.5914 24.7676 27.2324 24.7676C25.8733 24.7676 24.7676 25.8733 24.7676 27.2324ZM28.3527 27.2324C28.3527 27.8501 27.8501 28.3527 27.2324 28.3527C26.6146 28.3527 26.112 27.8501 26.112 27.2324C26.112 26.6146 26.6146 26.112 27.2324 26.112C27.8501 26.112 28.3527 26.6146 28.3527 27.2324ZM40.6017 27.2324C40.6017 28.5914 41.7074 29.6971 43.0664 29.6971C44.4254 29.6971 45.5311 28.5914 45.5311 27.2324C45.5311 25.8733 44.4254 24.7676 43.0664 24.7676C41.7074 24.7676 40.6017 25.8733 40.6017 27.2324ZM44.1867 27.2324C44.1867 27.8501 43.6841 28.3527 43.0664 28.3527C42.4486 28.3527 41.9461 27.8501 41.9461 27.2324C41.9461 26.6146 42.4486 26.112 43.0664 26.112C43.6841 26.112 44.1867 26.6146 44.1867 27.2324ZM48.0527 22.9502C51.6923 27.1847 48.6722 33.805 43.0664 33.805C39.4423 33.805 36.4938 30.8565 36.4938 27.2324C36.4938 23.6082 39.4423 20.6598 43.0664 20.6598C43.4377 20.6598 43.7386 20.9607 43.7386 21.332C43.7386 21.7032 43.4377 22.0041 43.0664 22.0041C40.1836 22.0041 37.8382 24.3495 37.8382 27.2324C37.8382 30.1152 40.1836 32.4606 43.0664 32.4606C47.5376 32.4606 49.9223 27.1878 47.0331 23.8264C46.7911 23.5448 46.8232 23.1204 47.1047 22.8785C47.3862 22.6365 47.8106 22.6686 48.0527 22.9502ZM27.2324 40.6017C25.8733 40.6017 24.7676 41.7074 24.7676 43.0664C24.7676 44.4254 25.8733 45.5311 27.2324 45.5311C28.5914 45.5311 29.6971 44.4254 29.6971 43.0664C29.6971 41.7074 28.5914 40.6017 27.2324 40.6017ZM27.2324 44.1867C26.6146 44.1867 26.112 43.6841 26.112 43.0664C26.112 42.4486 26.6146 41.9461 27.2324 41.9461C27.8501 41.9461 28.3527 42.4486 28.3527 43.0664C28.3527 43.6841 27.8501 44.1867 27.2324 44.1867ZM31.88 47.7139C31.6173 47.9764 31.1918 47.9764 30.9292 47.7139C30.6667 47.4514 30.6667 47.0258 30.9292 46.7633C34.2149 43.4776 31.8587 37.8382 27.2324 37.8382C24.3495 37.8382 22.0041 40.1836 22.0041 43.0664C22.0041 45.9492 24.3495 48.2946 27.2324 48.2946C27.6036 48.2946 27.9046 48.5955 27.9046 48.9668C27.9046 49.3381 27.6036 49.639 27.2324 49.639C23.6082 49.639 20.6598 46.6905 20.6598 43.0664C20.6598 39.4423 23.6082 36.4938 27.2324 36.4938C33.0514 36.4938 36.009 43.5848 31.88 47.7139ZM41.1245 45.3817C40.342 45.3817 39.7054 46.0183 39.7054 46.8008C39.7054 47.5833 40.342 48.2199 41.1245 48.2199C41.907 48.2199 42.5436 47.5833 42.5436 46.8008C42.5436 46.0183 41.907 45.3817 41.1245 45.3817ZM46.3527 45.3817C45.5702 45.3817 44.9336 46.0183 44.9336 46.8008C44.9336 47.5833 45.5702 48.2199 46.3527 48.2199C47.1352 48.2199 47.7718 47.5833 47.7718 46.8008C47.7718 46.0183 47.1352 45.3817 46.3527 45.3817ZM46.3527 40.1535C45.5702 40.1535 44.9336 40.7901 44.9336 41.5726C44.9336 42.3551 45.5702 42.9917 46.3527 42.9917C47.1352 42.9917 47.7718 42.3551 47.7718 41.5726C47.7718 40.7901 47.1352 40.1535 46.3527 40.1535Z"
                                    fill="white"/>
                            </g>
                            <defs>
                                <clipPath id="clip0_126_159">
                                    <rect width="36" height="36" fill="white" transform="translate(17 17)"/>
                                </clipPath>
                            </defs>
                        </svg>
                        <div class="gift__item-content">
                            <h4>Бесплатная мойка плиты</h4>
                            <p>При заказе в дневное время суток</p>
                            <button class="blue__button-outline">Получить подарок</button>
                        </div>
                    </div>
                    <div class="gift__item">
                        <svg width="70" height="71" viewBox="0 0 70 71" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="35" cy="35.0088" r="35" fill="#43AAFF"/>
                            <path
                                d="M57.1593 36.4235L55.8482 35.1124L56.3117 34.6489C56.57 34.3906 56.57 33.9735 56.3117 33.7152L55.8217 33.2252C54.3848 31.7883 52.1732 31.3844 50.3258 32.2187C49.7828 32.4571 49.2928 32.7948 48.8558 33.2252L43.3333 38.7477L41.3932 36.8075C41.135 36.5493 40.7178 36.5493 40.4596 36.8075L39.7577 37.5094L17.5951 15.3336C16.6946 14.4331 15.2312 14.4331 14.324 15.3336C13.4168 16.2341 13.4235 17.7041 14.324 18.6047L36.4932 40.7739L35.7913 41.4758C35.5331 41.734 35.5331 42.1512 35.7913 42.4094L37.7314 44.3496L32.209 49.872C31.7786 50.3024 31.4343 50.799 31.2025 51.3354C30.792 52.2492 30.6662 53.2556 30.8516 54.2423C31.0237 55.2289 31.4939 56.1294 32.209 56.8379L32.699 57.3279C32.8314 57.4604 32.997 57.52 33.1691 57.52C33.3413 57.52 33.5068 57.4538 33.6393 57.3279L34.1028 56.8644L35.4139 58.1755C35.5463 58.3079 35.7119 58.3675 35.884 58.3675C36.0562 58.3675 36.2217 58.3013 36.3541 58.1755L57.1659 37.3704C57.2917 37.2446 57.3579 37.079 57.3579 36.9002C57.3579 36.7214 57.2785 36.5427 57.1593 36.4235ZM15.2643 17.6644C14.8802 17.2804 14.8802 16.6513 15.2643 16.2673C15.4563 16.0819 15.7079 15.9825 15.9595 15.9825C16.2112 15.9825 16.4628 16.0819 16.6548 16.2739L38.824 38.4431L37.4268 39.8402L15.2643 17.6644ZM37.1951 41.9393L40.9297 38.2047L42.3997 39.6747L38.6651 43.4093L37.1951 41.9393ZM33.1427 55.8977C32.6262 55.3812 32.2818 54.7256 32.156 54.0039C32.0236 53.2821 32.1097 52.5405 32.4143 51.8717C32.5864 51.481 32.8314 51.1235 33.1493 50.8123L49.796 34.1655C50.1139 33.8477 50.4714 33.6027 50.8621 33.4305C51.3323 33.2186 51.8355 33.1127 52.3387 33.1127C53.279 33.1127 54.1994 33.4769 54.8881 34.1589L54.9146 34.1854L33.1691 55.9175L33.1427 55.8977ZM35.8774 56.7651L35.0364 55.9242L54.9079 36.0527L55.7489 36.8936L35.8774 56.7651Z"
                                fill="white"/>
                        </svg>
                        <div class="gift__item-content">
                            <h4>Мойка 2 окон бесплатно</h4>
                            <p>При заказе уборки после ремонта</p>
                            <button class="blue__button-outline">Получить подарок</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="certificates">
            <div class="certificates__container container">
                <h1 class="certificates__title">
                    Сертификаты
                </h1>
                <p class="certificates__text">
                    Моющий средства от проверенных производителей
                </p>
                <div class="certificates__slider swiper">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper certificates__slider-wrapper">
                        <div class="swiper-slide certificates__slider-slide">
                            <img src="{{asset('/images/certificates1.png')}}" alt="certificates">
                        </div>
                        <div class="swiper-slide certificates__slider-slide">
                            <img src="{{asset('/images/certificates2.png')}}" alt="certificates">
                        </div>
                        <div class="swiper-slide certificates__slider-slide">
                            <img src="{{asset('/images/certificates3.png')}}" alt="certificates">
                        </div>
                        <div class="swiper-slide certificates__slider-slide">
                            <img src="{{asset('/images/certificates1.png')}}" alt="certificates">
                        </div>
                        <div class="swiper-slide certificates__slider-slide">
                            <img src="{{asset('/images/certificates2.png')}}" alt="certificates">
                        </div>
                        <div class="swiper-slide certificates__slider-slide">
                            <img src="{{asset('/images/certificates3.png')}}" alt="certificates">
                        </div>
                    </div>
                </div>
                <div class="certificates__slider-buttons">
                    <div class="certificates__slider-button certificates__slider-button--prev">
                        <img src="{{asset('images/arrow-left.png')}}" alt="prev">
                    </div>
                    <div class="certificates__slider-button certificates__slider-button--next">
                        <img src="{{asset('images/arrow-right.png')}}" alt="next">
                    </div>
                </div>
                <div class="certificates__block">
                    <h2 class="certificates__block-title">Закажите уборку прямо
                        сейчас! <span>Выезд персонала
                    в течении часа</span></h2>
                    <button class="certificates__block-button button__orange">
                        Заказать уборку
                    </button>
                    <p class="certificates__block-text">
                        Или свяжитесь с нами напрямую:
                    </p>
                    <div class="certificates__block-buttons">
                        <button class="button-calculator__telegram">
                            <img src="{{asset('/images/Telegram.svg')}}" alt="telegram">
                        </button>
                        <button class="button-calculator__whatsapp">
                            <img src="{{asset('/images/Whatsapp.svg')}}" alt="whatsapp">
                        </button>
                    </div>
                    <div class="certificates__block-desc certificates-desc">
                        <p>8-800-700-60-50</p>
                        <p class="certificates-desc__Work">Пн-Вс: 9:00 - 21:00</p>
                    </div>
                </div>
                {{--  button-calculator__telegram--}}
            </div>
        </section>
        <section class="asks">
            <div class="asks__container container">
                <h1 class="asks__title">
                    Часто задаваемые вопросы
                </h1>
                <div class="asks__items">
                    <div class="asks__item-wrapper">
                        <div class="asks__item">
                            <p>Что нужно, чтобы подготовиться к уборке?</p>
                            <button>
                                <svg width="9" height="6" viewBox="0 0 9 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M4.91255 5.37577L8.49564 1.60423C8.72369 1.36431 8.72369 0.975328 8.49564 0.735528C8.2678 0.49571 7.89826 0.49571 7.67044 0.735528L4.49995 4.07276L1.32957 0.735625C1.10164 0.495806 0.732137 0.495806 0.504295 0.735625C0.27636 0.975444 0.27636 1.36441 0.504295 1.60432L4.08744 5.37587C4.20142 5.49578 4.35064 5.55566 4.49993 5.55566C4.6493 5.55566 4.79863 5.49566 4.91255 5.37577Z"
                                        fill="white"/>
                                </svg>
                            </button>
                        </div>
                        <div class="asks__item-content">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                                galley of type and scrambled it to make a type specimen book. It has survived not only
                                five centuries, but also the leap into electronic typesetting, remaining essentially
                                unchanged.</p>
                        </div>
                    </div>
                    <div class="asks__item-wrapper">
                        <div class="asks__item">
                            <p>Что нужно, чтобы подготовиться к уборке?</p>
                            <button>
                                <svg width="9" height="6" viewBox="0 0 9 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M4.91255 5.37577L8.49564 1.60423C8.72369 1.36431 8.72369 0.975328 8.49564 0.735528C8.2678 0.49571 7.89826 0.49571 7.67044 0.735528L4.49995 4.07276L1.32957 0.735625C1.10164 0.495806 0.732137 0.495806 0.504295 0.735625C0.27636 0.975444 0.27636 1.36441 0.504295 1.60432L4.08744 5.37587C4.20142 5.49578 4.35064 5.55566 4.49993 5.55566C4.6493 5.55566 4.79863 5.49566 4.91255 5.37577Z"
                                        fill="white"/>
                                </svg>
                            </button>
                        </div>
                        <div class="asks__item-content">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                                galley of type and scrambled it to make a type specimen book. It has survived not only
                                five centuries, but also the leap into electronic typesetting, remaining essentially
                                unchanged.</p>
                        </div>
                    </div>
                    <div class="asks__item-wrapper">
                        <div class="asks__item">
                            <p>Что нужно, чтобы подготовиться к уборке?</p>
                            <button>
                                <svg width="9" height="6" viewBox="0 0 9 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M4.91255 5.37577L8.49564 1.60423C8.72369 1.36431 8.72369 0.975328 8.49564 0.735528C8.2678 0.49571 7.89826 0.49571 7.67044 0.735528L4.49995 4.07276L1.32957 0.735625C1.10164 0.495806 0.732137 0.495806 0.504295 0.735625C0.27636 0.975444 0.27636 1.36441 0.504295 1.60432L4.08744 5.37587C4.20142 5.49578 4.35064 5.55566 4.49993 5.55566C4.6493 5.55566 4.79863 5.49566 4.91255 5.37577Z"
                                        fill="white"/>
                                </svg>
                            </button>
                        </div>
                        <div class="asks__item-content">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                                galley of type and scrambled it to make a type specimen book. It has survived not only
                                five centuries, but also the leap into electronic typesetting, remaining essentially
                                unchanged.</p>
                        </div>
                    </div>
                    <div class="asks__item-wrapper">
                        <div class="asks__item">
                            <p>Что нужно, чтобы подготовиться к уборке?</p>
                            <button>
                                <svg width="9" height="6" viewBox="0 0 9 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M4.91255 5.37577L8.49564 1.60423C8.72369 1.36431 8.72369 0.975328 8.49564 0.735528C8.2678 0.49571 7.89826 0.49571 7.67044 0.735528L4.49995 4.07276L1.32957 0.735625C1.10164 0.495806 0.732137 0.495806 0.504295 0.735625C0.27636 0.975444 0.27636 1.36441 0.504295 1.60432L4.08744 5.37587C4.20142 5.49578 4.35064 5.55566 4.49993 5.55566C4.6493 5.55566 4.79863 5.49566 4.91255 5.37577Z"
                                        fill="white"/>
                                </svg>
                            </button>
                        </div>
                        <div class="asks__item-content">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                                galley of type and scrambled it to make a type specimen book. It has survived not only
                                five centuries, but also the leap into electronic typesetting, remaining essentially
                                unchanged.</p>
                        </div>
                    </div>
                    <div class="asks__item-wrapper">
                        <div class="asks__item">
                            <p>Что нужно, чтобы подготовиться к уборке?</p>
                            <button>
                                <svg width="9" height="6" viewBox="0 0 9 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M4.91255 5.37577L8.49564 1.60423C8.72369 1.36431 8.72369 0.975328 8.49564 0.735528C8.2678 0.49571 7.89826 0.49571 7.67044 0.735528L4.49995 4.07276L1.32957 0.735625C1.10164 0.495806 0.732137 0.495806 0.504295 0.735625C0.27636 0.975444 0.27636 1.36441 0.504295 1.60432L4.08744 5.37587C4.20142 5.49578 4.35064 5.55566 4.49993 5.55566C4.6493 5.55566 4.79863 5.49566 4.91255 5.37577Z"
                                        fill="white"/>
                                </svg>
                            </button>
                        </div>
                        <div class="asks__item-content">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                                galley of type and scrambled it to make a type specimen book. It has survived not only
                                five centuries, but also the leap into electronic typesetting, remaining essentially
                                unchanged.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>
@include('components.footer')
@include('components.buttonUp')
@include('components.preloader')
@include('components.registerForm')
</body>
