<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 * @package Kingsley Distribtion
 */

get_header();

get_template_part( '/template-parts/navigation/nav__to-top', get_post_format() );

while ( have_posts() ) : the_post();
  the_content();
endwhile;

get_footer();
