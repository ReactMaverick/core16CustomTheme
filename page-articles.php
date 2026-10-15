<?php
/**
 * Template Name: Articles / Resources Hub
 * Description: The Core16 Review Articles, Research Papers, and Monographs
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
	// SECTION 1: MASTHEAD & LEAD ESSAY (DYNAMIC)
	get_template_part( 'template-parts/sections/resources/masthead-hero' );

	// SECTION 2: PUBLICATIONS & WHITE PAPERS GRID (DYNAMIC)
	get_template_part( 'template-parts/sections/resources/publication-grid' );
	?>
</div>

<?php
get_footer();
