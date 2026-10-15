<?php
/**
 * About Page - Brand Statement Hero & Typology Comparison (Stitch Fidelity)
 *
 * @package Core16
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<!-- SECTION 1: Brand Statement Hero & Origin Narrative -->
<section class="relative bg-surface overflow-hidden py-margin-lg lg:py-24 border-b border-rule-grey/30">
	<!-- Subtle architectural background geometry -->
	<div class="absolute inset-0 pointer-events-none opacity-40">
		<div class="absolute top-0 right-1/4 w-96 h-96 rounded-full bg-surface-container-high blur-3xl"></div>
		<div class="absolute -bottom-10 left-10 w-80 h-80 rounded-full bg-secondary-container/30 blur-2xl"></div>
	</div>

	<div class="max-w-[1440px] mx-auto px-margin-sm lg:px-margin-lg relative z-10">
		<div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter-lg items-start">
			<!-- Left Column: Manifesto & Narrative -->
			<div class="lg:col-span-8 space-y-space-lg">
				<div class="flex items-center gap-space-sm">
					<span class="inline-block w-2 h-2 rounded-full bg-primary-container"></span>
					<span class="font-label-mono text-label-mono uppercase tracking-wider text-on-surface-variant"><?php esc_html_e( 'Our Philosophy & Origin', 'core16' ); ?></span>
					<span class="text-outline-variant font-label-mono text-label-mono">•</span>
					<span class="font-label-mono-sm text-label-mono-sm text-primary uppercase"><?php esc_html_e( 'Dossier: PHIL-01', 'core16' ); ?></span>
				</div>

				<h1 class="font-display-hero text-headline-xl lg:text-display-hero text-on-surface tracking-tight leading-none">
					<?php esc_html_e( 'Credibility First.', 'core16' ); ?><br/>
					<?php esc_html_e( 'Individuality Second.', 'core16' ); ?><br/>
					<span class="text-primary"><?php esc_html_e( 'Chaos Never.', 'core16' ); ?></span>
				</h1>

				<div class="max-w-2xl space-y-space-md text-on-surface-variant font-body-lead text-body-lead leading-relaxed">
					<p>
						<?php esc_html_e( 'For over three decades, organizational psychology drifted into two broken camps. On one side stood gatekept academic psychometrics—unreadable, mathematically dense IRT formulas, and paywalled whitepapers locked behind institutional bureaucracy. On the other lay the viral internet quiz: oversimplified binary buckets, horoscope-level flattery, and childish cartoon mascots designed for social shares rather than boardrooms.', 'core16' ); ?>
					</p>
					<p class="font-body-default text-body-default text-on-surface">
						<?php esc_html_e( 'Core16 was chartered to dissolve this false dichotomy. We combined the relentless statistical rigor of Continuous Gaussian distribution with the physical tactility and executive gravitas of museum-grade artifacts. We do not place human beings in static caricature boxes; we map the fluid cognitive axes that govern high-stakes leadership.', 'core16' ); ?>
					</p>
				</div>

				<!-- Micro Quote & Sign-off -->
				<div class="pt-space-md flex items-center gap-space-lg">
					<div class="w-12 h-12 rounded-xl bg-surface-container-highest flex items-center justify-center text-primary shrink-0 shadow-sm">
						<span class="material-symbols-outlined text-2xl">architecture</span>
					</div>
					<div>
						<p class="font-headline-sm text-headline-sm text-on-surface font-semibold tracking-tight">
							&ldquo;<?php esc_html_e( 'A model should elevate human nuance, never flatten it for virality.', 'core16' ); ?>&rdquo;
						</p>
						<p class="font-label-mono text-label-mono text-on-surface-variant">
							<?php esc_html_e( 'Board of Psychometric Calibration — Zurich & Boston', 'core16' ); ?>
						</p>
					</div>
				</div>
			</div>

			<!-- Right Column: Empirical Validation Readout -->
			<div class="lg:col-span-4 lg:mt-6">
				<div class="bg-surface-container-lowest p-space-lg rounded-xl shadow-md space-y-space-lg border border-rule-grey/30">
					<div class="flex items-center justify-between">
						<span class="font-label-mono text-label-mono uppercase tracking-wider text-on-surface-variant"><?php esc_html_e( 'Baseline Statistics', 'core16' ); ?></span>
						<span class="inline-flex items-center gap-1 font-label-mono-sm text-label-mono-sm text-primary bg-surface-container-low px-space-xs py-0.5 rounded">
							<span class="w-1.5 h-1.5 rounded-full bg-primary animate-pulse"></span> ISO-10667
						</span>
					</div>

					<div class="space-y-space-md divide-y-0">
						<div class="bg-surface-container-low p-space-md rounded-lg">
							<div class="font-display-hero text-headline-xl text-on-surface tracking-tight font-bold">12</div>
							<div class="font-body-sm text-body-sm text-on-surface font-medium"><?php esc_html_e( 'Peer-Reviewed Validation Papers', 'core16' ); ?></div>
							<div class="font-label-mono-sm text-label-mono-sm text-on-surface-variant mt-1"><?php esc_html_e( 'CFA, item response theory & validity generalization', 'core16' ); ?></div>
						</div>

						<div class="bg-surface-container-low p-space-md rounded-lg">
							<div class="font-display-hero text-headline-xl text-primary font-bold">2.4M</div>
							<div class="font-body-sm text-body-sm text-on-surface font-medium"><?php esc_html_e( 'Calibrated Dossiers Generated', 'core16' ); ?></div>
							<div class="font-label-mono-sm text-label-mono-sm text-on-surface-variant mt-1"><?php esc_html_e( 'Enterprise leadership & cross-domain cohorts', 'core16' ); ?></div>
						</div>

						<div class="bg-surface-container-low p-space-md rounded-lg">
							<div class="font-display-hero text-headline-xl text-on-surface tracking-tight font-bold">0.02%</div>
							<div class="font-body-sm text-body-sm text-on-surface font-medium"><?php esc_html_e( 'Demographic DIF Variance', 'core16' ); ?></div>
							<div class="font-label-mono-sm text-label-mono-sm text-on-surface-variant mt-1"><?php esc_html_e( 'Negligible differential item functioning across genders & regions', 'core16' ); ?></div>
						</div>
					</div>

					<!-- Precision Metric Bar (SVG) -->
					<div class="space-y-space-xs pt-space-xs">
						<div class="flex justify-between font-label-mono-sm text-label-mono-sm">
							<span class="text-on-surface-variant"><?php esc_html_e( 'Test-Retest Stability (N=18,400)', 'core16' ); ?></span>
							<span class="text-on-surface font-semibold">r = .924</span>
						</div>
						<div class="w-full h-2 rounded-full bg-surface-container overflow-hidden">
							<div class="h-full bg-primary rounded-full" style="width: 92.4%;"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- SECTION 2: The Problem with Popular Typology (Editorial Comparison) -->
<section class="bg-surface-container-low py-margin-lg lg:py-24 border-b border-rule-grey/30">
	<div class="max-w-[1440px] mx-auto px-margin-sm lg:px-margin-lg">
		<div class="max-w-3xl mb-space-xl">
			<span class="font-label-mono text-label-mono uppercase tracking-wider text-primary"><?php esc_html_e( 'The Methodological Divide', 'core16' ); ?></span>
			<h2 class="font-headline-xl text-headline-xl text-on-surface mt-space-xs"><?php esc_html_e( 'The Problem with Popular Typology', 'core16' ); ?></h2>
			<p class="font-body-default text-body-default text-on-surface-variant mt-space-sm">
				<?php esc_html_e( 'Binary classifications were developed for 1940s analog administration, not contemporary high-stakes corporate agility. Below is how Core16 separates empirical measurement from internet parlor games.', 'core16' ); ?>
			</p>
		</div>

		<div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter-lg items-stretch">
			<!-- Left: The Internet Quiz & Binary Flattery -->
			<div class="lg:col-span-6 bg-surface-container-lowest p-space-lg lg:p-space-xl rounded-xl shadow-sm flex flex-col justify-between border border-rule-grey/20">
				<div class="space-y-space-md">
					<div class="flex items-center justify-between">
						<span class="font-label-mono text-label-mono uppercase tracking-wider text-error"><?php esc_html_e( 'The Popular Quiz Paradigm', 'core16' ); ?></span>
						<span class="material-symbols-outlined text-error text-xl">cancel</span>
					</div>
					<h3 class="font-headline-md text-headline-md text-on-surface"><?php esc_html_e( 'The Flattened Binary Box', 'core16' ); ?></h3>
					<p class="font-body-sm text-body-sm text-on-surface-variant">
						<?php esc_html_e( 'Designed around gamified consumer engagement, 5-minute clickbait funnels, and cartoon avatars that turn serious psychology into pop-culture merchandise.', 'core16' ); ?>
					</p>

					<ul class="space-y-space-sm pt-space-sm font-body-sm text-body-sm text-on-surface-variant">
						<li class="flex items-start gap-space-sm">
							<span class="material-symbols-outlined text-error text-base shrink-0 mt-0.5">close</span>
							<span><strong class="text-on-surface"><?php esc_html_e( 'Forced Binary Pigeonholes:', 'core16' ); ?></strong> <?php esc_html_e( 'Scores you as strictly "Introverted" (49%) or "Extroverted" (51%), ignoring situational spectrums.', 'core16' ); ?></span>
						</li>
						<li class="flex items-start gap-space-sm">
							<span class="material-symbols-outlined text-error text-base shrink-0 mt-0.5">close</span>
							<span><strong class="text-on-surface"><?php esc_html_e( '50% Retest Flip Rate:', 'core16' ); ?></strong> <?php esc_html_e( 'Taking the test five weeks later routinely assigns an entirely different identity code.', 'core16' ); ?></span>
						</li>
						<li class="flex items-start gap-space-sm">
							<span class="material-symbols-outlined text-error text-base shrink-0 mt-0.5">close</span>
							<span><strong class="text-on-surface"><?php esc_html_e( 'Horoscopic Flattery:', 'core16' ); ?></strong> <?php esc_html_e( 'Every profile is portrayed as an omnipotent hero, erasing genuine derailers and cognitive friction.', 'core16' ); ?></span>
						</li>
						<li class="flex items-start gap-space-sm">
							<span class="material-symbols-outlined text-error text-base shrink-0 mt-0.5">close</span>
							<span><strong class="text-on-surface"><?php esc_html_e( 'Zero Standard Error Disclosure:', 'core16' ); ?></strong> <?php esc_html_e( 'Hidden margins of error disguise arbitrary question weighting.', 'core16' ); ?></span>
						</li>
						<li class="flex items-start gap-space-sm">
							<span class="material-symbols-outlined text-error text-base shrink-0 mt-0.5">close</span>
							<span><strong class="text-on-surface"><?php esc_html_e( 'Infantile Visual Culture:', 'core16' ); ?></strong> <?php esc_html_e( 'Pastel cartoon characters that executive committees refuse to take seriously.', 'core16' ); ?></span>
						</li>
					</ul>
				</div>

				<div class="mt-space-lg p-space-sm rounded-lg bg-surface-container-high/60 flex items-center justify-between">
					<span class="font-label-mono-sm text-label-mono-sm text-on-surface-variant"><?php esc_html_e( 'CLINICAL RELIABILITY', 'core16' ); ?></span>
					<span class="font-label-mono text-label-mono text-error font-bold"><?php esc_html_e( 'Uncalibrated (α < 0.65)', 'core16' ); ?></span>
				</div>
			</div>

			<!-- Right: The Core16 Psychometric Standard -->
			<div class="lg:col-span-6 bg-[#0D182A] text-on-primary p-space-lg lg:p-space-xl rounded-xl shadow-xl flex flex-col justify-between relative overflow-hidden border border-white/5">
				<!-- Ambient subtle glow -->
				<div class="absolute -right-16 -top-16 w-64 h-64 rounded-full bg-primary-container/20 blur-3xl pointer-events-none"></div>

				<div class="space-y-space-md relative z-10">
					<div class="flex items-center justify-between">
						<span class="font-label-mono text-label-mono uppercase tracking-wider text-primary-fixed"><?php esc_html_e( 'The Core16 Standard', 'core16' ); ?></span>
						<span class="material-symbols-outlined text-primary-fixed text-xl">verified</span>
					</div>
					<h3 class="font-headline-md text-headline-md text-surface-bright font-bold"><?php esc_html_e( 'Decoupled Continuous Vectors', 'core16' ); ?></h3>
					<p class="font-body-sm text-body-sm text-surface-container-high leading-relaxed">
						<?php esc_html_e( 'An engineering-grade psychometric instrument calibrated for boardroom decisions, succession pipelines, and continuous self-mastery.', 'core16' ); ?>
					</p>

					<ul class="space-y-space-sm pt-space-sm font-body-sm text-body-sm text-surface-container-high">
						<li class="flex items-start gap-space-sm">
							<span class="material-symbols-outlined text-primary-fixed text-base shrink-0 mt-0.5">check_circle</span>
							<span><strong class="text-surface-bright"><?php esc_html_e( 'FECA Multi-Dimensional Scale:', 'core16' ); ?></strong> <?php esc_html_e( 'Measures Focus, Energy, Clarity, and Agility as fluid continuous distributions.', 'core16' ); ?></span>
						</li>
						<li class="flex items-start gap-space-sm">
							<span class="material-symbols-outlined text-primary-fixed text-base shrink-0 mt-0.5">check_circle</span>
							<span><strong class="text-surface-bright"><?php esc_html_e( '92.4% Retest Fidelity:', 'core16' ); ?></strong> <?php esc_html_e( 'High longitudinal test-retest reliability powered by maximum-likelihood scoring algorithms.', 'core16' ); ?></span>
						</li>
						<li class="flex items-start gap-space-sm">
							<span class="material-symbols-outlined text-primary-fixed text-base shrink-0 mt-0.5">check_circle</span>
							<span><strong class="text-surface-bright"><?php esc_html_e( 'Derailer & Shadow Analysis:', 'core16' ); ?></strong> <?php esc_html_e( 'Honest diagnostic breakdowns of cognitive blindspots under extreme stress.', 'core16' ); ?></span>
						</li>
						<li class="flex items-start gap-space-sm">
							<span class="material-symbols-outlined text-primary-fixed text-base shrink-0 mt-0.5">check_circle</span>
							<span><strong class="text-surface-bright"><?php esc_html_e( 'Transparent Confidence Intervals:', 'core16' ); ?></strong> <?php esc_html_e( 'Every percentile is published with explicit ± SEM confidence bands.', 'core16' ); ?></span>
						</li>
						<li class="flex items-start gap-space-sm">
							<span class="material-symbols-outlined text-primary-fixed text-base shrink-0 mt-0.5">check_circle</span>
							<span><strong class="text-surface-bright"><?php esc_html_e( 'Architectural Sculptural Avatars:', 'core16' ); ?></strong> <?php esc_html_e( 'Collectible matte resin geometric figurines worthy of an executive desk.', 'core16' ); ?></span>
						</li>
					</ul>
				</div>

				<div class="mt-space-lg p-space-sm rounded-lg bg-surface-container-low/10 flex items-center justify-between relative z-10 border border-white/10">
					<span class="font-label-mono-sm text-label-mono-sm text-secondary-fixed"><?php esc_html_e( 'CLINICAL RELIABILITY', 'core16' ); ?></span>
					<span class="font-label-mono text-label-mono text-primary-fixed font-bold"><?php esc_html_e( 'Standardized (α = 0.912)', 'core16' ); ?></span>
				</div>
			</div>
		</div>
	</div>
</section>
