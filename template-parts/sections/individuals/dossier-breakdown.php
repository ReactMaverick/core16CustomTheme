<?php
/**
 * Individuals Page - Report Preview, Tiers & FAQ Section
 *
 * @package Core16
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- SECTION: REPORT PREVIEW -->
<section class="w-full bg-mist py-16 lg:py-24 border-b border-rule-grey" id="report-preview">
	<div class="max-w-[1440px] mx-auto px-margin-sm lg:px-margin-lg space-y-12">
		<div class="max-w-2xl space-y-2">
			<span class="font-mono text-xs text-core-teal uppercase font-semibold"><?php esc_html_e( 'INSIDE YOUR DELIVERABLE', 'core16' ); ?></span>
			<h2 class="font-headline text-2xl sm:text-3xl font-bold text-midnight"><?php esc_html_e( 'What’s Inside the 30-Page Executive Dossier.', 'core16' ); ?></h2>
			<p class="font-body text-xs text-slate-subtle leading-relaxed"><?php esc_html_e( 'Engineered for high-performing professionals navigating competitive executive promotions.', 'core16' ); ?></p>
		</div>

		<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
			<div class="bg-white p-6 rounded-xl border border-rule-grey space-y-3 shadow-sm">
				<span class="material-symbols-outlined text-core-teal text-3xl">psychology</span>
				<h3 class="font-headline text-base font-bold text-midnight"><?php esc_html_e( 'Cognitive Engine Architecture', 'core16' ); ?></h3>
				<p class="font-body text-xs text-slate-subtle leading-relaxed"><?php esc_html_e( 'Granular breakdown of your 4 FECA vector intensities compared against 184,200 benchmarked executives.', 'core16' ); ?></p>
			</div>
			<div class="bg-white p-6 rounded-xl border border-rule-grey space-y-3 shadow-sm">
				<span class="material-symbols-outlined text-core-teal text-3xl">warning</span>
				<h3 class="font-headline text-base font-bold text-midnight"><?php esc_html_e( 'Crisis Derailers & Blindspots', 'core16' ); ?></h3>
				<p class="font-body text-xs text-slate-subtle leading-relaxed"><?php esc_html_e( 'Identify latent behavioral failure modes that emerge under resource scarcity and prolonged ambiguity.', 'core16' ); ?></p>
			</div>
			<div class="bg-white p-6 rounded-xl border border-rule-grey space-y-3 shadow-sm">
				<span class="material-symbols-outlined text-core-teal text-3xl">hub</span>
				<h3 class="font-headline text-base font-bold text-midnight"><?php esc_html_e( 'Interpersonal Dyad Guide', 'core16' ); ?></h3>
				<p class="font-body text-xs text-slate-subtle leading-relaxed"><?php esc_html_e( 'Tactical instructions on how to persuade, negotiate with, and lead every other archetype.', 'core16' ); ?></p>
			</div>
		</div>
	</div>
</section>

<!-- SECTION: INDIVIDUAL TIERS -->
<section class="w-full bg-[#FAFAF7] py-16 lg:py-24 border-b border-rule-grey" id="tiers">
	<div class="max-w-[1440px] mx-auto px-margin-sm lg:px-margin-lg space-y-12">
		<div class="text-center max-w-xl mx-auto space-y-2">
			<span class="font-mono text-xs text-core-teal uppercase font-semibold"><?php esc_html_e( 'INDIVIDUAL ACCESS TIERS', 'core16' ); ?></span>
			<h2 class="font-headline text-3xl font-bold text-midnight"><?php esc_html_e( 'Transparent Self-Investment.', 'core16' ); ?></h2>
		</div>

		<div class="grid grid-cols-1 md:grid-cols-3 gap-6 items-stretch">
			<!-- Tier 1 -->
			<div class="bg-white p-8 rounded-xl border border-rule-grey flex flex-col justify-between shadow-sm">
				<div class="space-y-4">
					<span class="font-mono text-xs uppercase text-slate-subtle"><?php esc_html_e( 'TIER 01 // FREE', 'core16' ); ?></span>
					<h3 class="font-headline text-2xl font-bold text-midnight"><?php esc_html_e( 'Core Diagnostic', 'core16' ); ?></h3>
					<div class="font-headline text-4xl font-bold text-midnight">$0</div>
					<p class="font-body text-xs text-slate-subtle"><?php esc_html_e( 'Baseline archetype identification and high-level FECA scoring.', 'core16' ); ?></p>
					<ul class="space-y-2 font-body text-xs text-slate-subtle pt-4 border-t border-rule-grey">
						<li class="flex items-center gap-2"><span class="material-symbols-outlined text-core-teal text-[16px]">check</span><?php esc_html_e( '12-min clinical test', 'core16' ); ?></li>
						<li class="flex items-center gap-2"><span class="material-symbols-outlined text-core-teal text-[16px]">check</span><?php esc_html_e( 'Nominal Archetype report', 'core16' ); ?></li>
					</ul>
				</div>
				<div class="pt-6">
					<?php
					core16_button(
						array(
							'text'    => __( 'Start Free Test', 'core16' ),
							'url'     => '#assessment',
							'variant' => 'outline',
							'class'   => 'w-full text-center',
						)
					);
					?>
				</div>
			</div>

			<!-- Tier 2: Featured -->
			<div class="bg-midnight text-white p-8 rounded-xl border-2 border-core-teal flex flex-col justify-between shadow-lg relative">
				<span class="absolute -top-3 right-6 px-3 py-0.5 rounded bg-core-teal text-white font-mono text-[10px] uppercase font-bold tracking-wider">
					<?php esc_html_e( 'MOST POPULAR', 'core16' ); ?>
				</span>
				<div class="space-y-4">
					<span class="font-mono text-xs uppercase text-core-teal font-semibold"><?php esc_html_e( 'TIER 02 // EXECUTIVE', 'core16' ); ?></span>
					<h3 class="font-headline text-2xl font-bold text-white"><?php esc_html_e( 'Complete Dossier', 'core16' ); ?></h3>
					<div class="font-headline text-4xl font-bold text-white">$49</div>
					<p class="font-body text-xs text-[#D7DEE3]"><?php esc_html_e( 'Full archival 30-page PDF report with granular sub-constructs and blindspots.', 'core16' ); ?></p>
					<ul class="space-y-2 font-body text-xs text-[#D7DEE3] pt-4 border-t border-white/10">
						<li class="flex items-center gap-2"><span class="material-symbols-outlined text-core-teal text-[16px]">check</span><?php esc_html_e( '30-Page Archival PDF Dossier', 'core16' ); ?></li>
						<li class="flex items-center gap-2"><span class="material-symbols-outlined text-core-teal text-[16px]">check</span><?php esc_html_e( 'Crisis Derailers & Failure Modes', 'core16' ); ?></li>
						<li class="flex items-center gap-2"><span class="material-symbols-outlined text-core-teal text-[16px]">check</span><?php esc_html_e( '90-Day Executive Career Roadmap', 'core16' ); ?></li>
					</ul>
				</div>
				<div class="pt-6">
					<?php
					core16_button(
						array(
							'text'    => __( 'Unlock Full Dossier', 'core16' ),
							'url'     => '#assessment',
							'variant' => 'teal',
							'class'   => 'w-full text-center',
						)
					);
					?>
				</div>
			</div>

			<!-- Tier 3 -->
			<div class="bg-white p-8 rounded-xl border border-rule-grey flex flex-col justify-between shadow-sm">
				<div class="space-y-4">
					<span class="font-mono text-xs uppercase text-slate-subtle"><?php esc_html_e( 'TIER 03 // ADVISORY', 'core16' ); ?></span>
					<h3 class="font-headline text-2xl font-bold text-midnight"><?php esc_html_e( 'Strategy Bundle', 'core16' ); ?></h3>
					<div class="font-headline text-4xl font-bold text-midnight">$129</div>
					<p class="font-body text-xs text-slate-subtle"><?php esc_html_e( 'Dossier plus 1-on-1 certified ICF executive debrief session.', 'core16' ); ?></p>
					<ul class="space-y-2 font-body text-xs text-slate-subtle pt-4 border-t border-rule-grey">
						<li class="flex items-center gap-2"><span class="material-symbols-outlined text-core-teal text-[16px]">check</span><?php esc_html_e( 'Everything in Full Dossier', 'core16' ); ?></li>
						<li class="flex items-center gap-2"><span class="material-symbols-outlined text-core-teal text-[16px]">check</span><?php esc_html_e( '45-Min Executive Coach Debrief', 'core16' ); ?></li>
					</ul>
				</div>
				<div class="pt-6">
					<?php
					core16_button(
						array(
							'text'    => __( 'Select Advisory Bundle', 'core16' ),
							'url'     => '#assessment',
							'variant' => 'outline',
							'class'   => 'w-full text-center',
						)
					);
					?>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- SECTION: FAQ -->
<section class="w-full bg-white py-16 border-b border-rule-grey">
	<div class="max-w-[1000px] mx-auto px-margin-sm lg:px-margin-lg space-y-8">
		<div class="space-y-2">
			<span class="font-mono text-xs text-core-teal uppercase font-semibold"><?php esc_html_e( 'COMMONLY ASKED QUESTIONS', 'core16' ); ?></span>
			<h2 class="font-headline text-2xl font-bold text-midnight"><?php esc_html_e( 'Everything You Need to Know.', 'core16' ); ?></h2>
		</div>

		<div class="divide-y divide-rule-grey border-y border-rule-grey font-body text-xs">
			<div class="py-4 space-y-1">
				<h4 class="font-headline text-sm font-semibold text-midnight"><?php esc_html_e( 'How long does the assessment take to complete?', 'core16' ); ?></h4>
				<p class="text-slate-subtle leading-relaxed"><?php esc_html_e( 'The test takes approximately 12 minutes to complete under uninterrupted conditions across 84 continuous Likert items.', 'core16' ); ?></p>
			</div>
			<div class="py-4 space-y-1">
				<h4 class="font-headline text-sm font-semibold text-midnight"><?php esc_html_e( 'How is Core16 different from the MBTI or Enneagram?', 'core16' ); ?></h4>
				<p class="text-slate-subtle leading-relaxed"><?php esc_html_e( 'Core16 does not use binary forced-choice questions or ipsative typing. It measures continuous traits calibrated to ISO 10667-2 psychometrics with proven r=0.94 stability.', 'core16' ); ?></p>
			</div>
		</div>
	</div>
</section>
