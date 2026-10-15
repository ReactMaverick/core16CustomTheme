<?php
/**
 * The Four Cognitive Domains Section (Section 3)
 *
 * @package Core16
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$domains = array(
	array(
		'domain_id'         => __( 'Domain 01 // Executive Logic', 'core16' ),
		'title'             => __( 'Strategic & Analytical', 'core16' ),
		'accent_color'      => '#087F8C',
		'description'       => __( 'Characterized by systematic decomposition of complex systemic failure modes, rigorous scenario modeling, and objective capital allocation priorities.', 'core16' ),
		'profiles'          => array( 'INTJ', 'INTP', 'ENTJ', 'ENTP' ),
		'metric_label'      => __( 'Decision Speed Index', 'core16' ),
		'metric_value'      => __( '94/100 (Optimal)', 'core16' ),
		'metric_percentage' => 94,
	),
	array(
		'domain_id'         => __( 'Domain 02 // Cultural Dynamics', 'core16' ),
		'title'             => __( 'Human & Intuitive', 'core16' ),
		'accent_color'      => '#6842B8',
		'description'       => __( 'Exemplifies institutional resonance, cultural narrative governance, empathic signal processing, and team psychological safety calibration.', 'core16' ),
		'profiles'          => array( 'INFJ', 'INFP', 'ENFJ', 'ENFP' ),
		'metric_label'      => __( 'Relational Resonance', 'core16' ),
		'metric_value'      => __( '91/100 (Optimal)', 'core16' ),
		'metric_percentage' => 91,
	),
	array(
		'domain_id'         => __( 'Domain 03 // Operational Discipline', 'core16' ),
		'title'             => __( 'Grounded & Structured', 'core16' ),
		'accent_color'      => '#188A62',
		'description'       => __( 'Anchors execution within deterministic procedural frameworks, regulatory fidelity, quality-assurance loops, and linear milestone rigor.', 'core16' ),
		'profiles'          => array( 'ISTJ', 'ISFJ', 'ESTJ', 'ESFJ' ),
		'metric_label'      => __( 'Operational Fidelity', 'core16' ),
		'metric_value'      => __( '96/100 (Optimal)', 'core16' ),
		'metric_percentage' => 96,
	),
	array(
		'domain_id'         => __( 'Domain 04 // Dynamic Agility', 'core16' ),
		'title'             => __( 'Adaptive & Practical', 'core16' ),
		'accent_color'      => '#B7871B',
		'description'       => __( 'Balances immediate crisis mitigation with agile response vectors, pragmatic problem reframing, and tactile resource deployment under high volatility.', 'core16' ),
		'profiles'          => array( 'ISTP', 'ISFP', 'ESTP', 'ESFP' ),
		'metric_label'      => __( 'Agile Stress Adaptation', 'core16' ),
		'metric_value'      => __( '88/100 (Optimal)', 'core16' ),
		'metric_percentage' => 88,
	),
);
?>
<section id="archetypes" class="w-full bg-warm-white py-space-xl lg:py-margin-lg px-margin-sm lg:px-margin-lg border-b border-rule-grey">
	<div class="max-w-[1440px] mx-auto">
		
		<div class="max-w-3xl mb-space-xl">
			<span class="font-mono text-xs uppercase tracking-wider text-core-teal font-semibold block mb-1">
				<?php esc_html_e( 'The Quad-Domain Architecture', 'core16' ); ?>
			</span>
			<h2 class="font-headline font-bold text-2xl lg:text-3xl text-midnight">
				<?php esc_html_e( 'Sixteen Calibrated Profiles. Zero Archetypal Stereotypes.', 'core16' ); ?>
			</h2>
			<p class="font-body text-sm lg:text-base text-slate-subtle mt-2">
				<?php esc_html_e( 'Unlike traditional static tests, Core16 maps cognitive bandwidth into dynamic quadrants, clarifying operational vector under executive load.', 'core16' ); ?>
			</p>
		</div>

		<div class="grid grid-cols-1 md:grid-cols-2 gap-gutter-lg">
			<?php
			foreach ( $domains as $domain ) {
				get_template_part( 'template-parts/cards/card-domain', null, $domain );
			}
			?>
		</div>

	</div>
</section>
