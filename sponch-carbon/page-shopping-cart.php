<?php

get_header();

if (isset($_POST['buy-product-btn'])){
    $color = $_POST['selected-color'];
    $prodID = $_POST['tovar-id'];
    $countTov = $_POST['col-tov'];
    $product = wc_get_product($prodID);

    WC()->cart->add_to_cart($prodID, $countTov,0,array(),array('color' => $color));

    header('Location: /shopping-cart');

}

if (isset($_POST['change-color'])){
    $idTovar = $_POST['prodID'];
    $color = $_POST['color'];
    $countTov = $_POST['col-tov'];
    $cart_item_key = $_POST['key'];
    WC()->cart->remove_cart_item($cart_item_key);
    WC()->cart->add_to_cart($idTovar, $countTov,0,array(),array('color' => $color));

}

if (isset($_POST['minus-product'])){
    $prodID = $_POST['tovar-id'];
    $countTov = $_POST['col-tov'];
    $key = $_POST['key'];
    $color = $_POST['selected-color'];
    WC()->cart->set_quantity($key,$countTov );
//    WC()->cart->remove_cart_item($key);
//    WC()->cart->add_to_cart($prodID, $countTov,0,array(),array('color' => $color));
}

?>
    <style>
        .quantity input{
            width: 50px;
            text-align: center;
            background-color: #e5e5e5;
            border: none;
        }
        /* .is-active{
            -webkit-box-shadow: 0px 0px 0px 1px rgba(239,95,64,1);
            -moz-box-shadow: 0px 0px 0px 1px rgba(239,95,64,1);
            box-shadow: 0px 0px 0px 1px rgba(239,95,64,1);
            border: 7px solid #e5e5e5;
            width: 34px;
            height: 34px;
            margin: 0px;
            box-sizing: unset;
            margin: 0px !important;
            box-sizing: unset;
        } */
    </style>
    <main class="wrapper">
        <div class="content">
            <div class="container_main">
                <div class="title">КОРЗИНА</div>
                <?php

                    foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ):
                        $_product   = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
                        $product_id = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );

                        if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_cart_item_visible', true, $cart_item, $cart_item_key ) ):
                            $product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '', $cart_item, $cart_item_key );

                            ?>
                <div class="content_main" style="margin-bottom: 20px">

                        <?php
                        echo apply_filters( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                            'woocommerce_cart_item_remove_link',
                            sprintf(
                                '<a href="%s" class="remove" aria-label="%s" data-product_id="%s" data-product_sku="%s"><button class="close card"></button></a>',
                                esc_url( wc_get_cart_remove_url( $cart_item_key ) ),
                                esc_html__( 'Remove this item', 'woocommerce' ),
                                esc_attr( $product_id ),
                                esc_attr( $_product->get_sku() )
                            ),
                            $cart_item_key
                        );
                        ?>

                    <div class="card_title_first">
                        <?php
                        if ( ! $product_permalink ) {
                            echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key ) . '&nbsp;' );
                        } else {
                            echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', sprintf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $_product->get_name() ), $cart_item, $cart_item_key ) );
                        }

                        do_action( 'woocommerce_after_cart_item_name', $cart_item, $cart_item_key );

                        // Meta data.
                        echo wc_get_formatted_cart_item_data( $cart_item ); // PHPCS: XSS ok.

                        // Backorder notification.
                        if ( $_product->backorders_require_notification() && $_product->is_on_backorder( $cart_item['quantity'] ) ) {
                            echo wp_kses_post( apply_filters( 'woocommerce_cart_item_backorder_notification', '<p class="backorder_notification">' . esc_html__( 'Available on backorder', 'woocommerce' ) . '</p>', $product_id ) );
                        }
                        ?>
                    </div>
                    <div class="icon_card">
                        <?php
                        $thumbnail = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image('150'), $cart_item, $cart_item_key );

                        if ( ! $product_permalink ) {
                            echo $thumbnail; // PHPCS: XSS ok.
                        } else {
                            printf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $thumbnail ); // PHPCS: XSS ok.
                        }
                        ?>
<!--                        <img src="/wp-content/themes/sponch-carbon/img/mobile/ring.svg" alt="" class="icon" />-->
                    </div>
                    <div class="card_content">
                        <div class="card_title">
                            <?php
                            if ( ! $product_permalink ) {
                                echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key ) . '&nbsp;' );
                            } else {
                                echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', sprintf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $_product->get_name() ), $cart_item, $cart_item_key ) );
                            }

                            do_action( 'woocommerce_after_cart_item_name', $cart_item, $cart_item_key );

                            // Meta data.
                            echo wc_get_formatted_cart_item_data( $cart_item ); // PHPCS: XSS ok.

                            // Backorder notification.
                            if ( $_product->backorders_require_notification() && $_product->is_on_backorder( $cart_item['quantity'] ) ) {
                                echo wp_kses_post( apply_filters( 'woocommerce_cart_item_backorder_notification', '<p class="backorder_notification">' . esc_html__( 'Available on backorder', 'woocommerce' ) . '</p>', $product_id ) );
                            }
                            ?>
                        </div>
                        <div class="card_main">
                            <div class="card_main_title">цвет:</div>
                            <div class="card_content_squer">
                                <a id="color-2-<?php echo $product_id.'-'.$cart_item_key; ?>"  class="squer <?php if ($cart_item['color'] == 2) {echo 'is-active';}?> two"></a>
                                <a id="color-1-<?php echo $product_id.'-'.$cart_item_key; ?>"  class="squer <?php if ($cart_item['color'] == 1) {echo 'is-active';}?>"></a>
                                <a id="color-3-<?php echo $product_id.'-'.$cart_item_key; ?>"  class="squer <?php if ($cart_item['color'] == 3) {echo 'is-active';}?> three"></a>
                                <a id="color-4-<?php echo $product_id.'-'.$cart_item_key; ?>"  class="squer <?php if ($cart_item['color'] == 4) {echo 'is-active';}?> four"></a>
                                <a id="color-5-<?php echo $product_id.'-'.$cart_item_key; ?>"  class="squer <?php if ($cart_item['color'] == 5) {echo 'is-active';}?> five"></a>
                                <a id="color-6-<?php echo $product_id.'-'.$cart_item_key; ?>"  class="squer <?php if ($cart_item['color'] == 6) {echo 'is-active';}?> six"></a>
                                <a id="color-7-<?php echo $product_id.'-'.$cart_item_key; ?>"  class="squer <?php if ($cart_item['color'] == 7) {echo 'is-active';}?> seven"></a>
                                <a id="color-8-<?php echo $product_id.'-'.$cart_item_key; ?>"  class="squer <?php if ($cart_item['color'] == 8) {echo 'is-active';}?> eight"></a>
                            </div>
<!--                            <input type="hidden" id="key-for-color---><?php //echo $product_id; ?><!--" value="--><?php //echo $cart_item_key; ?><!--">-->
                        </div>
                        <div class="card_price">
                            <div class="card_price_num">
                                <?php
                                $product_price =  apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key );
                                $product_price = preg_replace( '/[^.\d]/', '', $product_price  );
                                echo $product_price;
                                ?>
                            </div>
                            <div class="card_price_word">RUB</div>
                        </div>
                    </div>
                    <div class="card_buy">
                        <div class="promo_content">
                            <div class="buy_title">У меня есть промокод</div>
                            <input type="text" name="code" class="promo" disabled/>
                            </div>
                            <div class="select_num">
                                <div>
                                    <input type="hidden" class="prod-id-<?php echo $cart_item_key?>" value="<?php echo $product_id;?>">
                                    <button id="btn-minus-<?php echo $cart_item_key.'-'.$cart_item['color']?>" class="btn-minus">
                                        <svg width="21" height="1" viewBox="0 0 21 1" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <line y1="0.5" x2="21" y2="0.5" stroke="black"/>
                                        </svg>
                                    </button>
                                </div>
                            <div class="amount">
                                <?php
                                if ( $_product->is_sold_individually() ) {
                                    $product_quantity = sprintf( '1 <input type="hidden" name="cart[%s][qty]" value="1" />', $cart_item_key );
                                } else {
                                    $product_quantity = woocommerce_quantity_input(
                                        array(
                                            'input_name'   => "cart[{$cart_item_key}][qty]",
                                            'input_value'  => $cart_item['quantity'],
                                            'max_value'    => $_product->get_max_purchase_quantity(),
                                            'min_value'    => '0',
                                            'product_name' => $_product->get_name(),
                                            'classes'      => apply_filters( 'woocommerce_quantity_input_classes', array( 'input-text', 'qty', 'text', $cart_item_key, 'for-color-'.$product_id.'-'.$cart_item_key ), $product ),
                                        ),
                                        $_product,
                                        false
                                    );
                                }

                                echo apply_filters( 'woocommerce_cart_item_quantity', $product_quantity, $cart_item_key, $cart_item ); // PHPCS: XSS ok.
                                ?>
                            </div>
                                <div>
                                    <button id="btn-plus-<?php echo $cart_item_key.'-'.$cart_item['color']?>" class="btn-plus">
                                        <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <line y1="10.5" x2="21" y2="10.5" stroke="black"/>
                                            <line x1="10.5" y1="2.0815e-08" x2="10.5" y2="21" stroke="black"/>
                                        </svg>
                                    </button>
                                </div>
                        </div>
                    </div>
                    <div class="sum_block">
                        
                        <div class="sum-block-sale" style="display:none;">
                            <div class="sum">
                                
                            </div>
                            <div class="sum_word">RUB</div>
                        </div>
                        
                        <div class="sum">
                            <?php
                            $total =  apply_filters( 'woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ), $cart_item, $cart_item_key ); // PHPCS: XSS ok.
                            $total = preg_replace( '/[^.\d]/', '', $total  );
                            echo $total;
                            ?>
                        </div>
                        <div class="sum_word">RUB</div>
                    </div>
                </div>
                            <?php
                        endif;

                    endforeach;
                    ?>
            </div>
            <div class="container_main_two">
                <div class="container">
                    <button class="continue material-bubble" onclick="location.href='/catalog';">
                        <a href="/catalog" class="continue_text">ПРОДОЛЖИТЬ ПОКУПКИ</a>
                    </button>
                    <div class="total">
                        <div class="total_head">
                            <div class="total_text">Итого:</div>
                            <div class="total_sum">
                                <div class="total_sum_num"><?php $sub_total = WC()->cart->get_cart_subtotal();  echo $sub_total;?></div>
                                <div class="total_sum_text">RUB</div>
                            </div>
                        </div>
                        <button class="total_button material-bubble" onclick="location.href='/payment';">
                            <a href ="/<?php if ($sub_total == '0'){echo 'catalog';} else echo 'payment'?>" class="total_button_text">ОФОРМИТЬ ЗАКАЗ</a>
                        </button>
                    </div>
                </div>
            </div>
        </div>    
    </main>

    <script>
        "use strict";
        var $ = jQuery;

        $('.qty').attr("disabled", "disabled");

        $('.btn-plus').on('click', function () {
            var id = $(this).attr("id");
            id = id.split("-");
            var count = $('.'+id[2]+'').val();
            var color = id[3];
            count = parseInt(count) + 1;
            $('.'+id[2]+'').val(count);
            var prodID = $('.prod-id-'+id[2]+'').val();
            $.post(
                '',
                {
                    'buy-product-btn':"",
                    'tovar-id': prodID,
                    'selected-color':color,
                    'col-tov': 1
                },
                function () {
                    location.reload();
                    $('.qty').attr("disabled", "disabled");
                }
            )
        });

        $('.btn-minus').on('click', function () {
            var id = $(this).attr("id");
            id = id.split("-");
            var count = $('.'+id[2]+'').val();
            count = parseInt(count) - 1;
            if (count > 0){
                $('.'+id[2]+'').val(count);
            }
            var color = id[3];
            var prodID = $('.prod-id-'+id[2]+'').val();
            $.post(
                '',
                {
                    'minus-product':"",
                    'key':id[2],
                    'tovar-id': prodID,
                    'selected-color':color,
                    'col-tov': count
                },
                function () {
                    location.reload();
                    $('.qty').attr("disabled", "disabled");
                }
            )
        });
        var squer = $('.squer');
        squer.on('click', function () {
            var prodID = $(this).attr('id');
            prodID = prodID.split('-');
            var color = prodID[1];
            var key = prodID[3];
            prodID = prodID[2];
            var count = $('.for-color-'+prodID+'-'+key+'').val();
            // var key = $('#key-for-color-'+prodID+'').val();
            for (var i = 1; i <= 8; i++) {
                $('#color-' + i + '-' + prodID + '').removeClass('is-active');
                $(this).addClass('is-active')
            }
            $.post(
                '',
                {
                    'change-color':"",
                    'color': color,
                    'prodID': prodID,
                    'col-tov': count,
                    'key': key,
                },
                function () {
                    location.reload();
                }
            )
        })
    </script>

<?php

get_footer();