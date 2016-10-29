<?php 
/*
  Template name: Portfolio Page
*/
  ?>

<?php get_header(); ?>  

<div class="row">

      
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>     
      
      <?php endwhile(); endif; ?>
      
      <?php get_template_part('content', 'portfolio') ;?>


</div>

<?php get_footer(); ?>