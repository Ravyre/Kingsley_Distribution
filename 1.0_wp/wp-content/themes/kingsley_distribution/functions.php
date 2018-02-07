<?php
/**
 * Functions and Shortcodes
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 * @package Kingsley Distribtion
 */

/*--------------------------------------------------------------*\
  CSS Styles
\*--------------------------------------------------------------*/
function theme_styles() {
  wp_enqueue_style('main_css', get_stylesheet_directory_uri() . '/css/style.min.css', array(), filemtime( get_stylesheet_directory() . '/css/style.min.css' ));
  wp_enqueue_style('dashicons');
}
add_action( 'wp_enqueue_scripts', 'theme_styles');

function login_page() {
  wp_enqueue_style( 'login_css', get_stylesheet_directory_uri() . '/login/style.min.css' );
  wp_enqueue_script( 'login_jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js', array(), false, true);
  wp_enqueue_script( 'login_js', get_stylesheet_directory_uri() . '/login/scripts.min.js', array(), false, true );
}
add_action( 'login_enqueue_scripts', 'login_page' );

/*--------------------------------------------------------------*\
  JavaScript
\*--------------------------------------------------------------*/
 function theme_js() {
 	global $wp_scripts;
 	wp_enqueue_script( 'jquery_js', 'https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js', array(), false, true);
 	wp_enqueue_script('main_js', get_stylesheet_directory_uri() . '/js/scripts.min.js', array(), filemtime( get_stylesheet_directory() . '/js/scripts.min.js' ), true );
 }
 add_action( 'wp_enqueue_scripts', 'theme_js');

/*--------------------------------------------------------------*\
 	Theme Setup
\*--------------------------------------------------------------*/
function theme_setup() {
	load_theme_textdomain( 'carnevale' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
  the_post_thumbnail();

  // Switch default core markup for search form, comment form, and comments to output valid HTML5.
  add_theme_support( 'html5', array(
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
  ) );

  // Enable support for Post Formats.
  // See: https://codex.wordpress.org/Post_Formats
  add_theme_support( 'post-formats', array(
  	'aside',
  	'image',
  	'video',
  	'quote',
  	'link',
  	'gallery',
  	'audio',
  ) );

  // Add theme support for Custom Logo.
  add_theme_support( 'custom-logo', array(
  	'width'       => 250,
  	'height'      => 250,
  	'flex-width'  => true,
  ) );

  // Search Form
  add_theme_support('html5', array('search-form'));
}
 add_action( 'after_setup_theme', 'theme_setup' );

/*--------------------------------------------------------------*\
  Use Minified Styles instead
\*--------------------------------------------------------------*/
function style_or_min_style() {
  $located = locate_template( 'style.min.css' );
  if ($located != '' ) {
    echo '<link rel="stylesheet" href="'.get_template_directory_uri().'/style.min.css" />';
  } else {
    echo '<link rel="stylesheet" href="'.get_template_directory_uri().'/style.css" />';
  }
}
add_action( 'wp_head', 'style_or_min_style');

/*--------------------------------------------------------------*\
  Defer Parsing of JS
\*--------------------------------------------------------------*/
function defer_parsing_of_js ( $url ) {
  if ( FALSE === strpos( $url, '.js' ) ) return $url;
  if ( strpos( $url, 'jquery.js' ) ) return $url;
  return "$url' defer ";
}
add_filter( 'clean_url', 'defer_parsing_of_js', 11, 1 );


/*--------------------------------------------------------------*\
 SVG Images
\*--------------------------------------------------------------*/
function add_file_types_to_uploads($file_types) {
  $new_filetypes = array();
  $new_filetypes['svg'] = 'image/svg+xml';
  $file_types = array_merge($file_types, $new_filetypes );
  return $file_types;
}
add_action('upload_mimes', 'add_file_types_to_uploads');

/*--------------------------------------------------------------*\
 Admin Bar Overlap
\*--------------------------------------------------------------*/
function adminOverlap() {
  if ( is_admin_bar_showing() ) {
    ?>
    <style type="text/css">
    @media only screen and (min-width: 783px) {
      /* Admin bar is 32px in height */
      .admin-bar .nav__cont.active {
        top: -38px;
      }
    }
    @media only screen and (min-width: 601px) and (max-width: 782px) {
      /* Admin bar is 46px in height */
      .admin-bar .nav__cont.active {
        top: -24px;
      }
    }
    /* Admin bar is not fixed from 0 to 600px */
    </style>
    <?php
  }
}
add_action( 'wp_head', 'adminOverlap' );

/*--------------------------------------------------------------*\
 	Prevent Wordpress Media Library from Generating Alternative Sizes
\*--------------------------------------------------------------*/
function add_image_insert_override($sizes){
    // unset($sizes['thumbnail']); // width:150px
    unset($sizes['medium']); // width:300px
    unset($sizes['medium_large']); // width:768px
    unset($sizes['large']); // width:1024px
    return $sizes;
}
add_filter('intermediate_image_sizes_advanced', 'add_image_insert_override' );

/*--------------------------------------------------------------*\
 	Importing Media
\*--------------------------------------------------------------*/
add_filter( 'wp_http_accept_encoding', function( $type, $url, $args ) {
  return array();
}, 10, 3 );

/*--------------------------------------------------------------*\
	Stop Auto Adding P Tags
\*--------------------------------------------------------------*/
remove_filter('the_content','wpautop');
function my_custom_formatting($content) {
 	if(!is_single()) {
 		return $content;
 	} else {
 		return wpautop($content);
 	}
}
add_filter('the_content','my_custom_formatting');


/*--------------------------------------------------------------*\
	Contact Form 7
\*--------------------------------------------------------------*/

  /* Allow Authors to see Flamingo
  ================================================== */
  // https://wordpress.org/support/topic/using-the-flamingo_map_meta_cap-filter/
  // https://wordpress.org/support/topic/howto-provide-access-to-flamingo-for-non-admin-users/#post-8268712
  function fl_map_meta_cap($meta_caps) {
    $meta_caps = array(
      'flamingo_edit_contact' => 'edit_pages',
  		'flamingo_edit_contacts' => 'edit_pages',
  		'flamingo_delete_contact' => 'edit_pages',
      'flamingo_edit_inbound_message' => 'publish_posts',
      'flamingo_edit_inbound_messages' => 'publish_posts',
      'flamingo_delete_inbound_message' => 'publish_posts',
      'flamingo_delete_inbound_messages' => 'publish_posts',
      'flamingo_spam_inbound_message' => 'publish_posts',
      'flamingo_unspam_inbound_message' => 'publish_posts',
      'flamingo_edit_outbound_message' => 'publish_posts',
      'flamingo_edit_outbound_messages' => 'publish_posts',
      'flamingo_delete_outbound_message' => 'publish_posts',
    );
      return $meta_caps;
  }
  add_filter('flamingo_map_meta_cap', 'fl_map_meta_cap');

/*--------------------------------------------------------------*\
	META BOXES
\*--------------------------------------------------------------*/
// https://www.smashingmagazine.com/2011/10/create-custom-post-meta-boxes-wordpress/
  /* Remove Span
  ================================================== */

?>
