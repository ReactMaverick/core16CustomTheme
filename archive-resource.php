<?php
/**
 * Archive Template for Resources (The Core16 Review)
 *
 * @package Core16
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<div class="flex flex-col w-full bg-surface">
	<?php
	// SECTION 1: MASTHEAD & LEAD ESSAY
	get_template_part( 'template-parts/sections/resources/masthead-hero' );

	// SECTION 2: PUBLICATIONS & WHITE PAPERS GRID
	get_template_part( 'template-parts/sections/resources/publication-grid' );
	?>
</div>

<?php
get_footer();
