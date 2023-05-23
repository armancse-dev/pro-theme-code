<?php
/**
 * My Theme Function
*/

//Theme Title
add_theme_support('title-tag');

//Theme CSS and  JQuery file include

function an_pro_code_file_calling(){
    wp_enqueue_style('an-style', get_stylesheet_uri());
    wp_register_style( 'bootstrap', get_template_directory_uri().'/css/bootstrap.css', array(),'5.0.2','all' );
    wp_register_style( 'custom', get_template_directory_uri().'/css/custom.css', array(),'1.0.2','all' );

    wp_enqueue_style('bootstrap');
    wp_enqueue_style('custom');

    //jQuery

    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap', get_template_directory_uri().'/js/bootstrap.js', array(), '5.0.2', 'true' );
    wp_enqueue_script('main', get_template_directory_uri().'/js/main.js', array(), '1.0.0', 'true' );
}

add_action( 'wp_enqueue_scripts', 'an_pro_code_file_calling');

// Google Fonts Enqueue
function pro_add_google_fonts(){
    wp_enqueue_style('pro_google_fonts', 'https://fonts.googleapis.com/css2?family=Kaisei+Decol&family=Oswald&display=swap', false);
  }
  add_action('wp_enqueue_scripts', 'pro_add_google_fonts');

//Theme Function
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


// Menu Register
register_nav_menu( 'main_menu', __('Main Menu', 'alihossain') );

// Walker Menu Properties
function ali_nav_description( $item_output, $item, $args){
    if( !empty ($item->description)){
      $item_output = str_replace($args->link_after . '</a>', '<span class="walker_nav">' . $item->description . '</span>' . $args->link_after . '</a>', $item_output);
    }
    return $item_output;
  }
  add_filter('walker_nav_menu_start_el', 'ali_nav_description', 10, 3);