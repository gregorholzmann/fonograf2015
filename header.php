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

							<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>

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
