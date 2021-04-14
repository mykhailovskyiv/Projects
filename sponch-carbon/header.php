<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <title><?php echo wp_title(); ?></title>
    <link rel="icon" href="<?php echo get_template_directory_uri()?>/img/favicon.png" type="image/x-icon">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/normalize.css">
    <link rel="stylesheet" href="https://bootstraptema.ru/plugins/2015/bootstrap3/bootstrap.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://bootstraptema.ru/plugins/2015/b-v3-3-6/bootstrap.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/jquery.mousewheel.min.js"></script>
    
    <?php wp_head(); ?>
</head>
<body>
<header>
    <div id="menu" class="container-head">
        <nav class="head">
            <?php global $woocommerce; ?>
            <a href="<?php echo home_url(); ?>" class="logo_container">
                <img src="<?php echo get_template_directory_uri()?>/img/logo.svg" class="logo" alt=""/>
            </a>
            <!-- <a href="<?php echo home_url(); ?>" class="logo_container_black">
                <img src="<?php echo get_template_directory_uri()?>/img/vector_black.svg" class="logo_black" alt=""/>
            </a> -->
            <a href="/catalog" class="link">КАТАЛОГ</a>
            <a href="/shipping-and-payment" class="link">УСЛОВИЯ ДОСТАВКИ И ОПЛАТЫ</a>
            <a href="#" class="link">КОРПОРАТИВНЫМ КЛИЕНТАМ</a>
            <a href="/callback" class="link">КОНТАКТЫ</a>
            <a href="/track-order" class="link">ОТСЛЕДИТЬ ЗАКАЗ</a>
            <a href="<?php echo home_url(); ?>" class="tag_name">
                <img src="<?php echo get_template_directory_uri()?>/img/sloy.svg" class="sloy" alt=""/>
            </a>
            <!-- <a href="<?php echo home_url(); ?>" class="tag_name_two">
                <img src="<?php echo get_template_directory_uri()?>/img/union_black.svg" class="sloy" alt=""/>
            </a> -->
            <a href="/shopping-cart" class="logo_two">
                <img src="<?php echo get_template_directory_uri()?>/img/korzina.svg" alt="korzina" class="korzina" alt=""/>
                <span id="shopping-cart-count" class="shopping-cart-count"><?php echo sprintf($woocommerce->cart->cart_contents_count); ?></span>
            </a>
            <!-- <a href="<?php echo home_url(); ?>" class="logo_two_black">
                <img src="<?php echo get_template_directory_uri()?>/img/korzina_black.svg" class="vector_black" alt=""/>
                <span id="shopping-cart-count" class="shopping-cart-count"><?php echo sprintf($woocommerce->cart->cart_contents_count); ?></span>

            </a> -->
            <!-- <a class="menu">
                <div class="first_line"></div>
                <div class="second_line"></div>
                <div class="third_line"></div>
            </a> -->
            <div id="close-menu">
                <button class="c-hamburger c-hamburger-line">
                    <span class="line one"></span>
                    <span class="line two"></span>
                    <span class="line three"></span>
                </button>
            </div>
        </nav>
    </div>
    <div id="mobile-menu-block" style="display: none">
        <div class="mobile-menu-body">
            <ul>
                <li><a href="/catalog">КАТАЛОГ</a></li>
                <li>
                    <a href="/shipping-and-payment">УСЛОВИЯ ДОСТАВКИ И ОПЛАТЫ</a>
                </li>
                <li>
                    <a href="#">КОРПОРАТИВНЫМ КЛИЕНТАМ</a>
                </li>
                <li>
                    <a href="/callback">КОНТАКТЫ</a>
                </li>
                <li> 
                    <a href="/track-order">ОТСЛЕДИТЬ ЗАКАЗ</a>
                </li>
            </ul>
        </div>
    </div>
</header>