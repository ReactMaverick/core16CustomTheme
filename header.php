<?php
/**
 * The header for our theme
 *
 * @package Core16
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="scroll-smooth">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<a class="skip-link screen-reader-text sr-only focus:not-sr-only focus:absolute focus:top-4 focus:left-4 focus:z-50 focus:p-4 focus:bg-white focus:text-midnight focus:border focus:border-core-teal" href="#primary">
	<?php esc_html_e( 'Skip to content', 'core16' ); ?>
</a>

<?php get_template_part( 'template-parts/header/site-header' ); ?>

<main id="primary" class="w-full pt-20 bg-warm-white min-h-[calc(100vh-80px)]">
