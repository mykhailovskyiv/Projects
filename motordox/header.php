<html>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <title><?php wp_title(); ?></title>
    <link rel="icon" href="<?php echo get_template_directory_uri()?>/img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/normalize.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri()?>/script.js"></script>
    <?php wp_head(); ?>
</head>
<body>
<header>
    <div class="container_header">
        <div class="logo">
            <a href="<?php echo home_url();?>">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="">
            </a>
        </div>
        <form  action="/search" method="post" class="search-block">
            <input type="text" name="search" id="search-input" class="<?php if (is_front_page()){echo 'search-block-disabled';}?> ">
            <button class="<?php if (is_front_page()){echo 'search-block-disabled';}?> "><img src="<?php echo get_template_directory_uri(); ?>/img/mobile/home-search.svg" alt=""></button>
        </form>
        <?php
        if (is_user_logged_in()){

            $user = get_user_meta(get_current_user_id());
            if ($user['first_name'][0] != '' || $user['last_name'][0] != ''){
                $fio = $user['first_name'][0].' '.$user['last_name'][0];
            } else{
                $fio = $user['nickname'][0];
            }

            ?>
            <div class="profile-head">
                <div>
                    <a href="/account"><img src="<?php echo get_template_directory_uri(); ?>/img/mobile/profile-icon.svg" alt=""></a>
                    <a href="/account" class="profile-name"><?php echo $fio; ?></a>
                </div>
            </div>
            <div class="sing-up-btn">
<!--                <a href="/account">Sing up</a>-->
                <div class="search-icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/mobile/search-icon.svg" alt="">
                </div>
                <div class="profile-icon">
                    <a href="/account"><img src="<?php echo get_template_directory_uri(); ?>/img/mobile/profile-icon.svg" alt=""></a>
                </div>
            </div>
            <?php
        } else{
            ?>
            <div class="sing-up-btn">
                <a href="/sing-up">Sing up</a>
                <div class="search-icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/mobile/search-icon.svg" alt="">
                </div>
                <div class="profile-icon">
                    <a href="/account"><img src="<?php echo get_template_directory_uri(); ?>/img/mobile/profile-icon.svg" alt=""></a>
                </div>
            </div>
            <?php
        }
        ?>


        <div class="menu">
            <img id="openMenu" src="<?php echo get_template_directory_uri(); ?>/img/menu.svg" alt="">
            <img id="closeMenu" src="<?php echo get_template_directory_uri(); ?>/img/menu-close.svg" alt="">
        </div>
        <div class="menu_block_container">
            <div class="menu-block">
                    <a href="/pricing">
                        <div>Pricing</div>
                    </a>
                    <a href="<?php echo home_url()?>#figure">
                        <div>Catalog manuals</div>
                    </a>
                    <a href="<?php echo home_url()?>#about">
                        <div>About manuals</div>
                    </a>
                    <a href="/faq">
                        <div>FAQ</div>
                    </a>
            </div>
        <div>
    </div>
    <form action="/search" method="post" class="search-block-home_mobile">
        <input type="text" name="search" id="home-search">
        <button><div class="home-search-img"><img src="<?php echo get_template_directory_uri(); ?>/img/mobile/home-search.svg" alt=""></div></button>
    </form>
</header>