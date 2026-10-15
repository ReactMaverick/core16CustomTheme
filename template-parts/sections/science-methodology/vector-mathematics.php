<?php
/**
 * Science & Methodology - Continuous Vector Mathematics & Consultation CTA
 *
 * @package Core16
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- SECTION: VECTOR MATHEMATICS -->
<section class="w-full bg-white py-16 lg:py-24 border-b border-rule-grey">
	<div class="max-w-[1440px] mx-auto px-margin-sm lg:px-margin-lg space-y-12">
		<div class="max-w-3xl space-y-3">
			<span class="font-mono text-xs text-core-teal uppercase font-semibold"><?php esc_html_e( 'LATENT TRAIT MATHEMATICS', 'core16' ); ?></span>
			<h2 class="font-headline text-2xl sm:text-3xl font-bold text-midnight"><?php esc_html_e( 'The Mathematics of Decoupled Vectoring.', 'core16' ); ?></h2>
			<p class="font-body text-xs text-slate-subtle leading-relaxed"><?php esc_html_e( 'How Core16 overcomes the fatal mathematical flaws of ipsative typology tests.', 'core16' ); ?></p>
		</div>

		<div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
			<div class="bg-mist p-6 lg:p-8 rounded-xl border border-rule-grey space-y-4">
				<div class="flex items-center gap-2 text-red-600 font-mono text-xs font-bold uppercase">
					<span class="material-symbols-outlined text-[18px]">cancel</span>
					<?php esc_html_e( 'Antiquated Ipsative Typing (1940s)', 'core16' ); ?>
				</div>
				<ul class="space-y-3 font-body text-xs text-slate-subtle">
					<li class="flex items-start gap-2">
						<span class="text-red-500 font-bold">•</span>
						<span><strong>Forced Binary Choice:</strong> Forces a choice between "Thinking" or "Feeling", artificially destroying natural dual-competency.</span>
					</li>
					<li class="flex items-start gap-2">
						<span class="text-red-500 font-bold">•</span>
						<span><strong>Zero Percentile Resolution:</strong> Two people with 51% and 99% scores are labeled with the exact same letter.</span>
					</li>
					<li class="flex items-start gap-2">
						<span class="text-red-500 font-bold">•</span>
						<span><strong>High Retest Volatility:</strong> Up to 50% of test-takers receive a different archetype upon taking the test 5 weeks later.</span>
					</li>
				</ul>
			</div>

			<div class="bg-midnight text-white p-6 lg:p-8 rounded-xl border border-core-teal space-y-4 shadow-lg">
				<div class="flex items-center gap-2 text-core-teal font-mono text-xs font-bold uppercase">
					<span class="material-symbols-outlined text-[18px]">verified</span>
					<?php esc_html_e( 'Core16 Continuous Vector Engine (ISO 10667-2)', 'core16' ); ?>
				</div>
				<ul class="space-y-3 font-body text-xs text-[#D7DEE3]">
					<li class="flex items-start gap-2">
						<span class="text-core-teal font-bold">•</span>
						<span><strong>Continuous Likert Scoring:</strong> 7-point continuous vector tracking with millisecond response latency calibration.</span>
					</li>
					<li class="flex items-start gap-2">
						<span class="text-core-teal font-bold">•</span>
						<span><strong>Decoupled FECA Indices:</strong> Measures nominal Archetype alongside independent 0-100 percentile intensities across [F], [E], [C], [A].</span>
					</li>
					<li class="flex items-start gap-2">
						<span class="text-core-teal font-bold">•</span>
						<span><strong>Clinical Test-Retest Stability (r=0.94):</strong> Proven mathematical stability across repeated evaluations.</span>
					</li>
				</ul>
			</div>
		</div>
	</div>
</section>

<!-- SECTION: METHODOLOGY BRIEFING CTA -->
<section class="w-full bg-[#0D182A] text-white px-margin-sm lg:px-margin-lg py-20 relative overflow-hidden">
	<div class="max-w-[1440px] mx-auto flex flex-col lg:flex-row items-center justify-between gap-12 relative z-10">
		<div class="space-y-4 max-w-2xl text-center lg:text-left">
			<span class="font-mono text-xs text-core-teal uppercase tracking-widest font-semibold"><?php esc_html_e( 'INSTITUTIONAL VALIDATION ACCESS', 'core16' ); ?></span>
			<h2 class="font-headline text-3xl sm:text-4xl font-bold tracking-tight text-white"><?php esc_html_e( 'Schedule a Direct Briefing with Core16 Psychometricians.', 'core16' ); ?></h2>
			<p class="font-body text-sm text-[#D7DEE3] leading-relaxed"><?php esc_html_e( 'For enterprise selection committees, IO psychologists, and talent governance boards. Access anonymized normative raw datasets and item characteristic curves.', 'core16' ); ?></p>
		</div>
		<div class="flex flex-col sm:flex-row items-center gap-4 shrink-0">
			<?php
			core16_button(
				array(
					'text'    => __( 'Request Psychometrician Consultation', 'core16' ),
					'url'     => esc_url( home_url( '/enterprise/#inquiry' ) ),
					'variant' => 'teal',
					'icon'    => 'calendar_today',
				)
			);
			?>
		</div>
	</div>
</section>
