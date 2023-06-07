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

 //Theme Color
 $wp_customize->add_section('an_color', array(
  'title' => __('Theme Color', 'procode'),
  'description' => 'If you need you can change the theme color',
 ));

 $wp_customize-> add_setting('an_bg_color', array(
  'default' => '#ffffff',
  ));

  $wp_customize-> add_control(new WP_Customize_Color_Control($wp_customize, 'an_bg_color', array(
    'label' => 'Background Color',
    'section' => 'an_color',
    'settings' => 'an_bg_color'
  )));
 $wp_customize-> add_setting('an_primary_color', array(
  'default' => '#ea1a70',
  ));

  $wp_customize-> add_control(new WP_Customize_Color_Control($wp_customize, 'an_primary_color', array(
    'label' => 'Primary Color',
    'section' => 'an_color',
    'settings' => 'an_primary_color'
  )));

}
add_action('customize_register','an_customizer_register');

function an_theme_color_cus(){
  ?>
    <style>
      body{ background: <?php echo get_theme_mod('an_bg_color'); ?> }
      :root{--pink: <?php echo get_theme_mod('an_primary_color'); ?>}
    </style>
  <?php
}
add_action('wp_head', 'an_theme_color_cus');
