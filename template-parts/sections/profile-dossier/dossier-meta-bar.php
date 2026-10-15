<?php
/**
 * Profile Dossier - Meta Bar, Hero Midnight Container & Sticky Navigation
 * Exact match with Stitch Universal Profile Template (ca817d96a41b462186feae7aac448f9d)
 * Fully dynamic with all 16 archetypes support.
 *
 * @package Core16
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$post_id       = get_the_ID();
$dossier       = core16_get_profile_dossier_data( $post_id );
$switcher_list = core16_get_all_profiles_switcher_list();
?>
<!-- Top Meta / Dossier Classification Bar -->
<section class="w-full bg-[#FAFAF7] border-b border-[#D7DEE3] py-2.5 px-4 sm:px-8 lg:px-16">
	<div class="max-w-[1440px] mx-auto flex flex-wrap items-center justify-between gap-y-2 text-[11px] font-label-mono text-tertiary">
		<div class="flex items-center gap-3">
			<span class="inline-flex items-center gap-1.5 px-2 py-0.5 bg-[#EAEFF4] text-[#17365D] font-medium tracking-wide uppercase">
				<span class="w-1.5 h-1.5 rounded-full bg-[#273A8A]"></span>
				<?php echo esc_html( sprintf( __( 'Dossier Registry // Index #%s', 'core16' ), $dossier['index_num'] ) ); ?>
			</span>
			<span class="text-[#8A95AC] hidden sm:inline">|</span>
			<span class="hidden sm:inline"><?php esc_html_e( 'Normative Baseline:', 'core16' ); ?> <strong class="text-on-surface font-semibold">N=184,200</strong></span>
			<span class="text-[#8A95AC] hidden md:inline">|</span>
			<span class="hidden md:inline text-primary font-medium flex items-center gap-1">
				<span class="material-symbols-outlined text-[14px]">verified</span>
				<?php esc_html_e( 'ISO 10667-2 Standardized', 'core16' ); ?>
			</span>
		</div>
		<!-- Interactive Archetype Switcher -->
		<div class="flex items-center gap-2">
			<span class="text-[10px] uppercase tracking-wider text-[#66717D]"><?php esc_html_e( 'Archetype:', 'core16' ); ?></span>
			<div class="relative inline-block text-left" id="profileSelector">
				<select class="bg-surface-container-lowest text-on-surface text-[12px] font-label-mono px-2.5 py-1 pr-7 border border-[#D7DEE3] focus:border-primary-container outline-none transition-colors cursor-pointer appearance-none" id="profileDropdown" onchange="if(this.value) window.location.href=this.value;">
					<?php foreach ( $switcher_list as $code_item => $item ) : ?>
						<option value="<?php echo esc_url( $item['permalink'] ); ?>" <?php selected( $dossier['code'], $code_item ); ?>>
							<?php echo esc_html( $code_item . ' — ' . $item['title'] ); ?>
						</option>
					<?php endforeach; ?>
				</select>
				<span class="material-symbols-outlined absolute right-1.5 top-1.5 pointer-events-none text-tertiary text-[16px]">expand_more</span>
			</div>
			<span class="text-[10px] uppercase px-1.5 py-0.5 bg-[#0D182A] text-[#FAFAF7] font-semibold tracking-widest">v4.2</span>
		</div>
	</div>
</section>

<!-- Hero Header: Deep Midnight #0D182A Dossier Container -->
<section class="w-full bg-[#0D182A] text-[#FAFAF7] border-b border-[#1E2E4A] py-10 lg:py-16 px-4 sm:px-8 lg:px-16 relative overflow-hidden">
	<!-- Subtle Architectural Grid Backdrop -->
	<div class="absolute inset-0 opacity-[0.03] pointer-events-none" style="background-image: linear-gradient(#FAFAF7 1px, transparent 1px), linear-gradient(90deg, #FAFAF7 1px, transparent 1px); background-size: 32px 32px;"></div>
	<div class="max-w-[1440px] mx-auto grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center relative z-10">
		<!-- Left Editorial Identity Block (60%) -->
		<div class="lg:col-span-7 flex flex-col justify-center space-y-6">
			<!-- Territory Tag -->
			<div class="flex flex-wrap items-center gap-3">
				<span class="inline-flex items-center gap-2 px-2.5 py-1 text-[11px] font-label-mono tracking-widest text-[#7DF4FB] bg-[#17365D]/60 border border-[#273A8A]">
					<span class="w-2 h-2 rounded-full bg-[#273A8A] animate-pulse"></span>
					<?php echo esc_html( $dossier['territory'] ); ?>
				</span>
				<span class="text-[11px] font-label-mono text-[#8A95AC] tracking-wider uppercase"><?php esc_html_e( 'Confidential Intelligence Summary', 'core16' ); ?></span>
			</div>
			<!-- Monolithic Profile Title -->
			<div class="space-y-1">
				<div class="flex items-baseline gap-4 flex-wrap">
					<h1 class="font-display-hero text-[48px] sm:text-[64px] lg:text-[76px] leading-none tracking-tight font-bold text-[#FFFFFF]"><?php echo esc_html( $dossier['code'] ); ?></h1>
					<span class="font-headline-lg text-[22px] sm:text-[28px] lg:text-[34px] text-[#BAC7DF] tracking-normal font-semibold"><?php echo esc_html( $dossier['title'] ); ?></span>
				</div>
				<p class="font-body-lead text-[16px] sm:text-[18px] text-[#BAC7DF] leading-relaxed max-w-2xl pt-2">
					<?php echo esc_html( $dossier['lead_summary'] ); ?>
				</p>
			</div>
			<!-- Quick Stats Strip -->
			<div class="grid grid-cols-1 sm:grid-cols-3 gap-3 pt-2 pb-1 border-y border-[#1E2E4A]">
				<div class="py-2">
					<div class="font-label-mono-sm text-[10px] uppercase text-[#8A95AC] tracking-wider"><?php esc_html_e( 'Cognitive Polarity', 'core16' ); ?></div>
					<div class="font-body-medium text-[14px] text-[#FAFAF7] font-semibold mt-0.5"><?php echo esc_html( $dossier['polarity'] ); ?></div>
				</div>
				<div class="py-2 border-t sm:border-t-0 sm:border-l border-[#1E2E4A] sm:pl-4">
					<div class="font-label-mono-sm text-[10px] uppercase text-[#8A95AC] tracking-wider"><?php esc_html_e( 'Primary Driver', 'core16' ); ?></div>
					<div class="font-body-medium text-[14px] text-[#FAFAF7] font-semibold mt-0.5"><?php echo esc_html( $dossier['driver'] ); ?></div>
				</div>
				<div class="py-2 border-t sm:border-t-0 sm:border-l border-[#1E2E4A] sm:pl-4">
					<div class="font-label-mono-sm text-[10px] uppercase text-[#8A95AC] tracking-wider"><?php esc_html_e( 'Boardroom Cadence', 'core16' ); ?></div>
					<div class="font-body-medium text-[14px] text-[#FAFAF7] font-semibold mt-0.5"><?php echo esc_html( $dossier['cadence'] ); ?></div>
				</div>
			</div>
			<!-- Action CTAs -->
			<div class="flex flex-wrap items-center gap-3 pt-1">
				<a class="inline-flex items-center gap-2.5 h-11 px-5 bg-[#0EA5AB] hover:bg-[#00696D] text-white font-body-medium text-[14px] font-semibold transition-all border border-[#0EA5AB] shadow-sm" href="#section-growth">
					<span class="material-symbols-outlined text-[19px]">picture_as_pdf</span>
					<?php esc_html_e( 'Export Executive Dossier (PDF 35-P)', 'core16' ); ?>
				</a>
				<button type="button" class="inline-flex items-center gap-2 h-11 px-4 bg-transparent hover:bg-[#17365D] text-[#FAFAF7] font-body-medium text-[14px] border border-[#273A8A] transition-colors" onclick="const m=document.getElementById('dyad-modal'); if(m) m.classList.remove('hidden');">
					<span class="material-symbols-outlined text-[18px]">hub</span>
					<?php esc_html_e( 'Simulate Dyad Chemistry', 'core16' ); ?>
				</button>
				<button type="button" class="inline-flex items-center justify-center w-11 h-11 bg-transparent hover:bg-[#17365D] text-[#BAC7DF] hover:text-white border border-[#1E2E4A] transition-colors" onclick="navigator.clipboard.writeText(window.location.href); alert('Secure Dossier link copied to clipboard.');" title="<?php esc_attr_e( 'Copy Dossier URL', 'core16' ); ?>">
					<span class="material-symbols-outlined text-[19px]">share</span>
				</button>
			</div>
		</div>
		<!-- Right Figurative & Psychometric Sculpture Rendering (40%) -->
		<div class="lg:col-span-5 flex justify-center items-center">
			<div class="relative w-full max-w-[380px] aspect-[4/5] bg-gradient-to-b from-[#101F35] to-[#0A1220] border border-[#1E2E4A] p-6 flex flex-col justify-between items-center group">
				<!-- Top Classification Stamp -->
				<div class="w-full flex justify-between items-center border-b border-[#1E2E4A] pb-3 text-[10px] font-label-mono text-[#8A95AC]">
					<span><?php echo esc_html( 'FIGURINE ID: ARC-' . $dossier['index_num'] . '-' . $dossier['code'] ); ?></span>
					<span class="text-[#7DF4FB] flex items-center gap-1">
						<span class="w-1.5 h-1.5 bg-[#0EA5AB] rounded-full"></span>
						<?php esc_html_e( 'PHYSICAL ARTIFACT ARCHIVE', 'core16' ); ?>
					</span>
				</div>
				<!-- Studio Architectural Figurine Visualization -->
				<div class="relative w-full h-[220px] flex items-center justify-center">
					<img src="<?php echo esc_url( $dossier['figurine_url'] ); ?>" alt="<?php echo esc_attr( $dossier['code'] . ' ' . $dossier['title'] . ' Figurine' ); ?>" class="w-full h-full object-cover rounded-lg aspect-square drop-shadow-2xl">
				</div>
				<!-- Bottom Metric Plaque -->
				<div class="w-full bg-[#0A1220]/90 border border-[#1E2E4A] p-2.5">
					<div class="flex justify-between items-center text-[10px] font-label-mono text-[#BAC7DF]">
						<span><?php esc_html_e( 'CALIBRATION COEFFICIENT', 'core16' ); ?></span>
						<span class="text-[#7DF4FB] font-semibold"><?php echo esc_html( $dossier['calibration_coeff'] ); ?></span>
					</div>
					<div class="w-full bg-[#172944] h-1 mt-1.5 overflow-hidden">
						<div class="bg-[#273A8A] h-full" style="width: <?php echo esc_attr( $dossier['calibration_val'] ); ?>%;"></div>
					</div>
					<div class="flex justify-between text-[9px] font-label-mono text-[#8A95AC] mt-1">
						<span><?php echo esc_html( $dossier['ci_band'] ); ?></span>
						<span><?php echo esc_html( sprintf( __( 'COHORT FREQ: %s', 'core16' ), $dossier['cohort_freq'] ) ); ?></span>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Sticky Editorial Sub-Navigation Anchor Bar -->
<nav class="sticky top-20 z-40 w-full bg-[#FAFAF7]/95 backdrop-blur-md border-b border-[#D7DEE3] transition-all">
	<div class="max-w-[1440px] mx-auto px-4 sm:px-8 lg:px-16 flex items-center justify-between overflow-x-auto py-0">
		<div class="flex items-center space-x-1 sm:space-x-4 min-w-max text-[13px] font-label-mono" id="dossierSubnavLinks">
			<a class="py-3.5 px-2 text-[#0D182A] border-b-2 border-[#0EA5AB] font-semibold flex items-center gap-1.5" href="#section-overview"><span class="text-[10px] text-[#66717D]">01</span> <?php esc_html_e( 'Overview', 'core16' ); ?></a>
			<a class="py-3.5 px-2 text-[#66717D] hover:text-[#0D182A] border-b-2 border-transparent font-medium transition-colors flex items-center gap-1.5" href="#section-cognitive"><span class="text-[10px] text-[#66717D]">02</span> <?php esc_html_e( 'Cognitive Engine', 'core16' ); ?></a>
			<a class="py-3.5 px-2 text-[#66717D] hover:text-[#0D182A] border-b-2 border-transparent font-medium transition-colors flex items-center gap-1.5" href="#section-workplace"><span class="text-[10px] text-[#66717D]">03</span> <?php esc_html_e( 'Workplace & Boardroom', 'core16' ); ?></a>
			<a class="py-3.5 px-2 text-[#66717D] hover:text-[#0D182A] border-b-2 border-transparent font-medium transition-colors flex items-center gap-1.5" href="#section-interpersonal"><span class="text-[10px] text-[#66717D]">04</span> <?php esc_html_e( 'Interpersonal & Dyads', 'core16' ); ?></a>
			<a class="py-3.5 px-2 text-[#66717D] hover:text-[#0D182A] border-b-2 border-transparent font-medium transition-colors flex items-center gap-1.5" href="#section-watchpoints"><span class="text-[10px] text-[#66717D]">05</span> <?php esc_html_e( 'Governance Watchpoints', 'core16' ); ?></a>
			<a class="py-3.5 px-2 text-[#66717D] hover:text-[#0D182A] border-b-2 border-transparent font-medium transition-colors flex items-center gap-1.5" href="#section-growth"><span class="text-[10px] text-[#66717D]">06</span> <?php esc_html_e( '90-Day Growth Plan', 'core16' ); ?></a>
		</div>
		<!-- Quick Action Utilities -->
		<div class="hidden xl:flex items-center gap-3 py-2 pl-4">
			<span class="text-[10px] font-label-mono text-[#66717D]"><?php echo esc_html( 'DIAGNOSTIC HASH: #4C-' . $dossier['code'] . '-998' ); ?></span>
			<button type="button" class="text-[11px] font-label-mono text-[#00696D] hover:underline flex items-center gap-1" onclick="window.print()">
				<span class="material-symbols-outlined text-[14px]">print</span> <?php esc_html_e( 'Print Summary', 'core16' ); ?>
			</button>
		</div>
	</div>
</nav>
