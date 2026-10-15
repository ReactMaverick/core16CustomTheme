<?php
/**
 * Individuals Page - Bottom Conversion Strip & FAQ Accordion Module
 * Exact match with Stitch "For Individuals" Landing Page (Screen c97dfe44713248cdbdba807a9a4770ab)
 *
 * @package Core16
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$cta_badge = get_field( 'ind_cta_badge' ) ?: __( 'INDIVIDUAL LICENSING // INSTANT INITIATION', 'core16' );
$cta_title = get_field( 'ind_cta_title' ) ?: __( 'Begin Your 12-Minute Individual Diagnostic.', 'core16' );
$cta_desc  = get_field( 'ind_cta_desc' ) ?: __( 'Acquire the definitive manual to your cognitive mechanics. Immediate dashboard generation and PDF monograph download upon questionnaire completion.', 'core16' );

$faq_badge = get_field( 'ind_faq_badge' ) ?: __( 'METHODOLOGY & RIGOR', 'core16' );
$faq_title = get_field( 'ind_faq_title' ) ?: __( 'Frequently Addressed Inquiries', 'core16' );
?>

<!-- Section 7: Bottom Conversion Strip -->
<section class="w-full bg-[#0D182A] text-on-primary py-space-xl lg:py-margin-lg relative overflow-hidden" id="cta-strip">
	<!-- Subtle architectural gold and teal geometric lines -->
	<div class="absolute -right-20 -bottom-20 w-96 h-96 rounded-full bg-primary-container/10 blur-3xl pointer-events-none"></div>
	<div class="absolute -left-20 -top-20 w-96 h-96 rounded-full bg-secondary-container/10 blur-3xl pointer-events-none"></div>

	<div class="max-w-[1440px] mx-auto px-margin-sm lg:px-margin-lg relative z-10">
		<div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter-lg items-center">
			<!-- Conversion Text (8 cols) -->
			<div class="lg:col-span-8 space-y-space-md">
				<div class="flex items-center gap-space-sm">
					<span class="inline-block w-2.5 h-2.5 rounded-full bg-primary-container"></span>
					<span class="font-label-mono-sm text-label-mono-sm text-primary-fixed uppercase tracking-widest font-bold">
						<?php echo esc_html( $cta_badge ); ?>
					</span>
				</div>
				<h2 class="font-display-hero text-display-hero text-surface-container-lowest font-bold tracking-tight max-w-2xl leading-[1.08]">
					<?php echo esc_html( $cta_title ); ?>
				</h2>
				<p class="font-body-lead text-body-lead text-surface-container-highest max-w-xl">
					<?php echo esc_html( $cta_desc ); ?>
				</p>
				<div class="flex flex-wrap items-center gap-space-lg text-surface-container-high font-label-mono-sm text-label-mono-sm pt-space-xs">
					<div class="flex items-center gap-1.5">
						<span class="material-symbols-outlined text-primary-fixed text-[18px]">lock</span>
						<span><?php esc_html_e( '256-Bit SSL Encrypted & SOC2 Type II Verified', 'core16' ); ?></span>
					</div>
					<div class="flex items-center gap-1.5">
						<span class="material-symbols-outlined text-primary-fixed text-[18px]">verified_user</span>
						<span><?php esc_html_e( '100% GDPR Private • Never Resold to Data Brokers', 'core16' ); ?></span>
					</div>
					<div class="flex items-center gap-1.5">
						<span class="material-symbols-outlined text-primary-fixed text-[18px]">bolt</span>
						<span><?php esc_html_e( 'Immediate Dynamic Synthesis', 'core16' ); ?></span>
					</div>
				</div>
			</div>

			<!-- Conversion Action Card (4 cols) -->
			<div class="lg:col-span-4 bg-surface-container-lowest text-on-surface rounded-xl p-space-lg shadow-xl border border-surface-container-high">
				<div class="space-y-space-md">
					<div class="flex items-center justify-between pb-space-sm border-b border-surface-container-high">
						<span class="font-label-mono-sm text-label-mono-sm text-outline uppercase font-bold"><?php esc_html_e( 'Standard Individual Gate', 'core16' ); ?></span>
						<span class="font-label-mono text-label-mono text-primary font-bold"><?php esc_html_e( 'TIER 1 ACCESS', 'core16' ); ?></span>
					</div>
					<div>
						<div class="flex items-baseline gap-1">
							<span class="font-headline-xl text-headline-xl font-bold text-on-surface">$49</span>
							<span class="font-label-mono text-label-mono text-on-surface-variant uppercase"><?php esc_html_e( 'One-time payment', 'core16' ); ?></span>
						</div>
						<p class="font-caption text-caption text-on-surface-variant mt-1">
							<?php esc_html_e( 'Full 30-Page Executive PDF • Audio Debrief • Lifetime Assessment Version Updates', 'core16' ); ?>
						</p>
					</div>
					<ul class="space-y-space-xs font-body-sm text-body-sm text-on-surface-variant border-t border-surface-container-high pt-space-sm">
						<li class="flex items-center gap-2">
							<span class="material-symbols-outlined text-primary text-[18px]">check</span>
							<span><?php esc_html_e( 'Complete 4-vector continuous FECA score', 'core16' ); ?></span>
						</li>
						<li class="flex items-center gap-2">
							<span class="material-symbols-outlined text-primary text-[18px]">check</span>
							<span><?php esc_html_e( 'Personalized 90-day execution protocol', 'core16' ); ?></span>
						</li>
						<li class="flex items-center gap-2">
							<span class="material-symbols-outlined text-primary text-[18px]">check</span>
							<span><?php esc_html_e( 'Cross-profile conflict & communication scripts', 'core16' ); ?></span>
						</li>
						<li class="flex items-center gap-2">
							<span class="material-symbols-outlined text-primary text-[18px]">check</span>
							<span><?php esc_html_e( 'Exportable executive badge & credentials', 'core16' ); ?></span>
						</li>
					</ul>
					<a class="w-full inline-flex items-center justify-center h-12 rounded bg-primary-container text-surface-container-lowest font-body-medium text-body-medium font-bold hover:bg-primary transition-all duration-200 text-center" href="#assessment-flow">
						<span><?php esc_html_e( 'Start Diagnostic Now', 'core16' ); ?></span>
						<span class="material-symbols-outlined ml-2 text-[20px]">arrow_forward</span>
					</a>
					<div class="text-center font-caption text-caption text-outline">
						<?php esc_html_e( '30-day sovereign satisfaction guarantee. No subscriptions.', 'core16' ); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Section 8: FAQ Accordion Module for Professional Inquiries -->
<section class="w-full bg-surface py-space-xl border-b border-surface-container-high" id="faq">
	<div class="max-w-[1440px] mx-auto px-margin-sm lg:px-margin-lg">
		<div class="max-w-3xl mx-auto">
			<div class="text-center mb-space-lg">
				<span class="font-label-mono-sm text-label-mono-sm text-primary uppercase tracking-widest block mb-space-xs">
					<?php echo esc_html( $faq_badge ); ?>
				</span>
				<h2 class="font-headline-lg text-headline-lg text-on-surface font-bold tracking-tight">
					<?php echo esc_html( $faq_title ); ?>
				</h2>
			</div>

			<div class="space-y-space-sm" id="faq-container">
				<details class="group bg-surface-container-lowest rounded-lg border border-surface-container-high p-space-md cursor-pointer transition-all">
					<summary class="flex items-center justify-between font-headline-sm text-headline-sm text-on-surface font-semibold list-none">
						<span><?php esc_html_e( 'How long does the individual diagnostic require?', 'core16' ); ?></span>
						<span class="material-symbols-outlined transition-transform duration-200 group-open:rotate-180 text-outline">expand_more</span>
					</summary>
					<p class="font-body-default text-body-default text-on-surface-variant mt-space-sm pt-space-xs border-t border-surface-container-high">
						<?php esc_html_e( 'The assessment consists of 48 forced-tradeoff items designed to take approximately 12 to 15 minutes of uninterrupted focus. We recommend taking it in a calm, non-distracted environment to maintain maximum signal-to-noise ratio.', 'core16' ); ?>
					</p>
				</details>

				<details class="group bg-surface-container-lowest rounded-lg border border-surface-container-high p-space-md cursor-pointer transition-all">
					<summary class="flex items-center justify-between font-headline-sm text-headline-sm text-on-surface font-semibold list-none">
						<span><?php esc_html_e( 'Can my employer access my individual test results?', 'core16' ); ?></span>
						<span class="material-symbols-outlined transition-transform duration-200 group-open:rotate-180 text-outline">expand_more</span>
					</summary>
					<p class="font-body-default text-body-default text-on-surface-variant mt-space-sm pt-space-xs border-t border-surface-container-high">
						<?php esc_html_e( 'No. Individual assessments taken through this pathway are strictly confidential and owned solely by you. They are never transmitted to corporate enterprise dashboards unless you explicitly link your profile via an enterprise invitation code.', 'core16' ); ?>
					</p>
				</details>

				<details class="group bg-surface-container-lowest rounded-lg border border-surface-container-high p-space-md cursor-pointer transition-all">
					<summary class="flex items-center justify-between font-headline-sm text-headline-sm text-on-surface font-semibold list-none">
						<span><?php esc_html_e( 'How does Core16 differ from the Big Five (OCEAN)?', 'core16' ); ?></span>
						<span class="material-symbols-outlined transition-transform duration-200 group-open:rotate-180 text-outline">expand_more</span>
					</summary>
					<p class="font-body-default text-body-default text-on-surface-variant mt-space-sm pt-space-xs border-t border-surface-container-high">
						<?php esc_html_e( 'While the Big Five is descriptive of general personality traits, Core16 is an executive instrument specifically engineered to map tactical decision-making, pressure thresholds, and relational friction. Our FECA engine incorporates psychometric continuous dimensions while giving executives concrete operational directives.', 'core16' ); ?>
					</p>
				</details>

				<details class="group bg-surface-container-lowest rounded-lg border border-surface-container-high p-space-md cursor-pointer transition-all">
					<summary class="flex items-center justify-between font-headline-sm text-headline-sm text-on-surface font-semibold list-none">
						<span><?php esc_html_e( 'What format is the 30-page synthesis delivered in?', 'core16' ); ?></span>
						<span class="material-symbols-outlined transition-transform duration-200 group-open:rotate-180 text-outline">expand_more</span>
					</summary>
					<p class="font-body-default text-body-default text-on-surface-variant mt-space-sm pt-space-xs border-t border-surface-container-high">
						<?php esc_html_e( 'You receive an immediate interactive web dossier as well as a beautifully formatted, publication-grade 30-page PDF ready for printing or viewing on tablets. Additionally, you will receive an invitation to access the streaming audio debrief narrated by a master psychometrician.', 'core16' ); ?>
					</p>
				</details>
			</div>
		</div>
	</div>
</section>

<!-- Interactive Micro-Interactions Script -->
<script>
	document.addEventListener('DOMContentLoaded', function() {
		// Toggle radio sample feedback state visually
		const radioOptions = document.querySelectorAll('#sample-question-group input[type="radio"]');
		radioOptions.forEach(function(radio) {
			radio.addEventListener('change', function() {
				radioOptions.forEach(function(r) {
					const container = r.closest('label');
					if (r.checked) {
						container.classList.add('border-primary', 'bg-surface-container');
						container.classList.remove('border-surface-container-high', 'bg-surface-container-lowest');
					} else {
						container.classList.remove('border-primary', 'bg-surface-container');
						container.classList.add('border-surface-container-high', 'bg-surface-container-lowest');
					}
				});
			});
		});
	});
</script>
