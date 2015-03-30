<?php
/**
 * Register and Display Widget Areas.
 *
 * @package     w_theme
 * @subpackage  HybridCore
 * @copyright   Copyright (c) 2014, Flagship, LLC
 * @license     GPL-2.0+
 * @link        http://flagshipwp.com/
 * @since       1.0.0
 */

add_action( 'widgets_init', 'w_theme_register_sidebars', 5 );
/**
 * Registers sidebars.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function w_theme_register_sidebars() {
	hybrid_register_sidebar(
		array(
			'id'          => 'primary',
			'name'        => _x( 'Primary Sidebar', 'sidebar', 'w_theme' ),
			'description' => __( 'The main sidebar. It is displayed on either the left or right side of the page based on the chosen layout.', 'w_theme' ),
		)
	);
	hybrid_register_sidebar(
		array(
			'id'            => 'header-right',
			'name'          => _x( 'Header Right', 'sidebar', 'w_theme' ),
			'description'   => __( 'The header right sidebar area. It is displayed to the right of the site title area.', 'w_theme' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<span class="widget-title">',
			'after_title'   => '</span>',
		)
	);
}
