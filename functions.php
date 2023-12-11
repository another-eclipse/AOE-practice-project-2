<?php

function myzone_theme_support(){
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
};

add_action('after_setup_theme', 'myzone_theme_support');

function myzone_menus() {
    $locations = array(
        'primary' => "Main Menu",
        'footer' => "Footer Menu"
    );
    register_nav_menus($locations);
};

add_action('init', 'myzone_menus');

function myzone_register_styles() {
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('myzone-style', get_template_directory_uri() . "/assets/css/style.css", $version, 'all');
    wp_enqueue_style('myzone-bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css', '5.3.0.', 'all');
    // wp_enqueue_style('swiper-style', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', 'all');
};

add_action('wp_enqueue_scripts', 'myzone_register_styles');

function myzone_register_script() {
    wp_enqueue_script('myzone-boot', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css', '5.3.0.', true);
    wp_enqueue_script('main-js', get_template_directory_uri() . "/assets/js/main.js", array('jquery'), "1.0", true);
    // wp_enqueue_script('swiper-script', "https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js", true);
};



add_action('wp_enqueue_scripts', 'myzone_register_script');

if(function_exists('acf_add_options_page')){
    acf_add_options_page(
        array(
            'page_title' => 'Options Page',
            'menu_title' => 'Options'
        ) 
    );
};


?>