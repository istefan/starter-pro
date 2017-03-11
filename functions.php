<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Starter
 */

if ( ! function_exists( 'starter_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function starter_setup() {

	// Make theme available for translation.
	load_theme_textdomain( 'starter', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );

	// Enable support for Post Thumbnails on posts and pages.
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'featured-image', 2000, 1200, true );
	add_image_size( 'portfolio-thumbnail', 1100, 770, true );
	add_image_size( 'post-thumbnail', 1100, 400, true );

	// Enable support for custom logo.
	add_theme_support( 'custom-logo', array(
		'height'      => 60,
		'width'       => 150,
		'flex-height' => true,
		'flex-width'  => true,
	) );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' 	=> esc_html__( 'Header Menu', 'starter' ),
		'footer' 	=> esc_html__( 'Footer Menu', 'starter' ),
		'mobile' 	=> esc_html__( 'Mobile Menu', 'starter' ),
	) );

	// HTML5 markup
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'starter_custom_background_args', array(
		'default-color' => 'd9dddb',
		'default-image' => '',
	) ) );

	// WooCommerce support
	add_theme_support( 'woocommerce' );

	// Styles for the visual editor to resemble the theme style.
	add_editor_style( array( 'inc/css/editor-style.css', starter_fonts_url() ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'starter_setup' );


/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function starter_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'starter_content_width', 1200 );
}
add_action( 'after_setup_theme', 'starter_content_width', 0 );


/**
 * Register widget areas.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function starter_widgets_init() {

	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'starter' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'starter' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Content Bottom', 'starter' ),
		'id'            => 'sidebar-content',
		'description'   => __( 'Appears at the bottom of the content on posts.', 'starter' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar Footer 1', 'starter' ),
		'id'            => 'footer-1',
		'description'   => __( 'Add widgets here to appear in your footer.', 'starter' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar Footer 2', 'starter' ),
		'id'            => 'footer-2',
		'description'   => __( 'Add widgets here to appear in your footer.', 'starter' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar Footer 3', 'starter' ),
		'id'            => 'footer-3',
		'description'   => __( 'Add widgets here to appear in your footer.', 'starter' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar Footer 4', 'starter' ),
		'id'            => 'footer-4',
		'description'   => __( 'Add widgets here to appear in your footer.', 'starter' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );

}
add_action( 'widgets_init', 'starter_widgets_init' );


/**
 * Enqueue scripts and styles.
 */
function starter_scripts() {

	// Add theme styles.
	wp_enqueue_style( 'starter-fonts', starter_fonts_url(), array(), null );
	wp_enqueue_style( 'starter-style', get_stylesheet_uri() );
	wp_enqueue_style( 'genericons', get_template_directory_uri() . '/inc/genericons/genericons.css', array(), '3.0.3' );

	// Add theme scripts
	wp_enqueue_script( 'starter-functions', get_template_directory_uri() . '/js/functions.js', array( 'jquery' ), '1.0.0', true );
	wp_enqueue_script( 'starter-skip-link-focus-fix', get_template_directory_uri() . '/js/skiplink.js', array(), '1.0.0', true );
	wp_enqueue_script( 'starter-localscroll', get_template_directory_uri() . '/js/localscroll.js', array( 'jquery' ), '1.2.8' );
	wp_enqueue_script( 'starter-scrollto', get_template_directory_uri() . '/js/scrollto.js', array( 'jquery' ), '1.4.5' );
	
	// Load the html5 shiv.
	wp_enqueue_script( 'starter-html5', get_template_directory_uri() . '/js/html5.js', array(), '3.7.3' );
	wp_script_add_data( 'starter-html5', 'conditional', 'lt IE 9' );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'starter_scripts' );


if ( ! function_exists( 'starter_fonts_url' ) ) :
/**
 * Register Google fonts.
 */
function starter_fonts_url() {
    $fonts_url = '';

    /* Translators: If there are characters in your language that are not
	 * supported by Lato, translate this to 'off'. Do not translate
	 * into your own language.
	 */
	$font = _x( 'on', 'Lato font: on or off', 'starter' );

	if ( 'off' !== $font ) {
		$font_families = array();
		$font_families[] = 'Lato:300,400,700,300italic,400italic,700italic';

		$query_args = array(
			'family' => urlencode( implode( '|', $font_families ) ),
			'subset' => urlencode( 'latin,latin-ext' ),
		);

		$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
	}

	return $fonts_url;

}
endif;


/**
 * Customizer Class.
 */
require get_template_directory() . '/inc/customizer-class.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Short Codes.
 */
require get_template_directory() . '/inc/short-codes.php';
