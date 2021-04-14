<?php

get_header();

if (isset($_POST['get-individual'])){
    $text = '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
<title>Заявка на индивидуальный заказ с сайта https://primecarbon.ru/</title>
</head>
<body><table><tr><td>Имя пользователя:</td><td>'.$_POST['individual-name'].'</td></tr>';
    $text .= '<tr><td>Телефон: </td><td>'.$_POST['individual-tel'].'</td></tr>';
    $text .= '<tr><td>Пожелния: </td><td>'.$_POST['individual-text'].'</td></tr>';
    $text .= '</table></body></html>';

    wp_mail('andrewpuzirevich@gmail.com', 'Заявка на индивидуальный заказ с сайта https://primecarbon.ru/', $text, array('content-type: text/html'));

    ?>
    <div id="home-individ-card-two" class="home-individ-buy">
        <span class="close"></span>
        <p class="individ-card-bottom">Спасибо за заказ, мы свяжемся с вами в ближайшее время.</p>
    </div>
    <?php
}
?>

<main class="wrapper">


    <div class="content">
<!--        <div style="margin-top: 80px">-->
<!--            --><?php
//            echo do_shortcode('[smartslider3 slider="2"]');?>
<!--        </div>-->
        <div class="slider header">
            <div class="item">

                <img class="desktop-img" src="<?php echo get_template_directory_uri()?>/img/Group-160.png" alt="Первый слайд">
                <img class="desktop-img-two" src="<?php echo get_template_directory_uri()?>/img/Group-160.png" alt="Первый слайд">
                <img class="desktop-img-three" src="<?php echo get_template_directory_uri()?>/img/Group-160.png" alt="Первый слайд">

                <div class="text-block-slide">
                    <div class="slide-label">Чехлы</div>
                    <div class="slideText">Заголовок слайда 1</div>
                    <div class="slide-btn">
                        <button class="material-bubble btn-white">Смотреть</button>
                    </div>
                </div>

            </div>

            <div class="item">

                    <img class="desktop-img" src="<?php echo get_template_directory_uri()?>/img/Group-160.png" alt="Второй слайд">
                    <img class="desktop-img-two" src="<?php echo get_template_directory_uri()?>/img/Group-160.png" alt="Второй слайд">
                    <img class="desktop-img-three" src="<?php echo get_template_directory_uri()?>/img/Group-160.png" alt="Второй слайд">

                <div class="text-block-slide">
                    <div class="slide-label">Чехлы</div>
                    <div class="slideText">Заголовок слайда 2</div>
                    <div class="slide-btn"><button class="material-bubble btn-white">Смотреть</button></div>
                </div>


            </div>
            <div class="slider-dots">
                <span class="slider-dots_item" onclick="currentSlide(1)"></span>
                <span class="slider-dots_item" onclick="currentSlide(2)"></span>
            </div>
            <a class="prev" onclick="minusSlide()">&#10094;</a>
            <a class="next" onclick="plusSlide()">&#10095;</a>
        </div>


        <div class="home-cat" data-aos="fade-left">
            <h3 >Категории товаров</h3>
            <div class="home-cat-items">
                <div class="item-blocks">
                    <div class="item-1" onclick="location.href='/catalog#cases';"><a href="/catalog#cases';">Чехлы</a></div><!--
                 --><div class="item-2" onclick="location.href='/catalog#fiberShell';"><a href="/catalog#fiberShell';">FiberShell</a></div>
                </div>
                <div class="item-blocks item-3"onclick="location.href='/catalog#accsories';"><a href="/catalog#accsories';">Аксессуары</a></div>
                <div class="item-blocks">
                    <div class="item-4" onclick="location.href='/catalog#forhome';"><a href="/catalog#forhome';">Для дома</a></div><!--
                 --><div class="item-5"><a href="">Кальян</a></div>
                </div>
                <div class="item-blocks">
                    <div class="item-6" onclick="location.href='/catalog#safe';"><a href="/catalog#safe';">Безопасность</a></div><!--
                    --><div class="item-7" onclick="location.href='/catalog#exclusive';"><a href="/catalog#exclusive';">Эксклюзив</a></div>
                </div>
            </div>
        </div>
        <div class="home-cat-two" data-aos="fade-left">
            <h3 >Категории товаров <span class="home_page_title" data-aos="flip-left"></span></h3>
            <div class="home-cat-block">
                <div class="home-cat-items">
                    <div class="block">
                        <div class="item-block-1 link__home"onclick="location.href='/catalog#cases';">
                            <div class="pop_up_content">
                                <img class="pop_up_img" src="<?php echo get_template_directory_uri()?>/img/case_pop.svg" alt="">
                            </div>
                            <a href="/catalog#cases" class="item_title">Чехлы</a>
                        </div>
                        <div class="item-block-2">
                            <div class="item-1 link__home" onclick="location.href='catalog#forhome';">
                                <div class="pop_up_content">
                                    <img class="pop_up_img" src="<?php echo get_template_directory_uri()?>/img/home-pop.svg" alt="">
                                </div>
                                <a href="/catalog#forhome" class="item_title">Для дома</a>
                            </div>
                            <div class="item-2 link__home" onclick="location.href='/catalog#accessories';">
                                <div class="pop_up_content">
                                    <img class="pop_up_img" src="<?php echo get_template_directory_uri()?>/img/aces_pop.svg" alt="">
                                </div>
                                <a href="/catalog#accessories" class="item_title">Аксессуары</a>
                            </div>
                        </div>
                    </div>
                    <div class="block-2">
                        <div class="item-block-3 link__home" onclick="location.href='/catalog#safe';">
                            <div class="pop_up_content">
                                <img class="pop_up_img" src="<?php echo get_template_directory_uri()?>/img/save_pop.svg" alt="">
                            </div>
                            <a href="/catalog#safe" class="item_title">Безопасность</a>
                        </div>
                        <div class="item-block-4 link__home" onclick="location.href='/catalog#fiberShell';">
                            <div class="pop_up_content">
                                <img class="pop_up_img" src="<?php echo get_template_directory_uri()?>/img/fiber_pop.svg" alt="">
                            </div>
                            <a href="/catalog#fiberShell" class="item_title">FiberShell</a>
                        </div>
                    </div>
                </div>
                <div class="home-cat-items two">
                    <div class="block-3">
                        <div class="item-block-5 link__home" onclick="location.href='/catalog#hookah';">
                            <div class="pop_up_content">
                                <img class="pop_up_img" src="<?php echo get_template_directory_uri()?>/img/bong_pop.svg" alt="">
                            </div>
                            <a href="/catalog#hookah" class="item_title">Кальяны</a>
                        </div>
                        <div class="item-block-6 link__home" onclick="location.href='/catalog#exclusive';">
                            <div class="pop_up_content">
                                <img class="pop_up_img" src="<?php echo get_template_directory_uri()?>/img/exclusive_pop.svg" alt="">
                            </div>
                            <a href="/catalog#exclusive" class="item_title">Эксклюзив</a>
                        </div>
                    </div>
                </div>
            </div>     
        </div>


        <div class="home-about" data-aos="fade-right">
            <h3>О нас<span class="home_page_title" data-aos="flip-right"></span></h3>
            <div class="home-about-text">
                <span>Prime Carbon</span> - бренд технологических карбоновых аксессуаров, декора и предметов быта, родом из России с большой историей. Производство, построенное кропотливым и невероятно усердным трудом, выросшее до современной промышленной мануфактуры из лаборатории на старом советском заводе.
                Обширная инженерная база потребительских и промышленных разработок, соединение труда человека и работы машины, ответственность на каждом этапе и возможность обладать частицей будущего - Prime Carbon, 2020.
            </div>
        </div>
        <div class="home-new-tov">

            
            <div class="home-tov-block" data-aos="fade-left">
                <h3>Новые поступления<span class="home_page_title" data-aos="flip-left"></span></h3>
                <div class="new-tov-text">
                <p>
                По той же иллюзии, которая поднимает горизонт моря до уровня зрителя на склоне холма, собачье облако внизу исчезло, и машина, казалось, плыла посреди огромной темной сферы, верхняя половина которой была усыпана Серебряный.</p></div>
                <div class="new-tow-btn">
                    <button class="material-bubble">ПОСМОТРЕТЬ</button>
                </div>
                <div class="new-tov-img"></div>
            </div>     
            
            <div class="home-tov-block-two" data-aos="fade-right">
                <h3 >Новые поступления<span class="home_page_title" data-aos="flip-left"></span></h3>
                <div class="new-tov-text">
                <p>
                По той же иллюзии, которая поднимает горизонт моря до уровня зрителя на склоне холма, собачье облако внизу исчезло, и машина, казалось, плыла посреди огромной темной сферы, верхняя половина которой была усыпана Серебряный.</p></div>
                <div class="new-tow-btn">
                    <button class="material-bubble">ПОСМОТРЕТЬ</button>
                </div>
                <div class="new-tov-img-two"></div>
            </div>  
        </div>

        <div class="home-recom" data-aos="fade-left">
            <h3>Рекомендуем<span class="home_page_title" data-aos="flip-left"></span></h3>
            <div class="recomend-blocks">
                <div class="recom-item" data-aos="fade-right"><a href=""></a></div>
                <div class="recom-item two" data-aos="fade-right"><a href=""></a></div>
                <div class="recom-item three" data-aos="fade-right"><a href=""></a></div>
                <div class="recom-item four" data-aos="fade-right"><a href=""></a></div>
                <div class="recom-item five" data-aos="fade-right"><a href=""></a></div>
                <div class="recom-item six" data-aos="fade-right"><a href=""></a></div>
                <div class="recom-item seven" data-aos="fade-right"><a href=""></a></div>
                <div class="recom-item eight" data-aos="fade-right"><a href=""></a></div>
            </div>
        </div>



        <div class="home-individ" data-aos="fade-left">
            <h3>Индивидуальный дизайн<span class="home_page_title" data-aos="flip-right"></span></h3>
            <p class="individ-under-label">Цельнокарбоновый чехол iphone X, Xs</p>
            <div class="home-individ-bottom">
                <p>По той же иллюзии, которая поднимает горизонт моря до уровня зрителя на склоне холма, собачье облако внизу исчезло, и машина, казалось, плыла посреди огромной темной сферы, верхняя половина которой была усыпана Серебряный.</p>
                <div class="home-individ-card-button">
                    <button class="material-bubble btn-white">ЗАКАЗАТЬ</button>
                </div>
            </div>
        </div>
        <div id="home-individ-card" class="home-individ-buy" data-aos="fade-right" style="display: none">
            <form class="individ-card" method="post" action="">
                <div class="individ-name">Имя <span class="close"></span></div>
                <input type="text" placeholder="Введите ваше имя" name="individual-name">
                <div class="individ-name">Телефон</div>
                <input type="text" placeholder="Ваш номер телефона" name="individual-tel">
                <div class="individ-name">Ваши пожелания</div>
                <textarea type="text" placeholder="Опишите ваши пожелания по индивидуальному дизайну" name="individual-text"></textarea>
                <div class="individ-card-bottom">
                    <button class="individ-card-button" type="submit" name="get-individual">отправить</button>
                    <div class="individ-card-bottom__content">
                        <p>связаться с нами 
                            <a href="https://www.instagram.com/prime.carbon/"><img src="<?php echo get_template_directory_uri()?>/img/mobile/insta.svg" alt=""></a>
                            <a href="https://wa.me/79292022456"><img src="<?php echo get_template_directory_uri()?>/img/whatsapp.svg" class="whats" alt=""/></a>
                            <a href="tg://resolve?domain=@primecarbon"><img src="<?php echo get_template_directory_uri()?>/img/telega.svg" class="telega" alt=""/></a>
                        </p>
                        <p>связаться по e-mail:<span></span> <span class ="prime_span"> primecarbon@yandex.ru </span></p>
                    </div>
                    <div class="individ-card-bottom__content-mobile">
                        <p>связаться с нами в мессенджере</p>
                        <div class='individ-card-bottom__content-mobile-img'>
                            <a href="https://www.instagram.com/prime.carbon/"><img src="<?php echo get_template_directory_uri()?>/img/mobile/insta.svg" alt=""></a>
                            <a href="https://wa.me/79292022456"><img src="<?php echo get_template_directory_uri()?>/img/whatsapp.svg" class="whats" alt=""/></a>
                            <a href="tg://resolve?domain=@primecarbon"><img src="<?php echo get_template_directory_uri()?>/img/telega.svg" class="telega" alt=""/></a>
                        </div>
                        <p class ="prime_span"> primecarbon@yandex.ru</p>
                    </div>
                </div>
            </form>
        </div>

    </div>

    <script src="<?php echo get_template_directory_uri()?>/script.js"></script>

</main>



<?php

get_footer(); 