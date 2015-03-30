<?php
/**
 * Theme Setup Functions and Definitions.
 *
 * @package     w_theme
 * @subpackage  HybridCore
 * @copyright   Copyright (c) 2014, Flagship, LLC
 * @license     GPL-2.0+
 * @link        http://flagshipwp.com/
 * @since       1.0.0
 */

// Include Hybrid Core.
require_once( trailingslashit( get_template_directory() ) . 'hybrid-core/hybrid.php' );
new Hybrid();

add_action( 'after_setup_theme', 'w_theme_setup', 10 );
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 *
 * @since   1.0.0
 * @return  void
 */
function w_theme_setup() {
	// Add Support for Theme layouts.
	add_theme_support(
		'theme-layouts',
		array(
			'1c'        => __( '1 Column Wide',                'w_theme' ),
			'1c-narrow' => __( '1 Column Narrow',              'w_theme' ),
			'2c-l'      => __( '2 Columns: Content / Sidebar', 'w_theme' ),
			'2c-r'      => __( '2 Columns: Sidebar / Content', 'w_theme' )
		),
		array( 'default' => is_rtl() ? '2c-r' :'2c-l' )
	);

	// Handle content width for embeds and images.
	hybrid_set_content_width( 1140 );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Load theme styles.
	add_theme_support( 'hybrid-core-styles', array( 'google-fonts', 'parent', 'style', )	);

	// Add navigation menus.
	register_nav_menu( 'after-header', _x( 'After Header Menu', 'nav menu location', 'w_theme' ) );

	$formats = array(
		'aside',
		'gallery',
		'link',
		'image',
		'quote',
		'status',
		'video',
		'audio',
		'chat',
	);

	// Add support for Post Formats.
	add_theme_support( 'post-formats', $formats );

	// Add support for Post Thumbnails on posts and pages.
	add_theme_support( 'post-thumbnails' );

	// Add support for easer image usage.
	add_theme_support( 'get-the-image' );

	// Add a nicer [gallery] shortcode implementation.
	add_theme_support( 'cleaner-gallery' );

	// Add better captions for themes to style.
	add_theme_support( 'cleaner-caption' );

	// Add support for loop pagination.
	add_theme_support( 'loop-pagination' );

	// Add support for flagship footer widgets.
	add_theme_support( 'flagship-footer-widgets', 3 );
}

add_action( 'after_setup_theme', 'w_theme_includes', 10 );
/**
 * Load all required theme files.
 *
 * @since   1.0.0
 * @return  void
 */
function w_theme_includes() {
	// Set the includes directories.
	$includes_dir = get_template_directory() . '/includes';

	// Load the main file in the Flagship library directory.
	require_once $includes_dir . '/vendor/flagship-library/flagship-library.php';
	new Flagship_Library;

	// Load all PHP files in the vendor directory.
	require_once $includes_dir . '/vendor/tha-theme-hooks.php';

	// Load all PHP files in the includes directory.
	require_once $includes_dir . '/compatibility.php';
	require_once $includes_dir . '/general.php';
	require_once $includes_dir . '/scripts.php';
	require_once $includes_dir . '/widgetize.php';
}

// Add a hook for child themes to execute code.
do_action( 'flagship_after_setup_parent' );
