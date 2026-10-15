<?php
/**
 * The template for displaying the front page / homepage
 *
 * @package Core16
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<div class="flex flex-col w-full">
	<?php
	// SECTION 1: HERO SHOWCASE
	get_template_part( 'template-parts/sections/front-page/hero' );

	// SECTION 2: SCIENTIFIC CREDIBILITY METRICS
	get_template_part( 'template-parts/sections/front-page/metrics' );

	// SECTION 3: THE FOUR COGNITIVE DOMAINS
	get_template_part( 'template-parts/sections/front-page/domains' );

	// SECTION 4: FECA MEASUREMENT ENGINE (MIDNIGHT CONTAINER)
	get_template_part( 'template-parts/sections/front-page/feca-engine' );

	// SECTION 5: EXECUTIVE DELIVERABLE (DOSSIER SPREAD)
	get_template_part( 'template-parts/sections/front-page/dossier' );

	// SECTION 6: ENTERPRISE CASE STUDIES & FINAL INVITATION GATES
	get_template_part( 'template-parts/sections/front-page/enterprise-cta' );
	?>
</div>

<?php
get_footer();
