<?php

add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );
function enqueue_parent_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}

function remove_admin_bar_links() {
    /** @var $wp_admin_bar WP_Admin_Bar */
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu('revslider');
}
add_action( 'wp_before_admin_bar_render', 'remove_admin_bar_links', 999 );


function log_me($message) {
    if (WP_DEBUG === true) {
        if (is_array($message) || is_object($message)) {
            error_log(print_r($message, true));
        } else {
            error_log($message);
        }
    }
}