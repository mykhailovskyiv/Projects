<?php

get_header();
?>
<main class="wrapper">

    <div class="content">

        <div class="container-main">
            <div class="single-product">
                <h1>Кольцо с дизайнерским оформлением</h1>
            </div>
            <div class="product-gallery-block">
                <div class="row">

                    <div class="col-md-8 col-md-offset-2">
                        <div id="carousel" class="carousel slide" data-interval="0" data-ride="carousel">
                            <div class="carousel-inner gallery-preview">
                                <div class="item active">
                                    <img src="<?php echo get_template_directory_uri()?>/img/mobile/k2.svg" alt="" >
                                </div>
                                <div class="item">
                                    <img src="<?php echo get_template_directory_uri()?>/img/mobile/_k 3.svg" alt="">
                                </div>
                                <div class="item">
                                    <img src="<?php echo get_template_directory_uri()?>/img/mobile/_k 4.svg" alt="" >
                                </div>
                                <div class="item">
                                    <img src="<?php echo get_template_directory_uri()?>/img/mobile/k2.svg" alt="">
                                </div>
                                <div class="item">
                                    <img src="<?php echo get_template_directory_uri()?>/img/mobile/_k 3.svg" alt="">
                                </div>
                                <div class="item">
                                    <img src="<?php echo get_template_directory_uri()?>/img/mobile/k2.svg" alt="">
                                </div>
                                <div class="item">
                                    <img src="<?php echo get_template_directory_uri()?>/img/mobile/_k 4.svg" alt="">
                                </div>
                                <div class="item">
                                    <img src="<?php echo get_template_directory_uri()?>/img/mobile/k2.svg" alt="" >
                                </div>
                            </div>
                        </div>
                        <div class="clearfix">
                            <div class="menuWrapper prod-gallery-wrap">
                                <div class="menuLimiter">
                                    <menu class="menu-cat prod-gallery-carusel">
                                        <li class="menu-item thumb active-carousel"  data-target="#carousel" data-slide-to="0">
                                            <img  class="menu-block-link" src="<?php echo get_template_directory_uri()?>/img/mobile/k2.svg" alt="" >
                                        </li>
                                        <li class="menu-item thumb" data-target="#carousel" data-slide-to="1">
                                            <img class="menu-block-link" src="<?php echo get_template_directory_uri()?>/img/mobile/_k 3.svg" alt="">
                                        </li>
                                        <li class="menu-item thumb" data-target="#carousel" data-slide-to="2">
                                            <img class="menu-block-link" src="<?php echo get_template_directory_uri()?>/img/mobile/_k 4.svg" alt="" >
                                        </li>
                                        <li class="menu-item thumb" data-target="#carousel" data-slide-to="3">
                                            <img class="menu-block-link" src="<?php echo get_template_directory_uri()?>/img/mobile/k2.svg" alt="" >
                                        </li>
                                        <li class="menu-item thumb" data-target="#carousel" data-slide-to="4">
                                            <img class="menu-block-link" src="<?php echo get_template_directory_uri()?>/img/mobile/_k 3.svg" alt="">
                                        </li>
                                        <li class="menu-item thumb" data-target="#carousel" data-slide-to="5">
                                            <img class="menu-block-link" src="<?php echo get_template_directory_uri()?>/img/mobile/_k 4.svg" alt="" >
                                        </li>
                                    </menu>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="card_content card_content-product">
                <div class="card_main">
                    <div class="card_main_title">Выбери цвет:</div>
                    <div class="card_content_squer fix-prod-cart-squer">
                        <a href="#" class="squer"></a>
                        <a href="#" class="squer two"></a>
                        <a href="#" class="squer three"></a>
                        <a href="#" class="squer four"></a>
                        <a href="#" class="squer five"></a>
                        <a href="#" class="squer six"></a>
                        <a href="#" class="squer seven"></a>
                        <a href="#" class="squer eight"></a>
                        <a href="#" class="squer nine"></a>
                        <a href="#" class="squer ten"></a>
                        <a href="#" class="squer eleven"></a>
                        <a href="#" class="squer twelve"></a>
                        <a href="#" class="squer thi"></a>
                    </div>
                </div>
            </div>
            <div class="tov-price price-prod-cart">
                <label style="font-weight: 400 !important;">3 949 <span>RUB</span></label>
            </div>

            <div class="total">
                <div class="count count-cart">
                    <div>
                        <button class="plus lines">
                        </button>
                    </div>
                    <div>
                        <label style="font-weight: 400 !important;">1</label>
                    </div>
                    <div>
                        <button class="plus">
                        </button>
                    </div>
                </div>
                <form class="buy-btn" method="post" action="/checkout">
                    <button>КУПИТЬ</button>
                    <!--/checkout  -->
                </form>

            </div>

            <div class="total-btns total-btns-cart">
                <div>
                    <button class="continue-shopping">СДЕЛАТЬ ИНДИВИДУАЛЬНЫЙ ЗАКАЗ</button>
                </div>
            </div>

            <div class="prod-description">
                <label>О товаре:</label>
                <p>
                    По той же иллюзии, которая поднимает горизонт моря до уровня зрителя на склоне холма, собачье облако внизу исчезло. По той же иллюзии, которая поднимает горизонт моря до уровня зрителя на склоне холма, собачье облако внизу исчезло.
                </p>
                <p>
                    По той же иллюзии, которая поднимает горизонт моря до уровня зрителя на склоне холма, собачье облако внизу исчезло.
                </p>
            </div>

            <div class="prod-soc-block">
                <label>поделись в соцсетях:</label>
                <div class="prod-soc-block-icons">
                    <div><a href=""><img src="<?php echo get_template_directory_uri()?>/img/insta.svg" alt=""> instagram</a></div>
                    <div><a href=""><img src="<?php echo get_template_directory_uri()?>/img/facebook.svg" alt=""> facebook</a></div>
                    <div><a href=""><img src="<?php echo get_template_directory_uri()?>/img/twitter.svg" alt=""> tweet</a></div>
                </div>
            </div>

            <div class="prod-delivery">
                <label>УСЛОВИЯ ДОСТАВКИ:</label>
                <p></p>
            </div>

            <div class="prod-recommendation">
                <label class="prod-recommendation-label">Смотри также</label>
                <div class="recomend-cat">
                    <div class="tovar"><a href="/category">
                            <div class="tov-label">
                                <label for="">Ножи кухонные</label>
                            </div>
                            <div class="tov-img">
                                <div>
                                    <img src="<?php echo get_template_directory_uri()?>/img/mobile/real-carbon-fiber-pocket-knife-11.svg" alt="">
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="tovar two"><a href="/category">
                            <div class="tov-label">
                                <label for="">Кальяны</label>
                            </div>
                            <div class="tov-img">
                                <div>
                                    <img src="<?php echo get_template_directory_uri()?>/img/bong.svg" alt="">
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="tovar three"><a href="/category">
                            <div class="tov-label">
                                <label for="">Запанки</label>
                            </div>
                            <div class="tov-img">
                                <div>
                                    <img src="<?php echo get_template_directory_uri()?>/img/acces.svg" alt="">
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="menuWrapper">
                    <div class="menuLimiter">
                        <menu class="menu-cat">
                            <li class="menu-item">
                                <a class="menu-block-link" id="cases-menu">чехлы</a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-block-link" id="hookah-menu">кальян</a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-block-link" id="accessories-menu">аксессуары</a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-block-link" id="exclusive-menu">эксклюзив</a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-block-link" id="forhome-menu">для&nbsp;дома</a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-block-link" id="safe-menu">безопасность</a>
                            </li>
                        </menu>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        "use strict";
        // var $ = jQuery;
        //
        // $('.menu-item').on('click', function () {
        //     $('.menu-item').removeClass("active-carousel");
        //     $(this).addClass("active-carousel");
        // })
        //
        // $(".card_content_squer .squer").on('click', function () {
        //     $(".card_content_squer .squer").css('display', 'none'),
        // })
        //
        // var squer = $('.squer');
        //
        // squer.on('click', function () {
        //     squer.removeClass('is-active');
        //     $(this).addClass('is-active');
        // });

    </script>
</main>

<?php

get_footer();