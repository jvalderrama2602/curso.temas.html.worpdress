<?php
/**
 * Plantilla SEO Gendigital. Página de funciones
 * 
 * @link http://gendigital.com.ve
 * 
 * @package Wordpress
 * @subpackage seogendigital
 * @since 1.0.0
 * @version 1.0.0
 */
// REMOVE WP EMOJI
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );

if (!function_exists('gendigital_scripts')) :
function gendigital_scripts() {
        wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri().'/assets/css/bootstrap.min.css', array(),'1.1.0','all');
        wp_enqueue_style( 'style', get_stylesheet_directory_uri().'/assets/css/style.css', array(),'1.1.0','all');
        wp_enqueue_style( 'custom_style', get_stylesheet_directory_uri().'/style.css', array(),'1.1.0','all');
        wp_register_script('modernizer', get_template_directory_uri().'/assets/js/vendor/modernizr-2.8.3.min.js',array(),true);
        wp_enqueue_script('modernizer');
}
endif;
add_action( 'wp_enqueue_scripts', 'gendigital_scripts' );

/*
if (!function_exists('gendigital_scripts')) :
    function gendigital_scripts()
    {
        $urlfavicon='.get_stylesheet_directory_uri()./assets/images/favicon.ico';
        wp_register_style('style',$urlfavicon,array(),'1.0.0','all'); 
    }

    wp_enqueue_style('style');

    add_action('wp_enqueue_scripts', 'gendigital_scripts');
endif;*/