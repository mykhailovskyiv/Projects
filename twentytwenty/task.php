<?php

global $wpdb;

$query = "SELECT numbers FROM `wp_temp_numbers` WHERE  id=1";
$col = $wpdb->get_var($query);

if ( $col >=4 ){
$col = $col-7;
$query = "UPDATE `wp_temp_numbers` SET `numbers`='$col' WHERE id=1";
$wpdb->query($query);
}