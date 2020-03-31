<?php
/**
 * Widget helper.
 *
 * @package X_Corporate
 */

// Load widget helper class.
require_once trailingslashit( get_template_directory() ) . 'vendors/widget-helper/class-widget-helper.php';

/**
 * Enqueue widget scripts and styles.
 *
 * @param string $hook Hook name.
 */
function x_corporate_widget_scripts( $hook ) {

	$min = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';

	if ( 'widgets.php' === $hook ) {

		// Color.
		wp_enqueue_style( 'wp-color-picker' );
		wp_enqueue_script( 'wp-color-picker' );
		wp_enqueue_script( 'underscore' );

		// Media.
		wp_enqueue_media();

		// Custom.
		wp_enqueue_style( 'x-corporate-widget-helper', get_template_directory_uri() . '/vendors/widget-helper/css/widget-helper' . $min . '.css', array(), '2.0.2' );
		wp_enqueue_script( 'x-corporate-widget-helper', get_template_directory_uri() . '/vendors/widget-helper/js/widget-helper' . $min . '.js', array( 'jquery' ), '2.0.2', true );
	}

}

add_action( 'admin_enqueue_scripts', 'x_corporate_widget_scripts' );