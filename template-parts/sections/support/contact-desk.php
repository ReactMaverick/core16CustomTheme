<?php
/**
 * Support & FAQ Page - Data Sovereignty & Governance, Legal Terms, and Advisory Transmission Desk (Stitch Fidelity)
 *
 * @package Core16
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<!-- SECTION: DATA SOVEREIGNTY & PRIVACY (GOVERNANCE) -->
<section class="w-full py-space-xl px-margin-sm lg:px-margin-lg bg-surface-container-lowest border-b border-rule-grey/30" id="governance">
	<div class="max-w-[1440px] mx-auto">
		<div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter-lg items-start">
			<!-- Sticky Index Matrix Aside -->
			<aside class="lg:col-span-4 sticky top-28 space-y-space-md p-space-lg bg-surface-container-low rounded-xl border border-rule-grey/20">
				<div class="space-y-1">
					<span class="font-label-mono-sm text-label-mono-sm text-primary uppercase tracking-wider"><?php esc_html_e( 'Index Matrix', 'core16' ); ?></span>
					<h3 class="font-headline-md text-headline-md text-on-surface font-bold"><?php esc_html_e( 'Data Sovereignty & Privacy', 'core16' ); ?></h3>
				</div>
				<p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">
					<?php esc_html_e( 'Official compliance specifications, data handling treaties, and cryptographic isolation architectures.', 'core16' ); ?>
				</p>
				<nav class="space-y-1 font-label-mono text-label-mono" id="doc-nav">
					<a class="flex items-center justify-between p-2 rounded bg-surface-container-lowest text-on-surface transition-colors shadow-sm font-semibold" href="#doc-1">
						<span><?php esc_html_e( '1.0 Scope & Processing Boundary', 'core16' ); ?></span>
						<span class="material-symbols-outlined text-xs">arrow_forward</span>
					</a>
					<a class="flex items-center justify-between p-2 rounded text-on-surface-variant hover:text-on-surface hover:bg-surface-container-lowest transition-colors" href="#doc-2">
						<span><?php esc_html_e( '2.0 Cryptographic Data Sovereignty', 'core16' ); ?></span>
						<span class="material-symbols-outlined text-xs">arrow_forward</span>
					</a>
					<a class="flex items-center justify-between p-2 rounded text-on-surface-variant hover:text-on-surface hover:bg-surface-container-lowest transition-colors" href="#doc-3">
						<span><?php esc_html_e( '3.0 ISO 10667 & EEOC Compliance', 'core16' ); ?></span>
						<span class="material-symbols-outlined text-xs">arrow_forward</span>
					</a>
					<a class="flex items-center justify-between p-2 rounded text-on-surface-variant hover:text-on-surface hover:bg-surface-container-lowest transition-colors" href="#doc-4">
						<span><?php esc_html_e( '4.0 Sub-Processor Transparency', 'core16' ); ?></span>
						<span class="material-symbols-outlined text-xs">arrow_forward</span>
					</a>
					<a class="flex items-center justify-between p-2 rounded text-on-surface-variant hover:text-on-surface hover:bg-surface-container-lowest transition-colors" href="#doc-5">
						<span><?php esc_html_e( '5.0 Candidate Rights & Erasure', 'core16' ); ?></span>
						<span class="material-symbols-outlined text-xs">arrow_forward</span>
					</a>
				</nav>
				<div class="p-space-sm bg-surface-container-high rounded space-y-1 font-body-sm text-body-sm text-on-tertiary-container border border-rule-grey/20">
					<div class="flex items-center gap-1 font-label-mono-sm text-label-mono-sm uppercase text-on-surface font-semibold">
						<span class="material-symbols-outlined text-sm">download</span> <?php esc_html_e( 'Download PDF Charter', 'core16' ); ?>
					</div>
					<p class="text-xs"><?php esc_html_e( 'Formal Data Processing Addendum (DPA) incorporating Standard Contractual Clauses (SCCs).', 'core16' ); ?></p>
				</div>
			</aside>

			<!-- Right Article Specifications -->
			<article class="lg:col-span-8 space-y-space-xl lg:pl-gutter">
				<!-- Doc 1 -->
				<div class="space-y-space-md" id="doc-1">
					<span class="font-label-mono text-label-mono text-primary uppercase tracking-wider font-semibold"><?php esc_html_e( 'Section 1.0', 'core16' ); ?></span>
					<h3 class="font-headline-lg text-headline-lg text-on-surface font-bold"><?php esc_html_e( 'Scope & Data Processing Boundaries', 'core16' ); ?></h3>
					<p class="font-body-default text-body-default text-on-surface-variant leading-relaxed">
						<?php esc_html_e( 'This charter governs all telemetry, psychometric vector inputs, and behavioral diagnostic summaries handled by the Core16 engine. Core16 Psychometrics Institute Ltd operates strictly as a Data Processor under Article 28 of the General Data Protection Regulation (GDPR) and applicable global data statutes. Customer organizations retain full ownership and stewardship of assessment payloads.', 'core16' ); ?>
					</p>
					<div class="grid grid-cols-1 md:grid-cols-2 gap-space-md pt-space-xs">
						<div class="p-space-md bg-surface-container-low rounded-lg space-y-1 border border-rule-grey/20">
							<span class="font-label-mono text-label-mono text-on-surface uppercase font-semibold"><?php esc_html_e( 'Direct Collection', 'core16' ); ?></span>
							<p class="font-body-sm text-body-sm text-on-surface-variant"><?php esc_html_e( 'Cognitive choice vectors, response reaction pacing, evaluation completion tokens.', 'core16' ); ?></p>
						</div>
						<div class="p-space-md bg-surface-container-low rounded-lg space-y-1 border border-rule-grey/20">
							<span class="font-label-mono text-label-mono text-on-surface uppercase font-semibold"><?php esc_html_e( 'Excluded Telemetry', 'core16' ); ?></span>
							<p class="font-body-sm text-body-sm text-on-surface-variant"><?php esc_html_e( 'Biometric traits, continuous camera input, device keystroke timing, non-relevant browsing habits.', 'core16' ); ?></p>
						</div>
					</div>
				</div>

				<!-- Doc 2 -->
				<div class="space-y-space-md" id="doc-2">
					<span class="font-label-mono text-label-mono text-primary uppercase tracking-wider font-semibold"><?php esc_html_e( 'Section 2.0', 'core16' ); ?></span>
					<h3 class="font-headline-lg text-headline-lg text-on-surface font-bold"><?php esc_html_e( 'Cryptographic Data Sovereignty', 'core16' ); ?></h3>
					<p class="font-body-default text-body-default text-on-surface-variant leading-relaxed">
						<?php esc_html_e( 'Every psychometric assessment instance is encrypted at rest using AES-256-GCM cipher standards, with customer-dedicated envelope encryption keys managed via FIPS 140-2 Level 3 hardware security modules. In-transit network communications mandate TLS 1.3 encryption.', 'core16' ); ?>
					</p>
					<div class="p-space-md bg-inverse-surface text-inverse-on-surface rounded-xl space-y-space-xs border border-white/5 shadow-md">
						<div class="flex items-center justify-between font-label-mono text-label-mono text-inverse-primary font-semibold">
							<span><?php esc_html_e( 'SOVEREIGN ARCHIVAL STANDARD', 'core16' ); ?></span>
							<span><?php esc_html_e( 'AIR-GAPPED SHIELD', 'core16' ); ?></span>
						</div>
						<p class="font-body-sm text-body-sm text-surface-dim leading-relaxed">
							<?php esc_html_e( 'Diagnostic reports can be set to "Self-Destruct Telemetry Mode", where raw answer vectors are mathematically vaporized once the 30-page dossier is assembled, preserving only high-level archetype scores.', 'core16' ); ?>
						</p>
					</div>
				</div>

				<!-- Doc 3 -->
				<div class="space-y-space-md" id="doc-3">
					<span class="font-label-mono text-label-mono text-primary uppercase tracking-wider font-semibold"><?php esc_html_e( 'Section 3.0', 'core16' ); ?></span>
					<h3 class="font-headline-lg text-headline-lg text-on-surface font-bold"><?php esc_html_e( 'ISO 10667 & EEOC Compliance Protocol', 'core16' ); ?></h3>
					<p class="font-body-default text-body-default text-on-surface-variant leading-relaxed">
						<?php esc_html_e( 'Core16 procedures align with ISO 10667-1 and 10667-2 (Assessment service delivery: Procedures and methods to assess people in work and organizational settings). Our instruments undergo quarterly adverse impact analyses under the United States Equal Employment Opportunity Commission (EEOC) Uniform Guidelines on Employee Selection Procedures. The four-fifths rule threshold is verified across gender, race, and age demographics to guarantee non-discriminatory measurement validity.', 'core16' ); ?>
					</p>
				</div>

				<!-- Doc 4 -->
				<div class="space-y-space-md" id="doc-4">
					<span class="font-label-mono text-label-mono text-primary uppercase tracking-wider font-semibold"><?php esc_html_e( 'Section 4.0', 'core16' ); ?></span>
					<h3 class="font-headline-lg text-headline-lg text-on-surface font-bold"><?php esc_html_e( 'Sub-Processor Transparency', 'core16' ); ?></h3>
					<p class="font-body-default text-body-default text-on-surface-variant leading-relaxed">
						<?php esc_html_e( 'Core16 limits external infrastructure dependencies to enterprise-grade, certified partners. Current verified data hosts:', 'core16' ); ?>
					</p>
					<div class="overflow-x-auto border border-rule-grey/20 rounded-lg">
						<table class="w-full text-left font-body-sm text-body-sm">
							<thead>
								<tr class="bg-surface-container-high text-on-surface font-label-mono-sm text-label-mono-sm uppercase">
									<th class="p-3"><?php esc_html_e( 'Entity', 'core16' ); ?></th>
									<th class="p-3"><?php esc_html_e( 'Processing Role', 'core16' ); ?></th>
									<th class="p-3"><?php esc_html_e( 'Data Location', 'core16' ); ?></th>
									<th class="p-3"><?php esc_html_e( 'Certification', 'core16' ); ?></th>
								</tr>
							</thead>
							<tbody class="divide-y divide-rule-grey/20 text-on-surface-variant">
								<tr class="hover:bg-surface-container-low transition-colors">
									<td class="p-3 font-body-medium text-on-surface font-semibold"><?php esc_html_e( 'AWS GovCloud & EU-Frankfurt', 'core16' ); ?></td>
									<td class="p-3"><?php esc_html_e( 'Primary Compute & Encrypted Vector Vaults', 'core16' ); ?></td>
									<td class="p-3"><?php esc_html_e( 'Frankfurt (EU) / N. Virginia (US)', 'core16' ); ?></td>
									<td class="p-3 font-label-mono-sm text-label-mono-sm"><?php esc_html_e( 'ISO 27001, SOC2 Type II', 'core16' ); ?></td>
								</tr>
								<tr class="hover:bg-surface-container-low transition-colors">
									<td class="p-3 font-body-medium text-on-surface font-semibold"><?php esc_html_e( 'Cloudflare Inc.', 'core16' ); ?></td>
									<td class="p-3"><?php esc_html_e( 'Edge DDOS Shielding & WAF Ingress', 'core16' ); ?></td>
									<td class="p-3"><?php esc_html_e( 'Global Edge Distribution', 'core16' ); ?></td>
									<td class="p-3 font-label-mono-sm text-label-mono-sm"><?php esc_html_e( 'SOC3, PCI-DSS', 'core16' ); ?></td>
								</tr>
								<tr class="hover:bg-surface-container-low transition-colors">
									<td class="p-3 font-body-medium text-on-surface font-semibold"><?php esc_html_e( 'Postmark (ActiveCampaign)', 'core16' ); ?></td>
									<td class="p-3"><?php esc_html_e( 'Transactional Dossier Dispatch', 'core16' ); ?></td>
									<td class="p-3"><?php esc_html_e( 'United States / EU Mirror', 'core16' ); ?></td>
									<td class="p-3 font-label-mono-sm text-label-mono-sm"><?php esc_html_e( 'GDPR DPA Compliant', 'core16' ); ?></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>

				<!-- Doc 5 -->
				<div class="space-y-space-md" id="doc-5">
					<span class="font-label-mono text-label-mono text-primary uppercase tracking-wider font-semibold"><?php esc_html_e( 'Section 5.0', 'core16' ); ?></span>
					<h3 class="font-headline-lg text-headline-lg text-on-surface font-bold"><?php esc_html_e( 'Candidate Rights, Rectification & Erasure', 'core16' ); ?></h3>
					<p class="font-body-default text-body-default text-on-surface-variant leading-relaxed">
						<?php esc_html_e( 'Every participant holds the irrevocable right to access their complete diagnostic ledger, request rectification of factual inaccuracies, or demand complete, permanent deletion of their psychometric record within 30 days of formal written notice via our automated data rights terminal or direct communication with our Data Protection Officer.', 'core16' ); ?>
					</p>
				</div>
			</article>
		</div>
	</div>
</section>

<!-- SECTION: TERMS OF CLINICAL & EXECUTIVE ENGAGEMENT -->
<section class="w-full py-space-xl px-margin-sm lg:px-margin-lg bg-surface border-b border-rule-grey/30" id="terms">
	<div class="max-w-[1440px] mx-auto space-y-space-lg">
		<div class="flex flex-col md:flex-row md:items-end justify-between gap-space-md">
			<div>
				<span class="font-label-mono text-label-mono uppercase tracking-wider text-primary"><?php esc_html_e( 'Legal Framework', 'core16' ); ?></span>
				<h2 class="font-headline-lg text-headline-lg text-on-surface mt-1 font-bold"><?php esc_html_e( 'Terms of Clinical & Executive Engagement', 'core16' ); ?></h2>
			</div>
			<div class="font-label-mono-sm text-label-mono-sm text-on-surface-variant bg-surface-container-high px-space-md py-1 rounded border border-rule-grey/20">
				<?php esc_html_e( 'CONTRACT GOVERNANCE: JURISDICTION OF ENGLAND & WALES / DELAWARE', 'core16' ); ?>
			</div>
		</div>

		<div class="grid grid-cols-1 md:grid-cols-3 gap-gutter">
			<!-- Article A -->
			<div class="p-space-lg bg-surface-container-lowest rounded-xl space-y-space-sm flex flex-col justify-between border border-rule-grey/20 shadow-sm">
				<div class="space-y-space-xs">
					<span class="font-label-mono text-label-mono text-secondary font-semibold"><?php esc_html_e( 'ARTICLE A', 'core16' ); ?></span>
					<h4 class="font-headline-sm text-headline-sm text-on-surface font-bold"><?php esc_html_e( 'Non-Clinical Boundary', 'core16' ); ?></h4>
					<p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">
						<?php esc_html_e( 'Core16 instruments are constructed exclusively for leadership coaching, executive selection advisory, team balance synthesis, and personal cognitive agility. They do not constitute diagnostic medical instruments, DSM-5 psychological assessments, or psychiatric health evaluations.', 'core16' ); ?>
					</p>
				</div>
				<div class="pt-space-sm font-label-mono-sm text-label-mono-sm text-primary font-semibold border-t border-rule-grey/10"><?php esc_html_e( 'CLAUSE 1.4 ENFORCED', 'core16' ); ?></div>
			</div>

			<!-- Article B -->
			<div class="p-space-lg bg-surface-container-lowest rounded-xl space-y-space-sm flex flex-col justify-between border border-rule-grey/20 shadow-sm">
				<div class="space-y-space-xs">
					<span class="font-label-mono text-label-mono text-secondary font-semibold"><?php esc_html_e( 'ARTICLE B', 'core16' ); ?></span>
					<h4 class="font-headline-sm text-headline-sm text-on-surface font-bold"><?php esc_html_e( 'Intellectual Property Rights', 'core16' ); ?></h4>
					<p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">
						<?php esc_html_e( 'The FECA metric calculation engine, 16 Archetype taxonomic definitions, profile interaction matrices, and proprietary report layouts remain the exclusive property of Core16 Psychometrics Institute Ltd. Unlicensed derivative reverse engineering is strictly prohibited.', 'core16' ); ?>
					</p>
				</div>
				<div class="pt-space-sm font-label-mono-sm text-label-mono-sm text-primary font-semibold border-t border-rule-grey/10"><?php esc_html_e( 'CLAUSE 3.1 ENFORCED', 'core16' ); ?></div>
			</div>

			<!-- Article C -->
			<div class="p-space-lg bg-surface-container-lowest rounded-xl space-y-space-sm flex flex-col justify-between border border-rule-grey/20 shadow-sm">
				<div class="space-y-space-xs">
					<span class="font-label-mono text-label-mono text-secondary font-semibold"><?php esc_html_e( 'ARTICLE C', 'core16' ); ?></span>
					<h4 class="font-headline-sm text-headline-sm text-on-surface font-bold"><?php esc_html_e( 'Enterprise Licensing Usage', 'core16' ); ?></h4>
					<p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">
						<?php esc_html_e( 'Enterprise seat credits are non-transferable outside the assigned corporate tenant domain. Bulk seat activations carry a minimum active validity period of 12 months, with roll-over rights governed under individual enterprise service level agreements.', 'core16' ); ?>
					</p>
				</div>
				<div class="pt-space-sm font-label-mono-sm text-label-mono-sm text-primary font-semibold border-t border-rule-grey/10"><?php esc_html_e( 'CLAUSE 7.8 ENFORCED', 'core16' ); ?></div>
			</div>
		</div>
	</div>
</section>

<!-- SECTION: DIRECT LIAISON CHANNELS & TRANSMISSION TERMINAL -->
<section class="w-full py-space-xl px-margin-sm lg:px-margin-lg bg-surface-container-lowest" id="contact">
	<div class="max-w-[1440px] mx-auto">
		<div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter-lg items-stretch">
			<!-- Left: Direct Liaison Channels -->
			<div class="lg:col-span-5 bg-surface-container-low p-space-xl rounded-2xl flex flex-col justify-between space-y-space-xl border border-rule-grey/20">
				<div class="space-y-space-md">
					<div>
						<span class="font-label-mono text-label-mono text-primary uppercase tracking-wider font-semibold"><?php esc_html_e( 'Direct Liaison Channels', 'core16' ); ?></span>
						<h2 class="font-headline-xl text-headline-xl text-on-surface tracking-tight mt-1 font-bold"><?php esc_html_e( 'Enterprise Advisory & Operations', 'core16' ); ?></h2>
					</div>
					<p class="font-body-lead text-body-lead text-on-surface-variant leading-relaxed">
						<?php esc_html_e( 'Engage directly with our institutional research council, corporate deployment team, or certified practitioner network.', 'core16' ); ?>
					</p>

					<div class="space-y-space-md pt-space-md">
						<div class="space-y-1">
							<span class="font-label-mono-sm text-label-mono-sm uppercase text-on-surface-variant"><?php esc_html_e( 'Enterprise Deployments (50+ Seats)', 'core16' ); ?></span>
							<div class="font-body-medium text-body-medium text-on-surface flex items-center justify-between font-semibold">
								<span>enterprise@core16.com</span>
								<span class="font-label-mono-sm text-label-mono-sm text-primary"><?php esc_html_e( 'SLA: < 4 Hours', 'core16' ); ?></span>
							</div>
						</div>

						<div class="space-y-1">
							<span class="font-label-mono-sm text-label-mono-sm uppercase text-on-surface-variant"><?php esc_html_e( 'Scientific & Academic Inquiries', 'core16' ); ?></span>
							<div class="font-body-medium text-body-medium text-on-surface flex items-center justify-between font-semibold">
								<span>research@core16.com</span>
								<span class="font-label-mono-sm text-label-mono-sm text-on-surface-variant"><?php esc_html_e( 'SLA: < 24 Hours', 'core16' ); ?></span>
							</div>
						</div>

						<div class="space-y-1">
							<span class="font-label-mono-sm text-label-mono-sm uppercase text-on-surface-variant"><?php esc_html_e( 'Practitioner Certification Council', 'core16' ); ?></span>
							<div class="font-body-medium text-body-medium text-on-surface flex items-center justify-between font-semibold">
								<span>practitioners@core16.com</span>
								<span class="font-label-mono-sm text-label-mono-sm text-on-surface-variant"><?php esc_html_e( 'SLA: < 12 Hours', 'core16' ); ?></span>
							</div>
						</div>
					</div>
				</div>

				<div class="pt-space-lg space-y-space-sm border-t border-rule-grey/20">
					<span class="font-label-mono-sm text-label-mono-sm uppercase text-on-surface-variant block font-semibold"><?php esc_html_e( 'Regional Centers of Operation', 'core16' ); ?></span>
					<div class="grid grid-cols-2 gap-space-md font-body-sm text-body-sm text-on-surface">
						<div>
							<strong class="block font-body-medium text-body-medium"><?php esc_html_e( 'London HQ', 'core16' ); ?></strong>
							14 Berkeley Square, Mayfair<br/>London W1J 6BQ, UK
						</div>
						<div>
							<strong class="block font-body-medium text-body-medium"><?php esc_html_e( 'San Francisco', 'core16' ); ?></strong>
							100 Montgomery St, Suite 1800<br/>San Francisco, CA 94104
						</div>
					</div>
				</div>
			</div>

			<!-- Right: Transmission Terminal Form -->
			<div class="lg:col-span-7 bg-surface p-space-xl rounded-2xl flex flex-col justify-center border border-rule-grey/20 shadow-sm">
				<form class="space-y-space-md" id="advisory-form">
					<div>
						<span class="font-label-mono text-label-mono uppercase tracking-wider text-primary font-semibold"><?php esc_html_e( 'Transmission Terminal', 'core16' ); ?></span>
						<h3 class="font-headline-md text-headline-md text-on-surface mt-1 font-bold"><?php esc_html_e( 'Submit Institutional Inquiry', 'core16' ); ?></h3>
						<p class="font-body-sm text-body-sm text-on-surface-variant mt-1 leading-relaxed">
							<?php esc_html_e( 'All transmissions are handled via direct secure communication routes.', 'core16' ); ?>
						</p>
					</div>

					<div class="grid grid-cols-1 sm:grid-cols-2 gap-space-md">
						<div class="space-y-1">
							<label class="font-label-mono-sm text-label-mono-sm uppercase text-on-surface-variant block"><?php esc_html_e( 'Full Name', 'core16' ); ?></label>
							<input class="w-full bg-surface-container-lowest px-space-md py-2.5 rounded font-body-default text-body-default text-on-surface focus:outline-none focus:bg-surface-container-low transition-colors border border-rule-grey/30" placeholder="<?php esc_attr_e( 'Dr. Evelyn Vance', 'core16' ); ?>" required="" type="text"/>
						</div>
						<div class="space-y-1">
							<label class="font-label-mono-sm text-label-mono-sm uppercase text-on-surface-variant block"><?php esc_html_e( 'Work Email', 'core16' ); ?></label>
							<input class="w-full bg-surface-container-lowest px-space-md py-2.5 rounded font-body-default text-body-default text-on-surface focus:outline-none focus:bg-surface-container-low transition-colors border border-rule-grey/30" placeholder="e.vance@vanguard-corp.com" required="" type="email"/>
						</div>
					</div>

					<div class="grid grid-cols-1 sm:grid-cols-2 gap-space-md">
						<div class="space-y-1">
							<label class="font-label-mono-sm text-label-mono-sm uppercase text-on-surface-variant block"><?php esc_html_e( 'Organization Name', 'core16' ); ?></label>
							<input class="w-full bg-surface-container-lowest px-space-md py-2.5 rounded font-body-default text-body-default text-on-surface focus:outline-none focus:bg-surface-container-low transition-colors border border-rule-grey/30" placeholder="Vanguard Global Systems" type="text"/>
						</div>
						<div class="space-y-1">
							<label class="font-label-mono-sm text-label-mono-sm uppercase text-on-surface-variant block"><?php esc_html_e( 'Inquiry Classification', 'core16' ); ?></label>
							<select class="w-full bg-surface-container-lowest px-space-md py-2.5 rounded font-body-default text-body-default text-on-surface focus:outline-none focus:bg-surface-container-low transition-colors border border-rule-grey/30">
								<option value="enterprise"><?php esc_html_e( 'Enterprise Pilot Deployment (100+ seats)', 'core16' ); ?></option>
								<option value="api"><?php esc_html_e( 'Enterprise API & Workday Integration', 'core16' ); ?></option>
								<option value="certification"><?php esc_html_e( 'Practitioner Credentialing Program', 'core16' ); ?></option>
								<option value="privacy"><?php esc_html_e( 'Security, DPA & Audit Verification', 'core16' ); ?></option>
								<option value="billing"><?php esc_html_e( 'Commercial Billing & Invoicing Inquiry', 'core16' ); ?></option>
							</select>
						</div>
					</div>

					<div class="space-y-1">
						<label class="font-label-mono-sm text-label-mono-sm uppercase text-on-surface-variant block"><?php esc_html_e( 'Transmission Details', 'core16' ); ?></label>
						<textarea class="w-full bg-surface-container-lowest px-space-md py-2.5 rounded font-body-default text-body-default text-on-surface focus:outline-none focus:bg-surface-container-low transition-colors border border-rule-grey/30" placeholder="<?php esc_attr_e( 'Detail your team scale, desired integration timeline, or regulatory audit inquiries...', 'core16' ); ?>" required="" rows="4"></textarea>
					</div>

					<div class="flex items-start gap-space-sm pt-space-xs">
						<input class="mt-1 accent-primary-container rounded cursor-pointer" id="nda-req" type="checkbox"/>
						<label class="font-body-sm text-body-sm text-on-surface-variant cursor-pointer" for="nda-req">
							<?php esc_html_e( 'Request mutual Enterprise Non-Disclosure Agreement (NDA) prior to technical payload briefing.', 'core16' ); ?>
						</label>
					</div>

					<div class="pt-space-sm flex flex-col sm:flex-row items-center justify-between gap-space-md">
						<button class="w-full sm:w-auto inline-flex items-center justify-center gap-space-xs px-space-xl py-3 rounded-full bg-on-surface text-surface font-body-medium text-body-medium hover:bg-primary transition-all font-semibold shadow-sm cursor-pointer" type="submit">
							<span><?php esc_html_e( 'Submit Advisory Inquiry', 'core16' ); ?></span>
							<span class="material-symbols-outlined text-sm">arrow_forward</span>
						</button>
						<div class="font-label-mono-sm text-label-mono-sm text-on-surface-variant flex items-center gap-1">
							<span class="material-symbols-outlined text-sm text-primary">verified_user</span>
							<?php esc_html_e( 'End-to-End Encrypted Advisory Route', 'core16' ); ?>
						</div>
					</div>

					<div class="hidden p-space-md rounded bg-surface-container-low text-on-surface font-body-sm text-body-sm border border-primary/20" id="form-feedback">
						<?php esc_html_e( '✓ Inquiry securely received. A designated Enterprise Partner Specialist will engage within the designated SLA window.', 'core16' ); ?>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>

<!-- INTERACTIVITY & NAVIGATION SCRIPT -->
<script>
	document.addEventListener('DOMContentLoaded', function() {
		const form = document.getElementById('advisory-form');
		const feedback = document.getElementById('form-feedback');
		if (form && feedback) {
			form.addEventListener('submit', function(e) {
				e.preventDefault();
				feedback.classList.remove('hidden');
				form.reset();
				setTimeout(() => {
					feedback.classList.add('hidden');
				}, 6000);
			});
		}

		const docLinks = document.querySelectorAll('#doc-nav a');
		docLinks.forEach(link => {
			link.addEventListener('click', function(e) {
				docLinks.forEach(l => {
					l.classList.remove('bg-surface-container-lowest', 'text-on-surface', 'shadow-sm', 'font-semibold');
					l.classList.add('text-on-surface-variant');
				});
				this.classList.add('bg-surface-container-lowest', 'text-on-surface', 'shadow-sm', 'font-semibold');
				this.classList.remove('text-on-surface-variant');
			});
		});
	});
</script>
