<?php 

add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );

// Register Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');

function register_theme_menus() {

  register_nav_menus(
    array(
      'primary-menu'    => __( 'Primary Menu' )
        )
    );
}

add_action( 'init', 'register_theme_menus' );


//Register Sidebars/Widget-Areas
if ( function_exists('register_sidebar') )
register_sidebar();

// include single page in any template
function cn_include_content($pid) {
  $thepageinquestion = get_post($pid);
  $content = $thepageinquestion->post_content;
  $content = apply_filters('the_content', $content);
  $content = str_replace(']]>', ']]>', $content);
  echo $content;
}


// show random post on homepage
function wpb_rand_posts() { 

$args = array(
  'post_type' => 'portfolio',
  'orderby' => 'rand',
  'posts_per_page' => 1, 
  );

$the_query = new WP_Query( $args );

if ( $the_query->have_posts() ) {

$string .= '<div class="jumbotron">';
  while ( $the_query->have_posts() ) {
    $the_query->the_post();
    $string .= '<a href="'. get_the_permalink() .'">'. get_the_post_thumbnail() .'</a>';
  }
  $string .= '</div>';
  /* Restore original Post Data */
  wp_reset_postdata();
} else {

$string .= 'no posts found';
}

return $string; 
} 

add_shortcode('wpb-random-posts','wpb_rand_posts');
add_filter('widget_text', 'do_shortcode'); 


/*
 * Enable support for Post Formats.
 * See http://codex.wordpress.org/Post_Formats
 */
add_theme_support( 'post-formats', array(
  'aside', 'image', 'video', 'quote', 'link'
) );

// remove wp admin-bar
add_action('get_header', 'remove_admin_login_header');
function remove_admin_login_header() {
  remove_action('wp_head', '_admin_bar_bump_cb');
}


function martinabischof_theme_styles() {
  wp_enqueue_style( 'animate_css', get_template_directory_uri() . '/css/animate.css' );
  wp_enqueue_style( 'jasny-bootstrap', get_template_directory_uri() . '/css/jasny-bootstrap.css' );
  wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );
  wp_enqueue_style( 'hamburgers_css', get_template_directory_uri() . '/css/hamburgers.css' );
}

add_action( 'wp_enqueue_scripts', 'martinabischof_theme_styles' );

//enqueues our external font awesome stylesheet
function enqueue_our_required_stylesheets(){
  wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'); 
}
add_action('wp_enqueue_scripts','enqueue_our_required_stylesheets');

function martinabischof_theme_js() {
  wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', array('jquery'), '', false );
  wp_enqueue_script('jasny-bootstrap', get_template_directory_uri() . '/js/jasny-bootstrap.js', array('jquery'), '', false );
  wp_enqueue_script('typed', get_template_directory_uri() . '/js/typed.js', array('jquery'), '', false );
  wp_enqueue_script('scroll', get_template_directory_uri() . '/js/scroll.js', array('jquery'), '', false );
  wp_enqueue_script('google-maps', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyCAlqSsyuD-_Ou4UqJtLLVZQ10IGvytab8&sensor=false');

  wp_enqueue_script('front', get_template_directory_uri() . '/js/front.js', array('jquery'), '', false );
  wp_enqueue_script( 'isotope-js', get_template_directory_uri() . '/js/isotope.pkgd.min.js', array('jquery'), '3.0.1', false );
  wp_enqueue_script( 'cellsbyrows-js', get_template_directory_uri() . '/js/cellsbyrows.js', array(''), '', false );
  wp_enqueue_script( 'images-loaded-js', get_template_directory_uri() . '/js/imagesloaded.pkgd.min.js', array('jquery'), '4.1.1', false );
  wp_enqueue_script( 'hambugrgers-js', get_template_directory_uri() . '/js/hamburgers.js', array(''), '', false );

   

}

  add_action( 'wp_enqueue_scripts', 'martinabischof_theme_js' );

function wpb_add_google_fonts() {

wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Lato:400,700,900" rel="stylesheet"', false ); 
}

add_action( 'wp_enqueue_scripts', 'wpb_add_google_fonts' );



  /**
   * Custom Post Types
   */
  require get_template_directory() . '/inc/post-types/CPT.php';

  //Portfolio Custom Post Type
  require get_template_directory() . '/inc/post-types/register-portfolio.php';

  // Theme options functions
  require_once( get_template_directory() . '/inc/bswp-options.php' );

?>