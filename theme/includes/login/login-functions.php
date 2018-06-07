<?php
/**
 * Functions Login Page
 * @link https://codex.wordpress.org/Customizing_the_Login_Form
 * @package Kingsley Distribution
 */

 // https://code.tutsplus.com/tutorials/build-a-custom-wordpress-user-flow-part-1-replace-the-login-page--cms-23627
 // http://www.kvcodes.com/2015/08/wordpress-custom-login-form-without-plugin-and-wp_login_form/
 // https://ahmadawais.com/create-front-end-login-page-wordpress/
 // https://slicejack.com/building-custom-wordpress-login-page/

/*--------------------------------------------------------------*\
  Styles and Scripts
\*--------------------------------------------------------------*/
function login_page() {
  wp_enqueue_style( 'login_css', get_stylesheet_directory_uri() . '/includes/login/login-style.min.css' );
  wp_enqueue_script( 'login_jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js');
  wp_enqueue_script( 'login_js', get_stylesheet_directory_uri() . '/includes/login/login-scripts.min.js');
}
add_action( 'login_enqueue_scripts', 'login_page' );


/*--------------------------------------------------------------*\
  Footer
\*--------------------------------------------------------------*/
function login_page_footer() { ?>
  <span class="happymsg">
    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 200.7 119.1" xml:space="preserve">
    	<path d="M148.2,0.2c-2,0-4,1-5.3,2.8c-6.5,9.5-2.9,17.2,0.4,24.3c1.6,3.5,3.1,6.7,0.6,8.6c-2.8,2.1-3.3,6.1-1.2,8.9 c2.1,2.8,6.1,3.3,8.9,1.2c10.7-8.1,7.1-15.7,3.3-24c-1.9-4-3.9-8.4-1.5-11.9c2-2.9,1.2-6.8-1.7-8.8C150.7,0.6,149.5,0.2,148.2,0.2 L148.2,0.2z M26.1,14.7c-9.6,0-18.7,4.7-24.2,12.6c-2.1,3-1.4,7.1,1.6,9.2c3,2.1,7.1,1.4,9.2-1.6c5.3-7.6,15.7-9.2,23-3.9l0,0 c0.4,0.3,0.9,0.7,1.4,1.1l0.1,0.1l0.1,0.1c0.4,0.4,0.9,0.8,1.3,1.3l0.1,0.1l0,0l0,0l0.1,0.2l0,0c2.4,2.7,6.6,2.9,9.3,0.5 c2.7-2.4,2.9-6.6,0.5-9.3C43.1,18.5,34.7,14.7,26.1,14.7L26.1,14.7z M85.8,14.7c-9.6,0-18.7,4.7-24.2,12.6c-2.1,3-1.4,7.1,1.6,9.2 c3,2.1,7.1,1.4,9.2-1.6c5.3-7.6,15.7-9.2,23-3.9l0,0c0.4,0.3,0.9,0.7,1.4,1.1l0.1,0.1l0.1,0.1c0.4,0.4,0.9,0.8,1.3,1.3l0.1,0.1l0,0 l0,0l0.1,0.2l0,0c2.4,2.7,6.6,2.9,9.3,0.5c2.7-2.4,2.9-6.6,0.5-9.3C102.8,18.5,94.5,14.7,85.8,14.7L85.8,14.7z M110.5,56 c-2.9,0-5.2,2.3-5.2,5.2l0,0.4l0,32.9h0v0h0c0,6.9,2.8,13.2,7.4,17.8l0,0l0,0l0,0c4.5,4.5,10.8,7.3,17.7,7.4v0h26.9 c0.2,0,0.4,0,0.6,0c1.6-0.1,3.2-0.3,4.8-0.6c1.7-0.4,3.4-1,5-1.7c6.5-3,11.6-8.8,13.7-15.8h3.7v0c4.3,0,8.3-1.8,11.1-4.6 c2.8-2.8,4.6-6.7,4.6-11.1v0h0V71.8h0c0-4.3-1.8-8.3-4.6-11.1l0,0c-2.8-2.8-6.8-4.6-11.1-4.6h0v0L110.5,56L110.5,56z M182.6,68 c1.3,0,2.5,0.6,3.4,1.5l0,0l0,0c0.9,0.9,1.5,2.1,1.5,3.5h0V86h0c0,1.3-0.6,2.6-1.5,3.5c-0.9,0.9-2.1,1.5-3.5,1.5v0h-7.4v0 c-2.5,0-4.6,1.9-4.8,4.4c-0.5,4.9-3.6,9.2-8,11.2c-0.9,0.4-1.8,0.7-2.7,0.9c-0.8,0.2-1.7,0.3-2.5,0.3l-0.3,0H132v0 c-3.7,0-7.1-1.5-9.5-4l-0.1-0.1c-2.5-2.5-4-5.9-4-9.6h0v0h0l0-26L182.6,68L182.6,68L182.6,68z M172.8,74.6v11.5h3.9 c2.5,0,4.6-2.1,4.6-4.6v-2.4c0-2.5-2.1-4.6-4.6-4.6L172.8,74.6L172.8,74.6z M37.6,76.1c-3.6,0-6.5,2.9-6.5,6.5 c0,3.6,2.9,6.5,6.5,6.5l35.5,0c3.6,0,6.5-2.9,6.5-6.5s-2.9-6.5-6.5-6.5L37.6,76.1z"/>
    </svg>
    Any problems? Please let me know.
  </span>
<?php }
add_action('login_footer', 'login_page_footer');


?>
