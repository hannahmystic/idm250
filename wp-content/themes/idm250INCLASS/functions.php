<?php

// Theme will only work for WordPress 4.9.6 or later.
if (version_compare($GLOBALS['wp_version'], '4.9.6', '<')){
    die('Sorry! This theme only works in WordPress 4.9.6 or later.');
}

function register_menus(){
    register_nav_menus([
        'main_menu' => __('Main Navigation'),
        'footer_menu' => __('Footer Navigation'),
        // Note! The nav must start with two underscores and then parenthasis. Inside, you can call it whatever you want.
    ]);
}

add_action('init', 'register_menus');

function load_theme_assets(){
    /* How to import CSS and JS files and custom fonts*/
    wp_enqueue_style('style', get_template_directory_uri() . 'dist/css/styles.css');
    wp_enqueue_style('script', get_template_directory_uri() . 'dist/js/script.js');
    /* wp_enqueue_style('font-uniqueID', 'link to google font');*/
}
add_action('wp_enqueue_scripts', 'load_theme_assets');
?>