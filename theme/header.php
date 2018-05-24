<?php
/**
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * @package Kingsley Distribtion
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-64908037-1"></script>
		<?php get_template_part('/template-parts/header/schema', get_post_format()); ?>
		<!-- meta data -->
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="theme-color" content="#11749c">
		<!-- Social Media Properties -->
		<?php get_template_part('/template-parts/header/social', get_post_format()); ?>
		<!-- Wordpress Head -->
		<?php wp_head(); ?>	
	</head>
	<body <?php body_class(); ?>>

		<!-- consent banner -->
    <?php get_template_part('/template-parts/consent/consent', get_post_format()); ?>

    <!-- scroll to top -->
    <?php get_template_part('/template-parts/navigation/nav__to-top', get_post_format()); ?>

	<!-- Header -->
  <header>

		<?php
		/* Functions
		============================================= */
		function pagesHead($page, $head, $subHead) {
			$htmlOutput = <<<HTML
			<!-- hero -->
			<div class="{$page}__hero">
				<div class="{$page}__hero--colour">
					<div class="{$page}__hero--img">
						<div class="{$page}__hero--txt">
							<h1>{$head}</h1>
							<h4>{$subHead}</h4>
						</div>
					</div>
				</div>
			</div>
HTML;
			echo $htmlOutput;
		} ?>

		<?php
		/* Statements
		============================================= */
		// INDEX PAGE
		if (!is_404() && is_front_page()) : ?>
			<!-- Navigation -->
			<?php get_template_part( '/template-parts/navigation/nav__main', get_post_format() ); ?>
			<!-- Hero -->
			<?php get_template_part( '/template-parts/header/hero__index', get_post_format() ); ?>

		<?php
		// ABOUT PAGE
		elseif (is_page('about')) : ?>
			<!-- Navigation -->
			<?php get_template_part( '/template-parts/navigation/nav__main', get_post_format() ); ?>
			<!-- Hero -->
			<?php pagesHead("about", "World Class Wargaming Distribution", "Because we believe that the customer comes first, we will do our very best to ensure customer satisfacton at all times"); ?>

		<?php
		// ABOUT PAGE
		elseif (is_page('faq')) : ?>
			<!-- Navigation -->
			<?php get_template_part( '/template-parts/navigation/nav__main', get_post_format() ); ?>
			<!-- Hero -->
			<?php pagesHead("faq", "Have a Question?", "If you're unsure on anything, please take a moment to read through our FAQ"); ?>

		<?php
		// ABOUT PAGE
		elseif (is_page('contact')) : ?>
			<!-- Navigation -->
			<?php get_template_part( '/template-parts/navigation/nav__main', get_post_format() ); ?>
			<!-- Hero -->
			<?php pagesHead("contact", "How can we help?", "Have a question or would like to open an account? Drop us a line below; we love to help"); ?>

		<?php
		// RANGES
		elseif (!is_404() && !is_front_page()) : ?>
			<!-- Navigation -->
			<?php get_template_part( '/template-parts/navigation/nav__main', get_post_format() ); ?>
			<!-- Hero -->
			<?php get_template_part( '/template-parts/header/hero__ranges', get_post_format() );

		endif; ?>

  </header>
	<!-- content -->
	<div class="content">
