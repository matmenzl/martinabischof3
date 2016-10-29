<?php get_header(); ?>


<div class="container">
  <div class="row">

    <div id="primary" class="col-md-12 col-lg-12">
      <main id="main" class="site-main portfolio" role="main">

        <div class="row">
        <?php
        $terms = get_terms("portfolio_tags");
        $count = count($terms);
        echo '<div id="filters">';
        echo '<button type="button" autofocus="true" data-filter="*">'. __('Alle', 'bootstrapwp') .'</button>';
        if ( $count > 0 )
        {   
          foreach ( $terms as $term ) {
            $termname = strtolower($term->name);
            $termname = str_replace(' ', '-', $termname);
            echo '<button type="button" data-filter=".'.$termname.'">'.$term->name.'</button>';
          }
        }
        echo "</div>";
        ?>

        <?php 
      // the query
        $the_query = new WP_Query( array('post_type' => 'portfolio') ); ?>

        <?php if ( $the_query->have_posts() ) : ?>

        </div> <!-- row -->


             <div id="portfolio-items">



              <!-- the loop -->
              <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                <?php
                $terms = get_the_terms( $post->ID, 'portfolio_tags' );

                if ( $terms && ! is_wp_error( $terms ) ) : 
                  $links = array();

                foreach ( $terms as $term ) 
                {
                  $links[] = $term->name;
                }
                $links = str_replace(' ', '-', $links); 
                $tax = join( " ", $links );     
                else :  
                  $tax = '';  
                endif;
                ?>

                <ul class="thumbnails" id="hover-cap"> <!-- add id attr to thumbnail list -->
                  <div class="thumbnails">
                    <div class="col-sm-6 col-md-4 item <?php echo strtolower($tax); ?>">
                      <div class="portfolio-item">
                        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                          <?php the_post_thumbnail(); ?>
                        </a>
                        <div class="caption">



                          <h5><a href="<?php the_permalink(); ?>" rel="tooltip">

                          <h4><?php $terms = get_the_terms($post->ID, 'portfolio_tags'); $count = count($terms); if ( $count > 0 ){ foreach ( $terms as $term ) { echo $term->name; } } ?></h4>

                              <?php the_title(); ?>

                            </a></h5>
                          </div>
                        </div>
                      </div>
                    </div>
                  </ul>
              <?php endwhile; ?>

              <!-- end of the loop -->

            </div> <!-- #portfolio-items -->




          <?php wp_reset_postdata(); ?>

        <?php else : ?>
          <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>


      </main><!-- #main -->
    </div><!-- #primary -->

  </div><!-- .row -->
</div><!-- .container -->




<?php get_footer(); ?>