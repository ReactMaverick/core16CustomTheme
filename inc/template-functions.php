<?php
/**
 * Additional features to allow styling of the templates
 *
 * @package Core16
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function core16_body_classes( $classes ) {
	// Add base Stitch design classes
	$classes[] = 'bg-warm-white';
	$classes[] = 'font-body';
	$classes[] = 'text-[15px]';
	$classes[] = 'leading-relaxed';
	$classes[] = 'text-midnight';
	$classes[] = 'antialiased';

	if ( is_front_page() ) {
		$classes[] = 'core16-homepage';
	}

	return $classes;
}
add_filter( 'body_class', 'core16_body_classes' );

/**
 * Custom template part wrapper for cards.
 *
 * @param string $card_type Card template part slug.
 * @param array  $data      Card data passed to the template part.
 * @return void
 */
function core16_render_card( $card_type, $data = array() ) {
	get_template_part( 'template-parts/cards/' . $card_type, null, $data );
}
