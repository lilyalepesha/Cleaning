<header class="header">
    <div class="header__container container">
        <div class="header__logo logo">
            <img src="{{asset('/images/Logo.svg')}}" alt="Logo">
            <div class="logo__text">
                    <span class="logo__title">
                    Soft Clean
                </span>
                <span class="logo__desc">
                    Бережная уборка помещений СПБ
                </span>
            </div>
        </div>
        <div class="header__contacts contacts">
            <div class="contacts__phone phone__contacts">
                <span class="phone__contacts-title">8-800-700-60-50</span>
                <span class="phone__contacts-work">Пн-Вс: 9:00 - 21:00</span>
            </div>
            <div class="contacts__socials">
                <span class="contacts__socials-text">Быстрая связь с нами в мессенджерах:</span>
                <img src="{{asset('/images/Telegram.svg')}}" alt="telegram">
                <img src="{{asset('/images/Whatsapp.svg')}}" alt="whatsapp">
            </div>
            <button class="contacts__button blue__button-outline">Заказать консультацию</button>
            <button class="icon__menu">
                <span></span>
                <span></span>
                <span></span>
            </button>
            @can('isAdmin')
                <a class="admin__link" href="{{route('admin.index')}}">Админ панель</a>
            @endcan
            <ul class="header__tab-list">
                <li class="header__tab-list__item"><a href="#!" class="header__tab-list__link">Услуги</a></li>
                <li class="header__tab-list__item"><a href="#!" class="header__tab-list__link">Рассчитать стоимость</a>
                </li>
                <li class="header__tab-list__item"><a href="#!" class="header__tab-list__link">Почему мы</a></li>
                <li class="header__tab-list__item"><a href="#!" class="header__tab-list__link">Как мы делаем уборку</a>
                </li>
                <li class="header__tab-list__item"><a href="#!" class="header__tab-list__link">Отзывы</a></li>
                <li class="header__tab-list__item"><a href="#!" class="header__tab-list__link">Акции</a></li>
            </ul>
        </div>
    </div>
</header>
