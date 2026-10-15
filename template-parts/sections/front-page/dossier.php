<?php
/**
 * Executive Deliverable Section (Section 5)
 *
 * @package Core16
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$dossier_img = core16_get_image_url(
	'dossier-spread.png',
	'https://lh3.googleusercontent.com/aida/AEtjO1U4qTm1yaV-LZvdfPR4F1Xr1pZxyLJx9ZvJTssvcN2St0IFb3Ga6yEn4WnZl-KXLirSGfRyUAK9KYodGtxQKAp7y9zWXtqMWyAn6j041-2-57iy7qZ6IlVtO-vH_iOMGk2_Uj1xM0nKNyeVybcxX-7x9wXhY56mpv1uhEhAlRSSLGq8c1b-1Z5SHPAtK0dtKrif--j2_n13n5CG8ZCr-bBtEnE0M21gKLj95Oq-dYGh1VdpY08PAftbH1o'
);

$features = array(
	array(
		'icon'        => 'psychology',
		'title'       => __( 'Cognitive Blindspots & Derailers', 'core16' ),
		'description' => __( 'Detailed analysis of leadership failure modes under prolonged corporate crisis, resource scarcity, and high-stakes ambiguity.', 'core16' ),
	),
	array(
		'icon'        => 'groups',
		'title'       => __( 'Board & Senior Team Dyads', 'core16' ),
		'description' => __( 'Predictive tension modeling showing friction points when interacting with counterpart profiles on executive committees.', 'core16' ),
	),
	array(
		'icon'        => 'target',
		'title'       => __( '90-Day Tactical Coaching Protocols', 'core16' ),
		'description' => __( 'Concrete developmental micro-habits calibrated specifically to your highest-variance FECA scoring vectors.', 'core16' ),
	),
);
?>
<section id="dossier" class="w-full bg-warm-white py-space-xl lg:py-margin-lg px-margin-sm lg:px-margin-lg border-b border-rule-grey">
	<div class="max-w-[1440px] mx-auto">
		<div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter-lg items-center">
			
			<!-- Left: Editorial Print Dossier Image -->
			<div class="lg:col-span-6 relative">
				<div class="relative rounded-xl overflow-hidden bg-mist border border-rule-grey shadow-sm group">
					<img
						alt="<?php esc_attr_e( 'An executive-tier printed psychometric evaluation dossier resting open with tables and radar diagram', 'core16' ); ?>"
						class="w-full h-[520px] object-cover transition-transform duration-500 group-hover:scale-102"
						src="<?php echo esc_url( $dossier_img ); ?>"
					/>
					<div class="absolute bottom-3 right-3 bg-midnight/90 backdrop-blur-md px-3.5 py-1.5 rounded-lg text-warm-white font-mono text-[11px] border border-slate-700">
						<?php esc_html_e( '38-Page Granular Diagnostic // Archival Edition', 'core16' ); ?>
					</div>
				</div>
			</div>

			<!-- Right: Content Breakdown -->
			<div class="lg:col-span-6 space-y-space-md">
				<div>
					<span class="font-mono text-xs uppercase tracking-wider text-core-teal font-semibold block mb-1">
						<?php esc_html_e( 'The Executive Deliverable', 'core16' ); ?>
					</span>
					<h2 class="font-headline font-bold text-2xl lg:text-3xl text-midnight tracking-tight">
						<?php esc_html_e( 'An Uncompromising 38-Page Tactical Brief.', 'core16' ); ?>
					</h2>
					<p class="font-body text-sm lg:text-base text-slate-subtle mt-2 leading-relaxed">
						<?php esc_html_e( 'Each Core16 dossier is custom-compiled using proprietary item-response theory algorithms, offering concrete behavioral playbooks for executive decision-making.', 'core16' ); ?>
					</p>
				</div>

				<div class="space-y-3 pt-1">
					<?php
					foreach ( $features as $feat ) {
						get_template_part( 'template-parts/cards/card-dossier-feature', null, $feat );
					}
					?>
				</div>

				<div class="pt-2">
					<?php
					core16_button(
						array(
							'text'      => __( 'Review Executive Sample Pages', 'core16' ),
							'url'       => '#samples',
							'variant'   => 'midnight',
							'size'      => 'md',
							'icon'      => 'description',
							'data_path' => 'enterprise-and-coaching',
						)
					);
					?>
				</div>
			</div>

		</div>
	</div>
</section>
