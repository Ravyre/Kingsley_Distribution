<?php
/**
 * Functions for Admin Dashboard
 * @link
 * @package Kingsley Distribution
 */

/*--------------------------------------------------------------*\
  Styles and Scripts
\*--------------------------------------------------------------*/
function admin_theme() {
  wp_enqueue_style( 'admin_css', get_stylesheet_directory_uri() . '/includes/admin/login-style.min.css' );
  wp_enqueue_script( 'admin_js', get_stylesheet_directory_uri() . '/includes/admin/login-scripts.min.js');
}
add_action( 'admin_enqueue_scripts', 'admin_theme' );

/*--------------------------------------------------------------*\
  Functions
\*--------------------------------------------------------------*/

/* Change Footer Message
================================================== */
function change_admin_footer() {
  echo '<span id="footer-note">Don\'t panic if you\'re lost and need help, <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" target="_blank">help is here!</a></span>';
}
add_filter('admin_footer_text', 'change_admin_footer');





?>
