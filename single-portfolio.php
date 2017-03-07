<?php
/**
 * The template for displaying Custom Post Type single posts
 *
 * @link https://codex.wordpress.org/Post_Type_Templates
 *
 * @package Starter
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php 
			// Start the Loop 
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'portfolio' );

				the_post_navigation();

			endwhile; // End of the loop. 
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer();
