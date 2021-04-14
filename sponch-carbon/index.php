<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

get_header();

if (is_404()){
    require_once '404.php';
}
if (is_single() || is_singular() || is_paged()){
    require_once 'single.php';
}
get_footer();