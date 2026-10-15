<?php
/**
 * How Core16 Works - Regulatory Validation Strip & Conversion Action Anchor
 *
 * @package Core16
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- SECTION: CLINICAL VALIDATION & REGULATORY STRIP -->
<section class="w-full bg-[#EAEFEF] text-midnight border-b border-rule-grey py-12 px-margin-sm lg:px-margin-lg">
	<div class="max-w-[1440px] mx-auto">
		<div class="flex flex-col md:flex-row items-center justify-between gap-8">
			<div class="space-y-1 text-center md:text-left">
				<span class="font-mono text-xs text-core-teal uppercase tracking-widest font-semibold"><?php esc_html_e( 'EMPIRICAL REGULATORY FRAMEWORK', 'core16' ); ?></span>
				<p class="font-headline text-lg font-semibold text-midnight"><?php esc_html_e( 'Engineered to Exceed Global Psychometric Standards', 'core16' ); ?></p>
			</div>
			<div class="grid grid-cols-2 sm:grid-cols-4 gap-4 w-full md:w-auto text-center md:text-left">
				<div class="bg-mist border border-rule-grey border-l-2 border-l-core-teal p-3 rounded">
					<span class="font-mono text-xs text-midnight font-bold block">ISO 10667-2</span>
					<span class="font-body text-[11px] text-slate-subtle"><?php esc_html_e( 'Assessment Service Delivery', 'core16' ); ?></span>
				</div>
				<div class="bg-mist border border-rule-grey border-l-2 border-l-core-teal p-3 rounded">
					<span class="font-mono text-xs text-midnight font-bold block">α = 0.92</span>
					<span class="font-body text-[11px] text-slate-subtle"><?php esc_html_e( 'Cronbach Internal Reliability', 'core16' ); ?></span>
				</div>
				<div class="bg-mist border border-rule-grey border-l-2 border-l-core-teal p-3 rounded">
					<span class="font-mono text-xs text-midnight font-bold block">EEOC Compliant</span>
					<span class="font-body text-[11px] text-slate-subtle"><?php esc_html_e( 'Non-Adverse Impact Verified', 'core16' ); ?></span>
				</div>
				<div class="bg-mist border border-rule-grey border-l-2 border-l-core-teal p-3 rounded">
					<span class="font-mono text-xs text-midnight font-bold block">GDPR & HIPAA</span>
					<span class="font-body text-[11px] text-slate-subtle"><?php esc_html_e( 'Sovereign Data Encryption', 'core16' ); ?></span>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- SECTION: CONVERSION ACTION ANCHOR -->
<section class="w-full bg-[#17365D] text-white px-margin-sm lg:px-margin-lg py-20 relative overflow-hidden">
	<div class="max-w-[1440px] mx-auto relative z-10 flex flex-col lg:flex-row items-center justify-between gap-12">
		<div class="space-y-4 max-w-2xl text-center lg:text-left">
			<span class="font-mono text-xs uppercase tracking-wider text-[#A0B4C8]"><?php esc_html_e( 'Normative Assessment Gate', 'core16' ); ?></span>
			<h2 class="font-headline text-3xl sm:text-4xl font-bold tracking-tight text-white">
				<?php esc_html_e( 'Experience Empirical Self-Awareness.', 'core16' ); ?>
			</h2>
			<p class="font-body text-sm text-[#D7DEE3] leading-relaxed">
				<?php esc_html_e( 'Complete the continuous 12-minute normative assessment to unlock your individual FECA matrix, strategic cognitive bandwidth, and comprehensive 38-page executive dossier.', 'core16' ); ?>
			</p>
		</div>
		<div class="flex flex-col sm:flex-row items-center gap-4 w-full sm:w-auto shrink-0">
			<?php
			core16_button(
				array(
					'text'      => __( 'Begin Core16 Evaluation', 'core16' ),
					'url'       => esc_url( home_url( '/individuals/#assessment' ) ),
					'variant'   => 'teal',
					'icon'      => 'arrow_forward',
					'data_path' => 'take-core16-assessment',
				)
			);
			core16_button(
				array(
					'text'      => __( 'Download Technical Whitepaper', 'core16' ),
					'url'       => esc_url( home_url( '/resources/' ) ),
					'variant'   => 'dark-outline',
					'data_path' => 'methodology-whitepaper',
				)
			);
			?>
		</div>
	</div>
</section>
