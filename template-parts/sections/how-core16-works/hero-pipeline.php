<?php
/**
 * How Core16 Works - Hero & Linear Pipeline Section
 *
 * @package Core16
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$hero_badge = get_field( 'hcw_hero_badge' ) ?: __( 'System Architecture // Normative Specification v4.2', 'core16' );
$hero_title = get_field( 'hcw_hero_title' ) ?: __( 'From Cognitive Input to Actionable Human Insight.', 'core16' );
$hero_desc  = get_field( 'hcw_hero_desc' ) ?: __( 'A 12-minute psychometric evaluation designed with clinical test-retest reliability, eliminating gamification to measure executive cadence, cognitive stamina, and strategic variance.', 'core16' );
$stat_sample = get_field( 'hcw_stat_sample' ) ?: 'N=184,200';
$stat_retest = get_field( 'hcw_stat_retest' ) ?: 'r = 0.94';
?>
<section class="w-full bg-[#FAFAF7] text-midnight px-margin-sm lg:px-margin-lg py-16 lg:py-24 border-b border-rule-grey">
	<div class="max-w-[1440px] mx-auto">
		<div class="flex flex-col lg:flex-row lg:items-end justify-between gap-8 pb-12 border-b border-rule-grey">
			<div class="space-y-4 max-w-3xl">
				<div class="inline-flex items-center gap-2 px-3 py-1 rounded bg-[#EAEFEF] border border-rule-grey">
					<span class="w-2 h-2 rounded-full bg-core-teal animate-pulse"></span>
					<span class="font-mono text-xs uppercase tracking-wider text-slate-subtle"><?php echo esc_html( $hero_badge ); ?></span>
				</div>
				<h1 class="font-headline text-3xl sm:text-4xl lg:text-5xl text-midnight tracking-tight font-bold">
					<?php echo esc_html( $hero_title ); ?>
				</h1>
				<p class="font-body text-base lg:text-lg text-slate-subtle max-w-2xl leading-relaxed">
					<?php echo esc_html( $hero_desc ); ?>
				</p>
			</div>
			<div class="flex flex-col sm:flex-row lg:flex-col gap-3 font-mono text-xs shrink-0">
				<div class="flex items-center gap-2 p-3 bg-white border border-rule-grey rounded shadow-sm">
					<span class="text-core-teal font-bold"><?php echo esc_html( $stat_sample ); ?></span>
					<span class="text-slate-subtle"><?php esc_html_e( 'Normative Sample Baseline', 'core16' ); ?></span>
				</div>
				<div class="flex items-center gap-2 p-3 bg-white border border-rule-grey rounded shadow-sm">
					<span class="text-core-teal font-bold"><?php echo esc_html( $stat_retest ); ?></span>
					<span class="text-slate-subtle"><?php esc_html_e( 'Test-Retest Stability (90d)', 'core16' ); ?></span>
				</div>
			</div>
		</div>

		<!-- Linear Architectural Pipeline -->
		<div class="grid grid-cols-1 md:grid-cols-3 gap-6 pt-10">
			<div class="relative p-6 bg-white border border-rule-grey rounded flex flex-col justify-between group hover:border-core-teal transition-colors">
				<div>
					<div class="flex items-center justify-between pb-4 mb-4 border-b border-rule-grey">
						<span class="font-mono text-xs text-core-teal font-semibold">STAGE 01</span>
						<span class="font-mono text-[10px] text-slate-subtle uppercase"><?php esc_html_e( '12 MIN PROTOCOL', 'core16' ); ?></span>
					</div>
					<h2 class="font-headline text-lg font-semibold text-midnight mb-2"><?php esc_html_e( 'Continuous Response Calibration', 'core16' ); ?></h2>
					<p class="font-body text-xs text-slate-subtle leading-relaxed"><?php esc_html_e( 'Un-gamed 7-point Likert continuous vectors with live latency indexing and transverse consistency telemetry.', 'core16' ); ?></p>
				</div>
				<div class="mt-6 flex items-center text-core-teal font-mono text-xs tracking-wider uppercase font-semibold">
					<span><?php esc_html_e( 'Latent Sampling Gate', 'core16' ); ?></span>
					<span class="material-symbols-outlined text-[16px] ml-1">arrow_forward</span>
				</div>
			</div>

			<div class="relative p-6 bg-white border border-rule-grey rounded flex flex-col justify-between group hover:border-core-teal transition-colors">
				<div>
					<div class="flex items-center justify-between pb-4 mb-4 border-b border-rule-grey">
						<span class="font-mono text-xs text-core-teal font-semibold">STAGE 02</span>
						<span class="font-mono text-[10px] text-slate-subtle uppercase"><?php esc_html_e( 'FECA ENGINE', 'core16' ); ?></span>
					</div>
					<h2 class="font-headline text-lg font-semibold text-midnight mb-2"><?php esc_html_e( 'Multidimensional Vector Scoring', 'core16' ); ?></h2>
					<p class="font-body text-xs text-slate-subtle leading-relaxed"><?php esc_html_e( 'Decouples fixed nominal archetypes from functional cognitive bandwidth (Focus, Execution, Control, Adaptation).', 'core16' ); ?></p>
				</div>
				<div class="mt-6 flex items-center text-core-teal font-mono text-xs tracking-wider uppercase font-semibold">
					<span><?php esc_html_e( 'Continuous Variance Analysis', 'core16' ); ?></span>
					<span class="material-symbols-outlined text-[16px] ml-1">arrow_forward</span>
				</div>
			</div>

			<div class="relative p-6 bg-white border border-rule-grey rounded flex flex-col justify-between group hover:border-core-teal transition-colors">
				<div>
					<div class="flex items-center justify-between pb-4 mb-4 border-b border-rule-grey">
						<span class="font-mono text-xs text-core-teal font-semibold">STAGE 03</span>
						<span class="font-mono text-[10px] text-slate-subtle uppercase"><?php esc_html_e( 'INSTITUTIONAL SYNTHESIS', 'core16' ); ?></span>
					</div>
					<h2 class="font-headline text-lg font-semibold text-midnight mb-2"><?php esc_html_e( 'Executive Dossier & Team Dyad', 'core16' ); ?></h2>
					<p class="font-body text-xs text-slate-subtle leading-relaxed"><?php esc_html_e( 'Immediate generation of 38-page granular dossiers, pairwise C-suite compatibility, and 90-day coaching blueprints.', 'core16' ); ?></p>
				</div>
				<div class="mt-6 flex items-center text-core-teal font-mono text-xs tracking-wider uppercase font-semibold">
					<span><?php esc_html_e( 'Executive Readout Ready', 'core16' ); ?></span>
					<span class="material-symbols-outlined text-[16px] ml-1">check_circle</span>
				</div>
			</div>
		</div>
	</div>
</section>
