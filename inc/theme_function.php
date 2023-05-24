<?php
function an_customizer_register($wp_customize){
   //Header Area Function
   $wp_customize->add_section('an_header_area', array(
       'title' => __('Header Area', 'procode'),
       'description' => 'update your header logo'
   ));

   $wp_customize->add_setting('an_logo', array(
       'default' => get_bloginfo('template_directory') . '/img/logo.png',

   ));
   
   $wp_customize-> add_control(new WP_Customize_Image_Control($wp_customize, 'an_logo', array(
       'label' => 'Logo Uplaod',
       'setting' => 'an_logo',
       'section' => 'an_header_area',
   ) ));

   // Menu Position Option
   $wp_customize->add_section('an_menu_option', array(
       'title' => __('Menu Position Option', 'procode'),
       'description' => 'Change Your Menu Position'
   ));

   $wp_customize->add_setting('an_menu_position', array(
       'default' => 'right_menu',
   ));

   $wp_customize->add_control('an_menu_position',array(
       'label' => 'Menu Position',
       'description' => 'Select your menu position',
       'setting' => 'an_menu_position',
       'section' => 'an_menu_option',
       'type' => 'radio',
       'choices' => array(
           'left_menu' => 'Left Menu',
           'right_menu' => 'Right Menu',
           'center_menu' => 'Center Menu',
       )
   ));

   // Footer Option
 $wp_customize->add_section('an_footer_option', array(
   'title' => __('Footer Option', 'procode'),
   'description' => 'If you interested to change or update your footer settings you can do it.'
 ));

 $wp_customize->add_setting('an_copyright_section', array(
   'default' => '&copy; Copyright 2023 | Procode',
 ));

 $wp_customize-> add_control('an_copyright_section', array(
   'label' => 'Copyright Text',
   'description' => 'If need you can update your copyright text from here',
   'setting' => 'an_copyright_section',
   'section' => 'an_footer_option',
 ));

}
add_action('customize_register','an_customizer_register');
