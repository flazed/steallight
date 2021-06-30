@extends('main')

@section('styles')
    <link rel="stylesheet" href="/assets/css/pages/index.css">
@endsection

@section('scripts')

@endsection

@section('content')
    <h1 class="py-5 text-center d-block bg-white">Купить металлопрокат у поставщика  СтальЛайт</h1>
    <div class="section">
        <div class="section-info">
            <span class="section-info__title">Наша продукция</span>
            <span class="section-info__description">Нержавейка, изделия из нержавеющей стали и цветной металлопрокат</span>
            <span class="section-info__subdescription">Приоритетным направлением деятельности компании «СтальЛайт» является продажа нержавеющего металлопроката в г. Москве и Московской области. </span>
        </div>
        <div class="products mt-4 p-200">
            <div class="card">
                <img src="/assets/static/products/nerzhaveika.png" class="card-img-top">
                <div class="card-body">
                  <h5 class="card-title">Нержавейка</h5>
                  <ul class="card-text">
                      <li>Трубы</li>
                      <li>Листы</li>
                      <li>Круги (прутки)</li>
                      <li>Уголки</li>
                      <li>Квадраты</li>
                  </ul>
                  <a href="#" class="btn btn-orange">Показать еще</a>
                </div>
            </div>
            <div class="card">
                <img src="/assets/static/products/cink.png" class="card-img-top">
                <div class="card-body">
                  <h5 class="card-title">Оцинкованный прокат</h5>
                  <ul class="card-text">
                      <li>Трубы</li>
                      <li>Листы</li>
                      <li>Профнастил</li>
                      <li>Швеллер</li>
                      <li>Уголки</li>
                  </ul>
                  <a href="#" class="btn btn-orange">Показать еще</a>
                </div>
            </div>
            <div class="card">
                <img src="/assets/static/products/aluminiy.png" class="card-img-top">
                <div class="card-body">
                  <h5 class="card-title">Алюминий</h5>
                  <ul class="card-text">
                      <li>Круги (прутки)</li>
                      <li>Листы</li>
                      <li>Плиты</li>
                      <li>Трубы</li>
                      <li>Профнастил</li>
                  </ul>
                  <a href="#" class="btn btn-orange">Показать еще</a>
                </div>
            </div>
            <div class="card">
                <img src="/assets/static/products/med.png" class="card-img-top">
                <div class="card-body">
                  <h5 class="card-title">Медь</h5>
                  <ul class="card-text">
                      <li>Круги (прутки)</li>
                      <li>Трубы</li>
                      <li>Ленты</li>
                      <li>Шины</li>
                      <li>Листы</li>
                  </ul>
                  <a href="#" class="btn btn-orange">Показать еще</a>
                </div>
            </div>
            <div class="card">
                <img src="/assets/static/products/bronza.png" class="card-img-top">
                <div class="card-body">
                  <h5 class="card-title">Бронза</h5>
                  <ul class="card-text">
                      <li>Круги</li>
                      <li>Ленты</li>
                      <li>Трубы</li>
                      <li>Шестигранники</li>
                      <li>Втулки</li>
                  </ul>
                  <a href="#" class="btn btn-orange">Показать еще</a>
                </div>
            </div>
            <div class="card">
                <img src="/assets/static/products/latyn.png" class="card-img-top">
                <div class="card-body">
                  <h5 class="card-title">Латунь</h5>
                  <ul class="card-text">
                      <li>Круги</li>
                      <li>Ленты</li>
                      <li>Трубы</li>
                      <li>Шестигранники</li>
                      <li>Проволока</li>
                  </ul>
                  <a href="#" class="btn btn-orange">Показать еще</a>
                </div>
            </div>
            <div class="card">
                <img src="/assets/static/products/sortoviy.png" class="card-img-top">
                <div class="card-body">
                  <h5 class="card-title">Сортовый прокат</h5>
                  <ul class="card-text">
                      <li>Арматура</li>
                      <li>Шестигранники</li>
                      <li>Круги</li>
                      <li>Квадраты</li>
                      <li>Балки</li>
                  </ul>
                  <a href="#" class="btn btn-orange">Показать еще</a>
                </div>
            </div>
            <div class="card">
                <img src="/assets/static/products/listoviy.png" class="card-img-top">
                <div class="card-body">
                  <h5 class="card-title">Листовой прокат</h5>
                  <ul class="card-text">
                      <li>Холоднокатаный</li>
                      <li>Горячекатаный</li>
                      <li>Полимерный</li>
                      <li>Рифленый</li>
                      <li>Перфорированный</li>
                  </ul>
                  <a href="#" class="btn btn-orange">Показать еще</a>
                </div>
            </div>
            <div class="card">
                <img src="/assets/static/products/profnastil.png" class="card-img-top">
                <div class="card-body">
                  <h5 class="card-title">Профнастил</h5>
                  <ul class="card-text">
                      <li>Оцинкованный</li>
                      <li>Окрашенный</li>
                      <li>Несущий</li>
                      <li>Крвоельный</li>
                      <li>Стеновой</li>
                  </ul>
                  <a href="#" class="btn btn-orange">Показать еще</a>
                </div>
            </div>
            <div class="card">
                <img src="/assets/static/products/setka.png" class="card-img-top">
                <div class="card-body">
                  <h5 class="card-title">Сетка</h5>
                  <ul class="card-text">
                      <li>Сварная</li>
                      <li>Арматурная</li>
                      <li>ЦПВС</li>
                      <li>Тканная</li>
                      <li>Плетенная</li>
                  </ul>
                  <a href="#" class="btn btn-orange">Показать еще</a>
                </div>
            </div>
            <div class="card">
                <img src="/assets/static/products/steal.png" class="card-img-top">
                <div class="card-body">
                  <h5 class="card-title">Конструкционная сталь</h5>
                  <ul class="card-text">
                      <li>Круг</li>
                      <li>Квадрат</li>
                      <li>Шестигранник</li>
                      <li>Лист</li>
                      <li>Круг никелевый</li>
                  </ul>
                  <a href="#" class="btn btn-orange">Показать еще</a>
                </div>
            </div>
            <div class="card">
                <img src="/assets/static/products/steal2.png" class="card-img-top">
                <div class="card-body">
                  <h5 class="card-title">Инструментальная сталь</h5>
                  <ul class="card-text">
                      <li>Круги</li>
                      <li>Полосы</li>
                      <li>Квадраты</li>
                  </ul>
                  <a href="#" class="btn btn-orange">Показать еще</a>
                </div>
            </div>
        </div>
    </div>
    <div class="section relations">
        <div class="section-info w-100 p-200">
            <span class="section-info__title">Связь</span>
            <span class="section-info__description text-white">Есть какие-либо вопросы ?</span>
            <span class="section-info__subdescription fs-4">Вы можете задать их Нам прямо сейчас. Для этого Вам необходимо позвонить по телефону:</span>
            <span class="section-info__title mt-5 phone">+7(925)-652-68-18</span>
        </div>
    </div>
    <div class="section buyers p-200">
        <div class="section-info">
            <span class="section-info__title">У нас покупают</span>
            <span class="section-info__description">Железное превосходство</span>
        </div>
        <div class="companies">
            <div><img src="/assets/static/buyers/client1.png"></div>
            <div><img src="/assets/static/buyers/client2.png"></div>
            <div><img src="/assets/static/buyers/client4.png"></div>
            <div><img src="/assets/static/buyers/client5.png"></div>
            <div><img src="/assets/static/buyers/client3.png"></div>
        </div>
    </div>
    <div class="section advantage p-200">
        <div class="section-info w-100">
            <span class="section-info__title">Наши преимущества</span>
            <span class="section-info__description text-white">Как они могут понять, что теряют, не видя преимуществ</span>
        </div>
        <div class="advantages">
            <div>
                <img src="/assets/static/advantages/plus1.png">
                <span class="description">5 лет на рынке</span>
            </div>
            <div>
                <img src="/assets/static/advantages/plus2.png">
                <span class="description">Большой выбор товаров</span>
            </div>
            <div>
                <img src="/assets/static/advantages/plus3.png">
                <span class="description">Быстрая доставка</span>
            </div>
            <div>
                <img src="/assets/static/advantages/plus4.png">
                <span class="description">Отзывчивая поддержка</span>
            </div>
            <div>
                <img src="/assets/static/advantages/plus5.png">
                <span class="description">Система скидок и отсрочки</span>
            </div>
            <div>
                <img src="/assets/static/advantages/plus6.png">
                <span class="description">Принимаем любой вид оплат</span>
            </div>
            <div>
                <img src="/assets/static/advantages/plus7.png">
                <span class="description">Контроль качества</span>
            </div>
            <div>
                <img src="/assets/static/advantages/plus8.png">
                <span class="description">Возврат средств</span>
            </div>
        </div>
    </div>
    <div class="section stock p-200">
        <div class="section-info w-100">
            <span class="section-info__title">Наш склад</span>
            <span class="section-info__description">Площадь Вашего успеха</span>
        </div>
        <div class="stocks mx-auto">
            <div><img src="/assets/static/stocks/stock1.png"></div>
            <div><img src="/assets/static/stocks/stock2.png"></div>
            <div><img src="/assets/static/stocks/stock3.png"></div>
        </div>
    </div>
    <div class="section feedbacks p-200">
        <div class="section-info w-100">
            <span class="section-info__title">Отзывы</span>
            <span class="section-info__description">Отзыв - это главное в коммуникациях</span>
        </div>
        <div class="swiper-container-feedbacks mt-4">
            <div class="swiper-wrapper d-flex juctify-content-between">
              <div class="swiper-slide">
                <div class="card w-75">
                    <div class="card-body bg-light">
                        <h4 class="card-title line-orange">ОАО АгроКОМ</h4>
                        <p class="card-text mt-4">Очень доволены услугами “Стальлайт”, обращаемся в пятый раз. Еще не давали повода соскочить и поменять свое решение, изменить в пользу другой фирмы. Лучше мы не встречали - это раз. Опрятно, современно - два. Уровень сервиса - не о чем и говорить. Если надо, все сделают за вас. Причем на цене особо не отражается.</p>
                    </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="card w-75">
                    <div class="card-body bg-light">
                        <h4 class="card-title line-orange">ООО ДАЙМОНД</h4>
                        <p class="card-text mt-4">Скажем честно, мы - фирма относительно молодая, мало с кем работали. По нашему опыту компания “Стальлайт” - лучший вариант с точки зрения цен и ассортимента металлопроката. В плане сервиса тоже довольны. Мы благодарим сотрудников ООО «Стальлайт» за профессионально оказанную помощь и надеемся на продолжение сотрудничества.</p>
                    </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="card w-75">
                    <div class="card-body bg-light">
                        <h4 class="card-title line-orange">ОАО АгроКОМ</h4>
                        <p class="card-text mt-4">Очень доволены услугами “Стальлайт”, обращаемся в пятый раз. Еще не давали повода соскочить и поменять свое решение, изменить в пользу другой фирмы. Лучше мы не встречали - это раз. Опрятно, современно - два. Уровень сервиса - не о чем и говорить. Если надо, все сделают за вас. Причем на цене особо не отражается.</p>
                    </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="card w-75">
                    <div class="card-body bg-light">
                        <h4 class="card-title line-orange">ООО ДАЙМОНД</h4>
                        <p class="card-text mt-4">Скажем честно, мы - фирма относительно молодая, мало с кем работали. По нашему опыту компания “Стальлайт” - лучший вариант с точки зрения цен и ассортимента металлопроката. В плане сервиса тоже довольны. Мы благодарим сотрудников ООО «Стальлайт» за профессионально оказанную помощь и надеемся на продолжение сотрудничества.</p>
                    </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="card w-75">
                    <div class="card-body bg-light">
                        <h4 class="card-title line-orange">ОАО АгроКОМ</h4>
                        <p class="card-text mt-4">Очень доволены услугами “Стальлайт”, обращаемся в пятый раз. Еще не давали повода соскочить и поменять свое решение, изменить в пользу другой фирмы. Лучше мы не встречали - это раз. Опрятно, современно - два. Уровень сервиса - не о чем и говорить. Если надо, все сделают за вас. Причем на цене особо не отражается.</p>
                    </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="card w-75">
                    <div class="card-body bg-light">
                        <h4 class="card-title line-orange">ООО ДАЙМОНД</h4>
                        <p class="card-text mt-4">Скажем честно, мы - фирма относительно молодая, мало с кем работали. По нашему опыту компания “Стальлайт” - лучший вариант с точки зрения цен и ассортимента металлопроката. В плане сервиса тоже довольны. Мы благодарим сотрудников ООО «Стальлайт» за профессионально оказанную помощь и надеемся на продолжение сотрудничества.</p>
                    </div>
                </div>
              </div>
            </div>
            <div class="swiper-pagination-feedbacks mt-5"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
    <div class="section services d-flex p-200">
        <img src="/assets/static/img/services.png">
        <div class="section-info w-100 text-left">
            <span class="section-info__title text-left">Услуги</span>
            <span class="section-info__description text-left">Услуги обработки металла и изготовления металлоконструкций</span>
            <p class="mt-4">Современное оборудование позволяет быстро и качественно осуществлять полный комплекс работ с листовым металлом – продольную/поперечную резку, рубку, гибку, перфорирование, профилирование. По специальному заказу производится комплектация строительных объектов, производство металлоизделий любой конфигурации (каркасов, колонн, опор ЛЭП, фахверков, прогонов, балок, стропильных ферм, закладных деталей).</p>
            <p>На всех этапах производства применяются современные методы обработки металла – резка, гибка, перфорирование. При необходимости производятся слесарные, сварочные работы. Для защиты от коррозии, воздействия агрессивных сред, увеличения срока службы изделий из металла осуществляется пескоструйная обработка, нанесение на их поверхность цинкового или полимерного покрытия, порошковой краски.</p>
            <p>Оформление и выполнение заказов производится в сервисном металлоцентре. Производственная база предприятия – это современное оборудование, высокая квалификация исполнителей, быстрое исполнение заказов, доступные цены.</p>
        </div>
    </div>
@endsection
