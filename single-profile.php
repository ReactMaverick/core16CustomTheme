<?php
/**
 * The template for displaying a single Profile (Universal Executive Dossier)
 *
 * @package Core16
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'flex flex-col w-full bg-[#FAFAF7]' ); ?>>
	<?php
	// SECTION 1: CLASSIFICATION META BAR & HERO IDENTITY (MIDNIGHT CONTAINER)
	get_template_part( 'template-parts/sections/profile-dossier/dossier-meta-bar' );

	// SECTION 2: SUBNAV & COGNITIVE ENGINE + DYADS + WATCHPOINTS + 90-DAY PLAN
	get_template_part( 'template-parts/sections/profile-dossier/cognitive-engine' );
	?>
</article>

<?php
get_footer();
