<?php
/**
 * Template Name: Individuals
 * Description: The template for Core16 for Individuals personal talent architecture
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
	// 1. TOP AMBIENT BANNER, HERO & 4-METRIC STRIP
	get_template_part( 'template-parts/sections/individuals/hero-individual' );

	// 2. TRI-AXIS DEVELOPMENTAL MATRIX & 30-PAGE REPORT BREAKDOWN
	get_template_part( 'template-parts/sections/individuals/growth-pillars' );

	// 3. SAMPLE DIAGNOSTIC INTERACTION TEASER
	get_template_part( 'template-parts/sections/individuals/sample-assessment' );

	// 4. INTERACTIVE 48-ITEM ASSESSMENT STEPPER & REAL-TIME RESULT ENGINE (#assessment-flow)
	get_template_part( 'template-parts/sections/individuals/assessment-engine' );

	// 5. VERIFIED INDIVIDUAL PERSPECTIVES & COMPARATIVE STANDARDS TABLE
	get_template_part( 'template-parts/sections/individuals/stories-comparison' );

	// 6. MIDNIGHT CONVERSION STRIP ($49 ACCESS) & FAQ ACCORDION MODULE
	get_template_part( 'template-parts/sections/individuals/conversion-faq' );
	?>
</div>

<?php
get_footer();
