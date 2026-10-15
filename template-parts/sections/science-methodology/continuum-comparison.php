<?php
/**
 * Science & Methodology - Type vs Trait Continuum (Fallacy of Binary Typology, Stitch Fidelity)
 * Screen: Science / Methodology (b7f6a7eeaff5465490de24971fa888cb)
 *
 * @package Core16
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<!-- SECTION 3: TYPE VS TRAIT CONTINUUM (CORE DIFFERENTIATOR) -->
<section class="w-full bg-surface-container-low px-margin-sm lg:px-margin-lg py-margin-lg border-b border-rule-grey/30">
	<div class="max-w-[1440px] mx-auto flex flex-col gap-space-xl">
		<!-- Section Header -->
		<div class="flex flex-col gap-space-xs max-w-3xl">
			<span class="font-label-mono text-label-mono uppercase tracking-wider text-secondary font-semibold">
				<?php esc_html_e( 'PARADIGM SHIFT // THE FALLACY OF THE BINARY TYPOLOGY', 'core16' ); ?>
			</span>
			<h2 class="font-headline-xl text-headline-xl text-on-surface tracking-tight font-semibold">
				<?php esc_html_e( 'Why Type Without Continuous Trait Scoring is Scientifically Obsolete.', 'core16' ); ?>
			</h2>
			<p class="font-body-default text-body-default text-on-surface-variant leading-relaxed">
				<?php esc_html_e( 'Classical typology instruments force continuous, bell-curved human cognitive traits into reductive, discrete bins. A candidate scoring 49% and one scoring 51% are arbitrarily assigned to opposite lifelong quadrants—creating high test-retest volatility and invalidating organizational talent decisions.', 'core16' ); ?>
			</p>
		</div>

		<!-- Comparative Side-by-Side Architectural Panels -->
		<div class="grid grid-cols-1 lg:grid-cols-2 gap-gutter-lg">
			<!-- Panel A: Classical Bimodal Trap -->
			<div class="bg-surface-container-lowest p-space-lg rounded-lg flex flex-col gap-space-md shadow-sm border border-rule-grey/20">
				<div class="flex items-center justify-between pb-space-xs">
					<div class="flex items-center gap-space-xs">
						<span class="w-2.5 h-2.5 rounded-full bg-[#66717D]"></span>
						<span class="font-label-mono text-label-mono uppercase font-semibold text-[#0D182A]">
							<?php esc_html_e( 'Classical Bimodal Assumption', 'core16' ); ?>
						</span>
					</div>
					<span class="font-label-mono-sm text-label-mono-sm uppercase text-[#66717D] font-medium bg-[#F1F5F6] px-2 py-0.5 rounded border border-[#D7DEE3]">
						<?php esc_html_e( 'Measurement Distortion: High', 'core16' ); ?>
					</span>
				</div>
				<p class="font-body-sm text-body-sm text-[#3d494a] leading-relaxed">
					<?php esc_html_e( 'Artificial split forced at the exact 50% midpoint. Two individuals with nearly identical latent traits (49% vs 51%) receive radically contradictory profiles, leading to a documented 50%+ profile flip rate on 5-week retests.', 'core16' ); ?>
				</p>
				<div class="w-full bg-[#FAFAF7] border border-[#D7DEE3] p-space-md rounded-lg flex flex-col items-center justify-center">
					<svg class="w-full h-44 overflow-visible" fill="none" viewBox="0 0 460 160" xmlns="http://www.w3.org/2000/svg">
						<line stroke="#D7DEE3" stroke-dasharray="3 3" stroke-width="1" x1="20" x2="440" y1="130" y2="130"></line>
						<line stroke="#66717D" stroke-dasharray="4 2" stroke-width="1.5" x1="230" x2="230" y1="15" y2="140"></line>
						<path d="M 40 130 C 70 130, 90 40, 140 40 C 180 40, 200 115, 226 122" fill="none" stroke="#66717D" stroke-width="2"></path>
						<path d="M 40 130 C 70 130, 90 40, 140 40 C 180 40, 200 115, 226 122 L 226 130 L 40 130 Z" fill="#66717D" fill-opacity="0.08"></path>
						<path d="M 234 122 C 260 115, 280 40, 320 40 C 370 40, 390 130, 420 130" fill="none" stroke="#66717D" stroke-width="2"></path>
						<path d="M 234 122 C 260 115, 280 40, 320 40 C 370 40, 390 130, 420 130 L 420 130 L 234 130 Z" fill="#66717D" fill-opacity="0.08"></path>
						<circle cx="218" cy="115" fill="#66717D" r="4"></circle>
						<text class="font-label-mono-sm" fill="#17365D" font-size="10" font-weight="600" x="165" y="102"><?php esc_html_e( 'Candidate A: 49%', 'core16' ); ?></text>
						<circle cx="242" cy="115" fill="#66717D" r="4"></circle>
						<text class="font-label-mono-sm" fill="#17365D" font-size="10" font-weight="600" x="246" y="102"><?php esc_html_e( 'Candidate B: 51%', 'core16' ); ?></text>
						<rect fill="#F1F5F6" height="18" rx="2" stroke="#D7DEE3" width="74" x="193" y="10"></rect>
						<text class="font-label-mono-sm" fill="#66717D" font-size="9" font-weight="600" text-anchor="middle" x="230" y="22"><?php esc_html_e( 'CUTOFF: 50.0%', 'core16' ); ?></text>
						<text class="font-label-mono-sm" fill="#66717D" font-size="10" x="60" y="148"><?php esc_html_e( 'TYPE "INTUITIVE" [N]', 'core16' ); ?></text>
						<text class="font-label-mono-sm" fill="#66717D" font-size="10" x="320" y="148"><?php esc_html_e( 'TYPE "OBSERVANT" [S]', 'core16' ); ?></text>
					</svg>
				</div>
				<div class="space-y-space-xs font-body-sm text-body-sm text-[#3d494a] pt-space-xs">
					<div class="flex items-start gap-space-xs">
						<span class="material-symbols-outlined text-[#66717D] text-[18px] shrink-0 mt-0.5">remove_circle_outline</span>
						<span><strong><?php esc_html_e( 'Statistical Fallacy:', 'core16' ); ?></strong> <?php esc_html_e( 'True population distributions are unimodal Gaussian curves, not bimodal extremes.', 'core16' ); ?></span>
					</div>
					<div class="flex items-start gap-space-xs">
						<span class="material-symbols-outlined text-[#66717D] text-[18px] shrink-0 mt-0.5">remove_circle_outline</span>
						<span><strong><?php esc_html_e( 'Information Erasure:', 'core16' ); ?></strong> <?php esc_html_e( 'Drops continuous percentiles, destroying behavioral granularity needed for talent calibration.', 'core16' ); ?></span>
					</div>
				</div>
			</div>

			<!-- Panel B: Core16 FECA Integrated Continuum -->
			<div class="bg-surface-container-lowest p-space-lg rounded-lg flex flex-col gap-space-md shadow-sm border border-rule-grey/20">
				<div class="flex items-center justify-between pb-space-xs">
					<div class="flex items-center gap-space-xs">
						<span class="w-2.5 h-2.5 rounded-full bg-[#0EA5AB]"></span>
						<span class="font-label-mono text-label-mono uppercase font-semibold text-[#0D182A]">
							<?php esc_html_e( 'Core16 FECA Continuous Metric', 'core16' ); ?>
						</span>
					</div>
					<span class="font-label-mono-sm text-label-mono-sm uppercase text-[#0EA5AB] font-semibold bg-[#0EA5AB]/10 px-2 py-0.5 rounded border border-[#0EA5AB]/20">
						<?php esc_html_e( 'Standard Error: SEM ±1.48', 'core16' ); ?>
					</span>
				</div>
				<p class="font-body-sm text-body-sm text-[#3d494a] leading-relaxed">
					<?php esc_html_e( 'True Gaussian distribution modeling. Preserves individual percentile vector metrics (0–100%) paired with explicit 95% confidence intervals, mapping executive archetypes without truncating variance.', 'core16' ); ?>
				</p>
				<div class="w-full bg-[#FAFAF7] border border-[#D7DEE3] p-space-md rounded-lg flex flex-col items-center justify-center">
					<svg class="w-full h-44 overflow-visible" fill="none" viewBox="0 0 460 160" xmlns="http://www.w3.org/2000/svg">
						<line stroke="#D7DEE3" stroke-width="1" x1="20" x2="440" y1="130" y2="130"></line>
						<path d="M 30 130 C 80 130, 140 128, 180 95 C 205 70, 220 25, 230 25 C 240 25, 255 70, 280 95 C 320 128, 380 130, 430 130" fill="none" stroke="#0EA5AB" stroke-width="2.5"></path>
						<path d="M 30 130 C 80 130, 140 128, 180 95 C 205 70, 220 25, 230 25 C 240 25, 255 70, 280 95 C 320 128, 380 130, 430 130 L 430 130 L 30 130 Z" fill="#0EA5AB" fill-opacity="0.08"></path>
						<rect fill="#0EA5AB" fill-opacity="0.15" height="105" width="100" x="180" y="25"></rect>
						<line stroke="#0EA5AB" stroke-dasharray="3 3" stroke-width="1.5" x1="180" x2="180" y1="25" y2="130"></line>
						<line stroke="#0EA5AB" stroke-dasharray="3 3" stroke-width="1.5" x1="280" x2="280" y1="25" y2="130"></line>
						<line stroke="#17365D" stroke-width="2" x1="230" x2="230" y1="25" y2="130"></line>
						<circle cx="230" cy="25" fill="#0EA5AB" r="4"></circle>
						<rect fill="#F1F5F6" height="20" rx="2" stroke="#0EA5AB" stroke-width="1.5" width="116" x="172" y="9"></rect>
						<text class="font-label-mono-sm" fill="#17365D" font-size="9" font-weight="600" text-anchor="middle" x="230" y="22"><?php esc_html_e( '95% CI BAND (±1.48)', 'core16' ); ?></text>
						<text class="font-label-mono-sm" fill="#66717D" font-size="9" x="130" y="144">-2σ</text>
						<text class="font-label-mono-sm" fill="#66717D" font-size="9" x="180" y="144">-1σ</text>
						<text class="font-label-mono-sm font-semibold" fill="#0EA5AB" font-size="9" x="225" y="144">μ (50.0)</text>
						<text class="font-label-mono-sm" fill="#66717D" font-size="9" x="280" y="144">+1σ</text>
						<text class="font-label-mono-sm" fill="#66717D" font-size="9" x="330" y="144">+2σ</text>
					</svg>
				</div>
				<div class="space-y-space-xs font-body-sm text-body-sm text-[#3d494a] pt-space-xs">
					<div class="flex items-start gap-space-xs">
						<span class="material-symbols-outlined text-[#0EA5AB] text-[18px] shrink-0 mt-0.5">check_circle</span>
						<span><strong><?php esc_html_e( 'Continuous Percentile Retention:', 'core16' ); ?></strong> <?php esc_html_e( 'Preserves raw trait variance for nuanced organizational placement.', 'core16' ); ?></span>
					</div>
					<div class="flex items-start gap-space-xs">
						<span class="material-symbols-outlined text-[#0EA5AB] text-[18px] shrink-0 mt-0.5">check_circle</span>
						<span><strong><?php esc_html_e( 'Archetype Centroid Projection:', 'core16' ); ?></strong> <?php esc_html_e( 'Translates high-dimensional vector spaces into actionable executive mental models without data loss.', 'core16' ); ?></span>
					</div>
				</div>
			</div>
		</div>

		<!-- Detail Pillar Row -->
		<div class="grid grid-cols-1 md:grid-cols-3 gap-gutter pt-space-sm">
			<div class="bg-surface-container-lowest p-space-md rounded-lg flex flex-col gap-space-xs border border-rule-grey/20 shadow-xs">
				<span class="font-label-mono text-label-mono text-primary font-semibold"><?php esc_html_e( '01 / TRAIT CONTINUITY', 'core16' ); ?></span>
				<h3 class="font-headline-sm text-headline-sm text-on-surface font-semibold"><?php esc_html_e( 'Continuous Latent Scoring', 'core16' ); ?></h3>
				<p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">
					<?php esc_html_e( 'Traits are quantified on a calibrated 0.00 to 100.00 continuous scale, maintaining statistical variance rather than rounding into blunt archetypal boxes.', 'core16' ); ?>
				</p>
			</div>
			<div class="bg-surface-container-lowest p-space-md rounded-lg flex flex-col gap-space-xs border border-rule-grey/20 shadow-xs">
				<span class="font-label-mono text-label-mono text-primary font-semibold"><?php esc_html_e( '02 / MEASUREMENT PRECISION', 'core16' ); ?></span>
				<h3 class="font-headline-sm text-headline-sm text-on-surface font-semibold"><?php esc_html_e( 'Confidence Intervals & SEM', 'core16' ); ?></h3>
				<p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">
					<?php esc_html_e( 'Every candidate diagnostic output includes explicitly visualized standard error margins (SEM), alerting practitioners when a score approaches transitional domains.', 'core16' ); ?>
				</p>
			</div>
			<div class="bg-surface-container-lowest p-space-md rounded-lg flex flex-col gap-space-xs border border-rule-grey/20 shadow-xs">
				<span class="font-label-mono text-label-mono text-primary font-semibold"><?php esc_html_e( '03 / CONSTRUCT ISOLATION', 'core16' ); ?></span>
				<h3 class="font-headline-sm text-headline-sm text-on-surface font-semibold"><?php esc_html_e( 'Orthogonal Factor Independence', 'core16' ); ?></h3>
				<p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">
					<?php esc_html_e( 'The 4 FECA domains maintain near-zero cross-construct covariance (r < .11), guaranteeing that each axis isolates a distinct neuro-behavioral execution habit.', 'core16' ); ?>
				</p>
			</div>
		</div>
	</div>
</section>
