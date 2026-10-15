<?php
/**
 * Profile Dossier - Sections 01-05, Dyad Modal & Interactivity
 * Matches Stitch Universal Profile Template (ca817d96a41b462186feae7aac448f9d)
 * Fully dynamic with all 16 archetypes support.
 *
 * @package Core16
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$post_id = get_the_ID();
$dossier = core16_get_profile_dossier_data( $post_id );
?>

<!-- SECTION 1: Executive Summary & Core Drives (65 / 35 Split) -->
<section class="w-full bg-[#FAFAF7] py-12 lg:py-16 px-4 sm:px-8 lg:px-16 border-b border-[#D7DEE3]" id="section-overview">
	<div class="max-w-[1440px] mx-auto grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-14">
		<!-- Narrative (65%) -->
		<div class="lg:col-span-8 space-y-6">
			<div class="flex items-center gap-2">
				<span class="font-label-mono-sm text-[11px] uppercase tracking-wider text-[#00696D] font-bold"><?php esc_html_e( 'Section 01 // Baseline Executive Summary', 'core16' ); ?></span>
			</div>
			<h2 class="font-headline-lg text-[26px] sm:text-[32px] text-on-surface font-semibold tracking-tight">
				<?php echo esc_html( $dossier['overview_headline'] ); ?>
			</h2>
			<!-- Prominent Editorial Pullquote with Indigo Left Hairline -->
			<blockquote class="border-l-2 border-[#273A8A] pl-5 py-1 text-on-surface text-[17px] sm:text-[19px] font-body-lead italic leading-relaxed bg-[#F2F5F8]/50">
				<?php echo esc_html( $dossier['pullquote'] ); ?>
			</blockquote>
			<p class="font-body-default text-[15px] text-on-surface-variant leading-relaxed">
				<?php echo esc_html( $dossier['narrative'] ); ?>
			</p>
			<!-- 3 Structured Core Behavioral Tendency Cards -->
			<div class="grid grid-cols-1 md:grid-cols-3 gap-4 pt-3">
				<?php foreach ( $dossier['axioms'] as $ax ) : ?>
					<div class="bg-surface-container-lowest border border-[#D7DEE3] p-4 flex flex-col justify-between">
						<div>
							<div class="font-label-mono text-[11px] text-[#273A8A] font-semibold mb-1"><?php echo esc_html( $ax['num'] ); ?> / <?php esc_html_e( 'BEHAVIORAL AXIOM', 'core16' ); ?></div>
							<h4 class="font-headline-sm text-[15px] text-on-surface font-semibold mb-2"><?php echo esc_html( $ax['title'] ); ?></h4>
							<p class="font-body-sm text-[12.5px] text-on-surface-variant leading-normal">
								<?php echo esc_html( $ax['desc'] ); ?>
							</p>
						</div>
						<div class="pt-3 mt-3 border-t border-[#D7DEE3] text-[10px] font-label-mono text-tertiary"><?php echo esc_html( $ax['eval'] ); ?></div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>

		<!-- Right: Executive DNA Matrix & Benchmark Badge (35%) -->
		<div class="lg:col-span-4 flex flex-col justify-between space-y-6">
			<div class="bg-surface-container-lowest border border-[#D7DEE3] p-5">
				<div class="border-b border-[#D7DEE3] pb-3 mb-4 flex justify-between items-center">
					<span class="font-label-mono text-[11px] uppercase tracking-wider text-on-surface font-semibold"><?php esc_html_e( 'Executive DNA Matrix', 'core16' ); ?></span>
					<span class="w-2 h-2 rounded-full bg-[#00696D]"></span>
				</div>
				<div class="space-y-3.5 font-body-sm text-[13px]">
					<div class="flex justify-between items-start border-b border-[#EAEFF4] pb-2">
						<span class="text-on-surface-variant font-label-mono text-[11px] uppercase"><?php esc_html_e( 'Energy Engine:', 'core16' ); ?></span>
						<span class="text-on-surface font-medium text-right"><?php echo esc_html( $dossier['dna_matrix']['energy'] ); ?></span>
					</div>
					<div class="flex justify-between items-start border-b border-[#EAEFF4] pb-2">
						<span class="text-on-surface-variant font-label-mono text-[11px] uppercase"><?php esc_html_e( 'Decision Anchor:', 'core16' ); ?></span>
						<span class="text-on-surface font-medium text-right"><?php echo esc_html( $dossier['dna_matrix']['decision'] ); ?></span>
					</div>
					<div class="flex justify-between items-start border-b border-[#EAEFF4] pb-2">
						<span class="text-on-surface-variant font-label-mono text-[11px] uppercase"><?php esc_html_e( 'Decompression:', 'core16' ); ?></span>
						<span class="text-on-surface font-medium text-right"><?php echo esc_html( $dossier['dna_matrix']['decomp'] ); ?></span>
					</div>
					<div class="flex justify-between items-start border-b border-[#EAEFF4] pb-2">
						<span class="text-on-surface-variant font-label-mono text-[11px] uppercase"><?php esc_html_e( 'Boardroom Stance:', 'core16' ); ?></span>
						<span class="text-on-surface font-medium text-right"><?php echo esc_html( $dossier['dna_matrix']['boardroom'] ); ?></span>
					</div>
					<div class="flex justify-between items-start">
						<span class="text-on-surface-variant font-label-mono text-[11px] uppercase"><?php esc_html_e( 'Conflict Modality:', 'core16' ); ?></span>
						<span class="text-on-surface font-medium text-right"><?php echo esc_html( $dossier['dna_matrix']['conflict'] ); ?></span>
					</div>
				</div>
			</div>

			<!-- Normative Distribution Indicator -->
			<div class="bg-[#17365D] text-[#FAFAF7] p-5 border border-[#273A8A]">
				<div class="font-label-mono text-[10px] tracking-wider text-[#7DF4FB] uppercase mb-1"><?php esc_html_e( 'Empirical Percentile Calibrator', 'core16' ); ?></div>
				<div class="font-headline-md text-[20px] font-semibold text-white"><?php echo esc_html( $dossier['calibrator']['headline'] ); ?></div>
				<p class="font-body-sm text-[12px] text-[#BAC7DF] mt-1.5 leading-normal">
					<?php echo esc_html( $dossier['calibrator']['desc'] ); ?>
				</p>
				<div class="mt-4 pt-3 border-t border-[#273A8A] flex items-center justify-between text-[10px] font-label-mono text-[#BAC7DF]">
					<span><?php echo esc_html( sprintf( __( 'COGNITIVE VARIANCE: %s', 'core16' ), $dossier['calibrator']['variance'] ) ); ?></span>
					<span><?php echo esc_html( sprintf( __( 'SAMPLE: %s', 'core16' ), $dossier['calibrator']['sample'] ) ); ?></span>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- SECTION 2: Baseline FECA Distribution Engine -->
<section class="w-full bg-[#FFFFFF] py-12 lg:py-16 px-4 sm:px-8 lg:px-16 border-b border-[#D7DEE3]" id="section-cognitive">
	<div class="max-w-[1440px] mx-auto space-y-8">
		<!-- Section Header with Metric Filter Toggle -->
		<div class="flex flex-col md:flex-row md:items-end justify-between gap-4 border-b border-[#D7DEE3] pb-4">
			<div>
				<span class="font-label-mono-sm text-[11px] uppercase tracking-wider text-[#00696D] font-bold"><?php esc_html_e( 'Section 02 // Psychometric Engine', 'core16' ); ?></span>
				<h2 class="font-headline-lg text-[24px] sm:text-[30px] text-on-surface font-semibold mt-1">
					<?php esc_html_e( 'FECA Dimensional Index & Variance Bands', 'core16' ); ?>
				</h2>
				<p class="font-body-default text-[14px] text-on-surface-variant max-w-2xl mt-1">
					<?php esc_html_e( 'Core16 FECA model calibrates psychometric variance across Focus, Execution, Control, and Adaptability. Markers denote archetype median against population standard error.', 'core16' ); ?>
				</p>
			</div>
			<!-- Toggle View Mode Pill -->
			<div class="flex items-center gap-2 bg-[#FAFAF7] border border-[#D7DEE3] p-1 text-[11px] font-label-mono">
				<button type="button" class="px-3 py-1 bg-[#0D182A] text-white transition-all cursor-pointer" id="toggle-cohort" onclick="this.classList.toggle('bg-[#0D182A]'); this.classList.toggle('text-white');">
					<?php esc_html_e( 'Cohort Benchmark (95% CI)', 'core16' ); ?>
				</button>
				<span class="text-[#8A95AC] px-1">|</span>
				<span class="text-tertiary px-2"><?php esc_html_e( 'Normative Base: Global Execs', 'core16' ); ?></span>
			</div>
		</div>

		<!-- 4 FECA High-Density Vector Readouts -->
		<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
			<!-- Focus (F) Track -->
			<div class="bg-[#FAFAF7] border border-[#D7DEE3] p-5 space-y-3">
				<div class="flex justify-between items-baseline">
					<div class="flex items-center gap-2">
						<span class="w-6 h-6 rounded bg-[#0EA5AB] text-white flex items-center justify-center font-label-mono text-[12px] font-bold">F</span>
						<span class="font-headline-sm text-[16px] text-on-surface font-semibold"><?php esc_html_e( 'Focus Dimensional Vector', 'core16' ); ?></span>
					</div>
					<div class="font-label-mono text-[14px] text-[#00696D] font-bold">
						<?php echo esc_html( $dossier['feca']['focus']['score'] ); ?>/100 
						<span class="text-[10px] text-tertiary font-normal">[<?php echo esc_html( $dossier['feca']['focus']['low'] . ' — ' . $dossier['feca']['focus']['high'] ); ?>]</span>
					</div>
				</div>
				<p class="font-body-sm text-[13px] text-on-surface-variant"><?php echo esc_html( $dossier['feca']['focus']['desc'] ); ?></p>
				<div class="relative w-full h-7 bg-[#E8EEF3] flex items-center px-1">
					<div class="absolute h-5 bg-[#0EA5AB]/20 border-x border-[#0EA5AB]" style="left: <?php echo esc_attr( $dossier['feca']['focus']['low'] ); ?>%; width: <?php echo esc_attr( max(4, $dossier['feca']['focus']['high'] - $dossier['feca']['focus']['low']) ); ?>%;"></div>
					<div class="absolute -translate-x-1/2 w-3.5 h-6 bg-[#0EA5AB] shadow-sm flex items-center justify-center" style="left: <?php echo esc_attr( $dossier['feca']['focus']['score'] ); ?>%;">
						<span class="w-1 h-3 bg-white"></span>
					</div>
					<div class="absolute left-[50%] h-full w-[1px] bg-[#8A95AC]/60" title="Pop Median: 50%"></div>
				</div>
				<div class="flex justify-between text-[10px] font-label-mono text-tertiary">
					<span><?php esc_html_e( 'Diffuse / Multitask (0%)', 'core16' ); ?></span>
					<span><?php esc_html_e( 'Pop. Median (50%)', 'core16' ); ?></span>
					<span><?php esc_html_e( 'Monotropic Depth (100%)', 'core16' ); ?></span>
				</div>
			</div>

			<!-- Execution (E) Track -->
			<div class="bg-[#FAFAF7] border border-[#D7DEE3] p-5 space-y-3">
				<div class="flex justify-between items-baseline">
					<div class="flex items-center gap-2">
						<span class="w-6 h-6 rounded bg-[#0EA5AB] text-white flex items-center justify-center font-label-mono text-[12px] font-bold">E</span>
						<span class="font-headline-sm text-[16px] text-on-surface font-semibold"><?php esc_html_e( 'Execution Dimensional Vector', 'core16' ); ?></span>
					</div>
					<div class="font-label-mono text-[14px] text-[#00696D] font-bold">
						<?php echo esc_html( $dossier['feca']['execution']['score'] ); ?>/100 
						<span class="text-[10px] text-tertiary font-normal">[<?php echo esc_html( $dossier['feca']['execution']['low'] . ' — ' . $dossier['feca']['execution']['high'] ); ?>]</span>
					</div>
				</div>
				<p class="font-body-sm text-[13px] text-on-surface-variant"><?php echo esc_html( $dossier['feca']['execution']['desc'] ); ?></p>
				<div class="relative w-full h-7 bg-[#E8EEF3] flex items-center px-1">
					<div class="absolute h-5 bg-[#0EA5AB]/20 border-x border-[#0EA5AB]" style="left: <?php echo esc_attr( $dossier['feca']['execution']['low'] ); ?>%; width: <?php echo esc_attr( max(4, $dossier['feca']['execution']['high'] - $dossier['feca']['execution']['low']) ); ?>%;"></div>
					<div class="absolute -translate-x-1/2 w-3.5 h-6 bg-[#0EA5AB] shadow-sm flex items-center justify-center" style="left: <?php echo esc_attr( $dossier['feca']['execution']['score'] ); ?>%;">
						<span class="w-1 h-3 bg-white"></span>
					</div>
					<div class="absolute left-[50%] h-full w-[1px] bg-[#8A95AC]/60" title="Pop Median: 50%"></div>
				</div>
				<div class="flex justify-between text-[10px] font-label-mono text-tertiary">
					<span><?php esc_html_e( 'Experimental / Fluid (0%)', 'core16' ); ?></span>
					<span><?php esc_html_e( 'Pop. Median (50%)', 'core16' ); ?></span>
					<span><?php esc_html_e( 'Methodical Structural (100%)', 'core16' ); ?></span>
				</div>
			</div>

			<!-- Control (C) Track -->
			<div class="bg-[#FAFAF7] border border-[#D7DEE3] p-5 space-y-3">
				<div class="flex justify-between items-baseline">
					<div class="flex items-center gap-2">
						<span class="w-6 h-6 rounded bg-[#0EA5AB] text-white flex items-center justify-center font-label-mono text-[12px] font-bold">C</span>
						<span class="font-headline-sm text-[16px] text-on-surface font-semibold"><?php esc_html_e( 'Control Dimensional Vector', 'core16' ); ?></span>
					</div>
					<div class="font-label-mono text-[14px] text-[#00696D] font-bold">
						<?php echo esc_html( $dossier['feca']['control']['score'] ); ?>/100 
						<span class="text-[10px] text-tertiary font-normal">[<?php echo esc_html( $dossier['feca']['control']['low'] . ' — ' . $dossier['feca']['control']['high'] ); ?>]</span>
					</div>
				</div>
				<p class="font-body-sm text-[13px] text-on-surface-variant"><?php echo esc_html( $dossier['feca']['control']['desc'] ); ?></p>
				<div class="relative w-full h-7 bg-[#E8EEF3] flex items-center px-1">
					<div class="absolute h-5 bg-[#0EA5AB]/20 border-x border-[#0EA5AB]" style="left: <?php echo esc_attr( $dossier['feca']['control']['low'] ); ?>%; width: <?php echo esc_attr( max(4, $dossier['feca']['control']['high'] - $dossier['feca']['control']['low']) ); ?>%;"></div>
					<div class="absolute -translate-x-1/2 w-3.5 h-6 bg-[#0EA5AB] shadow-sm flex items-center justify-center" style="left: <?php echo esc_attr( $dossier['feca']['control']['score'] ); ?>%;">
						<span class="w-1 h-3 bg-white"></span>
					</div>
					<div class="absolute left-[50%] h-full w-[1px] bg-[#8A95AC]/60" title="Pop Median: 50%"></div>
				</div>
				<div class="flex justify-between text-[10px] font-label-mono text-tertiary">
					<span><?php esc_html_e( 'Decentralized Drift (0%)', 'core16' ); ?></span>
					<span><?php esc_html_e( 'Pop. Median (50%)', 'core16' ); ?></span>
					<span><?php esc_html_e( 'Deterministic Control (100%)', 'core16' ); ?></span>
				</div>
			</div>

			<!-- Adaptability (A) Track -->
			<div class="bg-[#FAFAF7] border border-[#D7DEE3] p-5 space-y-3">
				<div class="flex justify-between items-baseline">
					<div class="flex items-center gap-2">
						<span class="w-6 h-6 rounded bg-[#0EA5AB] text-white flex items-center justify-center font-label-mono text-[12px] font-bold">A</span>
						<span class="font-headline-sm text-[16px] text-on-surface font-semibold"><?php esc_html_e( 'Adaptability Dimensional Vector', 'core16' ); ?></span>
					</div>
					<div class="font-label-mono text-[14px] text-[#00696D] font-bold">
						<?php echo esc_html( $dossier['feca']['adaptability']['score'] ); ?>/100 
						<span class="text-[10px] text-tertiary font-normal">[<?php echo esc_html( $dossier['feca']['adaptability']['low'] . ' — ' . $dossier['feca']['adaptability']['high'] ); ?>]</span>
					</div>
				</div>
				<p class="font-body-sm text-[13px] text-on-surface-variant"><?php echo esc_html( $dossier['feca']['adaptability']['desc'] ); ?></p>
				<div class="relative w-full h-7 bg-[#E8EEF3] flex items-center px-1">
					<div class="absolute h-5 bg-[#0EA5AB]/20 border-x border-[#0EA5AB]" style="left: <?php echo esc_attr( $dossier['feca']['adaptability']['low'] ); ?>%; width: <?php echo esc_attr( max(4, $dossier['feca']['adaptability']['high'] - $dossier['feca']['adaptability']['low']) ); ?>%;"></div>
					<div class="absolute -translate-x-1/2 w-3.5 h-6 bg-[#0EA5AB] shadow-sm flex items-center justify-center" style="left: <?php echo esc_attr( $dossier['feca']['adaptability']['score'] ); ?>%;">
						<span class="w-1 h-3 bg-white"></span>
					</div>
					<div class="absolute left-[50%] h-full w-[1px] bg-[#8A95AC]/60" title="Pop Median: 50%"></div>
				</div>
				<div class="flex justify-between text-[10px] font-label-mono text-tertiary">
					<span><?php esc_html_e( 'Rigid Anchored (0%)', 'core16' ); ?></span>
					<span><?php esc_html_e( 'Pop. Median (50%)', 'core16' ); ?></span>
					<span><?php esc_html_e( 'Fluid Dynamic (100%)', 'core16' ); ?></span>
				</div>
			</div>
		</div>

		<!-- Reliability Footer Note -->
		<div class="p-3 bg-[#F0F4F7] border border-[#D7DEE3] flex flex-wrap justify-between items-center text-[11px] font-label-mono text-[#66717D]">
			<span><?php echo esc_html( sprintf( __( "Cronbach's Alpha Internal Consistency: %s", 'core16' ), $dossier['reliability']['alpha'] ) ); ?></span>
			<span><?php echo esc_html( sprintf( __( 'Standard Error of Measurement (SEM): %s', 'core16' ), $dossier['reliability']['sem'] ) ); ?></span>
			<span><?php echo esc_html( sprintf( __( 'Test-Retest Stability (12-Mo): %s', 'core16' ), $dossier['reliability']['retest'] ) ); ?></span>
		</div>
	</div>
</section>

<!-- SECTION 3: Professional & Strategic Strengths vs. Watchpoints (Balanced 2-Column Comparison) -->
<section class="w-full bg-[#FAFAF7] py-12 lg:py-16 px-4 sm:px-8 lg:px-16 border-b border-[#D7DEE3]" id="section-watchpoints">
	<div class="max-w-[1440px] mx-auto space-y-8">
		<div id="section-workplace">
			<span class="font-label-mono-sm text-[11px] uppercase tracking-wider text-[#00696D] font-bold"><?php esc_html_e( 'Section 03 // Organizational Impact Analysis', 'core16' ); ?></span>
			<h2 class="font-headline-lg text-[24px] sm:text-[30px] text-on-surface font-semibold mt-1">
				<?php esc_html_e( 'Strategic Capabilities vs. Governance Watchpoints', 'core16' ); ?>
			</h2>
			<p class="font-body-default text-[14px] text-on-surface-variant max-w-3xl mt-1">
				<?php esc_html_e( 'A dispassionate appraisal of structural leverage versus blindspots. Watchpoints reflect standard behavioral liabilities in high-growth or consensus-driven matrix organizations (non-alarmist institutional diagnostics).', 'core16' ); ?>
			</p>
		</div>

		<div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
			<!-- Column 1: Strategic Strengths -->
			<div class="space-y-4">
				<div class="flex items-center justify-between border-b border-[#D7DEE3] pb-2">
					<h3 class="font-headline-sm text-[17px] text-[#00696D] font-semibold flex items-center gap-2">
						<span class="w-2.5 h-2.5 rounded-full bg-[#0EA5AB]"></span> <?php esc_html_e( 'Strategic Core Strengths', 'core16' ); ?>
					</h3>
					<span class="font-label-mono text-[10px] text-[#8A95AC] uppercase"><?php echo esc_html( count( $dossier['strengths'] ) . ' ' . __( 'Diagnostic Items', 'core16' ) ); ?></span>
				</div>
				<?php foreach ( $dossier['strengths'] as $st ) : ?>
					<div class="bg-surface-container-lowest border border-[#D7DEE3] p-4 space-y-2">
						<div class="flex justify-between items-baseline">
							<h4 class="font-headline-sm text-[15px] text-on-surface font-semibold"><?php echo esc_html( $st['title'] ); ?></h4>
							<span class="font-label-mono-sm text-[10px] uppercase font-medium text-[#188A62] bg-[#188A62]/10 border border-[#188A62]/30 px-1.5 py-0.5 rounded"><?php echo esc_html( $st['tag'] ); ?></span>
						</div>
						<p class="font-body-sm text-[13px] text-on-surface-variant"><?php echo esc_html( $st['desc'] ); ?></p>
						<div class="pt-2 border-t border-[#EAEFF4] text-[11px] font-label-mono text-tertiary">
							<strong class="text-on-surface font-medium"><?php esc_html_e( 'Manifestation:', 'core16' ); ?></strong> <?php echo esc_html( $st['manifestation'] ); ?>
						</div>
					</div>
				<?php endforeach; ?>
			</div>

			<!-- Column 2: Governance & Organizational Watchpoints -->
			<div class="space-y-4">
				<div class="flex items-center justify-between border-b border-[#D7DEE3] pb-2">
					<h3 class="font-headline-sm text-[17px] text-[#17365D] font-semibold flex items-center gap-2">
						<span class="w-2.5 h-2.5 rounded-full bg-[#66717D]"></span> <?php esc_html_e( 'Governance Watchpoints & Mitigations', 'core16' ); ?>
					</h3>
					<span class="font-label-mono text-[10px] text-[#8A95AC] uppercase"><?php esc_html_e( 'Institutional Risk Audits', 'core16' ); ?></span>
				</div>
				<?php foreach ( $dossier['watchpoints'] as $wp ) : ?>
					<div class="bg-[#F2F5F8] border border-[#D7DEE3] p-4 space-y-2">
						<div class="flex justify-between items-baseline">
							<h4 class="font-headline-sm text-[15px] text-[#0D182A] font-semibold"><?php echo esc_html( $wp['title'] ); ?></h4>
							<span class="font-label-mono-sm text-[10px] uppercase text-[#66717D] bg-[#E8EEF3] border border-[#D7DEE3] px-1.5 py-0.5 rounded"><?php echo esc_html( $wp['category'] ); ?></span>
						</div>
						<p class="font-body-sm text-[13px] text-on-surface-variant"><?php echo esc_html( $wp['desc'] ); ?></p>
						<div class="pt-2 border-t border-[#D7DEE3] text-[11px] font-label-mono text-[#435F89]">
							<strong><?php esc_html_e( 'Remediation Protocol:', 'core16' ); ?></strong> <?php echo esc_html( $wp['remediation'] ); ?>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</section>

<!-- SECTION 4: Career, Communication & Dyadic Chemistry -->
<section class="w-full bg-[#FFFFFF] py-12 lg:py-16 px-4 sm:px-8 lg:px-16 border-b border-[#D7DEE3]" id="section-interpersonal">
	<div class="max-w-[1440px] mx-auto space-y-8">
		<div>
			<span class="font-label-mono-sm text-[11px] uppercase tracking-wider text-[#00696D] font-bold"><?php esc_html_e( 'Section 04 // Interpersonal Dynamics & Dyads', 'core16' ); ?></span>
			<h2 class="font-headline-lg text-[24px] sm:text-[30px] text-on-surface font-semibold mt-1">
				<?php esc_html_e( 'Executive Communication & Dyadic Compatibility Blueprint', 'core16' ); ?>
			</h2>
			<p class="font-body-default text-[14px] text-on-surface-variant max-w-2xl mt-1">
				<?php echo esc_html( sprintf( __( '%s leaders operate with distinct interaction modalities. Effective collaboration requires structured protocols to eliminate interpretive drift.', 'core16' ), $dossier['code'] ) ); ?>
			</p>
		</div>

		<div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
			<!-- Communication Protocols -->
			<div class="bg-[#FAFAF7] border border-[#D7DEE3] p-5 flex flex-col justify-between">
				<div>
					<div class="font-label-mono text-[10px] uppercase text-[#00696D] font-semibold tracking-wider mb-2"><?php esc_html_e( 'INTERFACE PROTOCOL', 'core16' ); ?></div>
					<h3 class="font-headline-sm text-[17px] text-on-surface font-semibold mb-3"><?php esc_html_e( 'Executive Communication Rules', 'core16' ); ?></h3>
					<ul class="space-y-3 font-body-sm text-[13px] text-on-surface-variant">
						<?php foreach ( $dossier['interface_rules'] as $rule ) : ?>
							<li class="flex items-start gap-2">
								<span class="text-primary font-bold">▪</span>
								<span><strong><?php echo esc_html( $rule['title'] ); ?></strong> <?php echo esc_html( $rule['desc'] ); ?></span>
							</li>
						<?php endforeach; ?>
					</ul>
				</div>
				<div class="pt-4 mt-4 border-t border-[#D7DEE3] text-[10px] font-label-mono text-tertiary">
					<?php echo esc_html( $dossier['preferred_format'] ); ?>
				</div>
			</div>

			<!-- High-Friction & Synergistic Dyads -->
			<div class="bg-[#FAFAF7] border border-[#D7DEE3] p-5 flex flex-col justify-between">
				<div>
					<div class="font-label-mono text-[10px] uppercase text-[#273A8A] font-semibold tracking-wider mb-2"><?php esc_html_e( 'DYADIC DYNAMICS', 'core16' ); ?></div>
					<h3 class="font-headline-sm text-[17px] text-on-surface font-semibold mb-3"><?php esc_html_e( 'Complementary & Tension Dyads', 'core16' ); ?></h3>
					<div class="space-y-3 text-[13px]">
						<div class="border-b border-[#EAEFF4] pb-2">
							<div class="flex justify-between items-center mb-0.5">
								<span class="font-medium text-on-surface"><?php echo esc_html( $dossier['dyads']['synergy']['pair'] ); ?></span>
								<span class="font-label-mono text-[10px] text-primary"><?php echo esc_html( $dossier['dyads']['synergy']['tag'] ); ?></span>
							</div>
							<p class="font-body-sm text-[12px] text-on-surface-variant">
								<?php echo esc_html( $dossier['dyads']['synergy']['desc'] ); ?>
							</p>
						</div>
						<div>
							<div class="flex justify-between items-center mb-0.5">
								<span class="font-medium text-on-surface"><?php echo esc_html( $dossier['dyads']['friction']['pair'] ); ?></span>
								<span class="font-label-mono text-[10px] text-[#8A95AC]"><?php echo esc_html( $dossier['dyads']['friction']['tag'] ); ?></span>
							</div>
							<p class="font-body-sm text-[12px] text-on-surface-variant">
								<?php echo esc_html( $dossier['dyads']['friction']['desc'] ); ?>
							</p>
						</div>
					</div>
				</div>
				<div class="pt-4 mt-4 border-t border-[#D7DEE3] text-[10px] font-label-mono text-tertiary">
					<?php echo esc_html( $dossier['dyads']['drift_risk'] ); ?>
				</div>
			</div>

			<!-- Boardroom & Committee Dynamics -->
			<div class="bg-[#FAFAF7] border border-[#D7DEE3] p-5 flex flex-col justify-between">
				<div>
					<div class="font-label-mono text-[10px] uppercase text-[#17365D] font-semibold tracking-wider mb-2"><?php esc_html_e( 'GOVERNANCE ROLES', 'core16' ); ?></div>
					<h3 class="font-headline-sm text-[17px] text-on-surface font-semibold mb-3"><?php esc_html_e( 'Boardroom & Audit Stance', 'core16' ); ?></h3>
					<ul class="space-y-3 font-body-sm text-[13px] text-on-surface-variant">
						<?php foreach ( $dossier['boardroom_roles'] as $role ) : ?>
							<li class="flex items-start gap-2">
								<span class="text-[#273A8A] font-bold">▪</span>
								<span><strong><?php echo esc_html( $role['title'] ); ?></strong> <?php echo esc_html( $role['desc'] ); ?></span>
							</li>
						<?php endforeach; ?>
					</ul>
				</div>
				<div class="pt-4 mt-4 border-t border-[#D7DEE3] text-[10px] font-label-mono text-tertiary">
					<?php echo esc_html( $dossier['board_discharge'] ); ?>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- SECTION 5: 90-Day Executive Growth Hand-off & Next Steps -->
<section class="w-full bg-[#FAFAF7] py-12 lg:py-16 px-4 sm:px-8 lg:px-16 border-b border-[#D7DEE3]" id="section-growth">
	<div class="max-w-[1440px] mx-auto space-y-8">
		<div class="flex flex-col sm:flex-row sm:items-end justify-between gap-4">
			<div>
				<span class="font-label-mono-sm text-[11px] uppercase tracking-wider text-[#00696D] font-bold"><?php esc_html_e( 'Section 05 // Developmental Roadmap', 'core16' ); ?></span>
				<h2 class="font-headline-lg text-[24px] sm:text-[30px] text-on-surface font-semibold mt-1">
					<?php esc_html_e( '90-Day Executive Growth Milestone Architecture', 'core16' ); ?>
				</h2>
				<p class="font-body-default text-[14px] text-on-surface-variant max-w-2xl mt-1">
					<?php esc_html_e( 'Tailored developmental sequence designed to amplify enterprise influence without blunting raw analytical edge.', 'core16' ); ?>
				</p>
			</div>
			<span class="font-label-mono text-[11px] text-tertiary border border-[#D7DEE3] px-3 py-1 bg-surface-container-lowest">
				<?php echo esc_html( $dossier['coaching_protocol'] ); ?>
			</span>
		</div>

		<!-- 3-Tier Roadmap Sequence -->
		<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
			<?php foreach ( $dossier['growth_phases'] as $phase ) : ?>
				<div class="bg-surface-container-lowest border border-[#D7DEE3] p-5 relative">
					<div class="font-label-mono text-[12px] text-[#00696D] font-semibold mb-2"><?php echo esc_html( $phase['days'] ); ?></div>
					<h3 class="font-headline-sm text-[16px] text-on-surface font-semibold mb-2"><?php echo esc_html( $phase['title'] ); ?></h3>
					<p class="font-body-sm text-[13px] text-on-surface-variant leading-relaxed mb-4">
						<?php echo esc_html( $phase['desc'] ); ?>
					</p>
					<div class="border-t border-[#EAEFF4] pt-3 text-[11px] font-label-mono text-tertiary">
						<span class="text-on-surface font-medium"><?php esc_html_e( 'Deliverable:', 'core16' ); ?></span> <?php echo esc_html( $phase['deliverable'] ); ?>
					</div>
				</div>
			<?php endforeach; ?>
		</div>

		<!-- Institutional C-Suite Integration Banner -->
		<div class="w-full bg-[#0D182A] text-[#FAFAF7] border border-[#1E2E4A] p-6 lg:p-8 flex flex-col lg:flex-row items-center justify-between gap-6">
			<div class="space-y-2 text-center lg:text-left">
				<div class="inline-flex items-center gap-2 font-label-mono-sm text-[10px] tracking-widest text-[#7DF4FB] uppercase">
					<span class="w-1.5 h-1.5 rounded-full bg-[#0EA5AB]"></span>
					<?php esc_html_e( 'ENTERPRISE GOVERNANCE SUITE', 'core16' ); ?>
				</div>
				<h3 class="font-headline-md text-[20px] sm:text-[24px] font-semibold text-white">
					<?php echo esc_html( $dossier['csuite_banner']['title'] ); ?>
				</h3>
				<p class="font-body-sm text-[13px] text-[#BAC7DF] max-w-xl">
					<?php echo esc_html( $dossier['csuite_banner']['desc'] ); ?>
				</p>
			</div>
			<div class="flex flex-wrap items-center gap-3 shrink-0">
				<a href="<?php echo esc_url( home_url( '/enterprise/' ) ); ?>" class="h-11 px-5 bg-[#0EA5AB] hover:bg-[#00696D] text-white font-body-medium text-[13px] font-bold transition-all border border-[#0EA5AB] shadow-sm inline-flex items-center">
					<?php esc_html_e( 'Order Dyad Modeling', 'core16' ); ?>
				</a>
				<a href="<?php echo esc_url( home_url( '/support/' ) ); ?>" class="h-11 px-4 bg-transparent hover:bg-white/10 text-[#FAFAF7] font-body-medium text-[13px] border border-[#FAFAF7]/40 transition-colors inline-flex items-center">
					<?php esc_html_e( 'Consult Master Practitioner', 'core16' ); ?>
				</a>
			</div>
		</div>
	</div>
</section>

<!-- Dyad Simulation Modal (Hidden by Default) -->
<div class="fixed inset-0 z-50 bg-[#0D182A]/80 backdrop-blur-sm hidden flex items-center justify-center p-4" id="dyad-modal">
	<div class="bg-[#FAFAF7] border border-[#D7DEE3] max-w-lg w-full p-6 shadow-2xl space-y-4">
		<div class="flex justify-between items-center border-b border-[#D7DEE3] pb-3">
			<div class="font-headline-sm text-[16px] text-on-surface font-semibold flex items-center gap-2">
				<span class="material-symbols-outlined text-[20px] text-primary">hub</span>
				<?php esc_html_e( 'Simulate Dyadic Chemistry', 'core16' ); ?>
			</div>
			<button type="button" class="text-tertiary hover:text-on-surface" onclick="document.getElementById('dyad-modal').classList.add('hidden')">
				<span class="material-symbols-outlined text-[20px]">close</span>
			</button>
		</div>
		<p class="font-body-sm text-[13px] text-on-surface-variant">
			<?php echo esc_html( sprintf( __( 'Select a peer profile to compute predictive boardroom friction index against the %s %s:', 'core16' ), $dossier['code'], $dossier['title'] ) ); ?>
		</p>
		<div class="space-y-3 font-label-mono text-[12px]">
			<div>
				<label class="block text-tertiary mb-1 uppercase text-[10px]"><?php esc_html_e( 'Peer Counterpart:', 'core16' ); ?></label>
				<select class="w-full bg-white border border-[#D7DEE3] p-2 text-on-surface outline-none" id="dyadSelect">
					<option value="ENFP"><?php esc_html_e( 'ENFP — The Catalyst Operator (Synergy: 94%)', 'core16' ); ?></option>
					<option value="ENTJ"><?php esc_html_e( 'ENTJ — The Executive Commander (Synergy: 86%)', 'core16' ); ?></option>
					<option value="ESFJ"><?php esc_html_e( 'ESFJ — The Institutional Facilitator (Friction: 78%)', 'core16' ); ?></option>
					<option value="INTP"><?php esc_html_e( 'INTP — The Systems Theorist (Synergy: 91%)', 'core16' ); ?></option>
					<option value="ISTJ"><?php esc_html_e( 'ISTJ — The Institutional Anchor (Stability: 88%)', 'core16' ); ?></option>
				</select>
			</div>
			<div class="p-3 bg-[#EAEFF4] border border-[#D7DEE3] space-y-1.5">
				<div class="flex justify-between text-on-surface font-semibold">
					<span><?php esc_html_e( 'Friction Risk:', 'core16' ); ?></span>
					<span class="text-primary font-bold" id="dyadFrictionVal">LOW (18%)</span>
				</div>
				<div class="text-[11px] font-body-sm text-on-surface-variant" id="dyadNarrative">
					<?php esc_html_e( 'High complementary bandwidth. The counterpart challenges premise while respecting systemic rigor.', 'core16' ); ?>
				</div>
			</div>
		</div>
		<div class="flex justify-end gap-2 pt-2">
			<button type="button" class="px-4 py-2 border border-[#D7DEE3] text-tertiary text-[12px] font-label-mono hover:text-on-surface" onclick="document.getElementById('dyad-modal').classList.add('hidden')">
				<?php esc_html_e( 'Dismiss', 'core16' ); ?>
			</button>
			<button type="button" class="px-4 py-2 bg-[#00696D] text-white text-[12px] font-label-mono" onclick="alert('Detailed Dyadic Dossier Generated. Check download center.'); document.getElementById('dyad-modal').classList.add('hidden');">
				<?php esc_html_e( 'Run Full Simulation', 'core16' ); ?>
			</button>
		</div>
	</div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
	// Smooth scroll with offset for sticky sub-navigation
	const subnavLinks = document.querySelectorAll('#dossierSubnavLinks a[href^="#"]');
	subnavLinks.forEach(function(anchor) {
		anchor.addEventListener('click', function(e) {
			const targetId = this.getAttribute('href');
			const targetEl = document.querySelector(targetId);
			if (targetEl) {
				e.preventDefault();
				const navOffset = 135;
				const elementPosition = targetEl.getBoundingClientRect().top;
				const offsetPosition = elementPosition + window.pageYOffset - navOffset;
				window.scrollTo({
					top: offsetPosition,
					behavior: 'smooth'
				});

				// Update active styles
				subnavLinks.forEach(function(link) {
					link.classList.remove('text-[#0D182A]', 'border-b-2', 'border-[#0EA5AB]', 'font-semibold');
					link.classList.add('text-[#66717D]', 'border-transparent', 'font-medium');
				});
				this.classList.remove('text-[#66717D]', 'border-transparent', 'font-medium');
				this.classList.add('text-[#0D182A]', 'border-b-2', 'border-[#0EA5AB]', 'font-semibold');
			}
		});
	});

	// Dynamic Dyad Simulation calculation
	const dyadSelect = document.getElementById('dyadSelect');
	if (dyadSelect) {
		dyadSelect.addEventListener('change', function() {
			const val = this.value;
			const frictionLabel = document.getElementById('dyadFrictionVal');
			const narrative = document.getElementById('dyadNarrative');
			if (val === 'ENFP') {
				frictionLabel.textContent = 'LOW (18%)';
				frictionLabel.className = 'text-primary font-bold';
				narrative.textContent = 'High complementary bandwidth. The counterpart challenges premise while respecting systemic rigor.';
			} else if (val === 'ESFJ') {
				frictionLabel.textContent = 'ELEVATED (78%)';
				frictionLabel.className = 'text-[#273A8A] font-bold';
				narrative.textContent = 'Potential misalignment between consensus-seeking social harmony and dispassionate empirical efficiency.';
			} else if (val === 'ENTJ') {
				frictionLabel.textContent = 'MODERATE (34%)';
				frictionLabel.className = 'text-secondary font-bold';
				narrative.textContent = 'Strong strategic alignment; watch for occasional authority collisions over execution velocity vs structural purity.';
			} else if (val === 'INTP') {
				frictionLabel.textContent = 'MINIMAL (12%)';
				frictionLabel.className = 'text-primary font-bold';
				narrative.textContent = 'Deep cognitive harmony on analytical taxonomy and theoretical architecture.';
			} else {
				frictionLabel.textContent = 'BALANCED (22%)';
				frictionLabel.className = 'text-primary font-bold';
				narrative.textContent = 'Structured procedural execution with complementary operational reliability.';
			}
		});
	}
});
</script>
