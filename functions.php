<?php

//Load stylesheets
function load_stylesheets()
{
    wp_register_style('main', get_template_directory_uri() . '/css/main.css', array(), 1, 'all');
    wp_enqueue_style('main');

    wp_register_style('custom', get_template_directory_uri() . '/css/custom.css', array(), 1, 'all');
    wp_enqueue_style('custom');
}
add_action('wp_enqueue_scripts', 'load_stylesheets');

//Load scripts
function load_scripts()
{
    wp_deregister_script('jquery');

    wp_register_script('jquery', get_template_directory_uri() . '/js/jquery.js', array(), 1, 1, 1);
    wp_enqueue_script('jquery');

    wp_register_script('popper', get_template_directory_uri() . '/js/vendor/popper.min.js', array(), 1, 1, 1);
    wp_enqueue_script('popper');

    wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), 1, 1, 1);
    wp_enqueue_script('bootstrap');

    wp_register_script('magnific-popup', get_template_directory_uri() . '/js/magnific-popup.min.js', array(), 1, 1, 1);
    wp_enqueue_script('magnific-popup');

    wp_register_script('tilt', get_template_directory_uri() . '/js/tilt.jquery.min.js', array(), 1, 1, 1);
    wp_enqueue_script('tilt');

    wp_register_script('appear', get_template_directory_uri() . '/js/appear.js', array(), 1, 1, 1);
    wp_enqueue_script('appear');

    wp_register_script('owl', get_template_directory_uri() . '/js/owl.js', array(), 1, 1, 1);
    wp_enqueue_script('owl');

    wp_register_script('wow', get_template_directory_uri() . '/js/wow.js', array(), 1, 1, 1);
    wp_enqueue_script('wow');

    wp_register_script('odometer', get_template_directory_uri() . '/js/odometer.js', array(), 1, 1, 1);
    wp_enqueue_script('odometer');

    wp_register_script('jquery-ui', get_template_directory_uri() . '/js/jquery-ui.js', array(), 1, 1, 1);
    wp_enqueue_script('jquery-ui');

    wp_register_script('menu', get_template_directory_uri() . '/js/ma5-menu.min.js', array(), 1, 1, 1);
    wp_enqueue_script('menu');

    wp_register_script('custom', get_template_directory_uri() . '/js/custom.js', array(), 1, 1, 1);
    wp_enqueue_script('custom');
}
add_action('wp_enqueue_scripts', 'load_scripts');

// Add menu support
add_theme_support('menus');
