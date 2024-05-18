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
    <div class="search_avia">
        <div class="container">
            <div class="header_menu">
                <div class="logo">
                    <img src="static/images/img_logo.svg" alt="LogoHiKorea">
                    <p class="logo__txt">HiKorea</p>
                </div>
                <div class="lk">
                    <img src="static/images/lk_logo.svg" alt="LkLogo">
                </div>
            </div>
            <div class="images__2">
            </div>
            <div>
                <ul class="stroke_search">
                    <!-- <img src="/images/plane.svg" alt="" class="images__2"> -->
                    <li class="kuda">
                        <div class="search_form">
                            <input type="text" name="" class="search-form__txt search_form-shape1" placeholder="">
                        </div>
                    </li>
                    <li class="otkuda">
                        <div class="search_form">
                            <input type="text" name="" class="search-form__txt" placeholder="">
                        </div>
                    </li>
                    <li class="kogda">
                        <div class="search_form">
                            <input type="text" name="" class="search-form__txt" placeholder="">
                        </div>
                    </li>
                    <li class="obratno">
                        <div class="search_form">
                            <input type="text" name="" class="search-form__txt" placeholder="">
                        </div>
                    </li>
                    <li class="kol-vo_chelovek">
                        <div class="search_form">
                            <input type="text" name="" class="search-form__txt search_form-shape2" placeholder="">
                        </div>
                    </li>
                    <li class="button_search">
                        <button type="button" class="button">Найти билеты</button>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="where_to_go">
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
                            <p class="image__txt">Кёнбоккун, также известный как Дворец Кёнбоккун , был главным
                                королевским дворцом династии Чосон. </p>
                            <button class="js_buy">Купить</button>
                        </div>
                    <? endforeach ?>
                </div>
            </div>
        </div>
        <div class="prepare_to_fly">
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
            <div class="container">
                <div class="contacts">
                    <p>vk</p>
                    <p>yt</p>
                    <p>tt</p>
                    <p>tg</p>
                    <p>x</p>
                    <p>yz</p>
                    <p>viber</p>
                    <p>whatsapp</p>
                </div>
            </div>
        </footer>
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