<?php
/**
 * FECA Measurement Engine Section (Section 4 - Midnight Container)
 *
 * @package Core16
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$vectors = array(
	array(
		'code'       => '[F]',
		'label'      => __( 'Cognitive Focus Intensity', 'core16' ),
		'percentile' => '82.4',
		'width'      => '82.4%',
		'low_label'  => __( 'Diffuse / Peripheral Exploration', 'core16' ),
		'high_label' => __( 'Singular Deep Concentration', 'core16' ),
	),
	array(
		'code'       => '[E]',
		'label'      => __( 'Execution & Drive Velocity', 'core16' ),
		'percentile' => '71.8',
		'width'      => '71.8%',
		'low_label'  => __( 'Reflective Deliberation', 'core16' ),
		'high_label' => __( 'High-Urgency Execution', 'core16' ),
	),
	array(
		'code'       => '[C]',
		'label'      => __( 'Control & Systemic Governance', 'core16' ),
		'percentile' => '89.1',
		'width'      => '89.1%',
		'low_label'  => __( 'Emergent Heuristic Adaptation', 'core16' ),
		'high_label' => __( 'Deterministic Rule-Structure', 'core16' ),
	),
	array(
		'code'       => '[A]',
		'label'      => __( 'Ambiguity Tolerance & Flexibility', 'core16' ),
		'percentile' => '76.3',
		'width'      => '76.3%',
		'low_label'  => __( 'Certainty Preference', 'core16' ),
		'high_label' => __( 'Thrives in Dynamic Chaos', 'core16' ),
	),
);
?>
<section id="feca" class="w-full bg-midnight text-warm-white py-space-xl lg:py-margin-lg px-margin-sm lg:px-margin-lg">
	<div class="max-w-[1440px] mx-auto">
		<div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter-lg items-start">
			
			<!-- Left: Engine Premise -->
			<div class="lg:col-span-5 space-y-space-md">
				<div class="inline-flex items-center px-2.5 py-1 rounded bg-white/10 text-core-teal font-mono text-xs font-semibold uppercase tracking-wider">
					<?php esc_html_e( 'Continuous Psychometrics', 'core16' ); ?>
				</div>

				<h2 class="font-headline font-bold text-2xl lg:text-3xl text-white tracking-tight">
					<?php esc_html_e( 'The FECA Scoring Core Engine.', 'core16' ); ?>
				</h2>

				<p class="font-body text-sm lg:text-base text-white/70 leading-relaxed">
					<?php esc_html_e( 'Traditional assessments force candidates into binary labels (Introvert vs. Extrovert). The FECA system treats behavior as a continuous, multidimensional probability field with measurable variance standard errors.', 'core16' ); ?>
				</p>

				<div class="pt-2 space-y-3">
					<div class="flex items-start gap-2.5">
						<span class="material-symbols-outlined text-core-teal text-[20px] shrink-0 mt-0.5">check_circle</span>
						<p class="font-body text-xs lg:text-sm text-white/80">
							<?php esc_html_e( 'Continuous 0–100 calibrated percentiles rather than polarized either/or classifications.', 'core16' ); ?>
						</p>
					</div>
					<div class="flex items-start gap-2.5">
						<span class="material-symbols-outlined text-core-teal text-[20px] shrink-0 mt-0.5">check_circle</span>
						<p class="font-body text-xs lg:text-sm text-white/80">
							<?php esc_html_e( 'Adaptive item difficulty weighting through latent trait maximum likelihood estimators.', 'core16' ); ?>
						</p>
					</div>
					<div class="flex items-start gap-2.5">
						<span class="material-symbols-outlined text-core-teal text-[20px] shrink-0 mt-0.5">check_circle</span>
						<p class="font-body text-xs lg:text-sm text-white/80">
							<?php esc_html_e( 'Real-time situational stress distortion correction (Lie/Faking index < 1.4%).', 'core16' ); ?>
						</p>
					</div>
				</div>

				<div class="pt-3">
					<?php
					core16_button(
						array(
							'text'      => __( 'Read the FECA Statistical Whitepaper', 'core16' ),
							'url'       => '#feca-paper',
							'variant'   => 'text-link',
							'icon'      => 'arrow_forward',
							'data_path' => 'feca-scoring',
						)
					);
					?>
				</div>
			</div>

			<!-- Right: Diagnostic Readout (Teal Data Bars) -->
			<div class="lg:col-span-7 bg-[#132238] rounded-xl border border-slate-700/70 p-6 sm:p-8 space-y-6">
				<div class="flex items-center justify-between pb-3 border-b border-white/10">
					<div>
						<span class="font-mono text-[11px] text-white/50 uppercase">
							<?php esc_html_e( 'Candidate Diagnostic Readout', 'core16' ); ?>
						</span>
						<h4 class="font-headline font-bold text-lg text-white">
							<?php esc_html_e( 'Continuous Trait Vector Matrix', 'core16' ); ?>
						</h4>
					</div>
					<div class="text-right">
						<span class="font-mono text-[10px] text-core-teal block uppercase font-medium">
							<?php esc_html_e( 'Confidence Interval', 'core16' ); ?>
						</span>
						<span class="font-mono text-xs text-white">
							<?php esc_html_e( '95% CI [±1.8pt]', 'core16' ); ?>
						</span>
					</div>
				</div>

				<?php foreach ( $vectors as $vec ) : ?>
					<div class="space-y-1.5">
						<div class="flex justify-between items-baseline font-mono text-xs">
							<span class="text-white flex items-center gap-2">
								<span class="w-1.5 h-1.5 rounded-full bg-core-teal"></span>
								<strong><?php echo esc_html( $vec['code'] ); ?></strong> <?php echo esc_html( $vec['label'] ); ?>
							</span>
							<span class="text-core-teal font-bold"><?php echo esc_html( $vec['percentile'] ); ?> <?php esc_html_e( 'Percentile', 'core16' ); ?></span>
						</div>
						<div class="relative w-full h-3 bg-midnight/80 border border-slate-700/80 rounded-full overflow-hidden">
							<div class="h-full bg-core-teal rounded-full transition-all duration-1000" style="width: <?php echo esc_attr( $vec['width'] ); ?>;"></div>
						</div>
						<div class="flex justify-between text-white/40 font-mono text-[10px]">
							<span><?php echo esc_html( $vec['low_label'] ); ?></span>
							<span><?php echo esc_html( $vec['high_label'] ); ?></span>
						</div>
					</div>
				<?php endforeach; ?>

				<!-- Diagnostics Footnote -->
				<div class="pt-3 border-t border-white/10 flex items-center justify-between text-white/50 font-mono text-[10px]">
					<span><?php esc_html_e( 'Algorithmic Stability Metric: Stable', 'core16' ); ?></span>
					<span class="text-core-teal"><?php esc_html_e( 'Sample Cohort ID: C16-89240', 'core16' ); ?></span>
				</div>
			</div>

		</div>
	</div>
</section>
