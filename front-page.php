<?php
/**
 * The front-page.php template file.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Heisenberg
 */

get_header(); ?>

<div class="row"><!-- .row start -->

		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">

				<?php

				// args
				$args = array(
					'post_type' => 'product',
					'posts_per_page' => 1
				);

				// query
				$the_query = new WP_Query( $args );

				?>

				<?php if( $the_query->have_posts() ): ?>
					<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
						<div class="medium-6 small-12 columns">
							<?php the_title(); ?>
							<?php the_post_thumbnail(); ?>
							<?php the_field('short_description'); ?>
						</div>
					<?php endwhile; ?>
				<?php endif; ?>

				<?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>

			</main><!-- #main -->
		</div><!-- #primary -->

</div><!-- .row end -->

<?php get_footer(); ?>
