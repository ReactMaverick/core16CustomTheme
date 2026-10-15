<?php
/**
 * Science & Methodology - Confirmatory Factor Analysis & Structural Loading Matrix (Stitch Fidelity)
 * Screen: Science / Methodology (b7f6a7eeaff5465490de24971fa888cb)
 *
 * @package Core16
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<!-- SECTION 4: CONFIRMATORY FACTOR ANALYSIS & FECA STRUCTURAL LOADING MATRIX -->
<section class="w-full bg-surface-container-lowest px-margin-sm lg:px-margin-lg py-margin-lg border-b border-rule-grey/30" id="factor-analysis">
	<div class="max-w-[1440px] mx-auto flex flex-col gap-space-xl">
		<!-- Section Header -->
		<div class="flex flex-col lg:flex-row lg:items-end justify-between gap-gutter">
			<div class="flex flex-col gap-space-xs max-w-2xl">
				<span class="font-label-mono text-label-mono uppercase tracking-wider text-secondary font-semibold">
					<?php esc_html_e( 'FACTOR LOADINGS // LATENT VARIABLE ARCHITECTURE', 'core16' ); ?>
				</span>
				<h2 class="font-headline-xl text-headline-xl text-on-surface tracking-tight font-semibold">
					<?php esc_html_e( 'Orthogonal Factor Loading & Construct Independence.', 'core16' ); ?>
				</h2>
				<p class="font-body-default text-body-default text-on-surface-variant leading-relaxed">
					<?php esc_html_e( 'Empirical confirmatory factor analysis (CFA) demonstrate strong primary construct loadings (λ > .78) with negligible cross-loading across adjacent cognitive vectors.', 'core16' ); ?>
				</p>
			</div>
			<div class="flex items-center gap-space-sm bg-surface-container-low p-space-xs rounded-lg border border-rule-grey/20">
				<span class="inline-flex items-center gap-1 font-label-mono-sm text-label-mono-sm px-2 py-1 bg-surface-container-lowest rounded text-on-surface font-semibold shadow-xs">
					<?php esc_html_e( 'N = 1,842,000 CFA MODEL', 'core16' ); ?>
				</span>
				<span class="font-label-mono-sm text-label-mono-sm text-on-surface-variant font-medium">
					<?php esc_html_e( 'GFI: 0.974 • RMSEA: 0.038', 'core16' ); ?>
				</span>
			</div>
		</div>

		<!-- Factor Loading Heatmap Matrix -->
		<div class="w-full overflow-x-auto rounded-lg bg-surface-container-low p-space-xs border border-rule-grey/20">
			<table class="w-full text-left border-collapse">
				<thead>
					<tr class="bg-[#F1F5F6] text-[#17365D] font-label-mono text-label-mono uppercase border-b border-[#D7DEE3] text-[11px]">
						<th class="p-space-md text-left font-bold"><?php esc_html_e( 'Latent Trait Indicator', 'core16' ); ?></th>
						<th class="p-space-md text-center font-bold"><?php esc_html_e( 'Focus (F)', 'core16' ); ?></th>
						<th class="p-space-md text-center font-bold"><?php esc_html_e( 'Execution (E)', 'core16' ); ?></th>
						<th class="p-space-md text-center font-bold"><?php esc_html_e( 'Control (C)', 'core16' ); ?></th>
						<th class="p-space-md text-center font-bold"><?php esc_html_e( 'Adaptability (A)', 'core16' ); ?></th>
						<th class="p-space-md text-right font-bold"><?php esc_html_e( 'Unique Var. (δ)', 'core16' ); ?></th>
					</tr>
				</thead>
				<tbody class="divide-y divide-[#D7DEE3] font-body-sm text-body-sm text-[#0D182A]">
					<tr class="bg-[#FAFAF7] hover:bg-white transition-colors">
						<td class="p-space-md font-medium text-[#17365D]"><?php esc_html_e( 'Deep Analytical Synthesis (F1)', 'core16' ); ?></td>
						<td class="p-space-md text-center font-label-mono font-bold bg-[#0EA5AB]/10 text-[#17365D] border-x border-[#D7DEE3]">λ = .88</td>
						<td class="p-space-md text-center font-label-mono text-[#66717D]">.04</td>
						<td class="p-space-md text-center font-label-mono text-[#66717D]">.06</td>
						<td class="p-space-md text-center font-label-mono text-[#66717D]">-.03</td>
						<td class="p-space-md text-right font-label-mono text-[#66717D]">.22</td>
					</tr>
					<tr class="bg-[#F1F5F6]/50 hover:bg-white transition-colors">
						<td class="p-space-md font-medium text-[#17365D]"><?php esc_html_e( 'Sustained Monotasking Capacity (F2)', 'core16' ); ?></td>
						<td class="p-space-md text-center font-label-mono font-bold bg-[#0EA5AB]/10 text-[#17365D] border-x border-[#D7DEE3]">λ = .84</td>
						<td class="p-space-md text-center font-label-mono text-[#66717D]">.08</td>
						<td class="p-space-md text-center font-label-mono text-[#66717D]">.05</td>
						<td class="p-space-md text-center font-label-mono text-[#66717D]">-.07</td>
						<td class="p-space-md text-right font-label-mono text-[#66717D]">.29</td>
					</tr>
					<tr class="bg-[#FAFAF7] hover:bg-white transition-colors">
						<td class="p-space-md font-medium text-[#17365D]"><?php esc_html_e( 'Information Noise Attenuation (F3)', 'core16' ); ?></td>
						<td class="p-space-md text-center font-label-mono font-bold bg-[#0EA5AB]/10 text-[#17365D] border-x border-[#D7DEE3]">λ = .79</td>
						<td class="p-space-md text-center font-label-mono text-[#66717D]">-.02</td>
						<td class="p-space-md text-center font-label-mono text-[#66717D]">.09</td>
						<td class="p-space-md text-center font-label-mono text-[#66717D]">.02</td>
						<td class="p-space-md text-right font-label-mono text-[#66717D]">.37</td>
					</tr>
					<tr class="bg-[#F1F5F6]/50 hover:bg-white transition-colors">
						<td class="p-space-md font-medium text-[#17365D]"><?php esc_html_e( 'Operational Velocity (E1)', 'core16' ); ?></td>
						<td class="p-space-md text-center font-label-mono text-[#66717D]">.05</td>
						<td class="p-space-md text-center font-label-mono font-bold bg-[#0EA5AB]/10 text-[#17365D] border-x border-[#D7DEE3]">λ = .91</td>
						<td class="p-space-md text-center font-label-mono text-[#66717D]">-.04</td>
						<td class="p-space-md text-center font-label-mono text-[#66717D]">.08</td>
						<td class="p-space-md text-right font-label-mono text-[#66717D]">.17</td>
					</tr>
					<tr class="bg-[#FAFAF7] hover:bg-white transition-colors">
						<td class="p-space-md font-medium text-[#17365D]"><?php esc_html_e( 'Milestone Cadence Discipline (E2)', 'core16' ); ?></td>
						<td class="p-space-md text-center font-label-mono text-[#66717D]">.02</td>
						<td class="p-space-md text-center font-label-mono font-bold bg-[#0EA5AB]/10 text-[#17365D] border-x border-[#D7DEE3]">λ = .87</td>
						<td class="p-space-md text-center font-label-mono text-[#66717D]">.11</td>
						<td class="p-space-md text-center font-label-mono text-[#66717D]">-.05</td>
						<td class="p-space-md text-right font-label-mono text-[#66717D]">.24</td>
					</tr>
					<tr class="bg-[#F1F5F6]/50 hover:bg-white transition-colors">
						<td class="p-space-md font-medium text-[#17365D]"><?php esc_html_e( 'Pragmatic Decisiveness (E3)', 'core16' ); ?></td>
						<td class="p-space-md text-center font-label-mono text-[#66717D]">-.06</td>
						<td class="p-space-md text-center font-label-mono font-bold bg-[#0EA5AB]/10 text-[#17365D] border-x border-[#D7DEE3]">λ = .82</td>
						<td class="p-space-md text-center font-label-mono text-[#66717D]">-.01</td>
						<td class="p-space-md text-center font-label-mono text-[#66717D]">.10</td>
						<td class="p-space-md text-right font-label-mono text-[#66717D]">.32</td>
					</tr>
					<tr class="bg-[#FAFAF7] hover:bg-white transition-colors">
						<td class="p-space-md font-medium text-[#17365D]"><?php esc_html_e( 'Process Determinism (C1)', 'core16' ); ?></td>
						<td class="p-space-md text-center font-label-mono text-[#66717D]">.09</td>
						<td class="p-space-md text-center font-label-mono text-[#66717D]">-.02</td>
						<td class="p-space-md text-center font-label-mono font-bold bg-[#0EA5AB]/10 text-[#17365D] border-x border-[#D7DEE3]">λ = .86</td>
						<td class="p-space-md text-center font-label-mono text-[#66717D]">-.09</td>
						<td class="p-space-md text-right font-label-mono text-[#66717D]">.26</td>
					</tr>
					<tr class="bg-[#F1F5F6]/50 hover:bg-white transition-colors">
						<td class="p-space-md font-medium text-[#17365D]"><?php esc_html_e( 'Systemic Risk Mitigation (C2)', 'core16' ); ?></td>
						<td class="p-space-md text-center font-label-mono text-[#66717D]">.12</td>
						<td class="p-space-md text-center font-label-mono text-[#66717D]">.03</td>
						<td class="p-space-md text-center font-label-mono font-bold bg-[#0EA5AB]/10 text-[#17365D] border-x border-[#D7DEE3]">λ = .89</td>
						<td class="p-space-md text-center font-label-mono text-[#66717D]">-.06</td>
						<td class="p-space-md text-right font-label-mono text-[#66717D]">.20</td>
					</tr>
					<tr class="bg-[#FAFAF7] hover:bg-white transition-colors">
						<td class="p-space-md font-medium text-[#17365D]"><?php esc_html_e( 'Governance & Audit Fidelity (C3)', 'core16' ); ?></td>
						<td class="p-space-md text-center font-label-mono text-[#66717D]">.04</td>
						<td class="p-space-md text-center font-label-mono text-[#66717D]">.06</td>
						<td class="p-space-md text-center font-label-mono font-bold bg-[#0EA5AB]/10 text-[#17365D] border-x border-[#D7DEE3]">λ = .83</td>
						<td class="p-space-md text-center font-label-mono text-[#66717D]">-.02</td>
						<td class="p-space-md text-right font-label-mono text-[#66717D]">.31</td>
					</tr>
					<tr class="bg-[#F1F5F6]/50 hover:bg-white transition-colors">
						<td class="p-space-md font-medium text-[#17365D]"><?php esc_html_e( 'Ambiguity Tolerance (A1)', 'core16' ); ?></td>
						<td class="p-space-md text-center font-label-mono text-[#66717D]">-.03</td>
						<td class="p-space-md text-center font-label-mono text-[#66717D]">.09</td>
						<td class="p-space-md text-center font-label-mono text-[#66717D]">-.11</td>
						<td class="p-space-md text-center font-label-mono font-bold bg-[#0EA5AB]/10 text-[#17365D] border-x border-[#D7DEE3]">λ = .85</td>
						<td class="p-space-md text-right font-label-mono text-[#66717D]">.27</td>
					</tr>
					<tr class="bg-[#FAFAF7] hover:bg-white transition-colors">
						<td class="p-space-md font-medium text-[#17365D]"><?php esc_html_e( 'Strategic Pivot Velocity (A2)', 'core16' ); ?></td>
						<td class="p-space-md text-center font-label-mono text-[#66717D]">.01</td>
						<td class="p-space-md text-center font-label-mono text-[#66717D]">.07</td>
						<td class="p-space-md text-center font-label-mono text-[#66717D]">-.08</td>
						<td class="p-space-md text-center font-label-mono font-bold bg-[#0EA5AB]/10 text-[#17365D] border-x border-[#D7DEE3]">λ = .88</td>
						<td class="p-space-md text-right font-label-mono text-[#66717D]">.22</td>
					</tr>
					<tr class="bg-[#F1F5F6]/50 hover:bg-white transition-colors">
						<td class="p-space-md font-medium text-[#17365D]"><?php esc_html_e( 'Elastic Synthesis & Re-framing (A3)', 'core16' ); ?></td>
						<td class="p-space-md text-center font-label-mono text-[#66717D]">.05</td>
						<td class="p-space-md text-center font-label-mono text-[#66717D]">.04</td>
						<td class="p-space-md text-center font-label-mono text-[#66717D]">-.04</td>
						<td class="p-space-md text-center font-label-mono font-bold bg-[#0EA5AB]/10 text-[#17365D] border-x border-[#D7DEE3]">λ = .78</td>
						<td class="p-space-md text-right font-label-mono text-[#66717D]">.39</td>
					</tr>
				</tbody>
				<tfoot>
					<tr class="bg-[#F1F5F6] font-label-mono text-label-mono text-[#17365D] border-t-2 border-[#D7DEE3]">
						<td class="p-space-md font-bold"><?php esc_html_e( "Internal Consistency (Cronbach's α)", 'core16' ); ?></td>
						<td class="p-space-md text-center font-bold text-[#0EA5AB]">α = 0.91</td>
						<td class="p-space-md text-center font-bold text-[#17365D]">α = 0.94</td>
						<td class="p-space-md text-center font-bold text-[#0EA5AB]">α = 0.89</td>
						<td class="p-space-md text-center font-bold text-[#17365D]">α = 0.92</td>
						<td class="p-space-md text-right text-[#66717D] font-bold"><?php esc_html_e( 'Total: α = .92', 'core16' ); ?></td>
					</tr>
				</tfoot>
			</table>
		</div>
		<div class="flex flex-wrap items-center justify-between gap-space-md text-on-surface-variant font-label-mono-sm text-label-mono-sm pt-space-xs">
			<div><?php esc_html_e( 'Extraction Method: Maximum Likelihood with Promax Oblique Rotation (Kaiser Normalization).', 'core16' ); ?></div>
			<div><?php esc_html_e( 'Model convergence reached in 14 iterations. Standardized coefficients reported.', 'core16' ); ?></div>
		</div>
	</div>
</section>
