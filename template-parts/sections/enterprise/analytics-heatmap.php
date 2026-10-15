<?php
/**
 * Enterprise Page - Team Chemistry Heatmap & Dyadic Risk Vectoring SaaS Console (Stitch Fidelity)
 * Screen: "For Organisations" / Enterprise Solutions Page (20a9a1e7c43d4e27bbfe246b8a189ef1)
 *
 * @package Core16
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<!-- SECTION 3: INTERACTIVE TEAM HEATMAP SAAS MOCKUP (McKinsey / Lattice Rigor) -->
<section class="bg-surface-container-low py-space-xl lg:py-24 px-margin-sm lg:px-margin-lg border-b border-rule-grey/30" id="analytics">
	<div class="max-w-[1440px] mx-auto space-y-space-lg">
		<div class="flex flex-col lg:flex-row lg:items-end justify-between gap-space-md">
			<div>
				<span class="font-label-mono text-label-mono uppercase tracking-widest text-primary block mb-space-xs font-semibold">
					<?php esc_html_e( 'Enterprise Analytics Suite', 'core16' ); ?>
				</span>
				<h2 class="font-headline-xl text-headline-xl text-on-surface font-semibold tracking-tight">
					<?php esc_html_e( 'Team Chemistry Heatmap & Dyadic Risk Vectoring', 'core16' ); ?>
				</h2>
			</div>
			<div class="flex items-center gap-space-sm font-label-mono-sm text-label-mono-sm text-on-surface-variant bg-surface-container-lowest px-space-md py-space-sm rounded-lg shadow-sm border border-rule-grey/20">
				<span class="w-2.5 h-2.5 rounded-full bg-primary-container animate-pulse"></span>
				<span class="font-medium"><?php esc_html_e( 'Live Cohort: Global Tech Operations (N=342)', 'core16' ); ?></span>
			</div>
		</div>

		<!-- SaaS Console Outer Card -->
		<div class="bg-surface-container-lowest rounded-xl shadow-xl overflow-hidden border border-rule-grey/30">
			<!-- Mock Window Header Bar -->
			<div class="bg-inverse-surface px-space-lg py-space-md flex flex-wrap items-center justify-between gap-space-md text-inverse-on-surface">
				<div class="flex items-center gap-space-md">
					<div class="flex items-center gap-1.5">
						<span class="w-3 h-3 rounded-full bg-error"></span>
						<span class="w-3 h-3 rounded-full bg-secondary-fixed"></span>
						<span class="w-3 h-3 rounded-full bg-primary-fixed"></span>
					</div>
					<span class="font-label-mono text-label-mono uppercase tracking-wider text-surface-container-high font-semibold">
						<?php esc_html_e( 'Core16 Organization Console • Build 4.2-ENT', 'core16' ); ?>
					</span>
				</div>
				<div class="flex items-center gap-space-md">
					<span class="font-label-mono-sm text-label-mono-sm text-surface-container-high/80">
						<?php esc_html_e( 'Org View: Tier-1 Exec & Product Delivery', 'core16' ); ?>
					</span>
					<button class="px-space-sm py-1 bg-surface-container-highest/20 hover:bg-surface-container-highest/30 rounded text-xs font-label-mono text-primary-fixed transition-colors cursor-pointer">
						<?php esc_html_e( 'Export CSV / Audit Feed', 'core16' ); ?>
					</button>
				</div>
			</div>

			<!-- Dashboard Content Grid -->
			<div class="p-space-lg lg:p-space-xl grid grid-cols-1 lg:grid-cols-12 gap-gutter-lg">
				<!-- Left: Aggregated Team Profile Matrix -->
				<div class="lg:col-span-8 space-y-space-lg">
					<div>
						<div class="flex items-center justify-between mb-space-sm">
							<h4 class="font-headline-sm text-headline-sm text-on-surface font-semibold">
								<?php esc_html_e( 'Departmental Cognitive Distribution (FECA)', 'core16' ); ?>
							</h4>
							<span class="font-label-mono-sm text-label-mono-sm text-on-surface-variant">
								<?php esc_html_e( 'Aggregated Confidence 98.7%', 'core16' ); ?>
							</span>
						</div>
						<div class="overflow-x-auto rounded-lg border border-rule-grey/20">
							<table class="w-full text-left font-body-sm text-body-sm">
								<thead>
									<tr class="bg-surface-container font-label-mono text-label-mono text-on-surface-variant uppercase text-[11px]">
										<th class="p-space-sm"><?php esc_html_e( 'Business Unit', 'core16' ); ?></th>
										<th class="p-space-sm"><?php esc_html_e( 'Dominant Archetype', 'core16' ); ?></th>
										<th class="p-space-sm"><?php esc_html_e( 'Focus (F)', 'core16' ); ?></th>
										<th class="p-space-sm"><?php esc_html_e( 'Energy (E)', 'core16' ); ?></th>
										<th class="p-space-sm"><?php esc_html_e( 'Cognition (C)', 'core16' ); ?></th>
										<th class="p-space-sm"><?php esc_html_e( 'Action (A)', 'core16' ); ?></th>
										<th class="p-space-sm text-right"><?php esc_html_e( 'Equilibrium', 'core16' ); ?></th>
									</tr>
								</thead>
								<tbody class="divide-y divide-surface-container-high bg-surface-container-lowest">
									<tr class="hover:bg-surface-container-low transition-colors">
										<td class="p-space-sm font-semibold text-on-surface"><?php esc_html_e( 'Executive Committee', 'core16' ); ?></td>
										<td class="p-space-sm"><span class="px-2 py-0.5 rounded bg-primary-container/20 text-on-primary-container font-label-mono text-xs font-semibold"><?php esc_html_e( 'Architect (ARCH)', 'core16' ); ?></span></td>
										<td class="p-space-sm font-label-mono"><?php esc_html_e( '82% Internal', 'core16' ); ?></td>
										<td class="p-space-sm font-label-mono"><?php esc_html_e( '74% Dynamic', 'core16' ); ?></td>
										<td class="p-space-sm font-label-mono"><?php esc_html_e( '91% Conceptual', 'core16' ); ?></td>
										<td class="p-space-sm font-label-mono"><?php esc_html_e( '68% Decisive', 'core16' ); ?></td>
										<td class="p-space-sm font-label-mono text-right text-primary font-semibold">0.92</td>
									</tr>
									<tr class="hover:bg-surface-container-low transition-colors">
										<td class="p-space-sm font-semibold text-on-surface"><?php esc_html_e( 'Product Strategy', 'core16' ); ?></td>
										<td class="p-space-sm"><span class="px-2 py-0.5 rounded bg-secondary-container text-on-secondary-container font-label-mono text-xs font-semibold"><?php esc_html_e( 'Catalyst (CATL)', 'core16' ); ?></span></td>
										<td class="p-space-sm font-label-mono"><?php esc_html_e( '64% External', 'core16' ); ?></td>
										<td class="p-space-sm font-label-mono"><?php esc_html_e( '88% Dynamic', 'core16' ); ?></td>
										<td class="p-space-sm font-label-mono"><?php esc_html_e( '84% Conceptual', 'core16' ); ?></td>
										<td class="p-space-sm font-label-mono"><?php esc_html_e( '79% Iterative', 'core16' ); ?></td>
										<td class="p-space-sm font-label-mono text-right text-primary font-semibold">0.89</td>
									</tr>
									<tr class="hover:bg-surface-container-low transition-colors">
										<td class="p-space-sm font-semibold text-on-surface"><?php esc_html_e( 'Core Infrastructure Eng', 'core16' ); ?></td>
										<td class="p-space-sm"><span class="px-2 py-0.5 rounded bg-tertiary-container/30 text-on-tertiary-container font-label-mono text-xs font-semibold"><?php esc_html_e( 'Strategist (STRT)', 'core16' ); ?></span></td>
										<td class="p-space-sm font-label-mono"><?php esc_html_e( '92% Internal', 'core16' ); ?></td>
										<td class="p-space-sm font-label-mono"><?php esc_html_e( '42% Methodical', 'core16' ); ?></td>
										<td class="p-space-sm font-label-mono"><?php esc_html_e( '95% Empirical', 'core16' ); ?></td>
										<td class="p-space-sm font-label-mono"><?php esc_html_e( '88% Structured', 'core16' ); ?></td>
										<td class="p-space-sm font-label-mono text-right text-primary font-semibold">0.95</td>
									</tr>
									<tr class="hover:bg-surface-container-low transition-colors">
										<td class="p-space-sm font-semibold text-on-surface"><?php esc_html_e( 'Revenue Operations', 'core16' ); ?></td>
										<td class="p-space-sm"><span class="px-2 py-0.5 rounded bg-primary/10 text-primary font-label-mono text-xs font-semibold"><?php esc_html_e( 'Synthesizer (SYNT)', 'core16' ); ?></span></td>
										<td class="p-space-sm font-label-mono"><?php esc_html_e( '76% External', 'core16' ); ?></td>
										<td class="p-space-sm font-label-mono"><?php esc_html_e( '69% Dynamic', 'core16' ); ?></td>
										<td class="p-space-sm font-label-mono"><?php esc_html_e( '72% Empirical', 'core16' ); ?></td>
										<td class="p-space-sm font-label-mono"><?php esc_html_e( '92% Decisive', 'core16' ); ?></td>
										<td class="p-space-sm font-label-mono text-right text-primary font-semibold">0.86</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>

					<!-- Departmental FECA Vector Variance Chart (SVG) -->
					<div class="bg-surface-container p-space-md rounded-xl space-y-space-sm border border-rule-grey/20">
						<div class="flex items-center justify-between">
							<span class="font-label-mono-sm text-label-mono-sm uppercase text-on-surface-variant font-semibold">
								<?php esc_html_e( 'Cognitive Spectrum Variance Band (N=342)', 'core16' ); ?>
							</span>
							<span class="font-label-mono-sm text-label-mono-sm text-primary font-semibold">
								<?php esc_html_e( 'Variance σ = 1.14', 'core16' ); ?>
							</span>
						</div>
						<!-- Clean Responsive Inline SVG Graph -->
						<div class="w-full h-24">
							<svg class="w-full h-full" preserveAspectRatio="none" viewBox="0 0 600 80">
								<path d="M 0 40 Q 75 10, 150 35 T 300 25 T 450 55 T 600 30 L 600 80 L 0 80 Z" fill="rgba(14, 165, 171, 0.15)"></path>
								<path d="M 0 40 Q 75 10, 150 35 T 300 25 T 450 55 T 600 30" fill="none" stroke="#00696d" stroke-width="2.5"></path>
								<circle cx="150" cy="35" fill="#00696d" r="4"></circle>
								<circle cx="300" cy="25" fill="#00696d" r="4"></circle>
								<circle cx="450" cy="55" fill="#00696d" r="4"></circle>
							</svg>
						</div>
						<div class="grid grid-cols-4 text-center font-label-mono-sm text-label-mono-sm text-on-surface-variant pt-1 border-t border-rule-grey/20">
							<div><?php esc_html_e( 'Focus Calibration', 'core16' ); ?></div>
							<div><?php esc_html_e( 'Energy Vector', 'core16' ); ?></div>
							<div><?php esc_html_e( 'Cognition Rhythm', 'core16' ); ?></div>
							<div><?php esc_html_e( 'Action Velocity', 'core16' ); ?></div>
						</div>
					</div>
				</div>

				<!-- Right: Real-time Communication Risk Flags & Match Score -->
				<div class="lg:col-span-4 space-y-space-md">
					<div class="bg-surface-container-high/60 p-space-md rounded-xl space-y-space-md border border-rule-grey/20">
						<div class="flex items-center justify-between">
							<span class="font-label-mono-sm text-label-mono-sm text-on-surface-variant uppercase font-semibold">
								<?php esc_html_e( 'Automated Dyad Flags', 'core16' ); ?>
							</span>
							<span class="material-symbols-outlined text-primary text-base">radar</span>
						</div>
						<!-- Flag 1: Red -->
						<div class="p-space-sm bg-surface-container-lowest rounded-lg border-l-4 border-error space-y-1 shadow-xs">
							<div class="flex justify-between items-center">
								<span class="font-label-mono-sm text-label-mono-sm text-error font-semibold"><?php esc_html_e( 'HIGH CONSENSUS FRICTION', 'core16' ); ?></span>
								<span class="font-caption text-caption text-on-surface-variant"><?php esc_html_e( 'Alert ID #982', 'core16' ); ?></span>
							</div>
							<p class="font-body-sm text-body-sm text-on-surface font-semibold"><?php esc_html_e( 'Ops ↔ Product Strategy Dyad', 'core16' ); ?></p>
							<p class="font-caption text-caption text-on-surface-variant leading-relaxed">
								<?php esc_html_e( 'Extreme variance in action tolerance (92% Decisive vs. 79% Iterative). Projected friction on sprint scope freezes.', 'core16' ); ?>
							</p>
						</div>
						<!-- Flag 2: Amber -->
						<div class="p-space-sm bg-surface-container-lowest rounded-lg border-l-4 border-secondary space-y-1 shadow-xs">
							<div class="flex justify-between items-center">
								<span class="font-label-mono-sm text-label-mono-sm text-secondary font-semibold"><?php esc_html_e( 'COGNITIVE REDUNDANCY', 'core16' ); ?></span>
								<span class="font-caption text-caption text-on-surface-variant"><?php esc_html_e( 'Alert ID #985', 'core16' ); ?></span>
							</div>
							<p class="font-body-sm text-body-sm text-on-surface font-semibold"><?php esc_html_e( 'Core Eng Architecture Lead Pair', 'core16' ); ?></p>
							<p class="font-caption text-caption text-on-surface-variant leading-relaxed">
								<?php esc_html_e( 'Identical STRT profiles with 95% Empirical bias. Low creative counter-weight detected for Q3 roadmap innovation.', 'core16' ); ?>
							</p>
						</div>
					</div>

					<!-- Match Score Index Widget -->
					<div class="bg-inverse-surface text-inverse-on-surface p-space-md rounded-xl space-y-space-xs border border-white/10 shadow-sm">
						<div class="flex justify-between items-center">
							<span class="font-label-mono-sm text-label-mono-sm text-primary-fixed uppercase font-semibold"><?php esc_html_e( 'Role Congruence', 'core16' ); ?></span>
							<span class="font-headline-sm text-headline-sm text-primary-fixed font-bold">96.8%</span>
						</div>
						<div class="font-body-sm text-body-sm text-surface-container-high">
							<?php esc_html_e( 'Senior Director of Engineering Bench Candidate • Verified', 'core16' ); ?>
						</div>
						<div class="w-full bg-surface-container-highest/20 h-1.5 rounded-full overflow-hidden mt-2">
							<div class="bg-primary-container h-full rounded-full" style="width: 96.8%"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
