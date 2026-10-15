<?php
/**
 * Enterprise Page - C-Suite Operating Scenarios Interactive 4-Tab Matrix (Stitch Fidelity)
 * Screen: "For Organisations" / Enterprise Solutions Page (20a9a1e7c43d4e27bbfe246b8a189ef1)
 *
 * @package Core16
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<!-- SECTION 2: ORGANIZATIONAL USE CASES (Interactive 4-Tab Matrix) -->
<section class="bg-surface py-space-xl lg:py-24 px-margin-sm lg:px-margin-lg border-b border-rule-grey/30" id="solutions">
	<div class="max-w-[1440px] mx-auto">
		<div class="max-w-2xl mb-space-xl">
			<span class="font-label-mono text-label-mono uppercase tracking-widest text-primary block mb-space-xs font-semibold">
				<?php esc_html_e( 'C-Suite Operating Scenarios', 'core16' ); ?>
			</span>
			<h2 class="font-headline-xl text-headline-xl text-on-surface font-semibold tracking-tight">
				<?php esc_html_e( 'Psychometric Infrastructure for Every Phase of Enterprise Scale', 'core16' ); ?>
			</h2>
			<p class="font-body-default text-body-default text-on-surface-variant mt-2 leading-relaxed">
				<?php esc_html_e( 'Replace subjective gut instinct with statistical psychometric validation. Core16 integrates into talent pipelines from executive onboarding to cross-entity mergers.', 'core16' ); ?>
			</p>
		</div>

		<!-- Interactive Tab Component -->
		<div class="w-full" id="useCaseTabs">
			<!-- Tab Navigation Buttons -->
			<div class="grid grid-cols-2 lg:grid-cols-4 gap-space-sm bg-surface-container-high p-space-xs rounded-xl mb-space-lg">
				<button class="tab-btn px-space-md py-space-sm rounded-lg text-left transition-all duration-200 bg-surface-container-lowest text-primary font-semibold shadow-sm flex items-center justify-between cursor-pointer" data-tab="0" onclick="switchTab(0)">
					<span class="font-body-medium text-body-medium"><?php esc_html_e( '1. Executive Hiring', 'core16' ); ?></span>
					<span class="material-symbols-outlined text-sm">badge</span>
				</button>
				<button class="tab-btn px-space-md py-space-sm rounded-lg text-left transition-all duration-200 text-on-surface-variant hover:text-on-surface flex items-center justify-between cursor-pointer" data-tab="1" onclick="switchTab(1)">
					<span class="font-body-medium text-body-medium"><?php esc_html_e( '2. Team Friction', 'core16' ); ?></span>
					<span class="material-symbols-outlined text-sm">sync_problem</span>
				</button>
				<button class="tab-btn px-space-md py-space-sm rounded-lg text-left transition-all duration-200 text-on-surface-variant hover:text-on-surface flex items-center justify-between cursor-pointer" data-tab="2" onclick="switchTab(2)">
					<span class="font-body-medium text-body-medium"><?php esc_html_e( '3. Succession Cadence', 'core16' ); ?></span>
					<span class="material-symbols-outlined text-sm">stairs</span>
				</button>
				<button class="tab-btn px-space-md py-space-sm rounded-lg text-left transition-all duration-200 text-on-surface-variant hover:text-on-surface flex items-center justify-between cursor-pointer" data-tab="3" onclick="switchTab(3)">
					<span class="font-body-medium text-body-medium"><?php esc_html_e( '4. Post-Merger M&A', 'core16' ); ?></span>
					<span class="material-symbols-outlined text-sm">handshake</span>
				</button>
			</div>

			<!-- Tab Content Panels -->
			<!-- Panel 0: Executive Hiring -->
			<div class="tab-panel grid grid-cols-1 lg:grid-cols-12 gap-gutter-lg items-center bg-surface-container-lowest rounded-xl p-space-lg lg:p-space-xl border border-rule-grey/20 shadow-sm" id="panel-0">
				<div class="lg:col-span-6 space-y-space-md">
					<div class="inline-block px-space-sm py-0.5 rounded bg-primary/10 text-primary font-label-mono-sm text-label-mono-sm uppercase font-semibold">
						<?php esc_html_e( 'Objective Fit • Zero Social Desirability Bias', 'core16' ); ?>
					</div>
					<h3 class="font-headline-lg text-headline-lg text-on-surface font-semibold">
						<?php esc_html_e( 'Eliminate Mis-Hires at the VP and C-Suite Level.', 'core16' ); ?>
					</h3>
					<p class="font-body-lead text-body-lead text-on-surface-variant leading-relaxed">
						<?php esc_html_e( 'Executive candidates are adept at faking conventional behavioral interviews. Core16 deploy forced-choice paired vectors and semantic calibration to reveal innate cognitive operating rhythms.', 'core16' ); ?>
					</p>
					<ul class="space-y-space-sm text-on-surface font-body-default text-body-default">
						<li class="flex items-start gap-space-sm">
							<span class="material-symbols-outlined text-primary mt-0.5">check_circle</span>
							<span><strong><?php esc_html_e( 'Role Baseline Construction:', 'core16' ); ?></strong> <?php esc_html_e( 'Define required FECA spectrum parameters based on outgoing success metrics.', 'core16' ); ?></span>
						</li>
						<li class="flex items-start gap-space-sm">
							<span class="material-symbols-outlined text-primary mt-0.5">check_circle</span>
							<span><strong><?php esc_html_e( 'Adverse Impact Defense:', 'core16' ); ?></strong> <?php esc_html_e( 'Complete neutrality across demographic cohorts via Continuous Item Calibrations.', 'core16' ); ?></span>
						</li>
						<li class="flex items-start gap-space-sm">
							<span class="material-symbols-outlined text-primary mt-0.5">check_circle</span>
							<span><strong><?php esc_html_e( 'Leadership Team Complementarity:', 'core16' ); ?></strong> <?php esc_html_e( "Test how the incoming leader alters the executive room's cognitive consensus.", 'core16' ); ?></span>
						</li>
					</ul>
				</div>
				<div class="lg:col-span-6 bg-surface-container rounded-xl p-space-lg space-y-space-md border border-rule-grey/20">
					<div class="flex justify-between items-center">
						<span class="font-label-mono text-label-mono text-on-surface-variant uppercase font-medium"><?php esc_html_e( 'Candidate Dossier Comparison', 'core16' ); ?></span>
						<span class="font-label-mono-sm text-label-mono-sm text-primary font-semibold"><?php esc_html_e( 'MATCH SCORE: 96.4%', 'core16' ); ?></span>
					</div>
					<div class="space-y-space-sm">
						<div class="bg-surface-container-lowest p-space-md rounded-lg border border-rule-grey/10">
							<div class="flex justify-between font-label-mono-sm text-label-mono-sm text-on-surface-variant">
								<span><?php esc_html_e( 'STRATEGIC CONVERGENCE (SC)', 'core16' ); ?></span>
								<span class="text-on-surface font-semibold"><?php esc_html_e( '94th Percentile', 'core16' ); ?></span>
							</div>
							<div class="w-full bg-surface-container-high h-2 rounded-full mt-2 overflow-hidden">
								<div class="bg-primary h-2 rounded-full" style="width: 94%"></div>
							</div>
						</div>
						<div class="bg-surface-container-lowest p-space-md rounded-lg border border-rule-grey/10">
							<div class="flex justify-between font-label-mono-sm text-label-mono-sm text-on-surface-variant">
								<span><?php esc_html_e( 'AMBIGUITY TOLERANCE (AT)', 'core16' ); ?></span>
								<span class="text-on-surface font-semibold"><?php esc_html_e( '88th Percentile', 'core16' ); ?></span>
							</div>
							<div class="w-full bg-surface-container-high h-2 rounded-full mt-2 overflow-hidden">
								<div class="bg-primary-container h-2 rounded-full" style="width: 88%"></div>
							</div>
						</div>
						<div class="bg-surface-container-lowest p-space-md rounded-lg border border-rule-grey/10">
							<div class="flex justify-between font-label-mono-sm text-label-mono-sm text-on-surface-variant">
								<span><?php esc_html_e( 'DELEGATIVE CADENCE (DC)', 'core16' ); ?></span>
								<span class="text-on-surface font-semibold"><?php esc_html_e( '91st Percentile', 'core16' ); ?></span>
							</div>
							<div class="w-full bg-surface-container-high h-2 rounded-full mt-2 overflow-hidden">
								<div class="bg-secondary h-2 rounded-full" style="width: 91%"></div>
							</div>
						</div>
					</div>
					<div class="p-space-sm bg-surface-container-low rounded-lg text-on-surface-variant font-caption text-caption flex items-center gap-space-xs border border-rule-grey/10">
						<span class="material-symbols-outlined text-base text-primary">shield_person</span>
						<span><?php esc_html_e( 'Deterministic validation completed. Zero socially desirable deviation flagged.', 'core16' ); ?></span>
					</div>
				</div>
			</div>

			<!-- Panel 1: Team Friction (Hidden by default) -->
			<div class="tab-panel hidden grid-cols-1 lg:grid-cols-12 gap-gutter-lg items-center bg-surface-container-lowest rounded-xl p-space-lg lg:p-space-xl border border-rule-grey/20 shadow-sm" id="panel-1">
				<div class="lg:col-span-6 space-y-space-md">
					<div class="inline-block px-space-sm py-0.5 rounded bg-primary/10 text-primary font-label-mono-sm text-label-mono-sm uppercase font-semibold">
						<?php esc_html_e( 'Dyadic Friction Diagnostics', 'core16' ); ?>
					</div>
					<h3 class="font-headline-lg text-headline-lg text-on-surface font-semibold">
						<?php esc_html_e( 'Resolve Cross-Functional Blockers Before Deadlines Are Missed.', 'core16' ); ?>
					</h3>
					<p class="font-body-lead text-body-lead text-on-surface-variant leading-relaxed">
						<?php esc_html_e( "When Product and Engineering stall, it's rarely a technical limitation—it's cognitive divergence. Core16 charts pairwise dyads to pinpoint exact friction nodes.", 'core16' ); ?>
					</p>
					<ul class="space-y-space-sm text-on-surface font-body-default text-body-default">
						<li class="flex items-start gap-space-sm">
							<span class="material-symbols-outlined text-primary mt-0.5">check_circle</span>
							<span><strong><?php esc_html_e( 'Pairwise Tension Mapping:', 'core16' ); ?></strong> <?php esc_html_e( 'Reveal communication syntax mismatches between key function leads.', 'core16' ); ?></span>
						</li>
						<li class="flex items-start gap-space-sm">
							<span class="material-symbols-outlined text-primary mt-0.5">check_circle</span>
							<span><strong><?php esc_html_e( 'Actionable Decoupling Protocol:', 'core16' ); ?></strong> <?php esc_html_e( 'Prescriptive playbooks to guide high-stakes syncs and architectural reviews.', 'core16' ); ?></span>
						</li>
					</ul>
				</div>
				<div class="lg:col-span-6 bg-surface-container rounded-xl p-space-lg space-y-space-md border border-rule-grey/20">
					<div class="font-label-mono text-label-mono text-error font-semibold flex items-center gap-space-xs">
						<span class="material-symbols-outlined text-base">warning</span>
						<span><?php esc_html_e( 'DETECTED DYAD FRICTION: VP ENG ↔ VP PRODUCT', 'core16' ); ?></span>
					</div>
					<div class="space-y-space-sm text-body-sm font-body-sm">
						<div class="bg-surface-container-lowest p-space-md rounded-lg border-l-4 border-error shadow-xs">
							<div class="font-semibold text-on-surface"><?php esc_html_e( 'Cognitive Speed Mismatch (FECA-E Vector)', 'core16' ); ?></div>
							<div class="text-on-surface-variant mt-1"><?php esc_html_e( 'VP Eng operates in deep structural synthesis; VP Product demands rapid incremental pivots. Divergence creates perceived indecision.', 'core16' ); ?></div>
						</div>
						<div class="bg-surface-container-lowest p-space-md rounded-lg border-l-4 border-primary shadow-xs">
							<div class="font-semibold text-on-surface"><?php esc_html_e( 'Remediation Cadence', 'core16' ); ?></div>
							<div class="text-on-surface-variant mt-1"><?php esc_html_e( 'Implement asynchronous architectural brief reviews 24h prior to roadmap lock-in meetings.', 'core16' ); ?></div>
						</div>
					</div>
				</div>
			</div>

			<!-- Panel 2: Leadership Development (Hidden by default) -->
			<div class="tab-panel hidden grid-cols-1 lg:grid-cols-12 gap-gutter-lg items-center bg-surface-container-lowest rounded-xl p-space-lg lg:p-space-xl border border-rule-grey/20 shadow-sm" id="panel-2">
				<div class="lg:col-span-6 space-y-space-md">
					<div class="inline-block px-space-sm py-0.5 rounded bg-primary/10 text-primary font-label-mono-sm text-label-mono-sm uppercase font-semibold">
						<?php esc_html_e( 'Succession • Talent Calibration', 'core16' ); ?>
					</div>
					<h3 class="font-headline-lg text-headline-lg text-on-surface font-semibold">
						<?php esc_html_e( 'Map High-Potentials into Precise C-Suite Operating Profiles.', 'core16' ); ?>
					</h3>
					<p class="font-body-lead text-body-lead text-on-surface-variant leading-relaxed">
						<?php esc_html_e( 'Move beyond generic high-potential labels. Provide executives with high-resolution mirrors showing exactly how their decision habits scale from Director to President.', 'core16' ); ?>
					</p>
					<ul class="space-y-space-sm text-on-surface font-body-default text-body-default">
						<li class="flex items-start gap-space-sm">
							<span class="material-symbols-outlined text-primary mt-0.5">check_circle</span>
							<span><strong><?php esc_html_e( '9-Box Trait Integration:', 'core16' ); ?></strong> <?php esc_html_e( 'Anchor performance appraisals to empirical psychometric stability.', 'core16' ); ?></span>
						</li>
						<li class="flex items-start gap-space-sm">
							<span class="material-symbols-outlined text-primary mt-0.5">check_circle</span>
							<span><strong><?php esc_html_e( 'Targeted Executive Coaching:', 'core16' ); ?></strong> <?php esc_html_e( 'Equip executive coaches with granular FECA dimension vector data.', 'core16' ); ?></span>
						</li>
					</ul>
				</div>
				<div class="lg:col-span-6 bg-surface-container rounded-xl p-space-lg border border-rule-grey/20">
					<div class="bg-surface-container-lowest rounded-lg p-space-md space-y-space-md shadow-xs">
						<div class="flex justify-between items-center font-label-mono-sm text-label-mono-sm text-on-surface-variant">
							<span><?php esc_html_e( 'SUCCESSION READINESS MATRIX', 'core16' ); ?></span>
							<span class="text-primary font-semibold"><?php esc_html_e( 'TIER-1 BENCH', 'core16' ); ?></span>
						</div>
						<div class="grid grid-cols-2 gap-space-sm text-center">
							<div class="p-space-sm bg-surface-container-high rounded">
								<div class="font-caption text-caption text-on-surface-variant"><?php esc_html_e( 'COO Trajectory', 'core16' ); ?></div>
								<div class="font-headline-sm text-headline-sm text-primary font-bold mt-0.5"><?php esc_html_e( '92% Ready', 'core16' ); ?></div>
							</div>
							<div class="p-space-sm bg-surface-container-high rounded">
								<div class="font-caption text-caption text-on-surface-variant"><?php esc_html_e( 'CTO Trajectory', 'core16' ); ?></div>
								<div class="font-headline-sm text-headline-sm text-secondary font-bold mt-0.5"><?php esc_html_e( '85% Ready', 'core16' ); ?></div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Panel 3: Post-Merger Cultural Integration (Hidden by default) -->
			<div class="tab-panel hidden grid-cols-1 lg:grid-cols-12 gap-gutter-lg items-center bg-surface-container-lowest rounded-xl p-space-lg lg:p-space-xl border border-rule-grey/20 shadow-sm" id="panel-3">
				<div class="lg:col-span-6 space-y-space-md">
					<div class="inline-block px-space-sm py-0.5 rounded bg-primary/10 text-primary font-label-mono-sm text-label-mono-sm uppercase font-semibold">
						<?php esc_html_e( 'M&A Integration Diagnostics', 'core16' ); ?>
					</div>
					<h3 class="font-headline-lg text-headline-lg text-on-surface font-semibold">
						<?php esc_html_e( 'Merge High-Yield Cultures Without Organizational Shock.', 'core16' ); ?>
					</h3>
					<p class="font-body-lead text-body-lead text-on-surface-variant leading-relaxed">
						<?php esc_html_e( 'Most post-acquisition value erosion stems from cultural friction. Core16 provides an empirical roadmap comparing acquired team dynamics with parent operating velocity.', 'core16' ); ?>
					</p>
					<ul class="space-y-space-sm text-on-surface font-body-default text-body-default">
						<li class="flex items-start gap-space-sm">
							<span class="material-symbols-outlined text-primary mt-0.5">check_circle</span>
							<span><strong><?php esc_html_e( 'Macro-Culture Heatmaps:', 'core16' ); ?></strong> <?php esc_html_e( 'Identify systemic discrepancies in decision velocity and risk tolerance.', 'core16' ); ?></span>
						</li>
						<li class="flex items-start gap-space-sm">
							<span class="material-symbols-outlined text-primary mt-0.5">check_circle</span>
							<span><strong><?php esc_html_e( 'Talent Flight Prevention:', 'core16' ); ?></strong> <?php esc_html_e( 'Safeguard critical key-personnel by matching them to compatible sponsor leaders.', 'core16' ); ?></span>
						</li>
					</ul>
				</div>
				<div class="lg:col-span-6 bg-surface-container rounded-xl p-space-lg border border-rule-grey/20">
					<div class="p-space-md bg-surface-container-lowest rounded-lg space-y-space-sm shadow-xs">
						<div class="font-label-mono-sm text-label-mono-sm text-on-surface-variant uppercase"><?php esc_html_e( 'Entity Harmony Variance', 'core16' ); ?></div>
						<div class="flex items-center justify-between text-body-sm font-body-sm">
							<span><?php esc_html_e( 'Parent Co. (Institutional)', 'core16' ); ?></span>
							<span class="font-label-mono font-bold text-primary"><?php esc_html_e( 'FECA-Structured', 'core16' ); ?></span>
						</div>
						<div class="w-full bg-surface-container-high h-2 rounded-full overflow-hidden">
							<div class="bg-primary h-2 rounded-full" style="width: 78%"></div>
						</div>
						<div class="flex items-center justify-between text-body-sm font-body-sm pt-2">
							<span><?php esc_html_e( 'Acquired Target (Agile Unit)', 'core16' ); ?></span>
							<span class="font-label-mono font-bold text-secondary"><?php esc_html_e( 'FECA-Adaptive', 'core16' ); ?></span>
						</div>
						<div class="w-full bg-surface-container-high h-2 rounded-full overflow-hidden">
							<div class="bg-secondary h-2 rounded-full" style="width: 86%"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
