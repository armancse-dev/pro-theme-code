<?php

// Wordpress shortcode

function basic_shortcode(){
   return "This is our first Shortcode";
}
add_shortcode( 'text', 'basic_shortcode' );

function button_shortcode($atts, $content = null ){
   $values = shortcode_atts(array(
      'url' => '#',
   ), $atts );
   return '<a class="button" href="'.esc_attr($value['url']) .'">' . $content . '</a>';
}
add_shortcode( 'button', 'button_shortcode');