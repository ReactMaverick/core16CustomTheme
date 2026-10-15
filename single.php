<?php
/**
 * Single Article Template (The Core16 Review / Journal & Research Articles)
 *
 * @package Core16
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();

// Calculate estimated reading time
$word_count = str_word_count( wp_strip_all_tags( get_the_content() ) );
$reading_time = max( 1, ceil( $word_count / 220 ) );

// Categories
$categories = get_the_category();
$category_name = ! empty( $categories ) ? $categories[0]->name : __( 'Journal Article', 'core16' );
$category_link = ! empty( $categories ) ? get_category_link( $categories[0]->term_id ) : home_url( '/resources/' );
?>

<main id="primary" class="site-main w-full bg-[#FAFAF7]">
	<?php while ( have_posts() ) : the_post(); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class( 'w-full' ); ?>>
			
			<!-- ARTICLE MASTHEAD -->
			<header class="w-full bg-white border-b border-rule-grey py-14 sm:py-20 px-4 sm:px-6 lg:px-8">
				<div class="max-w-4xl mx-auto space-y-6">
					
					<!-- Breadcrumb Navigation -->
					<nav class="flex items-center gap-2 text-xs font-mono text-slate-subtle" aria-label="<?php esc_attr_e( 'Breadcrumb', 'core16' ); ?>">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="hover:text-midnight transition"><?php esc_html_e( 'Home', 'core16' ); ?></a>
						<span>/</span>
						<a href="<?php echo esc_url( home_url( '/resources/' ) ); ?>" class="hover:text-midnight transition"><?php esc_html_e( 'The Core16 Review', 'core16' ); ?></a>
						<span>/</span>
						<span class="text-core-teal font-semibold"><?php echo esc_html( $category_name ); ?></span>
					</nav>

					<!-- Category Pill & Issue Tag -->
					<div class="flex flex-wrap items-center gap-3">
						<a href="<?php echo esc_url( $category_link ); ?>" class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-core-teal/10 border border-core-teal/30 text-xs font-mono font-semibold text-core-teal uppercase tracking-wider hover:bg-core-teal/20 transition">
							<span class="w-1.5 h-1.5 rounded-full bg-core-teal"></span>
							<?php echo esc_html( $category_name ); ?>
						</a>
						<span class="text-xs font-mono text-slate-subtle">
							<?php echo esc_html( get_the_date( 'F Y' ) ); ?> • Volume XIV
						</span>
					</div>

					<!-- Article Headline -->
					<h1 class="font-headline text-3xl sm:text-4xl lg:text-5xl font-bold text-midnight tracking-tight leading-tight">
						<?php the_title(); ?>
					</h1>

					<!-- Article Excerpt / Executive Abstract -->
					<?php if ( has_excerpt() ) : ?>
						<p class="font-body text-base sm:text-lg text-slate-subtle leading-relaxed border-l-2 border-core-teal pl-4 italic">
							<?php echo esc_html( get_the_excerpt() ); ?>
						</p>
					<?php endif; ?>

					<!-- Metadata & Author Citation Bar -->
					<div class="flex flex-wrap items-center justify-between gap-4 pt-6 border-t border-rule-grey font-mono text-xs text-slate-subtle">
						<div class="flex items-center gap-3">
							<div class="w-9 h-9 rounded-full bg-midnight text-white flex items-center justify-center font-serif text-sm font-bold">
								<?php echo esc_html( strtoupper( substr( get_the_author(), 0, 1 ) ) ); ?>
							</div>
							<div>
								<span class="block text-midnight font-semibold font-body text-sm"><?php the_author(); ?></span>
								<span class="text-[11px] text-slate-subtle"><?php esc_html_e( 'Core16 Psychometrics Institute', 'core16' ); ?></span>
							</div>
						</div>

						<div class="flex items-center gap-4 text-[11px]">
							<span class="flex items-center gap-1">
								<svg class="w-3.5 h-3.5 text-core-teal" fill="none" stroke="currentColor" viewBox="0 0 24 24">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
								</svg>
								<?php echo esc_html( $reading_time . ' min read' ); ?>
							</span>
							<span>•</span>
							<span><?php echo esc_html( get_the_date( 'M d, Y' ) ); ?></span>
							<span>•</span>
							<span class="text-emerald-700 font-semibold"><?php esc_html_e( 'Peer Reviewed', 'core16' ); ?></span>
						</div>
					</div>

				</div>
			</header>

			<!-- ARTICLE BODY CONTENT -->
			<div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12 sm:py-16">
				
				<?php 
				$featured_img_url = get_the_post_thumbnail_url( get_the_ID(), 'large' ) ?: get_post_meta( get_the_ID(), '_external_image_url', true );
				if ( $featured_img_url ) : ?>
					<div class="mb-10 rounded-2xl overflow-hidden border border-rule-grey shadow-sm">
						<img class="w-full h-auto object-cover max-h-[520px]" src="<?php echo esc_url( $featured_img_url ); ?>" alt="<?php the_title_attribute(); ?>" />
						<?php if ( get_the_post_thumbnail_caption() ) : ?>
							<figcaption class="p-3 bg-mist text-xs font-mono text-slate-subtle border-t border-rule-grey">
								<?php echo esc_html( get_the_post_thumbnail_caption() ); ?>
							</figcaption>
						<?php endif; ?>
					</div>
				<?php endif; ?>

				<!-- Editorial Text Stream -->
				<div class="entry-content font-body text-midnight text-base leading-relaxed space-y-6 max-w-none">
					<?php the_content(); ?>
				</div>

				<!-- Author Byline Card -->
				<div class="mt-14 p-6 sm:p-8 rounded-2xl bg-white border border-rule-grey shadow-sm flex flex-col sm:flex-row items-start sm:items-center gap-6">
					<div class="w-16 h-16 rounded-2xl bg-[#17365D] text-white flex items-center justify-center font-serif text-2xl font-bold shrink-0">
						<?php echo esc_html( strtoupper( substr( get_the_author(), 0, 1 ) ) ); ?>
					</div>
					<div class="space-y-1.5 flex-1">
						<div class="flex items-center gap-2">
							<span class="font-headline font-bold text-base text-midnight"><?php the_author(); ?></span>
							<span class="px-2 py-0.5 rounded bg-mist text-[10px] font-mono text-slate-subtle border border-rule-grey"><?php esc_html_e( 'Author & Faculty Lead', 'core16' ); ?></span>
						</div>
						<p class="font-body text-xs text-slate-subtle leading-relaxed">
							<?php
							$author_desc = get_the_author_meta( 'description' );
							echo esc_html( $author_desc ?: __( 'Senior Researcher at Core16 Psychometrics Institute specializing in continuous cognitive variance, executive decision stress, and multi-vector organizational architectures.', 'core16' ) );
							?>
						</p>
					</div>
				</div>

				<!-- Share & Citations Bar -->
				<div class="mt-8 pt-6 border-t border-rule-grey flex flex-wrap items-center justify-between gap-4 font-mono text-xs text-slate-subtle">
					<div class="flex items-center gap-2">
						<span class="font-semibold text-midnight"><?php esc_html_e( 'Citation:', 'core16' ); ?></span>
						<span><?php echo esc_html( 'Core16 Journal of Applied Psychometrics, Vol. XIV, ' . gmdate( 'Y' ) ); ?></span>
					</div>
					<div class="flex items-center gap-3">
						<a href="<?php echo esc_url( home_url( '/resources/' ) ); ?>" class="text-core-teal hover:underline font-semibold flex items-center gap-1">
							<span>&larr; <?php esc_html_e( 'Return to The Core16 Review', 'core16' ); ?></span>
						</a>
					</div>
				</div>

				<!-- IN-ARTICLE CTA TO ASSESSMENT -->
				<div class="mt-14 p-8 rounded-2xl bg-midnight text-white border border-white/10 shadow-xl flex flex-col md:flex-row md:items-center justify-between gap-6">
					<div class="space-y-2 max-w-xl">
						<span class="text-xs font-mono text-core-teal uppercase tracking-widest font-semibold"><?php esc_html_e( 'EXPLORE YOUR OWN PROFILE', 'core16' ); ?></span>
						<h3 class="text-2xl font-headline font-bold text-white"><?php esc_html_e( 'Discover Your 16-Vector Baseline', 'core16' ); ?></h3>
						<p class="text-xs text-[#D7DEE3] leading-relaxed">
							<?php esc_html_e( 'Complete the 48-item validated Core16 assessment to uncover your primary cognitive archetype and continuous FECA metrics.', 'core16' ); ?>
						</p>
					</div>
					<a href="<?php echo esc_url( home_url( '/individuals/#assessment' ) ); ?>" class="px-6 py-3 rounded-xl bg-core-teal hover:bg-[#0b888d] text-white font-semibold text-xs transition shadow-md shrink-0 text-center">
						<?php esc_html_e( 'Take Free Assessment', 'core16' ); ?> &rarr;
					</a>
				</div>

			</div>
		</article>
	<?php endwhile; ?>
</main>

<?php
get_footer();
