<?php
/**
 * Template Name: Full Width
 * Template Post Type: post, page
 *
 * Custom Full Width Template.
 *
 * @link https://developer.wordpress.org/themes/template-files-section/page-template-files/page-templates/
 *
 * @package Starter
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				$content_type = ( 'post' === get_post_type() ) ? 'single' : 'page';
				get_template_part( 'template-parts/content', $content_type );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();