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
		<?php get_template_part('/template-parts/header/open-graph', get_post_format()); ?>
		<!-- Wordpress Head -->
		<?php wp_head(); ?>
		<!-- Analytics Tracking -->
		<?php include_once('analyticstracking.php'); ?>
	</head>
	<body <?php body_class(); ?>>
	<!-- Header -->
  <header>
    <!-- Navigation -->
    <?php get_template_part( '/template-parts/navigation/nav__main', get_post_format() ); ?>
		<!-- Hero -->
    <?php get_template_part( '/template-parts/header/hero', get_post_format() ); ?>
  </header>
	<!-- content -->
	<div class="content">
