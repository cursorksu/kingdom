<?php

require_once 'config/db.php';

$items = R::findAll( 'gifts' , ' ORDER BY id ASC' );

//var_dump($items);

?>

<!DOCTYPE html>
<html  lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Царство Боже м.Ківерці. Благодійний захід для дітей. Заходь, реєструйся та гарантовано отримуй подарунок</title>
    <link href="https://fonts.googleapis.com/css?family=Comfortaa:300,400,700&amp;subset=cyrillic" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans+Extra+Condensed:900&amp;subset=cyrillic" rel="stylesheet">
    <link rel="stylesheet"  type="text/css" href="css/normalize.css"/>
    <link rel="stylesheet"  type="text/css" href="css/slick.css"/>
    <link rel="stylesheet"  type="text/css" href="fonts/icomoon/style.css"/>
    <link rel="stylesheet"  type="text/css" href="css/main.css"/>
    <link rel="stylesheet"  type="text/css" href="css/custom.css"/>
    <link rel="stylesheet"  type="text/css" href="css/media.css"/>
    <link rel="apple-touch-icon" sizes="57x57" href="images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="images/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="images/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="images/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="images/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="images/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="images/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="images/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
    <link rel="manifest" href="images/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
</head>
<body>
<section class="hero">
    <div class="frame frame_1"></div>
    <div class="frame frame_2"></div>
    <div class="frame frame_3"></div>
    <div class="frame frame_4"></div>
    <video id="myVideo" autoplay="true" loop="true" width="100%" height="100%">
        <source src="images/final.mp4">
    </video>
</section>

<section class="happy-slider">
    <div class="paralax cloud cloud-1"></div>
    <div class="paralax cloud cloud-3"></div>
    <div class="paralax cloud cloud-2"></div>
    <div class="paralax plain plain-1"></div>
    <div class="paralax plain plain-2"></div>
    <div class="wrapper">
        <div class = "title">11 травня 2019</div>
        <div class = "title">Відбулася весела подія!</div>
    </div>
    <div class="container-fluid">
        <ul class="hs-items">
            <li class="hs-item">
                <div class="image">
                    <span class="img-holder">
                        <picture>
                            <source srcset="images/new11_05_19/img_5_min.jpg" media="(max-width: 768px)">
                            <img src="images/new11_05_19/img_5.jpg" alt="img">
                        </picture>
                    </span></div>
                <p class="hs-descr subtitle">Кумедні ігри та розваги</p>
            </li>
            <li class="hs-item">
                <div class="image">
                    <span class="img-holder">
                        <picture>
                            <source srcset="images/new11_05_19/img_1_min.jpg" media="(max-width: 768px)">
                            <img src="images/new11_05_19/img_1.jpg" alt="img">
                        </picture>
                    </span></div>
                <p class="hs-descr subtitle">Танці та пісні</p>
            </li>
            <li class="hs-item">
                <div class="image">
                    <span class="img-holder">
                        <picture>
                            <source srcset="images/new11_05_19/img_8_min.jpg" media="(max-width: 768px)">
                            <img src="images/new11_05_19/img_8.jpg" alt="img">
                        </picture>
                    </span>
                </div>
                <p class="hs-descr subtitle">Частування</p>
            </li>
            <li class="hs-item">
                <div class="image">
                    <span class="img-holder">
                         <picture>
                            <source srcset="images/new11_05_19/img_6_min.jpg" media="(max-width: 768px)">
                            <img src="images/new11_05_19/img_6.jpg" alt="img">
                        </picture>
                    </span>
                </div>
                <p class="hs-descr subtitle">Цікаві історії</p>
            </li>
            <li class="hs-item">
                <div class="image">
                    <span class="img-holder">
                         <picture>
                           <source srcset="images/new11_05_19/img_7_min.jpg" media="(max-width: 768px)">
                            <img src="images/new11_05_19/img_7.jpg" alt="img">
                        </picture>
                    </span>
                </div>
                <p class="hs-descr subtitle">Призи та сюрпризи</p>
            </li>
            <li class="hs-item">
                <div class="image">
                    <span class="img-holder">
                         <picture>
                           <source srcset="images/new11_05_19/img_2_min.jpg" media="(max-width: 768px)">
                            <img src="images/new11_05_19/img_2.jpg" alt="img">
                        </picture>
                    </span>
                </div>
                <p class="hs-descr subtitle">Чудовий настрій</p>
            </li>
            <li class="hs-item">
                <div class="image">
                    <span class="img-holder">
                         <picture>
                            <source srcset="images/new11_05_19/img_4_min.jpg" media="(max-width: 768px)">
                            <img src="images/new11_05_19/img_4.jpg" alt="img">
                        </picture>
                    </span>
                </div>
                <p class="hs-descr subtitle">Безліч друзів</p>
            </li>
            <li class="hs-item">
                <div class="image">
                    <span class="img-holder">
                         <picture>
                            <source srcset="images/new11_05_19/img_3_min.jpg" media="(max-width: 768px)">
                            <img src="images/new11_05_19/img_3.jpg" alt="img">
                        </picture>
                    </span>
                </div>
                <p class="hs-descr subtitle">Креативні організатори</p>
            </li>
        </ul>
    </div>
</section>
<section class="photos_link">
    <div class="wrapper">
        <div class = "title">На спогад про щасливі моменти</div>
        <div class = "subtitle">натискай на кнопку і забирай фотографії</div>
        <a href="https://drive.google.com/open?id=1DVfUKFV9uSnxu2HwkNVJ4LhpyzaJVBFC" class="btn-photo">Забрати фото <span class="icon-arrow-down1"></span></a>
        <div class="paralax cloud cloud-1"></div>
        <div class="paralax plain plain-2"></div>
    </div>
</section>
<section class="form">
    <div class="paralax cloud cloud-1"></div>
    <div class="paralax plain plain-2"></div>
    <div class="wrapper">
        <div class = "title">Інформація про дитину</div>
        <p class = "subtitle">Заповніть форму для гарантованого отримання подарунку</p>
        <form class="form" method="post" action="/send.php">
            <div class="end_event">
                <h2 class="title_error"> Нажаль, реєстрацію на цю подію завершено! <br> Чекайте на інформацію про наступні події.</h2>
            </div>
            <div class="form-row">
                <input id = "name" name="name" type="text" class="text" placeholder="Ім'я та прізвище" required>
                <input id = "address" name="address" type="text" class="text" placeholder="Адреса проживання" required>
                <input id = "phone" name="phone" type="tel" class="text" placeholder="Контактний телефон">
                <input id = "email" name="email" type="email" class="text" placeholder="Електронна адреса">
            </div>
            <div class="form-row form__check">
                <div>
                    <label>
                        <input id="visit"  name="license" type="checkbox" class="checkbox" value="1" required>
                        <span class="check-box"></span>
                        Дитина може бути присутня на святі в зазначену дату
                    </label>
                </div>
                <div>
                    <label>
                        <input   id="agree" name="agree" type="checkbox" class="checkbox" placeholder="e-mail" required>
                        <span class="check-box"></span>
                        Я даю згоду на обробку моїх персональних данних. <a class="license" href="#">Ознайомитись з угодою</a>
                    </label>
                </div>
            </div>
            <div class="form-row form__gift">
                <?php foreach ($items as $item):?>
                    <div>
                        <label>
                            <?= $item->g_name ?>
                            <input name="gift" type="radio" class="gift" value="<?= $item->id; ?>">
                            <span class="counter js-counter"><?= $item->count; ?></span>
                            <span class="age"><?= $item->age; ?></span>
                        </label>
                    </div>
                <?php endforeach; ?>
            </div>
            <input type="submit" value="Відправити">
        </form>

    </div>
</section>
<section class="akcija">
    <div class="paralax cloud cloud-3"></div>
    <div class="paralax plain plain-2"></div>
    <div class="right-col">
        <div class="title">Свята не закінчуються!</div>
        <div class="subtitle">18 травня о 14:00 на вас чекає:</div>
        <br>
        <ul class="fqa-slider">
            <li>
                <h3 class="subtitle acc-head"><span class="icon-arrow-down1"></span>Інформація про безпечний відпочинок від пожежної команди</h3>
            </li>
            <li>
                <h3 class="subtitle acc-head"><span class="icon-arrow-down1"></span>Можливість розважитись</h3>
            </li>
            <li>
                <h3 class="subtitle acc-head"><span class="icon-arrow-down1"></span>Весела дружня атмосфера</h3>
            </li>
            <li>
                <h3 class="subtitle acc-head"><span class="icon-arrow-down1"></span>Розіграш призів</h3>
            </li>
            <li>
                <h3 class="subtitle acc-head"><span class="icon-arrow-down1"></span>Розіграш путівки в табір "СТАРТАП"</h3>

            </li>
        </ul>
    </div>
</section>
<footer>
    <div class="wrapper">
        <div class="col">
            <a href="/" class="logo"><img src="images/logo_fuxy.png" alt="logo"></a>
            <div class="subtitle">
                "Царство Боже"
                <p> Місто Ківерці</p>
            </div>
        </div>
        <div class="col">
            <div class="subtitle">Контакти:</div>
            <ul class="contacts">
                <li><span class="icon-home"></span>вул.Глінки 39а</li>
                <li><span class="icon-phone"></span>050-161-10-05</li>
                <li><span class="icon-mail2"></span>kingdomofgodkivertsi@gmail.com</li>
            </ul>

        </div>
        <div class="col">
            <div class="subtitle">Ми в мережі</div>
            <ul class="social-links">
                <li><a href="https://www.youtube.com/channel/UCtIEcvKm0co3Uv2TEsAmQVg"><span class="icon-youtube"></span></a></li>
                <li><a href="https://www.facebook.com/kingdomofgodkivertsi/"><span class="icon-facebook1"></span></a></li>
                <li><a href="https://www.instagram.com/kingdomofgodkivertsi/"><span class="icon-camera-retro"></span></a></li>
                <li><a href="https://t.me/kingdomofgodkivertsi"><span class="icon-telegram"></span></a></a></li>
            </ul>
        </div>
    </div>
</footer>
<section class="pop-up pop-up-gift">
    <div class="pop-up-container">
        <div class="btn btn-close"></div>
        <div class="pop-up-content js-scroll">
            <h3 class="pop-up_title">Вітаємо з успішною реєстрацією!</h3>
            <h3 class="subtitle">Чекаємо на Вас з дитиною 11 травня о 15:00 за адресою м.Ківерці, вул.Глинки, 39а</h3>
            <p class="title">Іванов Іван</p>
            <p class="title_gift">Хлопчик 5-9 років</p>
            <p class="number">Номер 86</p>
        </div>
    </div>
</section>
<section class="pop-up pop-up-license">

    <div class="paralax cloud cloud-1"></div>
    <div class="pop-up-container">
    <div class="btn btn-close"></div>
        <div class="pop-up-content">
            <h3 class="title">Угода про збір, зберігання та використання персональних даних</h3>
            <p>Релігійна громада "Царство Боже" м.Ківерці  здійснює збір персональних для створення бази даних отримувачів благодійної допомоги, та надання звіту партнерам програми та державним установам, які контролюють благодійну діяльність в Україні.</p>

            <p>Релігійна громада  поважаэ право на конфіденційність ваших персональних даних, отриманих у результаті користування цим Сайтом та вживає всіх заходів, необхідних для збереження їх конфіденційності та безпеки.</p>

            <p>Обробка даних фізичних осіб (Ім'я, фамілія, адреса, телефон, адреса електроної пошти) здійснюється відповідно до законодавства України і згоди Користувача, наданої Користувачем при прийнятті положень цієї Угоди на Сайті.</p>
            <p>Реєструючись на Сайті, Користувач як суб’єкт персональних даних та/або законний представник суб’єкта персональних даних повністю приймає усі положення цієї Угоди щодо персональних даних і цим надає згоду обробку персональних даних за умови дотримання їх захисту з урахуванням вимог Закону України «Про захист персональних даних», з метою надання звітів партнерам програми, а також комунікацій з Користувачем (наприклад, інформування у SMS-повідомленнях або електронною поштою щодо інших подій, тощо).</p>

            <p>Користувач погоджується, що з метою кращого налаштування сервісу власник Сайту може опрацьовувати та використовувати узагальнену (не персоніфіковану) статистичну інформацію про використання користувачами сервісу, що збирається з використанням в т.ч. куки-файлів, статистичних он-лайн сервісів тощо.</p>

            <p>Щодо усіх питань, пов’язаних із обробкою, місцем зберігання та використання ваших персональних даних, звертайтеся за електроною адресою kindomofgod@gmail.com.</p>

            <p>Згода дається на термін, необхідний для досягнення мети їх надання, і може бути відкликана за заявою, направленою володільцю персональних даних.</p>

        </div>
</div>
</section>

<script type="text/javascript">(function(w,doc) {
        var vid = document.getElementById("myVideo");
        vid.volume = 0.1;

        if (!w.__utlWdgt ) {
            w.__utlWdgt = true;
            var d = doc, s = d.createElement('script'), g = 'getElementsByTagName';
            s.type = 'text/javascript'; s.charset='UTF-8'; s.async = true;
            s.src = ('https:' == w.location.protocol ? 'https' : 'http')  + '://w.uptolike.com/widgets/v1/uptolike.js';
            var h=d[g]('body')[0];
            h.appendChild(s);
        }})(window,document);
</script>
<div data-mobile-view="true" data-share-size="30" data-like-text-enable="false" data-background-alpha="0.0" data-pid="1839369" data-mode="share" data-background-color="#ffffff" data-hover-effect="scale" data-share-shape="round-rectangle" data-share-counter-size="12" data-icon-color="#ffffff" data-mobile-sn-ids="fb.tw.wh.tm.vb." data-text-color="#000000" data-buttons-color="#ffffff" data-counter-background-color="#ffffff" data-share-counter-type="disable" data-orientation="fixed-right" data-following-enable="false" data-sn-ids="fb.tw.wh.tm.vb." data-preview-mobile="false" data-selection-enable="false" data-exclude-show-more="false" data-share-style="12" data-counter-background-alpha="1.0" data-top-button="false" class="uptolike-buttons" ></div>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.nicescroll.js"></script>
<script type="text/javascript" src="js/slick.min.js"></script>
<script type="text/javascript" src="js/jquery.paroller.min.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
</body>
</html>
