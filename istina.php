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

    <title>Церква "Істина" вул.Соборна, 183, Центральний будинок культури. Благодійна акція для дітей. Реєструйся та приходь за подарунком</title>
    <link href="https://fonts.googleapis.com/css?family=Comfortaa:300,400,700&amp;subset=cyrillic" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans+Extra+Condensed:900&amp;subset=cyrillic" rel="stylesheet">
    <link rel="stylesheet"  type="text/css" href="css/normalize.css"/>
    <link rel="stylesheet"  type="text/css" href="css/slick.css"/>
    <link rel="stylesheet"  type="text/css" href="fonts/icomoon/style.css"/>
    <link rel="stylesheet"  type="text/css" href="css/main.css"/>
    <link rel="stylesheet"  type="text/css" href="css/istina.css"/>


    <link rel="icon" type="image/png" sizes="16x16" href="images/istina/favicon/favicon-32x32istina.png">
    <link rel="manifest" href="images/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
</head>
<body>
<section class="hero">
  <article class="fqa">
    <div class = "title">Поширені питання</div>
    <div class="fqa__scroll js-scroll">
      <ul id = "accordeon" class="fqa-slider">
        <li id="anc8">
          <h3 class="subtitle acc-head"><a href="#anc8"><span class="icon-arrow-down1"></span><span class="acc__text">Що буде в програмі заходу?</span></a></h3>
          <div  class="fqa_body">
            <p>Захід побудований за принципом занять на дитячому служінні в церкві "Істина"</p>
            <p>Діти гратимуть в рухливі ігри</p>
            <p>Боротимуться за призи та виграватимуть у лотерею</p>
            <p>Почують біблійну історію у цікавому форматі</p>
            <p>Виготовлять креативний виріб своїми руками</p>
            <p>Відпочинуть від активності з какао та солодощами</p>
            <p>Танці, співи, ігри, театр -  це саме собою зрозуміло...</p>
            <p>Наприкінці кожен отримає подарунок від Європейської благодійної організації, з любовью зібраний християнами іншої країни для українських дітлахів</p>
            <p>А також книжку з біблійними історіями</p>
          </div>
        </li>
        <li id="anc7">
          <h3 class="subtitle acc-head"><a href="#anc7"><span class="icon-arrow-down1"></span><span class="acc__text">Скільки триватиме захід?</span></a></h3>
          <div  class="fqa_body">
            <p>Ми готуємо програму на півтори години.</p>
            <p>Якщо атмосфера сподобається Вам і Вашим діткам, можна буде затриматись для спілкування, чаювання, фотографування і.т.ін.</p>
          </div>
        </li>
        <li id="anc1">
          <h3 class="subtitle acc-head"><a href="#anc1"><span class="icon-arrow-down1"></span><span class="acc__text">Якщо я зареєструю дитину, але дитина не прийде на акцію?</span></a></h3>
          <div  class="fqa_body">
            <p>Нажаль, ми не зможемо зберегти за Вами право на отримання подарунку. </p>
            <p>Зарезервований Вами подарунок буде передано іншій дитині.</p>
          </div>
        </li>
        <li id="anc9">
          <h3 class="subtitle acc-head"><a href="#anc9"><span class="icon-arrow-down1"></span><span class="acc__text">Чи зможу я залишити дитину і повернутися з нею через певний час?</span></a></h3>
          <div  class="fqa_body">
            <p>Хоч ми пильнуємо за дісципліною та безпекою дітей, дітки без дорослих можуть бути на нашому заході починаючи з 6 років.</p>
            <p>Під час дитячої програми для дорослих в окремій кімнаті буде влаштовано coffee-time з пастором церкви.</p>
            <p>Ми готуэмо цікаві питання для дискусій, щоб поки Ваша дитина розважаєтья, Ви теж могли провести час з користю і у приємній атмосфері</p>
          </div>
        </li>
        <li id="anc2">
          <h3 class="subtitle acc-head"><a href="#anc2"><span class="icon-arrow-down1"></span><span class="acc__text">Для яких цілей ви збираєте особисту інформацію?</span></a></h3>
          <div  class="fqa_body">
            <p>Подарунки проходять розмитнення за дозволом "МІНСОЦПОЛІТИКИ" України</p>
            <p>На вимогу цієї установи ми маємо звітувати про отримувачів благодійного вантажу.</p>
            <p>Ваша електронна адреса або телефон - не обов'язкові данні.</p>
            <p>Вони потрібні для зручності у разі змін у датах у зв'язку з погодою, або іншого інформування</p>
            <p>Ми не розсилаємо спам!</p>
          </div>
        </li>
        <li id="anc3">
          <h3 class="subtitle acc-head"><a href="#anc3"><span class="icon-arrow-down1"></span><span class="acc__text">Хто фінансує подію?</span></a></h3>
          <div  class="fqa_body">

            <p>Джерелом подарунків є ... метою якої є поширення Біблійних цінностей та християнської культури</p>
            <p>В місті Ірпінь акція впроваджується волонтерами церкви "Істина" на пожертви її прихожан</p>
          </div>
        </li>
        <li id="anc4">
          <h3 class="subtitle acc-head"><a href="#anc4"><span class="icon-arrow-down1"></span><span class="acc__text">Чи існує можливість відмінити реєстрацію або передати право на отримання подарунку?</span></a></h3>
          <div  class="fqa_body">
            <p>Подзвоніть нам</p>
            <p>095-513-75-37</p>
          </div>
        </li>
        <li id="anc5">
          <h3 class="subtitle acc-head"><a href="#anc5"><span class="icon-arrow-down1"></span><span class="acc__text">Якщо я забуду реэстраційний номер?</span></a></h3>
          <div  class="fqa_body">
            <p>Подзвоніть нам</p>
            <p>095-513-75-37</p>
            <p>Або приходьте на свято, якщо ви впевнені в успішній реєстрації</p>
            <p>Ми знайдемо вас за ім'ям в базі данних</p>
          </div>

        </li>
        <li id="anc6">
          <h3 class="subtitle acc-head"><a href="#anc6"><span class="icon-arrow-down1"></span><span class="acc__text">Чи будуть мою дитину агітувати ходити в церкву</span></a></h3>
          <div class="fqa_body">
            <p>В кожної людини свій шлях до Бога!</p>
            <p>Ми розповімо про мету роздачі подарунків, нагадаємо дітям прості біблійні істини, запропонуємо помолитися.</p>
            <p>Та ми надаємо чисту Біблійну інформацію без нахилу до якоїсь релігійної течії.</p>
            <p>Говоріть з дитиною та навчить її мати свою думку.</p>
          </div>
        </li>
      </ul>
    </div>
  </article>
  <div class="hero-info">
        <div class="hero-wrapper">
            <div>
                <div class="info-day">16</div>
                <div class="info-month">лютого<br>11:00</div>
            </div>
            <div>
              <h1 class="info-month">благодійний захід "Валентинка від Ісуса"</h1>
              <div class = "title">за адресою вул.Соборна, 183, Центральний будинок культури</div>
              <p class = "subtitle">Якщо ви бачите, що в нас є подарунок, відповідний віку Вашої дитини, заповнюйте форму та приходьте на свято!
                 Усі подарунки мають знайти своїх господарів!</p>
            </div>
        </div>
    </div>
  <article class="form">
      <form method="post" action="/send.php">
        <div class="end_event">
          <h2 class="title_error">К сожалению, регистрация закончена :( <br>Ожидайте информацию о следующих событиях в нашей группе в  facebook</h2>
        </div>
        <div class="flex-cont form__bg">
          <div class="form-col">
            <input id = "name" name="name" type="text" class="text" placeholder="Ім'я та прізвище дитини" required>
            <input id = "address" name="address" type="text" class="text" placeholder="Адреса проживання" required>
            <input id = "phone" name="phone" type="tel" class="text" placeholder="Телефон">
            <input id = "email" name="email" type="email" class="text" placeholder="Електронна@пошта">
            <div class="form__check">
              <div>
                <label>
                  <input   id="agree" name="agree" type="checkbox" class="checkbox" placeholder="e-mail" required>
                  <span class="check-box"></span>
                  Я даю согласие на обработку моих персональных данных<a class="license" href="#">Ознакомиться с соглашением</a>
                </label>
              </div>
            </div>
          </div>
          <div class="form__gift">
              <?php foreach ($items as $item):?>
                <div class="gift__item">
                  <label class="gift__label">

                    <div class="gift__teg">
                        <?= $item->g_name ?>
                        <span class="age"><?= $item->age; ?></span>
                    </div>
                    <input name="gift" type="radio" class="gift" value="<?= $item->id; ?>">

                    <span class="counter js-counter">
                      <span class="check-box"></span>
                       <span class="counter__text">залишилося</span>
                        <span class="counter__number"><?= $item->count; ?></span>
                      <span class="counter__text">подарунків</span>
                    </span>

                  </label>
                </div>
              <?php endforeach; ?>
          </div>
        </div>
        <input  class="form-submit" type="submit" value="Відправити">
      </form>
  </article>
  <footer class="footer__wrapper">
      <div class="footer__col--logo">
        <a href="/" class="logo"><img src="./images/istina/logo.jpg" alt="logo"></a>
        <div class="subtitle">
          Церковь "ИСТИНА"
          <p>ул.Соборная, 183 <br> Центральный дом культуры</p>
        </div>
      </div>
      <div class="footer__col">
        <ul class="contacts">
          <li><a href="tel:+380993915973">+380 99 391 59 73</a></li>
          <li><a href="email:eugenekupin@gmail.com">eugenekupin@gmail.com</a></li>
          <li><a href="https://www.facebook.com/TheTruth.UA"><span class="icon-facebook1"></span></a></li>
        </ul>

      </div>
  </footer>
</section>

<section class="pop-up pop-up-gift">
    <div class="pop-up-container">
        <div class="btn btn-close"></div>
        <div class="pop-up-content js-scroll">
          <div>
            <h3 class="pop-up_title">Реєстрація пройшла успішно</h3>
            <p class="title">Іванов Іван</p>
            <p class="subtitle">Хлопчик 5-9 років</p>
            <p class="title">Номер 86</p>
            <p class="subtitle">Чекаємо на Вас з дитиною 16 лютого об 11:00 за адресою: вул.Соборна, 183, <br> Центральний будинок культури.</p>
          </div>
        </div>
    </div>
</section>
<section class="pop-up pop-up-license">
    <div class="pop-up-container">
    <div class="btn btn-close"></div>
        <div class="pop-up-content">
          <div>
            <h3 class="title">Угода про збір, зберігання та використання персональних даних</h3>
            <p>Релігійна громада "ІСТИНА" м.Ірпінь  здійснює збір персональних для створення бази даних отримувачів благодійної допомоги, та надання звіту партнерам програми та державним установам, які контролюють благодійну діяльність в Україні.</p>

            <p>Релігійна громада  поважаэ право на конфіденційність ваших персональних даних, отриманих у результаті користування цим Сайтом та вживає всіх заходів, необхідних для збереження їх конфіденційності та безпеки.</p>

            <p>Обробка даних фізичних осіб (Ім'я, фамілія, адреса, телефон, адреса електроної пошти) здійснюється відповідно до законодавства України і згоди Користувача, наданої Користувачем при прийнятті положень цієї Угоди на Сайті.</p>
            <p>Реєструючись на Сайті, Користувач як суб’єкт персональних даних та/або законний представник суб’єкта персональних даних повністю приймає усі положення цієї Угоди щодо персональних даних і цим надає згоду обробку персональних даних за умови дотримання їх захисту з урахуванням вимог Закону України «Про захист персональних даних», з метою надання звітів партнерам програми, а також комунікацій з Користувачем (наприклад, інформування у SMS-повідомленнях або електронною поштою щодо інших подій, тощо).</p>

            <p>Користувач погоджується, що з метою кращого налаштування сервісу власник Сайту може опрацьовувати та використовувати узагальнену (не персоніфіковану) статистичну інформацію про використання користувачами сервісу, що збирається з використанням в т.ч. куки-файлів, статистичних он-лайн сервісів тощо.</p>

            <p>Щодо усіх питань, пов’язаних із обробкою, місцем зберігання та використання ваших персональних даних, звертайтеся за електроною адресою eugenekupin@gmail.com.</p>

            <p>Згода дається на термін, необхідний для досягнення мети їх надання, і може бути відкликана за заявою, направленою володільцю персональних даних.</p>
          </div>
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
