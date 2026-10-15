<?php
/**
 * The 16 Profiles - Comparison Matrix & Assessment Invitation Gate
 *
 * @package Core16
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- SECTION: VECTOR COMPARISON MATRIX -->
<section class="w-full max-w-[1440px] mx-auto px-margin-sm lg:px-margin-lg py-space-xl border-t border-rule-grey">
	<div class="space-y-6">
		<div class="max-w-2xl space-y-2">
			<span class="font-mono text-xs uppercase tracking-widest text-core-teal font-semibold"><?php esc_html_e( 'Cross-Profile Empirical Matrix', 'core16' ); ?></span>
			<h2 class="font-headline text-2xl sm:text-3xl font-bold text-midnight"><?php esc_html_e( 'Cognitive Polarity Distribution', 'core16' ); ?></h2>
			<p class="font-body text-xs text-slate-subtle leading-relaxed"><?php esc_html_e( 'Decoupled continuous traits across the 16 archetypes plotted by baseline normative medians.', 'core16' ); ?></p>
		</div>

		<div class="w-full overflow-x-auto bg-white border border-rule-grey rounded-lg shadow-sm">
			<table class="w-full text-left font-body text-xs">
				<thead>
					<tr class="bg-mist border-b border-rule-grey font-mono text-xs text-midnight">
						<th class="p-3.5 pl-6 font-semibold">Archetype</th>
						<th class="p-3.5 font-semibold">Domain</th>
						<th class="p-3.5 font-semibold">Primary Polarity</th>
						<th class="p-3.5 font-semibold">Focus [F]</th>
						<th class="p-3.5 font-semibold">Execution [E]</th>
						<th class="p-3.5 font-semibold">Control [C]</th>
						<th class="p-3.5 font-semibold">Adaptation [A]</th>
						<th class="p-3.5 pr-6 font-semibold">Action</th>
					</tr>
				</thead>
				<tbody class="divide-y divide-rule-grey text-slate-subtle">
					<tr>
						<td class="p-3.5 pl-6 font-bold text-midnight font-mono">INTJ</td>
						<td class="p-3.5"><span class="px-2 py-0.5 rounded font-mono text-[10px] bg-[#087F8C]/10 text-[#087F8C]">Strategic</span></td>
						<td class="p-3.5">Independent Autonomy</td>
						<td class="p-3.5 font-mono text-midnight font-semibold">96%</td>
						<td class="p-3.5 font-mono text-midnight">88%</td>
						<td class="p-3.5 font-mono text-midnight">74%</td>
						<td class="p-3.5 font-mono text-midnight">65%</td>
						<td class="p-3.5 pr-6"><a class="text-core-teal font-semibold hover:underline" href="<?php echo esc_url( home_url( '/profile/intj/' ) ); ?>">Dossier &rarr;</a></td>
					</tr>
					<tr>
						<td class="p-3.5 pl-6 font-bold text-midnight font-mono">ENTJ</td>
						<td class="p-3.5"><span class="px-2 py-0.5 rounded font-mono text-[10px] bg-[#087F8C]/10 text-[#087F8C]">Strategic</span></td>
						<td class="p-3.5">Macroscopic Execution</td>
						<td class="p-3.5 font-mono text-midnight">86%</td>
						<td class="p-3.5 font-mono text-midnight font-semibold">95%</td>
						<td class="p-3.5 font-mono text-midnight font-semibold">97%</td>
						<td class="p-3.5 font-mono text-midnight">72%</td>
						<td class="p-3.5 pr-6"><a class="text-core-teal font-semibold hover:underline" href="<?php echo esc_url( home_url( '/profile/entj/' ) ); ?>">Dossier &rarr;</a></td>
					</tr>
					<tr>
						<td class="p-3.5 pl-6 font-bold text-midnight font-mono">INFJ</td>
						<td class="p-3.5"><span class="px-2 py-0.5 rounded font-mono text-[10px] bg-[#6842B8]/10 text-[#6842B8]">Human</span></td>
						<td class="p-3.5">Relational Resonance</td>
						<td class="p-3.5 font-mono text-midnight font-semibold">92%</td>
						<td class="p-3.5 font-mono text-midnight">76%</td>
						<td class="p-3.5 font-mono text-midnight">82%</td>
						<td class="p-3.5 font-mono text-midnight font-semibold">87%</td>
						<td class="p-3.5 pr-6"><a class="text-core-teal font-semibold hover:underline" href="<?php echo esc_url( home_url( '/profile/infj/' ) ); ?>">Dossier &rarr;</a></td>
					</tr>
					<tr>
						<td class="p-3.5 pl-6 font-bold text-midnight font-mono">ISTJ</td>
						<td class="p-3.5"><span class="px-2 py-0.5 rounded font-mono text-[10px] bg-[#188A62]/10 text-[#188A62]">Grounded</span></td>
						<td class="p-3.5">Institutional Fidelity</td>
						<td class="p-3.5 font-mono text-midnight">85%</td>
						<td class="p-3.5 font-mono text-midnight font-semibold">94%</td>
						<td class="p-3.5 font-mono text-midnight font-semibold">98%</td>
						<td class="p-3.5 font-mono text-midnight">51%</td>
						<td class="p-3.5 pr-6"><a class="text-core-teal font-semibold hover:underline" href="<?php echo esc_url( home_url( '/profile/istj/' ) ); ?>">Dossier &rarr;</a></td>
					</tr>
					<tr>
						<td class="p-3.5 pl-6 font-bold text-midnight font-mono">ESTP</td>
						<td class="p-3.5"><span class="px-2 py-0.5 rounded font-mono text-[10px] bg-[#B7871B]/10 text-[#B7871B]">Adaptive</span></td>
						<td class="p-3.5">High-Stakes Velocity</td>
						<td class="p-3.5 font-mono text-midnight">68%</td>
						<td class="p-3.5 font-mono text-midnight font-semibold">96%</td>
						<td class="p-3.5 font-mono text-midnight">62%</td>
						<td class="p-3.5 font-mono text-midnight font-semibold">94%</td>
						<td class="p-3.5 pr-6"><a class="text-core-teal font-semibold hover:underline" href="<?php echo esc_url( home_url( '/profile/estp/' ) ); ?>">Dossier &rarr;</a></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</section>

<!-- SECTION: INVITATION GATE -->
<section class="w-full bg-midnight text-white px-margin-sm lg:px-margin-lg py-20 relative overflow-hidden">
	<div class="max-w-[1440px] mx-auto flex flex-col md:flex-row items-center justify-between gap-10">
		<div class="space-y-3 max-w-2xl text-center md:text-left">
			<span class="font-mono text-xs uppercase text-core-teal tracking-wider font-semibold"><?php esc_html_e( 'Individual Diagnostic Gate', 'core16' ); ?></span>
			<h2 class="font-headline text-3xl font-bold tracking-tight text-white"><?php esc_html_e( 'Discover Your True Continuous Vector Profile.', 'core16' ); ?></h2>
			<p class="font-body text-sm text-[#D7DEE3] leading-relaxed"><?php esc_html_e( 'Take the 12-minute normative assessment to unlock your individual FECA index, blindspot derailers, and tailored career leadership playbook.', 'core16' ); ?></p>
		</div>
		<div class="shrink-0">
			<?php
			core16_button(
				array(
					'text'      => __( 'Take Assessment Now', 'core16' ),
					'url'       => esc_url( home_url( '/individuals/#assessment' ) ),
					'variant'   => 'teal',
					'icon'      => 'arrow_forward',
					'data_path' => 'take-core16-assessment',
				)
			);
			?>
		</div>
	</div>
</section>
