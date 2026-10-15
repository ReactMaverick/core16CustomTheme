<?php
/**
 * How Core16 Works - Phase 2 Decoupled Measurement Engine (Elena vs Marcus)
 *
 * @package Core16
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<section class="w-full bg-midnight text-[#FAFAF7] px-margin-sm lg:px-margin-lg py-24">
	<div class="max-w-[1440px] mx-auto space-y-16">
		<div class="max-w-3xl space-y-4">
			<div class="inline-flex items-center gap-2 px-3 py-1 rounded bg-[#17365D] border border-white/10">
				<span class="w-2 h-2 rounded-full bg-core-teal"></span>
				<span class="font-mono text-xs uppercase tracking-wider text-[#A0B4C8]"><?php esc_html_e( 'Phase 02 // Vector Decoupling', 'core16' ); ?></span>
			</div>
			<h2 class="font-headline text-3xl sm:text-4xl lg:text-5xl tracking-tight text-white font-bold">
				<?php esc_html_e( 'Why Two “INTJ Commanders” Lead Completely Differently.', 'core16' ); ?>
			</h2>
			<p class="font-body text-base lg:text-lg text-[#D7DEE3] max-w-2xl leading-relaxed">
				<?php esc_html_e( 'Traditional typology tests compress 8 billion people into 16 rigid, monolithic archetypes. Core16 separates nominal Archetype identification from continuous trait intensity through the FECA Engine: Focus, Execution, Control, and Adaptive.', 'core16' ); ?>
			</p>
		</div>

		<!-- Comparative Side-by-Side Cards -->
		<div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
			<!-- Candidate A: Elena -->
			<div class="lg:col-span-6 bg-[#132238] border border-white/15 rounded-lg p-6 lg:p-8 space-y-6">
				<div class="flex flex-wrap items-start justify-between pb-6 border-b border-white/10 gap-4">
					<div>
						<span class="font-mono text-xs uppercase text-[#A0B4C8]"><?php esc_html_e( 'Candidate Profile 01', 'core16' ); ?></span>
						<h3 class="font-headline text-2xl text-white font-semibold mt-1">Elena Rostova</h3>
						<p class="font-body text-xs text-[#A0B4C8]"><?php esc_html_e( 'Managing Partner, Private Equity Infrastructure Fund', 'core16' ); ?></p>
					</div>
					<div class="px-3.5 py-1.5 bg-[#273A8A] border border-[#273A8A] rounded text-right shadow-sm">
						<span class="font-mono text-xs text-white font-bold block">INTJ-C</span>
						<span class="font-mono text-[11px] text-white/90 block font-medium"><?php esc_html_e( 'Strategist / Deliberate', 'core16' ); ?></span>
					</div>
				</div>

				<div class="space-y-4">
					<span class="font-mono text-xs uppercase tracking-wider text-[#A0B4C8] block"><?php esc_html_e( 'FECA Metric Readout (95% CI Interval)', 'core16' ); ?></span>
					<div class="space-y-1.5">
						<div class="flex justify-between font-mono text-xs text-[#D7DEE3]">
							<span><?php esc_html_e( 'FOCUS [Hyper-Deep Analytical Synthesis]', 'core16' ); ?></span>
							<span class="text-core-teal font-bold">94%</span>
						</div>
						<div class="w-full h-2 bg-midnight rounded-full overflow-hidden">
							<div class="h-full bg-core-teal rounded-full" style="width: 94%;"></div>
						</div>
					</div>
					<div class="space-y-1.5">
						<div class="flex justify-between font-mono text-xs text-[#D7DEE3]">
							<span><?php esc_html_e( 'EXECUTION [Deliberative Structural Cadence]', 'core16' ); ?></span>
							<span class="text-core-teal font-bold">62%</span>
						</div>
						<div class="w-full h-2 bg-midnight rounded-full overflow-hidden">
							<div class="h-full bg-core-teal rounded-full" style="width: 62%;"></div>
						</div>
					</div>
					<div class="space-y-1.5">
						<div class="flex justify-between font-mono text-xs text-[#D7DEE3]">
							<span><?php esc_html_e( 'CONTROL [Deterministic Oversight & Process]', 'core16' ); ?></span>
							<span class="text-core-teal font-bold">88%</span>
						</div>
						<div class="w-full h-2 bg-midnight rounded-full overflow-hidden">
							<div class="h-full bg-core-teal rounded-full" style="width: 88%;"></div>
						</div>
					</div>
					<div class="space-y-1.5">
						<div class="flex justify-between font-mono text-xs text-[#D7DEE3]">
							<span><?php esc_html_e( 'ADAPTIVE [Ambiguity Tolerance & Pivot]', 'core16' ); ?></span>
							<span class="text-[#A0B4C8] font-bold">41%</span>
						</div>
						<div class="w-full h-2 bg-midnight rounded-full overflow-hidden">
							<div class="h-full bg-slate-subtle rounded-full" style="width: 41%;"></div>
						</div>
					</div>
				</div>

				<div class="p-4 bg-midnight border border-white/10 rounded font-body text-xs text-[#FAFAF7] space-y-1.5">
					<strong class="text-white block font-mono text-xs tracking-wider"><?php esc_html_e( 'BEHAVIORAL CADENCE SUMMARY:', 'core16' ); ?></strong>
					<p class="leading-relaxed"><?php esc_html_e( 'Elena demonstrates profound capital-allocation patience. She will refuse deployment until uncertainty is mathematically bounded, making her an extraordinary institutional risk safeguard.', 'core16' ); ?></p>
				</div>
			</div>

			<!-- Candidate B: Marcus -->
			<div class="lg:col-span-6 bg-[#132238] border border-white/15 rounded-lg p-6 lg:p-8 space-y-6">
				<div class="flex flex-wrap items-start justify-between pb-6 border-b border-white/10 gap-4">
					<div>
						<span class="font-mono text-xs uppercase text-[#A0B4C8]"><?php esc_html_e( 'Candidate Profile 02', 'core16' ); ?></span>
						<h3 class="font-headline text-2xl text-white font-semibold mt-1">Marcus Vance</h3>
						<p class="font-body text-xs text-[#A0B4C8]"><?php esc_html_e( 'VP Engineering, Series B Autonomous Systems', 'core16' ); ?></p>
					</div>
					<div class="px-3.5 py-1.5 bg-[#273A8A] border border-[#273A8A] rounded text-right shadow-sm">
						<span class="font-mono text-xs text-white font-bold block">INTJ-C</span>
						<span class="font-mono text-[11px] text-white/90 block font-medium"><?php esc_html_e( 'Strategist / Agile', 'core16' ); ?></span>
					</div>
				</div>

				<div class="space-y-4">
					<span class="font-mono text-xs uppercase tracking-wider text-[#A0B4C8] block"><?php esc_html_e( 'FECA Metric Readout (95% CI Interval)', 'core16' ); ?></span>
					<div class="space-y-1.5">
						<div class="flex justify-between font-mono text-xs text-[#D7DEE3]">
							<span><?php esc_html_e( 'FOCUS [Panoramic Scanning & Horizon Sensing]', 'core16' ); ?></span>
							<span class="text-core-teal font-bold">72%</span>
						</div>
						<div class="w-full h-2 bg-midnight rounded-full overflow-hidden">
							<div class="h-full bg-core-teal rounded-full" style="width: 72%;"></div>
						</div>
					</div>
					<div class="space-y-1.5">
						<div class="flex justify-between font-mono text-xs text-[#D7DEE3]">
							<span><?php esc_html_e( 'EXECUTION [High-Velocity Sprint Velocity]', 'core16' ); ?></span>
							<span class="text-core-teal font-bold">91%</span>
						</div>
						<div class="w-full h-2 bg-midnight rounded-full overflow-hidden">
							<div class="h-full bg-core-teal rounded-full" style="width: 91%;"></div>
						</div>
					</div>
					<div class="space-y-1.5">
						<div class="flex justify-between font-mono text-xs text-[#D7DEE3]">
							<span><?php esc_html_e( 'CONTROL [Heuristic Elasticity & Pragmatism]', 'core16' ); ?></span>
							<span class="text-core-teal font-bold">58%</span>
						</div>
						<div class="w-full h-2 bg-midnight rounded-full overflow-hidden">
							<div class="h-full bg-core-teal rounded-full" style="width: 58%;"></div>
						</div>
					</div>
					<div class="space-y-1.5">
						<div class="flex justify-between font-mono text-xs text-[#D7DEE3]">
							<span><?php esc_html_e( 'ADAPTIVE [Rapid Organizational Reorientation]', 'core16' ); ?></span>
							<span class="text-core-teal font-bold">85%</span>
						</div>
						<div class="w-full h-2 bg-midnight rounded-full overflow-hidden">
							<div class="h-full bg-core-teal rounded-full" style="width: 85%;"></div>
						</div>
					</div>
				</div>

				<div class="p-4 bg-midnight border border-white/10 rounded font-body text-xs text-[#FAFAF7] space-y-1.5">
					<strong class="text-white block font-mono text-xs tracking-wider"><?php esc_html_e( 'BEHAVIORAL CADENCE SUMMARY:', 'core16' ); ?></strong>
					<p class="leading-relaxed"><?php esc_html_e( 'Marcus thrives in unstructured hyper-growth. While bearing the exact same nominal INTJ Archetype as Elena, Marcus executes via short iteration cycles and aggressive tactical trade-offs.', 'core16' ); ?></p>
				</div>
			</div>
		</div>

		<!-- Comparative Matrix Table -->
		<div class="w-full border border-white/15 rounded bg-[#132238] overflow-x-auto">
			<table class="w-full text-left font-body text-xs">
				<thead>
					<tr class="border-b border-white/15 font-mono text-xs text-[#A0B4C8]">
						<th class="p-4 pl-6"><?php esc_html_e( 'Cognitive Domain', 'core16' ); ?></th>
						<th class="p-4"><?php esc_html_e( 'Elena (PE Managing Partner)', 'core16' ); ?></th>
						<th class="p-4"><?php esc_html_e( 'Marcus (VP Engineering)', 'core16' ); ?></th>
						<th class="p-4 pr-6"><?php esc_html_e( 'Organizational Implication', 'core16' ); ?></th>
					</tr>
				</thead>
				<tbody class="divide-y divide-white/10 text-[#D7DEE3]">
					<tr>
						<td class="p-4 pl-6 font-semibold text-white"><?php esc_html_e( 'Under-Capitalized Uncertainty', 'core16' ); ?></td>
						<td class="p-4"><?php esc_html_e( 'Freezes commitments to inspect fundamentals', 'core16' ); ?></td>
						<td class="p-4"><?php esc_html_e( 'Doubles down on prototype iteration', 'core16' ); ?></td>
						<td class="p-4 pr-6 text-[#A0B4C8]"><?php esc_html_e( 'High tension if paired without clear domain delineation.', 'core16' ); ?></td>
					</tr>
					<tr>
						<td class="p-4 pl-6 font-semibold text-white"><?php esc_html_e( 'Delegation Baseline', 'core16' ); ?></td>
						<td class="p-4"><?php esc_html_e( 'Audited milestones with high compliance rigor', 'core16' ); ?></td>
						<td class="p-4"><?php esc_html_e( 'Output-driven heuristics with loose oversight', 'core16' ); ?></td>
						<td class="p-4 pr-6 text-[#A0B4C8]"><?php esc_html_e( 'Elena stabilizes balance sheets; Marcus accelerates velocity.', 'core16' ); ?></td>
					</tr>
					<tr>
						<td class="p-4 pl-6 font-semibold text-white"><?php esc_html_e( 'Derailer Trigger', 'core16' ); ?></td>
						<td class="p-4"><?php esc_html_e( 'Premature scaling without baseline validation', 'core16' ); ?></td>
						<td class="p-4"><?php esc_html_e( 'Bureaucratic gating and prolonged consensus', 'core16' ); ?></td>
						<td class="p-4 pr-6 text-[#A0B4C8]"><?php esc_html_e( 'Complementary executive dyad when unified under common OKRs.', 'core16' ); ?></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</section>
