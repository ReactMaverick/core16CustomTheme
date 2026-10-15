<?php
/**
 * Enqueue scripts and styles
 *
 * @package Core16
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Add preconnect resource hints for Google Fonts.
 *
 * @param array  $urls          URLs to print for resource hints.
 * @param string $relation_type The relation type the URLs are printed for.
 * @return array
 */
function core16_resource_hints( $urls, $relation_type ) {
	if ( 'preconnect' === $relation_type ) {
		$urls[] = array(
			'href' => 'https://fonts.googleapis.com',
		);
		$urls[] = array(
			'href'        => 'https://fonts.gstatic.com',
			'crossorigin' => 'anonymous',
		);
	}
	return $urls;
}
add_filter( 'wp_resource_hints', 'core16_resource_hints', 10, 2 );

/**
 * Enqueue theme scripts and styles.
 */
function core16_scripts() {
	// Google Fonts: Poppins, Inter, JetBrains Mono & Material Symbols
	$fonts_url = 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=JetBrains+Mono:wght@400;500;600&family=Poppins:wght@500;600;700;800&family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap';
	wp_enqueue_style( 'core16-google-fonts', $fonts_url, array(), null );

	// Compiled Tailwind CSS
	$css_file = get_template_directory() . '/assets/css/style.css';
	$css_uri  = get_template_directory_uri() . '/assets/css/style.css';
	$version  = file_exists( $css_file ) ? filemtime( $css_file ) : '1.0.0';

	wp_enqueue_style( 'core16-style', $css_uri, array( 'core16-google-fonts' ), $version );

	// Theme JavaScript
	$js_file = get_template_directory() . '/assets/js/main.js';
	$js_uri  = get_template_directory_uri() . '/assets/js/main.js';
	$js_ver  = file_exists( $js_file ) ? filemtime( $js_file ) : '1.0.0';

	wp_enqueue_script( 'core16-main', $js_uri, array(), $js_ver, true );

	// Inject dynamic customizer CSS variables
	if ( function_exists( 'core16_get_customizer_css' ) ) {
		$custom_css = core16_get_customizer_css();
		if ( ! empty( $custom_css ) ) {
			wp_add_inline_style( 'core16-style', $custom_css );
		}
	}

	// Inject global responsive typography architecture
	if ( function_exists( 'core16_generate_typography_css' ) ) {
		$typography_css = core16_generate_typography_css();
		if ( ! empty( $typography_css ) ) {
			wp_add_inline_style( 'core16-style', $typography_css );
		}
	}
}
add_action( 'wp_enqueue_scripts', 'core16_scripts' );
