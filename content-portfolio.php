<?php
/**
 * @package bootstrapwp
 */
?>

<div class="container">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <div class="entry-content">
    <div class="row">
      <div class="col-md-12 col-lg-12" style="
    display: inline;">
      <div class="portfolio-navigation">
       <?php previous_post_link(); ?> |
       <a href="<?php bloginfo( 'url' ) ;?>/"> Home </a>
       | <?php next_post_link(); ?>
      </div>  
      </div>
      <div class="col-md-12 col-lg-12">
      <?php the_title( '<h2 class="entry-title"><span>', '</span></h2>' ); ?>
      </div>
      <div class="col-md-6 col-lg-6">
        <?php if ( has_post_thumbnail() ) : ?>
        <?php the_post_thumbnail(); ?>

        <?php the_field('images'); ?>


      <?php endif; ?>



      </div>
 
      <div class="col-md-6 col-lg-6">
        <?php the_content(); ?>
      </div>
      
  

    </div> <!-- .row -->
 </div> <!-- container -->
    <?php
      wp_link_pages( array(
        'before' => '<div class="page-links">' . __( 'Pages:', 'bootstrapwp' ),
        'after'  => '</div>',
      ) );
    ?>
  </div><!-- .entry-content -->

<!--   Related Content-->  
<!--   <div>
  <h2>Weitere Arbeiten</h2>
  <?php echo do_shortcode("[post_grid id='44']"); ?>
  </div> -->

 
  <footer class="entry-footer">

    
    <?php edit_post_link( __( 'Edit', 'bootstrapwp' ), '<span class="edit-link">', '</span>' ); ?>
  </footer><!-- .entry-footer -->
</article><!-- #post-## -->