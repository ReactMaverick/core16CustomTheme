<?php
/**
 * Science & Methodology - Enterprise Verification & Institutional Briefing CTA (Stitch Fidelity)
 * Screen: Science / Methodology (b7f6a7eeaff5465490de24971fa888cb)
 *
 * @package Core16
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<!-- SECTION 7: ENTERPRISE VERIFICATION & INSTITUTIONAL INQUIRIES -->
<section class="w-full bg-[#0D182A] text-[#FAFAF7] px-margin-sm lg:px-margin-lg py-margin-lg relative overflow-hidden" id="declarations">
	<!-- Concentric Geometric Rings Decoration -->
	<div class="absolute -right-24 -bottom-24 w-96 h-96 rounded-full border border-white/5 pointer-events-none flex items-center justify-center">
		<div class="w-72 h-72 rounded-full border border-white/5 flex items-center justify-center">
			<div class="w-48 h-48 rounded-full border border-[#0EA5AB]/10"></div>
		</div>
	</div>

	<div class="max-w-[1440px] mx-auto flex flex-col gap-space-lg relative z-10">
		<div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter-lg items-center">
			<div class="lg:col-span-8 flex flex-col gap-space-md">
				<div class="flex items-center gap-space-xs">
					<span class="w-2.5 h-2.5 rounded-full bg-[#0EA5AB] animate-pulse"></span>
					<span class="font-label-mono text-label-mono uppercase tracking-widest text-[#0EA5AB] font-semibold">
						<?php esc_html_e( 'INSTITUTIONAL AUDIT & VALIDATION ACCESS', 'core16' ); ?>
					</span>
				</div>
				<h2 class="font-headline-xl text-headline-xl text-white tracking-tight font-semibold">
					<?php esc_html_e( 'Schedule a Direct Methodology Briefing with Core16 Psychometricians.', 'core16' ); ?>
				</h2>
				<p class="font-body-lead text-body-lead text-[#D7DEE3] max-w-2xl leading-relaxed">
					<?php esc_html_e( 'For enterprise selection committees, internal IO psychologists, and talent governance boards. Access anonymized normative raw datasets, item characteristic curves, and custom reliability audits.', 'core16' ); ?>
				</p>
			</div>

			<div class="lg:col-span-4 flex flex-col gap-space-sm">
				<a href="<?php echo esc_url( home_url( '/enterprise/#enterprise-inquiry' ) ); ?>" class="inline-flex items-center justify-center gap-space-xs px-6 py-3.5 rounded-lg bg-[#0EA5AB] hover:bg-[#0c8f94] text-white font-semibold font-body-medium text-body-medium shadow-sm transition-all cursor-pointer">
					<span class="material-symbols-outlined text-[20px]">calendar_today</span>
					<span><?php esc_html_e( 'Request Psychometrician Consultation', 'core16' ); ?></span>
				</a>
				<a href="<?php echo esc_url( home_url( '/support/#contact' ) ); ?>" class="inline-flex items-center justify-center gap-space-xs px-6 py-3.5 rounded-lg border border-slate-600 hover:border-slate-400 text-slate-200 hover:text-white font-medium font-body-medium text-body-medium transition-all cursor-pointer">
					<span class="material-symbols-outlined text-[20px]">dataset</span>
					<span><?php esc_html_e( 'Request Anonymized Normative Data', 'core16' ); ?></span>
				</a>
			</div>
		</div>

		<!-- Compliance Badges Bar -->
		<div class="pt-space-lg border-t border-white/10 flex flex-col sm:flex-row items-center justify-between gap-space-md text-[#bcc9c9] font-label-mono-sm text-label-mono-sm">
			<div class="flex flex-wrap items-center gap-space-md">
				<span class="flex items-center gap-1 text-[#0EA5AB] font-semibold">
					<span class="material-symbols-outlined text-[16px]">verified_user</span>
					<span><?php esc_html_e( 'APA Standard 10667-2 Certified', 'core16' ); ?></span>
				</span>
				<span>•</span>
				<span><?php esc_html_e( 'EEOC Uniform Guidelines Compliant', 'core16' ); ?></span>
				<span>•</span>
				<span><?php esc_html_e( 'GDPR / CCPA Cryptographic Sovereign Storage', 'core16' ); ?></span>
			</div>
			<div class="text-[#bcc9c9] font-mono">
				<?php esc_html_e( 'Document Archival Code: MET-REV4-2026-N1842K', 'core16' ); ?>
			</div>
		</div>
	</div>
</section>
