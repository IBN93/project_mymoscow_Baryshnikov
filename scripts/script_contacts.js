$(document).ready(function() {

    $('nav > a').click(function() {
        let goTo = $(this).attr('href');
        $('html, body').animate({ scrollTop: $(`${goTo}`).offset().top }, 500);
        return false;
    });
    
    $('.menu-button').click(function() {
        $('nav').slideToggle(250);
    });

    $('#form').submit(function() {
        var name = $('input[name="name"]').val();
        var email = $('input[name="email"]').val();
        var message = $('textarea[name="message"]').val();
        var reg = /^[-._a-z0-9]+@(?:[a-z0-9][-a-z0-9]+\.)+[a-z]{2,6}$/i;
        if (name.length < 3 || message == '') {
            $('textarea').after('<div>Ваше имя не может содержать менее 3 символов. Поле ввода сообщения не может быть пустым.</div>');
        } else if (reg.test(email)) {
            $('textarea').next('div').remove();
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "../backend/user_message_handler.php");
            var data = {
                name: name,
                email: email,
                message: message,
            }
            data = JSON.stringify(data);
            xhr.send(data);
            xhr.onreadystatechange = function() {
                if (xhr.readyState != 4) {
                    return false;
                }
                if (xhr.status != 200) {
                    $('textarea').after('<div>Ошибка запроса.</div>');
                } else {
                    $('textarea').after(xhr.responseText);
                }
            }
        } else {
            $('textarea').next('div').remove();
            $('textarea').after('<div style="color: red;">Проверьте корректность ввода e-mail.</div>');
        }
        return false;
    });
});

$('header').ready(function() {
    $('.header-center').fadeIn(2500);
});