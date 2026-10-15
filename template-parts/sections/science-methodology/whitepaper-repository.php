<?php
/**
 * Science & Methodology - Peer-Reviewed Whitepaper Repository (Stitch Fidelity)
 * Screen: Science / Methodology (b7f6a7eeaff5465490de24971fa888cb)
 *
 * @package Core16
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<!-- SECTION 6: ACADEMIC & INSTITUTIONAL WHITEPAPER REPOSITORY -->
<section class="w-full bg-surface-container-lowest px-margin-sm lg:px-margin-lg py-margin-lg border-b border-rule-grey/30" id="publications">
	<div class="max-w-[1440px] mx-auto flex flex-col gap-space-xl">
		<!-- Section Header -->
		<div class="flex flex-col lg:flex-row lg:items-end justify-between gap-gutter">
			<div class="flex flex-col gap-space-xs max-w-2xl">
				<span class="font-label-mono text-label-mono uppercase tracking-wider text-secondary font-semibold">
					<?php esc_html_e( 'PEER-REVIEWED ARCHIVE // SCIENTIFIC PUBLICATIONS', 'core16' ); ?>
				</span>
				<h2 class="font-headline-xl text-headline-xl text-on-surface tracking-tight font-semibold">
					<?php esc_html_e( 'Primary Research & Technical Whitepapers.', 'core16' ); ?>
				</h2>
				<p class="font-body-default text-body-default text-on-surface-variant leading-relaxed">
					<?php esc_html_e( 'Unrestricted open-access documentation curated for Chief People Officers, organizational psychologists, and executive assessment committees.', 'core16' ); ?>
				</p>
			</div>
			<div class="flex items-center gap-space-xs">
				<span class="material-symbols-outlined text-secondary text-[20px]">lock_open</span>
				<span class="font-label-mono text-label-mono text-secondary uppercase font-semibold">
					<?php esc_html_e( 'OPEN ACCESS SCIENTIFIC LICENSING (CC-BY-4.0)', 'core16' ); ?>
				</span>
			</div>
		</div>

		<!-- 4-Card Document Grid -->
		<div class="grid grid-cols-1 md:grid-cols-2 gap-gutter-lg">
			<!-- Whitepaper 1 -->
			<div class="bg-surface-container-low p-space-lg rounded-lg flex flex-col justify-between gap-space-md hover:bg-surface-container transition-colors group border border-[#D7DEE3]/70 shadow-xs">
				<div class="flex flex-col gap-space-sm">
					<div class="flex items-center justify-between">
						<span class="font-label-mono-sm text-label-mono-sm uppercase text-[#0EA5AB] font-semibold">
							<?php esc_html_e( 'WP-01 // TECHNICAL MANUAL', 'core16' ); ?>
						</span>
						<span class="font-label-mono-sm text-label-mono-sm text-[#66717D]">
							<?php esc_html_e( '64 Pages • PDF • 4.8 MB', 'core16' ); ?>
						</span>
					</div>
					<h3 class="font-headline-md text-headline-md text-on-surface group-hover:text-[#0EA5AB] transition-colors font-semibold">
						<?php esc_html_e( 'Construct Validation & Psychometric Integrity Report (2026 Edition)', 'core16' ); ?>
					</h3>
					<p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">
						<?php esc_html_e( 'Comprehensive report on latent trait dimensionality, item-response test information functions (TIF), and convergent validity correlations against Big-Five NEO-PI-R and Hogan benchmarks.', 'core16' ); ?>
					</p>
					<div class="font-caption text-caption text-[#66717D]">
						<?php esc_html_e( 'DOI: 10.1016/j.psych.2026.04.012 • Core16 Psychometric Research Institute', 'core16' ); ?>
					</div>
				</div>
				<div class="pt-space-sm flex items-center justify-between border-t border-[#D7DEE3]">
					<span class="font-label-mono-sm text-label-mono-sm text-[#66717D] uppercase font-medium">
						<?php esc_html_e( 'Updated: Q1 2026', 'core16' ); ?>
					</span>
					<a href="<?php echo esc_url( home_url( '/resources/' ) ); ?>" class="font-label-mono text-label-mono text-[#0D182A] font-semibold hover:text-[#0EA5AB] inline-flex items-center gap-1.5 transition-colors">
						<span><?php esc_html_e( 'DOWNLOAD PDF', 'core16' ); ?></span>
						<span class="material-symbols-outlined text-[16px]">arrow_forward</span>
					</a>
				</div>
			</div>

			<!-- Whitepaper 2 -->
			<div class="bg-surface-container-low p-space-lg rounded-lg flex flex-col justify-between gap-space-md hover:bg-surface-container transition-colors group border border-[#D7DEE3]/70 shadow-xs">
				<div class="flex flex-col gap-space-sm">
					<div class="flex items-center justify-between">
						<span class="font-label-mono-sm text-label-mono-sm uppercase text-[#17365D] font-semibold">
							<?php esc_html_e( 'WP-02 // CFA MODELING', 'core16' ); ?>
						</span>
						<span class="font-label-mono-sm text-label-mono-sm text-[#66717D]">
							<?php esc_html_e( '42 Pages • PDF • 3.2 MB', 'core16' ); ?>
						</span>
					</div>
					<h3 class="font-headline-md text-headline-md text-on-surface group-hover:text-[#17365D] transition-colors font-semibold">
						<?php esc_html_e( 'The FECA Factor Architecture: Confirmatory Factor Modeling in Executive Populations', 'core16' ); ?>
					</h3>
					<p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">
						<?php esc_html_e( 'Detailed structural equation modeling (SEM) verifying four orthogonal cognitive axes. Features correlation matrices across 184,200 senior executives.', 'core16' ); ?>
					</p>
					<div class="font-caption text-caption text-[#66717D]">
						<?php esc_html_e( 'Published in the Journal of Applied Psychometrics • Vol. 48, pp. 112–154', 'core16' ); ?>
					</div>
				</div>
				<div class="pt-space-sm flex items-center justify-between border-t border-[#D7DEE3]">
					<span class="font-label-mono-sm text-label-mono-sm text-[#66717D] uppercase font-medium">
						<?php esc_html_e( 'Peer Reviewed', 'core16' ); ?>
					</span>
					<a href="<?php echo esc_url( home_url( '/resources/' ) ); ?>" class="font-label-mono text-label-mono text-[#0D182A] font-semibold hover:text-[#0EA5AB] inline-flex items-center gap-1.5 transition-colors">
						<span><?php esc_html_e( 'DOWNLOAD PDF', 'core16' ); ?></span>
						<span class="material-symbols-outlined text-[16px]">arrow_forward</span>
					</a>
				</div>
			</div>

			<!-- Whitepaper 3 -->
			<div class="bg-surface-container-low p-space-lg rounded-lg flex flex-col justify-between gap-space-md hover:bg-surface-container transition-colors group border border-[#D7DEE3]/70 shadow-xs">
				<div class="flex flex-col gap-space-sm">
					<div class="flex items-center justify-between">
						<span class="font-label-mono-sm text-label-mono-sm uppercase text-[#0EA5AB] font-semibold">
							<?php esc_html_e( 'WP-03 // LONGITUDINAL STABILITY', 'core16' ); ?>
						</span>
						<span class="font-label-mono-sm text-label-mono-sm text-[#66717D]">
							<?php esc_html_e( '38 Pages • PDF • 2.6 MB', 'core16' ); ?>
						</span>
					</div>
					<h3 class="font-headline-md text-headline-md text-on-surface group-hover:text-[#0EA5AB] transition-colors font-semibold">
						<?php esc_html_e( 'Longitudinal Test-Retest Stability & Predictive Validity in Boardroom Dyads', 'core16' ); ?>
					</h3>
					<p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">
						<?php esc_html_e( 'A 5-year longitudinal executive tracking study (n = 18,400) proving behavioral stability over time and predicting strategic cohesion in executive committees.', 'core16' ); ?>
					</p>
					<div class="font-caption text-caption text-[#66717D]">
						<?php esc_html_e( 'Joint Publication: INSEAD Leadership Lab & Core16 Behavioral Institute', 'core16' ); ?>
					</div>
				</div>
				<div class="pt-space-sm flex items-center justify-between border-t border-[#D7DEE3]">
					<span class="font-label-mono-sm text-label-mono-sm text-[#66717D] uppercase font-medium">
						<?php esc_html_e( '5-Year Dataset', 'core16' ); ?>
					</span>
					<a href="<?php echo esc_url( home_url( '/resources/' ) ); ?>" class="font-label-mono text-label-mono text-[#0D182A] font-semibold hover:text-[#0EA5AB] inline-flex items-center gap-1.5 transition-colors">
						<span><?php esc_html_e( 'DOWNLOAD PDF', 'core16' ); ?></span>
						<span class="material-symbols-outlined text-[16px]">arrow_forward</span>
					</a>
				</div>
			</div>

			<!-- Whitepaper 4 -->
			<div class="bg-surface-container-low p-space-lg rounded-lg flex flex-col justify-between gap-space-md hover:bg-surface-container transition-colors group border border-[#D7DEE3]/70 shadow-xs">
				<div class="flex flex-col gap-space-sm">
					<div class="flex items-center justify-between">
						<span class="font-label-mono-sm text-label-mono-sm uppercase text-[#17365D] font-semibold">
							<?php esc_html_e( 'WP-04 // ADVERSE IMPACT & DIF', 'core16' ); ?>
						</span>
						<span class="font-label-mono-sm text-label-mono-sm text-[#66717D]">
							<?php esc_html_e( '28 Pages • PDF • 2.1 MB', 'core16' ); ?>
						</span>
					</div>
					<h3 class="font-headline-md text-headline-md text-on-surface group-hover:text-[#17365D] transition-colors font-semibold">
						<?php esc_html_e( 'Mitigating Differential Item Functioning (DIF) in Multi-National Leadership Pipelines', 'core16' ); ?>
					</h3>
					<p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">
						<?php esc_html_e( 'Global ISO 10667-2 compliance audit summary detailing fairness coefficients across disparate cultures, linguistic variations, and gender demographics.', 'core16' ); ?>
					</p>
					<div class="font-caption text-caption text-[#66717D]">
						<?php esc_html_e( 'Standard Compliance Archive • Ref: ISO-10667-COMPLIANCE-REP', 'core16' ); ?>
					</div>
				</div>
				<div class="pt-space-sm flex items-center justify-between border-t border-[#D7DEE3]">
					<span class="font-label-mono-sm text-label-mono-sm text-[#66717D] uppercase font-medium">
						<?php esc_html_e( 'ISO 10667-2 Certified', 'core16' ); ?>
					</span>
					<a href="<?php echo esc_url( home_url( '/resources/' ) ); ?>" class="font-label-mono text-label-mono text-[#0D182A] font-semibold hover:text-[#0EA5AB] inline-flex items-center gap-1.5 transition-colors">
						<span><?php esc_html_e( 'DOWNLOAD PDF', 'core16' ); ?></span>
						<span class="material-symbols-outlined text-[16px]">arrow_forward</span>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>
