<?php
/**
 * Resources Page - Category Filter & Publications Grid Section (100% Dynamic)
 *
 * @package Core16
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// 1. Fetch Dynamic Categories from WordPress
$categories_list = get_categories(
	array(
		'hide_empty' => false,
		'exclude'    => array( 1 ), // exclude uncategorized
	)
);

// Fallback to resource_category if standard categories empty
if ( empty( $categories_list ) ) {
	$categories_list = get_terms(
		array(
			'taxonomy'   => 'resource_category',
			'hide_empty' => false,
		)
	);
}

// 2. Fetch Dynamic Posts
$posts_query = new WP_Query(
	array(
		'post_type'      => array( 'post', 'resource' ),
		'posts_per_page' => 18,
		'post_status'    => 'publish',
		'orderby'        => 'date',
		'order'          => 'DESC',
	)
);

$total_posts_count = $posts_query->found_posts ?: 48;

// Fallback images pool if post has no image
$fallback_images = array(
	'science'       => 'https://lh3.googleusercontent.com/aida-public/AB6AXuBUWZHImzUg7xSkyeTfz9K0oiy8zCuiB9yS4zXziQYf9luWEz1IildHWQoMtpcn-Q9-xhL4F_SgQIz7IMHjSdRcsUEw0UjKEgglk7UXQMc0IyYCSgIaga9skfvXNC4PNXhkxpkENG6cu6e9YJm5KufBPRGHU01Lm5qHf33uC7-VVllv20H0UFmYYOPECho0AfUYPfJYVYx5lqq5LTAPdLzzAlu2IgyK5UrWgbNhvmaL7b0MyyeMF248',
	'leadership'    => 'https://lh3.googleusercontent.com/aida-public/AB6AXuAE7jZnfzzl3VgnqPEao-X_JhMvbwIRwjd7wrahNfay1QCZTbJrPnHXmZ7uXYzSc-PpPs-DkkL1pmtg2f-Pwk2PfSRiaRXY3cj63xzWRECYOk5lfcNex3N2W1SSvE2e1GNF7OPzRusbjLWNi59lu547qgB8TnsNj7OXGvxTIzCja8dxyQP8rQHsTnWHtN00Zid7nC71o4V96PqAyIeRXE3MBVf0HzVjYaVacgjC-GYaR88iTpAN7LOs',
	'interpersonal' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuBVBHe2gXIfyHkTZCSyMU9IK_nPB-239xactKX2BkCeW3ueZIh2wj0wp-SN-1B82pw4UlfFm1W2Q8oBsvRp2dD26ZzyKztIyMH52WjfCkRqdUTzBmSPf1DNElCQUNBiYhAQbUsNCnVP3PgArvE0B9aXjhNmQTemt3ok6YfSW3tHHQhD-JQJCwHKIAKw5r79oE6TNhuCQTEM5A1rRvKyY3lEPXNF5LYBjmP7QRpJUX8xNXQGzhPbCgum',
	'performance'   => 'https://lh3.googleusercontent.com/aida-public/AB6AXuCDdWxcq2b5gmO4taHLyIp4QXNvCWIZVo-EYG1955LxtdQ-b2nvkw0dCk3dvnHJXx78YU_T6UXFSbU0ofSZV7oQg18nh7vC26yRUOTCRbjStsglKoquzxTbujV-gIBEyLC_Ebqadufq9R_SWNsDDyHKJjoUHCvpsMZ4zjmp3y5hUeKIob-sgE4FXVc755gy--8abZB9B46g5AH_n4iKa7bSmalyrUHlgEQBebD518XKiADp1iYoIG_8',
	'career'        => 'https://lh3.googleusercontent.com/aida-public/AB6AXuCPtCTZS6gHB7Oxz4SRe0UHe6w0J4J6VRJnwgoxjtQo-gIs2NZTkzxtyfFYVu5pVz_Oem70Tg_c1rjBjZUVE1nG9G4Yy2UCHWD_LJs3vIESLBvByZ5k3MezapWd6RYeNGrmPHg3Zi_Mumy2veuvBprA6aVAaeLvkEzvEFEKyfo2QBfa7HEzR0MV446lmpS-F-DdolabMrNTssabc6MZOAH6rTkCIcLNBDVKfoinxVIJNvBIlksddA_U',
	'default'       => 'https://lh3.googleusercontent.com/aida-public/AB6AXuAmXTlOoWJuHZp-1eX1Kbnb6Z5xRgfuHoXdoTdoJm5cS7IgjXOszG4onOnCG9xpawSRX0vX48TsXzzY2Qr0fxJoMCRstWMMvPl_u6FYRt58RsN_4RCBgysoc59OlLpMgMjPujyNgVN4D-tEki0Oovs8xLAroV02cB0Q3W9H08wjNa_1AqWcz7nzDt-6_auCl9oidNhVqlaLwlazVmKpFkbvvP8nWyh8MrrM4meFBMLW8iqZUwaQ2TR7',
);
?>

<!-- CATEGORY FILTER / TAXONOMY NAV BAR -->
<section class="w-full bg-surface-container-low py-space-md sticky top-20 z-40 backdrop-blur-md bg-surface-container-low/95 border-b border-rule-grey/40">
	<div class="max-w-[1440px] mx-auto px-margin-sm lg:px-margin-lg flex items-center justify-between gap-space-md">
		<!-- Interactive Filter Pills -->
		<div class="flex items-center gap-space-xs overflow-x-auto py-1 scrollbar-none" id="categoryFilterContainer">
			<button class="filter-pill active whitespace-nowrap px-space-md py-1.5 rounded-full font-label-mono text-label-mono uppercase transition-all bg-inverse-surface text-inverse-on-surface shadow-sm font-semibold cursor-pointer" data-category="all">
				<?php esc_html_e( 'All Publications', 'core16' ); ?> (<?php echo esc_html( $total_posts_count ); ?>)
			</button>

			<?php if ( ! empty( $categories_list ) && ! is_wp_error( $categories_list ) ) : ?>
				<?php foreach ( $categories_list as $cat_item ) :
					$cat_slug = $cat_item->slug;
					// Standardize slug matching
					if ( strpos( $cat_slug, 'leadership' ) !== false ) $cat_slug = 'leadership';
					elseif ( strpos( $cat_slug, 'interpersonal' ) !== false ) $cat_slug = 'interpersonal';
					elseif ( strpos( $cat_slug, 'science' ) !== false || strpos( $cat_slug, 'psychometric' ) !== false ) $cat_slug = 'science';
					elseif ( strpos( $cat_slug, 'performance' ) !== false || strpos( $cat_slug, 'cognitive' ) !== false ) $cat_slug = 'performance';
					elseif ( strpos( $cat_slug, 'career' ) !== false ) $cat_slug = 'career';
				?>
					<button class="filter-pill whitespace-nowrap px-space-md py-1.5 rounded-full font-label-mono text-label-mono uppercase transition-all bg-surface-container hover:bg-surface-container-high text-on-surface font-medium cursor-pointer" data-category="<?php echo esc_attr( $cat_slug ); ?>">
						<?php echo esc_html( $cat_item->name ); ?> (<?php echo esc_html( $cat_item->count ); ?>)
					</button>
				<?php endforeach; ?>
			<?php else : ?>
				<button class="filter-pill whitespace-nowrap px-space-md py-1.5 rounded-full font-label-mono text-label-mono uppercase transition-all bg-surface-container hover:bg-surface-container-high text-on-surface font-medium cursor-pointer" data-category="leadership">
					<?php esc_html_e( 'Leadership Strategy (14)', 'core16' ); ?>
				</button>
				<button class="filter-pill whitespace-nowrap px-space-md py-1.5 rounded-full font-label-mono text-label-mono uppercase transition-all bg-surface-container hover:bg-surface-container-high text-on-surface font-medium cursor-pointer" data-category="interpersonal">
					<?php esc_html_e( 'Interpersonal Dynamics (12)', 'core16' ); ?>
				</button>
				<button class="filter-pill whitespace-nowrap px-space-md py-1.5 rounded-full font-label-mono text-label-mono uppercase transition-all bg-surface-container hover:bg-surface-container-high text-on-surface font-medium cursor-pointer" data-category="science">
					<?php esc_html_e( 'Psychometric Science (9)', 'core16' ); ?>
				</button>
				<button class="filter-pill whitespace-nowrap px-space-md py-1.5 rounded-full font-label-mono text-label-mono uppercase transition-all bg-surface-container hover:bg-surface-container-high text-on-surface font-medium cursor-pointer" data-category="performance">
					<?php esc_html_e( 'Cognitive Performance (8)', 'core16' ); ?>
				</button>
				<button class="filter-pill whitespace-nowrap px-space-md py-1.5 rounded-full font-label-mono text-label-mono uppercase transition-all bg-surface-container hover:bg-surface-container-high text-on-surface font-medium cursor-pointer" data-category="career">
					<?php esc_html_e( 'Career Transition (5)', 'core16' ); ?>
				</button>
			<?php endif; ?>
		</div>

		<!-- Quick Search / Sort Terminal -->
		<div class="hidden md:flex items-center gap-space-sm shrink-0">
			<span class="font-label-mono-sm text-label-mono-sm uppercase text-on-surface-variant"><?php esc_html_e( 'INDEX ORDER:', 'core16' ); ?></span>
			<button class="flex items-center gap-1 font-label-mono text-label-mono text-on-surface hover:text-primary transition-colors cursor-pointer">
				<span><?php esc_html_e( 'MOST EMPIRICAL', 'core16' ); ?></span>
				<span class="material-symbols-outlined text-[16px]">arrow_drop_down</span>
			</button>
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
			<span class="hidden sm:inline-block font-label-mono-sm text-label-mono-sm text-on-surface-variant uppercase">
				<?php printf( esc_html__( 'SHOWING %d OF %d PEER-REVIEWED BRIEFS', 'core16' ), $posts_query->post_count, $total_posts_count ); ?>
			</span>
		</div>

		<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-gutter-lg" id="articlesGrid">
			<?php if ( $posts_query->have_posts() ) : ?>
				<?php
				$art_idx = 1;
				while ( $posts_query->have_posts() ) :
					$posts_query->the_post();
					$p_id = get_the_ID();

					// Category detection
					$terms = get_the_category( $p_id );
					if ( empty( $terms ) ) {
						$terms = get_the_terms( $p_id, 'resource_category' );
					}
					$cat_name = ! empty( $terms ) && ! is_wp_error( $terms ) ? $terms[0]->name : 'Psychometric Science';
					$cat_slug = ! empty( $terms ) && ! is_wp_error( $terms ) ? $terms[0]->slug : 'science';
					
					// Normalize category slug for filter matching
					if ( strpos( $cat_slug, 'leadership' ) !== false ) $filter_key = 'leadership';
					elseif ( strpos( $cat_slug, 'interpersonal' ) !== false ) $filter_key = 'interpersonal';
					elseif ( strpos( $cat_slug, 'science' ) !== false || strpos( $cat_slug, 'psychometric' ) !== false ) $filter_key = 'science';
					elseif ( strpos( $cat_slug, 'performance' ) !== false || strpos( $cat_slug, 'cognitive' ) !== false ) $filter_key = 'performance';
					elseif ( strpos( $cat_slug, 'career' ) !== false ) $filter_key = 'career';
					else $filter_key = $cat_slug;

					// Meta fields
					$read_time = get_post_meta( $p_id, 'reading_time', true ) ?: ( max( 5, ceil( str_word_count( wp_strip_all_tags( get_the_content() ) ) / 180 ) ) . ' MIN READ' );
					$vol_issue = get_post_meta( $p_id, 'volume_issue', true ) ?: ( 'VOL. 14 • ART. ' . sprintf( '%02d', $art_idx ) );
					$author_name = get_post_meta( $p_id, 'author_byline', true ) ?: ( 'Authored by ' . get_the_author() );
					if ( strpos( $author_name, 'Authored by' ) === false ) {
						$author_name = 'Authored by ' . $author_name;
					}
					$spark_val = get_post_meta( $p_id, 'sparkline_percent', true ) ?: '75%';
					$spark_class = 'w-[' . $spark_val . ']';

					// Image
					$thumb = get_the_post_thumbnail_url( $p_id, 'large' ) ?: get_post_meta( $p_id, '_external_image_url', true );
					if ( ! $thumb ) {
						$thumb = isset( $fallback_images[ $filter_key ] ) ? $fallback_images[ $filter_key ] : $fallback_images['default'];
					}
					$art_idx++;
				?>
					<article class="article-item flex flex-col justify-between bg-surface-container-lowest p-space-lg rounded-xl hover:-translate-y-1 transition-all duration-300 shadow-sm hover:shadow-md border border-rule-grey/20" data-category="<?php echo esc_attr( $filter_key ); ?>">
						<div class="space-y-space-md">
							<!-- Article Image -->
							<div class="w-full h-48 rounded-lg overflow-hidden relative bg-surface-container">
								<img class="w-full h-full object-cover transition-transform duration-500 hover:scale-105" alt="<?php the_title_attribute(); ?>" src="<?php echo esc_url( $thumb ); ?>"/>
								<span class="absolute top-3 left-3 bg-surface-container-lowest/90 backdrop-blur-md px-2 py-0.5 rounded font-label-mono-sm text-label-mono-sm uppercase text-primary font-semibold shadow-xs">
									<?php echo esc_html( $cat_name ); ?>
								</span>
							</div>

							<div class="flex items-center justify-between text-on-surface-variant font-label-mono-sm text-label-mono-sm">
								<span><?php echo esc_html( $vol_issue ); ?></span>
								<span><?php echo esc_html( $read_time ); ?></span>
							</div>

							<h3 class="font-headline-sm text-headline-sm text-on-surface hover:text-primary transition-colors cursor-pointer font-bold leading-snug">
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
							<!-- Micro Sparkline visualization inline -->
							<div class="h-1 w-full bg-surface-container rounded-full overflow-hidden">
								<div class="h-full bg-primary-container <?php echo esc_attr( $spark_class ); ?>" style="width: <?php echo esc_attr( $spark_val ); ?>;"></div>
							</div>
						</div>
					</article>
				<?php endwhile; wp_reset_postdata(); ?>
			<?php endif; ?>
		</div>

		<!-- Load More / Archive Callout -->
		<div class="mt-space-xl flex justify-center">
			<a class="inline-flex items-center gap-space-xs px-space-lg py-2.5 rounded bg-surface-container-high text-on-surface hover:bg-surface-container hover:text-primary transition-all font-body-medium text-body-medium shadow-sm font-semibold" href="#toolkits">
				<span><?php esc_html_e( 'Access Retrospective Archive (2018–2026)', 'core16' ); ?></span>
				<span class="material-symbols-outlined text-[18px]">history_edu</span>
			</a>
		</div>
	</div>
</section>

<!-- DOWNLOADABLE FIELD GUIDES & TOOLKITS SECTION -->
<section id="toolkits" class="w-full bg-surface-container-low py-space-xl border-t border-rule-grey/40">
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
					<ul class="space-y-space-xs font-body-sm text-body-sm text-on-surface-variant pt-space-xs">
						<li class="flex items-center gap-2">
							<span class="material-symbols-outlined text-[16px] text-primary">check_circle</span>
							<span><?php esc_html_e( 'Cross-Quadrant Crisis Protocols', 'core16' ); ?></span>
						</li>
						<li class="flex items-center gap-2">
							<span class="material-symbols-outlined text-[16px] text-primary">check_circle</span>
							<span><?php esc_html_e( 'FECA Friction Mitigation Cheatsheets', 'core16' ); ?></span>
						</li>
						<li class="flex items-center gap-2">
							<span class="material-symbols-outlined text-[16px] text-primary">check_circle</span>
							<span><?php esc_html_e( 'Boardroom Mediation Scripts', 'core16' ); ?></span>
						</li>
					</ul>
				</div>
				<div class="pt-space-lg mt-space-lg border-t border-rule-grey/20">
					<button type="button" class="w-full flex items-center justify-center gap-space-xs h-11 px-space-md rounded bg-surface-container text-on-surface hover:bg-primary-container hover:text-on-primary-container transition-all font-body-medium text-body-medium font-medium shadow-sm cursor-pointer">
						<span class="material-symbols-outlined text-[18px]">file_download</span>
						<span><?php esc_html_e( 'Download Field Manual (PDF • 8.4 MB)', 'core16' ); ?></span>
					</button>
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
					<ul class="space-y-space-xs font-body-sm text-body-sm text-on-surface-variant pt-space-xs">
						<li class="flex items-center gap-2">
							<span class="material-symbols-outlined text-[16px] text-primary">check_circle</span>
							<span><?php esc_html_e( 'Half-Day Offsite Facilitation Agenda', 'core16' ); ?></span>
						</li>
						<li class="flex items-center gap-2">
							<span class="material-symbols-outlined text-[16px] text-primary">check_circle</span>
							<span><?php esc_html_e( 'Interactive Blind-Spot Exercises', 'core16' ); ?></span>
						</li>
						<li class="flex items-center gap-2">
							<span class="material-symbols-outlined text-[16px] text-primary">check_circle</span>
							<span><?php esc_html_e( 'Custom Team Matrix Miro Templates', 'core16' ); ?></span>
						</li>
					</ul>
				</div>
				<div class="pt-space-lg mt-space-lg border-t border-rule-grey/20">
					<button type="button" class="w-full flex items-center justify-center gap-space-xs h-11 px-space-md rounded bg-surface-container text-on-surface hover:bg-primary-container hover:text-on-primary-container transition-all font-body-medium text-body-medium font-medium shadow-sm cursor-pointer">
						<span class="material-symbols-outlined text-[18px]">file_download</span>
						<span><?php esc_html_e( 'Download Deck (PDF/Keynote • 14.1 MB)', 'core16' ); ?></span>
					</button>
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
					<ul class="space-y-space-xs font-body-sm text-body-sm text-on-surface-variant pt-space-xs">
						<li class="flex items-center gap-2">
							<span class="material-symbols-outlined text-[16px] text-primary">check_circle</span>
							<span><?php esc_html_e( 'Normative Score Calibration Tables', 'core16' ); ?></span>
						</li>
						<li class="flex items-center gap-2">
							<span class="material-symbols-outlined text-[16px] text-primary">check_circle</span>
							<span><?php esc_html_e( 'Statistical Derailer Predictive Matrix', 'core16' ); ?></span>
						</li>
						<li class="flex items-center gap-2">
							<span class="material-symbols-outlined text-[16px] text-primary">check_circle</span>
							<span><?php esc_html_e( 'Psychometric Validity Standard Indices', 'core16' ); ?></span>
						</li>
					</ul>
				</div>
				<div class="pt-space-lg mt-space-lg border-t border-rule-grey/20">
					<button type="button" class="w-full flex items-center justify-center gap-space-xs h-11 px-space-md rounded bg-surface-container text-on-surface hover:bg-primary-container hover:text-on-primary-container transition-all font-body-medium text-body-medium font-medium shadow-sm cursor-pointer">
						<span class="material-symbols-outlined text-[18px]">file_download</span>
						<span><?php esc_html_e( 'Download Interpretation Deck (PDF • 6.2 MB)', 'core16' ); ?></span>
					</button>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- THE CORE16 DISPATCH BOX (SUBSCRIPTION LUXURY CARD) -->
<section class="w-full bg-surface py-space-xl">
	<div class="max-w-[1440px] mx-auto px-margin-sm lg:px-margin-lg">
		<div class="bg-inverse-surface text-inverse-on-surface p-space-xl lg:p-space-xl rounded-xl shadow-lg relative overflow-hidden border border-white/5">
			<!-- Subtle Background Geometry Overlay -->
			<div class="absolute -right-20 -bottom-20 w-96 h-96 rounded-full bg-primary-container/10 blur-3xl pointer-events-none"></div>

			<div class="relative z-10 grid grid-cols-1 lg:grid-cols-12 gap-gutter-lg items-center">
				<div class="lg:col-span-7 space-y-space-md">
					<div class="flex items-center gap-space-sm">
						<span class="w-2 h-2 rounded-full bg-primary-container animate-pulse"></span>
						<span class="font-label-mono-sm text-label-mono-sm uppercase text-inverse-primary tracking-widest font-semibold">
							<?php esc_html_e( 'CURATED FORTNIGHTLY INTELLIGENCE', 'core16' ); ?>
						</span>
					</div>

					<h3 class="font-headline-lg text-headline-lg text-inverse-on-surface font-bold leading-tight">
						<?php esc_html_e( 'The Core16 Dispatch: Fortnightly Cognitive Insights & Empirical Psychometric Research', 'core16' ); ?>
					</h3>

					<p class="font-body-lead text-body-lead text-tertiary-fixed-dim max-w-xl">
						<?php esc_html_e( 'Delivered every second Thursday at 06:00 EST. Strict zero-fluff policy: statistical executive case analyses, cognitive team design vectors, and advance whitepapers.', 'core16' ); ?>
					</p>

					<div class="flex flex-wrap items-center gap-space-lg pt-space-xs text-tertiary-fixed-dim font-label-mono-sm text-label-mono-sm">
						<span class="flex items-center gap-1.5">
							<span class="material-symbols-outlined text-[16px] text-inverse-primary">verified_user</span>
							<?php esc_html_e( 'Trusted by 42,000+ C-Suite Executives', 'core16' ); ?>
						</span>
						<span class="flex items-center gap-1.5">
							<span class="material-symbols-outlined text-[16px] text-inverse-primary">lock</span>
							<?php esc_html_e( 'Zero Spam • Institutional Privacy Guaranteed', 'core16' ); ?>
						</span>
					</div>
				</div>

				<!-- Subscription Input Form Module -->
				<div class="lg:col-span-5 bg-surface-container-lowest/10 p-space-lg rounded-xl backdrop-blur-sm border border-white/10">
					<form class="space-y-space-md" id="dispatchForm" onsubmit="event.preventDefault(); showSubscribeConfirmation();">
						<div>
							<label class="block font-label-mono-sm text-label-mono-sm uppercase tracking-wider text-tertiary-fixed-dim mb-1" for="subscriberEmail">
								<?php esc_html_e( 'Corporate Email Address', 'core16' ); ?>
							</label>
							<input class="w-full h-12 px-space-md rounded bg-surface-container-lowest text-on-surface font-body-default text-body-default placeholder:text-outline focus:outline-none focus:ring-2 focus:ring-primary-container transition-all" id="subscriberEmail" placeholder="name@enterprise.com" required="" type="email"/>
						</div>
						<div>
							<label class="block font-label-mono-sm text-label-mono-sm uppercase tracking-wider text-tertiary-fixed-dim mb-1" for="executiveRole">
								<?php esc_html_e( 'Primary Domain of Practice', 'core16' ); ?>
							</label>
							<select class="w-full h-12 px-space-md rounded bg-surface-container-lowest text-on-surface font-body-default text-body-default focus:outline-none focus:ring-2 focus:ring-primary-container transition-all" id="executiveRole">
								<option value="csuite"><?php esc_html_e( 'Board / C-Suite Executive', 'core16' ); ?></option>
								<option value="chro"><?php esc_html_e( 'Chief Human Resources Officer / CPO', 'core16' ); ?></option>
								<option value="pe_partner"><?php esc_html_e( 'Private Equity / Operating Partner', 'core16' ); ?></option>
								<option value="consultant"><?php esc_html_e( 'Organizational Psychologist / Advisor', 'core16' ); ?></option>
								<option value="researcher"><?php esc_html_e( 'Academic Psychometrician', 'core16' ); ?></option>
							</select>
						</div>
						<button class="w-full h-12 px-space-lg rounded bg-primary-container hover:bg-inverse-primary text-on-primary-container font-body-medium text-body-medium font-semibold transition-all flex items-center justify-center gap-space-xs shadow-sm cursor-pointer" id="dispatchSubmitBtn" type="submit">
							<span><?php esc_html_e( 'Subscribe to Dispatch', 'core16' ); ?></span>
							<span class="material-symbols-outlined text-[18px]">send</span>
						</button>
						<div class="hidden p-space-sm bg-primary/20 border border-inverse-primary/30 rounded text-center" id="confirmationNotice">
							<span class="font-label-mono text-label-mono text-inverse-primary font-medium">
								<?php esc_html_e( '✓ Dispatch frequency established. First issue incoming.', 'core16' ); ?>
							</span>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- CLIENT-SIDE FILTERING & INTERACTIVITY SCRIPT -->
<script>
	document.addEventListener('DOMContentLoaded', function() {
		const filterPills = document.querySelectorAll('#categoryFilterContainer .filter-pill');
		const articleCards = document.querySelectorAll('#articlesGrid .article-item');

		filterPills.forEach(pill => {
			pill.addEventListener('click', () => {
				filterPills.forEach(p => {
					p.classList.remove('bg-inverse-surface', 'text-inverse-on-surface', 'font-semibold', 'active');
					p.classList.add('bg-surface-container', 'text-on-surface', 'font-medium');
				});
				pill.classList.remove('bg-surface-container', 'text-on-surface', 'font-medium');
				pill.classList.add('bg-inverse-surface', 'text-inverse-on-surface', 'font-semibold', 'active');

				const targetCategory = pill.getAttribute('data-category');

				articleCards.forEach(card => {
					const cardCategory = card.getAttribute('data-category');
					if (targetCategory === 'all' || cardCategory === targetCategory) {
						card.style.display = 'flex';
						setTimeout(() => {
							card.style.opacity = '1';
							card.style.transform = 'translateY(0)';
						}, 50);
					} else {
						card.style.opacity = '0';
						card.style.transform = 'translateY(8px)';
						setTimeout(() => {
							card.style.display = 'none';
						}, 200);
					}
				});
			});
		});
	});

	function showSubscribeConfirmation() {
		const emailInput = document.getElementById('subscriberEmail');
		const submitBtn = document.getElementById('dispatchSubmitBtn');
		const confirmNotice = document.getElementById('confirmationNotice');

		if (emailInput && emailInput.value) {
			submitBtn.classList.add('opacity-50', 'pointer-events-none');
			submitBtn.innerHTML = 'Establishing Protocol...';
			
			setTimeout(() => {
				submitBtn.classList.add('hidden');
				confirmNotice.classList.remove('hidden');
				emailInput.disabled = true;
			}, 700);
		}
	}
</script>
