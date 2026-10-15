<?php
/**
 * Individuals Page - Top Ambient Banner, Hero & Metric Strip
 * Exact match with Stitch "For Individuals" Landing Page (Screen c97dfe44713248cdbdba807a9a4770ab)
 *
 * @package Core16
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$hero_badge  = get_field( 'ind_hero_badge' ) ?: __( 'PERSONAL TALENT ARCHITECTURE // INDIVIDUAL MASTERY', 'core16' );
$hero_id     = get_field( 'ind_dossier_id' ) ?: __( 'DOSSIER ID: IND-809', 'core16' );
$hero_title1 = get_field( 'ind_hero_title1' ) ?: __( 'Clarity Today.', 'core16' );
$hero_title2 = get_field( 'ind_hero_title2' ) ?: __( 'Strategic Success', 'core16' );
$hero_title3 = get_field( 'ind_hero_title3' ) ?: __( 'Tomorrow.', 'core16' );
$hero_desc   = get_field( 'ind_hero_desc' ) ?: __( 'Unlock high-resolution self-awareness to make decisive career maneuvers, master interpersonal power dynamics, and eliminate persistent cognitive blindspots.', 'core16' );
?>

<!-- Top Ambient Structural Banner -->
<section class="w-full bg-surface-container-lowest border-b border-surface-container-high py-space-xs">
	<div class="max-w-[1440px] mx-auto px-margin-sm lg:px-margin-lg flex items-center justify-between">
		<div class="flex items-center gap-space-md">
			<span class="inline-flex items-center gap-1.5 font-label-mono-sm text-label-mono-sm uppercase text-primary tracking-widest">
				<span class="w-1.5 h-1.5 rounded-full bg-primary-container animate-pulse"></span>
				<?php esc_html_e( 'Diagnostic Engine v4.2 Live', 'core16' ); ?>
			</span>
			<span class="text-outline-variant font-label-mono-sm text-label-mono-sm hidden md:inline">|</span>
			<span class="font-label-mono-sm text-label-mono-sm text-on-surface-variant hidden md:inline tracking-wider">
				<?php esc_html_e( 'CALIBRATED COHORT N=184,200 EXECUTIVES & INNOVATORS', 'core16' ); ?>
			</span>
		</div>
		<div class="flex items-center gap-space-sm font-label-mono-sm text-label-mono-sm text-on-surface-variant">
			<span><?php esc_html_e( 'ISO 10667-2 COMPLIANT', 'core16' ); ?></span>
			<span>•</span>
			<span class="text-on-surface font-semibold"><?php esc_html_e( '92.4% RELIABILITY', 'core16' ); ?></span>
		</div>
	</div>
</section>

<!-- Hero Section -->
<section class="w-full bg-surface relative overflow-hidden py-space-xl lg:py-margin-lg border-b border-surface-container-high">
	<!-- Subtle Background Architectural Gridlines -->
	<div class="absolute inset-0 pointer-events-none opacity-40">
		<div class="h-full w-full max-w-[1440px] mx-auto px-margin-sm lg:px-margin-lg grid grid-cols-12 gap-gutter">
			<div class="border-r border-surface-container-highest h-full"></div>
			<div class="border-r border-surface-container-highest h-full col-span-2"></div>
			<div class="border-r border-surface-container-highest h-full col-span-3"></div>
			<div class="border-r border-surface-container-highest h-full col-span-3"></div>
			<div class="border-r border-surface-container-highest h-full col-span-2"></div>
			<div class="border-r border-surface-container-highest h-full"></div>
		</div>
	</div>

	<div class="relative max-w-[1440px] mx-auto px-margin-sm lg:px-margin-lg">
		<div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter-lg items-center">
			<!-- Text Column (7 cols) -->
			<div class="lg:col-span-7 flex flex-col justify-center space-y-space-lg">
				<div class="inline-flex items-center gap-space-sm">
					<span class="px-space-xs py-0.5 bg-surface-container-high text-primary font-label-mono-sm text-label-mono-sm tracking-wider uppercase rounded">
						<?php echo esc_html( $hero_badge ); ?>
					</span>
					<span class="font-label-mono-sm text-label-mono-sm text-outline tracking-tight uppercase hidden sm:inline">
						<?php echo esc_html( $hero_id ); ?>
					</span>
				</div>

				<div class="space-y-space-sm">
					<h1 class="font-display-hero text-display-hero text-on-surface tracking-tight leading-[1.08] max-w-2xl">
						<?php echo esc_html( $hero_title1 ); ?> <br class="hidden sm:block"/>
						<span class="text-primary"><?php echo esc_html( $hero_title2 ); ?></span> <?php echo esc_html( $hero_title3 ); ?>
					</h1>
					<p class="font-body-lead text-body-lead text-on-surface-variant max-w-xl">
						<?php echo esc_html( $hero_desc ); ?>
					</p>
				</div>

				<!-- Action Cluster -->
				<div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-space-md pt-space-xs">
					<a class="inline-flex items-center justify-center h-12 px-space-xl rounded bg-primary-container text-surface-container-lowest font-body-medium text-body-medium font-semibold hover:bg-primary transition-all duration-200 shadow-sm text-center" href="#assessment-flow">
						<span><?php esc_html_e( 'Start Your Free Evaluation', 'core16' ); ?></span>
						<span class="material-symbols-outlined ml-2 text-[20px]">arrow_forward</span>
					</a>
					<a class="inline-flex items-center justify-center h-12 px-space-lg rounded border border-outline-variant bg-surface-container-lowest hover:bg-surface-container hover:border-outline text-on-surface font-body-medium text-body-medium transition-all duration-200" href="#report-preview">
						<span class="material-symbols-outlined mr-2 text-[20px] text-on-surface-variant">menu_book</span>
						<span><?php esc_html_e( 'Preview Sample Report', 'core16' ); ?></span>
						<span class="ml-2 font-label-mono-sm text-label-mono-sm px-1.5 py-0.5 rounded bg-surface-container text-on-surface-variant"><?php esc_html_e( 'PDF', 'core16' ); ?></span>
					</a>
				</div>

				<!-- Trust Badge Ribbon -->
				<div class="pt-space-md border-t border-surface-container-high grid grid-cols-1 sm:grid-cols-3 gap-space-md text-on-surface-variant">
					<div class="flex items-center gap-space-xs">
						<span class="material-symbols-outlined text-primary text-[20px]">timer</span>
						<span class="font-label-mono text-label-mono text-on-surface"><?php esc_html_e( '12-Minute Precision Diagnostic', 'core16' ); ?></span>
					</div>
					<div class="flex items-center gap-space-xs">
						<span class="material-symbols-outlined text-primary text-[20px]">analytics</span>
						<span class="font-label-mono text-label-mono text-on-surface"><?php esc_html_e( '92.4% Retest Stability', 'core16' ); ?></span>
					</div>
					<div class="flex items-center gap-space-xs">
						<span class="material-symbols-outlined text-primary text-[20px]">auto_stories</span>
						<span class="font-label-mono text-label-mono text-on-surface"><?php esc_html_e( '30-Page Executive Synthesis', 'core16' ); ?></span>
					</div>
				</div>
			</div>

			<!-- Hero Graphic Column: Candidate Specimen Card (5 cols) -->
			<div class="lg:col-span-5 relative mt-space-lg lg:mt-0">
				<div class="relative bg-surface-container-lowest rounded-xl p-space-lg shadow-sm border border-surface-container-high">
					<!-- Dossier Header -->
					<div class="flex items-start justify-between pb-space-md border-b border-surface-container-high">
						<div>
							<div class="font-label-mono-sm text-label-mono-sm text-outline uppercase tracking-wider"><?php esc_html_e( 'Candidate Specimen', 'core16' ); ?></div>
							<div class="font-headline-md text-headline-md text-on-surface font-bold tracking-tight"><?php esc_html_e( 'The Catalyst Strategist', 'core16' ); ?></div>
							<div class="font-label-mono text-label-mono text-primary font-medium"><?php esc_html_e( 'FECA Code: F-88 • E-74 • C-42 • A-91', 'core16' ); ?></div>
						</div>
						<span class="px-2 py-1 bg-surface-container text-on-tertiary-container font-label-mono-sm text-label-mono-sm rounded uppercase font-semibold"><?php esc_html_e( 'Verified N1', 'core16' ); ?></span>
					</div>

					<!-- Visual Trait Vector Display -->
					<div class="py-space-md space-y-space-sm">
						<div class="space-y-1">
							<div class="flex justify-between font-label-mono-sm text-label-mono-sm text-on-surface-variant">
								<span><?php esc_html_e( '[F] Cognitive Focus (Depth vs Breadth)', 'core16' ); ?></span>
								<span class="font-bold text-on-surface"><?php esc_html_e( '88th %ile', 'core16' ); ?></span>
							</div>
							<div class="w-full h-2 bg-surface-container rounded overflow-hidden relative">
								<div class="h-full bg-primary-container rounded" style="width: 88%;"></div>
							</div>
						</div>

						<div class="space-y-1">
							<div class="flex justify-between font-label-mono-sm text-label-mono-sm text-on-surface-variant">
								<span><?php esc_html_e( '[E] Execution Drive (Speed vs Method)', 'core16' ); ?></span>
								<span class="font-bold text-on-surface"><?php esc_html_e( '74th %ile', 'core16' ); ?></span>
							</div>
							<div class="w-full h-2 bg-surface-container rounded overflow-hidden">
								<div class="h-full bg-secondary rounded" style="width: 74%;"></div>
							</div>
						</div>

						<div class="space-y-1">
							<div class="flex justify-between font-label-mono-sm text-label-mono-sm text-on-surface-variant">
								<span><?php esc_html_e( '[C] Relational Control (Autonomous vs Shared)', 'core16' ); ?></span>
								<span class="font-bold text-on-surface"><?php esc_html_e( '42nd %ile', 'core16' ); ?></span>
							</div>
							<div class="w-full h-2 bg-surface-container rounded overflow-hidden">
								<div class="h-full bg-tertiary rounded" style="width: 42%;"></div>
							</div>
						</div>

						<div class="space-y-1">
							<div class="flex justify-between font-label-mono-sm text-label-mono-sm text-on-surface-variant">
								<span><?php esc_html_e( '[A] Adaptive Agility (Pivoting vs Grounding)', 'core16' ); ?></span>
								<span class="font-bold text-on-surface"><?php esc_html_e( '91st %ile', 'core16' ); ?></span>
							</div>
							<div class="w-full h-2 bg-surface-container rounded overflow-hidden">
								<div class="h-full bg-primary-container rounded" style="width: 91%;"></div>
							</div>
						</div>
					</div>

					<!-- Dossier Micro Extract -->
					<div class="p-space-sm bg-surface-container-low rounded border border-surface-container-high font-body-sm text-body-sm text-on-surface-variant space-y-1">
						<span class="font-label-mono-sm text-label-mono-sm text-primary uppercase font-bold tracking-wider block"><?php esc_html_e( 'Primary Leverage Vector', 'core16' ); ?></span>
						<?php esc_html_e( 'High-entropy strategic situations requiring rapid synthesis across disconnected data points. Natural stance for crisis leadership or zero-to-one product initiatives.', 'core16' ); ?>
					</div>

					<div class="mt-space-md pt-space-xs flex items-center justify-between text-outline font-label-mono-sm text-label-mono-sm">
						<span><?php esc_html_e( 'Standard Error: ±2.1%', 'core16' ); ?></span>
						<a href="<?php echo esc_url( home_url( '/science-methodology/' ) ); ?>" class="text-primary font-medium hover:underline cursor-pointer">
							<?php esc_html_e( 'Explore Full Diagnostic Schema →', 'core16' ); ?>
						</a>
					</div>
				</div>

				<!-- Overlapping Decorative Micro Badge -->
				<div class="hidden sm:flex absolute -bottom-5 -left-5 bg-surface-container-lowest p-space-sm rounded-lg border border-surface-container-high shadow-md items-center gap-space-sm">
					<div class="w-8 h-8 rounded-full bg-primary-container/10 flex items-center justify-center text-primary">
						<span class="material-symbols-outlined text-[18px]">verified</span>
					</div>
					<div>
						<div class="font-label-mono-sm text-label-mono-sm font-bold text-on-surface uppercase"><?php esc_html_e( 'No Fluff Typology', 'core16' ); ?></div>
						<div class="font-caption text-caption text-on-surface-variant"><?php esc_html_e( 'Continuous psychometric dimensional scale', 'core16' ); ?></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Metric Strip: Why Standard MBTI / Generic Quizzes Fail High Achievers -->
<section class="w-full bg-surface-container-low border-b border-surface-container-high py-space-lg">
	<div class="max-w-[1440px] mx-auto px-margin-sm lg:px-margin-lg">
		<div class="grid grid-cols-1 md:grid-cols-4 gap-space-md">
			<div class="p-space-md bg-surface-container-lowest rounded border border-surface-container-high">
				<div class="font-label-mono-sm text-label-mono-sm text-outline uppercase tracking-wider"><?php esc_html_e( 'Limitation of Binary Tests', 'core16' ); ?></div>
				<div class="font-headline-sm text-headline-sm text-on-surface font-bold mt-1"><?php esc_html_e( 'Binary Forcing', 'core16' ); ?></div>
				<p class="font-body-sm text-body-sm text-on-surface-variant mt-2">
					<?php esc_html_e( 'Standard personality tests force you into 0 or 1 buckets (e.g., Introvert vs Extrovert), erasing the contextual fluidity where true leadership lives.', 'core16' ); ?>
				</p>
			</div>

			<div class="p-space-md bg-surface-container-lowest rounded border border-surface-container-high">
				<div class="font-label-mono-sm text-label-mono-sm text-primary uppercase tracking-wider"><?php esc_html_e( 'The Core16 Advantage', 'core16' ); ?></div>
				<div class="font-headline-sm text-headline-sm text-on-surface font-bold mt-1"><?php esc_html_e( 'FECA Percentile Matrix', 'core16' ); ?></div>
				<p class="font-body-sm text-body-sm text-on-surface-variant mt-2">
					<?php esc_html_e( 'Continuous multidimensional scoring measures exact variance bands with verified standard error rates and behavioral distribution curves.', 'core16' ); ?>
				</p>
			</div>

			<div class="p-space-md bg-surface-container-lowest rounded border border-surface-container-high">
				<div class="font-label-mono-sm text-label-mono-sm text-outline uppercase tracking-wider"><?php esc_html_e( 'Clinical Rigor', 'core16' ); ?></div>
				<div class="font-headline-sm text-headline-sm text-on-surface font-bold mt-1"><?php esc_html_e( 'Decoupled from Stereotypes', 'core16' ); ?></div>
				<p class="font-body-sm text-body-sm text-on-surface-variant mt-2">
					<?php esc_html_e( 'No horoscopic cartoons or patronizing animal avatars. Analytical clarity designed for boardrooms, high-stakes negotiations, and life pivots.', 'core16' ); ?>
				</p>
			</div>

			<div class="p-space-md bg-surface-container-lowest rounded border border-surface-container-high">
				<div class="font-label-mono-sm text-label-mono-sm text-outline uppercase tracking-wider"><?php esc_html_e( 'Tactical Utility', 'core16' ); ?></div>
				<div class="font-headline-sm text-headline-sm text-on-surface font-bold mt-1"><?php esc_html_e( 'Actionable Protocols', 'core16' ); ?></div>
				<p class="font-body-sm text-body-sm text-on-surface-variant mt-2">
					<?php esc_html_e( 'Immediate scripts for difficult conversations, energy depletion mitigation, and cross-functional role positioning.', 'core16' ); ?>
				</p>
			</div>
		</div>
	</div>
</section>
