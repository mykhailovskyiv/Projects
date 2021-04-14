<footer>

    <div class="footer-top-block">
        <div class="foo-menu">
            <div class="foo-menu-block">
                <p><a href="">My orders</a></p>
                <p><a href="<?php echo home_url()?>#categories">Parts catalog</a></p>
                <p><a href="<?php echo home_url()?>#categories">Service manual</a></p>
            </div>
            <div class="foo-menu-block two">
                <p><a href="<?php echo home_url()?>#about">About us</a></p>
                <p><a href="/contact-us">Contact us</a></p>
                <p><a href="/faq">FAQ</a></p>
            </div>
            <div class="foo-menu-block">
                <p><a href="/legal-notice">Legal notice</a></p>
                <p><a href="">User agreements</a></p>
            </div>
        </div>
        <div class="subscribe">
            <label>Stay in touch!</label>
            <div class="subscr-form">
                <input type="text" placeholder="Enter e-mail address" id="">
                <button>Subscribe</button>
            </div>
            <p>Join for free and be the first to know about new products, latest news, technologies, and much more!</p>
        </div>
    </div>
    <div class="copy"><label>© 2019—<?php echo date('Y');?> Motordox</label></div>
    <?php wp_footer(); ?>
    <script>
        "use strict";
        var $ = jQuery;

        $('#openMenu').on('click', function () {
            $('#openMenu').css("display", "none");
            $('#closeMenu').css("display", "block");
            $('.menu-block').css("display", "block");
        });

        $('#closeMenu').on('click', function () {
            $('#closeMenu').css("display", "none");
            $('#openMenu').css("display", "block");
            $('.menu-block').css("display", "none");
        });
      
        $('.close_menu').on('click', function () {
            $('.settings_up').css("display", "none");
            $('.account-block').css("display", "flex");
        });

        $('.icon_settings').on('click', function () {
            $('.account-block').css("display", "none");
            $('.settings_up').css("display", "flex");
        });
     </script>
</footer>