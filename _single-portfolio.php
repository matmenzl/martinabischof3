<?php
/**
 * The template for displaying all single portfolio items.
 *
 * @package bootstrapwp
 */
 
get_header(); ?>

<div class="col-md-6 col-md-offset-3">
<div class="container">
<div class="row">


  <div id="primary" class="col-lg-12">
    <main id="main" class="site-main" role="main">
 
      <?php while ( have_posts() ) : the_post(); ?>

      <?php get_template_part( 'content', 'portfolio' ); ?>



    <?php endwhile; // end of the loop. ?>
 
    </main><!-- #main -->
  </div><!-- #primary -->
 
</div>
</div>
</div>
<?php get_footer(); ?>