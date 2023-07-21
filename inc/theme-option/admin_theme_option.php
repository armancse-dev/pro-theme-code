<?php
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
}
add_action('admin_menu', 'an_add_theme_page');

function an_theme_create_page(){
   //generating theme option
   echo "<h1>Theme Option</h1>";
   bloginfo( 'name' );
}