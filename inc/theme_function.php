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

  // Theme custom login page
  $wp_customize-> add_section('custom_login', array(
    'title' => __('Custom Login', 'procode'),
    'description' => 'If need you can change your theme custom login info.',
  ));

  $wp_customize->add_setting('custom_login_logo', array(
    'default' => get_template_directory_uri() . '/img/whatson_logo.png',
    'sanitize_callback' => 'sanitize_text_field',
  ));

  $wp_customize-> add_control(new WP_Customize_Image_Control($wp_customize, 'custom_login_logo', array(
    'label' => 'Logo Upload',
    'description' => 'If you interested to change or update your logo you can do it.',
    'setting' => 'custom_login_logo',
    'section' => 'custom_login',
  ) ));

  $wp_customize->add_setting('custom_login_bg', array(
    'default' => get_template_directory_uri() . '/img/login.jpg',
    'sanitize_callback' => 'sanitize_text_field',
  ));

  $wp_customize-> add_control(new WP_Customize_Image_Control($wp_customize, 'custom_login_bg', array(
    'label' => 'Background Upload',
    'description' => 'If you interested to change or update your background image you can do it.',
    'setting' => 'custom_login_bg',
    'section' => 'custom_login',
  ) ));
  $wp_customize ->add_setting('custom_primary_color', array(
    'default' => '#ea1a70',
  ));
  $wp_customize->add_control( new WP_Customize_color_control($wp_customize, 'custom_primary_color', array(
    'label' => 'Primary Color',
    'section' => 'custom_login',
    'settings' => 'custom_primary_color',
  )));

}
add_action('customize_register','an_customizer_register');

function an_theme_color_cus(){
  ?>
    <style>
      body{ background: <?php echo get_theme_mod("an_bg_color"); ?> }
      :root{--pink: <?php echo get_theme_mod("an_primary_color"); ?>}
    </style>
  <?php
}
add_action('wp_head', 'an_theme_color_cus');

// Theme Custom Login page Style
function custom_color_login(){
  ?>
  <style>
    #login h1 a, .login h1 a{
      background-image: url(<?php print get_theme_mod("custom_login_logo"); ?>) !important;
    }

    body.login {
      background: url(<?php print get_theme_mod("custom_login_bg"); ?>) !important;
    }

    #login form p.submit input {
      background: <?php print get_theme_mod("custom_primary_color"); ?>  !important;
    }  
    .login #login_error,
    .login .message,
    .login .success {
      border-left: 4px solid <?php print get_theme_mod("custom_primary_color"); ?>  !important;
    }
    input#user_login,
    input#user_pass {
      border-left: 4px solid <?php print get_theme_mod("custom_primary_color"); ?>  !important;
    }  
  </style>
  <?php 
}
add_action('login_enqueue_scripts', 'custom_color_login');

