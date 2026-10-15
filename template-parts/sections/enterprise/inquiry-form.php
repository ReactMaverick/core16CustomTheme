<?php
/**
 * Enterprise Page - Enterprise Pilot Consultation & Inquiry Form Module (Stitch Fidelity)
 * Screen: "For Organisations" / Enterprise Solutions Page (20a9a1e7c43d4e27bbfe246b8a189ef1)
 *
 * @package Core16
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<!-- SECTION 5: ENTERPRISE TIERING & VOLUME INQUIRY FORM -->
<section class="bg-surface py-space-xl lg:py-24 px-margin-sm lg:px-margin-lg" id="enterprise-inquiry">
	<div class="max-w-[1440px] mx-auto">
		<div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter-lg items-start">
			<!-- Left: Consultation & Pilot Overview -->
			<div class="lg:col-span-5 space-y-space-lg">
				<div>
					<span class="font-label-mono text-label-mono uppercase tracking-widest text-primary block mb-space-xs font-semibold">
						<?php esc_html_e( 'Institutional Deployment', 'core16' ); ?>
					</span>
					<h2 class="font-headline-xl text-headline-xl text-on-surface font-semibold tracking-tight">
						<?php esc_html_e( 'Begin an Enterprise Pilot', 'core16' ); ?>
					</h2>
					<p class="font-body-lead text-body-lead text-on-surface-variant mt-2 leading-relaxed">
						<?php esc_html_e( 'Assess an initial leadership cohort or roll out across the entire organization. We customize telemetry to your operational taxonomy.', 'core16' ); ?>
					</p>
				</div>

				<div class="space-y-space-md">
					<div class="flex items-start gap-space-md p-space-md rounded-xl bg-surface-container-lowest shadow-sm border border-rule-grey/20">
						<span class="material-symbols-outlined text-primary text-2xl">psychology</span>
						<div>
							<h4 class="font-headline-sm text-headline-sm text-on-surface font-semibold">
								<?php esc_html_e( 'Dedicated I/O Psychologist Advisory', 'core16' ); ?>
							</h4>
							<p class="font-body-sm text-body-sm text-on-surface-variant mt-1 leading-relaxed">
								<?php esc_html_e( 'Direct consultation with psychometricians to interpret leadership dyad dynamics and calibrate baseline models.', 'core16' ); ?>
							</p>
						</div>
					</div>

					<div class="flex items-start gap-space-md p-space-md rounded-xl bg-surface-container-lowest shadow-sm border border-rule-grey/20">
						<span class="material-symbols-outlined text-primary text-2xl">integration_instructions</span>
						<div>
							<h4 class="font-headline-sm text-headline-sm text-on-surface font-semibold">
								<?php esc_html_e( 'HRIS & ATS Bi-Directional Sync', 'core16' ); ?>
							</h4>
							<p class="font-body-sm text-body-sm text-on-surface-variant mt-1 leading-relaxed">
								<?php esc_html_e( 'Native connectors for Workday, Greenhouse, Lever, and Lattice with automated candidate invite triggers.', 'core16' ); ?>
							</p>
						</div>
					</div>

					<div class="flex items-start gap-space-md p-space-md rounded-xl bg-surface-container-lowest shadow-sm border border-rule-grey/20">
						<span class="material-symbols-outlined text-primary text-2xl">groups</span>
						<div>
							<h4 class="font-headline-sm text-headline-sm text-on-surface font-semibold">
								<?php esc_html_e( 'Executive Leadership Cohorts', 'core16' ); ?>
							</h4>
							<p class="font-body-sm text-body-sm text-on-surface-variant mt-1 leading-relaxed">
								<?php esc_html_e( 'Facilitated synthesis workshops tailored for C-suite alignment, Board presentations, and critical project launches.', 'core16' ); ?>
							</p>
						</div>
					</div>
				</div>
			</div>

			<!-- Right: Inquiry Form Module -->
			<div class="lg:col-span-7 bg-surface-container-lowest p-space-lg lg:p-space-xl rounded-xl shadow-xl border border-rule-grey/20">
				<form class="space-y-space-md" id="enterprisePilotForm" onsubmit="event.preventDefault(); document.getElementById('successNotice').classList.remove('hidden'); this.reset();">
					<div class="grid grid-cols-1 sm:grid-cols-2 gap-space-md">
						<div class="space-y-space-xs">
							<label class="block font-label-mono text-label-mono text-on-surface-variant uppercase font-medium">
								<?php esc_html_e( 'Full Name', 'core16' ); ?>
							</label>
							<input class="w-full h-11 px-space-md rounded-lg bg-surface text-on-surface placeholder:text-on-surface-variant/50 focus:outline-none focus:ring-2 focus:ring-primary font-body-default text-body-default border border-rule-grey/30" placeholder="<?php esc_attr_e( 'Sarah Jenkins', 'core16' ); ?>" required="" type="text"/>
						</div>
						<div class="space-y-space-xs">
							<label class="block font-label-mono text-label-mono text-on-surface-variant uppercase font-medium">
								<?php esc_html_e( 'Work Email', 'core16' ); ?>
							</label>
							<input class="w-full h-11 px-space-md rounded-lg bg-surface text-on-surface placeholder:text-on-surface-variant/50 focus:outline-none focus:ring-2 focus:ring-primary font-body-default text-body-default border border-rule-grey/30" placeholder="sarah.jenkins@enterprise.com" required="" type="email"/>
						</div>
					</div>

					<div class="grid grid-cols-1 sm:grid-cols-2 gap-space-md">
						<div class="space-y-space-xs">
							<label class="block font-label-mono text-label-mono text-on-surface-variant uppercase font-medium">
								<?php esc_html_e( 'Company Name', 'core16' ); ?>
							</label>
							<input class="w-full h-11 px-space-md rounded-lg bg-surface text-on-surface placeholder:text-on-surface-variant/50 focus:outline-none focus:ring-2 focus:ring-primary font-body-default text-body-default border border-rule-grey/30" placeholder="Acme International" required="" type="text"/>
						</div>
						<div class="space-y-space-xs">
							<label class="block font-label-mono text-label-mono text-on-surface-variant uppercase font-medium">
								<?php esc_html_e( 'Organization Size', 'core16' ); ?>
							</label>
							<select class="w-full h-11 px-space-md rounded-lg bg-surface text-on-surface focus:outline-none focus:ring-2 focus:ring-primary font-body-default text-body-default border border-rule-grey/30">
								<option value="50"><?php esc_html_e( '< 50 employees', 'core16' ); ?></option>
								<option value="250"><?php esc_html_e( '50 – 250 employees', 'core16' ); ?></option>
								<option value="1000"><?php esc_html_e( '250 – 1,000 employees', 'core16' ); ?></option>
								<option selected="" value="10000"><?php esc_html_e( '1,000 – 10,000 employees', 'core16' ); ?></option>
								<option value="10000plus"><?php esc_html_e( '10,000+ Global Enterprise', 'core16' ); ?></option>
							</select>
						</div>
					</div>

					<div class="space-y-space-xs">
						<label class="block font-label-mono text-label-mono text-on-surface-variant uppercase font-medium">
							<?php esc_html_e( 'Primary Strategic Objective', 'core16' ); ?>
						</label>
						<select class="w-full h-11 px-space-md rounded-lg bg-surface text-on-surface focus:outline-none focus:ring-2 focus:ring-primary font-body-default text-body-default border border-rule-grey/30">
							<option value="hiring"><?php esc_html_e( 'Executive Hiring & Board Succession', 'core16' ); ?></option>
							<option value="friction"><?php esc_html_e( 'Cross-Functional Friction Resolution', 'core16' ); ?></option>
							<option value="leadership"><?php esc_html_e( 'Enterprise Leadership Development', 'core16' ); ?></option>
							<option value="ma"><?php esc_html_e( 'Post-Merger Cultural Integration (M&A)', 'core16' ); ?></option>
							<option value="platform"><?php esc_html_e( 'Enterprise-Wide Psychometric Deployment', 'core16' ); ?></option>
						</select>
					</div>

					<div class="space-y-space-xs">
						<label class="block font-label-mono text-label-mono text-on-surface-variant uppercase font-medium">
							<?php esc_html_e( 'Deployment Notes / Specific Requirements (Optional)', 'core16' ); ?>
						</label>
						<textarea class="w-full p-space-md rounded-lg bg-surface text-on-surface placeholder:text-on-surface-variant/50 focus:outline-none focus:ring-2 focus:ring-primary font-body-default text-body-default border border-rule-grey/30" placeholder="<?php esc_attr_e( 'Tell us about your current organizational scale, target timeline, or specific challenges...', 'core16' ); ?>" rows="3"></textarea>
					</div>

					<div class="pt-space-xs flex items-center justify-between flex-wrap gap-space-md">
						<button class="w-full sm:w-auto h-12 px-space-xl rounded-lg bg-inverse-surface text-inverse-on-surface hover:bg-on-surface-variant font-body-medium text-body-medium font-semibold transition-all shadow-sm cursor-pointer" type="submit">
							<?php esc_html_e( 'Request Custom Proposal', 'core16' ); ?>
						</button>
						<div class="font-label-mono-sm text-label-mono-sm text-on-surface-variant flex items-center gap-1">
							<span class="material-symbols-outlined text-sm text-primary">lock</span>
							<span><?php esc_html_e( 'Encrypted transmission • NDA covered', 'core16' ); ?></span>
						</div>
					</div>

					<!-- Success Confirmation Banner -->
					<div class="hidden p-space-md rounded-lg bg-surface-container-low text-primary flex items-center gap-space-sm font-body-sm text-body-sm border border-primary/20" id="successNotice">
						<span class="material-symbols-outlined">check_circle</span>
						<span><?php esc_html_e( 'Inquiry received. An Enterprise Principal will reach out within 4 business hours.', 'core16' ); ?></span>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>

<!-- Inline Tab Switcher Logic -->
<script>
	function switchTab(index) {
		const tabs = document.querySelectorAll('.tab-btn');
		const panels = document.querySelectorAll('.tab-panel');

		tabs.forEach((tab, i) => {
			if (i === index) {
				tab.classList.add('bg-surface-container-lowest', 'text-primary', 'font-semibold', 'shadow-sm');
				tab.classList.remove('text-on-surface-variant');
			} else {
				tab.classList.remove('bg-surface-container-lowest', 'text-primary', 'font-semibold', 'shadow-sm');
				tab.classList.add('text-on-surface-variant');
			}
		});

		panels.forEach((panel, i) => {
			if (i === index) {
				panel.classList.remove('hidden');
				panel.classList.add('grid');
			} else {
				panel.classList.add('hidden');
				panel.classList.remove('grid');
			}
		});
	}
</script>
