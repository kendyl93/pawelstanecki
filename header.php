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

<?php if (!is_front_page() or basename(get_page_template()) != 'page-home.php') get_template_part( 'elements/content', 'banner' ); ?>