<?php get_header(); ?>


        <?php
        $terms = get_terms("portfolio_tags");
        $count = count($terms);
        echo '<div id="filters" class="btn-group">';
        echo '<button type="button" class="btn btn-default" data-filter="*">'. __('All', 'bootstrapwp') .'</button>';
        if ( $count > 0 )
        {   
          foreach ( $terms as $term ) {
            $termname = strtolower($term->name);
            $termname = str_replace(' ', '-', $termname);
            echo '<button type="button" class="btn btn-default" data-filter=".'.$termname.'">'.$term->name.'</button>';
          }
        }
        echo "</div>";
        ?>

        <?php 
      // the query
        $the_query = new WP_Query( array('post_type' => 'portfolio') ); ?>

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

                    <div class="col-md-6 col-md-offset-3 <?php echo strtolower($tax); ?>">
                      <div class="portfolio-item">
                        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                          <?php the_post_thumbnail(); ?>
                        </a>
                        <div class="caption">
                          <h4><a href="<?php the_permalink(); ?>" rel="tooltip"><?php the_title(); ?></a></h4>
                        </div>
                      </div>
                    </div>

              <?php endwhile; ?>

              <!-- end of the loop -->


          <?php wp_reset_postdata(); ?>

        <?php else : ?>
          <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>


<!--about-->
<section id="about">
  <div class="container">
    <div class="about">
      <div class="row">
        <div id="primary" class="col-md-12 col-lg-12">
          <h1>About</h1>
          <div>
            <p>Tine Van Tasi<br>Werkstatt für Architektur und Kunst<br>Martina Bischof<br>MSc ETH<br>Bändlistrasse 29<br>8054 Zürich<br>t +41 79 409 39 83<br>m post@martinabischof.com</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--contact-->
<section id="contact">
  <div class="container">
    <div class="contact">
      <div class="row">
        <div id="primary" class="col-md-12 col-lg-12">
          <h1>Contact</h1>
          <div id="map"></div>
          <div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<?php get_footer(); ?>