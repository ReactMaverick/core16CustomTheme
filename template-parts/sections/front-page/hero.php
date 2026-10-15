<?php
/**
 * Hero Showcase Section (Section 1)
 *
 * @package Core16
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$hero_img = core16_get_image_url(
	'archetype-sculpture.png',
	'https://lh3.googleusercontent.com/aida-public/AB6AXuAuBG2IkXyIhVYSu6qd4ODsa4JCIi5ilJj0R8NFZEfH4LDqZ6KGBPGd44Dey-G_nhe-WT3nPz4jKJymJGZE0WGgI1ctMxrA06bfeHbasv5gmxWAtSyj-qxWOpTkTymyGdf1apTo59nrzKY7sfIFQRcgczaUM2gdtpEPnyDNvku3buL5frCj8rH-XBhCrfuX5CIAOFudDUlaVVCJ-BZ4mZuQHDBkRgYsN19zLbBGoIQz21hdn4mn9TNO'
);
?>
<section class="relative w-full bg-warm-white py-space-xl lg:py-margin-lg px-margin-sm lg:px-margin-lg border-b border-rule-grey">
	<div class="max-w-[1440px] mx-auto grid grid-cols-1 lg:grid-cols-12 gap-gutter-lg items-center">
		
		<!-- Left Column: Copy & Actions -->
		<div class="lg:col-span-7 flex flex-col space-y-space-md">
			<div class="flex items-center gap-space-sm flex-wrap">
				<?php core16_badge( __( 'Normative Calibration v4.2 • ISO 10667-2 Certified Protocol', 'core16' ) ); ?>
			</div>

			<div class="space-y-space-sm pt-1">
				<h1 class="font-headline font-bold text-3xl sm:text-4xl lg:text-[46px] lg:leading-[1.18] text-midnight tracking-tight max-w-2xl">
					<?php esc_html_e( 'Self-Awareness Begins With You. Clarity Today. Success Tomorrow.', 'core16' ); ?>
				</h1>
				<p class="font-body text-base lg:text-lg text-slate-subtle leading-relaxed max-w-xl">
					<?php esc_html_e( 'The Core16 empirical diagnostic measures non-binary leadership dynamics across our continuous FECA vector framework. Designed for C-suite succession planning, executive coaching, and high-velocity talent calibration.', 'core16' ); ?>
				</p>
			</div>

			<!-- Actions -->
			<div class="flex flex-wrap items-center gap-space-md pt-2">
				<?php
				core16_button(
					array(
						'text'      => __( 'Begin 12-Minute Assessment', 'core16' ),
						'url'       => '#assessment',
						'variant'   => 'teal',
						'icon'      => 'arrow_forward',
						'data_path' => 'take-core16-assessment',
					)
				);

				core16_button(
					array(
						'text'      => __( 'Explore Sample Executive Report', 'core16' ),
						'url'       => '#dossier',
						'variant'   => 'outline',
						'data_path' => 'enterprise-and-coaching',
					)
				);
				?>
			</div>

			<!-- Validation Micro-Copy -->
			<div class="pt-3 flex flex-wrap items-center gap-x-3 gap-y-1 font-mono text-[11px] text-slate-subtle">
				<span><?php esc_html_e( 'N=184,200 Normative Cohort', 'core16' ); ?></span>
				<span class="text-rule-grey">•</span>
				<span><?php esc_html_e( 'Test-Retest Stability r = .92', 'core16' ); ?></span>
				<span class="text-rule-grey">•</span>
				<span><?php esc_html_e( 'Zero Adverse Impact Audit (EEOC Compliant)', 'core16' ); ?></span>
			</div>
		</div>

		<!-- Right Column: Calibration Specimen Card -->
		<div class="lg:col-span-5 relative">
			<div class="relative w-full rounded-xl bg-mist border border-rule-grey p-4 sm:p-5 shadow-sm">
				<div class="flex items-center justify-between mb-3 font-mono text-[10px] text-slate-subtle uppercase tracking-wider">
					<span class="flex items-center gap-1.5 font-semibold text-midnight">
						<span class="w-1.5 h-1.5 rounded-full bg-core-teal animate-pulse"></span>
						<?php esc_html_e( 'CALIBRATION SPECIMEN // ARCHETYPE ARTIFACT SERIES 01', 'core16' ); ?>
					</span>
					<span class="hidden sm:inline border border-rule-grey bg-warm-white px-2 py-0.5 rounded text-slate-subtle">
						<?php esc_html_e( 'Series 01', 'core16' ); ?>
					</span>
				</div>

				<div class="relative w-full aspect-square rounded-lg overflow-hidden border border-rule-grey bg-warm-white flex items-center justify-center group">
					<img
						alt="<?php esc_attr_e( 'Core16 Archetype collectible matte-finish geometric sculpture on midnight plinth with concentric halo', 'core16' ); ?>"
						class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
						src="<?php echo esc_url( $hero_img ); ?>"
					/>
					
					<!-- Overlay Metadata Pill -->
					<div class="absolute bottom-3 left-3 right-3 bg-midnight/90 backdrop-blur-md px-3.5 py-2 rounded-lg flex items-center justify-between text-warm-white border border-slate-700/60">
						<div class="flex items-center gap-2">
							<span class="w-2 h-2 rounded-full bg-core-teal"></span>
							<span class="font-mono text-[11px] font-medium tracking-wide">
								<?php esc_html_e( 'Studio Render • Matte Satin Composite', 'core16' ); ?>
							</span>
						</div>
						<span class="font-mono text-[10px] text-slate-subtle">Ref #C16-SPEC-01</span>
					</div>
				</div>
			</div>
		</div>

	</div>
</section>
