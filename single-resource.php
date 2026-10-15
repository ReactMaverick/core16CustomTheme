<?php
/**
 * Single Resource Template (The Core16 Review Articles & Whitepapers)
 *
 * @package Core16
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();

$cat_terms = get_the_terms( get_the_ID(), 'resource_category' );
$cat_name  = ( $cat_terms && ! is_wp_error( $cat_terms ) ) ? $cat_terms[0]->name : __( 'Research Essay', 'core16' );
$vol_issue = get_field( 'volume_issue' ) ?: 'Volume XIV • Issue 03';
$read_time = get_field( 'reading_time' ) ?: '12 MIN READ';
$issn      = get_field( 'issn_code' ) ?: 'ISSN 2841-9042';
$pdf_url   = get_field( 'download_file_url' );
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'w-full bg-[#FAFAF7]' ); ?>>
	<!-- Header -->
	<header class="w-full bg-white border-b border-rule-grey py-16 px-margin-sm lg:px-margin-lg">
		<div class="max-w-[900px] mx-auto space-y-6">
			<div class="flex items-center gap-3 text-xs font-mono text-slate-subtle">
				<a href="<?php echo esc_url( home_url( '/resources/' ) ); ?>" class="text-core-teal font-semibold hover:underline">
					&larr; <?php esc_html_e( 'The Core16 Review', 'core16' ); ?>
				</a>
				<span>•</span>
				<span><?php echo esc_html( $vol_issue ); ?></span>
				<span>•</span>
				<span><?php echo esc_html( $cat_name ); ?></span>
			</div>

			<h1 class="font-headline text-3xl sm:text-4xl lg:text-5xl font-bold text-midnight leading-tight">
				<?php the_title(); ?>
			</h1>

			<div class="flex flex-wrap items-center justify-between gap-4 pt-4 border-t border-rule-grey font-mono text-xs text-slate-subtle">
				<div class="flex items-center gap-2">
					<span class="material-symbols-outlined text-core-teal text-[18px]">person</span>
					<span class="text-midnight font-medium"><?php the_author(); ?></span>
					<span>•</span>
					<span><?php echo esc_html( get_the_date() ); ?></span>
				</div>
				<div class="flex items-center gap-3">
					<span><?php echo esc_html( $read_time ); ?></span>
					<span>•</span>
					<span><?php echo esc_html( $issn ); ?></span>
				</div>
			</div>
		</div>
	</header>

	<!-- Content -->
	<div class="max-w-[900px] mx-auto px-margin-sm lg:px-margin-lg py-16">
		<?php 
		$featured_img_url = get_the_post_thumbnail_url( get_the_ID(), 'large' ) ?: get_post_meta( get_the_ID(), '_external_image_url', true );
		if ( $featured_img_url ) : ?>
			<div class="mb-10 rounded-2xl overflow-hidden border border-rule-grey shadow-sm">
				<img class="w-full h-auto object-cover max-h-[520px]" src="<?php echo esc_url( $featured_img_url ); ?>" alt="<?php the_title_attribute(); ?>" />
			</div>
		<?php endif; ?>

		<div class="prose prose-lg max-w-none font-body text-midnight leading-relaxed space-y-6">
			<?php the_content(); ?>
		</div>

		<?php if ( $pdf_url ) : ?>
			<div class="mt-12 p-6 bg-mist rounded-xl border border-rule-grey flex flex-col sm:flex-row sm:items-center justify-between gap-4">
				<div>
					<h3 class="font-headline text-base font-bold text-midnight"><?php esc_html_e( 'Download Archival Whitepaper', 'core16' ); ?></h3>
					<p class="font-body text-xs text-slate-subtle mt-0.5"><?php esc_html_e( 'Full peer-reviewed dataset and mathematical appendices in high-resolution PDF format.', 'core16' ); ?></p>
				</div>
				<a href="<?php echo esc_url( $pdf_url ); ?>" class="px-4 py-2 bg-core-teal text-white rounded font-mono text-xs font-semibold hover:bg-[#0b888d] transition-colors inline-flex items-center gap-1.5 shrink-0">
					<span class="material-symbols-outlined text-[16px]">download</span>
					<?php esc_html_e( 'Download PDF', 'core16' ); ?>
				</a>
			</div>
		<?php endif; ?>

		<!-- Author Byline Card -->
		<div class="mt-14 p-6 sm:p-8 rounded-2xl bg-white border border-rule-grey shadow-sm flex flex-col sm:flex-row items-start sm:items-center gap-6">
			<div class="w-16 h-16 rounded-2xl bg-[#17365D] text-white flex items-center justify-center font-serif text-2xl font-bold shrink-0">
				<?php echo esc_html( strtoupper( substr( get_the_author(), 0, 1 ) ) ); ?>
			</div>
			<div class="space-y-1.5 flex-1">
				<div class="flex items-center gap-2">
					<span class="font-headline font-bold text-base text-midnight"><?php the_author(); ?></span>
					<span class="px-2 py-0.5 rounded bg-mist text-[10px] font-mono text-slate-subtle border border-rule-grey"><?php esc_html_e( 'Core16 Faculty Lead', 'core16' ); ?></span>
				</div>
				<p class="font-body text-xs text-slate-subtle leading-relaxed">
					<?php esc_html_e( 'Senior Psychometrician and research fellow at Core16 Institute. Leads continuous longitudinal norming cohorts and FECA stress-decoupling telemetry audits.', 'core16' ); ?>
				</p>
			</div>
		</div>

		<!-- Citations & Return Link -->
		<div class="mt-8 pt-6 border-t border-rule-grey flex flex-wrap items-center justify-between gap-4 font-mono text-xs text-slate-subtle">
			<div class="flex items-center gap-2">
				<span class="font-semibold text-midnight"><?php esc_html_e( 'Document ID:', 'core16' ); ?></span>
				<span><?php echo esc_html( get_field( 'document_id' ) ?: 'WP-2025-04' ); ?></span>
			</div>
			<a href="<?php echo esc_url( home_url( '/resources/' ) ); ?>" class="text-core-teal hover:underline font-semibold flex items-center gap-1">
				<span>&larr; <?php esc_html_e( 'Return to The Core16 Review', 'core16' ); ?></span>
			</a>
		</div>

		<!-- In-Article Assessment CTA -->
		<div class="mt-14 p-8 rounded-2xl bg-midnight text-white border border-white/10 shadow-xl flex flex-col md:flex-row md:items-center justify-between gap-6">
			<div class="space-y-2 max-w-xl">
				<span class="text-xs font-mono text-core-teal uppercase tracking-widest font-semibold"><?php esc_html_e( 'EMPIRICAL EVALUATION', 'core16' ); ?></span>
				<h3 class="text-2xl font-headline font-bold text-white"><?php esc_html_e( 'Calibrate Your Own Cognitive Vectors', 'core16' ); ?></h3>
				<p class="text-xs text-[#D7DEE3] leading-relaxed">
					<?php esc_html_e( 'Complete the validated 48-item Core16 instrument to discover your executive archetype and receive your personalized continuous FECA profile.', 'core16' ); ?>
				</p>
			</div>
			<a href="<?php echo esc_url( home_url( '/individuals/#assessment' ) ); ?>" class="px-6 py-3 rounded-xl bg-core-teal hover:bg-[#0b888d] text-white font-semibold text-xs transition shadow-md shrink-0 text-center">
				<?php esc_html_e( 'Take Assessment', 'core16' ); ?> &rarr;
			</a>
		</div>
	</div>
</article>

<?php
get_footer();
