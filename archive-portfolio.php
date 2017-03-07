<?php
/**
 * Custom Post Type Archive Template.
 *
 * This is the template that displays the Archive page for Portfolio Custom Post Type.
 *
 * @link https://codex.wordpress.org/Post_Type_Templates
 *
 * @package Starter
 */

/**
 * Filter the except length.
 */
function starter_portfolio_excerpt_length( $length ) {
    return 15;
}
add_filter( 'excerpt_length', 'starter_portfolio_excerpt_length', 999 );

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php $post_counter = 0; if ( have_posts() ) : ?>

			<header class="page-header">
				<?php 

					if ( get_theme_mod( 'starter_portfolio_title' ) ) {
						printf( '<h1 class="page-title">%s</h1>', get_theme_mod( 'starter_portfolio_title' ) );
					}

					if ( get_theme_mod( 'starter_portfolio_text' ) ) {
						$description = wpautop( apply_filters( 'widget_text', get_theme_mod( 'starter_portfolio_text' ) ) );
						printf( '<div class="portfolio-description">%s</div>', $description );
					}

				?>
			</header><!-- .page-header -->

			<?php // Start the Loop
			while ( have_posts() ) : the_post();

			    switch ( get_theme_mod( 'starter_portfolio_cols', '2' ) ) {
			        case '1':
			            $portfolio_class = '';
			            break;
			        case '2':
			            $portfolio_class = 'one-half';
			            break;
			        case '3':
			            $portfolio_class = 'one-third';
			            break;
			        case '4':
			            $portfolio_class = 'one-fourth';
			            break;
			    }

			    $post_counter++;
			    $post_counter = ( $post_counter > get_theme_mod( 'starter_portfolio_cols', '2' ) ) ? 1 : $post_counter;

			    // Set 'first' class if needed
			    $first = ( $post_counter == 1 ) ? 'first' : '';

			    printf( '<article class="portfolio-post post-%s %s %s">', get_the_ID(), $portfolio_class, $first );

	            printf( '<a href="%s">', get_permalink() );
	            the_post_thumbnail( 'portfolio-thumbnail', array( 'class' => 'portfolio-thumbnail' ) );
	            echo'</a>';

	            if ( ( get_theme_mod( 'starter_portfolio_show_title', '1' ) ) )
					the_title( 	sprintf( '<h2 class="entry-title" itemprop="headline"><a href="%s" rel="bookmark">', 
									esc_url( get_permalink() ) ), 
								'</a></h2>' 
					);

				if ( ( get_theme_mod( 'starter_portfolio_excerpt' ) ) )
					the_excerpt();

				echo '</article>';

			endwhile; // End of the loop.

				// Previous / next page navigation.
				the_posts_pagination( array(
					'prev_text'          => __( 'Previous page', 'starter' ),
					'next_text'          => __( 'Next page', 'starter' ),
					'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'starter' ) . ' </span>',
				) );

			else :

				get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
