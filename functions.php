<?php
function wordpresslayout_enqueue_scripts() {
    wp_enqueue_style('wordpresslayout-style', get_stylesheet_uri());
    wp_enqueue_style('custom-style', get_template_directory_uri() . '/assets/css/style.css');
    wp_enqueue_script('custom-js', get_template_directory_uri() . '/assets/js/script.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'wordpresslayout_enqueue_scripts');

function wordpresslayout_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'wordpresslayout_theme_setup');

require get_template_directory() . '/inc/custom-post-types.php';