    
<?php get_header(); ?>


<div class="frontimage">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

              <?php the_title(); ?>
              <?php the_content(); ?>

        <?php endwhile; ?>

      <?php endif; ?>

      <button class="refresh" style="background-color:transparent;border:none;"><a href="" onclick="dummy(0);return false;" ><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a></button>


</div>


<?php get_footer(); ?>

