<?php
/**
 * The template for displaying all single portfolio items.
 *
 * @package bootstrapwp
 */
 
get_header(); ?>

<div class="row">


    <main id="main" class="site-main" role="main">
 
      <?php while ( have_posts() ) : the_post(); ?>

      <?php get_template_part( 'content', 'portfolio' ); ?>



    <?php endwhile; // end of the loop. ?>
 
    </main><!-- #main -->
 
</div>


 <?php get_footer(); ?>