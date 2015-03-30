<?php
/**
 * A template part to display single entry navigation and pagination for archives.
 *
 * @package     w_theme
 * @subpackage  HybridCore
 * @copyright   Copyright (c) 2014, Flagship, LLC
 * @license     GPL-2.0+
 * @link        http://flagshipwp.com/
 * @since       1.0.0
 */
?>

<?php if ( is_singular( 'post' ) ) : ?>

	<nav class="nav-single">
		<?php previous_post_link( '<span class="nav-previous">' . __( '%link', 'w_theme' ) . '</span>', '&larr; Previous Post' ); ?>
		<?php next_post_link(     '<span class="nav-next">' . __( '%link', 'w_theme' ) . '</span>', 'Next Post &rarr;' ); ?>
	</nav><!-- .nav-singl -->

	<?php

endif;

if ( is_home() || is_archive() || is_search() ) :

	loop_pagination(
		array(
			'prev_text' => '<span class="screen-reader-text">' . __( 'Previous Page', 'w_theme' ) . '</span>',
			'next_text' => '<span class="screen-reader-text">' . __( 'Next Page', 'w_theme' ) . '</span>',
		)
	);

endif;
