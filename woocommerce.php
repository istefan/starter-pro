<?php
/**
 * The template for displaying WooCommerce pages.
 *
 * @link https://wordpress.org/plugins/woocommerce/
 *
 * @package Starter
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php woocommerce_content(); ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php 

get_footer();
