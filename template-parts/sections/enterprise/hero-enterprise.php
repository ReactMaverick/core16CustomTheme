<?php
/**
 * Enterprise Page - Executive Hero & Trust Ribbon (Stitch Fidelity)
 * Screen: "For Organisations" / Enterprise Solutions Page (20a9a1e7c43d4e27bbfe246b8a189ef1)
 *
 * @package Core16
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<!-- SECTION 1: EXECUTIVE HERO (Anchored in Midnight #0D182A) -->
<section class="relative bg-inverse-surface text-inverse-on-surface overflow-hidden px-margin-sm lg:px-margin-lg py-space-xl lg:py-24">
	<!-- Ambient Precision Underlay -->
	<div class="absolute inset-0 pointer-events-none opacity-20">
		<svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg">
			<defs>
				<pattern height="48" id="grid-pattern" patternunits="userSpaceOnUse" width="48">
					<path class="text-outline-variant" d="M 48 0 L 0 0 0 48" fill="none" stroke="currentColor" stroke-width="0.75"></path>
				</pattern>
			</defs>
			<rect fill="url(#grid-pattern)" height="100%" width="100%"></rect>
		</svg>
	</div>

	<div class="max-w-[1440px] mx-auto relative z-10">
		<div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter-lg items-center">
			<!-- Hero Text & CTA -->
			<div class="lg:col-span-7 space-y-space-md">
				<div class="inline-flex items-center gap-space-sm bg-surface-container-highest/20 px-space-md py-1 rounded-full border border-outline-variant/30">
					<span class="w-2 h-2 rounded-full bg-primary-container animate-pulse"></span>
					<span class="font-label-mono text-label-mono uppercase tracking-widest text-primary-fixed"><?php esc_html_e( 'Talent Intelligence & Organizational Design', 'core16' ); ?></span>
				</div>

				<h1 class="font-display-hero text-display-hero-mobile lg:text-display-hero tracking-tight text-white leading-tight font-semibold">
					<?php esc_html_e( 'Build High-Performance Teams on Psychological Fact, Not Fiction.', 'core16' ); ?>
				</h1>

				<p class="font-body-lead text-body-lead text-surface-container-high max-w-2xl leading-relaxed">
					<?php esc_html_e( 'Scale collective EQ, eliminate blind-spot attrition, and synthesize cross-functional communication with enterprise-grade Core16 psychometrics calibrated for the Fortune 500.', 'core16' ); ?>
				</p>

				<div class="pt-space-sm flex flex-col sm:flex-row items-stretch sm:items-center gap-space-md">
					<a class="inline-flex items-center justify-center h-12 px-space-xl rounded-lg bg-primary-container text-on-primary-container font-body-medium text-body-medium font-semibold hover:bg-primary-fixed transition-colors shadow-sm cursor-pointer" href="#enterprise-inquiry">
						<span><?php esc_html_e( 'Request Enterprise Pilot', 'core16' ); ?></span>
						<span class="material-symbols-outlined ml-2 text-xl">arrow_forward</span>
					</a>
					<a class="inline-flex items-center justify-center h-12 px-space-lg rounded-lg bg-surface-container-highest/15 text-inverse-on-surface font-body-medium text-body-medium hover:bg-surface-container-highest/30 transition-colors cursor-pointer" href="#enterprise-inquiry">
						<span class="material-symbols-outlined mr-2 text-xl text-primary-fixed">calendar_today</span>
						<span><?php esc_html_e( 'Schedule a 15-Minute Demo', 'core16' ); ?></span>
					</a>
				</div>

				<div class="pt-space-md flex items-center gap-space-sm font-label-mono-sm text-label-mono-sm text-surface-container-high/80">
					<span class="material-symbols-outlined text-sm text-primary-fixed">verified</span>
					<span><?php esc_html_e( 'Empirical Norm Base N = 2,420,180 • Sub-0.02 Differential Item Functioning (DIF)', 'core16' ); ?></span>
				</div>
			</div>

			<!-- Hero Metric & Architectural Abstract -->
			<div class="lg:col-span-5 relative">
				<div class="bg-surface-container-highest/10 backdrop-blur-md rounded-xl p-space-lg space-y-space-md shadow-xl border border-white/10">
					<div class="flex items-center justify-between">
						<div class="flex items-center gap-space-sm">
							<span class="material-symbols-outlined text-2xl text-primary-fixed">psychology</span>
							<span class="font-label-mono text-label-mono uppercase text-primary-fixed font-semibold"><?php esc_html_e( 'Org Synthesis Engine', 'core16' ); ?></span>
						</div>
						<span class="font-label-mono-sm text-label-mono-sm px-2 py-0.5 rounded bg-primary-container/20 text-primary-fixed font-semibold"><?php esc_html_e( 'ISO 10667-2 COMPLIANT', 'core16' ); ?></span>
					</div>

					<!-- Mini Visualized Stats -->
					<div class="grid grid-cols-2 gap-space-md pt-space-xs">
						<div class="bg-inverse-surface/60 p-space-md rounded-lg border border-white/5">
							<div class="font-label-mono-sm text-label-mono-sm text-surface-container-high/70 uppercase"><?php esc_html_e( 'DECISION DRIFT REDUCTION', 'core16' ); ?></div>
							<div class="font-headline-lg text-headline-lg text-primary-fixed font-bold mt-1">-42.8%</div>
							<div class="font-caption text-caption text-surface-container-high/60 mt-1"><?php esc_html_e( 'Cross-functional handoffs', 'core16' ); ?></div>
						</div>
						<div class="bg-inverse-surface/60 p-space-md rounded-lg border border-white/5">
							<div class="font-label-mono-sm text-label-mono-sm text-surface-container-high/70 uppercase"><?php esc_html_e( 'EXECUTIVE FIT RELIABILITY', 'core16' ); ?></div>
							<div class="font-headline-lg text-headline-lg text-secondary-container font-bold mt-1">94.3%</div>
							<div class="font-caption text-caption text-surface-container-high/60 mt-1"><?php esc_html_e( '18-month tenure correlation', 'core16' ); ?></div>
						</div>
					</div>

					<!-- Real-time Diagnostic Tape -->
					<div class="bg-inverse-surface/80 rounded-lg p-space-md space-y-space-xs border border-white/5">
						<div class="flex justify-between items-center text-xs">
							<span class="font-label-mono-sm text-label-mono-sm text-surface-container-high"><?php esc_html_e( 'FECA Dyad Compatibility', 'core16' ); ?></span>
							<span class="font-label-mono-sm text-label-mono-sm text-primary-fixed font-semibold"><?php esc_html_e( 'High Agility Index (0.88)', 'core16' ); ?></span>
						</div>
						<div class="w-full bg-surface-container-high/20 h-2 rounded-full overflow-hidden">
							<div class="bg-primary-container h-full rounded-full" style="width: 88%"></div>
						</div>
						<div class="flex justify-between font-label-mono-sm text-label-mono-sm text-surface-container-high/60 pt-1">
							<span><?php esc_html_e( 'Focus • Energy', 'core16' ); ?></span>
							<span><?php esc_html_e( 'Cognition • Action', 'core16' ); ?></span>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Trust Ribbon -->
		<div class="mt-space-xl pt-space-lg grid grid-cols-2 md:grid-cols-4 gap-gutter text-center border-t border-white/10">
			<div class="space-y-1">
				<div class="font-headline-sm text-headline-sm text-white font-semibold">Fortune 500</div>
				<div class="font-label-mono-sm text-label-mono-sm text-surface-container-high/70 uppercase"><?php esc_html_e( 'Standard Deployment', 'core16' ); ?></div>
			</div>
			<div class="space-y-1">
				<div class="font-headline-sm text-headline-sm text-white font-semibold">SOC2 Type II</div>
				<div class="font-label-mono-sm text-label-mono-sm text-surface-container-high/70 uppercase"><?php esc_html_e( 'Annual Continuous Audit', 'core16' ); ?></div>
			</div>
			<div class="space-y-1">
				<div class="font-headline-sm text-headline-sm text-white font-semibold">2.4M+ Profiles</div>
				<div class="font-label-mono-sm text-label-mono-sm text-surface-container-high/70 uppercase"><?php esc_html_e( 'Empirical Benchmark Norms', 'core16' ); ?></div>
			</div>
			<div class="space-y-1">
				<div class="font-headline-sm text-headline-sm text-white font-semibold">&lt; 0.02 DIF</div>
				<div class="font-label-mono-sm text-label-mono-sm text-surface-container-high/70 uppercase"><?php esc_html_e( 'EEOC & Bias Neutrality', 'core16' ); ?></div>
			</div>
		</div>
	</div>
</section>
