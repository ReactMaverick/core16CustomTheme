<?php
/**
 * Theme Setup and Support
 *
 * @package Core16
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'core16_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 */
	function core16_setup() {
		// Make theme available for translation.
		load_theme_textdomain( 'core16', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		// Let WordPress manage the document title.
		add_theme_support( 'title-tag' );

		// Enable support for Post Thumbnails on posts and pages.
		add_theme_support( 'post-thumbnails' );

		// Custom logo support.
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 80,
				'width'       => 240,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);

		// Switch default core markup for search form, comment form, and comments to output valid HTML5.
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Support responsive embedded content.
		add_theme_support( 'responsive-embeds' );

		// Register theme navigation menus.
		register_nav_menus(
			array(
				'primary'           => esc_html__( 'Primary Header Navigation', 'core16' ),
				'footer_framework'  => esc_html__( 'Footer Framework & Science', 'core16' ),
				'footer_archetypes' => esc_html__( 'Footer Archetypes', 'core16' ),
				'footer_enterprise' => esc_html__( 'Footer Enterprise Solutions', 'core16' ),
				'footer_legal'      => esc_html__( 'Footer Privacy & Legal', 'core16' ),
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'core16_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 */
function core16_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'core16_content_width', 1440 );
}
add_action( 'after_setup_theme', 'core16_content_width', 0 );
