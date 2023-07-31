<?php
/*
* Enqueue CSS
*/
function theme_option_custom_css(){
   wp_enqueue_style('theme_option_custom_css', get_template_directory_uri().'/css/theme_option_custom.css', array(), '1.0.0', 'all');
}
add_action( 'admin_enqueue_scripts', 'theme_option_custom_css' );


function an_add_theme_page(){
   // add_menu_page(
   //    'Theme Option for Admin',
   //    'Theme Option',
   //    'manage_options',
   //    'an_theme_option',
   //    'an_theme_create_page',
   //    'dashicons-visibility',
   //    101,

   // );
   add_menu_page('Theme Option for Admin','Theme Option','manage_options','an_theme_option','an_theme_create_page', 'dashicons-visibility',10);

   add_submenu_page( 'an_theme_option', 'Theme Option', 'General', 'manage_options', 'an_theme_option', 'an_theme_create_page' );

   add_submenu_page( 'an_theme_option', 'Theme Custom CSS', 'Custom Css', 'manage_options', 'an_custom_css', 'an_theme_custom_css_page' );

   add_submenu_page( 'an_theme_option', 'Theme Custom JS', 'Custom JS', 'manage_options', 'an_custom_js', 'an_theme_custom_js_page' );
}
add_action('admin_menu', 'an_add_theme_page');

function an_theme_create_page(){
   //generating theme option
   require_once( get_template_directory(). '/inc/theme-option/general.php' );
}

function an_theme_custom_css_page(){
   // Generating 
   require_once( get_template_directory(). '/inc/theme-option/custom_css.php' );
}

function an_theme_custom_js_page(){
   // Generating theme option
  
   require_once( get_template_directory(). '/inc/theme-option/custom_js.php' );
}