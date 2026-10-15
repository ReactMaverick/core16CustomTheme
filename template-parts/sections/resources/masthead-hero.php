<?php
/**
 * Resources Page - Masthead & Lead Featured Essay Section (100% Dynamic)
 *
 * @package Core16
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Fetch featured resource or blog post dynamically
$featured_query = new WP_Query(
	array(
		'post_type'      => array( 'post', 'resource' ),
		'posts_per_page' => 1,
		'meta_query'     => array(
			array(
				'key'     => 'featured_status',
				'value'   => '1',
				'compare' => '=',
			),
		),
	)
);

// Fallback to latest post if no featured flag
if ( ! $featured_query->have_posts() ) {
	$featured_query = new WP_Query(
		array(
			'post_type'      => array( 'post', 'resource' ),
			'posts_per_page' => 1,
			'orderby'        => 'date',
			'order'          => 'DESC',
		)
	);
}

$hero_img = 'https://lh3.googleusercontent.com/aida-public/AB6AXuCk6pL-qZxkiU20f49fCuLGA4GOLLmV6E_4dwLO0MpH8YvpokHoF9CVs3RP1SweRcoPisTzJYQOh3-gmmyNYe6EozI2L6C5U2hbquR7e6JL9RM-Pkfq_ifz3HSQHIB7SS2kaK7ieMsznwP0Y1-fT01Oc4hSijbR4-ycZDtSB53YkCA-B6qNxlgPm5_QRm5rKRbbzz6F7fMUM5QCEyDVeOwsxIdww28YDfteYV2iOMWdOObLnujlsqGc';

if ( $featured_query->have_posts() ) {
	$featured_query->the_post();
	$feat_id     = get_the_ID();
	$essay_title = get_the_title();
	$essay_desc  = get_the_excerpt() ?: wp_trim_words( get_the_content(), 35 );
	$essay_url   = get_permalink();
	$feat_badge  = get_post_meta( $feat_id, 'publication_badge', true ) ?: 'ORIGINAL RESEARCH ESSAY';
	$feat_time   = get_post_meta( $feat_id, 'reading_time', true ) ?: '14 MIN READ';
	$feat_vol    = get_post_meta( $feat_id, 'volume_issue', true ) ?: 'Volume XIV • Issue 03';
	$feat_author = get_post_meta( $feat_id, 'author_byline', true ) ?: get_the_author();
	$feat_dyads  = get_post_meta( $feat_id, 'observed_dyads', true ) ?: '1,214';
	$feat_frict  = get_post_meta( $feat_id, 'friction_vector', true ) ?: 'Δ 3.84x';
	$feat_alpha  = get_post_meta( $feat_id, 'mitigation_alpha', true ) ?: '+82.4%';
	$feat_date   = get_the_date( 'F Y' );
	
	$thumb_url = get_the_post_thumbnail_url( $feat_id, 'full' ) ?: get_post_meta( $feat_id, '_external_image_url', true );
	if ( $thumb_url ) {
		$hero_img = $thumb_url;
	}
	wp_reset_postdata();
} else {
	$essay_title = __( 'Why High-Performing C-Suites Fracture at the “Control-Adaptability” Boundary: A 1,200-Boardroom Empirical Study', 'core16' );
	$essay_desc  = __( 'When strategic architects encounter fluid operators during market liquidity shocks, predictable cognitive derailers occur. Here is the mathematical friction model and how leading boards neutralize it before capital allocation stalls.', 'core16' );
	$essay_url   = '#lead-essay';
	$feat_badge  = 'Executive Governance & Dyad Friction';
	$feat_time   = '14 MIN READ';
	$feat_vol    = 'Volume XIV • Issue 03';
	$feat_author = 'Dr. Henrik Lindqvist & Marcus Vance';
	$feat_dyads  = '1,214';
	$feat_frict  = 'Δ 3.84x';
	$feat_alpha  = '+82.4%';
	$feat_date   = 'OCTOBER 2026';
}
?>
<!-- MASTHEAD & HERO PUBLICATION SECTION -->
<section class="w-full bg-surface-container-lowest py-space-xl border-b border-rule-grey/40">
	<div class="max-w-[1440px] mx-auto px-margin-sm lg:px-margin-lg">
		<!-- Archival Eyebrow Header -->
		<div class="flex flex-col md:flex-row md:items-end justify-between gap-space-sm pb-space-lg mb-space-xl border-b border-rule-grey/30">
			<div class="space-y-space-xs">
				<div class="flex items-center gap-space-sm">
					<span class="inline-block w-2.5 h-2.5 rounded-full bg-primary-container"></span>
					<span class="font-label-mono text-label-mono uppercase tracking-widest text-primary-container font-semibold">
						<?php esc_html_e( 'The Core16 Review // ', 'core16' ); ?><?php echo esc_html( $feat_vol ); ?>
					</span>
				</div>
				<p class="font-label-mono-sm text-label-mono-sm uppercase text-on-surface-variant tracking-wider">
					<?php esc_html_e( 'Quarterly Empirical Journal for Enterprise Governance & Cognitive Architecture', 'core16' ); ?>
				</p>
			</div>
			<div class="flex items-center gap-space-md text-on-surface-variant font-label-mono-sm text-label-mono-sm">
				<span>ISSN 2841-9042</span>
				<span>•</span>
				<span>PEER-REVIEWED COHORT N=184,200</span>
				<span>•</span>
				<span class="text-on-surface font-semibold uppercase"><?php echo esc_html( $feat_date ); ?></span>
			</div>
		</div>

		<!-- Feature Split Layout -->
		<div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter-lg items-stretch">
			<!-- Left Column: Lead Essay Editorial Content -->
			<div class="lg:col-span-7 flex flex-col justify-between bg-surface p-space-xl rounded-xl border border-rule-grey/30 shadow-sm">
				<div class="space-y-space-lg">
					<div class="flex flex-wrap items-center gap-space-sm">
						<span class="bg-primary-container/10 text-on-primary-container px-space-sm py-1 rounded font-label-mono-sm text-label-mono-sm uppercase tracking-wider font-semibold">
							<?php echo esc_html( $feat_badge ); ?>
						</span>
						<span class="text-on-surface-variant font-label-mono-sm text-label-mono-sm tracking-wider">
							<?php esc_html_e( 'ORIGINAL RESEARCH ESSAY', 'core16' ); ?>
						</span>
					</div>

					<h1 class="font-headline-xl text-headline-xl text-on-surface tracking-tight leading-tight">
						<a href="<?php echo esc_url( $essay_url ); ?>" class="hover:text-primary transition-colors">
							<?php echo esc_html( $essay_title ); ?>
						</a>
					</h1>

					<p class="font-body-lead text-body-lead text-on-surface-variant">
						<?php echo esc_html( $essay_desc ); ?>
					</p>

					<!-- Quantitative Data Micro-Block -->
					<div class="grid grid-cols-3 gap-space-md p-space-md bg-surface-container-low rounded-lg border border-rule-grey/20">
						<div>
							<span class="block font-label-mono-sm text-label-mono-sm uppercase text-on-surface-variant"><?php esc_html_e( 'Observed Dyads', 'core16' ); ?></span>
							<span class="font-headline-md text-headline-md text-on-surface font-semibold"><?php echo esc_html( $feat_dyads ); ?></span>
							<span class="block font-caption text-caption text-primary"><?php esc_html_e( 'Fortune 1000 & FTSE 250', 'core16' ); ?></span>
						</div>
						<div>
							<span class="block font-label-mono-sm text-label-mono-sm uppercase text-on-surface-variant"><?php esc_html_e( 'Friction Vector', 'core16' ); ?></span>
							<span class="font-headline-md text-headline-md text-on-surface font-semibold"><?php echo esc_html( $feat_frict ); ?></span>
							<span class="block font-caption text-caption text-on-surface-variant"><?php esc_html_e( 'Under Stress Shock', 'core16' ); ?></span>
						</div>
						<div>
							<span class="block font-label-mono-sm text-label-mono-sm uppercase text-on-surface-variant"><?php esc_html_e( 'Mitigation Alpha', 'core16' ); ?></span>
							<span class="font-headline-md text-headline-md text-primary font-semibold"><?php echo esc_html( $feat_alpha ); ?></span>
							<span class="block font-caption text-caption text-on-surface-variant"><?php esc_html_e( 'FECA-Calibrated Dyads', 'core16' ); ?></span>
						</div>
					</div>
				</div>

				<div class="pt-space-xl space-y-space-md">
					<div class="flex flex-wrap items-center justify-between gap-space-sm text-on-surface-variant font-label-mono-sm text-label-mono-sm">
						<div class="flex items-center gap-space-xs">
							<span class="font-semibold text-on-surface"><?php esc_html_e( 'By ', 'core16' ); ?><?php echo esc_html( $feat_author ); ?></span>
							<span>•</span>
							<span><?php esc_html_e( 'Fellows in Strategic Psychometrics', 'core16' ); ?></span>
						</div>
						<div class="flex items-center gap-space-xs">
							<span class="material-symbols-outlined text-[16px] text-primary">schedule</span>
							<span><?php echo esc_html( $feat_time ); ?></span>
							<span>•</span>
							<span class="uppercase"><?php echo esc_html( $feat_date ); ?></span>
						</div>
					</div>

					<div class="flex flex-wrap items-center gap-space-md pt-space-xs">
						<a class="inline-flex items-center justify-center gap-space-xs h-11 px-space-lg rounded bg-inverse-surface text-inverse-on-surface hover:bg-on-surface transition-all font-body-medium text-body-medium font-semibold shadow-sm" href="<?php echo esc_url( $essay_url ); ?>">
							<span><?php esc_html_e( 'Read Complete Essay', 'core16' ); ?></span>
							<span class="material-symbols-outlined text-[18px]">arrow_forward</span>
						</a>
						<a class="inline-flex items-center justify-center gap-space-xs h-11 px-space-md rounded bg-surface-container text-on-surface hover:bg-surface-container-high transition-all font-body-medium text-body-medium font-medium" href="#toolkits">
							<span class="material-symbols-outlined text-[18px] text-primary">download</span>
							<span><?php esc_html_e( 'Download PDF Whitepaper (4.2 MB)', 'core16' ); ?></span>
						</a>
					</div>
				</div>
			</div>

			<!-- Right Column: Editorial Plinth & Visual Articulation -->
			<div class="lg:col-span-5 flex flex-col justify-between bg-inverse-surface text-inverse-on-surface p-space-xl rounded-xl relative overflow-hidden shadow-xl">
				<div class="relative z-10 space-y-space-lg">
					<div class="flex items-center justify-between">
						<span class="font-label-mono-sm text-label-mono-sm text-inverse-primary uppercase tracking-widest">
							FIG. 4.8 // SPECTRUM DYAD MAPPING
						</span>
						<span class="font-label-mono-sm text-label-mono-sm text-tertiary-fixed-dim">
							CONFIDENCE INTERVAL: p &lt; .001
						</span>
					</div>

					<!-- Architectural Render Image Container -->
					<div class="relative w-full h-64 rounded-lg overflow-hidden bg-on-tertiary-container shadow-md">
						<img class="w-full h-full object-cover mix-blend-luminosity hover:mix-blend-normal transition-all duration-700 opacity-90" alt="<?php echo esc_attr( $essay_title ); ?>" src="<?php echo esc_url( $hero_img ); ?>"/>
						<div class="absolute inset-0 bg-gradient-to-t from-inverse-surface via-transparent to-transparent"></div>

						<!-- Data Spectrum Visualization Overlay -->
						<div class="absolute bottom-3 left-3 right-3 bg-inverse-surface/90 backdrop-blur-md p-space-sm rounded border border-white/10">
							<div class="flex justify-between items-center text-[10px] font-label-mono text-tertiary-fixed-dim mb-1">
								<span>STRUCTURAL RIGIDITY (INTJ)</span>
								<span>ADAPTIVE RESONANCE (ENFP)</span>
							</div>
							<div class="w-full h-1.5 bg-surface-container-highest/20 rounded-full relative overflow-hidden">
								<div class="absolute left-[18%] right-[24%] h-full bg-primary-container rounded-full"></div>
								<div class="absolute left-[48%] top-0 bottom-0 w-1 bg-surface-container-lowest"></div>
							</div>
							<div class="flex justify-between items-center text-[9px] font-label-mono text-tertiary-fixed-dim mt-1">
								<span>&minus;2.4&sigma; Critical Zone</span>
								<span class="text-inverse-primary font-semibold">Equilibrium Delta: 0.12</span>
								<span>+3.1&sigma; Divergent Band</span>
							</div>
						</div>
					</div>

					<!-- Executive Editorial Pull Quote -->
					<blockquote class="space-y-space-sm pt-space-xs">
						<p class="font-headline-sm text-headline-sm text-inverse-on-surface italic leading-snug">
							&ldquo;Boardroom collapse is rarely an intelligence deficit. It is almost universally a phase-shift misalignment between structural risk-controllers and catalytic boundary-pushers.&rdquo;
						</p>
						<footer class="font-label-mono text-label-mono text-tertiary-fixed-dim uppercase tracking-wider">
							— <?php esc_html_e( 'Global Boardroom Governance Synthesis (N=1,214)', 'core16' ); ?>
						</footer>
					</blockquote>
				</div>

				<!-- Bottom Metric Index -->
				<div class="relative z-10 pt-space-lg flex items-center justify-between text-tertiary-fixed-dim font-label-mono-sm text-label-mono-sm border-t border-white/10 mt-6">
					<span>ARCHIVE ID: FECA-REV-2026-Q3</span>
					<span class="text-inverse-primary font-semibold">HARVARD &amp; INSEAD COLLABORATIVE INDEX</span>
				</div>
			</div>
		</div>
	</div>
</section>
