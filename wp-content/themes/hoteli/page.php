<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package hoteli
 */

get_header(); ?>

<?php featured_image(); ?>
	<div id="primary" class="content-area grid-mid">
		<main id="main" class="site-main col-8-12" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
		<div class="col-4-12">
			<?php get_sidebar(); ?>
		</div>
	</div><!-- #primary -->

<?php

get_footer();