<?php
/**
 * Enterprise Page - Security & Enterprise Compliance (Midnight Contrast Anchor, Stitch Fidelity)
 * Screen: "For Organisations" / Enterprise Solutions Page (20a9a1e7c43d4e27bbfe246b8a189ef1)
 *
 * @package Core16
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<!-- SECTION 4: SECURITY & ENTERPRISE COMPLIANCE (Midnight Contrast Anchor) -->
<section class="bg-inverse-surface text-inverse-on-surface py-space-xl lg:py-24 px-margin-sm lg:px-margin-lg border-b border-white/10" id="compliance">
	<div class="max-w-[1440px] mx-auto space-y-space-xl">
		<div class="max-w-2xl">
			<span class="font-label-mono text-label-mono uppercase tracking-widest text-primary-fixed block mb-space-xs font-semibold">
				<?php esc_html_e( 'Enterprise Trust & Governance', 'core16' ); ?>
			</span>
			<h2 class="font-display-hero text-headline-xl lg:text-headline-xl text-white font-semibold tracking-tight">
				<?php esc_html_e( 'Sovereign Data Storage • Clinical Privacy Defense', 'core16' ); ?>
			</h2>
			<p class="font-body-default text-body-default text-surface-container-high mt-2 leading-relaxed">
				<?php esc_html_e( 'Psychometric telemetry is highly sensitive human IP. Core16 enforces bank-grade cryptographic isolation, rigorous compliance audits, and absolute employee privacy blinds.', 'core16' ); ?>
			</p>
		</div>

		<!-- 4 Pillar Grid -->
		<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-gutter">
			<!-- Pillar 1 -->
			<div class="bg-surface-container-highest/10 p-space-lg rounded-xl space-y-space-md hover:bg-surface-container-highest/15 transition-all border border-white/5">
				<div class="w-12 h-12 rounded-lg bg-primary-container/20 flex items-center justify-center text-primary-fixed">
					<span class="material-symbols-outlined text-2xl">verified_user</span>
				</div>
				<h3 class="font-headline-sm text-headline-sm text-white font-semibold">
					<?php esc_html_e( 'SOC2 Type II Audited', 'core16' ); ?>
				</h3>
				<p class="font-body-sm text-body-sm text-surface-container-high/80 leading-relaxed">
					<?php esc_html_e( 'Annually verified by independent AICPA auditors. Continuous compliance automation monitored across all cloud and storage infrastructure.', 'core16' ); ?>
				</p>
				<div class="font-label-mono-sm text-label-mono-sm text-primary-fixed uppercase tracking-wider font-semibold">
					<?php esc_html_e( 'Zero Exceptions Reported', 'core16' ); ?>
				</div>
			</div>

			<!-- Pillar 2 -->
			<div class="bg-surface-container-highest/10 p-space-lg rounded-xl space-y-space-md hover:bg-surface-container-highest/15 transition-all border border-white/5">
				<div class="w-12 h-12 rounded-lg bg-primary-container/20 flex items-center justify-center text-primary-fixed">
					<span class="material-symbols-outlined text-2xl">lock</span>
				</div>
				<h3 class="font-headline-sm text-headline-sm text-white font-semibold">
					<?php esc_html_e( 'GDPR & CCPA Sovereignty', 'core16' ); ?>
				</h3>
				<p class="font-body-sm text-body-sm text-surface-container-high/80 leading-relaxed">
					<?php esc_html_e( 'Dedicated localized data residency within EU/US jurisdictions. Full right-to-be-forgotten deletion workflows with AES-256 at-rest encryption.', 'core16' ); ?>
				</p>
				<div class="font-label-mono-sm text-label-mono-sm text-primary-fixed uppercase tracking-wider font-semibold">
					<?php esc_html_e( 'Hardware Key Vaulting', 'core16' ); ?>
				</div>
			</div>

			<!-- Pillar 3 -->
			<div class="bg-surface-container-highest/10 p-space-lg rounded-xl space-y-space-md hover:bg-surface-container-highest/15 transition-all border border-white/5">
				<div class="w-12 h-12 rounded-lg bg-primary-container/20 flex items-center justify-center text-primary-fixed">
					<span class="material-symbols-outlined text-2xl">key</span>
				</div>
				<h3 class="font-headline-sm text-headline-sm text-white font-semibold">
					<?php esc_html_e( 'Enterprise SSO & SCIM', 'core16' ); ?>
				</h3>
				<p class="font-body-sm text-body-sm text-surface-container-high/80 leading-relaxed">
					<?php esc_html_e( 'Out-of-the-box integration with Okta, Microsoft Azure AD, Google Workspace, and PingIdentity. Automated lifecycle user de-provisioning.', 'core16' ); ?>
				</p>
				<div class="font-label-mono-sm text-label-mono-sm text-primary-fixed uppercase tracking-wider font-semibold">
					<?php esc_html_e( 'SAML 2.0 • OIDC Ready', 'core16' ); ?>
				</div>
			</div>

			<!-- Pillar 4 -->
			<div class="bg-surface-container-highest/10 p-space-lg rounded-xl space-y-space-md hover:bg-surface-container-highest/15 transition-all border border-white/5">
				<div class="w-12 h-12 rounded-lg bg-primary-container/20 flex items-center justify-center text-primary-fixed">
					<span class="material-symbols-outlined text-2xl">visibility_off</span>
				</div>
				<h3 class="font-headline-sm text-headline-sm text-white font-semibold">
					<?php esc_html_e( 'Blinded Privacy Controls', 'core16' ); ?>
				</h3>
				<p class="font-body-sm text-body-sm text-surface-container-high/80 leading-relaxed">
					<?php esc_html_e( 'Multi-tier Role-Based Access Control (RBAC). Granular anonymization barriers prevent executive leadership from misusing clinical sub-vectors.', 'core16' ); ?>
				</p>
				<div class="font-label-mono-sm text-label-mono-sm text-primary-fixed uppercase tracking-wider font-semibold">
					<?php esc_html_e( 'Ethical Guardrails Enforced', 'core16' ); ?>
				</div>
			</div>
		</div>
	</div>
</section>
