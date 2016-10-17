<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php bloginfo('name'); ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <?php wp_head(); ?>
    </head>
        <!-- Header -->
        <header class="push">
          <nav class="pushy pushy-left">
              <?php wp_nav_menu( array( 'theme_location' => 'primary-menu' ) ); ?> 
          </nav>

            <!-- Menu Button -->
<!--             <i class="icon-reorder menu-btn"></i>--> 

                <div class="hamburger hamburger--squeeze menu-btn">
                <div class="hamburger-box">
                <div class="hamburger-inner"></div>
                </div>
                </div>
                </div>
            <a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>">
                <h2><?php bloginfo('name'); ?></h2>
            </a>


            


        </header>

        <body <?php body_class(); ?>>


        <!-- Site Overlay -->
<!--         <div class="site-overlay"></div>
 -->
        <!-- Content -->
<!--         <div class="container">
 -->

