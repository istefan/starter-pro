<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site site-container">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'starter' ); ?></a>

	<div class="wrap">
		<header id="masthead" class="site-header" role="banner">
		
			<div class="site-branding">
				<?php
				if ( is_front_page() ) : ?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php else : ?>
					<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
				endif;

				$description = get_bloginfo( 'description', 'display' );
				if ( $description || is_customize_preview() ) : ?>
					<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
				<?php
				endif;

				// Site logo
				the_custom_logo();
				?>
			</div><!-- .site-branding -->

			<nav id="site-navigation" class="main-navigation" role="navigation">
				<?php

					printf( '<span class="menu-toggle"><a href="#">%1$s</a></span>',
						esc_html__( 'MENU', 'starter' )
					);	
				
					wp_nav_menu( 
						array( 
							'theme_location' 	=> 'primary',
							'container'      	=> false,
							'menu_class' 		=> 'nav-menu',
							'fallback_cb' 		=> false,
							'link_before'    	=> '<span itemprop="name">',
							'link_after'     	=> '</span>',
						)
					);
				?>
			</nav><!-- #site-navigation -->

		</header><!-- #masthead -->
	</div><!-- .wrap -->

	<div id="content" class="site-content">
