<?php
/**
 * Jetpack Compatibility File.
 *
 * @link https://jetpack.me/
 *
 * @package sinhthaitieucanh
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 */
function sinhthaitieucanh_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'sinhthaitieucanh_infinite_scroll_render',
		'footer'    => 'page',
	) );
} // end function sinhthaitieucanh_jetpack_setup
add_action( 'after_setup_theme', 'sinhthaitieucanh_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 */
function sinhthaitieucanh_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function sinhthaitieucanh_infinite_scroll_render
