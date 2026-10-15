<?php
/**
 * Scientific Credibility Metrics Section (Section 2)
 *
 * @package Core16
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$metrics = array(
	array(
		'title'       => __( 'Construct Reliability', 'core16' ),
		'value'       => '99.2%',
		'unit'        => __( "Cronbach's Alpha", 'core16' ),
		'icon'        => 'verified',
		'description' => __( 'Demonstrates exceptional internal consistency across all 16 dimension facets, exceeding standard psychometric thresholds.', 'core16' ),
		'footnote'    => __( 'P-Value < 0.0001 (N=184.2K)', 'core16' ),
	),
	array(
		'title'       => __( 'Taxonomy', 'core16' ),
		'value'       => '16',
		'unit'        => __( 'Archetype Profiles', 'core16' ),
		'icon'        => 'grid_view',
		'description' => __( 'Structured into four overarching cognitive domains providing granular behavioral role synthesis across organizations.', 'core16' ),
		'footnote'    => __( '4 Orthogonal Domains', 'core16' ),
	),
	array(
		'title'       => __( 'Engine Model', 'core16' ),
		'value'       => 'FECA',
		'unit'        => __( 'Continuous Scoring', 'core16' ),
		'icon'        => 'analytics',
		'description' => __( 'Eliminates binary trait boxing via a dual-vector axis reporting individual variance percentiles and standard errors.', 'core16' ),
		'footnote'    => __( 'Zero-Binary Continuum', 'core16' ),
	),
	array(
		'title'       => __( 'Fairness Parity', 'core16' ),
		'value'       => '0.02%',
		'unit'        => __( 'Variance Drift Limit', 'core16' ),
		'icon'        => 'balance',
		'description' => __( 'Statistically audited for gender, demographic, and cross-cultural parity without differential item functioning (EEOC & IRT Neutrality).', 'core16' ),
		'footnote'    => __( 'Equitable Item Response (IRT)', 'core16' ),
	),
);
?>
<section class="w-full bg-warm-white py-space-xl px-margin-sm lg:px-margin-lg border-b border-rule-grey">
	<div class="max-w-[1440px] mx-auto">
		
		<div class="flex flex-col md:flex-row md:items-end justify-between mb-space-lg gap-4">
			<div>
				<span class="font-mono text-xs uppercase tracking-wider text-core-teal font-semibold block mb-1">
					<?php esc_html_e( 'Empirical Benchmark Index', 'core16' ); ?>
				</span>
				<h2 class="font-headline font-bold text-2xl lg:text-3xl text-midnight">
					<?php esc_html_e( 'Engineered for Mathematical Certainty', 'core16' ); ?>
				</h2>
			</div>
			<p class="font-body text-sm text-slate-subtle max-w-md">
				<?php esc_html_e( 'Reconstructed psychometric validity indices tested continuously against global senior leadership cohorts across 42 markets.', 'core16' ); ?>
			</p>
		</div>

		<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-gutter">
			<?php
			foreach ( $metrics as $metric ) {
				get_template_part( 'template-parts/cards/card-metric', null, $metric );
			}
			?>
		</div>

	</div>
</section>
