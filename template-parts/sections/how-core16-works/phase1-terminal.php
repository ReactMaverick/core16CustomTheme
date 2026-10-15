<?php
/**
 * How Core16 Works - Phase 1 Assessment Experience Section
 *
 * @package Core16
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<section class="w-full bg-[#FAFAF7] text-midnight px-margin-sm lg:px-margin-lg py-20 border-b border-rule-grey">
	<div class="max-w-[1440px] mx-auto space-y-12">
		<div class="max-w-2xl space-y-3">
			<span class="font-mono text-xs text-core-teal uppercase tracking-widest font-semibold"><?php esc_html_e( 'Phase 01 // Cognitive Sampling', 'core16' ); ?></span>
			<h2 class="font-headline text-2xl sm:text-3xl lg:text-4xl tracking-tight text-midnight font-bold">
				<?php esc_html_e( 'Minimal Friction. Zero Gamification.', 'core16' ); ?>
			</h2>
			<p class="font-body text-sm text-slate-subtle leading-relaxed">
				<?php esc_html_e( 'Engineered for cognitive authenticity. We intentionally discard playful animations and caricatures in favor of a clinical stimulus-response terminal calibrated to measure split-second executive priority under ambiguity.', 'core16' ); ?>
			</p>
		</div>

		<!-- UI Terminal Mockup -->
		<div class="w-full bg-white border border-rule-grey rounded shadow-sm overflow-hidden">
			<!-- Header -->
			<div class="bg-mist border-b border-rule-grey px-6 py-4 flex flex-wrap items-center justify-between gap-4">
				<div class="flex items-center gap-3">
					<span class="w-2.5 h-2.5 rounded-full bg-core-teal"></span>
					<span class="font-mono text-xs text-midnight font-semibold uppercase tracking-wider">
						<?php esc_html_e( 'ITEM 24 OF 84 // LATENT CONSTRUCT: STRATEGIC FORESIGHT', 'core16' ); ?>
					</span>
				</div>
				<div class="flex items-center gap-6 font-mono text-[11px] text-slate-subtle">
					<div class="flex items-center gap-1.5">
						<span class="material-symbols-outlined text-[16px] text-core-teal">schedule</span>
						<span><?php esc_html_e( '03:42 ELAPSED (NORM: 03:30 - 04:15)', 'core16' ); ?></span>
					</div>
					<div class="flex items-center gap-1.5 hidden sm:flex">
						<span class="material-symbols-outlined text-[16px] text-core-teal">verified</span>
						<span><?php esc_html_e( 'CI RATIO: 95.4%', 'core16' ); ?></span>
					</div>
				</div>
			</div>

			<!-- Stimulus & Continuum -->
			<div class="p-8 lg:p-14 space-y-10">
				<div class="max-w-3xl space-y-2">
					<span class="font-mono text-xs uppercase text-slate-subtle tracking-wider"><?php esc_html_e( 'Stimulus Item #24', 'core16' ); ?></span>
					<h3 class="font-headline text-xl sm:text-2xl text-midnight font-medium leading-snug">
						<?php esc_html_e( '“When confronted with ambiguous market volatility, I prioritize rapid systemic hypothesis iteration over waiting for exhaustive empirical confirmation.”', 'core16' ); ?>
					</h3>
				</div>

				<!-- Continuous Likert Track -->
				<div class="pt-4 pb-2 space-y-6">
					<div class="flex justify-between items-center font-mono text-xs uppercase tracking-wider text-slate-subtle">
						<span><?php esc_html_e( '-3.0 SD (Strongly Disagree)', 'core16' ); ?></span>
						<span class="text-midnight font-bold bg-[#EAEFEF] px-2 py-0.5 rounded border border-rule-grey"><?php esc_html_e( '0.0 (Indifferent / Contextual)', 'core16' ); ?></span>
						<span class="text-core-teal font-bold"><?php esc_html_e( '+3.0 SD (Strongly Agree)', 'core16' ); ?></span>
					</div>
					<div class="relative py-4">
						<div class="w-full h-2 bg-mist rounded-full relative">
							<div class="absolute left-[50%] right-[18%] h-full bg-core-teal/25 rounded-full"></div>
							<div class="absolute left-[82%] -top-2 -translate-x-1/2 flex flex-col items-center">
								<div class="w-5 h-5 rounded-full bg-core-teal border-2 border-white shadow flex items-center justify-center">
									<span class="w-1.5 h-1.5 rounded-full bg-white"></span>
								</div>
								<span class="mt-2 font-mono text-xs text-white font-bold bg-[#00696D] px-2 py-0.5 rounded shadow-sm border border-core-teal">+2.1 SD</span>
							</div>
						</div>
					</div>
					<div class="grid grid-cols-7 text-center font-body text-xs text-slate-subtle pt-2 border-t border-rule-grey">
						<div><?php esc_html_e( 'Definite Rejection', 'core16' ); ?></div>
						<div class="hidden sm:block"><?php esc_html_e( 'Substantial Resistance', 'core16' ); ?></div>
						<div class="hidden sm:block"><?php esc_html_e( 'Mild Hesitance', 'core16' ); ?></div>
						<div class="font-bold text-midnight"><?php esc_html_e( 'Neutral Boundary', 'core16' ); ?></div>
						<div class="hidden sm:block"><?php esc_html_e( 'Mild Lean', 'core16' ); ?></div>
						<div class="hidden sm:block"><?php esc_html_e( 'High Concordance', 'core16' ); ?></div>
						<div class="text-core-teal font-bold"><?php esc_html_e( 'Decisive Affirmation', 'core16' ); ?></div>
					</div>
				</div>

				<!-- Telemetry Panel -->
				<div class="p-4 bg-[#F7F9FF] border border-rule-grey rounded flex flex-col md:flex-row items-center justify-between gap-4 font-mono text-xs">
					<div class="flex flex-wrap items-center gap-4 text-midnight">
						<div class="flex items-center gap-1.5">
							<span class="material-symbols-outlined text-[16px] text-core-teal">timer</span>
							<span><?php esc_html_e( 'Response Latency:', 'core16' ); ?> <strong class="font-bold">1,840ms</strong> (Optimal processing band)</span>
						</div>
						<span class="text-rule-grey hidden md:inline">|</span>
						<div class="flex items-center gap-1.5">
							<span class="material-symbols-outlined text-[16px] text-core-teal">bolt</span>
							<span><?php esc_html_e( 'Consistency Correlation:', 'core16' ); ?> <strong class="font-bold">r = 0.94 (Verified)</strong></span>
						</div>
					</div>
					<div class="flex items-center gap-2 text-midnight font-medium">
						<span class="w-2.5 h-2.5 rounded-full bg-core-teal"></span>
						<span class="font-semibold"><?php esc_html_e( 'Zero Forced-Choice Bias Active', 'core16' ); ?></span>
					</div>
				</div>
			</div>
		</div>

		<!-- 3 Callout Tiles -->
		<div class="grid grid-cols-1 md:grid-cols-3 gap-6 pt-4">
			<div class="p-6 bg-white border border-rule-grey rounded space-y-3">
				<div class="w-10 h-10 rounded bg-mist flex items-center justify-center text-core-teal">
					<span class="material-symbols-outlined text-[22px]">tune</span>
				</div>
				<h4 class="font-headline text-base font-semibold text-midnight"><?php esc_html_e( 'Adaptive Item Weighting', 'core16' ); ?></h4>
				<p class="font-body text-xs text-slate-subtle leading-relaxed">
					<?php esc_html_e( 'Employs Latent Trait Maximum Likelihood Estimation (MLE). If an executive demonstrates extreme trait consensus early, the engine dynamically scales difficulty to detect nuanced sub-facet thresholds.', 'core16' ); ?>
				</p>
			</div>

			<div class="p-6 bg-white border border-rule-grey rounded space-y-3">
				<div class="w-10 h-10 rounded bg-mist flex items-center justify-center text-core-teal">
					<span class="material-symbols-outlined text-[22px]">fingerprint</span>
				</div>
				<h4 class="font-headline text-base font-semibold text-midnight"><?php esc_html_e( 'Consistency Verification', 'core16' ); ?></h4>
				<p class="font-body text-xs text-slate-subtle leading-relaxed">
					<?php esc_html_e( 'Continuous cross-pairing across distant test phases captures social desirability or deliberate impression management (Lie/Faking index < 1.4%), validating candidate candor.', 'core16' ); ?>
				</p>
			</div>

			<div class="p-6 bg-white border border-rule-grey rounded space-y-3">
				<div class="w-10 h-10 rounded bg-mist flex items-center justify-center text-core-teal">
					<span class="material-symbols-outlined text-[22px]">linear_scale</span>
				</div>
				<h4 class="font-headline text-base font-semibold text-midnight"><?php esc_html_e( 'Zero Forced-Choice Pressure', 'core16' ); ?></h4>
				<p class="font-body text-xs text-slate-subtle leading-relaxed">
					<?php esc_html_e( 'By rejecting artificial ipsative binary pairs (“Are you logical OR empathetic?”), our scalar continuum records situational ambivalence and high dual-capacity traits without truncation.', 'core16' ); ?>
				</p>
			</div>
		</div>
	</div>
</section>
