<?php
/**
 * Pricing Page - Hero Header & Plans Section (Static Content as required)
 *
 * @package Core16
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- SECTION: PRICING HERO & TOGGLE -->
<section class="w-full bg-[#FAFAF7] py-16 lg:py-20 border-b border-rule-grey">
	<div class="max-w-[1440px] mx-auto px-margin-sm lg:px-margin-lg text-center space-y-6">
		<div class="inline-flex items-center gap-2 px-3 py-1 bg-mist rounded border border-rule-grey">
			<span class="w-1.5 h-1.5 rounded-full bg-core-teal"></span>
			<span class="font-mono text-xs text-core-teal tracking-widest uppercase font-semibold"><?php esc_html_e( 'Transparent Value Architecture', 'core16' ); ?></span>
		</div>
		<h1 class="font-headline text-3xl sm:text-4xl lg:text-5xl font-bold tracking-tight text-midnight">
			<?php esc_html_e( 'Invest in Actionable', 'core16' ); ?> <span class="text-core-teal"><?php esc_html_e( 'Self-Knowledge.', 'core16' ); ?></span>
		</h1>
		<p class="font-body text-base text-slate-subtle max-w-2xl mx-auto leading-relaxed">
			<?php esc_html_e( 'Begin with our free validated cognitive diagnostic, or unlock comprehensive 30-page executive dossiers and scalable team intelligence platforms.', 'core16' ); ?>
		</p>
	</div>
</section>

<!-- SECTION: 3 PLANS CARDS -->
<section class="w-full bg-white py-16 lg:py-24 border-b border-rule-grey">
	<div class="max-w-[1440px] mx-auto px-margin-sm lg:px-margin-lg space-y-12">
		<div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-stretch">
			
			<!-- Card 1: Core Diagnostic -->
			<div class="flex flex-col justify-between p-8 rounded-xl bg-mist border border-rule-grey shadow-sm hover:shadow-md transition-shadow">
				<div class="space-y-6">
					<div class="flex items-center justify-between pb-3 border-b border-rule-grey">
						<span class="font-mono text-xs text-slate-subtle uppercase tracking-wider font-semibold"><?php esc_html_e( 'Tier 01 // Baseline', 'core16' ); ?></span>
						<span class="px-2 py-0.5 rounded bg-white font-mono text-[10px] text-slate-subtle uppercase border border-rule-grey"><?php esc_html_e( 'No Credit Card', 'core16' ); ?></span>
					</div>
					<div>
						<h3 class="font-headline text-2xl font-bold text-midnight"><?php esc_html_e( 'Core Diagnostic', 'core16' ); ?></h3>
						<p class="font-body text-xs text-slate-subtle mt-1"><?php esc_html_e( 'Normative cognitive baseline for individual orientation.', 'core16' ); ?></p>
					</div>
					<div class="flex items-baseline gap-2">
						<span class="font-headline text-4xl font-bold text-midnight">£0</span>
						<span class="font-body text-xs text-slate-subtle"><?php esc_html_e( '/ $0 free forever', 'core16' ); ?></span>
					</div>
					<div class="p-3 bg-white rounded border border-rule-grey space-y-1.5 font-mono text-[11px]">
						<div class="flex justify-between text-slate-subtle">
							<span><?php esc_html_e( 'FECA Metric Resolution', 'core16' ); ?></span>
							<span class="text-core-teal font-semibold"><?php esc_html_e( 'Standard (4-axis)', 'core16' ); ?></span>
						</div>
						<div class="w-full bg-mist h-1.5 rounded-full overflow-hidden">
							<div class="bg-core-teal h-full w-2/5 rounded-full"></div>
						</div>
					</div>
					<ul class="space-y-2.5 font-body text-xs text-slate-subtle pt-4 border-t border-rule-grey">
						<li class="flex items-center gap-2"><span class="material-symbols-outlined text-core-teal text-[16px]">check</span><?php esc_html_e( '48-item continuous protocol (32 Jungian + 16 FECA)', 'core16' ); ?></li>
						<li class="flex items-center gap-2"><span class="material-symbols-outlined text-core-teal text-[16px]">check</span><?php esc_html_e( 'Nominal 16 Archetype assignment', 'core16' ); ?></li>
						<li class="flex items-center gap-2"><span class="material-symbols-outlined text-core-teal text-[16px]">check</span><?php esc_html_e( 'High-level FECA percentiles', 'core16' ); ?></li>
						<li class="flex items-center gap-2 text-slate-400"><span class="material-symbols-outlined text-[16px]">close</span><?php esc_html_e( 'Archival 30-page PDF report', 'core16' ); ?></li>
						<li class="flex items-center gap-2 text-slate-400"><span class="material-symbols-outlined text-[16px]">close</span><?php esc_html_e( 'AI Coach conversational access', 'core16' ); ?></li>
					</ul>
				</div>
				<div class="pt-8">
					<?php
					core16_button(
						array(
							'text'      => __( 'Start Free Evaluation', 'core16' ),
							'url'       => esc_url( home_url( '/individuals/#assessment' ) ),
							'variant'   => 'outline',
							'class'     => 'w-full text-center',
							'data_path' => 'take-core16-assessment',
						)
					);
					?>
				</div>
			</div>

			<!-- Card 2: Premium Report (Featured) -->
			<div class="flex flex-col justify-between p-8 rounded-xl bg-midnight text-white border-2 border-core-teal shadow-xl relative">
				<span class="absolute -top-3 right-6 px-3 py-0.5 rounded bg-core-teal text-white font-mono text-[10px] uppercase font-bold tracking-wider">
					<?php esc_html_e( 'RECOMMENDED // CORE16 UPGRADE', 'core16' ); ?>
				</span>
				<div class="space-y-6">
					<div class="flex items-center justify-between pb-3 border-b border-white/10">
						<span class="font-mono text-xs text-core-teal uppercase tracking-wider font-semibold"><?php esc_html_e( 'Tier 02 // Premium Report', 'core16' ); ?></span>
						<span class="px-2 py-0.5 rounded bg-[#17365D] font-mono text-[10px] text-[#7DF4FB] uppercase border border-white/10"><?php esc_html_e( 'One-Time Purchase', 'core16' ); ?></span>
					</div>
					<div>
						<h3 class="font-headline text-2xl font-bold text-white"><?php esc_html_e( 'Premium Report', 'core16' ); ?></h3>
						<p class="font-body text-xs text-[#D7DEE3] mt-1"><?php esc_html_e( 'Comprehensive 30-page archival dossier, deep FECA analysis & AI Coach access.', 'core16' ); ?></p>
					</div>
					<div class="flex items-baseline gap-2">
						<span class="font-headline text-4xl font-bold text-white">£20</span>
						<span class="font-body text-xs text-[#A0B4C8]"><?php esc_html_e( '/ $25 one-time', 'core16' ); ?></span>
					</div>
					<div class="p-3 bg-[#132238] rounded border border-white/10 space-y-1.5 font-mono text-[11px]">
						<div class="flex justify-between text-[#D7DEE3]">
							<span><?php esc_html_e( 'FECA Metric Resolution', 'core16' ); ?></span>
							<span class="text-core-teal font-semibold"><?php esc_html_e( 'Maximum (16-subconstruct)', 'core16' ); ?></span>
						</div>
						<div class="w-full bg-midnight h-1.5 rounded-full overflow-hidden">
							<div class="bg-core-teal h-full w-full rounded-full"></div>
						</div>
					</div>
					<ul class="space-y-2.5 font-body text-xs text-[#D7DEE3] pt-4 border-t border-white/10">
						<li class="flex items-center gap-2"><span class="material-symbols-outlined text-core-teal text-[16px]">check</span><?php esc_html_e( 'Everything in Core Diagnostic', 'core16' ); ?></li>
						<li class="flex items-center gap-2"><span class="material-symbols-outlined text-core-teal text-[16px]">check</span><?php esc_html_e( '30-page archival Executive Dossier (PDF)', 'core16' ); ?></li>
						<li class="flex items-center gap-2"><span class="material-symbols-outlined text-core-teal text-[16px]">check</span><?php esc_html_e( 'Core16 AI Coach conversational guidance', 'core16' ); ?></li>
						<li class="flex items-center gap-2"><span class="material-symbols-outlined text-core-teal text-[16px]">check</span><?php esc_html_e( 'Crisis derailers & stress failure modes', 'core16' ); ?></li>
						<li class="flex items-center gap-2"><span class="material-symbols-outlined text-core-teal text-[16px]">check</span><?php esc_html_e( '90-Day Tactical Career & Leadership Roadmap', 'core16' ); ?></li>
					</ul>
				</div>
				<div class="pt-8">
					<?php
					core16_button(
						array(
							'text'      => __( 'Unlock Premium Report (£20)', 'core16' ),
							'url'       => esc_url( home_url( '/individuals/#assessment' ) ),
							'variant'   => 'teal',
							'class'     => 'w-full text-center',
							'icon'      => 'arrow_forward',
							'data_path' => 'take-core16-assessment',
						)
					);
					?>
				</div>
			</div>

			<!-- Card 3: Team / Enterprise / Schools -->
			<div class="flex flex-col justify-between p-8 rounded-xl bg-mist border border-rule-grey shadow-sm hover:shadow-md transition-shadow">
				<div class="space-y-6">
					<div class="flex items-center justify-between pb-3 border-b border-rule-grey">
						<span class="font-mono text-xs text-slate-subtle uppercase tracking-wider font-semibold"><?php esc_html_e( 'Tier 03 // Pro & Institutional', 'core16' ); ?></span>
						<span class="px-2 py-0.5 rounded bg-white font-mono text-[10px] text-slate-subtle uppercase border border-rule-grey"><?php esc_html_e( 'Teams & Schools', 'core16' ); ?></span>
					</div>
					<div>
						<h3 class="font-headline text-2xl font-bold text-midnight"><?php esc_html_e( 'Professional & Institutional', 'core16' ); ?></h3>
						<p class="font-body text-xs text-slate-subtle mt-1"><?php esc_html_e( 'For schools, team profiling, 90-min training workshops, and executive dyads.', 'core16' ); ?></p>
					</div>
					<div class="flex items-baseline gap-2">
						<span class="font-headline text-4xl font-bold text-midnight">£395</span>
						<span class="font-body text-xs text-slate-subtle"><?php esc_html_e( '/ $495 cohort session', 'core16' ); ?></span>
					</div>
					<div class="p-3 bg-white rounded border border-rule-grey space-y-1.5 font-mono text-[11px]">
						<div class="flex justify-between text-slate-subtle">
							<span><?php esc_html_e( 'Team Chemistry Dyads', 'core16' ); ?></span>
							<span class="text-core-teal font-semibold"><?php esc_html_e( 'Full Matrix Enabled', 'core16' ); ?></span>
						</div>
						<div class="w-full bg-mist h-1.5 rounded-full overflow-hidden">
							<div class="bg-core-teal h-full w-full rounded-full"></div>
						</div>
					</div>
					<ul class="space-y-2.5 font-body text-xs text-slate-subtle pt-4 border-t border-rule-grey">
						<li class="flex items-center gap-2"><span class="material-symbols-outlined text-core-teal text-[16px]">check</span><?php esc_html_e( 'Everything in Premium Report', 'core16' ); ?></li>
						<li class="flex items-center gap-2"><span class="material-symbols-outlined text-core-teal text-[16px]">check</span><?php esc_html_e( '90-minute training proposition & debrief', 'core16' ); ?></li>
						<li class="flex items-center gap-2"><span class="material-symbols-outlined text-core-teal text-[16px]">check</span><?php esc_html_e( 'Class-code / cohort administration dashboard', 'core16' ); ?></li>
						<li class="flex items-center gap-2"><span class="material-symbols-outlined text-core-teal text-[16px]">check</span><?php esc_html_e( 'Pairwise executive dyad chemistry simulation', 'core16' ); ?></li>
						<li class="flex items-center gap-2"><span class="material-symbols-outlined text-core-teal text-[16px]">check</span><?php esc_html_e( 'ATS / HRIS integration & institutional invoicing', 'core16' ); ?></li>
					</ul>
				</div>
				<div class="pt-8">
					<?php
					core16_button(
						array(
							'text'      => __( 'Inquire for Institution (£395)', 'core16' ),
							'url'       => esc_url( home_url( '/enterprise/#inquiry' ) ),
							'variant'   => 'outline',
							'class'     => 'w-full text-center',
						)
					);
					?>
				</div>
			</div>

		</div>
	</div>
</section>
