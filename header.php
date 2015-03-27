<?php
/**
 * The Header for our theme.
 *
 * @package     Compass
 * @subpackage  HybridCore
 * @copyright   Copyright (c) 2015, Flagship Software, LLC
 * @license     GPL-2.0+
 * @link        https://flagshipwp.com/
 * @since       1.0.0
 */
?>
<!DOCTYPE html>
<?php tha_html_before(); ?>
<html <?php language_attributes( 'html' ); ?>>

<head>
<?php tha_head_top(); ?>
<?php wp_head(); ?>
<?php tha_head_bottom(); ?>
</head>

<body <?php hybrid_attr( 'body' ); ?>>

	<?php tha_body_top(); ?>

	<div <?php hybrid_attr( 'site-container' ); ?>>

		<div class="skip-link">
			<a href="#content" class="button screen-reader-text">
				<?php _e( 'Skip to content (Press enter)', 'compass' ); ?>
			</a>
		</div><!-- .skip-link -->

		<?php tha_header_before(); ?>

		<header class="centered-navigation" role="banner">
			<div class="hero">
				<div class="hero-inner">
					<div class="hero-copy">
						<p><h4>- <strong>Woodd.</strong></b> Exploration d'Idées -</h4></p>	
					</div>
				</div>
			</div>

			  <div class="centered-navigation-wrapper">
			    <a href="javascript:void(0)" id="js-centered-navigation-mobile-menu" class="centered-navigation-mobile-menu">MENU</a>
			    <nav role="navigation">
			      <ul id="js-centered-navigation-menu" class="centered-navigation-menu show">
			      	<?php 
			      	$defaults = array(
							'menu'            => 'Navigation',
							'walker' => new description_walker()
							);
							wp_nav_menu( $defaults );
						 	?>
			      </ul>
			    </nav>
			  </div>
			  
			  <nav class="js-menu sliding-menu-content is-visible">
				  <ul>
				    <li><a href="//twitter.com/wooddjournal"><span class="dashicons dashicons-twitter"></span></a></li>
				    <li><a href="//www.facebook.com/wooddjournal"><span class="dashicons dashicons-facebook-alt"></span></a></li>
				    <!--<li class="button-search"><a href="javascript:void(0)"><span class="dashicons dashicons-search"></span></a></li>-->
				    <!--<li class="sidebar-search"><?php get_search_form(); ?></li>-->
				  </ul>
				</nav>


		</header><!-- #header -->

		<?php tha_header_after(); ?>

		<?php hybrid_get_menu( 'secondary' ); ?>
