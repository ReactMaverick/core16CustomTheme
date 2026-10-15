<?php
/**
 * Archive Template (Category & Taxonomy Archives - 100% Dynamic Stitch Fidelity)
 *
 * @package Core16
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();

// Fetch dynamic categories
$categories_list = get_categories(
	array(
		'hide_empty' => false,
		'exclude'    => array( 1 ),
	)
);
if ( empty( $categories_list ) ) {
	$categories_list = get_terms(
		array(
			'taxonomy'   => 'resource_category',
			'hide_empty' => false,
		)
	);
}

$current_term_id = get_queried_object_id();
?>

<main id="primary" class="site-main w-full bg-surface min-h-[calc(100vh-80px)]">
	<!-- Archival Eyebrow Header -->
	<header class="w-full bg-surface-container-lowest py-space-xl border-b border-rule-grey/40">
		<div class="max-w-[1440px] mx-auto px-margin-sm lg:px-margin-lg">
			<div class="flex flex-col md:flex-row md:items-end justify-between gap-space-sm pb-space-lg mb-space-md border-b border-rule-grey/30">
				<div class="space-y-space-xs">
					<div class="flex items-center gap-space-sm">
						<span class="inline-block w-2.5 h-2.5 rounded-full bg-primary-container"></span>
						<span class="font-label-mono text-label-mono uppercase tracking-widest text-primary-container font-semibold">
							<?php esc_html_e( 'The Core16 Review // Archival Record', 'core16' ); ?>
						</span>
					</div>
					<h1 class="font-headline-xl text-headline-xl text-on-surface tracking-tight leading-tight font-bold">
						<?php the_archive_title(); ?>
					</h1>
					<?php if ( get_the_archive_description() ) : ?>
						<p class="font-body-lead text-body-lead text-on-surface-variant max-w-2xl leading-relaxed">
							<?php the_archive_description(); ?>
						</p>
					<?php endif; ?>
				</div>
				<div class="flex items-center gap-space-md text-on-surface-variant font-label-mono-sm text-label-mono-sm">
					<span>ISSN 2841-9042</span>
					<span>•</span>
					<span>PEER-REVIEWED COHORT N=184,200</span>
					<span>•</span>
					<span class="text-on-surface font-semibold uppercase"><?php echo esc_html( date( 'F Y' ) ); ?></span>
				</div>
			</div>
		</div>
	</header>

	<!-- CATEGORY FILTER / TAXONOMY NAV BAR -->
	<section class="w-full bg-surface-container-low py-space-md sticky top-20 z-40 backdrop-blur-md bg-surface-container-low/95 border-b border-rule-grey/40">
		<div class="max-w-[1440px] mx-auto px-margin-sm lg:px-margin-lg flex items-center justify-between gap-space-md">
			<div class="flex items-center gap-space-xs overflow-x-auto py-1 scrollbar-none" id="categoryFilterContainer">
				<a href="<?php echo esc_url( home_url( '/articles/' ) ); ?>" class="filter-pill whitespace-nowrap px-space-md py-1.5 rounded-full font-label-mono text-label-mono uppercase transition-all <?php echo ( ! is_category() && ! is_tax() ) ? 'bg-inverse-surface text-inverse-on-surface shadow-sm font-semibold' : 'bg-surface-container hover:bg-surface-container-high text-on-surface font-medium'; ?>">
					<?php esc_html_e( 'All Publications', 'core16' ); ?>
				</a>
				<?php if ( ! empty( $categories_list ) && ! is_wp_error( $categories_list ) ) : ?>
					<?php foreach ( $categories_list as $cat_item ) :
						$is_active = ( $current_term_id === $cat_item->term_id );
						$pill_class = $is_active ? 'bg-inverse-surface text-inverse-on-surface shadow-sm font-semibold' : 'bg-surface-container hover:bg-surface-container-high text-on-surface font-medium';
					?>
						<a href="<?php echo esc_url( get_term_link( $cat_item ) ); ?>" class="filter-pill whitespace-nowrap px-space-md py-1.5 rounded-full font-label-mono text-label-mono uppercase transition-all <?php echo esc_attr( $pill_class ); ?>">
							<?php echo esc_html( $cat_item->name ); ?> (<?php echo esc_html( $cat_item->count ); ?>)
						</a>
					<?php endforeach; ?>
				<?php endif; ?>
			</div>
			<div class="hidden md:flex items-center gap-space-sm shrink-0">
				<span class="font-label-mono-sm text-label-mono-sm uppercase text-on-surface-variant"><?php esc_html_e( 'INDEX ORDER:', 'core16' ); ?></span>
				<span class="font-label-mono text-label-mono text-on-surface font-semibold"><?php esc_html_e( 'MOST EMPIRICAL', 'core16' ); ?></span>
			</div>
		</div>
	</section>

	<!-- 3-COLUMN EDITORIAL ARTICLE GRID (DYNAMIC) -->
	<section class="w-full bg-surface py-space-xl">
		<div class="max-w-[1440px] mx-auto px-margin-sm lg:px-margin-lg">
			<div class="flex items-end justify-between mb-space-lg">
				<div>
					<span class="font-label-mono-sm text-label-mono-sm text-primary uppercase tracking-widest font-semibold block mb-1">
						<?php esc_html_e( 'CURATED MONOGRAPHS', 'core16' ); ?>
					</span>
					<h2 class="font-headline-lg text-headline-lg text-on-surface font-bold">
						<?php esc_html_e( 'Analytical Papers & Case Studies', 'core16' ); ?>
					</h2>
				</div>
			</div>

			<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-gutter-lg" id="articlesGrid">
				<?php if ( have_posts() ) : ?>
					<?php
					$i = 1;
					while ( have_posts() ) :
						the_post();
						$p_id = get_the_ID();
						$thumb = get_the_post_thumbnail_url( $p_id, 'large' ) ?: get_post_meta( $p_id, '_external_image_url', true ) ?: 'https://lh3.googleusercontent.com/aida-public/AB6AXuBUWZHImzUg7xSkyeTfz9K0oiy8zCuiB9yS4zXziQYf9luWEz1IildHWQoMtpcn-Q9-xhL4F_SgQIz7IMHjSdRcsUEw0UjKEgglk7UXQMc0IyYCSgIaga9skfvXNC4PNXhkxpkENG6cu6e9YJm5KufBPRGHU01Lm5qHf33uC7-VVllv20H0UFmYYOPECho0AfUYPfJYVYx5lqq5LTAPdLzzAlu2IgyK5UrWgbNhvmaL7b0MyyeMF248';
						$cats = get_the_category( $p_id );
						$cat_label = ! empty( $cats ) ? $cats[0]->name : 'Psychometric Science';
						$read_time = get_post_meta( $p_id, 'reading_time', true ) ?: ( max( 5, ceil( str_word_count( wp_strip_all_tags( get_the_content() ) ) / 180 ) ) . ' MIN READ' );
						$vol_issue = get_post_meta( $p_id, 'volume_issue', true ) ?: ( 'VOL. 14 • ART. ' . sprintf( '%02d', $i ) );
						$author_name = get_post_meta( $p_id, 'author_byline', true ) ?: ( 'Authored by ' . get_the_author() );
						if ( strpos( $author_name, 'Authored by' ) === false ) {
							$author_name = 'Authored by ' . $author_name;
						}
						$spark_val = get_post_meta( $p_id, 'sparkline_percent', true ) ?: '75%';
						$i++;
						?>
						<article class="article-item flex flex-col justify-between bg-surface-container-lowest p-space-lg rounded-xl hover:-translate-y-1 transition-all duration-300 shadow-sm hover:shadow-md border border-rule-grey/20">
							<div class="space-y-space-md">
								<div class="w-full h-48 rounded-lg overflow-hidden relative bg-surface-container">
									<img class="w-full h-full object-cover transition-transform duration-500 hover:scale-105" alt="<?php the_title_attribute(); ?>" src="<?php echo esc_url( $thumb ); ?>"/>
									<span class="absolute top-3 left-3 bg-surface-container-lowest/90 backdrop-blur-md px-2 py-0.5 rounded font-label-mono-sm text-label-mono-sm uppercase text-primary font-semibold shadow-xs">
										<?php echo esc_html( $cat_label ); ?>
									</span>
								</div>

								<div class="flex items-center justify-between text-on-surface-variant font-label-mono-sm text-label-mono-sm">
									<span><?php echo esc_html( $vol_issue ); ?></span>
									<span><?php echo esc_html( $read_time ); ?></span>
								</div>

								<h3 class="font-headline-sm text-headline-sm text-on-surface hover:text-primary transition-colors font-bold leading-snug">
									<a href="<?php the_permalink(); ?>">
										<?php the_title(); ?>
									</a>
								</h3>

								<p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed line-clamp-3">
									<?php echo esc_html( get_the_excerpt() ?: wp_trim_words( get_the_content(), 25 ) ); ?>
								</p>
							</div>

							<div class="pt-space-lg mt-space-md space-y-space-sm border-t border-rule-grey/20">
								<div class="flex items-center justify-between text-on-surface font-label-mono-sm text-label-mono-sm">
									<span class="text-on-surface-variant"><?php echo esc_html( $author_name ); ?></span>
									<a class="text-primary hover:text-on-primary-container font-semibold flex items-center gap-0.5 transition-colors" href="<?php the_permalink(); ?>">
										<span><?php esc_html_e( 'Read Brief', 'core16' ); ?></span>
										<span class="material-symbols-outlined text-[14px]">arrow_forward</span>
									</a>
								</div>
								<div class="h-1 w-full bg-surface-container rounded-full overflow-hidden">
									<div class="h-full bg-primary-container" style="width: <?php echo esc_attr( $spark_val ); ?>;"></div>
								</div>
							</div>
						</article>
					<?php endwhile; ?>
				<?php else : ?>
					<div class="col-span-3 text-center py-12">
						<p class="text-on-surface-variant"><?php esc_html_e( 'No articles found in this category.', 'core16' ); ?></p>
					</div>
				<?php endif; ?>
			</div>

			<div class="mt-space-xl flex justify-center">
				<a class="inline-flex items-center gap-space-xs px-space-lg py-2.5 rounded bg-surface-container-high text-on-surface hover:bg-surface-container hover:text-primary transition-all font-body-medium text-body-medium shadow-sm font-semibold" href="<?php echo esc_url( home_url( '/articles/' ) ); ?>">
					<span><?php esc_html_e( 'Access Retrospective Archive (2018–2026)', 'core16' ); ?></span>
					<span class="material-symbols-outlined text-[18px]">history_edu</span>
				</a>
			</div>
		</div>
	</section>

	<!-- DOWNLOADABLE FIELD GUIDES & TOOLKITS SECTION -->
	<section class="w-full bg-surface-container-low py-space-xl border-t border-rule-grey/40">
		<div class="max-w-[1440px] mx-auto px-margin-sm lg:px-margin-lg">
			<div class="flex flex-col md:flex-row md:items-end justify-between gap-space-md mb-space-xl">
				<div class="space-y-space-xs max-w-2xl">
					<span class="font-label-mono-sm text-label-mono-sm text-primary uppercase tracking-widest font-semibold">
						<?php esc_html_e( 'PRACTITIONER COMPENDIUMS', 'core16' ); ?>
					</span>
					<h2 class="font-headline-lg text-headline-lg text-on-surface font-bold">
						<?php esc_html_e( 'Downloadable Enterprise Field Guides & Toolkits', 'core16' ); ?>
					</h2>
					<p class="font-body-default text-body-default text-on-surface-variant">
						<?php esc_html_e( 'Operational frameworks, workshop facilitation decks, and dimensional scoring matrices calibrated for Chief People Officers, board advisors, and organizational architects.', 'core16' ); ?>
					</p>
				</div>
				<div class="text-right">
					<span class="font-label-mono-sm text-label-mono-sm text-on-surface-variant block uppercase">
						<?php esc_html_e( 'FORMAT ARCHITECTURE', 'core16' ); ?>
					</span>
					<span class="font-label-mono text-label-mono text-on-surface font-semibold">
						<?php esc_html_e( 'PDF • KEYNOTE • NOTION SCHEMAS', 'core16' ); ?>
					</span>
				</div>
			</div>

			<div class="grid grid-cols-1 md:grid-cols-3 gap-gutter-lg">
				<!-- Field Guide 1 -->
				<div class="bg-surface-container-lowest p-space-xl rounded-xl flex flex-col justify-between shadow-sm hover:shadow-md transition-shadow border border-rule-grey/20">
					<div class="space-y-space-md">
						<div class="flex items-center justify-between">
							<span class="bg-secondary-container text-on-secondary-fixed font-label-mono-sm text-label-mono-sm px-2 py-0.5 rounded font-semibold uppercase">
								<?php esc_html_e( '44-PAGE FIELD MANUAL', 'core16' ); ?>
							</span>
							<span class="material-symbols-outlined text-primary text-[24px]">menu_book</span>
						</div>
						<h3 class="font-headline-md text-headline-md text-on-surface font-bold">
							<?php esc_html_e( 'The Executive Communication Handbook (2026 Edition)', 'core16' ); ?>
						</h3>
						<p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">
							<?php esc_html_e( 'A surgical manual detailing dynamic phrasing protocols for 16 archetype pairings. How to deliver high-consequence feedback across divergent cognitive styles.', 'core16' ); ?>
						</p>
					</div>
					<div class="pt-space-lg mt-space-lg border-t border-rule-grey/20">
						<a href="<?php echo esc_url( home_url( '/articles/' ) ); ?>" class="w-full flex items-center justify-center gap-space-xs h-11 px-space-md rounded bg-surface-container text-on-surface hover:bg-primary-container hover:text-on-primary-container transition-all font-body-medium text-body-medium font-medium shadow-sm">
							<span class="material-symbols-outlined text-[18px]">file_download</span>
							<span><?php esc_html_e( 'Download Field Manual (PDF • 8.4 MB)', 'core16' ); ?></span>
						</a>
					</div>
				</div>

				<!-- Field Guide 2 -->
				<div class="bg-surface-container-lowest p-space-xl rounded-xl flex flex-col justify-between shadow-sm hover:shadow-md transition-shadow border border-rule-grey/20">
					<div class="space-y-space-md">
						<div class="flex items-center justify-between">
							<span class="bg-primary-container/15 text-primary font-label-mono-sm text-label-mono-sm px-2 py-0.5 rounded font-semibold uppercase">
								<?php esc_html_e( '32-PAGE WORKSHOP DECK', 'core16' ); ?>
							</span>
							<span class="material-symbols-outlined text-primary text-[24px]">groups</span>
						</div>
						<h3 class="font-headline-md text-headline-md text-on-surface font-bold">
							<?php esc_html_e( 'Team Matrix Facilitator Guide for CPOs & People Leaders', 'core16' ); ?>
						</h3>
						<p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">
							<?php esc_html_e( 'Step-by-step facilitation architecture for running executive offsites. Maps cross-functional cognitive profiles and identifies blind spots in team problem-solving.', 'core16' ); ?>
						</p>
					</div>
					<div class="pt-space-lg mt-space-lg border-t border-rule-grey/20">
						<a href="<?php echo esc_url( home_url( '/articles/' ) ); ?>" class="w-full flex items-center justify-center gap-space-xs h-11 px-space-md rounded bg-surface-container text-on-surface hover:bg-primary-container hover:text-on-primary-container transition-all font-body-medium text-body-medium font-medium shadow-sm">
							<span class="material-symbols-outlined text-[18px]">file_download</span>
							<span><?php esc_html_e( 'Download Deck (PDF/Keynote • 14.1 MB)', 'core16' ); ?></span>
						</a>
					</div>
				</div>

				<!-- Field Guide 3 -->
				<div class="bg-surface-container-lowest p-space-xl rounded-xl flex flex-col justify-between shadow-sm hover:shadow-md transition-shadow border border-rule-grey/20">
					<div class="space-y-space-md">
						<div class="flex items-center justify-between">
							<span class="bg-tertiary-fixed text-on-tertiary-fixed font-label-mono-sm text-label-mono-sm px-2 py-0.5 rounded font-semibold uppercase">
								<?php esc_html_e( '24-PAGE SLIDE DECK', 'core16' ); ?>
							</span>
							<span class="material-symbols-outlined text-primary text-[24px]">analytics</span>
						</div>
						<h3 class="font-headline-md text-headline-md text-on-surface font-bold">
							<?php esc_html_e( 'FECA Dimension Interpretation Field Deck', 'core16' ); ?>
						</h3>
						<p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">
							<?php esc_html_e( 'The canonical empirical diagnostic reference. Unpack Focus, Energy, Clarity, and Agility axes, variance percentiles, and high-stress derailer symptoms.', 'core16' ); ?>
						</p>
					</div>
					<div class="pt-space-lg mt-space-lg border-t border-rule-grey/20">
						<a href="<?php echo esc_url( home_url( '/articles/' ) ); ?>" class="w-full flex items-center justify-center gap-space-xs h-11 px-space-md rounded bg-surface-container text-on-surface hover:bg-primary-container hover:text-on-primary-container transition-all font-body-medium text-body-medium font-medium shadow-sm">
							<span class="material-symbols-outlined text-[18px]">file_download</span>
							<span><?php esc_html_e( 'Download Interpretation Deck (PDF • 6.2 MB)', 'core16' ); ?></span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>

<?php
get_footer();
