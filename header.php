<?php
/*
This template for displaying the header
*/
?>

<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>" class=""no-js>
<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header id="header_area" class="<?php echo get_theme_mod('an_menu_position'); ?>">

        <div class="top_header_area">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <p><i class="fa-sharp fa-solid fa-location-dot"></i> <?php print get_option("address-info"); ?></p>
                    </div>
                    <div class="col-md-4 text-center">
                        <p><i class="fa-solid fa-envelope"></i> <?php print get_option("email-info"); ?></p>
                    </div>
                    <div class="col-md-4 text-end">
                        <p><i class="fa-solid fa-phone"></i> <?php print get_option("phone-number"); ?></p>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="<?php echo home_url(); ?>">
                        <img src="<?php echo get_theme_mod('an_logo'); ?>" alt="">
                    </a>
                </div>
                <div class="col-md-9">
                    <?php wp_nav_menu( array('theme_location' => 'main_menu', 'menu_id' => 'nav') ); ?>
                </div>
            </div>
        </div>
    </header>