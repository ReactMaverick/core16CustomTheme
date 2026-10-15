<?php
/**
 * Individuals Page - Tri-Axis Developmental Matrix & Premium Personal Report Breakdown
 * Exact match with Stitch "For Individuals" Landing Page (Screen c97dfe44713248cdbdba807a9a4770ab)
 *
 * @package Core16
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$pillars_badge = get_field( 'ind_pillars_badge' ) ?: __( 'TRI-AXIS DEVELOPMENTAL MATRIX', 'core16' );
$pillars_title = get_field( 'ind_pillars_title' ) ?: __( 'Three Pillars of Personal Growth. Engineered for Measurable Momentum.', 'core16' );
$pillars_desc  = get_field( 'ind_pillars_desc' ) ?: __( 'Self-knowledge without tactical translation is a vanity metric. Core16 structures your diagnostic feedback into three surgical operating domains.', 'core16' );

$report_badge  = get_field( 'ind_report_badge' ) ?: __( 'UNCOMPROMISING DETAIL', 'core16' );
$report_title  = get_field( 'ind_report_title' ) ?: __( 'An Archival Document of Your Psychological Architecture.', 'core16' );
$report_desc   = get_field( 'ind_report_desc' ) ?: __( 'Unlike algorithmic screens that vanish with a browser refresh, your Core16 individual report is an exhaustive 30-page editorial monograph authored to be reread across every major career milestone.', 'core16' );
$report_image  = get_field( 'ind_report_image' ) ?: 'https://lh3.googleusercontent.com/aida-public/AB6AXuD5Ov-fZi4R3EO3a8rZHyVpkevIjGH3vVGh-GULdsM2ZDN8CXId3aJUiVhpoGSIfJsO1C3H4aoc2HG6Y9AIJ_QpgeFidTmc8-RfWGXSE6eOClBQZjjBZn-ft-9q4mKx5pncIX2ELGtv7PlhZCDHlI6HhB9jTU_gcjrFUuR5JfhdHD8u2Nxu6gqfBO5KE0fzC1pz4aN38-9Y4aMYFKjWzsbT66iGiGBJqNNrG56lBLeHK0MAGERgZBiW';
?>

<!-- Section 2: Three Pillars of Personal Growth -->
<section class="w-full bg-surface py-space-xl lg:py-margin-lg border-b border-surface-container-high">
	<div class="max-w-[1440px] mx-auto px-margin-sm lg:px-margin-lg">
		<!-- Section Header -->
		<div class="max-w-3xl mb-space-xl">
			<span class="font-label-mono-sm text-label-mono-sm text-primary uppercase tracking-widest block mb-space-xs">
				<?php echo esc_html( $pillars_badge ); ?>
			</span>
			<h2 class="font-headline-xl text-headline-xl text-on-surface font-bold tracking-tight">
				<?php echo esc_html( $pillars_title ); ?>
			</h2>
			<p class="font-body-lead text-body-lead text-on-surface-variant mt-space-sm">
				<?php echo esc_html( $pillars_desc ); ?>
			</p>
		</div>

		<!-- 3-Card Architectural Bento Grid -->
		<div class="grid grid-cols-1 lg:grid-cols-3 gap-gutter">
			<!-- Pillar 1 -->
			<div class="flex flex-col bg-surface-container-lowest rounded-xl border border-surface-container-high p-space-lg justify-between hover:border-primary-container transition-all duration-300">
				<div>
					<div class="flex items-center justify-between pb-space-sm border-b border-surface-container-high">
						<span class="font-label-mono-sm text-label-mono-sm text-outline uppercase font-semibold"><?php esc_html_e( 'Pillar 01 // Trajectory', 'core16' ); ?></span>
						<span class="material-symbols-outlined text-primary text-[24px]">timeline</span>
					</div>
					<h3 class="font-headline-lg text-headline-lg text-on-surface font-bold mt-space-md tracking-tight">
						<?php esc_html_e( 'Career Trajectory & Role Alignment', 'core16' ); ?>
					</h3>
					<p class="font-body-default text-body-default text-on-surface-variant mt-space-sm">
						<?php esc_html_e( 'Stop fighting your inherent cognitive wiring. Identify the exact organisational architectures where your natural disposition commands outsized leverage.', 'core16' ); ?>
					</p>
					<!-- Detailed Sub-points -->
					<ul class="mt-space-lg space-y-space-sm border-t border-surface-container-high pt-space-md">
						<li class="flex items-start gap-space-sm">
							<span class="material-symbols-outlined text-primary text-[18px] mt-0.5">check_circle</span>
							<div class="font-body-sm text-body-sm text-on-surface">
								<span class="font-semibold text-on-surface"><?php esc_html_e( 'Optimal Operating Environments:', 'core16' ); ?></span> <?php esc_html_e( 'Scaleups vs Enterprise matrix organizations.', 'core16' ); ?>
							</div>
						</li>
						<li class="flex items-start gap-space-sm">
							<span class="material-symbols-outlined text-primary text-[18px] mt-0.5">check_circle</span>
							<div class="font-body-sm text-body-sm text-on-surface">
								<span class="font-semibold text-on-surface"><?php esc_html_e( 'Natural Leadership Stance:', 'core16' ); ?></span> <?php esc_html_e( 'Autonomous orchestrator vs consensual synthesizer.', 'core16' ); ?>
							</div>
						</li>
						<li class="flex items-start gap-space-sm">
							<span class="material-symbols-outlined text-primary text-[18px] mt-0.5">check_circle</span>
							<div class="font-body-sm text-body-sm text-on-surface">
								<span class="font-semibold text-on-surface"><?php esc_html_e( 'Burnout Trigger Mapping:', 'core16' ); ?></span> <?php esc_html_e( 'Identifying high-friction tasks draining energy reserves.', 'core16' ); ?>
							</div>
						</li>
					</ul>
				</div>
				<div class="mt-space-lg pt-space-sm border-t border-surface-container-high">
					<span class="font-label-mono-sm text-label-mono-sm text-outline uppercase block"><?php esc_html_e( 'Deliverable Metric:', 'core16' ); ?></span>
					<span class="font-label-mono text-label-mono text-on-surface font-bold"><?php esc_html_e( 'Role Synergy Index™ (0-100)', 'core16' ); ?></span>
				</div>
			</div>

			<!-- Pillar 2 -->
			<div class="flex flex-col bg-surface-container-lowest rounded-xl border border-surface-container-high p-space-lg justify-between hover:border-primary-container transition-all duration-300">
				<div>
					<div class="flex items-center justify-between pb-space-sm border-b border-surface-container-high">
						<span class="font-label-mono-sm text-label-mono-sm text-outline uppercase font-semibold"><?php esc_html_e( 'Pillar 02 // Relational EQ', 'core16' ); ?></span>
						<span class="material-symbols-outlined text-secondary text-[24px]">hub</span>
					</div>
					<h3 class="font-headline-lg text-headline-lg text-on-surface font-bold mt-space-md tracking-tight">
						<?php esc_html_e( 'Conflict Dynamics & Interpersonal EQ', 'core16' ); ?>
					</h3>
					<p class="font-body-default text-body-default text-on-surface-variant mt-space-sm">
						<?php esc_html_e( 'Disagreements are rarely personal; they are mismatched cognitive cadence. Master cross-profile translation to lead through tension without friction.', 'core16' ); ?>
					</p>
					<!-- Detailed Sub-points -->
					<ul class="mt-space-lg space-y-space-sm border-t border-surface-container-high pt-space-md">
						<li class="flex items-start gap-space-sm">
							<span class="material-symbols-outlined text-secondary text-[18px] mt-0.5">check_circle</span>
							<div class="font-body-sm text-body-sm text-on-surface">
								<span class="font-semibold text-on-surface"><?php esc_html_e( 'Polar-Opposite Protocols:', 'core16' ); ?></span> <?php esc_html_e( 'How to persuade profiles that think in inverted vectors.', 'core16' ); ?>
							</div>
						</li>
						<li class="flex items-start gap-space-sm">
							<span class="material-symbols-outlined text-secondary text-[18px] mt-0.5">check_circle</span>
							<div class="font-body-sm text-body-sm text-on-surface">
								<span class="font-semibold text-on-surface"><?php esc_html_e( 'De-escalation Mechanics:', 'core16' ); ?></span> <?php esc_html_e( 'Diagnosing whether friction stems from Pace or Precision.', 'core16' ); ?>
							</div>
						</li>
						<li class="flex items-start gap-space-sm">
							<span class="material-symbols-outlined text-secondary text-[18px] mt-0.5">check_circle</span>
							<div class="font-body-sm text-body-sm text-on-surface">
								<span class="font-semibold text-on-surface"><?php esc_html_e( 'Boundary Fortification:', 'core16' ); ?></span> <?php esc_html_e( 'Professional scripts to say \'No\' while preserving alignment.', 'core16' ); ?>
							</div>
						</li>
					</ul>
				</div>
				<div class="mt-space-lg pt-space-sm border-t border-surface-container-high">
					<span class="font-label-mono-sm text-label-mono-sm text-outline uppercase block"><?php esc_html_e( 'Deliverable Metric:', 'core16' ); ?></span>
					<span class="font-label-mono text-label-mono text-on-surface font-bold"><?php esc_html_e( 'Relational Dyad Friction Matrix', 'core16' ); ?></span>
				</div>
			</div>

			<!-- Pillar 3 -->
			<div class="flex flex-col bg-surface-container-lowest rounded-xl border border-surface-container-high p-space-lg justify-between hover:border-primary-container transition-all duration-300">
				<div>
					<div class="flex items-center justify-between pb-space-sm border-b border-surface-container-high">
						<span class="font-label-mono-sm text-label-mono-sm text-outline uppercase font-semibold"><?php esc_html_e( 'Pillar 03 // Cognitive Rigor', 'core16' ); ?></span>
						<span class="material-symbols-outlined text-tertiary text-[24px]">psychology</span>
					</div>
					<h3 class="font-headline-lg text-headline-lg text-on-surface font-bold mt-space-md tracking-tight">
						<?php esc_html_e( 'Habit Engineering & Cognitive Blindspots', 'core16' ); ?>
					</h3>
					<p class="font-body-default text-body-default text-on-surface-variant mt-space-sm">
						<?php esc_html_e( 'Your default survival reactions were formed years ago. Identify where your instinctive strengths over-rotate into operational blindspots.', 'core16' ); ?>
					</p>
					<!-- Detailed Sub-points -->
					<ul class="mt-space-lg space-y-space-sm border-t border-surface-container-high pt-space-md">
						<li class="flex items-start gap-space-sm">
							<span class="material-symbols-outlined text-tertiary text-[18px] mt-0.5">check_circle</span>
							<div class="font-body-sm text-body-sm text-on-surface">
								<span class="font-semibold text-on-surface"><?php esc_html_e( 'Default Stress Regressors:', 'core16' ); ?></span> <?php esc_html_e( 'Recognizing fight, flight, or paralysis under acute pressure.', 'core16' ); ?>
							</div>
						</li>
						<li class="flex items-start gap-space-sm">
							<span class="material-symbols-outlined text-tertiary text-[18px] mt-0.5">check_circle</span>
							<div class="font-body-sm text-body-sm text-on-surface">
								<span class="font-semibold text-on-surface"><?php esc_html_e( 'Execution Calibration:', 'core16' ); ?></span> <?php esc_html_e( 'Counteracting over-deliberation or impulsive leaping.', 'core16' ); ?>
							</div>
						</li>
						<li class="flex items-start gap-space-sm">
							<span class="material-symbols-outlined text-tertiary text-[18px] mt-0.5">check_circle</span>
							<div class="font-body-sm text-body-sm text-on-surface">
								<span class="font-semibold text-on-surface"><?php esc_html_e( 'Energy Stamina Blueprint:', 'core16' ); ?></span> <?php esc_html_e( 'Chronotype and cognitive focus cycling protocols.', 'core16' ); ?>
							</div>
						</li>
					</ul>
				</div>
				<div class="mt-space-lg pt-space-sm border-t border-surface-container-high">
					<span class="font-label-mono-sm text-label-mono-sm text-outline uppercase block"><?php esc_html_e( 'Deliverable Metric:', 'core16' ); ?></span>
					<span class="font-label-mono text-label-mono text-on-surface font-bold"><?php esc_html_e( 'Cognitive Elasticity Index™', 'core16' ); ?></span>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Section 3: The Premium Personal Report Breakdown -->
<section class="w-full bg-surface-container-low py-space-xl lg:py-margin-lg border-b border-surface-container-high" id="report-preview">
	<div class="max-w-[1440px] mx-auto px-margin-sm lg:px-margin-lg">
		<div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter-lg items-center">
			<!-- Visual Spread Side (6 cols) -->
			<div class="lg:col-span-6 flex flex-col items-center">
				<div class="relative w-full max-w-xl shadow-xl rounded-lg overflow-hidden border border-surface-container-high bg-surface-container-lowest">
					<!-- Inspection header badge -->
					<div class="bg-surface-container-high px-space-md py-space-xs flex items-center justify-between border-b border-surface-container-high font-label-mono-sm text-label-mono-sm">
						<span class="text-on-surface font-bold"><?php esc_html_e( 'EXECUTIVE REPORT SPREAD // SAMPLE ARCHIVE', 'core16' ); ?></span>
						<span class="text-primary font-mono"><?php esc_html_e( 'FOLIO #28-30', 'core16' ); ?></span>
					</div>
					<!-- Real Editorial Book Image from Reference -->
					<img class="w-full h-auto object-cover" alt="<?php esc_attr_e( 'Editorial spread of Core16 Personalities Premium Executive Report', 'core16' ); ?>" src="<?php echo esc_url( $report_image ); ?>" />
					<!-- Floating Data Callout over Image -->
					<div class="p-space-md bg-surface-container-lowest border-t border-surface-container-high">
						<div class="flex items-center justify-between text-on-surface">
							<div>
								<div class="font-headline-sm text-headline-sm font-bold"><?php esc_html_e( '30-Page Custom Synthesis Dossier', 'core16' ); ?></div>
								<div class="font-caption text-caption text-on-surface-variant"><?php esc_html_e( 'Formatted as a bound executive monograph with diagnostic appendices', 'core16' ); ?></div>
							</div>
							<span class="inline-flex items-center gap-1 font-label-mono-sm text-label-mono-sm px-space-xs py-1 rounded bg-secondary-container text-on-secondary-fixed font-bold">
								<?php esc_html_e( 'PDF + AUDIO BRIEF', 'core16' ); ?>
							</span>
						</div>
					</div>
				</div>
			</div>

			<!-- Descriptive Editorial Side (6 cols) -->
			<div class="lg:col-span-6 space-y-space-lg">
				<div class="space-y-space-xs">
					<span class="font-label-mono-sm text-label-mono-sm text-primary uppercase tracking-widest font-semibold">
						<?php echo esc_html( $report_badge ); ?>
					</span>
					<h2 class="font-headline-xl text-headline-xl text-on-surface font-bold tracking-tight">
						<?php echo esc_html( $report_title ); ?>
					</h2>
					<p class="font-body-lead text-body-lead text-on-surface-variant">
						<?php echo esc_html( $report_desc ); ?>
					</p>
				</div>

				<!-- Feature Matrix Breakdown -->
				<div class="space-y-space-md">
					<div class="p-space-md bg-surface-container-lowest rounded border border-surface-container-high flex gap-space-md">
						<div class="w-10 h-10 rounded bg-primary-container/10 text-primary flex items-center justify-center shrink-0">
							<span class="material-symbols-outlined text-[20px]">radar</span>
						</div>
						<div>
							<h4 class="font-headline-sm text-headline-sm text-on-surface font-bold"><?php esc_html_e( 'FECA Cognitive Radar & Confidence Bands', 'core16' ); ?></h4>
							<p class="font-body-sm text-body-sm text-on-surface-variant mt-1">
								<?php esc_html_e( 'Granular percentiles across Focus, Execution, Control, and Adaptive Agility, complete with psychometric standard deviation indicators.', 'core16' ); ?>
							</p>
						</div>
					</div>

					<div class="p-space-md bg-surface-container-lowest rounded border border-surface-container-high flex gap-space-md">
						<div class="w-10 h-10 rounded bg-secondary/10 text-secondary flex items-center justify-center shrink-0">
							<span class="material-symbols-outlined text-[20px]">handshake</span>
						</div>
						<div>
							<h4 class="font-headline-sm text-headline-sm text-on-surface font-bold"><?php esc_html_e( 'Boardroom Communication Blueprints', 'core16' ); ?></h4>
							<p class="font-body-sm text-body-sm text-on-surface-variant mt-1">
								<?php esc_html_e( 'Tailored conversational scripts for upward reporting to board members, managing divergent personality types, and delegating without friction.', 'core16' ); ?>
							</p>
						</div>
					</div>

					<div class="p-space-md bg-surface-container-lowest rounded border border-surface-container-high flex gap-space-md">
						<div class="w-10 h-10 rounded bg-tertiary/10 text-tertiary flex items-center justify-center shrink-0">
							<span class="material-symbols-outlined text-[20px]">calendar_month</span>
						</div>
						<div>
							<h4 class="font-headline-sm text-headline-sm text-on-surface font-bold"><?php esc_html_e( '90-Day Tailored Developmental Roadmap', 'core16' ); ?></h4>
							<p class="font-body-sm text-body-sm text-on-surface-variant mt-1">
								<?php esc_html_e( 'Structured micro-challenges week by week to balance asymmetric traits, improve cognitive recovery, and optimize stakeholder leverage.', 'core16' ); ?>
							</p>
						</div>
					</div>

					<div class="p-space-md bg-surface-container-lowest rounded border border-surface-container-high flex gap-space-md">
						<div class="w-10 h-10 rounded bg-primary-container/10 text-primary flex items-center justify-center shrink-0">
							<span class="material-symbols-outlined text-[20px]">headphones</span>
						</div>
						<div>
							<h4 class="font-headline-sm text-headline-sm text-on-surface font-bold"><?php esc_html_e( 'Facilitator Audio Debrief (25 Minutes)', 'core16' ); ?></h4>
							<p class="font-body-sm text-body-sm text-on-surface-variant mt-1">
								<?php esc_html_e( 'An executive psychometrician walks you through your specific score cluster, interpreting nuanced paradoxes in your personality profile.', 'core16' ); ?>
							</p>
						</div>
					</div>
				</div>

				<div class="pt-space-xs">
					<a class="inline-flex items-center justify-center h-11 px-space-lg rounded bg-on-surface text-surface-container-lowest font-body-medium text-body-medium hover:bg-primary transition-colors" href="#assessment-flow">
						<span><?php esc_html_e( 'Generate Your Individual Report', 'core16' ); ?></span>
						<span class="material-symbols-outlined ml-2 text-[18px]">arrow_forward</span>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>
