<?php
/**
 * Template Name: Ranges
 *
 * Functions and Shortcodes
 * @link https://developer.wordpress.org/themes/template-files-section/page-template-files/
 * @package Kingsley Distribtion
 */

get_header();

while ( have_posts() ) : the_post();
  the_content();
endwhile;

get_footer();
