<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Starter
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php
			while ( have_posts() ) : the_post();

				// Include the Post-Format-specific template for the content.
				get_template_part( 'template-parts/content', get_post_format() );

			endwhile;

				the_posts_pagination( array(
					'prev_text'          => __( 'Previous page', 'starter' ),
					'next_text'          => __( 'Next page', 'starter' ),
					'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'starter' ) . ' </span>',
				) );

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
