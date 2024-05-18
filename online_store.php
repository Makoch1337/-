<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <script src="static/js/jquery-3.4.1.min.js"></script>
    <script src="static/js/slick.js"></script>
    <script src="static/js/script.js"></script>
    <link href="static/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="static/css/slick.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
    <link href="static/style.css" rel="stylesheet" type="text/css">
    <title>HiKorea</title>
</head>

<body>
    <div class="search_avia" id="search_avia">
        <div class="container">
            <div class="header_menu">
                <div class="logo">
                    <img src="static/images/img_logo.svg" alt="LogoHiKorea">
                    <p class="logo__txt">HiKorea</p>
                </div>
                <div class="lk">
                    <ul class="menu">
                        <li class="menu__item"><a class="menu__link" href="#where_to_go">Что посетить</a></li>
                        <li class="menu__item"><a class="menu__link" href="#prepare_to_fly">Подготовка</a></li>
                        <li class="menu__item"><a class="menu__link" href="#contacts">Контакты</a></li>
                    </ul>
                </div>
            </div>
            <div class="images__2">
            </div>
            <div>
                <ul class="stroke_search">
                    <div id="search">
                        <svg viewBox="0 0 420 60" xmlns="http://www.w3.org/2000/svg">
                            <rect class="bar" />

                            <g class="magnifier">
                                <circle class="glass" />
                                <line class="handle" x1="32" y1="32" x2="44" y2="44"></line>
                            </g>

                            <g class="sparks">
                                <circle class="spark" />
                                <circle class="spark" />
                                <circle class="spark" />
                            </g>

                            <g class="burst pattern-one">
                                <circle class="particle circle" />
                                <path class="particle triangle" />
                                <circle class="particle circle" />
                                <path class="particle plus" />
                                <rect class="particle rect" />
                                <path class="particle triangle" />
                            </g>
                            <g class="burst pattern-two">
                                <path class="particle plus" />
                                <circle class="particle circle" />
                                <path class="particle triangle" />
                                <rect class="particle rect" />
                                <circle class="particle circle" />
                                <path class="particle plus" />
                            </g>
                            <g class="burst pattern-three">
                                <circle class="particle circle" />
                                <rect class="particle rect" />
                                <path class="particle plus" />
                                <path class="particle triangle" />
                                <rect class="particle rect" />
                                <path class="particle plus" />
                            </g>
                        </svg>
                        <input type=search name=q aria-label="Search for inspiration" />
                    </div>

                    <div id="results">

                    </div>
                    <!-- <li class="button_search">
                        <button type="button" class="button">Найти билеты</button>
                    </li> -->
                </ul>
            </div>
        </div>
    </div>
    <div class="where_to_go" id="where_to_go">
        <div class="container">
            <div class="main_txt">
                <h2 class="main_txt">Что посетить?</h2>
            </div>
            <div class="places">
                <div class="pictures">
                    <? foreach ($products as $product) : ?>
                        <div class="places_images product-parent" data-id="<?= $product['id'] ?>">
                            <div class="under-picture-txt">
                                <img src="static/images/placeholder.svg" alt="" class="placehholder">
                                <h4><?= $product['name'] ?></h4>
                            </div>
                            <img src="<?= $product['image'] ?>" alt="Image">
                            <p class="image__txt"><?= $product['description'] ?></p>
                            <a id="button-1" class="button js_buy">Let's Go!<img id="arrow-hover" src="https://github.com/atloomer/atloomer.github.io/blob/master/img/iconmonstr-paper-plane-1-120.png?raw=true" /></a>
                        </div>
                    <? endforeach ?>
                </div>
            </div>
        </div>
        <div class="prepare_to_fly" id="prepare_to_fly">
            <div class="container">
                <div>
                    <h2 class="logo__txt logo__prepare_to_fly">Подготовка к полёту</h2>
                </div>
                <div class="reminders">
                    <div class="first_reminder">
                        <p class="reminders__txt__logo"> Возврат и обмен билетов</p>
                        <p class="reminders__txt">Размеры, стоимость и правила перевозки ручной клади и багажа, подробная
                            информация о перевесе багажа</p>
                    </div>
                    <div class="second_reminder">
                        <p class="reminders__txt__logo"> Ручная кладь и багаж </p>
                        <p class="reminders__txt">Есть ряд случаев, когда возврат считается вынужденным, и после
                            подтверждения причин возврата вам вернут деньги. Обмен билетов не допускается за исключением
                            некоторых изменений</p>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="waves">
                <div class="wave" id="wave1"></div>
                <div class="wave" id="wave2"></div>
                <div class="wave" id="wave3"></div>
                <div class="wave" id="wave4"></div>
            </div>
            <ul class="social-icon">
                <li class="social-icon__item"><a class="social-icon__link" href="#">
                        <ion-icon name="logo-facebook"></ion-icon>
                    </a></li>
                <li class="social-icon__item"><a class="social-icon__link" href="#">
                        <ion-icon name="logo-twitter"></ion-icon>
                    </a></li>
                <li class="social-icon__item"><a class="social-icon__link" href="#">
                        <ion-icon name="logo-linkedin"></ion-icon>
                    </a></li>
                <li class="social-icon__item"><a class="social-icon__link" href="#">
                        <ion-icon name="logo-instagram"></ion-icon>
                    </a></li>
            </ul>
            <ul class="menu" id="contacts">
                <li class="menu__item"><a class="menu__link" href="#search_avia">Главная</a></li>
                <li class="menu__item"><a class="menu__link" href="#where_to_go">Что посетить</a></li>
                <li class="menu__item"><a class="menu__link" href="#prepare_to_fly">Подготовка</a></li>
                <li class="menu__item"><a class="menu__link" href="#contacts">Контакты</a></li>
            </ul>
            <p>&copy;2024 your fio | All Rights Reserved</p>
        </footer>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        <div class="overlay js_overlay"></div>
        <div class="popup">
            <h3>Оформление заказа</h3><i class="fas fa-times close-popup js_close-popup"></i>
            <div class='js_error'></div>
            <input type="hidden" name="product-id">
            <input type="text" name="fio" placeholder="Ваше имя">
            <input type="text" name="phone" placeholder="Телефон">
            <input type="text" name="email" placeholder="e-mail">
            <textarea placeholder="Комментарий" name="comment"></textarea>
            <button class="js_send">Отправить</button>
        </div>
    </div>
</body>

</html>