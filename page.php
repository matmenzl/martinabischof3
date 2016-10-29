<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package bootstrapwp
 */

get_header(); ?>


  <div class="row">


    <div id="primary" class="col-lg-12 col-md-12">
      <main id="main" class="site-main" role="main">



        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<!--           <?php the_title(); ?>
 -->          <?php the_content(); ?>

        <?php endwhile; ?>

      <?php endif; ?>



      </main>  <!-- #main -->
   </div> <!-- #primary -->
  </div>


<?php get_footer(); ?>
