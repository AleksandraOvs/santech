<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;
add_action('carbon_fields_register_fields', 'crb_register_custom_fields');

function crb_register_custom_fields(){
	require_once __DIR__ . '/../../plugins/carbon-fields/theme-options.php' ;
	require_once __DIR__ . '/../../plugins/carbon-fields/post-meta.php' ;
}

function site_scripts(){
    wp_enqueue_script ('swiper-js-bundle', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js', array(), null, true);
    //wp_enqueue_script ('fancy-js', 'https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js', array(), null, true);
    wp_enqueue_script ('fancy_scripts', get_stylesheet_directory_uri() . '/inc/fancybox/jquery.fancybox.min.js', array('jquery'), null, true);
    wp_enqueue_script ('fa-js', 'https://kit.fontawesome.com/66298a2362.js', array(), null, true);
    wp_enqueue_script ('theme-js', get_stylesheet_directory_uri() . '/js/scripts.js', array(), null, true);

    wp_enqueue_style ('fancy_styles', get_stylesheet_directory_uri() . '/inc/fancybox/jquery.fancybox.min.css', array(), time());
    wp_enqueue_style( 'swiper-styles', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css', array(), time() );
    wp_enqueue_style( 'add-styles', get_stylesheet_directory_uri() . '/css/add-styles.css', array(), time() );
    wp_enqueue_style( 'wc-styles', get_stylesheet_directory_uri() . '/css/wc-style.css', array(), time() );

}
add_action( 'wp_enqueue_scripts', 'site_scripts' );