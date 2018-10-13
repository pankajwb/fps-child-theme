<?php
// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Enqueue child scripts
 */
if ( ! function_exists( 'tractor_child_enqueue_scripts' ) ) {
	function tractor_child_enqueue_scripts() {
		wp_enqueue_style( 'tractor-style', TRACTOR_THEME_URI . "/style.css" );
		wp_enqueue_style( 'tractor-child-style', get_stylesheet_directory_uri() . '/style.css', array( 'tractor-style' ), wp_get_theme()->get( 'Version' ) );
	}
}
add_action( 'wp_enqueue_scripts', 'tractor_child_enqueue_scripts' );
