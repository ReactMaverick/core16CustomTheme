<?php
/**
 * Core16 Theme — Global Responsive Typography Architecture
 * Central backend control for responsive font sizes across Desktop, Tablet, and Mobile.
 *
 * @package Core16
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Get default typography sizing schema.
 *
 * @return array
 */
function core16_get_default_typography_sizes() {
	return array(
		'fluid_scaling' => '1',
		'desktop'       => array(
			'display_hero'  => 56,
			'headline_xl'   => 40,
			'headline_lg'   => 30,
			'headline_md'   => 22,
			'headline_sm'   => 18,
			'body_lead'     => 17,
			'body_default'  => 15,
			'body_sm'       => 13,
			'label_mono'    => 12,
			'label_mono_sm' => 10,
			'caption'       => 11,
		),
		'tablet'        => array(
			'display_hero'  => 44,
			'headline_xl'   => 34,
			'headline_lg'   => 26,
			'headline_md'   => 20,
			'headline_sm'   => 17,
			'body_lead'     => 16,
			'body_default'  => 15,
			'body_sm'       => 13,
			'label_mono'    => 11,
			'label_mono_sm' => 10,
			'caption'       => 11,
		),
		'mobile'        => array(
			'display_hero'  => 36,
			'headline_xl'   => 28,
			'headline_lg'   => 24,
			'headline_md'   => 19,
			'headline_sm'   => 16,
			'body_lead'     => 15,
			'body_default'  => 14,
			'body_sm'       => 12,
			'label_mono'    => 11,
			'label_mono_sm' => 9,
			'caption'       => 10,
		),
	);
}

/**
 * Get current saved typography sizing schema with fallback to defaults.
 *
 * @return array
 */
function core16_get_typography_sizes() {
	$defaults = core16_get_default_typography_sizes();
	$saved    = get_option( 'core16_typography_sizes', array() );

	if ( ! is_array( $saved ) || empty( $saved ) ) {
		return $defaults;
	}

	$merged = $defaults;
	if ( isset( $saved['fluid_scaling'] ) ) {
		$merged['fluid_scaling'] = $saved['fluid_scaling'];
	}

	foreach ( array( 'desktop', 'tablet', 'mobile' ) as $device ) {
		if ( isset( $saved[ $device ] ) && is_array( $saved[ $device ] ) ) {
			foreach ( $defaults[ $device ] as $token => $val ) {
				if ( isset( $saved[ $device ][ $token ] ) && is_numeric( $saved[ $device ][ $token ] ) ) {
					$merged[ $device ][ $token ] = intval( $saved[ $device ][ $token ] );
				}
			}
		}
	}

	return $merged;
}

/**
 * Register dedicated Typography settings page in WordPress Admin.
 */
function core16_register_typography_admin_menu() {
	// Add under Appearance menu
	add_theme_page(
		__( 'Responsive Typography', 'core16' ),
		__( 'Typography Sizes', 'core16' ),
		'manage_options',
		'core16-typography',
		'core16_render_typography_settings_page'
	);

	// Also add a top-level menu for prominent single-place access
	add_menu_page(
		__( 'Core16 Typography Settings', 'core16' ),
		__( 'Typography', 'core16' ),
		'manage_options',
		'core16-typography-global',
		'core16_render_typography_settings_page',
		'dashicons-editor-textcolor',
		58
	);
}
add_action( 'admin_menu', 'core16_register_typography_admin_menu' );

/**
 * Render the dedicated Typography admin settings page.
 */
function core16_render_typography_settings_page() {
	if ( ! current_user_can( 'manage_options' ) ) {
		wp_die( esc_html__( 'You do not have sufficient permissions to access this page.', 'core16' ) );
	}

	$notice = '';

	// Handle Save Action
	if ( isset( $_POST['core16_save_typography'] ) && check_admin_referer( 'core16_typography_nonce_action', 'core16_typography_nonce' ) ) {
		$new_sizes = array(
			'fluid_scaling' => isset( $_POST['fluid_scaling'] ) ? '1' : '0',
			'desktop'       => array(),
			'tablet'        => array(),
			'mobile'        => array(),
		);

		$tokens = array(
			'display_hero',
			'headline_xl',
			'headline_lg',
			'headline_md',
			'headline_sm',
			'body_lead',
			'body_default',
			'body_sm',
			'label_mono',
			'label_mono_sm',
			'caption',
		);

		foreach ( array( 'desktop', 'tablet', 'mobile' ) as $device ) {
			foreach ( $tokens as $t ) {
				$val = isset( $_POST[ $device ][ $t ] ) ? intval( $_POST[ $device ][ $t ] ) : 16;
				$new_sizes[ $device ][ $t ] = max( 8, min( 120, $val ) );
			}
		}

		update_option( 'core16_typography_sizes', $new_sizes );
		$notice = '<div class="notice notice-success is-dismissible"><p><strong>' . esc_html__( 'Global typography sizes successfully updated and compiled across all pages.', 'core16' ) . '</strong></p></div>';
	}

	// Handle Reset Action
	if ( isset( $_POST['core16_reset_typography'] ) && check_admin_referer( 'core16_typography_nonce_action', 'core16_typography_nonce' ) ) {
		delete_option( 'core16_typography_sizes' );
		$notice = '<div class="notice notice-info is-dismissible"><p><strong>' . esc_html__( 'Global typography sizes reset to Core16 default specifications.', 'core16' ) . '</strong></p></div>';
	}

	$sizes = core16_get_typography_sizes();
	?>
	<div class="wrap" style="max-width: 1280px; margin-top: 20px;">
		<div style="background: #0D182A; color: #FAFAF7; padding: 24px 32px; border-radius: 8px; margin-bottom: 24px; box-shadow: 0 4px 12px rgba(0,0,0,0.1);">
			<div style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 16px;">
				<div>
					<span style="font-family: monospace; font-size: 11px; color: #0EA5AB; text-transform: uppercase; letter-spacing: 0.1em; font-weight: 700;">
						<?php esc_html_e( 'CORE16 PSYCHOMETRIC DESIGN SYSTEM // ARCHITECTURE ENGINE', 'core16' ); ?>
					</span>
					<h1 style="color: #ffffff; margin: 6px 0 4px; font-size: 26px; font-weight: 700;">
						<?php esc_html_e( 'Global Responsive Typography Settings', 'core16' ); ?>
					</h1>
					<p style="margin: 0; color: #BAC7DF; font-size: 13px;">
						<?php esc_html_e( 'Configure font sizes for all devices in one place. Changes automatically apply globally across every page, post, and archetype template.', 'core16' ); ?>
					</p>
				</div>
				<div>
					<a href="<?php echo esc_url( wp_customize_url() ); ?>" class="button" style="background: #0EA5AB; color: #003336; border: none; font-weight: 600; padding: 6px 16px; border-radius: 4px; height: auto;">
						<?php esc_html_e( 'Open Live Customizer', 'core16' ); ?> &rarr;
					</a>
				</div>
			</div>
		</div>

		<?php echo $notice; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

		<form method="post" action="">
			<?php wp_nonce_field( 'core16_typography_nonce_action', 'core16_typography_nonce' ); ?>

			<!-- GLOBAL FLUID SCALING CONTROLLER -->
			<div style="background: #ffffff; border: 1px solid #D7DEE3; border-radius: 8px; padding: 20px 24px; margin-bottom: 24px;">
				<div style="display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 16px;">
					<div>
						<h3 style="margin: 0 0 4px; font-size: 16px; font-weight: 600; color: #121D26;">
							<?php esc_html_e( 'Fluid Responsive Auto-Scaling (CSS clamp())', 'core16' ); ?>
						</h3>
						<p style="margin: 0; font-size: 13px; color: #66717D;">
							<?php esc_html_e( 'When enabled, typography smoothly scales proportional to the viewport width between Mobile (375px) and Desktop (1440px).', 'core16' ); ?>
						</p>
					</div>
					<label style="display: flex; align-items: center; gap: 10px; cursor: pointer; font-size: 14px; font-weight: 600; color: #121D26;">
						<input type="checkbox" name="fluid_scaling" value="1" <?php checked( $sizes['fluid_scaling'], '1' ); ?> style="transform: scale(1.3); cursor: pointer;" />
						<span><?php esc_html_e( 'Enable Fluid Scaling', 'core16' ); ?></span>
					</label>
				</div>
			</div>

			<!-- RESPONSIVE SIZES 3-COLUMN GRID -->
			<div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 20px; margin-bottom: 24px;">
				
				<!-- 1. DESKTOP VIEWPORT -->
				<div style="background: #ffffff; border: 1px solid #D7DEE3; border-radius: 8px; overflow: hidden; box-shadow: 0 2px 4px rgba(0,0,0,0.02);">
					<div style="background: #F7F9FF; border-bottom: 1px solid #D7DEE3; padding: 14px 20px; display: flex; align-items: center; justify-content: space-between;">
						<div style="display: flex; align-items: center; gap: 8px;">
							<span class="dashicons dashicons-desktop" style="color: #00696D; font-size: 20px;"></span>
							<strong style="color: #121D26; font-size: 14px;"><?php esc_html_e( 'Desktop Devices', 'core16' ); ?></strong>
						</div>
						<span style="font-size: 11px; font-family: monospace; background: #E4EFFD; color: #435F89; padding: 2px 8px; border-radius: 4px; font-weight: 600;">
							&gt; 1024px
						</span>
					</div>
					<div style="padding: 20px;">
						<?php core16_render_typography_input_group( 'desktop', $sizes['desktop'] ); ?>
					</div>
				</div>

				<!-- 2. TABLET VIEWPORT -->
				<div style="background: #ffffff; border: 1px solid #D7DEE3; border-radius: 8px; overflow: hidden; box-shadow: 0 2px 4px rgba(0,0,0,0.02);">
					<div style="background: #F7F9FF; border-bottom: 1px solid #D7DEE3; padding: 14px 20px; display: flex; align-items: center; justify-content: space-between;">
						<div style="display: flex; align-items: center; gap: 8px;">
							<span class="dashicons dashicons-tablet" style="color: #435F89; font-size: 20px;"></span>
							<strong style="color: #121D26; font-size: 14px;"><?php esc_html_e( 'Tablet Devices', 'core16' ); ?></strong>
						</div>
						<span style="font-size: 11px; font-family: monospace; background: #E4EFFD; color: #435F89; padding: 2px 8px; border-radius: 4px; font-weight: 600;">
							641px - 1024px
						</span>
					</div>
					<div style="padding: 20px;">
						<?php core16_render_typography_input_group( 'tablet', $sizes['tablet'] ); ?>
					</div>
				</div>

				<!-- 3. MOBILE VIEWPORT -->
				<div style="background: #ffffff; border: 1px solid #D7DEE3; border-radius: 8px; overflow: hidden; box-shadow: 0 2px 4px rgba(0,0,0,0.02);">
					<div style="background: #F7F9FF; border-bottom: 1px solid #D7DEE3; padding: 14px 20px; display: flex; align-items: center; justify-content: space-between;">
						<div style="display: flex; align-items: center; gap: 8px;">
							<span class="dashicons dashicons-smartphone" style="color: #0EA5AB; font-size: 20px;"></span>
							<strong style="color: #121D26; font-size: 14px;"><?php esc_html_e( 'Mobile Devices', 'core16' ); ?></strong>
						</div>
						<span style="font-size: 11px; font-family: monospace; background: #E4EFFD; color: #435F89; padding: 2px 8px; border-radius: 4px; font-weight: 600;">
							&le; 640px
						</span>
					</div>
					<div style="padding: 20px;">
						<?php core16_render_typography_input_group( 'mobile', $sizes['mobile'] ); ?>
					</div>
				</div>

			</div>

			<!-- LIVE INTERACTIVE PREVIEW CARD -->
			<div style="background: #ffffff; border: 1px solid #D7DEE3; border-radius: 8px; margin-bottom: 24px; overflow: hidden;">
				<div style="background: #F1F5F6; border-bottom: 1px solid #D7DEE3; padding: 14px 24px; display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 12px;">
					<div>
						<h3 style="margin: 0; font-size: 14px; font-weight: 700; color: #121D26;">
							<?php esc_html_e( 'Real-Time Typography Sandbox Preview', 'core16' ); ?>
						</h3>
					</div>
					<div style="display: flex; gap: 6px;" id="c16-preview-controls">
						<button type="button" class="button c16-viewport-btn" data-mode="mobile" style="font-size: 12px;">
							<span class="dashicons dashicons-smartphone" style="font-size: 14px; line-height: 1.8;"></span> Mobile
						</button>
						<button type="button" class="button c16-viewport-btn" data-mode="tablet" style="font-size: 12px;">
							<span class="dashicons dashicons-tablet" style="font-size: 14px; line-height: 1.8;"></span> Tablet
						</button>
						<button type="button" class="button button-primary c16-viewport-btn" data-mode="desktop" style="font-size: 12px;">
							<span class="dashicons dashicons-desktop" style="font-size: 14px; line-height: 1.8;"></span> Desktop
						</button>
					</div>
				</div>

				<div id="c16-preview-viewport" style="padding: 32px; background: #FAFAF7; transition: all 0.3s ease; margin: 0 auto; max-width: 100%;">
					<div style="border: 1px dashed #D7DEE3; padding: 24px; border-radius: 6px; background: #ffffff;">
						<div style="font-family: monospace; font-size: 11px; color: #0EA5AB; text-transform: uppercase; font-weight: 700; margin-bottom: 8px;" id="prev-mono-sm">
							Diagnostic Engine v4.2 // Verified Specimen
						</div>
						<div style="font-family: 'Outfit', 'Poppins', sans-serif; font-weight: 700; color: #121D26; line-height: 1.1; margin-bottom: 12px;" id="prev-hero">
							Clarity Today. Strategic Success Tomorrow.
						</div>
						<div style="font-family: 'Outfit', 'Poppins', sans-serif; font-weight: 600; color: #00696D; margin-bottom: 12px;" id="prev-h1">
							The Catalyst Strategist — Personal Talent Architecture
						</div>
						<div style="font-family: 'Outfit', 'Poppins', sans-serif; font-weight: 600; color: #121D26; margin-bottom: 12px;" id="prev-h2">
							Three Pillars of Personal Growth. Engineered for Measurable Momentum.
						</div>
						<p style="font-family: 'Inter', sans-serif; color: #3D494A; line-height: 1.6; margin-bottom: 12px;" id="prev-lead">
							Unlock high-resolution self-awareness to make decisive career maneuvers, master interpersonal power dynamics, and eliminate persistent cognitive blindspots.
						</p>
						<p style="font-family: 'Inter', sans-serif; color: #66717D; line-height: 1.6; margin-bottom: 16px;" id="prev-body">
							Continuous multidimensional scoring measures exact variance bands with verified standard error rates and behavioral distribution curves across all 16 executive profiles.
						</p>
						<div style="display: flex; justify-content: space-between; border-top: 1px solid #D7DEE3; padding-top: 12px; font-family: monospace; color: #0EA5AB;" id="prev-mono">
							<span>FECA Code: F-88 • E-74 • C-42 • A-91</span>
							<span style="color: #66717D;" id="prev-caption">Standard Error: &plusmn;2.1%</span>
						</div>
					</div>
				</div>
			</div>

			<!-- ACTION CONTROLS -->
			<div style="display: flex; gap: 12px; align-items: center; padding: 12px 0;">
				<button type="submit" name="core16_save_typography" class="button button-primary" style="background: #00696D; border-color: #00696D; font-size: 14px; height: auto; padding: 10px 24px; font-weight: 600; border-radius: 4px;">
					<?php esc_html_e( 'Save Global Typography Sizes', 'core16' ); ?>
				</button>
				<button type="submit" name="core16_reset_typography" class="button button-secondary" onclick="return confirm('<?php esc_attr_e( 'Reset all typography sizes to Core16 default specifications?', 'core16' ); ?>');" style="font-size: 14px; height: auto; padding: 10px 20px; border-radius: 4px;">
					<?php esc_html_e( 'Reset to Defaults', 'core16' ); ?>
				</button>
			</div>
		</form>
	</div>

	<!-- CLIENT-SIDE LIVE PREVIEW INTERACTIVITY -->
	<script>
		document.addEventListener('DOMContentLoaded', function() {
			const viewButtons = document.querySelectorAll('.c16-viewport-btn');
			const viewport = document.getElementById('c16-preview-viewport');
			let currentMode = 'desktop';

			function updatePreviewElements() {
				const getVal = (token) => {
					const el = document.querySelector(`input[name="${currentMode}[${token}]"]`);
					return el ? parseInt(el.value, 10) : 16;
				};

				document.getElementById('prev-hero').style.fontSize = getVal('display_hero') + 'px';
				document.getElementById('prev-h1').style.fontSize = getVal('headline_xl') + 'px';
				document.getElementById('prev-h2').style.fontSize = getVal('headline_lg') + 'px';
				document.getElementById('prev-lead').style.fontSize = getVal('body_lead') + 'px';
				document.getElementById('prev-body').style.fontSize = getVal('body_default') + 'px';
				document.getElementById('prev-mono').style.fontSize = getVal('label_mono') + 'px';
				document.getElementById('prev-mono-sm').style.fontSize = getVal('label_mono_sm') + 'px';
				document.getElementById('prev-caption').style.fontSize = getVal('caption') + 'px';
			}

			viewButtons.forEach(btn => {
				btn.addEventListener('click', function() {
					viewButtons.forEach(b => {
						b.classList.remove('button-primary');
					});
					this.classList.add('button-primary');

					currentMode = this.dataset.mode;
					if (currentMode === 'mobile') {
						viewport.style.maxWidth = '390px';
					} else if (currentMode === 'tablet') {
						viewport.style.maxWidth = '768px';
					} else {
						viewport.style.maxWidth = '100%';
					}
					updatePreviewElements();
				});
			});

			// Live input change event
			document.querySelectorAll('input[type="number"]').forEach(input => {
				input.addEventListener('input', updatePreviewElements);
			});

			updatePreviewElements();
		});
	</script>
	<?php
}

/**
 * Render input fields group for each device viewport.
 *
 * @param string $device Device identifier.
 * @param array  $values Current values.
 */
function core16_render_typography_input_group( $device, $values ) {
	$tokens = array(
		'display_hero'  => array(
			'label' => __( 'Display Hero', 'core16' ),
			'desc'  => '.text-display-hero',
		),
		'headline_xl'   => array(
			'label' => __( 'Headline XL / H1', 'core16' ),
			'desc'  => '.text-headline-xl',
		),
		'headline_lg'   => array(
			'label' => __( 'Headline LG / H2', 'core16' ),
			'desc'  => '.text-headline-lg',
		),
		'headline_md'   => array(
			'label' => __( 'Headline MD / H3', 'core16' ),
			'desc'  => '.text-headline-md',
		),
		'headline_sm'   => array(
			'label' => __( 'Headline SM / H4', 'core16' ),
			'desc'  => '.text-headline-sm',
		),
		'body_lead'     => array(
			'label' => __( 'Body Lead (Intro)', 'core16' ),
			'desc'  => '.text-body-lead',
		),
		'body_default'  => array(
			'label' => __( 'Body Default (Base)', 'core16' ),
			'desc'  => '.text-body-default',
		),
		'body_sm'       => array(
			'label' => __( 'Body Small', 'core16' ),
			'desc'  => '.text-body-sm',
		),
		'label_mono'    => array(
			'label' => __( 'Monospace Label', 'core16' ),
			'desc'  => '.text-label-mono',
		),
		'label_mono_sm' => array(
			'label' => __( 'Monospace Micro', 'core16' ),
			'desc'  => '.text-label-mono-sm',
		),
		'caption'       => array(
			'label' => __( 'Caption / Note', 'core16' ),
			'desc'  => '.text-caption',
		),
	);

	echo '<div style="display: flex; flex-direction: column; gap: 12px;">';
	foreach ( $tokens as $token => $info ) {
		$val = isset( $values[ $token ] ) ? intval( $values[ $token ] ) : 16;
		?>
		<div style="display: flex; align-items: center; justify-content: space-between; border-bottom: 1px solid #F1F5F6; padding-bottom: 8px;">
			<div>
				<label style="font-size: 13px; font-weight: 600; color: #121D26; display: block;">
					<?php echo esc_html( $info['label'] ); ?>
				</label>
				<span style="font-size: 11px; font-family: monospace; color: #66717D;">
					<?php echo esc_html( $info['desc'] ); ?>
				</span>
			</div>
			<div style="display: flex; align-items: center; gap: 4px;">
				<input type="number" min="8" max="120" name="<?php echo esc_attr( "{$device}[{$token}]" ); ?>" value="<?php echo esc_attr( $val ); ?>" style="width: 64px; text-align: right; padding: 4px 6px; font-weight: 600;" />
				<span style="font-size: 12px; color: #66717D; font-family: monospace;">px</span>
			</div>
		</div>
		<?php
	}
	echo '</div>';
}

/**
 * Generate responsive dynamic CSS rules from current typography configuration.
 *
 * @return string Compiled CSS string.
 */
function core16_generate_typography_css() {
	$sizes = core16_get_typography_sizes();
	$fluid = ( '1' === (string) $sizes['fluid_scaling'] );

	$desk = $sizes['desktop'];
	$tab  = $sizes['tablet'];
	$mob  = $sizes['mobile'];

	$css = "/* Core16 Global Responsive Typography System */\n";

	if ( $fluid ) {
		// Fluid calculations using clamp(MIN, CALC_VW, MAX)
		// Min viewport = 375px, Max viewport = 1440px (diff = 1065)
		$css .= ":root {\n";
		foreach ( $desk as $token => $d_val ) {
			$m_val = isset( $mob[ $token ] ) ? $mob[ $token ] : $d_val;
			$dash_token = str_replace( '_', '-', $token );

			if ( $d_val === $m_val ) {
				$css .= "  --font-size-{$dash_token}: {$d_val}px;\n";
			} else {
				$diff = $d_val - $m_val;
				$vw   = round( ( $diff / 1065 ) * 100, 3 );
				$base = round( ( $m_val - ( ( $diff / 1065 ) * 375 ) ) / 16, 3 );
				$css .= "  --font-size-{$dash_token}: clamp({$m_val}px, {$base}rem + {$vw}vw, {$d_val}px);\n";
			}
		}

		// Line heights
		$css .= "  --line-height-display-hero: 1.14;\n";
		$css .= "  --line-height-headline-xl: 1.2;\n";
		$css .= "  --line-height-headline-lg: 1.26;\n";
		$css .= "  --line-height-headline-md: 1.36;\n";
		$css .= "  --line-height-headline-sm: 1.44;\n";
		$css .= "  --line-height-body-lead: 1.6;\n";
		$css .= "  --line-height-body-default: 1.6;\n";
		$css .= "  --line-height-body-medium: 1.6;\n";
		$css .= "  --line-height-body-sm: 1.5;\n";
		$css .= "  --line-height-label-mono: 1.35;\n";
		$css .= "  --line-height-label-mono-sm: 1.4;\n";
		$css .= "  --line-height-caption: 1.45;\n";
		$css .= "}\n";

	} else {
		// Discrete Breakpoints
		$css .= ":root {\n";
		foreach ( $desk as $token => $val ) {
			$dash_token = str_replace( '_', '-', $token );
			$css .= "  --font-size-{$dash_token}: {$val}px;\n";
		}
		$css .= "  --line-height-display-hero: 1.14;\n";
		$css .= "  --line-height-headline-xl: 1.2;\n";
		$css .= "  --line-height-headline-lg: 1.26;\n";
		$css .= "  --line-height-headline-md: 1.36;\n";
		$css .= "  --line-height-headline-sm: 1.44;\n";
		$css .= "  --line-height-body-lead: 1.6;\n";
		$css .= "  --line-height-body-default: 1.6;\n";
		$css .= "  --line-height-body-medium: 1.6;\n";
		$css .= "  --line-height-body-sm: 1.5;\n";
		$css .= "  --line-height-label-mono: 1.35;\n";
		$css .= "  --line-height-label-mono-sm: 1.4;\n";
		$css .= "  --line-height-caption: 1.45;\n";
		$css .= "}\n";

		// Tablet Media Query
		$css .= "@media (max-width: 1024px) {\n  :root {\n";
		foreach ( $tab as $token => $val ) {
			$dash_token = str_replace( '_', '-', $token );
			$css .= "    --font-size-{$dash_token}: {$val}px;\n";
		}
		$css .= "  }\n}\n";

		// Mobile Media Query
		$css .= "@media (max-width: 640px) {\n  :root {\n";
		foreach ( $mob as $token => $val ) {
			$dash_token = str_replace( '_', '-', $token );
			$css .= "    --font-size-{$dash_token}: {$val}px;\n";
		}
		$css .= "  }\n}\n";
	}

	// Dynamic Global Utility Class Bindings (guarantees classes react dynamically)
	$css .= "
.text-display-hero { font-size: var(--font-size-display-hero) !important; line-height: var(--line-height-display-hero, 1.14) !important; }
.text-headline-xl { font-size: var(--font-size-headline-xl) !important; line-height: var(--line-height-headline-xl, 1.2) !important; }
.text-headline-lg { font-size: var(--font-size-headline-lg) !important; line-height: var(--line-height-headline-lg, 1.26) !important; }
.text-headline-md { font-size: var(--font-size-headline-md) !important; line-height: var(--line-height-headline-md, 1.36) !important; }
.text-headline-sm { font-size: var(--font-size-headline-sm) !important; line-height: var(--line-height-headline-sm, 1.44) !important; }
.text-body-lead { font-size: var(--font-size-body-lead) !important; line-height: var(--line-height-body-lead, 1.6) !important; }
.text-body-default { font-size: var(--font-size-body-default) !important; line-height: var(--line-height-body-default, 1.6) !important; }
.text-body-medium { font-size: var(--font-size-body-default) !important; line-height: var(--line-height-body-medium, 1.6) !important; }
.text-body-sm { font-size: var(--font-size-body-sm) !important; line-height: var(--line-height-body-sm, 1.5) !important; }
.text-label-mono { font-size: var(--font-size-label-mono) !important; line-height: var(--line-height-label-mono, 1.35) !important; }
.text-label-mono-sm { font-size: var(--font-size-label-mono-sm) !important; line-height: var(--line-height-label-mono-sm, 1.4) !important; }
.text-caption { font-size: var(--font-size-caption) !important; line-height: var(--line-height-caption, 1.45) !important; }

/* Responsive adjustments for standard Tailwind utility sizes */
@media (max-width: 640px) {
  .text-5xl { font-size: clamp(2rem, 8vw, 2.75rem) !important; line-height: 1.15 !important; }
  .text-4xl { font-size: clamp(1.75rem, 6vw, 2.25rem) !important; line-height: 1.2 !important; }
  .text-3xl { font-size: clamp(1.5rem, 5vw, 1.875rem) !important; line-height: 1.25 !important; }
  .text-2xl { font-size: clamp(1.25rem, 4vw, 1.5rem) !important; line-height: 1.3 !important; }
}
";

	return $css;
}
