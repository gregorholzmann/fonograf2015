<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Heisenberg
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href='https://fonts.googleapis.com/css?family=Roboto+Mono:300,700,100,300italic,400' rel='stylesheet' type='text/css'>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


<div class="off-canvas-wrap" data-offcanvas>
	<div class="inner-wrap">

		<nav class="tab-bar show-for-small-only">
			<section class="left-small">
				<a class="left-off-canvas-toggle menu-icon" ><span></span></a>
			</section>
		</nav>

		<!-- Off Canvas Menu -->
		<aside class="left-off-canvas-menu">
		<!-- whatever you want goes here -->
			<ul>
				<li><a href="<?php bloginfo('url'); ?>">Home</a></li>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => '', 'menu_class' => '', 'menu_id' => '', 'items_wrap' => '%3$s' ) ); ?>
			</ul>
		</aside>


<div id="page" class="hfeed site">

	<header id="masthead" class="site-header medium-3 small-12 columns" role="banner">

		<div class="row"><!-- .row start -->

				<div class="site-branding">

					<div class="row"><!-- .row start -->

							<a class="fono-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_template_directory_uri(); ?>/img/fonograf_logo.png" /></a>

					</div><!-- .row end -->

				</div><!-- .site-branding -->

		</div><!-- .row end -->

	<div class="main-navigation">

		<div class="row"><!-- .row start -->

				<nav id="site-navigation" class="top-bar hide-for-small" data-topbar role="navigation">
					<section class="top-bar-section">
						<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
					</section>
				</nav><!-- #site-navigation -->

		</div><!-- .row end -->

	</div><!-- .main-navigation -->

</header><!-- #masthead -->


	<div id="content" class="site-content medium-9 small-12 columns">
