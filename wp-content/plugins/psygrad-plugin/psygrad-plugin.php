<?php
/*
Plugin Name: Site Plugin for psygrad.ru
Description: Site specific code changes for psygrad.ru
*/

// Enable shortcodes in text widgets
//add_filter('widget_text','do_shortcode');

function get_benefits($atts) {
    return require_once 'benefits.php';
}

add_shortcode('benefits', 'get_benefits');






