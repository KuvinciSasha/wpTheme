<?php
// правильный способ подключить стили и скрипты
add_action( 'wp_enqueue_scripts', 'prom_styles' );
add_action( 'wp_enqueue_scripts', 'prom_scripts', 11 );

function prom_styles() {
	wp_enqueue_style( 'main-style', get_stylesheet_uri() );
}

function prom_scripts() {
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'https://code.jquery.com/jquery-3.2.1.slim.min.js');
  wp_enqueue_script( 'jquery' );
	wp_register_script( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js');
  wp_enqueue_script( 'bootstrap' );
	wp_register_script( 'slick', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js');
  wp_enqueue_script( 'slick' );

  wp_enqueue_script( "script.js", get_template_directory_uri() . '/assets/js/script.js', array('jquery'), true );
}

add_theme_support( "custom-logo" );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'menus' );
if ( function_exists('register_sidebar') ) {
  register_sidebar(array(
    'before_widget' => '<li id="%1$s" class="widget %2$s">',
    'after_widget' => '</li>',
    'before_title' => '<span class="widgettitle">',
    'after_title' => '</span>',
  ));
}
