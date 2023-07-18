<?php

function an_pro_code_file_calling(){
   wp_enqueue_style('an-style', get_stylesheet_uri());
   wp_register_style( 'bootstrap', get_template_directory_uri().'/css/bootstrap.css', array(),'5.0.2','all' );
   wp_register_style( 'bxslider', get_template_directory_uri().'/css/bxslider.min.css', array(),'4.2.12','all' );
   wp_register_style( 'owl.carousel.min', get_template_directory_uri().'/css/owl.carousel.min.css', array(),'2.3.4','all' );
   wp_register_style( 'owl.theme.default', get_template_directory_uri().'/css/owl.theme.default.min.css', array(),'2.3.4','all' );
   wp_register_style( 'custom', get_template_directory_uri().'/css/custom.css', array(),'1.0.2','all' );

   wp_enqueue_style('bootstrap');
   wp_enqueue_style('bxslider');
   wp_enqueue_style('owl.carousel.min');
   wp_enqueue_style('owl.theme.default');
   wp_enqueue_style('custom');

   //jQuery

   wp_enqueue_script('jquery');
   wp_enqueue_script('jquery_main', get_template_directory_uri().'/js/jquery.bxslider.js', array(), '3.1.1', 'true' );
   wp_enqueue_script('bootstrap', get_template_directory_uri().'/js/bootstrap.js', array(), '5.0.2', 'true' );
   wp_enqueue_script('bxsliderjs', get_template_directory_uri().'/js/bxslider.min.js', array(), '4.2.12', 'true' );
   wp_enqueue_script('owl.carousel.min', get_template_directory_uri().'/js/owl.carousel.min.js', array(), '2.3.4', 'true' );
   
   wp_enqueue_script('main', get_template_directory_uri().'/js/main.js', array(), '1.0.0', 'true' );
}

add_action( 'wp_enqueue_scripts', 'an_pro_code_file_calling');

// Google Fonts Enqueue
function pro_add_google_fonts(){
   wp_enqueue_style('pro_google_fonts', 'https://fonts.googleapis.com/css2?family=Oswald&family=Roboto:wght@400;700&display=swap', false);
 }
 add_action('wp_enqueue_scripts', 'pro_add_google_fonts');

 
 // Dashicon Not showing fixing
 function dashicons_load(){
   wp_enqueue_style('dashicons');
  }
  add_action('wp_enqueue_scripts', 'dashicons_load');