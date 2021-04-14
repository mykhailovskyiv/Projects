<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <link rel="icon" href="<?php echo get_template_directory_uri()?>/img/mainlogo.svg" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.9/fullpage.min.css"
          integrity="sha512-8M8By+q+SldLyFJbybaHoAPD6g07xyOcscIOQEypDzBS+sTde5d6mlK2ANIZPnSyxZUqJfCNuaIvjBUi8/RS0w=="
          crossorigin="anonymous" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/style.css">
<!--    <script src="--><?php //echo get_template_directory_uri()?><!--/jquery.maskedinput.min.js"></script>-->
    <title>Numerostar</title>
    <!-- Facebook Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window, document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '2650803575169208');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
                   src="https://www.facebook.com/tr?id=2650803575169208&ev=PageView&noscript=1"
        /></noscript>
    <!-- End Facebook Pixel Code -->
</head>

<body >
<!--<h1>Упс, Вы зря сюда зашли! <br> Клиент не рассчитался и сайт из-за этого больше не работает. <br>-->
<!--    Будьте бдительны, когда будете сотрудничать с этими товарищами. <br> Всем спасибо, до свидания!-->
<!--</h1>-->
<header id='header'>
    <div class="mobile_head">
        <div class="logo" onclick="location.href='/home';">
            <img src="<?php echo get_template_directory_uri()?>/img/mainlogo.svg" alt="">
        </div>
        <div id="menu">
            <button class="c-hamburger c-hamburger-line">
                <span class="line one"></span>
                <span class="line two"></span>
                <span class="line three"></span>
            </button>
        </div>
        <div id="mobile-menu" class="mobile-menu">
            <nav class="mobile-menu__content">
                <div class='wrapper'>
                    <li onclick="location.href='/home#services';">Услуги</li>
                </div>
                <div class='wrapper'>
                    <li onclick="location.href='/home#comment';">Отзывы</li>
                </div>
                <div class='wrapper'>
                    <li onclick="location.href='/home#about';">О марафоне</li>
                </div>
                <div class='wrapper'>
                    <li onclick="location.href='/home#social';">Соцсети</li>
                </div>
                <div class='wrapper'>
                    <li onclick="window.open('https://t.me/numerostar')">Техническая поддержка</li>
                </div>
            </nav>
        </div>
    </div>
    <div class="container head">
        <div class='wrapper'>
            <li onclick="location.href='/home#services';">Услуги</li>
        </div>
        <div class='wrapper'>
            <li onclick="location.href='/home#comment';">Отзывы</li>
        </div>
        <div class='wrapper'>
            <li onclick="location.href='/home#about';">О марафоне</li>
        </div>
        <div class='wrapper'>
            <li onclick="location.href='/home#social';">Соцсети</li>
        </div>
        <div class='wrapper'>
            <li onclick="window.open('https://t.me/numerostar')">Техническая поддержка</li>
        </div>
    </div>
</header>
<main>

    <div id="fullpage">
        <div class="section">
            <div class="container">
                <h2 class="title one">
                    Практикующий <span>нумеролог</span>
                </h2>
                <h2 class='title one two'>
                    <span>Мария</span> Стеценко
                </h2>
                <div class="page-content first">
                    <div class="firstpage-block__one"><img src="<?php echo get_template_directory_uri()?>/img/Group 25.png" alt=""></div>
                    <div class="firstpage-block__two">
                        <div class="block__two one">
                            <p class="description">Я практикующий нумеролог и психотерапевт, в чем интенсивно развиваюсь уже более 2,5 лет. За это время изучила множество методик, проверив их на личной практике, и могу уверенно выделить что действительно работает. Полученный опыт помогает сегодня реализовывать мое предназначение — менять жизни людей к лучшему. И уже более 2 тысяч клиентов вместе со мной простыми шагами сотворили чудо, раскрывая свою уникальность.
                            </p>
                            <img src="<?php echo get_template_directory_uri()?>/img/block1black.svg" alt="">
                        </div>
                        <div class="block__two two">
                            <img src="<?php echo get_template_directory_uri()?>/img/block1white.svg" alt="">
                            <p class="description">В своей работе успешно применяю лично разработанную теорию двухдатников, которая позволяет глубже раскрыть личность, исключив ошибки и неточности.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="">
            <div class="container two">
                <h2 class="title two">
                    В основе <span>моей</span>
                </h2>
                <h2 class="title title_two">работы</h2>
                <div class="page-content second">
                    <div class="secondpage-block__one"><img src="<?php echo get_template_directory_uri()?>/img/Group 26.png" alt=""></div>
                    <div class="secondpage-block__two">
                        <div class="block__two one">
                            <p class="description">Авторская методика аналитической прогностики дат, которая не имеет аналогов.  Она позволяет не только безошибочно спрогнозировать исход и результат определенных событий, но и предотвратить опасности и риски.
                            </p>
                        </div>
                        <div class="block__two two">
                            <p class="description">В удобном для жизни формате, я применяю сакральные знания, глубокую психотерапию и реально работающие методики, эффект от которых незамедлительно проявляется и останется с вами на всю жизнь.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class='page_matrix'>
            <div class='container'>
                <div class='matrix'>
                    <h2 class='title'> Психоматрица</h2>
                    <p class='description matrix'>Начни знакомство с собой с расчета своих чисел</p>
                    <button type='submit' class='button_matrix' onclick="location.href='/matrix';">Расчитать психоматрицу</button>
                </div>
            </div>
        </div>
        <div class="" id="about">
            <div class="container three">
                <h2 class="title three"><span>О</span> марафоне</h2>
                <div class="thirdpage-block">
                    <div class="thirdpage-block__one">
                        <div class="block__one one">
                            <p class="description">
                            Четырехнедельный марафон, который начнется уже 10 декабря, создан, чтобы менять жизни. Вместе, мы будем наслаждаться каждым днем, применим практические знания и запустим мощную трансформацию себя. Я научу вас решать любые задачи, используя свой уникальный код успеха и найти личный ключ к финансовому изобилию.
                            </p>
                        </div>
                        <div class="thirdpage-block__one--content">
                            <h3><span>Марафон</span> подойдет для тех,
                                кто <span>хочет</span>:
                            </h3>
                            <ul class="thirdpage-block__list">
                                <li> ⁃ познакомиться с истинной собой;</li>
                                <li>⁃ наполниться внутренней гармонией;</li>
                                <li>⁃ улучшить качество жизни;</li>
                                <li>⁃ прекратить постоянные самокопания;</li>
                                <li>⁃ повысить свою эффективность;</li>
                                <li>⁃ построить гармоничные отношения.</li>
                            </ul>
                        </div>
                        <div class='price_block__mobile'>
                            <div class="price">
                                <p>стоимость марафона</p>
                                <div class='price_region mobile'>
                                    <p>50usd</p>
                                    <p>1 400грн</p>
                                    <p>3 800руб</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <form action="/payment" class="form" method="post">
                        <p class="form_title">Имя</p>
                        <input type="text" id='form_name' name="form_name" placeholder="Имя" required>
                        <p class="form_title">Телефон</p>
                        <input type="text" id='form_phone' name="form_phone" placeholder="(000) 000 00 00" required>
                        <p class="form_title">E-mail</p>
                        <input type="email" id='form_email' name="form_email" placeholder="E-mail" required>
                        <p class="form_title">Валюта</p>
                        <select name="form_money" id="">
                            <option value="usd">USD</option>
                            <option value="hrn">ГРН</option>
                            <option value="rub">РУБ</option>
                        </select>
                        <p class="form_title">У меня есть промокод</p>
                        <input type="text" name="promo">
                        <button type='submit' id='form_button' class="button" style="cursor:pointer;">записаться</button>
                        <div class="third_img"><img src="<?php echo get_template_directory_uri()?>/img/third.svg" alt=""></div>
                    </form>
                </div>
                <div class='thirdpage-block__bottom'>
                    <div class="price">
                        <p>стоимость марафона</p>
                        <div class='price_region'>
                            <p>50usd</p>
                            <p>1 400грн</p>
                            <p>3 800руб</p>
                        </div>
                    </div>
                    <div class='counter'>
                        <p>Количество мест ограничено</p>
                        <div class='counter_user'>
                            <?php
                            global $wpdb;
                            $query = "SELECT numbers FROM `wp_temp_numbers` WHERE  id=1";
                            $res = $wpdb->get_var($query);
                            ?>
                            <p id="user_count"><?php echo $res; ?></p>
                            <span>осталось</span>
                        </div>
                    </div>
                </div>
                <h3 class='marathon_title'>Марафон твой код счастья</h3>
                <p class='description mar'>После 4 недель марафона ты научишься чувствовать и понимать себя, свои истинные потребности и желания. Узнаёшь, в чем твоя уникальность, таланты и сила. Отличие марафона от других в том, что он даст тебе инструмент, способный раскрыть именно свою личность - без шаблонов и схем, общих для всех. Каждому участнику предоставляется мое личное сопровождение в течение всего марафона. Проверка заданий и обратная связь.</p>
                <div class='marathon'>
                    <h4 class='weekend one'>1 неделя  <div class="plus marathon_one"></div></h4>
                    <div class='marathon_blocks one'>
                        <div class='marathon_block__img'>
                        <img src="<?php echo get_template_directory_uri()?>/img/mar1.png" alt="">
                        </div>
                        <div class='marathon_block__text'>
                            <p class='description'>Понедельник - твой характер и тип личности. кому ты
                                способна подчиняться, кем и как руководить. Пойми свои личностные потребности и начни их удовлетворять. <span>Среда - твой женский запас сил - как удачно выбрать
                                вид спорта, режим дня, образ жизни и стиль поведения; эмоциональность и мощность твоего поля.
                                Какова она, чего требует от тебя и что даёт; как вести
                                себя с мужчиной.</span> <span>После этой недели ты поймёшь, как быть в ладу с
                                собой и при этом с миром. Какие источники
                                раздражения убрать и с помощью каких техник.</span>
                            </p>
                        </div>
                    </div>
                    <h4 class='weekend two'>2 неделя <div class="plus marathon_two"></div></h4>
                    <div class='marathon_blocks two'>
                        <div class='marathon_block__img '>
                        <img src="<?php echo get_template_directory_uri()?>/img/mar2.png" alt="">
                        </div>
                        <div class='marathon_block__text'>
                            <p class='description'>Понедельник - твоя интуиция, СВЕРХСПОСОБНОСТИ,
                                фантазия и способы решать проблемы. Научись слышать
                                и быть услышанной; твоя любовь к себе и к миру. Через какую призму ты читаешь свою женственность, как дать ей расцвести, любить свою жизнь и сводить мужчин с ума. <span>Среда: твоя женская хитрость. Бескорыстие и простота
                                или тонкие манипуляции. Научись применять свои чары
                                и противостоять чужим.</span> <span>После этой недели ты ощутишь на всю катушку свою энергию и научишься пополнять ее быстро и легко, чтобы никогда не ощущать упадок сил, депрессию, быть здоровой и вдохновенной.</span>
                            </p>
                        </div>
                    </div>
                    <h4 class='weekend three'>3 неделя <div class="plus marathon_three"></div></h4>
                    <div class='marathon_blocks three'>
                        <div class='marathon_block__img'>
                        <img src="<?php echo get_template_directory_uri()?>/img/mar3.png" alt="">
                        </div>
                        <div class='marathon_block__text'>
                            <p class='description'>Понедельник - твоя сексуальность и чувствительность
                                тела. Блоки и зажимы, скрытые желания, что тебе нужно от близости и как это получить. <span>Среда - какая модель семьи тебе подходит, какая модель материнства. Какой женой тебе легче всего быть и какой семейный партнёр тебе нужен.
                                </span> <span>После этой недели ты поймёшь, как быть в ладу с
                                собой и при этом с миром. Какие источники
                                раздражения убрать и с помощью каких техник.</span>
                            </p>
                        </div>
                    </div>
                    <h4 class='weekend four'>4 неделя <div class="plus marathon_four"></div></h4>
                    <div class='marathon_blocks four'>
                        <div class='marathon_block__img'>
                        <img src="<?php echo get_template_directory_uri()?>/img/mar4.png" alt="">
                        </div>
                        <div class='marathon_block__text'>
                            <p class='description'>Понедельник – твои таланты и способности, которые легко монетизировать, твои сферы влияния и успеха.
                                Как открыть дверь, ведущую к ним. Какой стиль жизни
                                и ритм движения к успеху тебе подходит.
                                <span>Среда – твой образ и внешний стиль, которые приблизят успех и создадут гармонию с миром. Как усилить свои цифры с помощью материальных атрибутов, уникальных для тебя.
                                </span>
                                <span>После этой недели ты поймёшь, какие твои сильные
                                стороны зажечь, чтобы преуспеть и главное – как это
                                сделать с удовольствием для себя.</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="page_four">
            <div class="container four">
                <h2 class="title four">Результат, который
                    <span>вы получите</span>
                </h2>
                <div class="pagefour-content">
                    <div class="pagefour-block__one">
                        <img src="<?php echo get_template_directory_uri()?>/img/pagefour.png" alt="">
                    </div>
                    <div class="pagefour-block__two">
                        <div class="block__two one">
                            <p class="description">После 4х недель практик вы научитесь чувствовать и понимать себя, свои истинные желания и потребности. Узнаете в чем ваша уникальность и сможете раскрыть свою женскую силу и сексуальность.
                            </p>
                            <div class="four_img"><img src="<?php echo get_template_directory_uri()?>/img/four.svg" alt=""></div>
                        </div>
                        <div class="block__two two">
                            <p class="description">Научитесь воплощать свои желания, подходящими именно вам методами. В отличии от других марафонов, мой дает инструмент, способный раскрыть вашу личность — без обобщенных шаблонов и схем.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section page_five" id="services">
            <div class="slide">
                <div class="container five">
                    <h2 class="title five">Другие <span>услуги</span></h2>
                    <div class="pagefive-content">
                        <div class="pagefive-block_one">
                            <div class="block_one__content">
                                <div class="block__one-img"><img src="<?php echo get_template_directory_uri()?>/img/card1.png" alt=""></div>
                                <h4 class="block__one-title">Инструкция к счастью</h4>
                                <div class="block__one-description">
                                    <li> от 60 мин + анализ 2-3 дат</li>
                                    <li> + прогноз на личный год</li>
                                    <li>+авторские медитации</li>
                                </div>
                                <h4 class="block__one-price">8 000 грн</h4>
                                <h4 class="block__one-price two">26 000 руб</h4>
                                <a href="https://t.me/numerostar" class='href_card'>Жми сюда, чтобы узнать больше</a>
                            </div>
                            <nav class="menu-block mobile">
                                    <div class="menu_button" id="menu_button_mobile">
                                        <div class="plus" id="plus_mobile"></div>
                                        <p class="menu_title">Для вас, если вы готовы</p>
                                    </div>
                                    <ul class="menu_content" id="menu_content_mobile">
                                        <li>⁃ к серьёзной индивидуальной работе со специалистом без шаблонов и схем</li>
                                        <li>⁃ менять судьбу по своему желанию и жить на максимум</li>
                                        <li>⁃  узнать все о собственном потенциале, Роде, сильных сторонах, рисках и получить уникальный инструмент для работы с собой
                                        </li>
                                        <li>⁃ обрести гармонию в любви, сексе и семейном счастье</li>
                                        <li>⁃ впустить в свою жизнь неограниченный финансовый поток
                                        </li>
                                        <li>⁃  сохранить здоровье и молодость на долгие годы по личному алгоритму нумерокарты</li>
                                        <li>⁃ быть по-настоящему счастливыми!
                                        </li>
                                    </ul>
                                </nav>
                                <nav class="menu-block two mobile">
                                    <div class="menu_button" id="menu_button_two_mobile">
                                        <div class="plus" id="plus_two_mobile"></div>
                                        <p class="menu_title">Что мы проработаем на консультации?</p>
                                    </div>
                                    <ul class="menu_content" id="menu_content_two_mobile">
                                        <li>⁃ сексуальность и любовь</li>
                                        <li> ⁃ Семью и детей</li>
                                        <li>⁃ Деньги и таланты</li>
                                        <li>⁃ Здоровье и красоту</li>
                                        <li>⁃ Детство и родителей</li>
                                        <li> ⁃ Успех и призвание</li>
                                        <li> ⁃ Путь Души и карму</li>
                                        <li> - травмы, блоки и разрушительные программы, устраним и заменим на созидательные.
                                        </li>
                                    </ul>
                                </nav>
                        </div>
                        <div class="pagefive-block_two">
                            <h3 class="block_two-title">Полная нумерологическая консультация с глубокой проработкой
                                всех
                                сфер вашей жизни.
                            </h3>
                            <nav class="menu-block">
                                <div class="menu_button" id="menu_button">
                                    <div class="plus" id="plus"></div>
                                    <p class="menu_title">Для вас, если вы готовы</p>
                                </div>
                                <ul class="menu_content" id="menu_content">
                                    <li>⁃ к серьёзной индивидуальной работе со специалистом без шаблонов и схем</li>
                                    <li>⁃ менять судьбу по своему желанию и жить на максимум</li>
                                    <li>⁃  узнать все о собственном потенциале, Роде, сильных сторонах, рисках и получить уникальный инструмент для работы с собой
                                    </li>
                                    <li>⁃ обрести гармонию в любви, сексе и семейном счастье</li>
                                    <li>⁃ впустить в свою жизнь неограниченный финансовый поток
                                    </li>
                                    <li>⁃  сохранить здоровье и молодость на долгие годы по личному алгоритму нумерокарты</li>
                                    <li>⁃ быть по-настоящему счастливыми!
                                    </li>
                                </ul>
                            </nav>
                            <nav class="menu-block two">
                                <div class="menu_button" id="menu_button_two">
                                    <div class="plus" id="plus_two"></div>
                                    <p class="menu_title">Что мы проработаем на консультации?</p>
                                </div>
                                <ul class="menu_content" id="menu_content_two">
                                    <li>⁃ сексуальность и любовь</li>
                                    <li> ⁃ Семью и детей</li>
                                    <li>⁃ Деньги и таланты</li>
                                    <li>⁃ Здоровье и красоту</li>
                                    <li>⁃ Детство и родителей</li>
                                    <li> ⁃ Успех и призвание</li>
                                    <li> ⁃ Путь Души и карму</li>
                                    <li> - травмы, блоки и разрушительные программы, устраним и заменим на созидательные.
                                    </li>
                                </ul>
                            </nav>
                            <div class="block_two">
                                <p class="description">После моей консультации у вас не останется вопросов и вы получите полный перечень инструментов, с помощью которых начнёте менять свою жизнь на глазах.
                                </p>
                            </div>
                            <div class="block_two second">
                                <p class="description">Я даю 100% гарантию положительного результата, если вы последуете моим практическим рекомендациям!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide 2">
                <div class="container five">
                    <h2 class="title five">Другие <span>услуги</span></h2>
                    <div class="pagefive-content">
                        <div class="pagefive-block_one">
                            <div class="block_one__content">
                                <div class="block__one-img two"><img src="<?php echo get_template_directory_uri()?>/img/card2.png" alt=""></div>
                                <h4 class="block__one-title">Карма любви</h4>
                                <div class="block__one-description">
                                    <li> от 30 мин + анализ 1-2 дат</li>
                                    <li>+авторские медитации</li>
                                </div>
                                <h4 class="block__one-price">4 400 грн</h4>
                                <h4 class="block__one-price two">12 000 руб</h4>
                                <a href="https://t.me/numerostar" class='href_card'>Жми сюда, чтобы узнать больше</a>
                            </div>
                            <nav class="menu-block mobile">
                                <div class="menu_button" id="slide_two_menu_button_mobile">
                                    <div class="plus" id="slide_two_plus_mobile"></div>
                                    <p class="menu_title">Для вас, если вы готовы</p>
                                </div>
                                <ul class="menu_content" id="slide_two_menu_content_mobile">
                                    <li>⁃ обрести счастье в личной жизни, менять судьбу по своему желанию и жить на максимум</li>
                                    <li>⁃ выстроить гармоничные отношения с любимым человеком</li>
                                    <li>⁃ раскрыть свою сексуальность и получать от неё 100% удовольствия
                                    </li>
                                    <li>⁃ встретить идеального для вас партнера</li>
                                    <li>⁃ избавиться от разрушительных программ в вашей психике
                                    </li>
                                    <li>⁃ узнать что такое настоящая любовь к себе</li>
                                </ul>
                            </nav>
                            <nav class="menu-block two mobile">
                                <div class="menu_button" id="slide_two_menu_button_two_mobile">
                                    <div class="plus" id="slide_two_plus_two_mobile"></div>
                                    <p class="menu_title">Что мы проработаем на консультации?</p>
                                </div>
                                <ul class="menu_content" id="slide_two_menu_content_two_mobile">
                                    <li>⁃ сексуальность</li>
                                    <li>⁃ семейную карму и родовые сценарии</li>
                                    <li>⁃ ролевые модели в отношениях</li>
                                    <li>⁃ совместимость</li>
                                    <li>⁃ портрет идеального партнёра</li>
                                    <li>⁃ блоки, страхи и негативные программы, мешающие обрести счастье в любви.</li>
                                </ul>
                            </nav>
                        </div>
                        <div class="pagefive-block_two">
                            <nav class="menu-block">
                                <div class="menu_button" id="slide_two_menu_button">
                                    <div class="plus" id="slide_two_plus"></div>
                                    <p class="menu_title">Для вас, если вы готовы</p>
                                </div>
                                <ul class="menu_content" id="slide_two_menu_content">
                                    <li>⁃ обрести счастье в личной жизни, менять судьбу по своему желанию и жить на максимум</li>
                                    <li>⁃ выстроить гармоничные отношения с любимым человеком</li>
                                    <li>⁃ раскрыть свою сексуальность и получать от неё 100% удовольствия
                                    </li>
                                    <li>⁃ встретить идеального для вас партнера</li>
                                    <li>⁃ избавиться от разрушительных программ в вашей психике
                                    </li>
                                    <li>⁃ узнать что такое настоящая любовь к себе</li>
                                </ul>
                            </nav>
                            <nav class="menu-block two">
                                <div class="menu_button" id="slide_two_menu_button_two">
                                    <div class="plus" id="slide_two_plus_two"></div>
                                    <p class="menu_title">Что мы проработаем на консультации?</p>
                                </div>
                                <ul class="menu_content" id="slide_two_menu_content_two">
                                    <li>⁃ сексуальность</li>
                                    <li>⁃ семейную карму и родовые сценарии</li>
                                    <li>⁃ ролевые модели в отношениях</li>
                                    <li>⁃ совместимость</li>
                                    <li>⁃ портрет идеального партнёра</li>
                                    <li>⁃ блоки, страхи и негативные программы, мешающие обрести счастье в любви.</li>
                                </ul>
                            </nav>
                            <div class="block_two" id="slide_two_block">
                                <p class="description">После консультации ваша личная жизнь кардинально изменится в лучшую сторону — при условии, что вы последуете моим рекомендациям — я даю гарантию 100%!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide 3">
                <div class="container five">
                    <h2 class="title five">Другие <span>услуги</span></h2>
                    <div class="pagefive-content">
                        <div class="pagefive-block_one">
                            <div class="block_one__content">
                                <div class="block__one-img three"><img src="<?php echo get_template_directory_uri()?>/img/card3.png" alt=""></div>
                                <h4 class="block__one-title">Матрица успеха</h4>
                                <div class="block__one-description">
                                    <li> от 30 мин + анализ 1-2 дат</li>
                                    <li>+авторские медитации</li>
                                </div>
                                <h4 class="block__one-price">4 400 грн</h4>
                                <h4 class="block__one-price two">12 000 руб</h4>
                                <a href="https://t.me/numerostar" class='href_card'>Жми сюда, чтобы узнать больше</a>
                            </div>
                            <nav class="menu-block mobile">
                                <div class="menu_button" id="slide_three_menu_button_mobile">
                                    <div class="plus" id="slide_three_plus_mobile"></div>
                                    <p class="menu_title">Для вас, если вы готовы</p>
                                </div>
                                <ul class="menu_content" id="slide_three_menu_content_mobile">
                                    <li>⁃ зарабатывать больше денег, занимаясь любимым делом</li>
                                    <li>⁃ легко совмещать работу, семью и личную жизнь</li>
                                    <li>⁃ получать удовольствие от профессиональной деятельности
                                    </li>
                                    <li>⁃ заниматься делом своей жизни</li>
                                    <li>⁃ узнать что такое бизнес-совместимость
                                    </li>
                                    <li>⁃ построить общее дело с надежными партнерами</li>
                                    <li>⁃ забыть о финансовых проблемах навсегда.
                                    </li>
                                </ul>
                            </nav>
                            <nav class="menu-block two mobile">
                                <div class="menu_button" id="slide_three_menu_button_two_mobile">
                                    <div class="plus" id="slide_three_plus_two_mobile"></div>
                                    <p class="menu_title">Что мы проработаем на консультации?</p>
                                </div>
                                <ul class="menu_content" id="slide_three_menu_content_two_mobile">
                                    <li>⁃ денежные установки и сценарии в карте</li>
                                    <li> ⁃ финансовую карму</li>
                                    <li>⁃ ваши таланты и профессиональные способности</li>
                                    <li>⁃ бизнес-совместимость</li>
                                    <li>⁃ ваши сильные стороны для достижения успеха</li>
                                    <li> ⁃ слабые места и успешно компенсируем их</li>
                                    <li> ⁃ включим удачу в вашей нумерокарте</li>
                                    <li> -  устраним травмы, блоки и разрушительные программы, заменим их на созидательные.
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="pagefive-block_two">
                            <nav class="menu-block">
                                <div class="menu_button" id="slide_three_menu_button">
                                    <div class="plus" id="slide_three_plus"></div>
                                    <p class="menu_title">Для вас, если вы готовы</p>
                                </div>
                                <ul class="menu_content" id="slide_three_menu_content">
                                    <li>⁃ зарабатывать больше денег, занимаясь любимым делом</li>
                                    <li>⁃ легко совмещать работу, семью и личную жизнь</li>
                                    <li>⁃ получать удовольствие от профессиональной деятельности
                                    </li>
                                    <li>⁃ заниматься делом своей жизни</li>
                                    <li>⁃ узнать что такое бизнес-совместимость
                                    </li>
                                    <li>⁃ построить общее дело с надежными партнерами</li>
                                    <li>⁃ забыть о финансовых проблемах навсегда.
                                    </li>
                                </ul>
                            </nav>
                            <nav class="menu-block two">
                                <div class="menu_button" id="slide_three_menu_button_two">
                                    <div class="plus" id="slide_three_plus_two"></div>
                                    <p class="menu_title">Что мы проработаем на консультации?</p>
                                </div>
                                <ul class="menu_content" id="slide_three_menu_content_two">
                                    <li>⁃ денежные установки и сценарии в карте</li>
                                    <li> ⁃ финансовую карму</li>
                                    <li>⁃ ваши таланты и профессиональные способности</li>
                                    <li>⁃ бизнес-совместимость</li>
                                    <li>⁃ ваши сильные стороны для достижения успеха</li>
                                    <li> ⁃ слабые места и успешно компенсируем их</li>
                                    <li> ⁃ включим удачу в вашей нумерокарте</li>
                                    <li> -  устраним травмы, блоки и разрушительные программы, заменим их на созидательные.
                                    </li>
                                </ul>
                            </nav>
                            <div class="block_two" id="slide_three_block">
                                <p class="description">После консультации мои клиенты повышают свой доход, внедряют новые проекты и занимаются любимым делом, получая от жизни максимум. И все это благодаря простым и методичным последовательным действиям, которые я даю в своих рекомендациях.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide 4">
                <div class="container five">
                    <h2 class="title five">Другие <span>услуги</span></h2>
                    <div class="pagefive-content">
                        <div class="pagefive-block_one">
                            <div class="block_one__content">
                                <div class="block__one-img four"><img src="<?php echo get_template_directory_uri()?>/img/card4.png" alt=""></div>
                                <h4 class="block__one-title">Код судьбы</h4>
                                <div class="block__one-description">
                                    <li> от 30 мин + анализ 1-2 дат</li>
                                    <li>+авторские медитации</li>
                                </div>
                                <h4 class="block__one-price">4 400 грн</h4>
                                <h4 class="block__one-price two">12 000 руб</h4>
                                <a href="https://t.me/numerostar" class='href_card'>Жми сюда, чтобы узнать больше</a>
                            </div>
                            <nav class="menu-block mobile">
                                <div class="menu_button" id="slide_four_menu_button_mobile">
                                    <div class="plus" id="slide_four_plus_mobile"></div>
                                    <p class="menu_title">Для вас, если вы готовы</p>
                                </div>
                                <ul class="menu_content" id="slide_four_menu_content_mobile">
                                    <li>⁃ узнать все о своём Роде и семейной карме</li>
                                    <li>⁃ начать жить счастливую жизнь без обид и душевной боли</li>
                                    <li>⁃ отпустить прошлое и открыть дверь в счастливое будущее
                                    </li>
                                    <li>⁃ стать хозяином и кузнецом своей судьбы</li>
                                </ul>
                            </nav>
                            <nav class="menu-block two mobile">
                                <div class="menu_button" id="slide_four_menu_button_two_mobile">
                                    <div class="plus" id="slide_four_plus_two_mobile"></div>
                                    <p class="menu_title">Что мы проработаем на консультации?</p>
                                </div>
                                <ul class="menu_content" id="slide_four_menu_content_two_mobile">
                                    <li>⁃ семейную и личную карму</li>
                                    <li> ⁃ кармические узлы, препятствия</li>
                                    <li>⁃ жизненные задачи</li>
                                    <li>⁃ причину неудач, тягот и практическое решение всех проблем</li>
                                    <li>⁃ ваше предназначение и путь Души.</li>
                                </ul>
                            </nav>
                        </div>
                        <div class="pagefive-block_two">
                            <nav class="menu-block">
                                <div class="menu_button" id="slide_four_menu_button">
                                    <div class="plus" id="slide_four_plus"></div>
                                    <p class="menu_title">Для вас, если вы готовы</p>
                                </div>
                                <ul class="menu_content" id="slide_four_menu_content">
                                    <li>⁃ узнать все о своём Роде и семейной карме</li>
                                    <li>⁃ начать жить счастливую жизнь без обид и душевной боли</li>
                                    <li>⁃ отпустить прошлое и открыть дверь в счастливое будущее
                                    </li>
                                    <li>⁃ стать хозяином и кузнецом своей судьбы</li>
                                </ul>
                            </nav>
                            <nav class="menu-block two">
                                <div class="menu_button" id="slide_four_menu_button_two">
                                    <div class="plus" id="slide_four_plus_two"></div>
                                    <p class="menu_title">Что мы проработаем на консультации?</p>
                                </div>
                                <ul class="menu_content" id="slide_four_menu_content_two">
                                    <li>⁃ семейную и личную карму</li>
                                    <li> ⁃ кармические узлы, препятствия</li>
                                    <li>⁃ жизненные задачи</li>
                                    <li>⁃ причину неудач, тягот и практическое решение всех проблем</li>
                                    <li>⁃ ваше предназначение и путь Души.</li>
                                </ul>
                            </nav>
                            <div class="block_two" id="slide_four_block">
                                <p class="description">Самая мистическая из консультаций, включающая в себя большой блок из Инструкции к счастью. Ее можно сравнить с глубокой психотерапией, которая подразумевает серьёзную исцеляющую работу. Успех полностью зависит от вашей готовности выполнять мои практические рекомендации!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide 5">
                <div class="container five">
                    <h2 class="title five">Другие <span>услуги</span></h2>
                    <div class="pagefive-content">
                        <div class="pagefive-block_one">
                            <div class="block_one__content">
                                <div class="block__one-img five"><img src="<?php echo get_template_directory_uri()?>/img/card5.png" alt=""></div>
                                <h4 class="block__one-title">Концентрат</h4>
                                <div class="block__one-description">
                                    <li> от 20 мин + анализ 1 даты</li>
                                    <li>+авторские медитации</li>
                                </div>
                                <h4 class="block__one-price">3 000 грн</h4>
                                <h4 class="block__one-price two">8 700 руб</h4>
                                <a href="https://t.me/numerostar" class='href_card'>Жми сюда, чтобы узнать больше</a>
                            </div>
                            <nav class="menu-block mobile">
                                <div class="menu_button" id="slide_five_menu_button_mobile">
                                    <div class="plus" id="slide_five_plus_mobile"></div>
                                    <p class="menu_title">Для вас, если вы готовы</p>
                                </div>
                                <ul class="menu_content" id="slide_five_menu_content_mobile">
                                    <li>⁃ получить исчерпывающий ответ на один максимально волнующий вас вопрос</li>
                                    <li>⁃ следовать практическим советам, активно работать и получать 100% результат в кратчайшие сроки.
                                    </li>
                                </ul>

                            </nav>
                            <nav class="menu-block two mobile">
                                <div class="menu_button" id="slide_five_menu_button_two_mobile">
                                    <div class="plus" id="slide_five_plus_two_mobile"></div>
                                    <p class="menu_title">Что мы проработаем на консультации?</p>
                                </div>
                                <ul class="menu_content" id="slide_five_menu_content_two_mobile">
                                    <li>один беспокоящий Вас вопрос, к примеру:</li>
                                    <li> ⁃ Какую профессию выбрать?</li>
                                    <li>⁃ Стоит ли переезжать в этом году?</li>
                                    <li>⁃ Когда лучше продать квартиру?</li>
                                    <li>⁃ Как найти свой источник ресурса?</li>
                                    <li> ⁃ В чем причина моих личных неудач?</li>
                                    <li> ⁃ Какова совместимость с данным партнёром?</li>
                                    <li> - Подходит ли мне моя фамилия?</li>
                                    <li>- Как выбрать ребенку имя?</li>
                                </ul>
                            </nav>
                        </div>
                        <div class="pagefive-block_two">
                            <nav class="menu-block">
                                <div class="menu_button" id="slide_five_menu_button">
                                    <div class="plus" id="slide_five_plus"></div>
                                    <p class="menu_title">Для вас, если вы готовы</p>
                                </div>
                                <ul class="menu_content" id="slide_five_menu_content">
                                    <li>⁃ получить исчерпывающий ответ на один максимально волнующий вас вопрос</li>
                                    <li>⁃ следовать практическим советам, активно работать и получать 100% результат в кратчайшие сроки.
                                    </li>
                                </ul>

                            </nav>
                            <nav class="menu-block two">
                                <div class="menu_button" id="slide_five_menu_button_two">
                                    <div class="plus" id="slide_five_plus_two"></div>
                                    <p class="menu_title">Что мы проработаем на консультации?</p>
                                </div>
                                <ul class="menu_content" id="slide_five_menu_content_two">
                                    <li>один беспокоящий Вас вопрос, к примеру:</li>
                                    <li> ⁃ Какую профессию выбрать?</li>
                                    <li>⁃ Стоит ли переезжать в этом году?</li>
                                    <li>⁃ Когда лучше продать квартиру?</li>
                                    <li>⁃ Как найти свой источник ресурса?</li>
                                    <li> ⁃ В чем причина моих личных неудач?</li>
                                    <li> ⁃ Какова совместимость с данным партнёром?</li>
                                    <li> - Подходит ли мне моя фамилия?</li>
                                    <li>- Как выбрать ребенку имя?</li>
                                </ul>
                            </nav>
                            <div class="block_two" id="slide_five_block">
                                <p class="description">Консультация подразумевает обратную связь в течение двух дней после предоставления материала. Идеально подходит вам, если ваш запрос ограничивается одной узкой темой.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=" page_six" id="comment">
            <div class="container six">
                <h2 class="title six">Отзывы <span>клиентов</span></h2>
                <div class="client-card_block">
                    <div class="card">
                        <div class="card_content">
                            <div class="client">
                                <img src="<?php echo get_template_directory_uri()?>/img/client1.svg" alt="" class="client_img">
                                <div class="client_title">Николай Степанов</div>
                            </div>
                            <p class="description">Маша, здравствуйте! Скажу честно, вы волшебница! Ваши
                                консультации и
                                медитации просто перевернули мою жизнь, не шутка! За те две недели, что мы с вами
                                работаем, моя жизнь изменилась до неузнаваемости, у меня прет просто: деньги,
                                работа, а
                                особенно личная жизнь. Я честно признаюсь, давно не испытывал к себе такого внимания
                                женского пола, при этом будучи инициатором! Маша, «Папа в шоке», спасибо вам
                                огромное!
                            </p>
                        </div>
                    </div>
                    <div class="card two">
                        <div class="card_content">
                            <div class="client">
                                <img src="<?php echo get_template_directory_uri()?>/img/client2.svg" alt="" class="client_img">
                                <div class="client_title">Вера</div>
                            </div>
                            <p class="description">Добрый вечер! У меня изменилось многое! Я проходила марафон в
                                апреле,
                                тогда же выяснила, что у меня есть задатки массажиста! В июне, после карантина
                                закончила
                                курсы и сейчас в поиске новой работы. (До этого 12 лет в офисах и не понимала, что
                                это
                                на самом деле не мое)
                            </p>
                        </div>
                    </div>
                    <div class="card three">
                        <div class="card_content">
                            <div class="client">
                                <img src="<?php echo get_template_directory_uri()?>/img/client3.svg" alt="" class="client_img">
                                <div class="client_title">Ирина Ч</div>
                            </div>
                            <p class="description">Мария, добрый вечер! Только что медитировала, ощущения
                                неимоверные: и
                                смешно, и даже какое-то возбуждение было момент, затем слезы радости. Ощущение, что
                                меня
                                понимают такой, какая я есть и непередаваемые ощущения от реализации своей, пожалуй,
                                единственной мечты! Благодарю вас, что хоть в эти минуты я почувствовала себя
                                свободной
                                от ноши. Вы дарите надежду! Спасибо вам за это!
                            </p>
                        </div>
                    </div>
                    <div class="card four">
                        <div class="card_content">
                            <img src="<?php echo get_template_directory_uri()?>/img/Group 12.svg" alt="">
                            <p class="insta_title">Нажми на кнопку и посмотри все отзывы</p>
                            <a href="https://www.instagram.com/s/aGlnaGxpZ2h0OjE3ODU1MDkxNDc1NjU3MTAz?igshid=1we7gyco3k1vw"><button class="insta_button">перейти</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=" page_last" id='social'>
            <div class="container last">
                <h2 class="title last">
                    <span>Я</span> в соцсетях
                </h2>
                <div class="last_page__content">
                    <div class="last_page first">
                        <div class="img_back one" onclick="window.open('https://instagram.com/numerostar?igshid=1vtardxwl26zs')">
                            <img src="<?php echo get_template_directory_uri()?>/img/last11.svg" alt="">
                        </div>
                        <div class="img_back two" onclick="window.open('https://t.me/numerostarr')">
                            <img src="<?php echo get_template_directory_uri()?>/img/last12.svg" alt="">
                        </div>
                    </div>
                    <div class="last_page second">
                        <img src="<?php echo get_template_directory_uri()?>/img/last.png" alt="">
                    </div>
                    <div class="last_page third" onclick="window.open('https://www.youtube.com/channel/UCum_vXnciuHYaCvTwx2T4KQ')">
                        <div class="img_back three">
                            <img src="<?php echo get_template_directory_uri()?>/img/last13.svg" alt="">
                        </div>
                        <div class="img_back four" onclick="window.open('https://www.facebook.com/highvoltagemars')">
                            <img src="<?php echo get_template_directory_uri()?>/img/last14.svg" alt="">
                        </div>
                    </div>
                </div>
                <div class='copyright_sponge'>
                    <p class='copyright__text'>разработано в <a href="https://sponge.com.ua/">Sponge D&D</a></p>
                </div>
            </div>

        </div>
    </div>
</main>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.9/fullpage.min.js"
        integrity="sha512-Gx/C4x1qubng2MWpJIxTPuWch9O88dhFFfpIl3WlqH0jPHtCiNdYsmJBFX0q5gIzFHmwkPzzYTlZC/Q7zgbwCw=="
        crossorigin="anonymous"></script>
<script src="<?php echo get_template_directory_uri()?>/script.js"></script>
<script>
    "use strict";
    var $ = jQuery;
    if ($(window).width() < 1280) {
        $('.weekend.one').on('click', function(){
            $('.marathon_blocks.one').toggle()
            $('.plus.marathon_one').toggleClass('is-active');
        })
        $('.weekend.two').on('click', function(){
            $('.marathon_blocks.two').toggle()
            $('.plus.marathon_two').toggleClass('is-active');
        })
        $('.weekend.three').on('click', function(){
            $('.marathon_blocks.three').toggle()
            $('.plus.marathon_three').toggleClass('is-active');
        })
        $('.weekend.four').on('click', function(){
            $('.marathon_blocks.four').toggle()
            $('.plus.marathon_four').toggleClass('is-active');
        })
    }

</script>

</body>

</html>