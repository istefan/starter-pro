<?php
/**
 * Customizer Controls - Theme Options.
 *
 * @package Starter
 */

// User access level
$capability = 'edit_theme_options';

/**
 * Here we will set the options we are going to have in the customizer.
 */
$options = array(); // If you delete this line, the sky will fall down! So you better don't.

/* ---------------------------------------------------------------------------------------------------
    Panels
--------------------------------------------------------------------------------------------------- */

// Theme Options
$options[] = array( 'title'             => __( 'Theme Options', 'starter' ),
                    'description'       => '',
                    'id'                => 'starter_theme_options',
                    'priority'          => 28,
                    'theme_supports'    => '',
                    'type'              => 'panel' );


/* ---------------------------------------------------------------------------------------------------
    Front Page
--------------------------------------------------------------------------------------------------- */

// Front Page - Section
$options[] = array( 'title'             => __( 'Front Page', 'starter' ),
                    'description'       => __( 'Each section will be populated with the content of the selected page.', 'starter' ),
                    'panel'             => 'starter_theme_options',
                    'id'                => 'starter_fp_options',
                    'priority'          => 10,
                    'theme_supports'    => '',
                    'type'              => 'section' );

// Front Page Section Pages
for ( $i = 1; $i < 11; $i++ ) { 

    $options[] = array( 'title'             => __( 'Front Page Section', 'starter' ) . ' ' . $i,
                        'description'       => '',
                        'section'           => 'starter_fp_options',
                        'id'                => 'starter_fp_section_' . $i,
                        'default'           => 0,
                        'option'            => 'pages',
                        'sanitize_callback' => '',
                        'type'              => 'control' );

}

/* ---------------------------------------------------------------------------------------------------
    Site Footer
--------------------------------------------------------------------------------------------------- */

// Site Footer - Section
$options[] = array( 'title'             => __( 'Site Footer', 'starter' ),
                    'description'       => '',
                    'panel'             => 'starter_theme_options',
                    'id'                => 'starter_footer_options',
                    'priority'          => 10,
                    'theme_supports'    => '',
                    'type'              => 'section' );

// Footer Widgets
$options[] = array( 'title'             => __( 'Footer Widgets', 'starter' ),
                    'description'       => __( 'The number of widgets in the footer.', 'starter' ),
                    'section'           => 'starter_footer_options',
                    'id'                => 'starter_footer_widgets',
                    'default'           => '3',
                    'option'            => 'select',
                    'sanitize_callback' => '',
                    'choices'           => array(
                        '0' => __( 'No footer widgets', 'starter' ),
                        '1' => __( '1 Footer Widget', 'starter' ),
                        '2' => __( '2 Footer Widgets', 'starter' ),
                        '3' => __( '3 Footer Widgets', 'starter' ),
                        '4' => __( '4 Footer Widgets', 'starter' ),
                    ),
                    'type'              => 'control' );

// Footer Credits
$options[] = array( 'title'             => __( 'Footer Credits', 'starter' ),
                    'description'       => __( 'This will replace the default footer credits', 'starter' ),
                    'section'           => 'starter_footer_options',
                    'id'                => 'starter_footer_credits',
                    'default'           => '',
                    'option'            => 'textarea',
                    'sanitize_callback' => 'esc_textarea',
                    'type'              => 'control' );

/* ---------------------------------------------------------------------------------------------------
    Portfolio
--------------------------------------------------------------------------------------------------- */

// Site Footer - Section
$options[] = array( 'title'             => __( 'Portfolio', 'starter' ),
                    'description'       => '',
                    'panel'             => 'starter_theme_options',
                    'id'                => 'starter_portfolio_options',
                    'priority'          => 10,
                    'theme_supports'    => '',
                    'type'              => 'section' );

// Portfolio Page Title
$options[] = array( 'title'             => __( 'Portfolio Page Title', 'starter' ),
                    'description'       => '',
                    'section'           => 'starter_portfolio_options',
                    'id'                => 'starter_portfolio_title',
                    'default'           => '',
                    'option'            => 'text',
                    'sanitize_callback' => 'sanitize_text_field',
                    'type'              => 'control' );

// Portfolio Page Description
$options[] = array( 'title'             => __( 'Portfolio Page Description', 'starter' ),
                    'description'       => '',
                    'section'           => 'starter_portfolio_options',
                    'id'                => 'starter_portfolio_text',
                    'default'           => '',
                    'option'            => 'textarea',
                    'sanitize_callback' => '',
                    'type'              => 'control' );

// Portfolio Post Columns
$options[] = array( 'title'             => __( 'Portfolio Post Columns', 'starter' ),
                    'description'       => '',
                    'section'           => 'starter_portfolio_options',
                    'id'                => 'starter_portfolio_cols',
                    'default'           => 2,
                    'option'            => 'select',
                    'sanitize_callback' => '',
                    'choices'           => array(
                        '1' => __( '1 Column', 'starter' ),
                        '2' => __( '2 Columns', 'starter' ),
                        '3' => __( '3 Columns', 'starter' ),
                        '4' => __( '4 Columns', 'starter' ),
                    ),
                    'type'              => 'control' );

// Portfolio Posts / Page
$options[] = array( 'title'             => __( 'Portfolio Posts / Page', 'starter' ),
                    'description'       => '',
                    'section'           => 'starter_portfolio_options',
                    'id'                => 'starter_portfolio_posts',
                    'default'           => 12,
                    'option'            => 'number',
                    'sanitize_callback' => '',
                    'input_attrs'       => array(
                        'min'   => 0,
                        'max'   => 100,
                        'step'  => 1,
                    ),
                    'type'              => 'control' );

// Display title on Portfolio archive page.
$options[] = array( 'title'             => __( 'Display title on Portfolio archive page.', 'starter' ),
                    'description'       => '',
                    'section'           => 'starter_portfolio_options',
                    'id'                => 'starter_portfolio_show_title',
                    'default'           => '1',
                    'option'            => 'checkbox',
                    'sanitize_callback' => '',
                    'type'              => 'control' );

// Display excerpt on Portfolio archive page.
$options[] = array( 'title'             => __( 'Display excerpt on Portfolio archive page.', 'starter' ),
                    'description'       => '',
                    'section'           => 'starter_portfolio_options',
                    'id'                => 'starter_portfolio_excerpt',
                    'default'           => '',
                    'option'            => 'checkbox',
                    'sanitize_callback' => '',
                    'type'              => 'control' );

// Slug
$options[] = array( 'title'             => __( 'Portfolio Slug', 'starter' ),
                    'description'       => __( 'This is helpful for search engines. Example: use books if you showcase your books. Note: If you change the slug, you need to go to Settings > Permalinks and save the changes again.', 'starter' ),
                    'section'           => 'starter_portfolio_options',
                    'id'                => 'starter_portfolio_slug',
                    'default'           => 'portfolio',
                    'option'            => 'text',
                    'sanitize_callback' => 'sanitize_text_field',
                    'type'              => 'control' );

/* ---------------------------------------------------------------------------------------------------
    Custom Scripts
--------------------------------------------------------------------------------------------------- */

// Custom Scripts - Section
$options[] = array( 'title'             => __( 'Custom Scripts', 'starter' ),
                    'description'       => '',
                    'panel'             => 'starter_theme_options',
                    'id'                => 'starter_scripts_options',
                    'priority'          => 10,
                    'theme_supports'    => '',
                    'type'              => 'section' );

// Header Scripts
$options[] = array( 'title'             => __( 'Header Scripts', 'starter' ),
                    'description'       => __( 'This code will output immediately before the closing </head> tag in the document source.', 'starter' ),
                    'section'           => 'starter_scripts_options',
                    'id'                => 'starter_header_scripts',
                    'default'           => '',
                    'option'            => 'textarea',
                    'sanitize_callback' => '',
                    'type'              => 'control' );

// Footer Scripts
$options[] = array( 'title'             => __( 'Footer Scripts', 'starter' ),
                    'description'       => __( 'This code will output immediately before the closing </body> tag in the document source.', 'starter' ),
                    'section'           => 'starter_scripts_options',
                    'id'                => 'starter_footer_scripts',
                    'default'           => '',
                    'option'            => 'textarea',
                    'sanitize_callback' => '',
                    'type'              => 'control' );
