<?php
//Theme Title
add_theme_support('title-tag');

// Thumbnail Image Area
add_theme_support('post-thumbnails', array('page','post'));
add_image_size( 'post-thumbnails',970, 400, true );

//Excerpt to 40 word

function an_excerpt_more($more){
   return '<br> <br> <a class="redmore" href="'.get_permalink( $post->ID) . '">' . 'Read More' . '</a>';
 }
 add_filter('excerpt_more', 'an_excerpt_more');
 
 function an_excerpt_lenght($length){
   return 40;
 }
 add_filter('excerpt_length', 'an_excerpt_lenght', 999);
