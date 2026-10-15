<?php
/**
 * Template Name: How Core16 Works
 * Description: The template for displaying How Core16 Works psychometric system architecture
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
	// SECTION 1: EDITORIAL HERO & PIPELINE
	get_template_part( 'template-parts/sections/how-core16-works/hero-pipeline' );

	// SECTION 2: PHASE 1 — THE ASSESSMENT EXPERIENCE (TERMINAL UI)
	get_template_part( 'template-parts/sections/how-core16-works/phase1-terminal' );

	// SECTION 3: PHASE 2 — THE DECOUPLED MEASUREMENT ENGINE (ELENA VS MARCUS)
	get_template_part( 'template-parts/sections/how-core16-works/phase2-decoupling' );

	// SECTION 4: PHASE 3 — THE APPLIED SYNTHESIS (3 DELIVERABLES)
	get_template_part( 'template-parts/sections/how-core16-works/phase3-deliverables' );

	// SECTION 5 & 6: CLINICAL VALIDATION & CONVERSION ACTION ANCHOR
	get_template_part( 'template-parts/sections/how-core16-works/regulatory-strip' );
	?>
</div>

<?php
get_footer();
