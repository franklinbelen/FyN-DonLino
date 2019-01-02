<?php
/**
 * FyN Aceros WordPress Theme functions and denitions
 * 
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 * 
 * @package WordPress
 * @subpackage FyN Aceros
 * @since 1.0.0
 * @version 1.0.0
 */


//  Registrando lo Archivos [.css - .js]
if ( !function_exists('fyn_don_lino_script') ):
    function fyn_don_lino_script (){
        wp_register_style('trabaja-aqui.css', get_template_directory_uri() . '/css/trabaja-aqui.css', array(), '1.0.0', 'all');
        // Menu de Navegacion
        wp_register_style('menu-navegaction', get_template_directory_uri() . '/css/menu-navegaction.css', array(), '1.0.0', 'all');
        // Archivos de la variables css
        wp_register_style('custom-properties', get_template_directory_uri() . '/css/custom-properties.css', array(), '1.0.0', 'all');
        // Archivo principal CSS
        wp_register_style('style', get_stylesheet_uri(), array('custom-properties','menu-navegaction'), '1.0.0', 'all');
        wp_enqueue_style('trabaja-aqui.css');
        wp_enqueue_style('style');

        wp_register_script('script', get_template_directory_uri() . '/script.js', array('jquery'), '1.0.0', true);
        wp_enqueue_script('jquery');
        wp_enqueue_script('script');
    }
endif;
add_action('wp_enqueue_scripts', 'fyn_don_lino_script');


// Activando la imagen destacada
if ( !function_exists('fyn_don_lino_setup')):
    function fyn_don_lino_setup (){
        // https://developer.wordpress.org/reference/functions/add_theme_support

        // Agregando Imagen destacada a todos
        // https://codex.wordpress.org/Post_Thumbnails
        add_theme_support('post-thumbnails');

        // Activando el HTML5
        // https://developer.wordpress.org/reference/functions/add_theme_support/#html5
        add_theme_support( 'html5', array(
            'comment-list',
            'comment-form',
            'search-form',
            'gallery',
            'caption'
        ) );

        // Activando el Logo Personalizable
        // https://codex.wordpress.org/Theme_Logo
        add_theme_support( 'custom-logo', array(
            'height'      => 100,
            'width'       => 400,
            'flex-height' => true,
            'flex-width'  => true,
            'header-text' => array( 'site-title', 'site-description' ),
        ) );
    }
endif;
add_action('after_setup_theme', 'fyn_don_lino_setup');


// Activando los Menú de navegación
if ( !function_exists('fyn_don_lino_menus' )):
    function fyn_don_lino_menus (){
        register_nav_menus( array(
            'main_menu' => __('Menu Principal', 'fyn-don-lino'),
            'menu_medium' => __('Menu en la página de portada', 'fyn-don-lino')
            // 'social_menu' => __('Menu de Redes Sociales [ Footer ]', 'fyn-don-lino')
        ));
    }
endif;
add_action('init', 'fyn_don_lino_menus');


//  Activación de los Widgets
if(!function_exists('fyn_don_lino_register_sidebars')):
    function fyn_don_lino_register_sidebars(){
        register_sidebar( array(
            'name' => __('Sidebar Footer 1', 'fyn-don-lino'),
            'id' => 'footer_sidebar_one',
            'description' => __('Aquí va formas de pago', 'fyn-don-lino'),
            'before_widget' =>'<div id="%1$s" class="Widget WidgetOne %2$s">',
            'after_widget' =>'</div>',
            'before_title' => '<h6 class="FynTitleWidget">',
            'after_title' => '</h6>'
        )); 
        register_sidebar( array(
            'name' => __('Sidebar Footer 2', 'fyn-don-lino'),
            'id' => 'footer_sidebar_two',
            'description' => __('Lista de páginas oficiales', 'fyn-don-lino'),
            'before_widget' =>'<div id="%1$s" class="Widget WidgetTwo %2$s">',
            'after_widget' =>'</div>',
            'before_title' => '<h6 class="FynTitleWidget">',
            'after_title' => '</h6>'
        )); 
        register_sidebar( array(
            'name' => __('Sidebar Footer 3', 'fyn-don-lino'),
            'id' => 'footer_sidebar_three',
            'description' => __('Sección de contactame', 'fyn-don-lino'),
            'before_widget' =>'<div id="%1$s" class="Widget WidgetThree %2$s">',
            'after_widget' =>'</div>',
            'before_title' => '<h6 class="FynTitleWidget">',
            'after_title' => '</h6>'
        )); 
        register_sidebar( array(
            'name' => __('Sidebar Footer 4', 'fyn-don-lino'),
            'id' => 'footer_sidebar_four',
            'description' => __('Su dirección', 'fyn-don-lino'),
            'before_widget' =>'<div id="%1$s" class="Widget  WidgetFour %2$s">',
            'after_widget' =>'</div>',
            'before_title' => '<h6 class="FynTitleWidget">',
            'after_title' => '</h6>'
        )); 
    }
endif;
add_action('widgets_init', 'fyn_don_lino_register_sidebars');