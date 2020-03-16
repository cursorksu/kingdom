$(function () {
    $('.top-slider').slick({
        slidesToShow: 1,
        dots: true,
        infinite: true,
        speed: 1200,
        fade: true,
        autoplaySpeed: 3000,
        autoplay: true,
        pauseOnHover: true,
        pauseOnDotsHover: true,
        swipeToSlide: true,
        responsive: [
                {
                breakpoint: 768,
                settings: {
                    arrows: false,
                }
            }
        ]
    });
    const inputArray = Array.from(document.querySelectorAll('.form input[name = "gift"]'));
    const counterArray = Array.from(document.querySelectorAll('.form .counter'));

    function checkGiftIs(){
        var nulCounter = counterArray.every(item => item.textContent <= 0);
        if(nulCounter){
            $('.end_event').addClass('active');
        }
    }
    checkGiftIs();
    $(".js-scroll").niceScroll();
    $('.form input[type = "submit"]').on('click', function(e){
        e.preventDefault();
        document.querySelector('.pop-up-gift').classList.add('active');

        if( formErrorCatch()){
            let checkedCounter;

            $('input[name = "gift"]').each(function () {
                if($(this)[0].checked){
                    checkedCounter  = $(this)[0].nextElementSibling;
                }
            })


            var form = $(this).parents('.form');
            var data = form.serialize();

            $.ajax({
                type: 'POST',
                url: 'send.php',
                data: data,
                success: function(data){
                    const dataObj = JSON.parse(data);
                    let timeEvent;
                    console.log(dataObj);
                    if(dataObj.gift == "Дівчинка 10-14" || dataObj.gift == "Хлопчик 10-14" ){
                        timeEvent = '17:00'
                    }else {
                        timeEvent = '14:00'
                    }

                    popUpFormSuccess(dataObj.name, dataObj.gift, dataObj.id, timeEvent);

                    checkedCounter.textContent = (dataObj.count < 0) ? '0' : dataObj.count;
                    disabledRadio();
                    if(dataObj.count < 0){
                        popUpSingUpError();
                    }
                },
                error: function (xhr, ajaxOptions, thrownError) { // в случae нeудaчнoгo зaвeршeния зaпрoсa к сeрвeру
                    alert(xhr.status); // пoкaжeм oтвeт сeрвeрa
                    alert(thrownError); // и тeкст oшибки
                }

            });
            // Очищаем форму после отправки
            $('#name')[0].value = '';
            $('#address')[0].value = '';
            $('#phone')[0].value = '';
            $('#email')[0].value = '';
            inputArray.map(item => $(item).removeAttr("checked"));
            $('input[name = "license"]').removeAttr("checked");
            $('input[name = "agree"]').removeAttr("checked");
         }else{
            popUpFormError();
        }
    });

    const disabledRadio = function(){
        const inputArrayGift = Array.from(document.querySelectorAll('.js-counter'));
        inputArrayGift.map(item => {
            if($(item).text() <= 0){
                $(item).siblings('input')[0].disabled = 'true';
                $(item).siblings('input').closest('div').addClass('disabled');
            }
        });
    }
    disabledRadio();

    const popUpFormSuccess = function (name, age, id, time) {
        let popUp =  $('.pop-up-gift .pop-up-content');
        popUpText = `
            <h3 class="pop-up_title">Поздравляем с успешной регистрацией!</h3>
            <h3 class="subtitle">Ждем Вас с ребенком 16 февраля в 11:00 по адресу ул.Соборная, 183<br>Центральный дом культуры</h3>
            <p class="title">${name}</p>
            <p class="title_gift">${age} лет</p>
            <p class="number">Регистрационный номер ${id}</p>
        `
        popUp[0].innerHTML = popUpText;
    }

    const popUpFormError = function(){
        let popUp =  $('.pop-up-gift .pop-up-content');
        popUpText = `<div class="title_error">Произошла ошибка!<br>Проверьте правильность заполнения полей<br>Подтвердите, что ребенок будет присутствовать на акции.<br>Отметьте согласие на обработку персональных данных.<br>Выберите доступный подарок.</div>`
        popUp[0].innerHTML = popUpText;
    };

    const popUpSingUpError = function(){
        let popUp =  $('.pop-up-gift .pop-up-content');
        popUpText = `<div class="title_error">Произошла ошибка!<br>Подарков на этот возраст уже нет.<br>Попробуйте выбрать другой возраст.</div>`
        popUp[0].innerHTML = popUpText;
    };

    const formErrorCatch = function(){
        const giftIsChecked = inputArray.some(item =>item.checked == true);
        if($('#name')[0].value &&
           $('#address')[0].value &&
           $('#agree')[0].checked &&
           $('#visit')[0].checked &&
            giftIsChecked
    ){
            return true
        }else {
            return false
        }
    }

    $('.license').on('click', function (e) {
        e.preventDefault()
        document.querySelector('.pop-up-license').classList.add('active')
    });
    $('.btn-close').on('click', function (e) {
        e.target.closest('.pop-up').classList.remove('active')
    });
    if($('.hs-items').length){
        $('.hs-items').slick({
            slidesToShow: 1,
            centerMode: true,
            centerPadding: '430px',
            autoplay: true,
            autoplaySpeed: 4000,
            swipeToSlide: true,
            infinite: true,
            dots: true,
            responsive: [
                {
                    breakpoint: 5000,
                    settings: {
                        centerPadding: '100px',
                        slidesToShow: 2,
                    }
                },
                {
                    breakpoint: 1620,
                    settings: {
                        centerPadding: '300px'
                    }
                },
                {
                    breakpoint: 1280,
                    settings: {
                        centerPadding: '150px'
                    }
                },
                {
                    breakpoint: 992,
                    settings: {
                        centerPadding: '80px'
                    }
                },
                {
                    breakpoint: 567,
                    settings: {
                        arrows: false,
                        centerMode: false,
                        centerPadding: '0'
                    }
                }
            ]
        });
    }
    $(".paralax").paroller({ factor: '0.3', type: 'foreground', direction: 'horizontal' });
    //прикрепляем клик по заголовкам acc-head
    $('#accordeon .acc-head').on('click', f_acc);

    function f_acc(){
//скрываем все кроме того, что должны открыть
        $('#accordeon .fqa_body').not($(this).next()).slideUp(500);
// открываем или скрываем блок под заголовком, по которому кликнули
        $(this).next().slideToggle(500);
    }
});
