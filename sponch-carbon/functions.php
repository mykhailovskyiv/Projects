<!--
Тема разработана компанией Sponge D&D

Пасхалка приемникам: заказчик любит вносить правки, в свои же правки, или откатывать их (около 3-6 итераций правок по каждому объекту), также славится тем что принимая и утверждая, лично,
концепт-дизайн - потом отказывается от него, спустя 4 месяца работы, на стадии альфа тестирования готового по функционалу сайта, просит подключить платежи банка
с которым у него еще нет договора и в итоге не будет, что приводит к второй и далее третей итерациям переработки платежных систем и дизайна страниц оплаты.
Да не осудите за сайт-франкинштейн, это попытки угодить заказчику, переделывая каждый раз "окончательные" правки, которые в корне начали портить
архитектуру и концепцию, первоначалоно заложенную в него.
С уважением, удачи и крепких вам нервов!
-->
<?php
add_action('admin_bar_init', function(){
    remove_action('wp_head', '_admin_bar_bump_cb'); // html margin bumps
});

add_theme_support( 'woocommerce' );

add_filter('woocommerce_add_to_cart_fragments', 'header_add_to_cart_fragment');

function header_add_to_cart_fragment( $fragments ) {
    global $woocommerce;
    ob_start();
    ?>
    <span id="shopping-cart-count" class="shopping-cart-count">(<?php echo sprintf($woocommerce->cart->cart_contents_count); ?>)</span>
    <?php
    $fragments['.shopping-cart-count'] = ob_get_clean();
    return $fragments;
}

add_action( 'woocommerce_product_options_pricing', 'art_woo_add_custom_fields' );
function art_woo_add_custom_fields() {
    global $product, $post;?>
    <style>
        .img-block-color{
            width: 200px;
        }
    </style>
    <div class="options_group">
        <?php
        $isNew = get_post_meta($post->ID, 'isNew',true);
        ?>
        <p class="form-field" style="font-weight: bold"><label for="">Отметить товар как Новинку</label><input type="checkbox" <?php if ($isNew == 'true'){echo  'checked';}?> class="isNewProd" id="isNewProd-<?php echo $post->ID; ?>"></p>

    </div>
    <div class="options_group">
    <p class="form-field" style="font-weight: bold">Укажите цвет в соответствии к фото</p>
    <?php
    $thepostid      = $post->ID;
    $product_object = $thepostid ? wc_get_product( $thepostid ) : new WC_Product();
    ?>

    <div id="product_images_container" style="display: inline-block; column-count: 2;">

        <?php
        $product_image_gallery = $product_object->get_gallery_image_ids( 'edit' );
        $attachments         = array_filter( $product_image_gallery );

        if ( ! empty( $attachments ) ) {
            foreach ( $attachments as $attachment_id ) {
                $attachment = wp_get_attachment_image( $attachment_id, array(100,100) );
                $color = get_post_meta($attachment_id, 'color');
                if (!$color){
                    update_post_meta($attachment_id, 'color', 2);
                }
                ?>
                <p>
                    <?php
                    echo $attachment;
                    $color = get_post_meta($attachment_id, 'color');
                    ?>
                    <select class="color-select" name="color-select" id="<?php echo $attachment_id;?>">
                        <option value="1" style="background-color: #50c878; color: white" <?php if ($color[0] == 1){echo 'selected';}?>>Emerald green</option>
                        <option value="2" style="background-color: white" <?php if ($color[0] == 2){echo 'selected';}?>>Clearcoat</option>
                        <option value="3" style="background-color: white" <?php if ($color[0] == 3){echo 'selected';}?>>Clearcoat Matt</option>
                        <option value="4" style="background-color: #007c9e; color: white" <?php if ($color[0] == 4){echo 'selected';}?>>Blue jewel</option>
                        <option value="5" style="background-color: #102944; color: white" <?php if ($color[0] == 5){echo 'selected';}?>>Sapphire blue</option>
                        <option value="6" style="background-color: #dd1533; color: white" <?php if ($color[0] == 6){echo 'selected';}?>>Red apple</option>
                        <option value="7" style="background-color: #000080; color: white" <?php if ($color[0] == 7){echo 'selected';}?>>Navy blue</option>
                        <option value="8" style="background-color: #af633e; color: white" <?php if ($color[0] == 8){echo 'selected';}?>>Condensed copper</option>
                    </select>
                </p>
                <?php
            }
        }
        echo '</div>';
        ?>
    </div>

    <script>
        "use strict";
        var $ = jQuery;
        $('.color-select').change( function () {
            var idPhoto = $(this).attr('id');
            var val = $(this).val();
            $.ajax({
                url: '<?php echo admin_url("admin-ajax.php") ?>',
                type: 'post',
                data: 'action=changeColor&idPhoto='+idPhoto+'&color='+val
            });
        });

        $('.isNewProd').on('click', function () {
            var id = $(this).attr("id");
            id = id.split('-');
            id = id[1];
            var val = $(this).prop("checked");
            $.ajax({
                url: '<?php echo admin_url("admin-ajax.php") ?>',
               type: 'post',
               data: 'action=saveIsNewProduct&idProduct='+id+'&value='+val
            });
        })
    </script>

    <?php

}

add_action('wp_ajax_saveColorOrder','saveColorOrder');
add_action('wp_ajax_nopriv_saveColorOrder','saveColorOrder');
function saveColorOrder()
{
    global $wpdb;
    $data = $_POST['data'];
    $data = explode('--', $data);
    foreach ($data as $datum) {
        if ($datum != ''){
            $datum = explode(' ',$datum);
            $hash = $datum[0];
            $prod = $datum[1];
            $color = $datum[2];
            $q = $datum[3];
            $query = "INSERT INTO `cart_items_color` (`cart_hash`,`id_product`,`id_color`,`quantity_product`) VALUES ('$hash','$prod', '$color','$q')";
            $wpdb->query($query);
        }
    }
}

add_action('wp_ajax_changeColor','changeColor');
add_action('wp_ajax_nopriv_changeColor','changeColor');
function changeColor()
{
    $attID = (int)$_POST['idPhoto'];
    $color = (int)$_POST['color'];
    update_post_meta($attID, 'color', $color);
}

function sww_remove_wc_currency_symbols( $currency_symbol, $currency ) {
    $currency_symbol = '';
    return $currency_symbol;
}
add_filter('woocommerce_currency_symbol', 'sww_remove_wc_currency_symbols', 10, 2);

add_action('wp_ajax_saveIsNewProduct','saveIsNewProduct');
add_action('wp_ajax_nopriv_saveIsNewProduct','saveIsNewProduct');
function saveIsNewProduct()
{
    $product = $_POST['idProduct'];
    $status = $_POST['value'];

    if ($product){
        update_post_meta($product, 'isNew', $status);
    }
}

add_action('woocommerce_admin_order_data_after_shipping_address', 'order_status_for_user', 10 ,1);
function order_status_for_user($order)
{
    ?>
    <style>
    .block-btn-set{
    margin-top: 10px;
    cursor: pointer;
    text-align: center;
    height: 25px;
    line-height: 25px;
    font-size: 16px;
    border-radius: 5px;
    color: white;
    background-color: #0085ba;
    }
</style>
    <div>
        <h3>Установить статус отправки заказа:</h3>
        <?php
        $status = get_post_meta($order->id,'delivery_status', true);
        ?>
        <select name="packageStatus" id="packageStatus">
            <option value="1" <?php if ($status == 1){echo 'selected';}?>>Заказ обрабатывается</option>
            <option value="2" <?php if ($status == 2){echo 'selected';}?>>Принят в работу</option>
            <option value="3" <?php if ($status == 3){echo 'selected';}?>>Отправлен</option>
            <option value="4" <?php if ($status == 4){echo 'selected';}?>>Доставлен</option>
        </select>
        <input type="hidden" class="order-id" value="<?php echo $order->id; ?>">
        <div class="block-btn-set">Установить</div>
    </div>
    <script >
        "use strict";
        var $ = jQuery;

        $('.block-btn-set').on('click', function() {
          var status = $('#packageStatus').val();
          var order = $('.order-id').val();
          $.ajax({
                url: '<?php echo admin_url("admin-ajax.php") ?>',
                type: 'post',
                data: 'action=updateOrderDelivery&status='+status+'&order='+order,
                success: function(result) {
                    alert(result.slice(0,-1));
                }
            });
        });
    </script>
    <?php
}

add_action('wp_ajax_updateOrderDelivery','updateOrderDelivery');
add_action('wp_ajax_nopriv_updateOrderDelivery','updateOrderDelivery');
function updateOrderDelivery()
{
    $status = $_POST['status'];
    $idOrder = $_POST['order'];

    if ($idOrder != ''){
        update_post_meta($idOrder, 'delivery_status', $status);
        echo 'Статус обновлен';
    } else echo "Не удалось обновить статус";
}