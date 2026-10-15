<?php
/**
 * Template Name: About
 * Description: The template for About Core16 institutional heritage and psychometric foundations
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
	// SECTION 1 & 2: MANIFESTO HERO, ORIGIN NARRATIVE & POPULAR TYPOLOGY COMPARISON
	get_template_part( 'template-parts/sections/about/manifesto-hero' );

	// SECTION 3, 4 & 5: THREE CORE PILLARS, SCIENTIFIC ADVISORY BOARD & ETHICAL CHARTER
	get_template_part( 'template-parts/sections/about/heritage-timeline' );
	?>
</div>

<?php
get_footer();
