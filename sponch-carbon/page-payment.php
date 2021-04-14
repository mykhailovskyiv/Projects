<?php
get_header();
?>
    <main class="wrapper">
        <div class="content">
            <div class="checkout-block">
                <h1>оформление заказа</h1>
                <?php
                echo do_shortcode('[woocommerce_checkout]');
                ?>
            </div>
        </div>
    </main>
<?php

get_footer();