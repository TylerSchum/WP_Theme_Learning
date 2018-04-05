<?php
function ts_enqueue(){
  wp_register_style( 'ts_google_fonts', 'http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic' );
  wp_register_style( 'ts_bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css' );
  wp_register_style( 'ts_style', get_template_directory_uri() . '/assets/css/style.css' );
  wp_register_style( 'ts_dark', get_template_directory_uri() . '/assets/css/dark.css' );
  wp_register_style( 'ts_font_icons', get_template_directory_uri() . '/assets/css/font_icons.css' );
  wp_register_style( 'ts_animate', get_template_directory_uri() . '/assets/css/animate.css' );
  wp_register_style( 'ts_magnific_popup', get_template_directory_uri() . '/assets/css/magnific_popup.css' );
  wp_register_style( 'ts_responsive', get_template_directory_uri() . '/assets/css/responsive.css' );
  wp_register_style( 'ts_custom', get_template_directory_uri() . '/assets/css/custom.css' );

  wp_enqueue_style( 'ts_google_fonts' );
  wp_enqueue_style( 'ts_bootstrap' );
  wp_enqueue_style( 'ts_style');
  wp_enqueue_style( 'ts_dark');
  wp_enqueue_style( 'ts_font_icons');
  wp_enqueue_style( 'ts_animate');
  wp_enqueue_style( 'ts_magnific_popup');
  wp_enqueue_style( 'ts_responsive');
  wp_enqueue_style( 'ts_custom');

  wp_register_script( 'ts_plugins', get_template_directory_uri() . '/assets/js/plugins.js', array(), false, true );
  wp_register_script( 'ts_functions', get_template_directory_uri() . '/assets/js/functions.js', array(), false, true );

  wp_enqueue_script( 'jquery' );
  wp_enqueue_script( 'ts_plugins' );
  wp_enqueue_script( 'ts_functions' );
};
?>