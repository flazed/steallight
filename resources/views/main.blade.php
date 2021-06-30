<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="/assets/static/logo/logo.svg" type="image/x-icon">
    <link rel="stylesheet" href="/assets/css/main.css">
    <link rel="stylesheet" href="/assets/css/somes.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    @yield('styles')
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="/assets/js/swiper-slider.js" defer></script>
    <script src="/assets/js/burger.js" defer></script>
    @yield('scripts')
    <title>СтальЛайт</title>
</head>
<body>
    <header>
        <div class="head d-flex justify-content-between align-items-center">
            <div class="logo d-flex">
                <svg width="50" height="50" viewBox="0 0 50 50" xmlns="http://www.w3.org/2000/svg">
                    <use xlink:href="/assets/static/logo/logo.svg#logo"></use>
                </svg>
                СтальЛайт
            </div>
            <div class="contacts d-flex flex-column">
                <a href="tel: 9256526818">+7(925)-652-68-18</a>
                <a href="mailto: stallait@yandex.ru">stallait@yandex.ru</a>
            </div>
            <div class="burger-icon">
                <div class="burger-container">
                    <span class="burger-top"></span>
                    <span class="burger-center"></span>
                    <span class="burger-bottom"></span>
                </div>
            </div>
        </div>
        <div class="menu">
            <nav class="w-100 links">
                <a href="#">О компании</a>
                <a href="#">Продукция</a>
                <a href="#">Услуги</a>
                <a href="#">Прайс</a>
                <a href="#">Оплата и доставка</a>
                <a href="#">Спецпредложения</a>
                <a href="#">Контакты</a>
            </nav>
        </div>
    </header>
    <main>
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <h1 class="line-orange">Мы придерживаемся железных правил</h1>
                    <h3>Сталь - наш профиль</h3>
                    <img src="/assets/static/slider/slide1.png">
                </div>
                <div class="swiper-slide">
                    <h1 class="line-orange">Мы придерживаемся железных правил</h1>
                    <h3>Сталь - наш профиль</h3>
                    <img src="/assets/static/slider/slide1.png">
                </div>
                <div class="swiper-slide">
                    <h1 class="line-orange">Мы придерживаемся железных правил</h1>
                    <h3>Сталь - наш профиль</h3>
                    <img src="/assets/static/slider/slide1.png">
                </div>
                <div class="swiper-slide">
                    <h1 class="line-orange">Мы придерживаемся железных правил</h1>
                    <h3>Сталь - наш профиль</h3>
                    <img src="/assets/static/slider/slide1.png">
                </div>
                <div class="swiper-slide">
                    <h1 class="line-orange">Мы придерживаемся железных правил</h1>
                    <h3>Сталь - наш профиль</h3>
                    <img src="/assets/static/slider/slide1.png">
                </div>
            </div>
            <div class="swiper-pagination main-pagintaion"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
        @yield('content')
    </main>
    <footer class="p-200">
        <div class="block align-items-center">
            <span class="title line-orange">Вы можете связаться с Нами и заказать нашу продукцию прямо сейчас</span>
            <button class="btn btn-orange px-5">Связаться</button>
        </div>
        <div class="block">
            <div class="contacts-info">
                <h3 class="text-white">КОНТАКТНАЯ ИНФОРМАЦИЯ</h3>
                <div class="contacts">
                    <div>
                        <span class="contacts-title">Почта:</span>
                        <a href="mailto: stallait@yandex.ru">stallait@yandex.ru</a>
                    </div>
                    <div>
                        <span class="contacts-title">Телефон:</span>
                        <a href="tel: 9256526818">+7(925)-652-68-18</a>
                    </div>
                    <div>
                        <span class="contacts-title">ПН-ПТ:</span>
                        <span>10:00 - 19:00</span>
                    </div>
                    <div>
                        <span class="contacts-title">Адрес:</span>
                        <span>141313,Московская область, г. Сергиев Посад, ул.Железнодорожная, д.16,пом.306</span>
                    </div>
                </div>
            </div>
            <nav class="d-flex flex-column links align-items-end">
                <span>Навигация</span>
                <div class="nav-items d-flex flex-column align-items-end">
                    <a href="#">О компании</a>
                    <a href="#">Продукция</a>
                    <a href="#">Услуги</a>
                    <a href="#">Прайс</a>
                    <a href="#">Оплата и доставка</a>
                    <a href="#">Спецпредложения</a>
                    <a href="#">Контакты</a>
                </div>
            </nav>
        </div>
        <div class="block align-items-center">
            <span class="copyright">Все права защищены ©  2019 - @php echo date('Y') @endphp </span>
            <div class="socials">
                <a href="#"><i class="fab fa-vk"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </footer>
</body>
</html>
