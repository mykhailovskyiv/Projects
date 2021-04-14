
<footer>
    <div class="container">
        <div class="footer_content">
            <div class="footer_menu">
                <nav class="footer_nav navigation ">
                    <p class="nav_title">НАВИГАЦИЯ
                        <img src="<?php echo get_template_directory_uri()?>/img/mobile/arrow.svg" class="arrow" alt=""/>
                        <img src="<?php echo get_template_directory_uri()?>/img/mobile/arrow_up.svg" class="arrow_up" alt=""/>
                    </p>
                    <a href="<?php echo home_url(); ?>" class="nav_title next">ГЛАВНАЯ</a>
                    <a href="/catalog" class="nav_title next">КАТАЛОГ</a>
                    <a href="/shipping-and-payment" class="nav_title next">УСЛОВИЯ ДОСТАВКИ И ОПЛАТЫ</a>
                    <a href="#" class="nav_title next">КОРПОРАТИВНЫМ КЛИЕНТАМ</a>
                    <a href="/callback" class="nav_title next">КОНТАКТЫ</a>
                    <a href="/track-order" class="nav_title next last">ОТСЛЕДИТЬ ЗАКАЗ</a>
                </nav>
                <nav class="footer_nav contact">
                    <p class="nav_title">КОНТАКТЫ
                        <img src="<?php echo get_template_directory_uri()?>/img/mobile/arrow.svg" class="arrow" alt=""/>
                        <img src="<?php echo get_template_directory_uri()?>/img/mobile/arrow_up.svg" class="arrow_up" alt=""/>
                    </p>
                    <!-- <a href="https://wa.me/79292022456" target="_blank" class="nav_title next">+792-92-022-456</a> -->
                    <a href="tg://resolve?domain=@primecarbon" target="_blank" class="nav_title next">+792-92-022-456</a>
                    <!-- <a href="https://www.instagram.com/prime.carbon/" target="_blank" class="nav_title next">@prime.carbon</a> -->
                    <a href="mailto:primecarbon@yandex.ru" target="_blank" class="nav_title next last">primecarbon@yandex.ru</a>
                </nav>
            </div>
            <div class="subscribe">
                <p class="subscribe_title">БУДЬ В КУРСЕ!</p>
                <div class="subscribe_form">
                    <input
                            type="email"
                            name="email"
                            class="email"
                            placeholder="Email"
                    />
                    <button class="material-bubble">Подписаться</button>
<!--                    <a href="#" class="subscribe_button">-->
<!--                        <p class="subscribe_button_text">Подписаться</p>-->
<!--                    </a>-->
                </div>
                <div class="subscribe_description">
                    Присоединяйтесь бесплатно и узнавайте первыми о новых продуктах,
                    последних новостях, технологиях углеродного волокна, и о многом
                    другом!
                </div>
                <button class="material-bubble mob_sub">Подписаться</button>
<!--                <div class="subscribe_button two">-->
<!--                    <p class="subscribe_button_text">Подписаться</p>-->
<!--                </div>-->
                <div class="social_network">
                    <a href="https://www.instagram.com/prime.carbon/"><img src="<?php echo get_template_directory_uri()?>/img/insta.svg" class="insta" alt=""/></a>
                    <!-- <a href="#"><img src="<?php echo get_template_directory_uri()?>/img/facebook.svg" class="facebook" alt=""/></a>
                    <a href="#"><img src="<?php echo get_template_directory_uri()?>/img/twitter.svg" class="twitter" alt=""/></a> -->
                    <a href="tg://resolve?domain=@primecarbon"><img src="<?php echo get_template_directory_uri()?>/img/telega.svg" class="telega" alt=""/></a>
                    <a href="https://wa.me/79292022456"><img src="<?php echo get_template_directory_uri()?>/img/whatsapp.svg" class="whats" alt=""/></a>
                </div>
            </div>
            <div class="social_network two">
                <a href="https://www.instagram.com/prime.carbon/"><img src="<?php echo get_template_directory_uri()?>/img/insta.svg" class="insta" alt=""/></a>
                <!-- <a href="#"><img src="<?php echo get_template_directory_uri()?>/img/facebook.svg" class="facebook" alt=""/></a>
                <a href="#"><img src="<?php echo get_template_directory_uri()?>/img/twitter.svg" class="twitter" alt=""/></a> -->
                <a href="tg://resolve?domain=@primecarbon"><img src="<?php echo get_template_directory_uri()?>/img/telega.svg" class="telega" alt=""/></a>
                <a href="https://wa.me/79292022456"><img src="<?php echo get_template_directory_uri()?>/img/whatsapp.svg" class="whats" alt=""/></a>
            </div>
        </div>
        <div class="footer_end">

            <p class="copyright">© 2019—<?php echo date('Y');?> Русские композитные системы</p>
            <div class="copyright two" onclick="document.location.href = 'http://sponge.com.ua/'">
                <p>Разработано в &nbsp;</p>
                <p class="sponge">SPONGE D&D</p>
            </div>
        </div>
    </div>
    <div class="foo-line"></div>

</footer>

<script>
    "use strict";
    var $ = jQuery;
    
       
    if ($(window).width() <= 767) {
        $('.close-menu').css ('width', '24px')
    } else if ($(window).width() >=768) {
        $('.close-menu').css ('width', '34px')
    }
    $('.close-menu').on('click', function () {
        $('.menu').css("display", "flex");
        $('.close-menu').css("display", "none");

        // $('#mobile-menu-block').css("display", "none");
    })
    $('.home-individ-card-button').on('click', function(){
        $('#home-individ-card').css("display","flex");
        $('.home-individ').addClass('blur')
        $('.home-about').addClass('blur')
        $('.home-cat').addClass('blur')
        $('.home-cat-two').addClass('blur')
        $('.home-recom').addClass('blur')
        $('.home-new-tov').addClass('blur')
        $('.slider').addClass('blur')
        $('header').addClass('blur')
        $('footer').addClass('blur')
    })
    $('.close').on('click', function() {
        $('#home-individ-card').css("display", "none")
        $('.home-individ').removeClass('blur')
        $('.home-about').removeClass('blur')
        $('.home-cat').removeClass('blur')
        $('.home-cat-two').removeClass('blur')
        $('.home-recom').removeClass('blur')
        $('.home-new-tov').removeClass('blur')
        $('.slider').removeClass('blur')
        $('header').removeClass('blur')
        $('footer').removeClass('blur')
    })
    $('.individ-card-button').on('click', function(){
        $('#home-individ-card-two').css("display", "flex")
    })
    $('.close').on('click', function(){
        $('#home-individ-card-two').css("display", "none")
    })
    if ($(window).width() < 768) {
        $(".footer_nav.contact .nav_title").on('click', function () {
            $(".footer_nav.contact .nav_title.next").toggle(),
            $(".footer_nav.contact .nav_title .arrow").toggle(),
            $(".footer_nav.contact .nav_title .arrow_up").toggle()
        });

        $(".footer_nav.navigation .nav_title").on('click', function () {
            $(".footer_nav.navigation .nav_title.next").toggle(),
            $(".footer_nav.navigation .nav_title .arrow").toggle(),
            $(".footer_nav.navigation .nav_title .arrow_up").toggle();
        })
    }


</script>
<script src="<?php echo get_template_directory_uri()?>/animation.script.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/jquery.mousewheel.min.js"></script>
<script>
$(document).ready(function() {
    $('.menuLimiter').mousewheel(function(e, delta) {
        this.scrollLeft -= (delta * 40);
        e.preventDefault();
    });
});
</script>

    </body>

</html>