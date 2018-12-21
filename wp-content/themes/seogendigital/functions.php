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

        /*CSS*/  
      
        wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri().'/assets/css/bootstrap.min.css', array(),'1.1.0','all');
        wp_enqueue_style( 'style', get_stylesheet_directory_uri().'/assets/css/style.css', array(),'1.1.0','all');
        wp_enqueue_style( 'custom_style', get_stylesheet_directory_uri().'/style.css', array(),'1.1.0','all');
      /*  wp_enqueue_style( 'bicon', get_stylesheet_directory_uri().'/assets/css/bicon.min.css', array(),'1.1.0','all');
        wp_enqueue_style( 'plugins.css', get_stylesheet_directory_uri().'/assets/css/plugins.css', array(),'1.1.0','all');*/
        
        /*JAVASCRIPT*/
        wp_register_script('jqueryC', get_template_directory_uri().'/assets/js/vendor/jquery-1.12.4.min.js',array(),'1.0',5);
        wp_register_script('popper', get_template_directory_uri().'/assets/js/popper.min.js',array(),'1.0',5);
        /*wp_register_script('bootstrapjs', get_template_directory_uri().'/assets/js/bootstrap.min.js',array(),'1.0',5);*/
        wp_register_script('plugins', get_template_directory_uri().'/assets/js/plugins.js',array(),'1.0',5);
        wp_register_script('main', get_template_directory_uri().'/assets/js/main.js',array(),'1.0',5);
        wp_register_script('modernizer', get_template_directory_uri().'/assets/js/vendor/modernizr-2.8.3.min.js',array(),'1.0',5);
        /*wp_register_script('script', get_template_directory_uri().'/script.js',array(),'1.0',5);*/

        wp_enqueue_script('jqueryC');
        wp_enqueue_script('popper');
        /*wp_enqueue_script('bootstrapjs');*/
        wp_enqueue_script('plugins');
        wp_enqueue_script('main');
        wp_enqueue_script('modernizer');
        /*wp_enqueue_script('script');*/
}
endif;



add_action( 'wp_enqueue_scripts', 'gendigital_scripts',999 );
/*agregar async y defer a los js para la optmización*/ 
function add_async_attribute($tag, $handle) {
    // agregar los handles de los scripts en el array
    $scripts_to_async = array('jquery','popper','plugins','bootstrapjs','main','modernizer','script');
     
    foreach($scripts_to_async as $async_script) {
       if ($async_script === $handle) {
          return str_replace(' src', ' async defer src', $tag);
       }
    }
    return $tag;
 }
 add_filter('script_loader_tag', 'add_async_attribute', 10, 2);

/*agregar disabled  a los CSS para la optmización*/ 
 function add_async_attribute_css($tag, $handle) {
    // agregar los handles de los scripts en el array
    $style_to_async = array('bootstrap','style','custom_style');
     
    foreach($style_to_async as $async_style) {
       if ($async_style === $handle) {
          return str_replace(' href', ' rel="preload" href', $tag);
       }
    }
    return $tag;
 }
 add_filter('style_loader_tag', 'add_async_attribute_css', 10, 2);


 /* Activando el soporte de imagen destacada */
 if(!function_exists('gendigital_setup')):
   function gendigital_setup(){
      add_theme_support('post-thumbnails');
      /*Activar HTml 5*/
      add_theme_support('html5',array(
         'comment-list',
         'comment-form',
         'search-form',
         'galley',
         'caption'
      ));
   }
 endif;
 add_action('after_setup_theme','gendigital_setup');


 /*  Activando menu*/
 if(!function_exists('gendigital_menu')):
   function gendigital_menu(){
      register_nav_menus(array(
         'menu_ppal'=>__('Menú Principal','gendigital'),
         'social'=>__('Menú de Redes Sociales','gendigital')
      ));
   }
 endif;

 add_action('init','gendigital_menu');


 function atg_menu_classes($classes, $item, $args) {
   if('menu_ppal' === $args->theme_location) {
     $classes[] = "main-navigation";

   }
   return $classes;
   echo $classes;
 }
 add_filter('nav_menu_css_class', 'atg_menu_classes', 10, 4);

 /*  Activando widgets*/
 if(!function_exists('gendigital_widgets')):
   function gendigital_widgets(){
      register_sidebar(array(
      'name' => __('Sidebar Principal', 'gendigital'),
      'id' => 'main_sidebar',
      'description' => __('Este es el sidebar principal','gendigital'),
      'before_widget' => '<article id="%1$s" class="Widget %2$s">',
      'after_widget' => '</article>',
      'before_title' => '<h3>',
      'after_title' => '</h3>'
      ));

      register_sidebar(array(
         'name' => __('Sidebar Footer', 'gendigital'),
         'id' => 'footer_sidebar',
         'description' => __('Este es el sidebar footer','gendigital'),
         'before_widget' => '<article id="%1$s" class="Widget %2$s">',
         'after_widget' => '</article>',
         'before_title' => '<h3>',
         'after_title' => '</h3>'
         ));
   }
 endif;
 add_action('widgets_init', 'gendigital_widgets');

