<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WCMS_Base_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text sr-only" href="#content"><?php esc_html_e( 'Skip to content', 'wcms-base' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse">
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="container">
				<a class="navbar-brand" href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
				<?php
					wp_nav_menu( array(
						'theme_location'	=> 'menu-1',
						'container'			=> 'div',
						'container_class'	=> 'collapse navbar-collapse',
						'container_id'      => 'navbarCollapse',
						'menu_class'		=> 'nav navbar-nav ml-auto',
						'fallback_cb'		=> '__return_false',
						'items_wrap'		=> '<ul id="%1$s" class="%2$s">%3$s</ul>',
						'depth'				=> 2,
						'walker'			=> new bootstrap_4_walker_nav_menu()
					) );
				?>
			</div><!-- /.container -->
		</nav>
	</header><!-- #masthead -->

	<div id="content" class="site-content container">
