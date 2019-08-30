<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>DevelopeRaul</title>
</head>
<body>
    <nav class="navbar" >
        <div class="container">
            <div class="navbar-block">
                <span class="navbar__logo">
                    DevelopeRaul
                </span> <!-- /.navbar__logo -->
                <div class="navbar__icon">
                    <span class="navbar__line line__none"></span>
                </div>
                <ul class="navbar-list">
                    <li class="navbar-list__item">
                        <a href="#1" class="navbar-list__link">главная</a>
                    </li>
                    <li class="navbar-list__item">
                        <a href="#2" class="navbar-list__link">услуги</a>
                    </li>
                    <li class="navbar-list__item">
                        <a href="#3" class="navbar-list__link">преимущества</a>
                    </li>
                    <li class="navbar-list__item">
                        <a href="#4" class="navbar-list__link">портфолио</a>
                    </li>
                    <li class="navbar-list__item">
                        <a href="#5" class="navbar-list__link">прайс</a>
                    </li>
                    <li class="navbar-list__item">
                        <a href="#6" class="navbar-list__link">написать</a>
                    </li>
                </ul>
                <!-- /.navbar-list -->
                
                <span class="navbar__phone">
                    +7 (961) 363 90 44
                </span> <!-- /.navbar__phone -->
            </div>
            <!-- /.navbar-block -->
        </div>
        <!-- /.container -->
    </nav>
    <div class="modal" data-modal>
        <div class="form-container call-form modal-content">
            <a  class="close-icon" data-modal="close-modal"></a>
            <div class="note"></div>
                <div class="fields">
                <form class="ajax-contact-form form" action="">
                <input type="text" name="name" class="form__name input" placeholder="Имя">
                    <input type="email" name="email" class="form__email input" placeholder="E-mail">
                    <textarea name="message" cols="30" rows="10" class="form__message input" placeholder="Сообщение"></textarea>
                    <button  type="submit" name="submit"  class="btn form__btn form-container__btn"><span class="btn-text">
                            Отправить сообщение
                    </span></button>
                </form>
            </div>
        </div>
       
        </div><!-- .modal-content -->
    </div>
    
    <!-- /#myModal.reveal-modal -->
    <!-- /.navbar -->
    <header class="header" id="1">
        <div class="container">
            <div class="header-block">
                <h1 class="header__title">
                    Создание сайтов под ключ
                </h1>
                <span class="header__subtitle">от дизайна до админки</span>
                <button  role="button" data-modal="open-modal" class="btn btn-danger">
                    <span class="btn-text">
                        Заказать сайт
                    </span>
                </button>
            
            </div>
            <!-- /.header-block -->
        </div>
        <!-- /.container -->
    </header>
    <!-- /.header -->
    <section class="services" id="2">
        <div class="container">
            <h2 class="section-title services__title">
                Услуги
            </h2>
            <div class="services-block">
                <div class="services-block__item">
                    <div class="services-block__logo">
                        <img src="image/services/ps.png" alt="code" class="services__img">
                    </div>
                    <h3 class="services-block__title">Веб дизайн</h3>
                    <span class="services-block__subtitle">
                        Этап создания визуального образа сайта на основе собранных данных и составление ТЗ для верстки
                    </span>
                </div>
                <div class="services-block__item">
                    <div class="services-block__logo">
                        <img src="image/services/code.png" alt="code" class="services__img">
                    </div>
                    <h3 class="services-block__title">Верстка</h3>
                    <span class="services-block__subtitle">
                        Этап при котором дизайн макет переходит в программный код
                    </span>
                </div>
                <div class="services-block__item">
                    <div class="services-block__logo">
                        <img src="image/services/settings.png" alt="settings" class="services__img">
                    </div>
                    <h3 class="services-block__title">CMS</h3>
                    <span class="services-block__subtitle">
                        Этап посадки верстки на систему управления контентом Wordpress или MODX
                    </span>
                </div>
            </div>
            <!-- /.services-block -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /.services -->
    <section class="advantages" id="3">
        <div class="container">
            <h2 class="section-title advantages__title">Преимущества работы со мной</h2>
            <div class="advantages-block m-t">
                <div class="advantages-block__item">
                    <div class="advantages-block__logo">
                        <img src="image/advantages/fingerprint.png" alt="" class="advantages-block__img">
                    </div>
                    <div class="advantages-block__text">
                        <h3 class="advantages-block__title">Индивидуальный подход</h3>
                        <span class="advantages-block__subtitle">Быстро устраню любую проблему всегда на связи никуда не пропадаю</span>
                    </div>
                </div>
                <div class="advantages-block__item">
                    <div class="advantages-block__logo"><img src="image/advantages/price.png" alt="" class="advantages-block__img"></div>
                    <div class="advantages-block__text">
                        <h3 class="advantages-block__title">Актуальные цены</h3>
                        <span class="advantages-block__subtitle">
                                Быстро устраню любую
                                проблему всегда на связи
                                никуда не пропадаю
                        </span>
                    </div>
                </div>
            </div>
            <div class="advantages-block">
                <div class="advantages-block__item">
                    <div class="advantages-block__logo"><img src="image/advantages/smartphone.png" alt="" class="advantages-block__img"></div>
                    <div class="advantages-block__text">
                        <h3 class="advantages-block__title">Современная техника</h3>
                        <span class="advantages-block__subtitle">
                                Быстро устраню любую
                                проблему всегда на связи
                                никуда не пропадаю
                        </span>
                    </div>
                </div>
                <div class="advantages-block__item">
                    <div class="advantages-block__logo"><img src="image/advantages/map.png" alt="" class="advantages-block__img"></div>
                    <div class="advantages-block__text">
                        <h3 class="advantages-block__title">Руководство</h3>
                        <span class="advantages-block__subtitle">
                                Быстро устраню любую
                                проблему всегда на связи
                                никуда не пропадаю
                        </span>
                    </div>
                </div>
            </div>
            <div class="advantages-block">  
                    <div class="advantages-block__item">
                            <div class="advantages-block__logo"><img src="image/advantages/support.png" alt="" class="advantages-block__img"></div>
                            <div class="advantages-block__text">
                                <h3 class="advantages-block__title">Поддержка</h3>
                                <span class="advantages-block__subtitle">
                                        Быстро устраню любую
                                        проблему всегда на связи
                                        никуда не пропадаю
                                </span>
                            </div>
                        </div>
                        <div class="advantages-block__item">
                            <div class="advantages-block__logo"><img src="image/advantages/code.png" alt="" class="advantages-block__img"></div>
                            <div class="advantages-block__text">
                                <h3 class="advantages-block__title">Чистыйкод</h3>
                                <span class="advantages-block__subtitle">
                                        Быстро устраню любую
                                        проблему всегда на связи
                                        никуда не пропадаю
                                </span>
                            </div>
                        </div>
            </div>
                
                
                
            
            
        </div>
        <!-- /.container -->
    </section>
    <!-- /.advantages -->
    <section class="work" id="4">
        <div class="container">
            <h2 class="section-title work__title">Мои последние работы</h2>
            <div class="slider work-block">
                <div class="slider-item work-block__item">
                    <div class="work-block__img">img</div>
                    <div class="work-block__title">Landing</div>
                    <button class="btn"><span class="btn-text">Смотреть <span class="btn-text_768">работу</span></span></button>
                </div>
                <div class="slider-item work-block__item">
                    <div class="work-block__img">img</div>
                    <div class="work-block__title">Landing</div>
                    <button class="btn"><span class="btn-text">Смотреть <span class="btn-text_768">работу</span></span></button>
                </div>
                <div class="slider-item work-block__item">
                    <div class="work-block__img">img</div>
                    <div class="work-block__title">Landing</div>
                    <button class="btn"><span class="btn-text">Смотреть <span class="btn-text_768">работу</span></span></button>
                </div>
                <div class="slider-item work-block__item">
                    <div class="work-block__img">img</div>
                    <div class="work-block__title">Landing</div>
                    <button class="btn"><span class="btn-text">Смотреть <span class="btn-text_768">работу</span></span></button>
                </div>
                <div class="slider-item work-block__item">
                    <div class="work-block__img">img</div>
                    <div class="work-block__title">Landing</div>
                    <button class="btn"><span class="btn-text">Смотреть <span class="btn-text_768">работу</span></span></button>
                </div>
                <div class="slider-item work-block__item">
                    <div class="work-block__img">img</div>
                    <div class="work-block__title">Landing</div>
                    <button class="btn"><span class="btn-text">Смотреть <span class="btn-text_768">работу</span></span></button>
                </div>
            </div>
            <div class="arrows portfolio__arrows">
                    <div class="arrows__left">
                      <img src="img/left-arrow.png" alt="">
                    </div>
                    <div class="arrows__right">
                      <img src="img/right-arrow.png" alt="">
                    </div>
            </div>
        </div>
        <!-- /.container -->
    </section>
    <!-- /.work -->
    <section class="price" id="5">
        <div class="container">
            <h2 class="section-title price__title">Прайс</h2>
            <ul class="price-list">
                <li class="price-list__item"><a href="#" class="price-list__link">Дизайн</a></li>
                <li class="price-list__item"><a href="#" class="price-list__link">Landing page</a></li>
                <li class="price-list__item"><a href="#" class="price-list__link">Wordpress</a></li>
            </ul>
            <div class="price-block">
                <div class="price-block__name">
                    <ul class="price-block__list">
                        <li class="price-block__item">Название</li>
                        <li class="price-block__item">Простой блок</li>
                        <li class="price-block__item">Сложный блок</li>
                        <li class="price-block__item">Слайдер</li>
                        <li class="price-block__item">Модальное окно</li>
                        <li class="price-block__item">ИНтерактивный</li>
                        <li class="price-block__item">Адаптация под планшет</li>
                        <li class="price-block__item">Адаптация под мобильный</li>
                    </ul>
                </div>
                <!-- /.price-block__name -->
                <div class="price-block__calc">
                    <ul class="price-block__list">
                            <li class="price-block__item p_0">
                                шт
                            </li>
                            <li class="price-block__item">
                                <button class="price-btn price-min"></button>
                                <span class="price__count">0</span>
                                <button class="price-btn price-plus"></button>
                            </li>
                            <li class="price-block__item">
                                <button class="price-btn price-min"></button>
                                <span class="price__count">0</span>
                                <button class="price-btn price-plus"></button>
                            </li>
                            <li class="price-block__item">
                                <button class="price-btn price-min"></button>
                                <span class="price__count">0</span>
                                <button class="price-btn price-plus"></button>
                            </li>
                            <li class="price-block__item">
                                <button class="price-btn price-min"></button>
                                <span class="price__count">0</span>
                                <button class="price-btn price-plus"></button>
                            </li>
                            <li class="price-block__item">
                                <button class="price-btn price-min"></button>
                                <span class="price__count">0</span>
                                <button class="price-btn price-plus"></button>
                            </li>
                            <li class="price-block__item">
                                <button class="price-btn price-min"></button>
                                <span class="price__count">0</span>
                                <button class="price-btn price-plus"></button>
                            </li>
                            <li class="price-block__item">
                                <button class="price-btn price-min"></button>
                                <span class="price__count">0</span>
                                <button class="price-btn price-plus"></button>
                            </li>
                    </ul>
                </div>
                <!-- /.price-block__calc -->
                <div class="price-block__sum">
                    <ul class="price-block__list">
                        <li class="price-block__item p_0">Сумма</li>
                        <li class="price-block__item"><span class="price__sum">0</span></li>
                        <li class="price-block__item"><span class="price__sum">0</span></li>
                        <li class="price-block__item"><span class="price__sum">0</span></li>
                        <li class="price-block__item"><span class="price__sum">0</span></li>
                        <li class="price-block__item"><span class="price__sum">0</span></li>
                        <li class="price-block__item"><span class="price__sum">0</span></li>
                        <li class="price-block__item"><span class="price__sum">0</span></li>
                    </ul>
                </div>
                <!-- /.price-block__sum -->
                <div class="price-total">
                    <h3 class="price-total__title">Лчушая цена</h3>
                    <span class="price-total__sum">10000</span>
                    <button class="btn">
                        <span class="btn-text">
                            Заказать
                        </span>
                    </button>
                </div>
                <!-- /.price-total -->
            </div>
            <!-- /.price-block -->
            
        </div>
        <!-- /.container -->
    </section>
    <!-- /.price -->
    <section class="call" id="6">
        <div class="container">
            <h2 class="section-title call__title">Написать мне</h2>
            <span class="section-subtitle call__subtitle">
                Возникло желание познакомиться поближе или уточнить детали? Воспользуйтесь этой формой и я обязательно отвечу Вам.
            </span>
            <div class="form-container call-form">
                <div class="note"></div>
                <div class="fields">
                    <form class="ajax-contact-form form" action="">
                    <input type="text" name="name" class="form__name input" placeholder="Имя">
                        <input type="email" name="email" class="form__email input" placeholder="E-mail">
                        <textarea name="message" cols="30" rows="10" class="form__message input" placeholder="Сообщение"></textarea>
                        <button  type="submit" name="submit"  class="btn form__btn form-container__btn"><span class="btn-text">
                                Отправить сообщение
                        </span></button>
                    </form>
                </div>
            </div>
            <!-- /.call-form -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /.call -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <!---->
    <script src="js/slick.min.js"></script>
    <!---->
    <script src="js/pageScroll.min.js"></script>
    <!---->
    <script src="js/simple-modal.min.js"></script>
    <!---->
    <script src="contactform.js"></script>
    
    <script>
        jQuery(document).ready(()=>{
            //попап
            $('#myButton').click(function(e) {
                e.preventDefault();
            $('#myModal').reveal();
            });
            //скрытие при скролле
            $(window).scroll(
                {
                    previousTop: 0
                }, 
                function () {
                const currentTop = $(window).scrollTop();
                if (currentTop < this.previousTop) {
                    $(".navbar").show();
                } else {
                    $(".navbar").hide();
                }
                this.previousTop = currentTop;
            });
            //ПЛАВНЫЙ СКРОЛЛ
            $("nav a").mPageScroll2id({
                pageEndSmoothScroll: true
            });
            $(".btn-text a").mPageScroll2id({
                
            });
            //Навигация
            $('.navbar__icon').on('click', function(){
                    $(this).closest('.navbar-block').toggleClass('navbar-open');
                });
            $('.navbar-list__link').on('click', function(){
                $(this).closest('.navbar-block').removeClass('navbar-open')
            });
        });
        
        //СЛАЙДЕР
        $('.slider').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 2,
        prevArrow: $(".arrows__left"),
        nextArrow: $(".arrows__right"),
        responsive: [
          {
          breakpoint: 1200,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
          },
          {
          breakpoint: 768,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
          }
          }
        ]
      })
    </script>
</body>
</html>