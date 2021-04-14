<?php

get_header();

if (isset($_POST['sendCallback'])){

    $text = '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
<title>Заказ обратной связи с сайта https://primecarbon.ru/</title>
</head>
<body><table><tr><td>Имя пользователя:</td><td>'.$_POST['userName'].'</td></tr>';
    $text .= '<tr><td>Почта: </td><td>'.$_POST['email'].'</td></tr>';
    if ($_POST['telephone'] != ''){
        $text .= '<tr><td>Телефон: </td><td>'.$_POST['telephone'].'</td></tr>';
    }
        $text .= '</table></body></html>';

    wp_mail('andrewpuzirevich@gmail.com', 'Заказ обратной связи с сайта https://primecarbon.ru/', $text, array('content-type: text/html'));
    ?>
    <style>
        .wrapper {filter: blur(20px);}
    </style>
    <div id="callback-up" class="home-individ-buy">
        <span class="close"></span>
        <p class="individ-card-bottom">Мы свяжемся с вами в ближайшее время.</p>
    </div>
    <?php
}
?>

<main class="wrapper">
    <div class="content">
        <div class="content_form">
            <div class="front_image">
                <div class="front_logo"><img src="/wp-content/themes/sponch-carbon/img/p 1.svg" alt="" class="front_icon"></div>
            </div>
            <form class="callback_form" action="" method="post">
                <h1>Закажите обратную связь</h1>
                <p>Имя</p>
                <input type="text" required name="userName" class="promo" >
                <p>E-mail</p>
                <input type="text" required name="email" class="promo">
                <p>Телефон</p>
                <input type="number" name="telephone" class="promo">

                <div class="check">
                    <input type="checkbox" id="checkConfidence" style=" width: 20px; height: 20px; margin: 0px; sborder: 1px solid black; margin-right: 10px;">
                    <p>Я согласен на обработку персональных данных согласно Политике конфиденциальности<p>   
                </div>
                <button type="submit" name="sendCallback" disabled id="btn-send" class="material-bubble">ОТПРАВИТЬ</button>
            </form>
        </div>

        <div class='content_about_us'>
            <p><span>Prime Carbon</span> - бренд технологических карбоновых аксессуаров, декора и предметов быта, родом из России с большой историей. Производство, построенное кропотливым и невероятно усердным трудом, выросшее до современной промышленной мануфактуры из лаборатории на старом советском заводе. 
             Обширная инженерная база потребительских и промышленных разработок, соединение труда человека и работы машины, ответственность на каждом этапе и возможность обладать частицей будущего - Prime Carbon, 2020. </p>
        </div>
    </div>
</main>

    <script>
        "use strict";
        var $ = jQuery;

        $('#checkConfidence').on('click', function () {
            var isCheck = $(this).is(':checked');

            if (isCheck === true){
                $('#btn-send').removeAttr('disabled');
            }
            if (isCheck === false){
                $('#btn-send').attr('disabled', 'disabled');
            }

        });
        $('.close').on('click', function(){
            $('#callback-up').css('display', 'none')
            $('.wrapper').css('filter', 'none')
            
        })
        
    </script>

<?php

get_footer();
