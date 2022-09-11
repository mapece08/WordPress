<?php
/**
 * portfolio astra Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package portfolio astra
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define( 'CHILD_THEME_PORTFOLIO_ASTRA_VERSION', '1.0.0' );

/**
 * Enqueue styles
 */
function child_enqueue_styles() {

	wp_enqueue_style( 'portfolio-astra-theme-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), CHILD_THEME_PORTFOLIO_ASTRA_VERSION, 'all' );

}

add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 15 );

add_filter( 'astra_single_post_navigation_enabled', '__return_false' );