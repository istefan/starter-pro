<?php
/**
 * Template part for displaying Author biography
 *
 * @package Starter
 */
?>

<div class="author-info clear">
	<div class="author-avatar">
		<?php
		// Filter the author bio avatar size.
		$author_bio_avatar_size = apply_filters( 'starter_author_bio_avatar_size', 64 );

		echo get_avatar( get_the_author_meta( 'user_email' ), $author_bio_avatar_size );
		?>
	</div><!-- .author-avatar -->
	
	<h2 class="author-title"><span class="author-heading"><?php _e( 'Author:', 'starter' ); ?></span> <?php echo get_the_author(); ?></h2>

	<p class="author-bio">
		<?php the_author_meta( 'description' ); ?>
	</p><!-- .author-bio -->
</div><!-- .author-info -->
