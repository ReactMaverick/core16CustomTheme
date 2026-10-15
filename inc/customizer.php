<?php
/**
 * Core16 Theme Customizer — Global Design Tokens & Settings
 *
 * @package Core16
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Register customizer panels, sections, and controls.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function core16_customize_register( $wp_customize ) {
	// Panel: Core16 Design System
	$wp_customize->add_panel(
		'core16_design_panel',
		array(
			'title'       => esc_html__( 'Core16 Design Tokens', 'core16' ),
			'description' => esc_html__( 'Manage global colors, typography, and layout settings derived from Stitch.', 'core16' ),
			'priority'    => 25,
		)
	);

	// Section 1: Global Brand Colors
	$wp_customize->add_section(
		'core16_colors_section',
		array(
			'title'    => esc_html__( 'Brand & Diagnostic Colors', 'core16' ),
			'panel'    => 'core16_design_panel',
			'priority' => 10,
		)
	);

	$colors = array(
		'core16_color_primary'     => array(
			'label'   => esc_html__( 'Primary Focus (Core Teal)', 'core16' ),
			'default' => '#0EA5AB',
		),
		'core16_color_teal_hover'  => array(
			'label'   => esc_html__( 'Primary Hover (Teal Hover)', 'core16' ),
			'default' => '#0b888d',
		),
		'core16_color_secondary'   => array(
			'label'   => esc_html__( 'Secondary Base (Deep Navy)', 'core16' ),
			'default' => '#17365D',
		),
		'core16_color_midnight'    => array(
			'label'   => esc_html__( 'Ink / Dark Anchor (Midnight)', 'core16' ),
			'default' => '#0D182A',
		),
		'core16_color_background'  => array(
			'label'   => esc_html__( 'Canvas Base (Warm White)', 'core16' ),
			'default' => '#FAFAF7',
		),
		'core16_color_mist'        => array(
			'label'   => esc_html__( 'Secondary Surface (Mist)', 'core16' ),
			'default' => '#F1F5F6',
		),
		'core16_color_rule_grey'   => array(
			'label'   => esc_html__( 'Divider / Rule (Rule Grey)', 'core16' ),
			'default' => '#D7DEE3',
		),
		'core16_color_muted_text'  => array(
			'label'   => esc_html__( 'Analytical / Sub-text (Slate Subtle)', 'core16' ),
			'default' => '#66717D',
		),
	);

	foreach ( $colors as $id => $color_info ) {
		$wp_customize->add_setting(
			$id,
			array(
				'default'           => $color_info['default'],
				'sanitize_callback' => 'sanitize_hex_color',
				'transport'         => 'refresh',
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				$id,
				array(
					'label'   => $color_info['label'],
					'section' => 'core16_colors_section',
				)
			)
		);
	}

	// Section 2: Global Typography
	$wp_customize->add_section(
		'core16_typography_section',
		array(
			'title'    => esc_html__( 'Global Typography Tokens', 'core16' ),
			'panel'    => 'core16_design_panel',
			'priority' => 20,
		)
	);

	// Headline Font
	$wp_customize->add_setting(
		'core16_font_headline',
		array(
			'default'           => 'Poppins',
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => 'refresh',
		)
	);
	$wp_customize->add_control(
		'core16_font_headline',
		array(
			'label'       => esc_html__( 'Headline Font Family', 'core16' ),
			'description' => esc_html__( 'Default: Poppins (Google Fonts)', 'core16' ),
			'section'     => 'core16_typography_section',
			'type'        => 'text',
		)
	);

	// Body Font
	$wp_customize->add_setting(
		'core16_font_body',
		array(
			'default'           => 'Inter',
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => 'refresh',
		)
	);
	$wp_customize->add_control(
		'core16_font_body',
		array(
			'label'       => esc_html__( 'Body Font Family', 'core16' ),
			'description' => esc_html__( 'Default: Inter (Google Fonts)', 'core16' ),
			'section'     => 'core16_typography_section',
			'type'        => 'text',
		)
	);

	// Mono Font
	$wp_customize->add_setting(
		'core16_font_mono',
		array(
			'default'           => 'JetBrains Mono',
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => 'refresh',
		)
	);
	$wp_customize->add_control(
		'core16_font_mono',
		array(
			'label'       => esc_html__( 'Monospace / Diagnostic Font Family', 'core16' ),
			'description' => esc_html__( 'Default: JetBrains Mono (Google Fonts)', 'core16' ),
			'section'     => 'core16_typography_section',
			'type'        => 'text',
		)
	);

	// Section 2B: Responsive Typography Sizes
	$wp_customize->add_section(
		'core16_responsive_typography_section',
		array(
			'title'       => esc_html__( 'Responsive Typography Sizes', 'core16' ),
			'description' => sprintf(
				/* translators: %s: Admin URL */
				esc_html__( 'Configure all global font sizes, fluid auto-scaling, and device breakpoints in the dedicated backend control panel: %s', 'core16' ),
				'<br><br><a href="' . esc_url( admin_url( 'admin.php?page=core16-typography-global' ) ) . '" class="button button-primary" target="_blank" style="margin-top: 8px;">' . esc_html__( 'Open Global Typography Studio', 'core16' ) . ' &rarr;</a>'
			),
			'panel'       => 'core16_design_panel',
			'priority'    => 25,
		)
	);

	// Section 3: Layout & Spacing
	$wp_customize->add_section(
		'core16_layout_section',
		array(
			'title'    => esc_html__( 'Layout & Geometry', 'core16' ),
			'panel'    => 'core16_design_panel',
			'priority' => 30,
		)
	);

	// Container Max Width
	$wp_customize->add_setting(
		'core16_container_max_width',
		array(
			'default'           => '1440px',
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => 'refresh',
		)
	);
	$wp_customize->add_control(
		'core16_container_max_width',
		array(
			'label'   => esc_html__( 'Container Max Width', 'core16' ),
			'section' => 'core16_layout_section',
			'type'    => 'text',
		)
	);

	// Button Radius
	$wp_customize->add_setting(
		'core16_radius_button',
		array(
			'default'           => '0.25rem',
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => 'refresh',
		)
	);
	$wp_customize->add_control(
		'core16_radius_button',
		array(
			'label'   => esc_html__( 'Button Radius (e.g. 0.25rem or 4px)', 'core16' ),
			'section' => 'core16_layout_section',
			'type'    => 'text',
		)
	);

	// Card Radius
	$wp_customize->add_setting(
		'core16_radius_card',
		array(
			'default'           => '0.75rem',
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => 'refresh',
		)
	);
	$wp_customize->add_control(
		'core16_radius_card',
		array(
			'label'   => esc_html__( 'Card Radius (e.g. 0.75rem or 12px)', 'core16' ),
			'section' => 'core16_layout_section',
			'type'    => 'text',
		)
	);
}
add_action( 'customize_register', 'core16_customize_register' );

/**
 * Generate CSS custom properties from Customizer settings.
 *
 * @return string CSS declarations block.
 */
function core16_get_customizer_css() {
	$primary       = get_theme_mod( 'core16_color_primary', '#0EA5AB' );
	$teal_hover    = get_theme_mod( 'core16_color_teal_hover', '#0b888d' );
	$secondary     = get_theme_mod( 'core16_color_secondary', '#17365D' );
	$midnight      = get_theme_mod( 'core16_color_midnight', '#0D182A' );
	$background    = get_theme_mod( 'core16_color_background', '#FAFAF7' );
	$mist          = get_theme_mod( 'core16_color_mist', '#F1F5F6' );
	$rule_grey     = get_theme_mod( 'core16_color_rule_grey', '#D7DEE3' );
	$muted_text    = get_theme_mod( 'core16_color_muted_text', '#66717D' );
	$headline_font = get_theme_mod( 'core16_font_headline', 'Poppins' );
	$body_font     = get_theme_mod( 'core16_font_body', 'Inter' );
	$mono_font     = get_theme_mod( 'core16_font_mono', 'JetBrains Mono' );
	$max_width     = get_theme_mod( 'core16_container_max_width', '1440px' );
	$btn_radius    = get_theme_mod( 'core16_radius_button', '0.25rem' );
	$card_radius   = get_theme_mod( 'core16_radius_card', '0.75rem' );

	$css = ":root {
		--color-core-teal: " . esc_attr( $primary ) . ";
		--color-teal-hover: " . esc_attr( $teal_hover ) . ";
		--color-deep-navy: " . esc_attr( $secondary ) . ";
		--color-midnight: " . esc_attr( $midnight ) . ";
		--color-warm-white: " . esc_attr( $background ) . ";
		--color-mist: " . esc_attr( $mist ) . ";
		--color-rule-grey: " . esc_attr( $rule_grey ) . ";
		--color-slate-subtle: " . esc_attr( $muted_text ) . ";
		--font-headline: '" . esc_attr( $headline_font ) . "', sans-serif;
		--font-body: '" . esc_attr( $body_font ) . "', sans-serif;
		--font-mono: '" . esc_attr( $mono_font ) . "', monospace;
		--container-max-width: " . esc_attr( $max_width ) . ";
		--radius-lg: " . esc_attr( $btn_radius ) . ";
		--radius-2xl: " . esc_attr( $card_radius ) . ";
	}";

	return $css;
}
