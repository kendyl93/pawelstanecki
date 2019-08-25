<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package _tk
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="icon" type="image/ico" href="<?php echo get_template_directory_uri() . '/includes/images/favicon.png'; ?>" sizes="16x16">

	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body>

<nav id="nav-wrap">

	<a class="mobile-btn" href="#nav-wrap" title="Show navigation">Show navigation</a>
	<a class="mobile-btn" href="#" title="Hide navigation">Hide navigation</a>

	<ul id="nav" class="nav">
	<li class="current"><a class="smoothscroll" href="#home">Start</a></li>
	<li><a class="smoothscroll" href="#about">About me</a></li>
	<li><a  href="<?php echo get_post_type_archive_link( 'post' ); ?>">Blog</a></li>
	<li><a class="smoothscroll" href="#resume">CV</a></li>
	<li><a class="smoothscroll" href="#portfolio">Projects</a></li>
	<li><a class="smoothscroll" href="#contact">Contact</a></li>
	</ul> <!-- end #nav -->

</nav> <!-- end #nav-wrap -->