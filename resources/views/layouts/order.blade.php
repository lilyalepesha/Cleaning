<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('/dist/css/app/app.css')}}">
    <script src="{{asset('/dist/js/app/app.js')}}"></script>
    <title>Order</title>
</head>
<body>
@include('components.header')
<main class="main">
    <section class="thanks">
        <div class="thanks__container container">
            <h1 class="thanks__title">
                Благодарим за заявку! <span> Чтобы закрепить 10% скидку, назовите
                менеджеру промокод «save10»</span>
            </h1>
            <p class="thanks__text">
                Пока вы ожидаете ответа менеджера, можете
                перейти в наш Whats’App и получить книгу Мари
                Кондо “Магическая уборка” в бумажном переплёте
            </p>
            <div class="thanks__buttons">
                <div class="thanks__buttons-list">
                    <button class="thanks__button button__green">Перейти в whats’ <span>и получить бонус</span></button>
                    <ul>
                        <li>Секреты уборки и домашнего уюта</li>
                        <li>Полезные советы и лайфхаки</li>
                        <li>Честный обзор на моющие ср-ва</li>
                    </ul>
                </div>
                <button class="thanks__button button__orange">вернуться на сайт</button>
            </div>

        </div>
    </section>
</main>
@include('components.footer')
@include('components.buttonUp')
@include('components.preloader')
</body>
</html>
