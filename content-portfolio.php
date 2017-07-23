<?php
/**
 * @package bootstrapwp
 */
?>

<div class="col-md-9">

 <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <div class="entry-content">
    <div class="row">
      <div class="col-md-12 col-lg-12 col-sm-12">
      <div class="portfolio-navigation">
       <?php previous_post_link(); ?> |
       <a href="<?php bloginfo( 'url' ) ;?>/"> Home </a>
       | <?php next_post_link(); ?>
      </div>  
      </div>

      <div class="col-md-12 col-lg-12 col-sm-12">
      <?php the_title( ); ?>

      <div class="img-responsive">


      </div>

      <p>

      <?php the_content(); ?>


  
      </p>
      </div>

      
    </div> <!-- .row -->

    <?php
      wp_link_pages( array(
        'before' => '<div class="page-links">' . __( 'Pages:', 'bootstrapwp' ),
        'after'  => '</div>',
      ) );
    ?>
  </div> <!-- .entry-content-->


  <div class="entry-footer">

    
    <?php edit_post_link( __( 'Edit', 'bootstrapwp' ), '<span class="edit-link">', '</span>' ); ?>
  </div><!-- .entry-footer -->

</article><!-- #post-## -->

</div>

