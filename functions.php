<?php 

add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );


function register_theme_menus() {

  register_nav_menus(
    array(
      'primary-menu'    => __( 'Primary Menu' )
        )
    );
}

add_action( 'init', 'register_theme_menus' );


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
  // wp_enqueue_style( 'normalize_css', get_template_directory_uri() . '/css/normalize.css' );
  // wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
  wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style2.css' );
  wp_enqueue_style( 'pushy_css', get_template_directory_uri() . '/css/pushy.css' );
  wp_enqueue_style( 'hamburgers_css', get_template_directory_uri() . '/css/hamburgers.css' );
}

add_action( 'wp_enqueue_scripts', 'martinabischof_theme_styles' );

//enqueues our external font awesome stylesheet
function enqueue_our_required_stylesheets(){
  wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'); 
}
add_action('wp_enqueue_scripts','enqueue_our_required_stylesheets');

function martinabischof_theme_js() {
  wp_enqueue_script('pushy', get_template_directory_uri() . '/js/pushy.js', array('jquery'), '', false );
  // wp_enqueue_script('respond', get_template_directory_uri() . '/js/respond.min.js', array('jquery'), '', false );
  wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', array('jquery'), '', false );
  wp_enqueue_script('typed', get_template_directory_uri() . '/js/typed.js', array('jquery'), '', false );
  wp_enqueue_script('scroll', get_template_directory_uri() . '/js/scroll.js', array('jquery'), '', false );
  wp_enqueue_script('google-maps', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyCAlqSsyuD-_Ou4UqJtLLVZQ10IGvytab8&sensor=false');

  wp_enqueue_script('front', get_template_directory_uri() . '/js/front.js', array('jquery'), '', false );
  wp_enqueue_script( 'isotope-js', get_template_directory_uri() . '/js/isotope.pkgd.min.js', array('jquery'), '3.0.1', false );
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