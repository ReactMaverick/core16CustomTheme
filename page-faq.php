<?php
/**
 * Template Name: FAQ & Support Center
 * Description: Institutional Support, FAQ, Data Sovereignty, and Technical Governance Center
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
	// SECTION 1: INSTITUTIONAL HEADER & FREQUENTLY ANSWERED PROTOCOLS (FAQ)
	get_template_part( 'template-parts/sections/support/search-header' );

	// SECTION 2: DATA SOVEREIGNTY, TERMS OF ENGAGEMENT & ADVISORY DESK
	get_template_part( 'template-parts/sections/support/contact-desk' );
	?>
</div>

<?php
get_footer();
