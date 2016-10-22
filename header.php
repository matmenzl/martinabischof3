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

    <body <?php body_class(); ?>>


    <header>

        <div class="container">
        <div class="row">
        <nav id="myNavmenu" class="navmenu navmenu-default navmenu-fixed-right offcanvas" role="navigation">
         
          <ul class="nav navmenu-nav">
          <?php wp_nav_menu( array( 'theme_location' => 'primary-menu' ) ); ?>

<!--             <li class="active"><a href="#">Home</a></li>
 -->          </ul>
        </nav>
        <div class="navbar-toggle" data-toggle="offcanvas" data-target="#myNavmenu" data-canvas="body">
        <button class="hamburger hamburger--collapse" type="button">
          <span class="hamburger-box">
            <span class="hamburger-inner"></span>
          </span>
        </button>
        </div>

        <a class="navmenu-brand" href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
        <div class="subtitle"><?php bloginfo('description'); ?></div>


        </div>
        </div>

    </header

