<?php
/**
 * Enterprise Case Studies & Final Invitation Gates (Section 6)
 *
 * @package Core16
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$testimonials = array(
	array(
		'sector'      => __( 'Global Private Equity', 'core16' ),
		'quote'       => __( 'Core16 replaced antiquated binary profiling across our managing partner evaluations. The FECA indices provided clear statistical justification during executive succession.', 'core16' ),
		'author'      => 'David Vance, Partner',
		'affiliation' => 'Global Asset Management, Zurich',
	),
	array(
		'sector'      => __( 'Enterprise Software', 'core16' ),
		'quote'       => __( 'The granular breakdown between Cognitive Focus and Execution Velocity allowed us to restructure our engineering directorate without losing strategic velocity.', 'core16' ),
		'author'      => 'Elena Rostova, Chief People Officer',
		'affiliation' => 'Autonomous Infrastructure Corp, SF',
	),
	array(
		'sector'      => __( 'Biomedical Venture', 'core16' ),
		'quote'       => __( 'In high-ambiguity clinical environments, understanding individual crisis derailers is non-negotiable. Core16 has become a standard protocol in our board governance.', 'core16' ),
		'author'      => 'Dr. Marcus Thorne, Co-Founder',
		'affiliation' => 'Syntropic Therapeutics, Cambridge',
	),
);
?>
<section id="enterprise" class="w-full bg-warm-white py-space-xl lg:py-margin-lg px-margin-sm lg:px-margin-lg">
	<div class="max-w-[1440px] mx-auto space-y-margin-lg">
		
		<!-- Enterprise Validation Panel -->
		<div>
			<div class="flex flex-col md:flex-row md:items-end justify-between mb-space-lg gap-4">
				<div>
					<span class="font-mono text-xs uppercase tracking-wider text-core-teal font-semibold block mb-1">
						<?php esc_html_e( 'Global Deployments', 'core16' ); ?>
					</span>
					<h2 class="font-headline font-bold text-2xl lg:text-3xl text-midnight">
						<?php esc_html_e( 'Trusted by C-Suite Architects Worldwide', 'core16' ); ?>
					</h2>
				</div>
				<p class="font-body text-sm text-slate-subtle max-w-sm">
					<?php esc_html_e( 'Deployed within Fortune 500 executive succession slates, sovereign wealth advisory councils, and high-growth venture leadership teams.', 'core16' ); ?>
				</p>
			</div>

			<div class="grid grid-cols-1 md:grid-cols-3 gap-gutter">
				<?php
				foreach ( $testimonials as $item ) {
					get_template_part( 'template-parts/cards/card-testimonial', null, $item );
				}
				?>
			</div>
		</div>

		<!-- Pre-Footer Conversion Box (Midnight Container with Concentric Radar Wireframe) -->
		<div id="assessment" class="w-full bg-midnight text-warm-white rounded-2xl p-8 sm:p-10 lg:p-14 border border-slate-800 relative overflow-hidden shadow-xl">
			<div class="relative z-10 max-w-2xl space-y-4">
				
				<div class="inline-flex items-center gap-2 px-3 py-1 rounded bg-white/10 text-core-teal font-mono text-xs uppercase font-medium">
					<span class="w-1.5 h-1.5 rounded-full bg-core-teal animate-pulse"></span>
					<?php esc_html_e( 'Individual & Team Diagnostic Access', 'core16' ); ?>
				</div>

				<h2 class="font-headline font-bold text-3xl sm:text-4xl text-white tracking-tight leading-tight">
					<?php esc_html_e( 'Map Your Cognitive Architecture Today.', 'core16' ); ?>
				</h2>

				<p class="font-body text-sm lg:text-base text-white/70 leading-relaxed">
					<?php esc_html_e( 'Complete the 12-minute normative assessment to unlock your individual FECA matrix, full 38-page leadership dossier, and personalized development protocols.', 'core16' ); ?>
				</p>

				<div class="flex flex-wrap items-center gap-3 pt-2">
					<?php
					core16_button(
						array(
							'text'      => __( 'Begin Core16 Assessment', 'core16' ),
							'url'       => '#assessment-start',
							'variant'   => 'teal',
							'icon'      => 'arrow_forward',
							'data_path' => 'take-core16-assessment',
						)
					);

					core16_button(
						array(
							'text'      => __( 'Request Enterprise Demo', 'core16' ),
							'url'       => '#demo',
							'variant'   => 'dark-outline',
							'data_path' => 'enterprise-and-coaching',
						)
					);
					?>
				</div>

				<div class="pt-2 flex flex-wrap items-center gap-x-4 gap-y-1 font-mono text-[11px] text-white/50">
					<span><?php esc_html_e( 'Confidential & Encrypted', 'core16' ); ?></span>
					<span>•</span>
					<span><?php esc_html_e( 'GDPR & HIPAA Compliant', 'core16' ); ?></span>
					<span>•</span>
					<span><?php esc_html_e( 'Immediate Dossier Generation', 'core16' ); ?></span>
				</div>

			</div>

			<!-- Concentric Radar Wireframe Background -->
			<div class="absolute right-0 top-0 bottom-0 w-2/5 hidden lg:flex items-center justify-center pointer-events-none opacity-20" aria-hidden="true">
				<svg class="w-full h-full text-white" fill="none" stroke="currentColor" viewBox="0 0 400 400">
					<circle cx="200" cy="200" r="160" stroke-dasharray="4 4" stroke-width="1.5"></circle>
					<circle cx="200" cy="200" r="110" stroke-width="1.5"></circle>
					<circle cx="200" cy="200" r="60" stroke-dasharray="2 2" stroke-width="1.5"></circle>
					<line stroke-width="1" x1="200" x2="200" y1="20" y2="380"></line>
					<line stroke-width="1" x1="20" x2="380" y1="200" y2="200"></line>
				</svg>
			</div>

		</div>

	</div>
</section>
