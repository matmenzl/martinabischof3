<?php 
/*
  Template name: Portfolio Page
*/
  ?>

<?php get_header(); ?>  

<!-- <div class="container"> -->
<div class="row">

  <div class="small-12 columns text-center">
    <div class="leader">
      
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>     
      
      <?php endwhile(); endif; ?>
      
      <?php get_template_part('content', 'portfolio') ;?>

    </div>
  </div>

</div>
<!-- </div>
 -->

<?php get_footer(); ?>