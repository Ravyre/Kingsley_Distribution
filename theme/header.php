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
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="theme-color" content="#11749c">
		<!-- Social Media Properties -->
		<?php get_template_part('/template-parts/header/social', get_post_format()); ?>
		<!-- Wordpress Head -->
		<?php wp_head(); ?>
		<!-- Analytics Tracking -->
		<?php include_once('analyticstracking.php'); ?>
		<?php get_template_part('/template-parts/header/schema', get_post_format()); ?>
	</head>
	<body <?php body_class(); ?>>
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
