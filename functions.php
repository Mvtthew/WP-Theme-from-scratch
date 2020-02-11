<?php

// Styles loading
function loadStyles() {

    // Bootstrap 4
    wp_register_style('bootstrap4', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), false, 'all');
    wp_enqueue_style('bootstrap4');

    // style.css
    wp_register_style('style', get_template_directory_uri() . '/style.min.css', array(), false, 'all');
    wp_enqueue_style('style');

}
add_action('wp_enqueue_scripts', 'loadStyles');

// JS Scripts loading
function loadJS() {
    
    // JQuery 4
    wp_deregister_script('jquery');
    wp_register_script('jquery', get_template_directory_uri() . '/assets/js/jquery-3.4.1.min.js', array(), false, true);
    wp_enqueue_script('jquery');

    // Bootstrap 4
    wp_register_script('bootstrap4', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array(), false, true);
    wp_enqueue_script('bootstrap4');

    // app.js
    wp_register_script('app', get_template_directory_uri() . '/assets/js/app.js', array(), false, true);
    wp_enqueue_script('app');
    
}
add_action('wp_enqueue_scripts', 'loadJS');

// Menus support
add_theme_support('menus');
register_nav_menus(array(
    'top-menu' => __('Top Menu', 'theme'),
    'footer-menu' => __('Footer Menu', 'theme'),
));