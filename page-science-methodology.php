<?php
/**
 * Template Name: Science & Methodology
 * Description: The template for displaying Core16 psychometric science, validation, and ISO 10667 architecture (Stitch Fidelity)
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
	// SECTION 1 & 2: AUTHORITY HERO, TELEMETRY & PSYCHOMETRIC BENCHMARKS STRIP
	get_template_part( 'template-parts/sections/science-methodology/hero-methodology' );

	// SECTION 3: TYPE VS TRAIT CONTINUUM (THE FALLACY OF BINARY TYPOLOGY)
	get_template_part( 'template-parts/sections/science-methodology/continuum-comparison' );

	// SECTION 4: CONFIRMATORY FACTOR ANALYSIS & FECA STRUCTURAL LOADING MATRIX
	get_template_part( 'template-parts/sections/science-methodology/factor-analysis' );

	// SECTION 5: BIAS ELIMINATION, CULTURAL NORMALIZATION & ADVERSE IMPACT MITIGATION
	get_template_part( 'template-parts/sections/science-methodology/equity-validation' );

	// SECTION 6: ACADEMIC & INSTITUTIONAL WHITEPAPER REPOSITORY
	get_template_part( 'template-parts/sections/science-methodology/whitepaper-repository' );

	// SECTION 7: ENTERPRISE VERIFICATION & INSTITUTIONAL BRIEFING CTA
	get_template_part( 'template-parts/sections/science-methodology/briefing-cta' );
	?>
</div>

<?php
get_footer();
