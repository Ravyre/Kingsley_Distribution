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
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<?php wp_head(); ?>
		<!-- Analytics Tracking -->
		<?php include_once('analyticstracking.php'); ?>
	</head>
	<body <?php body_class(); ?>>
	<!-- Header -->
  <header>
    <!-- Navigation -->
    <?php get_template_part( '/template-parts/navigation/nav__main', get_post_format() );

		if ( is_front_page() ) { ?>
			<!-- Hero -->
			<div class="home__hero">
				<div class="home__hero--cont">
					<h1 class="home__hero--head">Reliable and efficient distribution <br>
					<div>For wargaming retailers</div></h1>
					<hr>
					<h2 class="home__hero--sub">We are the UK's number one distributor for the tabletop industry</h2>
					<a class="btn__blu" href="#account">Open an account</a><a class="btn__wht" href="#about">Find out More</a>
				</div>
			</div> <?php
		} else { ?>
			<!-- Hero -->
			<?php $title = get_the_title(); ?>
			<div class="<?php echo strtolower( $title ); ?>__hero--colour">
				<div class="<?php echo strtolower( $title ); ?>__hero--img">
					<img class="<?php echo strtolower( $title ); ?>__hero--logo" src="/wp-content/uploads/ranges/<?php echo strtolower( $title ); ?>/<?php echo strtolower( $title ); ?>_logo_01.png" alt="kingsley distribution ranges <?php echo strtolower( $title ); ?> logo">
				</div>
			</div>
		<?php } ?>
  </header>

	<!-- content -->
	<div class="content">
