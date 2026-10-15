<?php
/**
 * Pricing Page - Feature Comparison Matrix & Institutional Guarantee Section (Static)
 *
 * @package Core16
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- SECTION: FEATURE COMPARISON MATRIX -->
<section class="w-full bg-[#FAFAF7] py-16 lg:py-24 border-b border-rule-grey">
	<div class="max-w-[1440px] mx-auto px-margin-sm lg:px-margin-lg space-y-12">
		<div class="space-y-2">
			<span class="font-mono text-xs text-core-teal uppercase font-semibold"><?php esc_html_e( 'GRANULAR CAPABILITY COMPARISON', 'core16' ); ?></span>
			<h2 class="font-headline text-3xl font-bold text-midnight"><?php esc_html_e( 'Detailed Plan Specifications.', 'core16' ); ?></h2>
		</div>

		<div class="w-full overflow-x-auto bg-white border border-rule-grey rounded-xl shadow-sm">
			<table class="w-full text-left font-body text-xs">
				<thead>
					<tr class="bg-mist border-b border-rule-grey font-mono text-xs text-midnight">
						<th class="p-4 pl-6 font-bold"><?php esc_html_e( 'Platform Feature', 'core16' ); ?></th>
						<th class="p-4 text-center font-bold"><?php esc_html_e( 'Core ($0)', 'core16' ); ?></th>
						<th class="p-4 text-center font-bold text-core-teal"><?php esc_html_e( 'Dossier ($49)', 'core16' ); ?></th>
						<th class="p-4 pr-6 text-center font-bold"><?php esc_html_e( 'Enterprise ($340)', 'core16' ); ?></th>
					</tr>
				</thead>
				<tbody class="divide-y divide-rule-grey text-slate-subtle">
					<tr>
						<td class="p-4 pl-6 font-semibold text-midnight"><?php esc_html_e( 'Continuous Likert Evaluation', 'core16' ); ?></td>
						<td class="p-4 text-center"><span class="material-symbols-outlined text-core-teal text-[18px]">check</span></td>
						<td class="p-4 text-center"><span class="material-symbols-outlined text-core-teal text-[18px]">check</span></td>
						<td class="p-4 pr-6 text-center"><span class="material-symbols-outlined text-core-teal text-[18px]">check</span></td>
					</tr>
					<tr>
						<td class="p-4 pl-6 font-semibold text-midnight"><?php esc_html_e( '16 Nominal Archetype Identification', 'core16' ); ?></td>
						<td class="p-4 text-center"><span class="material-symbols-outlined text-core-teal text-[18px]">check</span></td>
						<td class="p-4 text-center"><span class="material-symbols-outlined text-core-teal text-[18px]">check</span></td>
						<td class="p-4 pr-6 text-center"><span class="material-symbols-outlined text-core-teal text-[18px]">check</span></td>
					</tr>
					<tr>
						<td class="p-4 pl-6 font-semibold text-midnight"><?php esc_html_e( 'Archival 30-Page Dossier (PDF)', 'core16' ); ?></td>
						<td class="p-4 text-center text-slate-300">—</td>
						<td class="p-4 text-center"><span class="material-symbols-outlined text-core-teal text-[18px]">check</span></td>
						<td class="p-4 pr-6 text-center"><span class="material-symbols-outlined text-core-teal text-[18px]">check</span></td>
					</tr>
					<tr>
						<td class="p-4 pl-6 font-semibold text-midnight"><?php esc_html_e( 'Crisis Derailers & Stress Markers', 'core16' ); ?></td>
						<td class="p-4 text-center text-slate-300">—</td>
						<td class="p-4 text-center"><span class="material-symbols-outlined text-core-teal text-[18px]">check</span></td>
						<td class="p-4 pr-6 text-center"><span class="material-symbols-outlined text-core-teal text-[18px]">check</span></td>
					</tr>
					<tr>
						<td class="p-4 pl-6 font-semibold text-midnight"><?php esc_html_e( 'Pairwise C-Suite Dyad Chemistry', 'core16' ); ?></td>
						<td class="p-4 text-center text-slate-300">—</td>
						<td class="p-4 text-center text-slate-300">—</td>
						<td class="p-4 pr-6 text-center"><span class="material-symbols-outlined text-core-teal text-[18px]">check</span></td>
					</tr>
					<tr>
						<td class="p-4 pl-6 font-semibold text-midnight"><?php esc_html_e( 'ATS / Greenhouse API Integration', 'core16' ); ?></td>
						<td class="p-4 text-center text-slate-300">—</td>
						<td class="p-4 text-center text-slate-300">—</td>
						<td class="p-4 pr-6 text-center"><span class="material-symbols-outlined text-core-teal text-[18px]">check</span></td>
					</tr>
					<tr>
						<td class="p-4 pl-6 font-semibold text-midnight"><?php esc_html_e( 'Dedicated Psychometrician Debrief', 'core16' ); ?></td>
						<td class="p-4 text-center text-slate-300">—</td>
						<td class="p-4 text-center text-slate-300">—</td>
						<td class="p-4 pr-6 text-center"><span class="material-symbols-outlined text-core-teal text-[18px]">check</span></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</section>

<!-- SECTION: INSTITUTIONAL ASSURANCE & GUARANTEE -->
<section class="w-full bg-white py-16">
	<div class="max-w-[1000px] mx-auto px-margin-sm lg:px-margin-lg text-center space-y-4">
		<div class="inline-flex items-center justify-center w-12 h-12 rounded-full bg-mist text-core-teal">
			<span class="material-symbols-outlined text-2xl">verified_user</span>
		</div>
		<h3 class="font-headline text-2xl font-bold text-midnight"><?php esc_html_e( '100% Scientific Rigor Guarantee.', 'core16' ); ?></h3>
		<p class="font-body text-xs text-slate-subtle max-w-xl mx-auto leading-relaxed">
			<?php esc_html_e( 'If your Executive Dossier does not deliver actionable insight into your leadership behavior and cognitive derailers, contact our psychometric support desk within 30 days for a full refund.', 'core16' ); ?>
		</p>
	</div>
</section>
