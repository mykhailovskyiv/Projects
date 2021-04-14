<?php

get_header();
?>
<main class="wrapper">

    <div class="content">

        <div class="track-order">
            <h1>Отследить заказ</h1>

            <?php
            if (!isset($_POST['track-code'])):
            ?>
                <form method="post" class="track-form">
                    <p>Введите номер вашего заказа</p>
                    <input type="text" name="track-code" id="track-code">
                    <span><button class="material-bubble" disabled id="track-button">ОТСЛЕДИТЬ</button></span>
                </form>

            <?php
            elseif (isset($_POST['track-code'])):
                $trackCode = $_POST['track-code'];

            $status = get_post_meta($trackCode,'delivery_status', true);

            if ($status):
            //if no fucking post - go to hell
            ?>


                <div class="track-result">

                    <label class="label-track-res">Ваш заказ</label>
                    <div class="track-img">
                        <svg width="190" height="83" viewBox="0 0 190 83" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="4.14062" width="2.0693" height="82.0824" fill="#939393"/>
                            <rect width="2.0693" height="82.0824" fill="#939393"/>
                            <rect x="8.27734" width="2.0693" height="82.0824" fill="#939393"/>
                            <rect x="22.0742" width="2.0693" height="82.0824" fill="#939393"/>
                            <rect x="35.8672" width="2.0693" height="82.0824" fill="#939393"/>
                            <rect x="49.6641" width="2.0693" height="82.0824" fill="#939393"/>
                            <rect x="57.9414" width="4.13861" height="82.0824" fill="#939393"/>
                            <rect x="64.1445" width="5.51814" height="82.0824" fill="#939393"/>
                            <rect x="73.1172" width="2.75907" height="82.0824" fill="#939393"/>
                            <rect x="86.9062" width="2.75907" height="82.0824" fill="#939393"/>
                            <rect x="95.1836" width="2.75907" height="82.0824" fill="#939393"/>
                            <rect x="77.2578" width="2.75907" height="82.0824" fill="#939393"/>
                            <rect x="91.0469" width="2.75907" height="82.0824" fill="#939393"/>
                            <rect x="99.3242" width="2.0693" height="82.0824" fill="#939393"/>
                            <rect x="105.531" width="2.0693" height="82.0824" fill="#939393"/>
                            <rect x="113.121" width="2.75907" height="82.0824" fill="#939393"/>
                            <rect x="135.195" width="2.0693" height="82.0824" fill="#939393"/>
                            <rect x="140.715" width="6.20791" height="82.0824" fill="#939393"/>
                            <rect x="151.062" width="2.0693" height="82.0824" fill="#939393"/>
                            <rect x="154.504" width="2.75907" height="82.0824" fill="#939393"/>
                            <rect x="162.781" width="2.0693" height="82.0824" fill="#939393"/>
                            <rect x="182.102" width="2.75907" height="82.0824" fill="#939393"/>
                            <rect x="186.242" width="2.75907" height="82.0824" fill="#939393"/>
                            <rect x="174.512" width="4.13861" height="82.0824" fill="#939393"/>
                            <rect x="168.305" width="4.82838" height="82.0824" fill="#939393"/>
                            <rect x="126.918" width="6.89768" height="82.0824" fill="#939393"/>
                            <rect x="116.57" width="6.89768" height="82.0824" fill="#939393"/>
                            <rect x="39.3164" width="8.96698" height="82.0824" fill="#939393"/>
                            <rect x="11.7305" width="8.27722" height="82.0824" fill="#939393"/>
                            <rect x="28.2812" width="6.20791" height="82.0824" fill="#939393"/>
                        </svg>

                    </div>
                    <label class="track-code-label"><?php echo $trackCode; ?></label>
                </div>

            <div class="scheme-order-track">
                <div class="scheme-block" id="s-b-1">
                    <div class="svg-icon">
                        <span>
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="16" cy="16" r="15.5" fill="#F0F0F0" stroke="black"/>
                            <path d="M17.2842 23H15.8604V13.8418C15.8604 13.0801 15.8838 12.3594 15.9307 11.6797C15.8076 11.8027 15.6699 11.9316 15.5176 12.0664C15.3652 12.2012 14.668 12.7725 13.4258 13.7803L12.6523 12.7783L16.0537 10.1504H17.2842V23Z" fill="black"/>
                            </svg>
                        </span>
                        <label> Заказ оплачен
                        </label>
                    </div>
                    <div class="order-box" id='order-box-1'>
                        <img src="<?php echo get_template_directory_uri()?>/img/mobile/Group 66.svg" alt="">
                    </div>
                </div>
                <div class="scheme-block" id="s-b-2">
                    <div>
                        <span class="s-for-svg-2">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
<circle cx="16" cy="16" r="15.5" fill="#F0F0F0" stroke="black"/>
<path d="M20.3252 23H11.8789V21.7432L15.2627 18.3418C16.2939 17.2988 16.9736 16.5547 17.3018 16.1094C17.6299 15.6641 17.876 15.2305 18.04 14.8086C18.2041 14.3867 18.2861 13.9326 18.2861 13.4463C18.2861 12.7607 18.0781 12.2188 17.6621 11.8203C17.2461 11.416 16.6689 11.2139 15.9307 11.2139C15.3975 11.2139 14.8906 11.3018 14.4102 11.4775C13.9355 11.6533 13.4053 11.9727 12.8193 12.4355L12.0459 11.4424C13.2295 10.458 14.5186 9.96582 15.9131 9.96582C17.1201 9.96582 18.0664 10.2764 18.752 10.8975C19.4375 11.5127 19.7803 12.3418 19.7803 13.3848C19.7803 14.1992 19.5518 15.0049 19.0947 15.8018C18.6377 16.5986 17.7822 17.6064 16.5283 18.8252L13.7158 21.5762V21.6465H20.3252V23Z" fill="black"/>
</svg>
                        </span>
                        <label class="label-deliv-2"> Заказ обрабатывается
                        </label>
                    </div>
                    <div class="order-box" id='order-box-2'>
                        <img src="<?php echo get_template_directory_uri()?>/img/mobile/Group 66.svg" alt="">
                    </div>
                </div>
                <div class="scheme-block" id="s-b-3">
                    <div>
                        <span class="s-for-svg-3">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
<circle cx="16" cy="16" r="15.5" fill="#F0F0F0" stroke="currentColor"/>
<path d="M19.8418 13.1738C19.8418 13.9941 19.6104 14.665 19.1475 15.1865C18.6904 15.708 18.04 16.0566 17.1963 16.2324V16.3027C18.2275 16.4316 18.9922 16.7598 19.4902 17.2871C19.9883 17.8145 20.2373 18.5059 20.2373 19.3613C20.2373 20.5859 19.8125 21.5293 18.9629 22.1914C18.1133 22.8477 16.9062 23.1758 15.3418 23.1758C14.6621 23.1758 14.0381 23.123 13.4697 23.0176C12.9072 22.918 12.3594 22.7393 11.8262 22.4814V21.0928C12.3828 21.3682 12.9746 21.5791 13.6016 21.7256C14.2344 21.8662 14.832 21.9365 15.3945 21.9365C17.6152 21.9365 18.7256 21.0664 18.7256 19.3262C18.7256 17.7676 17.501 16.9883 15.0518 16.9883H13.7861V15.7314H15.0693C16.0713 15.7314 16.8652 15.5117 17.4512 15.0723C18.0371 14.627 18.3301 14.0117 18.3301 13.2266C18.3301 12.5996 18.1133 12.1074 17.6797 11.75C17.252 11.3926 16.6689 11.2139 15.9307 11.2139C15.3682 11.2139 14.8379 11.29 14.3398 11.4424C13.8418 11.5947 13.2734 11.876 12.6348 12.2861L11.8965 11.3018C12.4238 10.8857 13.0303 10.5605 13.7158 10.3262C14.4072 10.0859 15.1338 9.96582 15.8955 9.96582C17.1436 9.96582 18.1133 10.2529 18.8047 10.8271C19.4961 11.3955 19.8418 12.1777 19.8418 13.1738Z" fill="currentColor"/>
</svg>
                        </span>
                        <label class="label-deliv-3"> Принят в работу
                        </label>
                    </div>
                    <div class="order-box" id='order-box-3'>
                        <img src="<?php echo get_template_directory_uri()?>/img/mobile/Group 66.svg" alt="">
                    </div>
                </div>
                <div class="scheme-block" id="s-b-4">
                    <div>
                        <span class="s-for-svg-4">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
<circle cx="16" cy="16" r="15.5" fill="#F0F0F0" stroke="currentColor"/>
<path d="M20.9316 20.0469H19.0244V23H17.627V20.0469H11.3779V18.7725L17.4775 10.0801H19.0244V18.7197H20.9316V20.0469ZM17.627 18.7197V14.4482C17.627 13.6104 17.6562 12.6641 17.7148 11.6094H17.6445C17.3633 12.1719 17.0996 12.6377 16.8535 13.0068L12.8369 18.7197H17.627Z" fill="currentColor"/>
</svg>

                        </span>
                        <label class="label-deliv-4"> Отправлен
                        </label>

                    </div>
                    <div class="order-box" id='order-box-4'>
                        <img src="<?php echo get_template_directory_uri()?>/img/mobile/Group 66.svg" alt="">
                    </div>
                </div>
                <div class="scheme-block last" id="s-b-5">
                    <div>
                        <span class="s-for-svg-5">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
<circle cx="16" cy="16" r="15.5" fill="#F0F0F0" stroke="currentColor"/>
<path d="M15.8955 15.1514C17.249 15.1514 18.3125 15.4883 19.0859 16.1621C19.8652 16.8301 20.2549 17.7471 20.2549 18.9131C20.2549 20.2432 19.8301 21.2861 18.9805 22.042C18.1367 22.7979 16.9707 23.1758 15.4824 23.1758C14.0352 23.1758 12.9307 22.9443 12.1689 22.4814V21.0752C12.5791 21.3389 13.0889 21.5469 13.6982 21.6992C14.3076 21.8457 14.9082 21.9189 15.5 21.9189C16.5312 21.9189 17.3311 21.6758 17.8994 21.1895C18.4736 20.7031 18.7607 20 18.7607 19.0801C18.7607 17.2871 17.6621 16.3906 15.4648 16.3906C14.9082 16.3906 14.1641 16.4756 13.2324 16.6455L12.4766 16.1621L12.96 10.1504H19.3496V11.4951H14.208L13.8828 15.3535C14.5566 15.2188 15.2275 15.1514 15.8955 15.1514Z" fill="currentColor"/>
</svg>
                        </span>
                        <label class="label-deliv-5"> Доставлен
                        </label>

                    </div>
                </div>
            </div>
                <?
                else:

                ?>
                
            <div class="track-result">

                <label class="label-track-res">Заказа с таким номером не существует</label>
            </div>
                <?php

                endif;
                endif;
                ?>


        </div>
    </div>

    <script>
        "use strict";
        var $ = jQuery;

        $(document).ready(function () {
            var status = '<?php echo $status?>';
            if (status === '2'){
                $('#s-b-2').css("border-color", "#EF5F40");
                $('#order-box-2').css("display", "block");
                $('.s-for-svg-3 > svg').css("color", "black");
                $('.label-deliv-3').css("color", "#333");
                $('#order-box-1').css("display", "none");
            }
            if (status === '3'){
                $('#s-b-2').css("border-color", "#EF5F40");
                $('#s-b-3').css("border-color", "#EF5F40");
                $('#order-box-3').css("display", "block");
                $('.s-for-svg-3 > svg').css("color", "black");
                $('.label-deliv-3').css("color", "#333");
                $('.s-for-svg-4 > svg').css("color", "black");
                $('.label-deliv-4').css("color", "#333");
                $('#order-box-1').css("display", "none");
            }
            if (status === '4'){
                $('#s-b-2').css("border-color", "#EF5F40");
                $('#s-b-3').css("border-color", "#EF5F40");
                $('#s-b-4').css("border-color", "#EF5F40");
                $('#order-box-4').css("display", "block");
                $('.s-for-svg-3 > svg').css("color", "black");
                $('.label-deliv-3').css("color", "#333");
                $('.s-for-svg-4 > svg').css("color", "black");
                $('.label-deliv-4').css("color", "#333");
                $('.s-for-svg-5 > svg').css("color", "black");
                $('.label-deliv-5').css("color", "#333");
                $('#order-box-1').css("display", "none");
            }
        });

        $('#track-code').on('input', function () {
            var code = $(this).val();
            if (code.length > 0){
                $('#track-button').removeAttr("disabled");
            }
        });


    </script>
</main>

<?php

get_footer();