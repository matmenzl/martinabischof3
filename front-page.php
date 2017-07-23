    
<?php get_header(); ?>


<div class="frontpage">


        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>



              <?php the_title(); ?>
              <?php the_content(); ?>

        <?php endwhile; ?>

      <?php endif; ?>
      <div class="frontbrand">Martina Bischof</div>


      <button class="reloadbutton navigationnext" onclick="location.reload();"></button>
      <button class="reloadbutton navigationprevious " onclick="location.reload();"></button>
      <div class="reloadiconright animated bounce"><i class="fa fa-chevron-right" aria-hidden="true"></i></div> 
      <div class="reloadiconleft animated bounce"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>
      </div>



</div>


<?php get_footer(); ?>

