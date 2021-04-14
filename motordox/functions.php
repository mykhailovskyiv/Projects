<?php

setcookie(TEST_COOKIE, 'WP Cookie check', 0, COOKIEPATH, COOKIE_DOMAIN);
if ( SITECOOKIEPATH != COOKIEPATH ) setcookie(TEST_COOKIE, 'WP Cookie check', 0, SITECOOKIEPATH, COOKIE_DOMAIN);

add_action('admin_bar_init', function(){
    remove_action('wp_head', '_admin_bar_bump_cb'); // html margin bumps
});
add_filter('show_admin_bar', '__return_false');

function buyAccount()
{
    global $wpdb;
    $price = $_POST['price'];
    $userID = $_POST['user'];

    if ($price == 5){
        $month = 1;
    } else
    {
        $month = 12;
    }
    $user = get_user_to_edit($userID);
    $name = $user->first_name.' '.$user->last_name;
    $mail = $user->user_email;
    $today = new DateTime();
    $date_to =$today->modify("+ ".$month." month");

    $query = "INSERT INTO `wp_subscriptions`(`month`, `price`, `id_user`, `date_to`, `user_name`, `user_mail`, `method`, `status`) VALUES ('$month', '$price', '$userID', '$date_to','$name', '$mail', 'PayPal', 1)";
    $wpdb->query($query);
}