<?php
/**
 * Site Footer Template Part
 *
 * @package Core16
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$logo_url = core16_get_image_url(
	'logo.png',
	'https://lh3.googleusercontent.com/aida-public/AB6AXuBgwj5JTr6FCyh0b411d4uhd06MAZCjQGccaknZVyzvvIGyRkZ9eEfDidYEZR0uZ_Di8_2qRmM62llbAx5R-CZOSfs4YVeD3POs0Oe7uKNOoxp43hWZ201NFzsUb-Nc910chXH8faa1AK1oHceTmrNxHbwhEBKpqPyqMcXkoVahmUIPNPVJF_DGMQtCXkAaHOM2nalnn-r277g-oz8rh-477CYOdZRtHhRsqAcOWtZWQ3hIkd0ardvj7hU8Zzi36zf6Nw'
);
?>
<footer class="w-full bg-[#FAFAF7] border-t border-rule-grey text-midnight">
	<div class="max-w-[1580px] mx-auto px-margin-sm lg:px-margin-lg py-margin-lg">
		<div class="grid grid-cols-1 md:grid-cols-12 gap-gutter-lg pb-margin-lg border-b border-rule-grey">
			
			<!-- Column 1: Brand & Empirical Notice -->
			<div class="md:col-span-4 flex flex-col justify-between pr-gutter">
				<div class="space-y-space-md">
					<div class="flex items-center gap-3">
						<img alt="<?php bloginfo( 'name' ); ?>" class="h-9 w-auto object-contain shrink-0" src="<?php echo esc_url( $logo_url ); ?>"/>
						<div class="flex flex-col">
							<span class="font-headline font-bold text-lg tracking-tight text-midnight leading-none">CORE16</span>
							<span class="font-body text-[9px] tracking-[0.22em] font-semibold text-slate-subtle uppercase leading-tight mt-0.5">Personalities</span>
						</div>
					</div>
					<p class="font-body text-xs text-slate-subtle max-w-sm leading-relaxed">
						<?php esc_html_e( 'Core16 is an independent psychometric assessment system engineered for leadership development and cognitive agility.', 'core16' ); ?>
					</p>
				</div>
				<div class="pt-space-lg">
					<span class="font-mono text-[10px] text-slate-subtle uppercase tracking-wider block mb-1">
						<?php esc_html_e( 'Calibration Norm', 'core16' ); ?>
					</span>
					<span class="font-mono text-xs text-midnight">
						<?php esc_html_e( 'ISO 10667 Compliant • N=184,200 Cohort', 'core16' ); ?>
					</span>
				</div>
			</div>

			<!-- Column 2: Framework & Science -->
			<div class="md:col-span-2 space-y-space-md">
				<h4 class="font-mono text-xs uppercase tracking-wider text-midnight font-bold">
					<?php esc_html_e( 'Framework & Science', 'core16' ); ?>
				</h4>
				<ul class="space-y-2 font-body text-xs text-slate-subtle">
					<li><a class="hover:text-midnight transition-colors" data-path="feca-scoring" href="<?php echo esc_url( home_url( '/how-core16-works/' ) ); ?>"><?php esc_html_e( 'FECA Model', 'core16' ); ?></a></li>
					<li><a class="hover:text-midnight transition-colors" data-path="empirical-validation" href="<?php echo esc_url( home_url( '/science-methodology/' ) ); ?>"><?php esc_html_e( 'Empirical Validation', 'core16' ); ?></a></li>
					<li><a class="hover:text-midnight transition-colors" data-path="normative-samples" href="<?php echo esc_url( home_url( '/science-methodology/#vectors' ) ); ?>"><?php esc_html_e( 'Normative Sample Base', 'core16' ); ?></a></li>
					<li><a class="hover:text-midnight transition-colors" data-path="methodology-whitepaper" href="<?php echo esc_url( home_url( '/resources/' ) ); ?>"><?php esc_html_e( 'Methodology Whitepaper', 'core16' ); ?></a></li>
					<li><a class="hover:text-midnight transition-colors" data-path="reliability-indices" href="<?php echo esc_url( home_url( '/science-methodology/' ) ); ?>"><?php esc_html_e( 'Reliability Indices', 'core16' ); ?></a></li>
				</ul>
			</div>

			<!-- Column 3: Archetypes -->
			<div class="md:col-span-2 space-y-space-md">
				<h4 class="font-mono text-xs uppercase tracking-wider text-midnight font-bold">
					<?php esc_html_e( 'Archetypes', 'core16' ); ?>
				</h4>
				<ul class="space-y-2 font-body text-xs text-slate-subtle">
					<li><a class="hover:text-midnight transition-colors" data-path="the-16-profiles" href="<?php echo esc_url( home_url( '/the-16-profiles/?domain=strategist' ) ); ?>"><?php esc_html_e( 'Strategists (4)', 'core16' ); ?></a></li>
					<li><a class="hover:text-midnight transition-colors" data-path="the-16-profiles" href="<?php echo esc_url( home_url( '/the-16-profiles/?domain=architect' ) ); ?>"><?php esc_html_e( 'Architects (4)', 'core16' ); ?></a></li>
					<li><a class="hover:text-midnight transition-colors" data-path="the-16-profiles" href="<?php echo esc_url( home_url( '/the-16-profiles/?domain=catalyst' ) ); ?>"><?php esc_html_e( 'Catalysts (4)', 'core16' ); ?></a></li>
					<li><a class="hover:text-midnight transition-colors" data-path="the-16-profiles" href="<?php echo esc_url( home_url( '/the-16-profiles/?domain=synthesizer' ) ); ?>"><?php esc_html_e( 'Synthesizers (4)', 'core16' ); ?></a></li>
					<li><a class="hover:text-midnight transition-colors" data-path="the-16-profiles" href="<?php echo esc_url( home_url( '/the-16-profiles/#matrix' ) ); ?>"><?php esc_html_e( 'Cross-Trait Matrix', 'core16' ); ?></a></li>
				</ul>
			</div>

			<!-- Column 4: Enterprise Solutions -->
			<div class="md:col-span-2 space-y-space-md">
				<h4 class="font-mono text-xs uppercase tracking-wider text-midnight font-bold">
					<?php esc_html_e( 'Enterprise Solutions', 'core16' ); ?>
				</h4>
				<ul class="space-y-2 font-body text-xs text-slate-subtle">
					<li><a class="hover:text-midnight transition-colors" data-path="enterprise-and-coaching" href="<?php echo esc_url( home_url( '/enterprise/' ) ); ?>"><?php esc_html_e( 'Executive Succession', 'core16' ); ?></a></li>
					<li><a class="hover:text-midnight transition-colors" data-path="enterprise-and-coaching" href="<?php echo esc_url( home_url( '/enterprise/#inquiry' ) ); ?>"><?php esc_html_e( 'Senior Team Chemistry', 'core16' ); ?></a></li>
					<li><a class="hover:text-midnight transition-colors" data-path="enterprise-and-coaching" href="<?php echo esc_url( home_url( '/support/' ) ); ?>"><?php esc_html_e( 'Dossier API Integrations', 'core16' ); ?></a></li>
					<li><a class="hover:text-midnight transition-colors" data-path="enterprise-and-coaching" href="<?php echo esc_url( home_url( '/pricing/' ) ); ?>"><?php esc_html_e( 'Certified Practitioner Gate', 'core16' ); ?></a></li>
					<li><a class="hover:text-midnight transition-colors" data-path="enterprise-and-coaching" href="<?php echo esc_url( home_url( '/enterprise/#inquiry' ) ); ?>"><?php esc_html_e( 'Institutional Invoicing', 'core16' ); ?></a></li>
				</ul>
			</div>

			<!-- Column 5: Privacy & Compliance -->
			<div class="md:col-span-2 space-y-space-md">
				<h4 class="font-mono text-xs uppercase tracking-wider text-midnight font-bold">
					<?php esc_html_e( 'Privacy & WCAG AA', 'core16' ); ?>
				</h4>
				<ul class="space-y-2 font-body text-xs text-slate-subtle">
					<li><a class="hover:text-midnight transition-colors" data-path="accessibility-statement" href="<?php echo esc_url( home_url( '/support/' ) ); ?>"><?php esc_html_e( 'Accessibility Statement', 'core16' ); ?></a></li>
					<li><a class="hover:text-midnight transition-colors" data-path="data-sovereignty" href="<?php echo esc_url( home_url( '/about/' ) ); ?>"><?php esc_html_e( 'GDPR & Data Sovereignty', 'core16' ); ?></a></li>
					<li><a class="hover:text-midnight transition-colors" data-path="psychometric-ethics" href="<?php echo esc_url( home_url( '/science-methodology/' ) ); ?>"><?php esc_html_e( 'Psychometric Ethics', 'core16' ); ?></a></li>
					<li><a class="hover:text-midnight transition-colors" data-path="security-whitepaper" href="<?php echo esc_url( home_url( '/resources/' ) ); ?>"><?php esc_html_e( 'SOC2 Type II Dossier', 'core16' ); ?></a></li>
					<li><a class="hover:text-midnight transition-colors" data-path="legal-compliance" href="<?php echo esc_url( home_url( '/how-core16-works/#regulatory' ) ); ?>"><?php esc_html_e( 'Compliance Architecture', 'core16' ); ?></a></li>
				</ul>
			</div>

		</div>

		<!-- Footer Bottom Notice -->
		<div class="pt-space-md flex flex-col sm:flex-row items-center justify-between gap-space-md text-slate-subtle font-mono text-[11px]">
			<div>
				<?php printf( esc_html__( '© %s Core16 Psychometrics Institute Ltd. All empirical rights reserved.', 'core16' ), esc_html( gmdate( 'Y' ) ) ); ?>
			</div>
			<div class="flex items-center gap-4">
				<a class="hover:text-midnight transition-colors" data-path="privacy-policy" href="<?php echo esc_url( home_url( '/privacy-policy/' ) ); ?>"><?php esc_html_e( 'Privacy Framework', 'core16' ); ?></a>
				<span>•</span>
				<a class="hover:text-midnight transition-colors" data-path="terms-of-engagement" href="<?php echo esc_url( home_url( '/support/' ) ); ?>"><?php esc_html_e( 'Terms of Clinical Engagement', 'core16' ); ?></a>
				<span>•</span>
				<a class="hover:text-midnight transition-colors" data-path="security-whitepaper" href="<?php echo esc_url( home_url( '/how-core16-works/#regulatory' ) ); ?>"><?php esc_html_e( 'Security Architecture', 'core16' ); ?></a>
			</div>
		</div>

	</div>
</footer>
