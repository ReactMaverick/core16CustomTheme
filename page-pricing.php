<?php
/**
 * Template Name: Pricing
 * Description: The static template for displaying Core16 pricing plans, features, and tiers
 *
 * @package Core16
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<div class="flex flex-col w-full bg-[#FAFAF7]">
	<?php
	// SECTION 1 & 2: PRICING HERO & 3 PLAN CARDS (STATIC CONTENT)
	get_template_part( 'template-parts/sections/pricing/hero-toggle' );

	// SECTION 3 & 4: DETAILED FEATURE MATRIX & GUARANTEE BANNER (STATIC CONTENT)
	get_template_part( 'template-parts/sections/pricing/feature-matrix' );
	?>
</div>

<?php
get_footer();
