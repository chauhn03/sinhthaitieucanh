<?php
/**
 * Jetpack Compatibility File.
 *
 * @link https://jetpack.me/
 *
 * @package xuongrongkieng
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 */
function xuongrongkieng_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'xuongrongkieng_infinite_scroll_render',
		'footer'    => 'page',
	) );
} // end function xuongrongkieng_jetpack_setup
add_action( 'after_setup_theme', 'xuongrongkieng_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 */
function xuongrongkieng_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function xuongrongkieng_infinite_scroll_render
