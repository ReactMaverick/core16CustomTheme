<?php
/**
 * Science & Methodology - Bias Elimination & Adverse Impact Mitigation (Stitch Fidelity)
 * Screen: Science / Methodology (b7f6a7eeaff5465490de24971fa888cb)
 *
 * @package Core16
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<!-- SECTION 5: BIAS ELIMINATION, CULTURAL NORMALIZATION & ADVERSE IMPACT MITIGATION -->
<section class="w-full bg-surface-container-low px-margin-sm lg:px-margin-lg py-margin-lg border-b border-rule-grey/30" id="equity-validation">
	<div class="max-w-[1440px] mx-auto flex flex-col gap-space-xl">
		<!-- Section Header -->
		<div class="flex flex-col gap-space-xs max-w-3xl">
			<span class="font-label-mono text-label-mono uppercase tracking-wider text-secondary font-semibold">
				<?php esc_html_e( 'EQUITY & VALIDATION // EEOC & GLOBAL NORMATIVE COMPLIANCE', 'core16' ); ?>
			</span>
			<h2 class="font-headline-xl text-headline-xl text-on-surface tracking-tight font-semibold">
				<?php esc_html_e( 'Zero Adverse Impact. Validated Across Demographics.', 'core16' ); ?>
			</h2>
			<p class="font-body-default text-body-default text-on-surface-variant leading-relaxed">
				<?php esc_html_e( 'Engineered to comply strictly with the Uniform Guidelines on Employee Selection Procedures (1978), EEOC benchmarks, and international psychometric ethical declarations.', 'core16' ); ?>
			</p>
		</div>

		<!-- 3-Column Pillar Cards -->
		<div class="grid grid-cols-1 md:grid-cols-3 gap-gutter-lg">
			<!-- Column 1 -->
			<div class="bg-surface-container-lowest p-space-lg rounded-lg flex flex-col justify-between shadow-sm border border-rule-grey/20">
				<div class="flex flex-col gap-space-md">
					<div class="w-10 h-10 rounded bg-primary/10 flex items-center justify-center text-primary">
						<span class="material-symbols-outlined text-[24px]">balance</span>
					</div>
					<h3 class="font-headline-md text-headline-md text-on-surface font-semibold">
						<?php esc_html_e( 'Demographic Invariance & DIF', 'core16' ); ?>
					</h3>
					<p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">
						<?php esc_html_e( 'Every item undergoes rigorous Differential Item Functioning (DIF) screening via the Mantel-Haenszel procedure. Items showing demographic divergence (effect size d > 0.05) are systematically excised during calibration.', 'core16' ); ?>
					</p>
				</div>
				<div class="mt-space-lg pt-space-md border-t border-surface-container-high flex flex-col gap-space-xs font-label-mono-sm text-label-mono-sm">
					<div class="flex justify-between text-on-surface">
						<span><?php esc_html_e( 'EEOC Adverse Impact Ratio:', 'core16' ); ?></span>
						<span class="font-semibold text-primary"><?php esc_html_e( '1.00 (Zero Disparity)', 'core16' ); ?></span>
					</div>
					<div class="flex justify-between text-on-surface-variant">
						<span><?php esc_html_e( 'Mantel-Haenszel DIF:', 'core16' ); ?></span>
						<span><?php esc_html_e( 'd < 0.02 across genders', 'core16' ); ?></span>
					</div>
				</div>
			</div>

			<!-- Column 2 -->
			<div class="bg-surface-container-lowest p-space-lg rounded-lg flex flex-col justify-between shadow-sm border border-rule-grey/20">
				<div class="flex flex-col gap-space-md">
					<div class="w-10 h-10 rounded bg-secondary/10 flex items-center justify-center text-secondary">
						<span class="material-symbols-outlined text-[24px]">public</span>
					</div>
					<h3 class="font-headline-md text-headline-md text-on-surface font-semibold">
						<?php esc_html_e( 'Cross-Cultural IRT Calibration', 'core16' ); ?>
					</h3>
					<p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">
						<?php esc_html_e( 'Calibrated across distinct executive cohorts across North America, EMEA, APAC, and LATAM. Translation pipelines leverage 3-stage back-translation and Item Response Theory (IRT) item-parameter equivalence checks.', 'core16' ); ?>
					</p>
				</div>
				<div class="mt-space-lg pt-space-md border-t border-surface-container-high flex flex-col gap-space-xs font-label-mono-sm text-label-mono-sm">
					<div class="flex justify-between text-on-surface">
						<span><?php esc_html_e( 'Cross-Cultural Invariance:', 'core16' ); ?></span>
						<span class="font-semibold text-secondary"><?php esc_html_e( 'Scalar Invariance Confirmed', 'core16' ); ?></span>
					</div>
					<div class="flex justify-between text-on-surface-variant">
						<span><?php esc_html_e( 'Language Registrations:', 'core16' ); ?></span>
						<span><?php esc_html_e( '18 Validated Locales', 'core16' ); ?></span>
					</div>
				</div>
			</div>

			<!-- Column 3 -->
			<div class="bg-surface-container-lowest p-space-lg rounded-lg flex flex-col justify-between shadow-sm border border-rule-grey/20">
				<div class="flex flex-col gap-space-md">
					<div class="w-10 h-10 rounded bg-primary-container/20 flex items-center justify-center text-on-primary-container">
						<span class="material-symbols-outlined text-[24px]">workspace_premium</span>
					</div>
					<h3 class="font-headline-md text-headline-md text-on-surface font-semibold">
						<?php esc_html_e( 'Seniority & Tenure Normalization', 'core16' ); ?>
					</h3>
					<p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">
						<?php esc_html_e( 'Baseline norms are weighted by leadership tier to ensure executive directors and emergent talents are evaluated on equivalent behavioral baselines without confounding career longevity with intrinsic adaptability.', 'core16' ); ?>
					</p>
				</div>
				<div class="mt-space-lg pt-space-md border-t border-surface-container-high flex flex-col gap-space-xs font-label-mono-sm text-label-mono-sm">
					<div class="flex justify-between text-on-surface">
						<span><?php esc_html_e( 'Tenure Bias Correction:', 'core16' ); ?></span>
						<span class="font-semibold text-primary"><?php esc_html_e( 'Controlled (η² < .008)', 'core16' ); ?></span>
					</div>
					<div class="flex justify-between text-on-surface-variant">
						<span><?php esc_html_e( 'Stratified Samples:', 'core16' ); ?></span>
						<span><?php esc_html_e( '5 Leadership Tiers', 'core16' ); ?></span>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
