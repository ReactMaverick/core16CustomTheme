<?php
/**
 * About Page - Three Core Pillars, Scientific Advisory Board & Ethical Charter (Stitch Fidelity)
 *
 * @package Core16
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<!-- SECTION 3: The Three Core Pillars -->
<section class="bg-surface py-margin-lg lg:py-24 border-b border-rule-grey/30">
	<div class="max-w-[1440px] mx-auto px-margin-sm lg:px-margin-lg">
		<div class="flex flex-col md:flex-row md:items-end justify-between mb-space-xl gap-space-md">
			<div>
				<span class="font-label-mono text-label-mono uppercase tracking-wider text-primary"><?php esc_html_e( 'Foundational Architecture', 'core16' ); ?></span>
				<h2 class="font-headline-xl text-headline-xl text-on-surface mt-space-xs"><?php esc_html_e( 'The Three Core Pillars', 'core16' ); ?></h2>
			</div>
			<p class="font-body-default text-body-default text-on-surface-variant max-w-md">
				<?php esc_html_e( 'How Core16 unites mathematical precision, sculptural design philosophy, and immediate enterprise operationalization.', 'core16' ); ?>
			</p>
		</div>

		<div class="grid grid-cols-1 md:grid-cols-3 gap-gutter-lg">
			<!-- Pillar 1: Precision Measurement -->
			<div class="bg-surface-container-lowest p-space-lg rounded-xl shadow-sm flex flex-col justify-between group hover:shadow-md transition-shadow border border-rule-grey/20">
				<div class="space-y-space-md">
					<div class="w-12 h-12 rounded-lg bg-surface-container-low flex items-center justify-center text-primary group-hover:bg-primary group-hover:text-on-primary transition-colors">
						<span class="material-symbols-outlined text-2xl">query_stats</span>
					</div>
					<div class="font-label-mono-sm text-label-mono-sm text-on-surface-variant uppercase"><?php esc_html_e( 'Pillar 01 • Rigor', 'core16' ); ?></div>
					<h3 class="font-headline-md text-headline-md text-on-surface"><?php esc_html_e( 'Precision Measurement', 'core16' ); ?></h3>
					<p class="font-body-default text-body-default text-on-surface-variant leading-relaxed">
						<?php esc_html_e( 'We abandoned categorical typology in favor of Continuous Latent Trait Estimation. Using Item Response Theory (IRT) with polytomous graded response modeling, every question dynamically scales to isolate individual variance with clinical exactness.', 'core16' ); ?>
					</p>
				</div>
				<div class="pt-space-lg mt-space-lg border-t border-rule-grey/20">
					<div class="bg-surface-container-low p-space-md rounded-lg space-y-space-xs">
						<div class="flex justify-between items-center text-on-surface font-label-mono-sm text-label-mono-sm">
							<span><?php esc_html_e( 'IRT 2-PL MODEL', 'core16' ); ?></span>
							<span class="text-primary font-mono">&theta; = &plusmn;3.4&sigma;</span>
						</div>
						<svg class="w-full h-8 text-primary" fill="none" viewBox="0 0 200 40">
							<path d="M 0 35 C 50 35, 70 30, 90 10 C 100 0, 110 0, 120 10 C 140 30, 160 35, 200 35" stroke="currentColor" stroke-linecap="round" stroke-width="2"></path>
							<circle class="fill-primary-container" cx="105" cy="5" r="4"></circle>
						</svg>
					</div>
				</div>
			</div>

			<!-- Pillar 2: Collectible Human Representation (The Figurines) -->
			<div class="bg-surface-container-lowest p-space-lg rounded-xl shadow-sm flex flex-col justify-between group hover:shadow-md transition-shadow border border-rule-grey/20">
				<div class="space-y-space-md">
					<div class="w-12 h-12 rounded-lg bg-surface-container-low flex items-center justify-center text-primary group-hover:bg-primary group-hover:text-on-primary transition-colors">
						<span class="material-symbols-outlined text-2xl">token</span>
					</div>
					<div class="font-label-mono-sm text-label-mono-sm text-on-surface-variant uppercase"><?php esc_html_e( 'Pillar 02 • Aesthetics', 'core16' ); ?></div>
					<h3 class="font-headline-md text-headline-md text-on-surface"><?php esc_html_e( 'Collectible Gravitas', 'core16' ); ?></h3>
					<p class="font-body-default text-body-default text-on-surface-variant leading-relaxed">
						<?php esc_html_e( 'In place of childish clipart mascots, Core16 commissions physical, architectural figurines for each archetype. Sculpted in heavyweight matte resin with brutalist and bauhaus influences, these artifacts reside proudly on executive desks as conversation starters.', 'core16' ); ?>
					</p>
				</div>
				<div class="pt-space-lg mt-space-lg border-t border-rule-grey/20">
					<div class="bg-surface-container-low p-space-md rounded-lg flex items-center gap-space-md">
						<img class="w-16 h-16 rounded-md object-cover shrink-0" alt="<?php esc_attr_e( 'Minimal geometric matte black and teal resin figurine', 'core16' ); ?>" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDtfFb9Jd3ENIbTGSy5efuvSI3FnSzp4YYYik04qQknyNn0r2oKjnalESCLgZZCONT_bCdGJ-hg4v8aX7gSNiikYNaRFHCImCd-_Em5OCvQY9nc84R5qeoLq9C038Z501jO04QkQW6DR_I08FjUxDHVlVWefzNAs4IFqSchr3YNqxln8EjvUdcK0o9zeky6IrXSLqpKF99Vdax4AbNS_zqc280Cq9405yYCjhEoDZEuDhJhgR69xmD3"/>
						<div>
							<div class="font-body-sm text-body-sm text-on-surface font-semibold"><?php esc_html_e( 'Artifact Series 04', 'core16' ); ?></div>
							<div class="font-label-mono-sm text-label-mono-sm text-on-surface-variant"><?php esc_html_e( 'Numbered cast bronze & polymer figurines', 'core16' ); ?></div>
						</div>
					</div>
				</div>
			</div>

			<!-- Pillar 3: Applied Actionability -->
			<div class="bg-surface-container-lowest p-space-lg rounded-xl shadow-sm flex flex-col justify-between group hover:shadow-md transition-shadow border border-rule-grey/20">
				<div class="space-y-space-md">
					<div class="w-12 h-12 rounded-lg bg-surface-container-low flex items-center justify-center text-primary group-hover:bg-primary group-hover:text-on-primary transition-colors">
						<span class="material-symbols-outlined text-2xl">handshake</span>
					</div>
					<div class="font-label-mono-sm text-label-mono-sm text-on-surface-variant uppercase"><?php esc_html_e( 'Pillar 03 • Impact', 'core16' ); ?></div>
					<h3 class="font-headline-md text-headline-md text-on-surface"><?php esc_html_e( 'Applied Actionability', 'core16' ); ?></h3>
					<p class="font-body-default text-body-default text-on-surface-variant leading-relaxed">
						<?php esc_html_e( 'Theory is futile without execution. Every Core16 Dossier delivers actionable dyads: communication scripts for stressful cross-functional handoffs, 90-day developmental milestones, and team synthesis matrices to forecast friction before it hits EBITDA.', 'core16' ); ?>
					</p>
				</div>
				<div class="pt-space-lg mt-space-lg border-t border-rule-grey/20">
					<div class="bg-surface-container-low p-space-md rounded-lg space-y-space-xs">
						<div class="flex justify-between items-center text-on-surface font-label-mono-sm text-label-mono-sm">
							<span><?php esc_html_e( 'DYAD SYNTHESIS SPEED', 'core16' ); ?></span>
							<span class="text-primary font-bold"><?php esc_html_e( '14 Days to ROI', 'core16' ); ?></span>
						</div>
						<div class="w-full bg-surface-container h-2 rounded-full overflow-hidden">
							<div class="bg-primary-container h-full rounded-full" style="width: 82%;"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- SECTION 4: Scientific Advisory & Editorial Board -->
<section class="bg-surface-container-low py-margin-lg lg:py-24 border-b border-rule-grey/30">
	<div class="max-w-[1440px] mx-auto px-margin-sm lg:px-margin-lg">
		<div class="max-w-2xl mb-space-xl">
			<span class="font-label-mono text-label-mono uppercase tracking-wider text-primary"><?php esc_html_e( 'Governance & Calibrations', 'core16' ); ?></span>
			<h2 class="font-headline-xl text-headline-xl text-on-surface mt-space-xs"><?php esc_html_e( 'Scientific Advisory Board', 'core16' ); ?></h2>
			<p class="font-body-default text-body-default text-on-surface-variant mt-space-sm">
				<?php esc_html_e( 'Core16’s algorithmic updates and norming pools are supervised by leading practitioners in psychometrics, organizational neuroscience, and executive talent architecture.', 'core16' ); ?>
			</p>
		</div>

		<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-gutter-lg">
			<!-- Board Member 1 -->
			<div class="bg-surface-container-lowest rounded-xl shadow-sm overflow-hidden flex flex-col justify-between border border-rule-grey/20 hover:shadow-md transition-shadow">
				<div>
					<div class="h-64 w-full bg-surface-container overflow-hidden relative">
						<img class="w-full h-full object-cover grayscale contrast-125 hover:grayscale-0 transition-all duration-500" alt="<?php esc_attr_e( 'Dr. Henrik Lindqvist, PhD', 'core16' ); ?>" src="https://lh3.googleusercontent.com/aida-public/AB6AXuACrSkN7RMxv9MiW2KrtjntZvuPn3ADdPujQ9o5GtyIwgb8ZUfHjpI3IP5QJKnncnV3wfTSLaP7DPbBMcDkkdu2YpXzuSlnBx94hiB1KcF5gr7z4dNoq7Pqkwk0TQ8WzxfTODAfdwNHHRpn3IQ65La86QX5DovyuT513DYvsTgfNb6YWEzIrF9BTo8yFHBMssFPyFYL_szU325cTZsPETNSILZ5AETn8M54fKS2Mh4Eb_kg0_RHLhdh"/>
						<div class="absolute top-3 left-3 bg-surface/90 backdrop-blur-md px-2 py-0.5 rounded text-on-surface font-label-mono-sm text-label-mono-sm">
							<?php esc_html_e( 'METRIC LEAD', 'core16' ); ?>
						</div>
					</div>
					<div class="p-space-lg space-y-space-xs">
						<h4 class="font-headline-sm text-headline-sm text-on-surface"><?php esc_html_e( 'Dr. Henrik Lindqvist, PhD', 'core16' ); ?></h4>
						<p class="font-label-mono-sm text-label-mono-sm text-primary uppercase"><?php esc_html_e( 'Chief Psychometrician', 'core16' ); ?></p>
						<p class="font-body-sm text-body-sm text-on-surface-variant pt-space-xs leading-relaxed">
							<?php esc_html_e( 'Former Senior Fellow at the Cambridge Psychometrics Centre. Author of 34 papers on Item Response Theory and latent factor invariance.', 'core16' ); ?>
						</p>
					</div>
				</div>
				<div class="px-space-lg pb-space-lg pt-space-xs border-t border-rule-grey/10">
					<span class="font-label-mono-sm text-label-mono-sm text-on-surface-variant block uppercase"><?php esc_html_e( 'AFFILIATION', 'core16' ); ?></span>
					<span class="font-body-sm text-body-sm text-on-surface font-medium"><?php esc_html_e( 'Cambridge / Karolinska Inst.', 'core16' ); ?></span>
				</div>
			</div>

			<!-- Board Member 2 -->
			<div class="bg-surface-container-lowest rounded-xl shadow-sm overflow-hidden flex flex-col justify-between border border-rule-grey/20 hover:shadow-md transition-shadow">
				<div>
					<div class="h-64 w-full bg-surface-container overflow-hidden relative">
						<img class="w-full h-full object-cover grayscale contrast-125 hover:grayscale-0 transition-all duration-500" alt="<?php esc_attr_e( 'Dr. Soraya Al-Mansoor, PhD', 'core16' ); ?>" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCPtCTZS6gHB7Oxz4SRe0UHe6w0J4J6VRJnwgoxjtQo-gIs2NZTkzxtyfFYVu5pVz_Oem70Tg_c1rjBjZUVE1nG9G4Yy2UCHWD_LJs3vIESLBvByZ5k3MezapWd6RYeNGrmPHg3Zi_Mumy2veuvBprA6aVAaeLvkEzvEFEKyfo2QBfa7HEzR0MV446lmpS-F-DdolabMrNTssabc6MZOAH6rTkCIcLNBDVKfoinxVIJNvBIlksddA_U"/>
						<div class="absolute top-3 left-3 bg-surface/90 backdrop-blur-md px-2 py-0.5 rounded text-on-surface font-label-mono-sm text-label-mono-sm">
							<?php esc_html_e( 'BEHAVIORAL LAB', 'core16' ); ?>
						</div>
					</div>
					<div class="p-space-lg space-y-space-xs">
						<h4 class="font-headline-sm text-headline-sm text-on-surface"><?php esc_html_e( 'Dr. Soraya Al-Mansoor, PhD', 'core16' ); ?></h4>
						<p class="font-label-mono-sm text-label-mono-sm text-primary uppercase"><?php esc_html_e( 'VP Cognitive Research', 'core16' ); ?></p>
						<p class="font-body-sm text-body-sm text-on-surface-variant pt-space-xs leading-relaxed">
							<?php esc_html_e( 'Stanford Behavioral Design Lab alumna. Investigates situational leadership shifts during high-entropy systemic crises.', 'core16' ); ?>
						</p>
					</div>
				</div>
				<div class="px-space-lg pb-space-lg pt-space-xs border-t border-rule-grey/10">
					<span class="font-label-mono-sm text-label-mono-sm text-on-surface-variant block uppercase"><?php esc_html_e( 'AFFILIATION', 'core16' ); ?></span>
					<span class="font-body-sm text-body-sm text-on-surface font-medium"><?php esc_html_e( 'Stanford / Wharton Behavioral', 'core16' ); ?></span>
				</div>
			</div>

			<!-- Board Member 3 -->
			<div class="bg-surface-container-lowest rounded-xl shadow-sm overflow-hidden flex flex-col justify-between border border-rule-grey/20 hover:shadow-md transition-shadow">
				<div>
					<div class="h-64 w-full bg-surface-container overflow-hidden relative">
						<img class="w-full h-full object-cover grayscale contrast-125 hover:grayscale-0 transition-all duration-500" alt="<?php esc_attr_e( 'Marcus Vance, MBA', 'core16' ); ?>" src="https://lh3.googleusercontent.com/aida-public/AB6AXuB7GCvUN56s9n0nFc7So7PECsCx0_6cvJaJD-EOthO2X5hlhDefvoB93oGLVY4cJtRiWMMzHfKhuc2V3y6o-eBWyg1U1fYC_rZNaYl27IA18GO6hqNwgBWdxl1mr9lIhjFXM-aU3G-c3-WiXuNvdndGg0zzj82VWppMTkuMXz261J9Y-JoXcDvPauY6TC7Cjldf95X8IwVqe_OKXqbyXm7oecdZt1fIY2mZ0wVvGpzy2OdCCp5chGpS"/>
						<div class="absolute top-3 left-3 bg-surface/90 backdrop-blur-md px-2 py-0.5 rounded text-on-surface font-label-mono-sm text-label-mono-sm">
							<?php esc_html_e( 'EXECUTIVE PRACTICE', 'core16' ); ?>
						</div>
					</div>
					<div class="p-space-lg space-y-space-xs">
						<h4 class="font-headline-sm text-headline-sm text-on-surface"><?php esc_html_e( 'Marcus Vance, MBA', 'core16' ); ?></h4>
						<p class="font-label-mono-sm text-label-mono-sm text-primary uppercase"><?php esc_html_e( 'Managing Partner', 'core16' ); ?></p>
						<p class="font-body-sm text-body-sm text-on-surface-variant pt-space-xs leading-relaxed">
							<?php esc_html_e( 'Former Chief People Officer through three Series B-to-IPO expansions. Specializes in C-suite dyad alignment and post-merger integration.', 'core16' ); ?>
						</p>
					</div>
				</div>
				<div class="px-space-lg pb-space-lg pt-space-xs border-t border-rule-grey/10">
					<span class="font-label-mono-sm text-label-mono-sm text-on-surface-variant block uppercase"><?php esc_html_e( 'PRACTICE AREA', 'core16' ); ?></span>
					<span class="font-body-sm text-body-sm text-on-surface font-medium"><?php esc_html_e( 'Enterprise Succession', 'core16' ); ?></span>
				</div>
			</div>

			<!-- Board Member 4 -->
			<div class="bg-surface-container-lowest rounded-xl shadow-sm overflow-hidden flex flex-col justify-between border border-rule-grey/20 hover:shadow-md transition-shadow">
				<div>
					<div class="h-64 w-full bg-surface-container overflow-hidden relative">
						<img class="w-full h-full object-cover grayscale contrast-125 hover:grayscale-0 transition-all duration-500" alt="<?php esc_attr_e( 'Dr. Claire Chen, MD, PhD', 'core16' ); ?>" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAuNlnODndtFQxkOl0-ayk4Oc8t9pW_gw6eIxnXdezOARh7QUcg8ozCOPBkKjq80UDqCdcpByIxqtlaiNNpW34A_-3QlFP8xe9ixMKqfU770Tg4TqgDWQJHRvCDS1Je1Ren3E1Jb5Yxeuf52X0foSkgfEOw0pygvJM2iJ5Ax9LethLgcOceH9GPHKct3rxjV0c-bD0r3K_dCxn2yRHw_iKJOk1U5AXTR121sSDG0J0cf1HgPkF_bvdv"/>
						<div class="absolute top-3 left-3 bg-surface/90 backdrop-blur-md px-2 py-0.5 rounded text-on-surface font-label-mono-sm text-label-mono-sm">
							<?php esc_html_e( 'NEUROSCIENCE', 'core16' ); ?>
						</div>
					</div>
					<div class="p-space-lg space-y-space-xs">
						<h4 class="font-headline-sm text-headline-sm text-on-surface"><?php esc_html_e( 'Dr. Claire Chen, MD, PhD', 'core16' ); ?></h4>
						<p class="font-label-mono-sm text-label-mono-sm text-primary uppercase"><?php esc_html_e( 'Dir. Organizational Neuro', 'core16' ); ?></p>
						<p class="font-body-sm text-body-sm text-on-surface-variant pt-space-xs leading-relaxed">
							<?php esc_html_e( 'Neuroimaging researcher examining biological stress resilience and executive prefrontal cortex activation under cognitive overload.', 'core16' ); ?>
						</p>
					</div>
				</div>
				<div class="px-space-lg pb-space-lg pt-space-xs border-t border-rule-grey/10">
					<span class="font-label-mono-sm text-label-mono-sm text-on-surface-variant block uppercase"><?php esc_html_e( 'AFFILIATION', 'core16' ); ?></span>
					<span class="font-body-sm text-body-sm text-on-surface font-medium"><?php esc_html_e( 'INSEAD / Oxford Neuro', 'core16' ); ?></span>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- SECTION 5: Archival Mission Seal & Global Standards Statement -->
<section class="bg-surface py-margin-lg lg:py-24">
	<div class="max-w-[1440px] mx-auto px-margin-sm lg:px-margin-lg">
		<div class="bg-surface-container-lowest p-space-lg lg:p-space-xl rounded-xl shadow-sm border border-rule-grey/20">
			<div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter-lg items-center">
				<!-- Archival Seal Visual -->
				<div class="lg:col-span-4 flex flex-col items-center justify-center p-space-lg bg-surface-container-low rounded-lg text-center space-y-space-md border border-rule-grey/20">
					<div class="w-24 h-24 rounded-full bg-surface-container-highest flex items-center justify-center text-primary shadow-sm">
						<span class="material-symbols-outlined text-5xl">verified_user</span>
					</div>
					<div>
						<span class="font-headline-sm text-headline-sm text-on-surface block"><?php esc_html_e( 'Core16 Ethical Charter', 'core16' ); ?></span>
						<span class="font-label-mono-sm text-label-mono-sm text-on-surface-variant uppercase tracking-wider"><?php esc_html_e( 'Protocol C-16982', 'core16' ); ?></span>
					</div>
					<div class="font-label-mono-sm text-label-mono-sm text-primary bg-surface-container px-3 py-1 rounded">
						<?php esc_html_e( 'NON-DETERMINISTIC VALIDATED', 'core16' ); ?>
					</div>
				</div>

				<!-- Statement & Standard Details -->
				<div class="lg:col-span-8 space-y-space-md">
					<span class="font-label-mono text-label-mono uppercase tracking-wider text-primary"><?php esc_html_e( 'Ethical Psychometric Code', 'core16' ); ?></span>
					<h3 class="font-headline-lg text-headline-lg text-on-surface"><?php esc_html_e( 'The Standard of Responsible Assessment', 'core16' ); ?></h3>
					<p class="font-body-default text-body-default text-on-surface-variant leading-relaxed">
						<?php esc_html_e( 'We reject the weaponization of personality testing for punitive hiring exclusions. Core16 operates under the strict guidelines of the International Test Commission (ITC) and ISO 10667:2020. Our profiles are tools of self-sovereignty, developmental synthesis, and strategic alignment.', 'core16' ); ?>
					</p>

					<div class="grid grid-cols-1 sm:grid-cols-3 gap-space-md pt-space-xs font-label-mono-sm text-label-mono-sm">
						<div class="p-space-sm bg-surface-container-low rounded border border-rule-grey/20">
							<span class="text-on-surface-variant block uppercase"><?php esc_html_e( 'CALIBRATION FREQUENCY', 'core16' ); ?></span>
							<span class="text-on-surface font-semibold text-label-mono"><?php esc_html_e( 'Quarterly Retesting', 'core16' ); ?></span>
						</div>
						<div class="p-space-sm bg-surface-container-low rounded border border-rule-grey/20">
							<span class="text-on-surface-variant block uppercase"><?php esc_html_e( 'ETHICAL SOVEREIGNTY', 'core16' ); ?></span>
							<span class="text-on-surface font-semibold text-label-mono"><?php esc_html_e( '100% User Owned Data', 'core16' ); ?></span>
						</div>
						<div class="p-space-sm bg-surface-container-low rounded border border-rule-grey/20">
							<span class="text-on-surface-variant block uppercase"><?php esc_html_e( 'CROSS-CULTURAL NORM', 'core16' ); ?></span>
							<span class="text-on-surface font-semibold text-label-mono"><?php esc_html_e( 'Global Cohort (N=184k)', 'core16' ); ?></span>
						</div>
					</div>

					<div class="pt-space-md flex flex-wrap gap-space-md items-center">
						<a class="inline-flex items-center gap-space-sm px-space-lg py-3 rounded-lg bg-[#0D182A] text-on-primary font-body-medium text-body-medium hover:bg-primary-container hover:text-on-primary-container transition-all shadow-sm" href="<?php echo esc_url( home_url( '/the-16-profiles/' ) ); ?>">
							<span><?php esc_html_e( 'Explore the Framework', 'core16' ); ?></span>
							<span class="material-symbols-outlined text-sm">arrow_forward</span>
						</a>
						<a class="inline-flex items-center gap-space-xs px-space-md py-3 rounded-lg text-on-surface hover:text-primary transition-colors font-body-medium text-body-medium" href="<?php echo esc_url( home_url( '/resources/' ) ); ?>">
							<span class="material-symbols-outlined text-lg">description</span>
							<span><?php esc_html_e( 'Download Methodology Whitepaper (PDF)', 'core16' ); ?></span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
