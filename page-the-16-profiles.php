<?php
/**
 * Template Name: The 16 Profiles
 * Description: The template for displaying all 16 Core16 archetypes grouped by cognitive domain
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
	// SECTION 1: DIRECTORY HEADER & DOMAIN FILTERS
	get_template_part( 'template-parts/sections/the-16-profiles/directory-header' );

	// SECTION 2: 16 PROFILE CARDS GRID (GROUPED BY DOMAIN)
	get_template_part( 'template-parts/sections/the-16-profiles/profiles-grid' );

	// SECTION 3 & 4: CROSS-PROFILE COMPARISON MATRIX & CTA GATE
	get_template_part( 'template-parts/sections/the-16-profiles/comparison-matrix' );
	?>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
	const filterBtns = document.querySelectorAll('.profile-filter-btn');
	const groups = document.querySelectorAll('.territory-group');

	filterBtns.forEach(btn => {
		btn.addEventListener('click', function() {
			const filter = this.getAttribute('data-filter');
			
			filterBtns.forEach(b => {
				b.classList.remove('bg-midnight', 'text-white', 'font-semibold', 'shadow-sm');
				b.classList.add('bg-mist', 'text-slate-subtle');
			});
			this.classList.add('bg-midnight', 'text-white', 'font-semibold', 'shadow-sm');
			this.classList.remove('bg-mist', 'text-slate-subtle');

			groups.forEach(group => {
				if (filter === 'all' || group.getAttribute('data-territory') === filter) {
					group.style.display = 'block';
				} else {
					group.style.display = 'none';
				}
			});
		});
	});
});
</script>

<?php
get_footer();
