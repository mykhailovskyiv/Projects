<?php
if (is_user_logged_in()):


    if (isset($_POST['settings_save'])) {
        if ($_POST['user_pass'] != "" && $_POST['pass_repeat']) {
            wp_set_password($_POST['user_pass'], get_current_user_id());
        }
        if ($_POST['user_email'] != "") {
            $userID = wp_update_user(['ID' => get_current_user_id(), 'user_email' => $_POST['user_email']]);
        }
        if ($_POST['user_name']) {
            update_user_meta(get_current_user_id(), 'nickname', $_POST['user_name']);
        }
    }


    get_header();

    ?>

    <main class="wrapper">

        <div class="content">
            <div class="account-menu-block">
                <div class='icon_settings title_settings'><img
                            src="<?php echo get_template_directory_uri(); ?>/img/icon-settings.svg" alt="">
                    <p>Settings</p></div>
                <p class='title_settings'><a class="nav-link" href="<?php echo wp_logout_url(home_url()); ?>">
                        Logout
                    </a></p>

            </div>
            <?php
            $user = get_user_by('ID', get_current_user_id());
            ?>

            <div class="account-block">

                <div class="subscribe_block">
                    <div class="subscribe_main one">
                        <p class="subscribe_title first">Plan</p>
                        <p class="subscribe_title second">Amount</p>
                        <p class="subscribe_title third">Method</p>
                        <p class="subscribe_title four">Due Date</p>
                    </div>


                    <?php

                    global $wpdb;

                    $query = "SELECT * FROM `wp_subscriptions` WHERE id_user='$user->ID' ORDER BY id DESC";
                    $list = $wpdb->get_results($query);
                    if (!empty($list)):
                        foreach ($list as $item):
                            ?>
                            <div class="subscribe_main two">
                                <p class="subscribe_title first"><?php echo $item->month; ?> month</p>
                                <p class="subscribe_title second"><?php echo $item->price; ?> USD</p>
                                <p class="subscribe_title third"><?php echo $item->method; ?></p>
                                <p class="subscribe_title four"><?php echo $item->date_to; ?></p>
                            </div>
                            <form action="/payment" method="post">
                                <input type="hidden" name="price-pp" value="<?php echo $item->price; ?>">
                                <button class="extend_button" id="extend-<?php echo $item->id?>">Extend</button>
                            </form>
                            
                        <?php
                        endforeach;

                    endif;
                    ?>

                </div>

                <div class="subscribe_block mobile">
                    <?php
                    if (!empty($list)):
                        foreach ($list as $item):
                            ?>
                            <div class='subscribe_block_account'>
                                <div class="subscribe_main one">
                                    <p class="subscribe_title first">Plan</p>
                                    <p class="subscribe_title second">Amount</p>
                                    <p class="subscribe_title third">Method</p>
                                    <p class="subscribe_title four">Due Date</p>
                                </div>

                                <div class="subscribe_main two">
                                    <p class="subscribe_title first"><?php echo $item->month; ?> month</p>
                                    <p class="subscribe_title second"><?php echo $item->price; ?> USD</p>
                                    <p class="subscribe_title third"><?php echo $item->method; ?></p>
                                    <p class="subscribe_title four"><?php echo $item->date_to; ?></p>
                                </div>
                                <form action="/payment" method="post">
                                    <input type="hidden" name="price-pp" value="<?php echo $item->price; ?>">
                                    <button class="extend_button mobile" id="extend-<?php echo $item->id?>">Extend</button>
                                </form>
                            </div>
                        <?php
                        endforeach;

                    endif;
                    ?>
                </div>

                <button class='get_access' onclick="document.location.href = '/pricing'">Get access</button>

            </div>
            <div class="settings_up">
                <div class="settings_pop_up">


                    <form class="log-form" id="settings_form" method="post">
                        <div class="settings_form_block">
                            <label>Name</label>
                            <input type="text" name="user_name" id="user_name" placeholder="Enter your name"
                                   value="<?php echo $user->nickname; ?>"/>
                        </div>
                        <div class="settings_form_block">
                            <label>Email</label>
                            <input type="text" name="user_email" id="user_email" placeholder="Enter your email"
                                   value="<?php echo $user->user_email; ?>"/>
                        </div>
                        <div class="settings_form_block">
                            <label>New password</label>
                            <input type="text" name="user_pass" id="user_pass" placeholder="Create password" value=""/>
                        </div>
                        <div class="settings_form_block">
                            <label>Repeat password</label>
                            <input type="text" name="pass_repeat" id="pass_repeat" placeholder="Repeat password"
                                   value=""/>
                        </div>
                        <button class="settings_save" name="settings_save">save</button>
                    </form>
                    <div class='close_menu'></div>
                </div>
            </div>
        </div>

    </main>

    <?php
    get_footer();
else:
    echo '<script>document.location.href = "/home";</script>';
endif;