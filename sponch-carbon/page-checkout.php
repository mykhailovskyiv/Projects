<?php
get_header();

if (!isset($_POST['createOrder'])){
    if (!WC()->cart->is_empty()){
    $newOrder = wc_create_order();
    $orderID = $newOrder->get_id();
    $order = wc_get_order($orderID);
    }
}
if (isset($_POST['createOrder'])){
    $orderID = $_POST['createOrder'];
    $fio = $_POST['fio'];
    $tel = $_POST['tel'];
    $mail = $_POST['mail'];
    $city = $_POST['city'];

    $address = array(
        'first_name' => $fio,
        'email'      => $mail,
        'phone'      => $tel,
        'address_1'  => $city,
    );
    $order = wc_get_order($orderID);

    foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ){
        $itemID = $order->add_product($cart_item['data'], $cart_item['quantity'],array('color' => $cart_item['color']));
    }

    $order->set_address( $address, 'billing' );
    $order->update_status("completed");

    WC()->cart->empty_cart();
}


?>
    <main class="wrapper">

        <style>
            .form-err{
                font-size: 10px !important;
                font-weight: 600!important;
                color: red!important;
                display: none;
                line-height: 10px !important;
            }
            #s-b-3{
                color: #333;
            }
        </style>

        <div class="content">
            <div class="checkout-block">
                <h1>оформление заказа</h1>
                <?php
                $checkout = WC()->checkout();
                do_action( 'woocommerce_before_checkout_form', $checkout );
                ?>
                <form name="checkout" novalidate method="post" class="checkout woocommerce-checkout" action="<?php echo esc_url( wc_get_checkout_url() ); ?>" enctype="multipart/form-data">

                <div class=" accordion fix-check-block" id="accordionExample">
                    <div class="checkout-accordion-block active-checkout" id="s-b-1">
                        <div class="label-accordion">
                        <span id="span-1-active">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
<circle cx="16" cy="16" r="15.5" fill="#F0F0F0" stroke="black"/>
<path d="M17.2842 23H15.8604V13.8418C15.8604 13.0801 15.8838 12.3594 15.9307 11.6797C15.8076 11.8027 15.6699 11.9316 15.5176 12.0664C15.3652 12.2012 14.668 12.7725 13.4258 13.7803L12.6523 12.7783L16.0537 10.1504H17.2842V23Z" fill="black"/>
</svg>
                        </span>
                            <span id="span-1-no-active" style="display: none">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
<circle cx="16" cy="16" r="15.5" fill="#F0F0F0" stroke="black"/>
<path d="M17.2842 23H15.8604V13.8418C15.8604 13.0801 15.8838 12.3594 15.9307 11.6797C15.8076 11.8027 15.6699 11.9316 15.5176 12.0664C15.3652 12.2012 14.668 12.7725 13.4258 13.7803L12.6523 12.7783L16.0537 10.1504H17.2842V23Z" fill="#AAAAAA"/>
</svg>
                        </span>
                            <label> Ваши данные
                            </label>
                        </div>

                        <div class="form-fio collapse show">
<!--                            --><?php
//                            $fields = $checkout->get_checkout_fields( 'billing' );
//
//                            foreach ( $fields as $key => $field ) {
//                                woocommerce_form_field( $key, $field, $checkout->get_value( $key ) );
//                            }
//                            ?>
                            <div class="form-group">
                                <label for="billing_first_name">Имя</label>
                                <input type="text" class="form-control form-fio-inp" id="billing_first_name" name="billing_first_name" placeholder="Введите ваше имя и фамилию">
                                <label class="form-err" id="fio-err">Поле заполнено не верно</label>
                            </div>
                            <div class="form-group">
                                <label for="billing_first_name">Фамилия</label>
                                <input type="text" class="form-control form-fio-inp" id="billing_last_name" name="billing_last_name" placeholder="Введите ваше имя и фамилию">
                                <label class="form-err" id="fio2-err">Поле заполнено не верно</label>
                            </div>
                            <div class="form-group">
                                <label for="billing_phone">Телефон</label>
                                <input type="tel" class="form-control form-fio-inp" id="billing_phone" name="billing_phone" placeholder="Введите ваш номер телефона" pattern="[0-9]{3}-[0-9]{2}-[0-9]{2}-[0-9]{3}">
                                <label class="form-err" id="tel-err">Поле заполнено не верно</label>
                            </div>
                            <div class="form-group">
                                <label for="billing_email">Электронная почта</label>
                                <input type="email" class="form-control form-fio-inp" id="billing_email" name="billing_email" placeholder="Введите адрес эл. почты">
                                <label class="form-err" id="mail-err">Поле заполнено не верно</label>
                            </div>
                            <button class="collapsed next-btn-checkout" id="firstCollapse" type="button" data-toggle="collapse"  aria-expanded="false" aria-controls="collapseTwo">
                                ДАЛЕЕ
                            </button>
                        </div>


                    </div>
                    <div class="checkout-accordion-block" id="s-b-2">
                        <div class="label-accordion">
                        <span id="span-2-active">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
<circle cx="16" cy="16" r="15.5" fill="#F0F0F0" stroke="black"/>
<path d="M20.3252 23H11.8789V21.7432L15.2627 18.3418C16.2939 17.2988 16.9736 16.5547 17.3018 16.1094C17.6299 15.6641 17.876 15.2305 18.04 14.8086C18.2041 14.3867 18.2861 13.9326 18.2861 13.4463C18.2861 12.7607 18.0781 12.2188 17.6621 11.8203C17.2461 11.416 16.6689 11.2139 15.9307 11.2139C15.3975 11.2139 14.8906 11.3018 14.4102 11.4775C13.9355 11.6533 13.4053 11.9727 12.8193 12.4355L12.0459 11.4424C13.2295 10.458 14.5186 9.96582 15.9131 9.96582C17.1201 9.96582 18.0664 10.2764 18.752 10.8975C19.4375 11.5127 19.7803 12.3418 19.7803 13.3848C19.7803 14.1992 19.5518 15.0049 19.0947 15.8018C18.6377 16.5986 17.7822 17.6064 16.5283 18.8252L13.7158 21.5762V21.6465H20.3252V23Z" fill="black"/>
</svg>
                        </span>
                            <span id="span-2-no-active" style="display: none">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
<circle cx="16" cy="16" r="15.5" fill="#F0F0F0" stroke="black"/>
<path d="M20.3252 23H11.8789V21.7432L15.2627 18.3418C16.2939 17.2988 16.9736 16.5547 17.3018 16.1094C17.6299 15.6641 17.876 15.2305 18.04 14.8086C18.2041 14.3867 18.2861 13.9326 18.2861 13.4463C18.2861 12.7607 18.0781 12.2188 17.6621 11.8203C17.2461 11.416 16.6689 11.2139 15.9307 11.2139C15.3975 11.2139 14.8906 11.3018 14.4102 11.4775C13.9355 11.6533 13.4053 11.9727 12.8193 12.4355L12.0459 11.4424C13.2295 10.458 14.5186 9.96582 15.9131 9.96582C17.1201 9.96582 18.0664 10.2764 18.752 10.8975C19.4375 11.5127 19.7803 12.3418 19.7803 13.3848C19.7803 14.1992 19.5518 15.0049 19.0947 15.8018C18.6377 16.5986 17.7822 17.6064 16.5283 18.8252L13.7158 21.5762V21.6465H20.3252V23Z" fill="#AAAAAA"/>
</svg>
                        </span>
                            <label> Доставка
                            </label>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="delivery-block">

                                <div class="form-group">
                                    <label for="delivery-type">Способ доставки</label>
                                    <div class="radio">
                                        <input class="custom-radio" type="radio" checked id="deliv" name="deliv" value="">
                                        <label for="deliv">Доставка курьером</label>
                                        <p class="deliv-price">Стоимость доставки: <label>150 <span>RUB</span></label></p>
                                    </div>
                                </div>
                            </div>
                            <button id="nex-btn-2" class="next-btn-checkout collapsed" type="button" data-toggle="collapse" aria-expanded="false" aria-controls="collapseThree">
                                ДАЛЕЕ
                            </button>
                        </div>
                    </div>
                    <div class="checkout-accordion-block" id="s-b-3">
                        <div class="label-accordion">
                        <span id="span-3-not-active">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
<circle cx="16" cy="16" r="15.5" fill="#F0F0F0" stroke="#AAAAAA"/>
<path d="M19.8418 13.1738C19.8418 13.9941 19.6104 14.665 19.1475 15.1865C18.6904 15.708 18.04 16.0566 17.1963 16.2324V16.3027C18.2275 16.4316 18.9922 16.7598 19.4902 17.2871C19.9883 17.8145 20.2373 18.5059 20.2373 19.3613C20.2373 20.5859 19.8125 21.5293 18.9629 22.1914C18.1133 22.8477 16.9062 23.1758 15.3418 23.1758C14.6621 23.1758 14.0381 23.123 13.4697 23.0176C12.9072 22.918 12.3594 22.7393 11.8262 22.4814V21.0928C12.3828 21.3682 12.9746 21.5791 13.6016 21.7256C14.2344 21.8662 14.832 21.9365 15.3945 21.9365C17.6152 21.9365 18.7256 21.0664 18.7256 19.3262C18.7256 17.7676 17.501 16.9883 15.0518 16.9883H13.7861V15.7314H15.0693C16.0713 15.7314 16.8652 15.5117 17.4512 15.0723C18.0371 14.627 18.3301 14.0117 18.3301 13.2266C18.3301 12.5996 18.1133 12.1074 17.6797 11.75C17.252 11.3926 16.6689 11.2139 15.9307 11.2139C15.3682 11.2139 14.8379 11.29 14.3398 11.4424C13.8418 11.5947 13.2734 11.876 12.6348 12.2861L11.8965 11.3018C12.4238 10.8857 13.0303 10.5605 13.7158 10.3262C14.4072 10.0859 15.1338 9.96582 15.8955 9.96582C17.1436 9.96582 18.1133 10.2529 18.8047 10.8271C19.4961 11.3955 19.8418 12.1777 19.8418 13.1738Z" fill="#AAAAAA"/>
</svg>
                        </span>
                            <span id="span-3-active" style="display: none">
                                <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
<circle cx="16" cy="16" r="15.5" fill="#F0F0F0" stroke="#000"/>
<path d="M19.8418 13.1738C19.8418 13.9941 19.6104 14.665 19.1475 15.1865C18.6904 15.708 18.04 16.0566 17.1963 16.2324V16.3027C18.2275 16.4316 18.9922 16.7598 19.4902 17.2871C19.9883 17.8145 20.2373 18.5059 20.2373 19.3613C20.2373 20.5859 19.8125 21.5293 18.9629 22.1914C18.1133 22.8477 16.9062 23.1758 15.3418 23.1758C14.6621 23.1758 14.0381 23.123 13.4697 23.0176C12.9072 22.918 12.3594 22.7393 11.8262 22.4814V21.0928C12.3828 21.3682 12.9746 21.5791 13.6016 21.7256C14.2344 21.8662 14.832 21.9365 15.3945 21.9365C17.6152 21.9365 18.7256 21.0664 18.7256 19.3262C18.7256 17.7676 17.501 16.9883 15.0518 16.9883H13.7861V15.7314H15.0693C16.0713 15.7314 16.8652 15.5117 17.4512 15.0723C18.0371 14.627 18.3301 14.0117 18.3301 13.2266C18.3301 12.5996 18.1133 12.1074 17.6797 11.75C17.252 11.3926 16.6689 11.2139 15.9307 11.2139C15.3682 11.2139 14.8379 11.29 14.3398 11.4424C13.8418 11.5947 13.2734 11.876 12.6348 12.2861L11.8965 11.3018C12.4238 10.8857 13.0303 10.5605 13.7158 10.3262C14.4072 10.0859 15.1338 9.96582 15.8955 9.96582C17.1436 9.96582 18.1133 10.2529 18.8047 10.8271C19.4961 11.3955 19.8418 12.1777 19.8418 13.1738Z" fill="#000"/>
</svg>
                            </span>
                            <span id="span-3-no-active" style="display: none">
                                <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
<circle cx="16" cy="16" r="15.5" fill="#F0F0F0" stroke="#000"/>
<path d="M19.8418 13.1738C19.8418 13.9941 19.6104 14.665 19.1475 15.1865C18.6904 15.708 18.04 16.0566 17.1963 16.2324V16.3027C18.2275 16.4316 18.9922 16.7598 19.4902 17.2871C19.9883 17.8145 20.2373 18.5059 20.2373 19.3613C20.2373 20.5859 19.8125 21.5293 18.9629 22.1914C18.1133 22.8477 16.9062 23.1758 15.3418 23.1758C14.6621 23.1758 14.0381 23.123 13.4697 23.0176C12.9072 22.918 12.3594 22.7393 11.8262 22.4814V21.0928C12.3828 21.3682 12.9746 21.5791 13.6016 21.7256C14.2344 21.8662 14.832 21.9365 15.3945 21.9365C17.6152 21.9365 18.7256 21.0664 18.7256 19.3262C18.7256 17.7676 17.501 16.9883 15.0518 16.9883H13.7861V15.7314H15.0693C16.0713 15.7314 16.8652 15.5117 17.4512 15.0723C18.0371 14.627 18.3301 14.0117 18.3301 13.2266C18.3301 12.5996 18.1133 12.1074 17.6797 11.75C17.252 11.3926 16.6689 11.2139 15.9307 11.2139C15.3682 11.2139 14.8379 11.29 14.3398 11.4424C13.8418 11.5947 13.2734 11.876 12.6348 12.2861L11.8965 11.3018C12.4238 10.8857 13.0303 10.5605 13.7158 10.3262C14.4072 10.0859 15.1338 9.96582 15.8955 9.96582C17.1436 9.96582 18.1133 10.2529 18.8047 10.8271C19.4961 11.3955 19.8418 12.1777 19.8418 13.1738Z" fill="#AAAAAA"/>
</svg>
                            </span>
                            <label> Адрес
                            </label>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                           <div class="delivery-pay-method">
                               <div class="form-group">
                                   <label>Адрес</label>
                                   <div class="form-group">
                                       <label for="billing_city">Страна/регион</label>
                                       <input type="text" class="form-control form-fio-inp" id="billing_city" name="billing_city" placeholder="Введите название города">
                                       <label class="form-err" id="city-err">Поле заполнено не верно или пустое</label>
                                   </div>
                                   <div class="form-group">
                                       <label for="billing_city">Ваш город</label>
                                       <input type="text" class="form-control form-fio-inp" id="billing_city" name="billing_city" placeholder="Введите название города">
                                       <label class="form-err" id="city-err">Поле заполнено не верно или пустое</label>
                                   </div>
                                   <div class="form-group">
                                       <label for="billing_address_1">Адрес</label>
                                       <input type="text" class="form-control form-fio-inp" id="billing_address_1" name="billing_address_1" placeholder="Введите название города">
                                       <label class="form-err" id="city-err">Поле заполнено не верно или пустое</label>
                                   </div>
                                   <div class="form-group">
                                       <label for="billing_postcode">Почтовый индекс</label>
                                       <input type="text" class="form-control form-fio-inp" id="billing_postcode" name="billing_postcode" placeholder="Введите название города">
                                       <label class="form-err" id="city-err">Поле заполнено не верно или пустое</label>
                                   </div>
                               </div>
                           </div>
<!--                            <button id="nex-btn-3" class="next-btn-checkout collapsed" type="button" data-toggle="collapse" aria-expanded="false" aria-controls="collapseThree">-->
<!--                                ДАЛЕЕ-->
<!--                            </button>-->
                        </div>
                    </div>

                </div>



                <div class="checkout-products">
                    <label class="order-list">Состав заказа</label>
                    <?php
                    foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ):
                        $_product   = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
                        $product_id = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );

                        if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_cart_item_visible', true, $cart_item, $cart_item_key ) ):
                            $product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '', $cart_item, $cart_item_key );

                            ?>
                    <div class="order-list-product">
                        <div class="prod-photo-check">
                            <?php
                            $thumbnail = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key );

                            if ( ! $product_permalink ) {
                                echo $thumbnail; // PHPCS: XSS ok.
                            } else {
                                printf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $thumbnail ); // PHPCS: XSS ok.
                            }
                            ?>
                        </div>
                        <div class="prod-info-check">
                            <div class="prod-info-check-name">
                                <label>
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
                                </label>
                            </div>
                            <div class="prod-check-details">
                                <div>
                                    <?php echo $cart_item['quantity']; ?> шт
                                </div>
                                <div>
                                    <label><?php
                                        $total =  apply_filters( 'woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ), $cart_item, $cart_item_key ); // PHPCS: XSS ok.
                                        $total = preg_replace( '/[^.\d]/', '', $total  );
                                        echo $total;
                                        ?> <span>RUB</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                        <?php
                        endif;
                    endforeach;
                    ?>

                    <div class="checkout-total">
                        <label>Итого к оплате:</label>
                        <div class="checkout-total-price">
                            <label><?php $sub_total = WC()->cart->get_cart_subtotal(); $sub_total = preg_replace( '/[^.\d]/', '', $sub_total  ); echo $sub_total;?> <span>RUB</span></label>
                        </div>
                    </div>


                    <div class="checkout-total-btns">
                        <div id="order_review" class="woocommerce-checkout-review-order">
                            <?php do_action( 'woocommerce_checkout_order_review' ); ?>
                        </div>

                    </div>
                    <div class="check-terms">
                        <p>Подтверждая заказ, я принимаю условия <a href="">Публичной оферты</a></p>
                    </div>
                </div>
                </form>
                    <div class="checkout-complete c-c-1" style="display: none">
                        <label>Оформление завершено!</label>
                        <label>Пожалуйста подтвердите заказ</label>
                        <!--                    --><?php //do_action( 'woocommerce_receipt_' . $order->get_payment_method(), $order->get_id() ); ?>
                    </div>

                    <div class="checkout-complete c-c-2" style="display: none">
                        <label>Заказ успешно подтверждён!</label>
                        <label>Номер вашего заказа: <span style="font-weight: bold" id="order-number"><?php echo $orderID;?></span></label>
                    </div>

            </div>
           
        </div>

        <script>
            "use strict";
            var $ = jQuery;



            $('#firstCollapse').on('click', function () {
                var valid = false;

                var mail = $('#billing_email').val();
                var mailFormat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
                var fio = $('#billing_first_name').val();
                var fio2 = $('#billing_last_name').val();
                var tel = $('#billing_phone').val();

                if (fio.length > 2){
                    $('#fio-err').css("display", "none");
                    if (tel.length > 10 && mail.match(mailFormat)) {
                        valid = true;
                    }

                } else {
                    $('#fio-err').css("display", "block");
                    valid = false;
                }

                if (fio2.length > 2){
                    $('#fio2-err').css("display", "none");
                    if (tel.length > 10 && mail.match(mailFormat)) {
                        valid = true;
                    }

                } else {
                    $('#fio2-err').css("display", "block");
                    valid = false;
                }

                if (tel.length > 10){
                    $('#tel-err').css("display", "none");
                    if (fio.length > 5 && mail.match(mailFormat)) {
                        valid = true;
                    }

                } else {
                    $('#tel-err').css("display", "block");
                    valid = false;
                }

                if (!mail.match(mailFormat)){
                    $('#mail-err').css("display", "block");
                    valid = false;
                } else {
                    $('#mail-err').css("display", "none");
                    if (fio.length > 5 && tel.length > 10) {
                        valid = true;
                    }
                }

                
                if (valid === true){
                    $('.form-fio').removeClass('show');
                    $('#collapseTwo').addClass('show');
                    $('#s-b-2').addClass('active-checkout');
                    $('#span-3-not-active').css("display", "none");
                    $('#span-3-active').css("display", "block");
                }
            });

            $('#nex-btn-2').on('click', function () {

                    $('#collapseTwo').css("transition", "3s");
                    $('#collapseTwo').removeClass('show');
                    $('#collapseThree').addClass('show');


            });

            $('#nex-btn-3').on('click', function () {
                $('.c-c-1').css("display", "block");
                $('.buy-products').removeAttr("disabled");
                $('#collapseThree').removeClass('show');

                var fio = $('#billing_first_name').val();
                var tel = $('#billing_phone').val();
                var mail = $('#billing_email').val();
                var city = $('#billing_city').val();
                var orderID = $('#order-number').text();
                $.post(
                    '',
                    {
                        'createOrder':orderID,
                        'fio': fio,
                        'tel': tel,
                        'mail': mail,
                        'city': city
                    },
                    function () {

                    }
                )
            });

            $('.buy-products').on('click', function () {
                $('.c-c-1').css("display", "none");
                $('.c-c-2').css("display", "block");
                $('.checkout-total-btns').css("display", "none");
                $('.check-terms').css("display", "none");
                $('#span-1-active').css("display", "none");
                $('#span-1-no-active').css("display", "block");
                $('#span-2-active').css("display", "none");
                $('#span-2-no-active').css("display", "block");
                $('#span-3-active').css("display", "none");
                $('#span-3-no-active').css("display", "block");
            });

        </script>

</main>

<?php

get_footer();