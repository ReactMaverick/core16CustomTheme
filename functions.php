<?php
/**
 * Core16 Theme functions and definitions
 *
 * @package Core16
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'CORE16_VERSION', '1.0.0' );

// Theme Setup & Menus
require_once get_template_directory() . '/inc/theme-setup.php';

// Asset Enqueueing (Styles, Scripts, Google Fonts)
require_once get_template_directory() . '/inc/enqueue-assets.php';

// Reusable Component Helpers (Buttons, Badges, Images)
require_once get_template_directory() . '/inc/helpers.php';

// Template Tags and Body Classes
require_once get_template_directory() . '/inc/template-functions.php';

// Customizer Global Design Tokens
require_once get_template_directory() . '/inc/customizer.php';

// Custom Post Types & Taxonomies (Profiles & Resources)
require_once get_template_directory() . '/inc/post-types.php';

// Advanced Custom Fields (ACF) Field Groups
require_once get_template_directory() . '/inc/acf-fields.php';

// Client Portal Authentication Handler
require_once get_template_directory() . '/inc/auth-handler.php';

// Profile Dossier Data & Archetype Dictionary
require_once get_template_directory() . '/inc/profile-data.php';

// Global Responsive Typography Settings & Backend Architecture
require_once get_template_directory() . '/inc/typography-settings.php';
