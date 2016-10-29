<?php get_header(); ?>
    


    <?php 
      // the query


        $the_query = new WP_Query( array(
          'post_type' => 'portfolio',
          'posts_per_page' => '4'
            ) 
          ); ?>

        <?php if ( $the_query->have_posts() ) : ?>
          <div class="row">
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
                <div class="col-lg-6 col-md-4 item <?php echo strtolower($tax); ?>">
                <div class="frontpage-item">

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
               </ul>

              <?php endwhile; ?>
            </div>


              <!-- end of the loop -->


          <?php wp_reset_postdata(); ?>

        <?php else : ?>
          <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>


</div>


  <!-- Example row of columns -->
  <div class="row">
    <div class="col-lg-4">
      <?php cn_include_content(12); ?>
    </div>
    <div class="col-lg-4">
      
    </div>
    <div class="col-lg-4">
      
    </div>
  </div>


<?php get_footer(); ?>