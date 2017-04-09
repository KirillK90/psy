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

function get_services($attrs) {
    return require_once 'services.php';
}

add_shortcode('psy-services', 'get_services');

function get_psy_spec_meta($attrs) {
    return require_once 'psy_spec_meta.php';
}

add_shortcode('psy-spec-meta', 'get_psy_spec_meta');



