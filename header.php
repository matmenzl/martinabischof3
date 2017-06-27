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

    <div class="navbar navbar-default navbar-fixed-top" style="text-align:center;">
     <a class="hidden-md hidden-lg" href="<?php echo home_url(); ?>">
        <?php bloginfo('name'); ?>
    </a>
        <button type="button" class="navbar-toggle" data-toggle="offcanvas" data-target="#myNavmenu">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>


    </div>

        <nav id="myNavmenu" class="navmenu navmenu-default navmenu-fixed-left offcanvas" role="navigation">
         <a class="navmenu-brand visible-md visible-lg" href="<?php echo home_url(); ?>">
            <?php bloginfo('name'); ?>
        </a>
           <ul class="nav navmenu-nav">
             <?php /* Primary navigation */
             wp_nav_menu( array(
                 'menu' => 'Main Menu',
                 'theme_location'    => 'primary',
                 'depth' => 2,
                 'container' => 'ul',
                 'container_class'   => 'offcanvas',
                 'container_id'      => 'myNavmenu',
                 'menu_class'        => 'nav navmenu navmenu-default',
        //Process nav menu using our custom nav walker
                 '  walker' => new wp_bootstrap_navwalker())
             );
             ?>
         </ul>
     </nav>


    </header
