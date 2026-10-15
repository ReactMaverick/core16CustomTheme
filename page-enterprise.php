<?php
/**
 * Template Name: Enterprise
 * Description: The template for Core16 for Enterprise talent intelligence & organizational design (Stitch Fidelity)
 *
 * @package Core16
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<div class="flex flex-col w-full bg-surface min-h-[calc(100vh-80px)]">
	<?php
	// SECTION 1: EXECUTIVE HERO (Anchored in Midnight)
	get_template_part( 'template-parts/sections/enterprise/hero-enterprise' );

	// SECTION 2: ORGANIZATIONAL USE CASES (Interactive 4-Tab Matrix)
	get_template_part( 'template-parts/sections/enterprise/solutions-matrix' );

	// SECTION 3: TEAM CHEMISTRY HEATMAP SAAS MOCKUP (Enterprise Analytics Suite)
	get_template_part( 'template-parts/sections/enterprise/analytics-heatmap' );

	// SECTION 4: SECURITY & ENTERPRISE COMPLIANCE (Midnight Contrast Anchor)
	get_template_part( 'template-parts/sections/enterprise/compliance-security' );

	// SECTION 5: ENTERPRISE TIERING & VOLUME INQUIRY FORM
	get_template_part( 'template-parts/sections/enterprise/inquiry-form' );
	?>
</div>

<?php
get_footer();
