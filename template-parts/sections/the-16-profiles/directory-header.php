<?php
/**
 * The 16 Profiles - Directory Header & Filter Section
 *
 * @package Core16
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<section class="w-full max-w-[1440px] mx-auto px-margin-sm lg:px-margin-lg pt-space-xl pb-space-lg">
	<div class="flex flex-col md:flex-row md:items-end justify-between border-b border-rule-grey pb-space-lg gap-space-md">
		<div class="space-y-space-xs max-w-3xl">
			<div class="flex items-center gap-space-sm">
				<span class="inline-block w-2.5 h-2.5 rounded-full bg-core-teal"></span>
				<span class="font-mono text-xs uppercase tracking-widest text-slate-subtle font-semibold">
					<?php esc_html_e( 'SYSTEMATIC ARCHETYPE TAXONOMY // 16 EXECUTIVE PROFILES', 'core16' ); ?>
				</span>
			</div>
			<h1 class="font-headline text-3xl sm:text-4xl lg:text-5xl font-bold tracking-tight text-midnight">
				<?php esc_html_e( 'The 16 Profiles.', 'core16' ); ?>
			</h1>
			<p class="font-body text-base text-slate-subtle leading-relaxed">
				<?php esc_html_e( 'Decoupled nominal archetypes mapped across 4 cognitive domains, calibrated to measure strategic cadence, crisis derailers, and executive velocity.', 'core16' ); ?>
			</p>
		</div>

		<!-- Interactive Filter Buttons -->
		<div class="flex flex-wrap items-center gap-2 font-mono text-xs">
			<button type="button" class="px-3.5 py-1.5 rounded bg-midnight text-white font-semibold shadow-sm transition-all profile-filter-btn" data-filter="all">
				<?php esc_html_e( 'All 16', 'core16' ); ?>
			</button>
			<button type="button" class="px-3 py-1.5 rounded bg-mist text-slate-subtle hover:text-midnight hover:bg-rule-grey transition-all profile-filter-btn" data-filter="strategic">
				<?php esc_html_e( 'Strategic (4)', 'core16' ); ?>
			</button>
			<button type="button" class="px-3 py-1.5 rounded bg-mist text-slate-subtle hover:text-midnight hover:bg-rule-grey transition-all profile-filter-btn" data-filter="human">
				<?php esc_html_e( 'Human (4)', 'core16' ); ?>
			</button>
			<button type="button" class="px-3 py-1.5 rounded bg-mist text-slate-subtle hover:text-midnight hover:bg-rule-grey transition-all profile-filter-btn" data-filter="grounded">
				<?php esc_html_e( 'Grounded (4)', 'core16' ); ?>
			</button>
			<button type="button" class="px-3 py-1.5 rounded bg-mist text-slate-subtle hover:text-midnight hover:bg-rule-grey transition-all profile-filter-btn" data-filter="adaptive">
				<?php esc_html_e( 'Adaptive (4)', 'core16' ); ?>
			</button>
		</div>
	</div>
</section>
