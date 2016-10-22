<?php get_header(); ?>


<div class="container">
  <div class="row">

    <div id="primary" class="col-md-12 col-lg-12">
      <main id="main" class="site-main portfolio" role="main">

      <div class="container">
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
        </div> <!-- container -->

        <div class="container">
<!--           <div class="row">
 -->            <div id="portfolio-items">



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

                       

                          <h4><a href="<?php the_permalink(); ?>" rel="tooltip">

                            <h3><?php $terms = get_the_terms($post->ID, 'portfolio_tags'); $count = count($terms); if ( $count > 0 ){ foreach ( $terms as $term ) { echo $term->name; } } ?></h3>

                          <?php the_title(); ?>

                          </a></h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </ul>
              <?php endwhile; ?>

              <!-- end of the loop -->

            </div> <!-- #portfolio-items -->
          </div> <!-- container -->

          <!-- </div> --> <!-- .row -->


          <?php wp_reset_postdata(); ?>

        <?php else : ?>
          <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>


      </main><!-- #main -->
    </div><!-- #primary -->

  </div><!-- .row -->
</div><!-- .container -->


<!--about-->
<!-- <section id="about">
  <div class="container">
    <div class="about">
      <div class="row">
        <div id="primary" class="col-md-12 col-lg-12">
          <h1>About</h1>
          <div>
            <p class="about_text"><span>Tine van Tasi - Werkstatt für Architektur, Objektkunst und Schmuck .......</span></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> -->

<!--contact-->
<section id="contact">
  <div class="container">
    <div class="contact">
      <div class="row">
        <div id="primary" class="col-md-12 col-lg-12">
<!--           <h1>Contact</h1>
 -->          <div>
            <?php cn_include_content(12); ?>
          </div>
          <div id="map"></div>
          <div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



<?php get_footer(); ?>