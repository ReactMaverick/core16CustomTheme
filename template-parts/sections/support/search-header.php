<?php
/**
 * Support & FAQ Page - Institutional Header & Frequently Answered Protocols (Stitch Fidelity)
 *
 * @package Core16
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<!-- INSTITUTIONAL HERO HEADER -->
<div class="w-full bg-surface-container-lowest py-space-xl px-margin-sm lg:px-margin-lg border-b border-rule-grey/30">
	<div class="max-w-[1440px] mx-auto flex flex-col gap-space-lg">
		<div class="flex flex-wrap items-center justify-between gap-space-md">
			<div class="inline-flex items-center gap-space-xs px-space-sm py-1 rounded bg-surface-container-high text-on-surface-variant font-label-mono-sm text-label-mono-sm uppercase tracking-wider">
				<span class="w-2 h-2 rounded-full bg-primary-container"></span>
				<?php esc_html_e( 'System Specification v4.2 • Updated October 2026', 'core16' ); ?>
			</div>
			<div class="flex items-center gap-space-md font-label-mono-sm text-label-mono-sm text-on-surface-variant">
				<span class="inline-flex items-center gap-1"><span class="material-symbols-outlined text-primary text-base">verified</span> <?php esc_html_e( 'ISO 10667 Compliant', 'core16' ); ?></span>
				<span>•</span>
				<span class="inline-flex items-center gap-1"><span class="material-symbols-outlined text-primary text-base">lock</span> <?php esc_html_e( 'SOC2 Type II Certified', 'core16' ); ?></span>
			</div>
		</div>

		<div class="flex flex-col lg:flex-row lg:items-end justify-between gap-space-lg pb-space-lg">
			<div class="max-w-3xl space-y-space-sm">
				<h1 class="font-headline-xl text-headline-xl text-on-surface tracking-tight font-bold">
					<?php esc_html_e( 'Institutional Support & Governance Center', 'core16' ); ?>
				</h1>
				<p class="font-body-lead text-body-lead text-on-surface-variant leading-relaxed">
					<?php esc_html_e( 'Comprehensive documentation covering psychometric integrity, sovereign cryptographic custody, regulatory compliance, and immediate advisory channels for enterprise talent systems.', 'core16' ); ?>
				</p>
			</div>

			<div class="flex flex-wrap gap-space-xs bg-surface-container-low p-1.5 rounded-xl self-start lg:self-auto border border-rule-grey/20">
				<a class="px-space-md py-space-xs rounded bg-surface-container-lowest text-on-surface font-body-medium text-body-medium shadow-sm hover:text-primary transition-colors font-semibold" href="#faq">
					<?php esc_html_e( 'FAQ', 'core16' ); ?>
				</a>
				<a class="px-space-md py-space-xs rounded text-on-surface-variant hover:text-on-surface font-body-medium text-body-medium transition-colors" href="#governance">
					<?php esc_html_e( 'Data Privacy & Security', 'core16' ); ?>
				</a>
				<a class="px-space-md py-space-xs rounded text-on-surface-variant hover:text-on-surface font-body-medium text-body-medium transition-colors" href="#terms">
					<?php esc_html_e( 'Terms of Clinical Engagement', 'core16' ); ?>
				</a>
				<a class="px-space-md py-space-xs rounded text-on-surface-variant hover:text-on-surface font-body-medium text-body-medium transition-colors" href="#contact">
					<?php esc_html_e( 'Contact & Advisory', 'core16' ); ?>
				</a>
			</div>
		</div>
	</div>
</div>

<!-- SECTION: FREQUENTLY ANSWERED PROTOCOLS (FAQ) -->
<section class="w-full py-space-xl px-margin-sm lg:px-margin-lg bg-surface border-b border-rule-grey/30" id="faq">
	<div class="max-w-[1440px] mx-auto space-y-space-xl">
		<div class="flex flex-col md:flex-row md:items-end justify-between gap-space-md pb-space-md">
			<div>
				<span class="font-label-mono text-label-mono uppercase tracking-wider text-primary"><?php esc_html_e( '01 / Diagnostic Operations', 'core16' ); ?></span>
				<h2 class="font-headline-lg text-headline-lg text-on-surface mt-1 font-bold"><?php esc_html_e( 'Frequently Answered Protocols', 'core16' ); ?></h2>
			</div>
			<p class="font-body-sm text-body-sm text-on-surface-variant max-w-md">
				<?php esc_html_e( 'Structured clarifications on cognitive vector engines, deployment ergonomics, and institutional reporting layers.', 'core16' ); ?>
			</p>
		</div>

		<div class="grid grid-cols-1 lg:grid-cols-2 gap-gutter-lg">
			<!-- Group 1: 1.0 Assessment Science & Psychometrics -->
			<div class="space-y-space-md">
				<div class="flex items-center gap-space-sm bg-surface-container-low px-space-md py-2.5 rounded-lg border border-rule-grey/20">
					<span class="material-symbols-outlined text-primary">science</span>
					<h3 class="font-headline-sm text-headline-sm text-on-surface font-semibold"><?php esc_html_e( '1.0 Assessment Science & Psychometrics', 'core16' ); ?></h3>
				</div>
				<div class="space-y-space-sm">
					<details class="group bg-surface-container-lowest rounded-xl p-space-md open:bg-surface-container-low transition-all border border-rule-grey/20">
						<summary class="flex justify-between items-center font-body-medium text-body-medium text-on-surface cursor-pointer list-none font-semibold">
							<span><?php esc_html_e( 'How long does the assessment take to administer?', 'core16' ); ?></span>
							<span class="material-symbols-outlined text-on-surface-variant group-open:rotate-180 transition-transform">expand_more</span>
						</summary>
						<div class="pt-space-md text-on-surface-variant font-body-default text-body-default space-y-2 leading-relaxed">
							<p><?php esc_html_e( 'The standard Core16 instrument comprises 72 forced-choice paired vectors and completes in an average of 14 to 18 minutes. It operates on an adaptive IRT (Item Response Theory) engine that recalibrates item gravity in real-time, eliminating cognitive fatigue while maintaining a 95% trait confidence interval.', 'core16' ); ?></p>
							<div class="p-space-sm bg-surface-container rounded font-label-mono-sm text-label-mono-sm text-on-tertiary-container mt-2">
								<?php esc_html_e( 'METRIC CONFIDENCE: Standard Error of Measurement (SEM) < 0.18 across all 4 FECA poles.', 'core16' ); ?>
							</div>
						</div>
					</details>

					<details class="group bg-surface-container-lowest rounded-xl p-space-md open:bg-surface-container-low transition-all border border-rule-grey/20">
						<summary class="flex justify-between items-center font-body-medium text-body-medium text-on-surface cursor-pointer list-none font-semibold">
							<span><?php esc_html_e( 'What are the scientific test-retest reliability indices?', 'core16' ); ?></span>
							<span class="material-symbols-outlined text-on-surface-variant group-open:rotate-180 transition-transform">expand_more</span>
						</summary>
						<div class="pt-space-md text-on-surface-variant font-body-default text-body-default leading-relaxed">
							<p><?php esc_html_e( 'Core16 demonstrates a Cronbach’s alpha of 0.89 to 0.93 across primary cognitive traits and an 8-month test-retest stability coefficient of r = 0.88 across N=184,200 cohort validation instances. The system deliberately excludes volatile state-dependent mood queries.', 'core16' ); ?></p>
						</div>
					</details>

					<details class="group bg-surface-container-lowest rounded-xl p-space-md open:bg-surface-container-low transition-all border border-rule-grey/20">
						<summary class="flex justify-between items-center font-body-medium text-body-medium text-on-surface cursor-pointer list-none font-semibold">
							<span><?php esc_html_e( 'How is Core16 differentiated from legacy MBTI or Big Five?', 'core16' ); ?></span>
							<span class="material-symbols-outlined text-on-surface-variant group-open:rotate-180 transition-transform">expand_more</span>
						</summary>
						<div class="pt-space-md text-on-surface-variant font-body-default text-body-default leading-relaxed">
							<p><?php esc_html_e( 'Unlike categorical binary typologies (MBTI), Core16 evaluates functional cognitive continuum scores via our FECA (Focus, Execution, Cognition, Alignment) matrix. Unlike pure Five Factor traits (Big Five), Core16 yields synthesized executive archetypes mapped specifically to operational strategy and institutional friction patterns.', 'core16' ); ?></p>
						</div>
					</details>
				</div>
			</div>

			<!-- Group 2: 2.0 Dossiers, Access & Billing -->
			<div class="space-y-space-md">
				<div class="flex items-center gap-space-sm bg-surface-container-low px-space-md py-2.5 rounded-lg border border-rule-grey/20">
					<span class="material-symbols-outlined text-primary">analytics</span>
					<h3 class="font-headline-sm text-headline-sm text-on-surface font-semibold"><?php esc_html_e( '2.0 Dossiers, Access & Billing', 'core16' ); ?></h3>
				</div>
				<div class="space-y-space-sm">
					<details class="group bg-surface-container-lowest rounded-xl p-space-md open:bg-surface-container-low transition-all border border-rule-grey/20">
						<summary class="flex justify-between items-center font-body-medium text-body-medium text-on-surface cursor-pointer list-none font-semibold">
							<span><?php esc_html_e( 'How is the 30-page Executive Dossier delivered?', 'core16' ); ?></span>
							<span class="material-symbols-outlined text-on-surface-variant group-open:rotate-180 transition-transform">expand_more</span>
						</summary>
						<div class="pt-space-md text-on-surface-variant font-body-default text-body-default leading-relaxed">
							<p><?php esc_html_e( 'Immediately upon completion, your comprehensive cryptographic report is compiled into a high-density PDF dossier and an encrypted browser portal. It includes complete FECA vectors, blind-spot diagnostic trees, executive interaction scripts, and cognitive stress projections.', 'core16' ); ?></p>
						</div>
					</details>

					<details class="group bg-surface-container-lowest rounded-xl p-space-md open:bg-surface-container-low transition-all border border-rule-grey/20">
						<summary class="flex justify-between items-center font-body-medium text-body-medium text-on-surface cursor-pointer list-none font-semibold">
							<span><?php esc_html_e( 'Can candidates expense the assessment via L&D allocations?', 'core16' ); ?></span>
							<span class="material-symbols-outlined text-on-surface-variant group-open:rotate-180 transition-transform">expand_more</span>
						</summary>
						<div class="pt-space-md text-on-surface-variant font-body-default text-body-default leading-relaxed">
							<p><?php esc_html_e( 'Yes. All purchases generate automated, VAT-compliant corporate invoices with standardized accounting codes: UNSPC 86101700 (Educational & Leadership Evaluation Services). Over 78% of individual dossiers are expensed under professional executive coaching allowances.', 'core16' ); ?></p>
						</div>
					</details>

					<details class="group bg-surface-container-lowest rounded-xl p-space-md open:bg-surface-container-low transition-all border border-rule-grey/20">
						<summary class="flex justify-between items-center font-body-medium text-body-medium text-on-surface cursor-pointer list-none font-semibold">
							<span><?php esc_html_e( 'What is the expiration protocol for assessment invitation links?', 'core16' ); ?></span>
							<span class="material-symbols-outlined text-on-surface-variant group-open:rotate-180 transition-transform">expand_more</span>
						</summary>
						<div class="pt-space-md text-on-surface-variant font-body-default text-body-default leading-relaxed">
							<p><?php esc_html_e( 'Individual links stay active for 90 days. Enterprise batch assessment invitations can be locked to custom timeframes (e.g., 7 days for hiring rounds or 48 hours for cohort benchmarking) through the administrative dashboard.', 'core16' ); ?></p>
						</div>
					</details>
				</div>
			</div>

			<!-- Group 3: 3.0 Data Sovereignty & Privacy -->
			<div class="space-y-space-md">
				<div class="flex items-center gap-space-sm bg-surface-container-low px-space-md py-2.5 rounded-lg border border-rule-grey/20">
					<span class="material-symbols-outlined text-primary">shield_person</span>
					<h3 class="font-headline-sm text-headline-sm text-on-surface font-semibold"><?php esc_html_e( '3.0 Data Sovereignty & Privacy', 'core16' ); ?></h3>
				</div>
				<div class="space-y-space-sm">
					<details class="group bg-surface-container-lowest rounded-xl p-space-md open:bg-surface-container-low transition-all border border-rule-grey/20">
						<summary class="flex justify-between items-center font-body-medium text-body-medium text-on-surface cursor-pointer list-none font-semibold">
							<span><?php esc_html_e( 'Does Core16 sell candidate data or train shared AI models?', 'core16' ); ?></span>
							<span class="material-symbols-outlined text-on-surface-variant group-open:rotate-180 transition-transform">expand_more</span>
						</summary>
						<div class="pt-space-md text-on-surface-variant font-body-default text-body-default leading-relaxed">
							<p><?php esc_html_e( 'Never. Candidate telemetry and raw response indices are never commercialized, resold, or used to fine-tune third-party LLMs. We maintain air-gapped institutional workspaces with customer-managed cryptographic keys upon request.', 'core16' ); ?></p>
						</div>
					</details>

					<details class="group bg-surface-container-lowest rounded-xl p-space-md open:bg-surface-container-low transition-all border border-rule-grey/20">
						<summary class="flex justify-between items-center font-body-medium text-body-medium text-on-surface cursor-pointer list-none font-semibold">
							<span><?php esc_html_e( 'Are candidate scores blinded during recruitment processes?', 'core16' ); ?></span>
							<span class="material-symbols-outlined text-on-surface-variant group-open:rotate-180 transition-transform">expand_more</span>
						</summary>
						<div class="pt-space-md text-on-surface-variant font-body-default text-body-default leading-relaxed">
							<p><?php esc_html_e( 'Enterprise workspaces support programmatic demographic blinding. Evaluators see only job-relevant cognitive traits and FECA dynamic indices, completely uncoupled from demographic identifiers, preventing implicit evaluation bias.', 'core16' ); ?></p>
						</div>
					</details>
				</div>
			</div>

			<!-- Group 4: 4.0 Enterprise Implementation -->
			<div class="space-y-space-md">
				<div class="flex items-center gap-space-sm bg-surface-container-low px-space-md py-2.5 rounded-lg border border-rule-grey/20">
					<span class="material-symbols-outlined text-primary">domain</span>
					<h3 class="font-headline-sm text-headline-sm text-on-surface font-semibold"><?php esc_html_e( '4.0 Enterprise Implementation', 'core16' ); ?></h3>
				</div>
				<div class="space-y-space-sm">
					<details class="group bg-surface-container-lowest rounded-xl p-space-md open:bg-surface-container-low transition-all border border-rule-grey/20">
						<summary class="flex justify-between items-center font-body-medium text-body-medium text-on-surface cursor-pointer list-none font-semibold">
							<span><?php esc_html_e( 'How fast can Core16 scale to 500+ global leaders?', 'core16' ); ?></span>
							<span class="material-symbols-outlined text-on-surface-variant group-open:rotate-180 transition-transform">expand_more</span>
						</summary>
						<div class="pt-space-md text-on-surface-variant font-body-default text-body-default leading-relaxed">
							<p><?php esc_html_e( 'Organizations can upload CSV rosters or connect SCIM provisioning to launch hundreds of assessments in under 15 minutes. Global instances include automatic localization into English, German, French, Japanese, and Mandarin.', 'core16' ); ?></p>
						</div>
					</details>

					<details class="group bg-surface-container-lowest rounded-xl p-space-md open:bg-surface-container-low transition-all border border-rule-grey/20">
						<summary class="flex justify-between items-center font-body-medium text-body-medium text-on-surface cursor-pointer list-none font-semibold">
							<span><?php esc_html_e( 'Do you integrate directly with Okta SSO and HRIS platforms?', 'core16' ); ?></span>
							<span class="material-symbols-outlined text-on-surface-variant group-open:rotate-180 transition-transform">expand_more</span>
						</summary>
						<div class="pt-space-md text-on-surface-variant font-body-default text-body-default leading-relaxed">
							<p><?php esc_html_e( 'Yes. We provide pre-built integrations for Okta, Microsoft Azure AD (Entra ID), Workday, BambooHR, and Greenhouse. We support SAML 2.0 single sign-on, automated user provisioning, and role-based permissions access.', 'core16' ); ?></p>
						</div>
					</details>
				</div>
			</div>
		</div>
	</div>
</section>
