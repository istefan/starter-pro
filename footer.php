	</div><!-- #content -->

	<?php starter_footer_widgets( get_theme_mod( 'starter_footer_widgets', 3 ) ); ?>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info wrap">

			<nav id="footer-navigation" class="main-navigation" role="navigation">
				<?php
				wp_nav_menu( 
					array( 
						'theme_location' 	=> 'footer',
						'container'      	=> false,
						'menu_class' 		=> 'nav-menu',
						'fallback_cb' 		=> false,
						'link_before'    	=> '<span itemprop="name">',
						'link_after'     	=> '</span>',
						'depth'          	=> 1,
					)
				); 
				?>
			</nav><!-- #footer-navigation -->

			<?php starter_footer_credits(); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<nav id="mobile-navigation" class="mobile-navigation" role="navigation">
	<span class="mobile-menu-close genericon genericon-close"></span>
	<?php
	wp_nav_menu( 
		array(
			'theme_location' 	=> 'mobile', 
			'container'      	=> false,
			'menu_class' 	 	=> 'mobile-nav',
			'link_before'    	=> '<span itemprop="name">',
			'link_after'     	=> '</span>',
			'depth' 		 	=> 1,
		)
	);
	?>
</nav><!-- #mobile-navigation -->
<span class="mobile-menu-overlay"></span>

<?php wp_footer(); ?>

</body>
</html>