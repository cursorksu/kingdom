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
    <div class="hero-info">
        <div class="hero-wrapper">
            <div>
                <div class="info-day">11</div>
                <div class="info-month">Травня <br>o 14:00</div>
            </div>
            <div>
                <div class="info-month">ДОБРОЧИННА АКЦІЯ</div>
                <div class="flex-cont">
                    <a href="/" class="logo"><img src="images/logo_fuxy.png" alt="logo"></a>
                    <div>
                        <div class="info-address">М.Ківерці, вул. Глинки, 39а</div>
                        <div class="info-address">"ЦАРСТВО БОЖЕ"</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <ul class="top-slider">
        <li>
            <picture>
                <source srcset="images/top/img_1_min.jpg" media="(max-width: 768px)">
                <img src="images/top/img_1-min.jpg" alt="img">
            </picture>
           <div class="wrapper">
               <p class="description">Церква "ЦАРСТВО БОЖЕ" м.Ківерці</p>
           </div>
        </li>
        <li>
            <picture>
                <source srcset="images/top/img_5_min.jpg" media="(max-width: 768px)">
                <img src="images/top/img_5-min.jpg" alt="img">
            </picture>
           <div class="wrapper">
               <p class="description">
                   <span  class="prd_logo"></span>
                   <span class="text">та Міжнародний Благодійний Фонд «Можливості» – ексклюзивний партнер проекту «Сумка Самарянина»</span> </p>
           </div>
        </li>
        <li>
            <picture>
                <source srcset="images/top/img_3_min.jpg" media="(max-width: 768px)">
                <img src="images/top/img_3-min.jpg" alt="img">
            </picture>
           <div class="wrapper">
               <p class="description">Проводить доброчинну акцію для діток</p>
           </div>
        </li>
        <li>
            <picture>
                <source srcset="images/top/img_4_min.jpg" media="(max-width: 768px)">
                <img src="images/top/img_4-min.jpg" alt="img">
            </picture>
           <div class="wrapper">
               <p class="description">Заповніть анкету, для гарантованого отримання подарунку</p>
           </div>
        </li>
        <li>
            <picture>
                <source srcset="images/top/img_2_min.jpg" media="(max-width: 768px)">
                <img src="images/top/img_2-min.jpg" alt="img">
            </picture>
           <div class="wrapper">
               <p class="description">Та приведіть дитину на веселе, цікаве, розважальне  дійство</p>
           </div>
        </li>
        <li>
            <picture>
                <source srcset="images/top/img_6_min.jpg" media="(max-width: 768px)">
                <img src="images/top/img_6-min.jpg" alt="img">
            </picture>
        </li>
        <li>
            <picture>
                <source srcset="images/top/img_7_min.jpg" media="(max-width: 768px)">
                <img src="images/top/img_7-min.jpg" alt="img">
            </picture>
        </li>
    </ul>
</section>
<section class="fqa">
    <div class="wrapper">
        <div class = "title">Відповіді на поширені питання</div>
        <div class="paralax cloud cloud-1"></div>
                <ul id = "accordeon" class="fqa-slider">
                    <li>
                        <h3 class="subtitle acc-head"><span class="icon-arrow-down1"></span>Якщо я зареєструю дитину, але дитина не прийде на акцію?</h3>
                        <div class="fqa_body">
                            <p>Нажаль, ми не зможемо зберегти за Вами право на отримання подарунку. </p>
                            <p>Зарезервований Вами подарунок буде передано іншій дитині.</p>

                        </div>
                    </li>
                    <li>
                        <h3 class="subtitle acc-head"><span class="icon-arrow-down1"></span>Для яких цілей ви збираєте особисту інформацію?</h3>
                        <div class="fqa_body">
                            <p>Подарунки проходять розмитнення за дозволом "МІНСОЦПОЛІТИКИ" України</p>
                            <p>На вимогу цієї установи ми маємо звітувати про отримувачів благодійного вантажу.</p>
                            <p>Ваша електронна адреса або телефон - не обов'язкові данні.</p>
                            <p>Вони потрібні для зручності у разі змін у датах у зв'язку з погодою, або іншого інформування</p>
                            <p>Ми не розсилаємо спам!</p>
                        </div>
                    </li>
                    <li>
                        <h3 class="subtitle acc-head"><span class="icon-arrow-down1"></span>Хто фінансує подію?</h3>
                        <div class="fqa_body">
                            <p>Джерелом подарунків є Міжнародний Благодійний Фонд «Можливості» – ексклюзивний партнер проекту «Сумка Самарянина»  метою якої є поширення Біблійних цінностей та християнської культури</p>
                            <p>В місті Ківерці акція впроваджується волонтерами церкви "Царство Боже" на пожертви її прихожан</p>
                        </div>
                       </li>
                    <li>
                        <h3 class="subtitle acc-head"><span class="icon-arrow-down1"></span>Чи існує можливість відмінити реєстрацію або передати право на отримання подарунку?</h3>
                        <div class="fqa_body">
                            <p>Подзвоніть нам</p>
                            <p>050-161-10-05</p>
                            <p>095-513-75-37</p>
                        </div>
                    </li>
                    <li>
                        <h3 class="subtitle acc-head"><span class="icon-arrow-down1"></span>Якщо я забуду реэстраційний номер?</h3>
                        <div class="fqa_body">
                            <p>Подзвоніть нам</p>
                            <p>050-161-10-05</p>
                            <p>095-513-75-37</p>
                            <p>Або приходьте на свято, якщо ви впевнені в успішній реєстрації</p>
                            <p>Ми знайдемо вас за ім'ям в базі данних</p>
                        </div>

                    </li>
                    <li>
                        <h3 class="subtitle acc-head"><span class="icon-arrow-down1"></span>Чи будуть мою дитину агітувати ходити в церкву</h3>
                        <div class="fqa_body">
                            <p>В кожної людини свій шлях до Бога!</p>
                            <p>Ми зобов'язані розповісти про мету роздачі подарунків, нагадати дітям прості біблійні істини, запропонувати помолитися.</p>
                            <p>Та ми надаємо чисту Біблійну інформацію без нахилу до якоїсь релігійної течії.</p>
                            <p>Інформаційний блок не займе більше ніж 15-20 хвилин.</p>
                            <p>Говоріть з дитиною та навчить її мати свою думку.</p>
                        </div>
                    </li>
                </ul>
    </div>
</section>
<section class="benefits">
    <div class="paralax cloud cloud-3"></div>
    <div class="paralax cloud cloud-2"></div>
    <div class="paralax plain plain-1"></div>
    <div class="paralax plain plain-2"></div>
    <div class="wrapper">
        <div class = "title">Для кого ця пропозиція?</div>
        <p class = "subtitle">Ознайомтесь і зважте, чи підходять вам або вашим знайомим умови, за якими дитина може отримати благодійний подарунок </p>
        <ul class="benefits__list">
            <li><img src="images/trrms_item_2.png" alt="Біблія">
                <p>Метою розподілення цих подарунків є поширення
                    Біблійних цінностей та Християнської моралі
                    в світі. Якщо ці ідеї близькі вашому серцю,
                    подавайте заявку</p>
            </li>
            <li><img src="images/trrms_item_3.png" alt="Серце">
                <p>Якщо ви маєте знайомих дітей, сиріт,
                    напівсиріт, інвалідів, дітей з сімей
                    з важкими життєвими обставинами та АТО,
                    заповніть заявку для них. Переконайтеся
                    попередньо, що вони можуть відвідати подію.</p>
            </li>
            <li><img src="images/trrms_item_1.png" alt="Календар">
                <p>Подарунок може бути вручений дитині
                    особисто в руки тільки в день проведення
                    заходу за адресою м.Ківерці, вул. Глинки, 39а.
                    Якщо дитина може бути присутня,
                    не вагайтеся</p>
            </li>
        </ul>
    </div>
</section>
<section class="happy-slider">
    <div class="paralax cloud cloud-1"></div>
    <div class="paralax cloud cloud-3"></div>
    <div class="paralax cloud cloud-2"></div>
    <div class="paralax plain plain-1"></div>
    <div class="paralax plain plain-2"></div>
    <div class="wrapper">
        <h2 class="title">Ми наповнимо церемонію веселим настроєм</h2>
    </div>
    <div class="container-fluid">
        <ul class="hs-items">
            <li class="hs-item">
                <div class="image">
                    <span class="img-holder">
                        <picture>
                            <source srcset="images/top/img_8_min.jpg" media="(max-width: 768px)">
                            <img src="images/top/img_8-min.jpg" alt="img">
                        </picture>
                    </span></div>
                <p class="hs-descr subtitle">Кумедні ігри та розваги</p>
            </li>
            <li class="hs-item">
                <div class="image">
                    <span class="img-holder">
                        <picture>
                            <source srcset="images/top/img_2_min.jpg" media="(max-width: 768px)">
                            <img src="images/top/img_2-min.jpg" alt="img">
                        </picture>
                    </span>
                </div>
                <p class="hs-descr subtitle">Частування</p>
            </li>
            <li class="hs-item">
                <div class="image">
                    <span class="img-holder">
                         <picture>
                            <source srcset="images/top/img_3_min.jpg" media="(max-width: 768px)">
                            <img src="images/top/img_3-min.jpg" alt="img">
                        </picture>
                    </span>
                </div>
                <p class="hs-descr subtitle">Цікаві історії</p>
            </li>
            <li class="hs-item">
                <div class="image">
                    <span class="img-holder">
                         <picture>
                            <source srcset="images/top/img_4_min.jpg" media="(max-width: 768px)">
                            <img src="images/top/img_4-min.jpg" alt="img">
                        </picture>
                    </span>
                </div>
                <p class="hs-descr subtitle">Призи та сюрпризи</p>
            </li>
            <li class="hs-item">
                <div class="image">
                    <span class="img-holder">
                         <picture>
                            <source srcset="images/top/img_5_min.jpg" media="(max-width: 768px)">
                            <img src="images/top/img_5-min.jpg" alt="img">
                        </picture>
                    </span>
                </div>
                <p class="hs-descr subtitle">Чудовий настрій</p>
            </li>
            <li class="hs-item">
                <div class="image">
                    <span class="img-holder">
                         <picture>
                            <source srcset="images/top/img_6_min.jpg" media="(max-width: 768px)">
                            <img src="images/top/img_6-min.jpg" alt="img">
                        </picture>
                    </span>
                </div>
                <p class="hs-descr subtitle">Безліч друзів</p>
            </li>
        </ul>
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
                <li><span class="icon-phone"></span>095-513-75-37</li>
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
