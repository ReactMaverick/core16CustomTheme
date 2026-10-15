<?php
/**
 * Helper Functions & Reusable Component Renderers
 *
 * @package Core16
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Reusable Button Component Renderer.
 *
 * Enforces theme.md rule: "NEVER repeatedly write the same button markup and styling."
 *
 * @param array $args Button configuration arguments.
 * @return string|void HTML markup if echo is false.
 */
function core16_button( $args = array() ) {
	$defaults = array(
		'text'          => '',
		'url'           => '#',
		'variant'       => 'teal', // 'teal', 'midnight', 'outline', 'dark-outline', 'pill-midnight', 'text-link'
		'size'          => 'md',   // 'sm', 'md', 'lg'
		'icon'          => '',     // Material Symbol name, e.g. 'arrow_forward'
		'icon_position' => 'right',
		'class'         => '',
		'target'        => '_self',
		'data_path'     => '',
		'echo'          => true,
	);

	$args = wp_parse_args( $args, $defaults );

	$base_classes = 'inline-flex items-center justify-center font-body font-medium transition-all select-none';

	// Size classes
	switch ( $args['size'] ) {
		case 'sm':
			$size_classes = 'h-9 px-4 text-xs rounded';
			break;
		case 'lg':
			$size_classes = 'h-12 px-7 text-base rounded';
			break;
		case 'md':
		default:
			$size_classes = 'h-11 px-6 text-sm rounded';
			break;
	}

	// Variant classes
	switch ( $args['variant'] ) {
		case 'teal':
		case 'primary':
			$variant_classes = 'bg-core-teal text-white hover:bg-teal-hover shadow-sm gap-2';
			break;

		case 'midnight':
			$variant_classes = 'bg-midnight text-warm-white border border-slate-700 hover:bg-slate-800 gap-2';
			break;

		case 'pill-midnight':
			$size_classes    = 'h-10 px-5 text-xs tracking-wide rounded-full font-semibold';
			$variant_classes = 'bg-midnight text-warm-white border border-slate-700 hover:border-core-teal hover:shadow-[0_0_15px_rgba(14,165,171,0.35)]';
			break;

		case 'outline':
		case 'secondary':
			$variant_classes = 'bg-warm-white text-midnight border border-rule-grey hover:bg-mist';
			break;

		case 'dark-outline':
			$variant_classes = 'bg-transparent text-white border border-white/20 hover:bg-white/10';
			break;

		case 'text-link':
			$size_classes    = 'p-0 h-auto text-sm font-semibold';
			$variant_classes = 'text-core-teal hover:text-midnight gap-2';
			break;

		default:
			$variant_classes = 'bg-core-teal text-white hover:bg-teal-hover';
			break;
	}

	$classes = trim( "$base_classes $size_classes $variant_classes " . $args['class'] );

	$target_attr = ( '_blank' === $args['target'] ) ? ' target="_blank" rel="noopener noreferrer"' : '';
	$path_attr   = ! empty( $args['data_path'] ) ? ' data-path="' . esc_attr( $args['data_path'] ) . '"' : '';

	$icon_html = '';
	if ( ! empty( $args['icon'] ) ) {
		$icon_html = '<span class="material-symbols-outlined text-[18px] leading-none shrink-0">' . esc_html( $args['icon'] ) . '</span>';
	}

	$output = '<a href="' . esc_url( $args['url'] ) . '" class="' . esc_attr( $classes ) . '"' . $target_attr . $path_attr . '>';

	if ( 'left' === $args['icon_position'] && $icon_html ) {
		$output .= $icon_html . ' ';
	}

	$output .= '<span>' . esc_html( $args['text'] ) . '</span>';

	if ( 'right' === $args['icon_position'] && $icon_html ) {
		$output .= ' ' . $icon_html;
	}

	$output .= '</a>';

	if ( $args['echo'] ) {
		echo $output; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	} else {
		return $output;
	}
}

/**
 * Get Image URL helper with local theme asset check.
 *
 * @param string $filename     Image filename inside assets/images/
 * @param string $fallback_url Fallback remote CDN URL if file does not exist.
 * @return string Image URL.
 */
function core16_get_image_url( $filename, $fallback_url = '' ) {
	$local_path = get_template_directory() . '/assets/images/' . $filename;
	if ( file_exists( $local_path ) ) {
		return get_template_directory_uri() . '/assets/images/' . $filename;
	}
	return $fallback_url;
}

/**
 * Render Normative Badge Component.
 *
 * @param string $text Badge text.
 * @param array  $args Additional badge styling options.
 * @return void
 */
function core16_badge( $text, $args = array() ) {
	$defaults = array(
		'variant' => 'teal', // 'teal', 'dark', 'neutral'
		'class'   => '',
	);
	$args = wp_parse_args( $args, $defaults );

	switch ( $args['variant'] ) {
		case 'dark':
			$classes = 'bg-white/10 text-core-teal border border-white/15';
			break;
		case 'neutral':
			$classes = 'bg-warm-white border border-rule-grey text-slate-subtle';
			break;
		case 'teal':
		default:
			$classes = 'bg-mist border border-rule-grey text-core-teal';
			break;
	}

	echo '<span class="inline-flex items-center px-2.5 py-1 rounded font-mono text-[11px] font-semibold uppercase tracking-wider ' . esc_attr( $classes . ' ' . $args['class'] ) . '">' . esc_html( $text ) . '</span>';
}
