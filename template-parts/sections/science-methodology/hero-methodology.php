<?php
/**
 * Science & Methodology - Authority Hero, Telemetry & Psychometric Benchmarks Strip (Stitch Fidelity)
 * Screen: Science / Methodology (b7f6a7eeaff5465490de24971fa888cb)
 *
 * @package Core16
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<!-- SECTION 1: AUTHORITY HERO & TELEMETRY -->
<section class="w-full bg-surface-container-lowest px-margin-sm lg:px-margin-lg py-margin-lg border-b border-rule-grey/30">
	<div class="max-w-[1440px] mx-auto flex flex-col gap-space-lg">
		<!-- Telemetry Strip -->
		<div class="flex flex-wrap items-center justify-between gap-space-sm bg-surface-container-low p-space-sm rounded-lg border border-rule-grey/20">
			<div class="flex items-center gap-space-xs text-primary">
				<span class="material-symbols-outlined text-primary text-[18px]">verified</span>
				<span class="font-label-mono-sm text-label-mono-sm uppercase tracking-wider text-primary font-semibold">
					<?php esc_html_e( 'EMPIRICAL SPECIFICATION // PSYCHOMETRIC RESEARCH ARCHITECTURE • ISO 10667-2 CALIBRATED', 'core16' ); ?>
				</span>
			</div>
			<div class="flex items-center gap-space-md">
				<span class="font-label-mono-sm text-label-mono-sm text-on-surface-variant uppercase font-medium">
					<?php esc_html_e( 'REF: C16-TECH-SPEC-REV4.2', 'core16' ); ?>
				</span>
				<span class="inline-flex items-center gap-1.5 font-label-mono-sm text-label-mono-sm text-on-surface-variant font-medium">
					<span class="inline-block w-2 h-2 rounded-full bg-primary-container animate-pulse"></span>
					<?php esc_html_e( 'ACTIVE PEER CONSENSUS', 'core16' ); ?>
				</span>
			</div>
		</div>

		<!-- Main Header Layout Grid -->
		<div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter-lg items-end pt-space-md">
			<div class="lg:col-span-8 flex flex-col gap-space-md">
				<div class="font-label-mono text-label-mono uppercase tracking-widest text-secondary font-semibold">
					<?php esc_html_e( 'METHODOLOGICAL DISCLOSURE & EMPIRICAL ARCHITECTURE', 'core16' ); ?>
				</div>
				<h1 class="font-display-hero text-display-hero-mobile lg:text-display-hero text-on-surface tracking-tight font-semibold">
					<?php esc_html_e( 'Empirical Rigor Meets Applied Human Dynamics.', 'core16' ); ?>
				</h1>
				<p class="font-body-lead text-body-lead text-on-surface-variant max-w-3xl leading-relaxed">
					<?php esc_html_e( 'A fully transparent, peer-audited account of construct validity, factor covariance, longitudinal test-retest reliability, and the continuous mathematical continuum powering the Core16 diagnostic instrument.', 'core16' ); ?>
				</p>
			</div>

			<!-- Hero Primary Action Cluster -->
			<div class="lg:col-span-4 flex flex-col sm:flex-row lg:flex-col gap-space-sm justify-end">
				<a href="<?php echo esc_url( home_url( '/resources/' ) ); ?>" class="inline-flex items-center justify-center gap-space-xs px-6 py-3.5 rounded-lg bg-[#0EA5AB] hover:bg-[#0c8f94] text-white font-semibold font-body-medium text-body-medium shadow-sm transition-all cursor-pointer">
					<span class="material-symbols-outlined text-[18px]">download</span>
					<span><?php esc_html_e( 'Download Technical Manual (164-p PDF)', 'core16' ); ?></span>
				</a>
				<a href="#declarations" class="inline-flex items-center justify-center gap-space-xs px-5 py-3.5 rounded-lg border border-[#D7DEE3] hover:border-[#17365D] bg-white text-[#66717D] hover:text-[#17365D] font-medium font-body-medium text-body-medium transition-all cursor-pointer">
					<span class="material-symbols-outlined text-[18px]">policy</span>
					<span><?php esc_html_e( 'View APA & ISO Audit Declarations', 'core16' ); ?></span>
				</a>
			</div>
		</div>

		<!-- Secondary Metadata Dossier Bar -->
		<div class="grid grid-cols-1 md:grid-cols-3 gap-gutter pt-space-md bg-surface-container-low p-space-md rounded-lg border border-rule-grey/20">
			<div class="flex flex-col gap-space-xs">
				<span class="font-label-mono-sm text-label-mono-sm uppercase text-secondary font-semibold"><?php esc_html_e( 'Normative Baseline Cohort', 'core16' ); ?></span>
				<span class="font-headline-sm text-headline-sm text-on-surface font-semibold"><?php esc_html_e( 'N = 1,842,000 Executive Profiles', 'core16' ); ?></span>
				<span class="font-caption text-caption text-on-surface-variant"><?php esc_html_e( 'Validated corporate decisions across 48 industries', 'core16' ); ?></span>
			</div>
			<div class="flex flex-col gap-space-xs">
				<span class="font-label-mono-sm text-label-mono-sm uppercase text-secondary font-semibold"><?php esc_html_e( 'Institutional Research Affiliations', 'core16' ); ?></span>
				<span class="font-headline-sm text-headline-sm text-on-surface font-semibold"><?php esc_html_e( 'Cambridge & INSEAD Cohorts', 'core16' ); ?></span>
				<span class="font-caption text-caption text-on-surface-variant"><?php esc_html_e( 'Ongoing dual-blind validation & psychometric peer reviews', 'core16' ); ?></span>
			</div>
			<div class="flex flex-col gap-space-xs">
				<span class="font-label-mono-sm text-label-mono-sm uppercase text-secondary font-semibold"><?php esc_html_e( 'Measurement Foundation', 'core16' ); ?></span>
				<span class="font-headline-sm text-headline-sm text-on-surface font-semibold"><?php esc_html_e( 'Gaussian FECA Continuum', 'core16' ); ?></span>
				<span class="font-caption text-caption text-on-surface-variant"><?php esc_html_e( 'Eliminates artificial binary cutoffs via 95% CI standard error bands', 'core16' ); ?></span>
			</div>
		</div>
	</div>
</section>

<!-- SECTION 2: PSYCHOMETRIC BENCHMARKS STRIP -->
<section class="w-full bg-surface px-margin-sm lg:px-margin-lg py-margin border-b border-rule-grey/30">
	<div class="max-w-[1440px] mx-auto">
		<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-gutter">
			<!-- Metric 1 -->
			<div class="bg-surface-container-lowest p-space-lg rounded-lg flex flex-col justify-between h-full shadow-sm hover:shadow-md transition-shadow border border-rule-grey/20">
				<div>
					<div class="flex items-center justify-between pb-space-sm">
						<span class="font-label-mono text-label-mono uppercase text-secondary font-medium"><?php esc_html_e( 'Internal Consistency', 'core16' ); ?></span>
						<span class="font-label-mono-sm text-label-mono-sm text-primary font-semibold"><?php esc_html_e( "Cronbach's α", 'core16' ); ?></span>
					</div>
					<div class="font-headline-xl text-headline-xl text-on-surface tracking-tight font-bold"><?php esc_html_e( 'α = 0.89 – 0.94', 'core16' ); ?></div>
				</div>
				<div class="pt-space-md flex flex-col gap-space-xs">
					<div class="w-full bg-surface-container h-1.5 rounded-full overflow-hidden">
						<div class="bg-primary h-full rounded-full" style="width: 93%;"></div>
					</div>
					<span class="font-caption text-caption text-on-surface-variant">
						<?php esc_html_e( 'Across all 4 FECA primary constructs. Substantially exceeds psychometric floor standard (≥ 0.70).', 'core16' ); ?>
					</span>
				</div>
			</div>

			<!-- Metric 2 -->
			<div class="bg-surface-container-lowest p-space-lg rounded-lg flex flex-col justify-between h-full shadow-sm hover:shadow-md transition-shadow border border-rule-grey/20">
				<div>
					<div class="flex items-center justify-between pb-space-sm">
						<span class="font-label-mono text-label-mono uppercase text-secondary font-medium"><?php esc_html_e( 'Test-Retest Stability', 'core16' ); ?></span>
						<span class="font-label-mono-sm text-label-mono-sm text-secondary font-semibold"><?php esc_html_e( '180-Day Retest', 'core16' ); ?></span>
					</div>
					<div class="font-headline-xl text-headline-xl text-on-surface tracking-tight font-bold"><?php esc_html_e( '92.4% Reliability', 'core16' ); ?></div>
				</div>
				<div class="pt-space-md flex flex-col gap-space-xs">
					<div class="w-full bg-surface-container h-1.5 rounded-full overflow-hidden">
						<div class="bg-secondary h-full rounded-full" style="width: 92.4%;"></div>
					</div>
					<span class="font-caption text-caption text-on-surface-variant">
						<?php esc_html_e( 'Longitudinal stability coefficient r = 0.92 (p < .0001, N = 42,800 executive re-evaluations).', 'core16' ); ?>
					</span>
				</div>
			</div>

			<!-- Metric 3 -->
			<div class="bg-surface-container-lowest p-space-lg rounded-lg flex flex-col justify-between h-full shadow-sm hover:shadow-md transition-shadow border border-rule-grey/20">
				<div>
					<div class="flex items-center justify-between pb-space-sm">
						<span class="font-label-mono text-label-mono uppercase text-secondary font-medium"><?php esc_html_e( 'Normative Scale', 'core16' ); ?></span>
						<span class="font-label-mono-sm text-label-mono-sm text-primary font-semibold"><?php esc_html_e( 'Global Sample', 'core16' ); ?></span>
					</div>
					<div class="font-headline-xl text-headline-xl text-on-surface tracking-tight font-bold"><?php esc_html_e( 'n = 1,842,000', 'core16' ); ?></div>
				</div>
				<div class="pt-space-md flex flex-col gap-space-xs">
					<div class="w-full bg-surface-container h-1.5 rounded-full overflow-hidden">
						<div class="bg-primary-container h-full rounded-full" style="width: 100%;"></div>
					</div>
					<span class="font-caption text-caption text-on-surface-variant">
						<?php esc_html_e( 'Demographically balanced cohort across 114 nations and 48 Tier-1 vertical enterprise domains.', 'core16' ); ?>
					</span>
				</div>
			</div>

			<!-- Metric 4 -->
			<div class="bg-surface-container-lowest p-space-lg rounded-lg flex flex-col justify-between h-full shadow-sm hover:shadow-md transition-shadow border border-rule-grey/20">
				<div>
					<div class="flex items-center justify-between pb-space-sm">
						<span class="font-label-mono text-label-mono uppercase text-secondary font-medium"><?php esc_html_e( 'Factor Fit Index', 'core16' ); ?></span>
						<span class="font-label-mono-sm text-label-mono-sm text-secondary font-semibold"><?php esc_html_e( 'CFA Variance', 'core16' ); ?></span>
					</div>
					<div class="font-headline-xl text-headline-xl text-on-surface tracking-tight font-bold"><?php esc_html_e( '81.6% Explained', 'core16' ); ?></div>
				</div>
				<div class="pt-space-md flex flex-col gap-space-xs">
					<div class="w-full bg-surface-container h-1.5 rounded-full overflow-hidden">
						<div class="bg-tertiary h-full rounded-full" style="width: 81.6%;"></div>
					</div>
					<span class="font-caption text-caption text-on-surface-variant">
						<?php esc_html_e( 'CFA structural fit indices: RMSEA = 0.038, CFI = 0.968, TLI = 0.962. Exceptional model fit.', 'core16' ); ?>
					</span>
				</div>
			</div>
		</div>
	</div>
</section>
