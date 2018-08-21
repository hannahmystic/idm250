<?php
        wp_enqueue_style('style', get_template_directory_uri() . '/css/style.css');
?>


<!--
 This function will register the navigation menus. 
You can call display the menu by calling wp_nav_menu() in your templates

 @link https://developer.wordpress.org/reference/functions/wp_nav_menu/
 @method register_nav_menus
 
-->
<?php
function register_menus()
{
    register_nav_menus([
        'main'   => __('Main Navigation'),
        'footer' => __('Footer Navigation'),
    ]);
}
add_action('init', 'register_menus');
?>