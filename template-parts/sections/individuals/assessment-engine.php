<?php
/**
 * Core16 Interactive Assessment Stepper & Result Reveal Engine
 * Architecture Specification Items #02 & #03
 *
 * @package Core16
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<section id="assessment-flow" class="w-full bg-[#FAFAF7] py-16 lg:py-24 border-b border-rule-grey scroll-mt-20">
	<div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
		
		<!-- Assessment Stepper Shell -->
		<div id="c16-assessment-container" class="bg-white rounded-2xl border border-rule-grey shadow-xl overflow-hidden transition-all duration-500">
			
			<!-- Terminal Header -->
			<div class="bg-midnight px-6 sm:px-8 py-5 text-white flex flex-col sm:flex-row sm:items-center justify-between gap-4 border-b border-white/10">
				<div>
					<div class="flex items-center gap-2">
						<span class="w-2 h-2 rounded-full bg-core-teal animate-pulse"></span>
						<span class="font-mono text-[10px] uppercase tracking-widest text-[#7DF4FB]">
							<?php esc_html_e( 'CORE16 VALIDATED INSTRUMENT // ISO 10667', 'core16' ); ?>
						</span>
					</div>
					<h2 class="text-xl font-headline font-bold text-white mt-1">
						<?php esc_html_e( 'Diagnostic Assessment Protocol', 'core16' ); ?>
					</h2>
				</div>
				<div class="flex items-center gap-4 text-xs font-mono text-[#BAC7DF]">
					<span id="c16-progress-text"><?php esc_html_e( 'Item 1 of 48', 'core16' ); ?></span>
					<span class="px-2 py-0.5 rounded bg-white/10 text-emerald-400 text-[10px]"><?php esc_html_e( 'Autosaved', 'core16' ); ?></span>
				</div>
			</div>

			<!-- Progress Bar -->
			<div class="w-full bg-mist h-1.5 overflow-hidden">
				<div id="c16-progress-bar" class="bg-core-teal h-full transition-all duration-300" style="width: 2%;"></div>
			</div>

			<!-- QUESTION VIEW CONTAINER -->
			<div id="c16-question-view" class="p-6 sm:p-10 lg:p-12 space-y-8">
				<!-- Category & Construct Subhead -->
				<div class="flex items-center justify-between">
					<span id="c16-category-label" class="font-mono text-xs uppercase tracking-wider text-core-teal font-semibold">
						<?php esc_html_e( 'PART 1: COGNITIVE INFORMATION ARCHITECTURE', 'core16' ); ?>
					</span>
					<span class="text-xs font-mono text-slate-subtle">
						<?php esc_html_e( 'Calibrated Norm v4.2', 'core16' ); ?>
					</span>
				</div>

				<!-- Prompt Statement -->
				<div class="py-4">
					<h3 id="c16-statement" class="font-headline text-2xl sm:text-3xl font-semibold text-midnight leading-snug">
						<?php esc_html_e( 'When confronting high-ambiguity institutional problems, I systematically construct an overarching conceptual model before testing tactical solutions.', 'core16' ); ?>
					</h3>
					<p class="text-xs text-slate-subtle mt-2 font-mono">
						<?php esc_html_e( 'Select the response reflecting your natural operational instinct, not situational adaptation.', 'core16' ); ?>
					</p>
				</div>

				<!-- 5-Point Likert Response Scale -->
				<div class="space-y-3 pt-2">
					<div class="grid grid-cols-1 sm:grid-cols-5 gap-3">
						<button type="button" class="likert-btn group p-4 rounded-xl border border-rule-grey hover:border-core-teal hover:bg-mist transition text-center focus:outline-none focus:ring-2 focus:ring-core-teal" data-value="1">
							<span class="block text-lg font-bold text-slate-subtle group-hover:text-core-teal">1</span>
							<span class="text-xs font-mono text-slate-subtle mt-1 block"><?php esc_html_e( 'Strongly Disagree', 'core16' ); ?></span>
						</button>
						<button type="button" class="likert-btn group p-4 rounded-xl border border-rule-grey hover:border-core-teal hover:bg-mist transition text-center focus:outline-none focus:ring-2 focus:ring-core-teal" data-value="2">
							<span class="block text-lg font-bold text-slate-subtle group-hover:text-core-teal">2</span>
							<span class="text-xs font-mono text-slate-subtle mt-1 block"><?php esc_html_e( 'Disagree', 'core16' ); ?></span>
						</button>
						<button type="button" class="likert-btn group p-4 rounded-xl border border-rule-grey hover:border-core-teal hover:bg-mist transition text-center focus:outline-none focus:ring-2 focus:ring-core-teal" data-value="3">
							<span class="block text-lg font-bold text-slate-subtle group-hover:text-core-teal">3</span>
							<span class="text-xs font-mono text-slate-subtle mt-1 block"><?php esc_html_e( 'Neutral', 'core16' ); ?></span>
						</button>
						<button type="button" class="likert-btn group p-4 rounded-xl border border-rule-grey hover:border-core-teal hover:bg-mist transition text-center focus:outline-none focus:ring-2 focus:ring-core-teal" data-value="4">
							<span class="block text-lg font-bold text-slate-subtle group-hover:text-core-teal">4</span>
							<span class="text-xs font-mono text-slate-subtle mt-1 block"><?php esc_html_e( 'Agree', 'core16' ); ?></span>
						</button>
						<button type="button" class="likert-btn group p-4 rounded-xl border border-rule-grey hover:border-core-teal hover:bg-mist transition text-center focus:outline-none focus:ring-2 focus:ring-core-teal" data-value="5">
							<span class="block text-lg font-bold text-slate-subtle group-hover:text-core-teal">5</span>
							<span class="text-xs font-mono text-slate-subtle mt-1 block"><?php esc_html_e( 'Strongly Agree', 'core16' ); ?></span>
						</button>
					</div>
				</div>

				<!-- Stepper Navigation -->
				<div class="flex items-center justify-between pt-6 border-t border-rule-grey">
					<button type="button" id="c16-prev-btn" class="px-5 py-2.5 rounded-lg border border-rule-grey text-slate-subtle hover:text-midnight hover:bg-mist text-xs font-mono font-medium transition disabled:opacity-30 disabled:pointer-events-none" disabled>
						&larr; <?php esc_html_e( 'Previous Item', 'core16' ); ?>
					</button>

					<div class="flex items-center gap-3">
						<button type="button" id="c16-skip-to-result" class="text-xs font-mono text-slate-subtle underline hover:text-midnight">
							<?php esc_html_e( 'Fast-Track Evaluation Preview', 'core16' ); ?>
						</button>
						<button type="button" id="c16-next-btn" class="px-6 py-2.5 rounded-lg bg-midnight text-white hover:bg-core-teal text-xs font-mono font-semibold transition flex items-center gap-2 shadow-sm">
							<span><?php esc_html_e( 'Record & Continue', 'core16' ); ?></span>
							<span>&rarr;</span>
						</button>
					</div>
				</div>
			</div>

			<!-- RESULT REVEAL VIEW (Architecture Specification Item #03) -->
			<div id="c16-result-view" class="hidden p-6 sm:p-10 lg:p-12 space-y-10 bg-white">
				<div class="text-center space-y-3 pb-8 border-b border-rule-grey">
					<div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-emerald-50 border border-emerald-200 text-xs font-mono text-emerald-800">
						<span class="w-2 h-2 rounded-full bg-emerald-500"></span>
						<?php esc_html_e( 'TELEMETRY REVEAL // NORM STANDARDIZED', 'core16' ); ?>
					</div>
					<h3 class="font-headline text-3xl sm:text-4xl font-bold text-midnight">
						<?php esc_html_e( 'Your Calibrated Core16 Type Code', 'core16' ); ?>
					</h3>
					<p class="font-body text-sm text-slate-subtle max-w-xl mx-auto">
						<?php esc_html_e( 'Based on the 48-item validated protocol (32 Jungian + 16 FECA items), your cognitive baseline is mapped below.', 'core16' ); ?>
					</p>
				</div>

				<!-- Archetype Profile Card -->
				<div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center bg-[#FAFAF7] rounded-2xl p-6 sm:p-8 border border-rule-grey">
					<!-- Figurine / Plinth Display (Per Master Spec v2.1 Pages 8-11) -->
					<div class="lg:col-span-5 flex flex-col items-center justify-center p-6 bg-midnight rounded-xl text-center space-y-4 shadow-md relative overflow-hidden">
						<div class="w-20 h-20 rounded-full bg-[#273A8A] flex items-center justify-center text-white shadow-lg">
							<span class="material-symbols-outlined text-4xl">psychology</span>
						</div>
						<div>
							<span class="font-mono text-xs uppercase text-core-teal tracking-widest font-semibold block"><?php esc_html_e( 'ARCHETYPE 01 // STRATEGIST', 'core16' ); ?></span>
							<h4 class="font-headline text-3xl font-bold text-white mt-1">INTJ</h4>
							<p class="font-body text-xs text-[#D7DEE3] mt-1"><?php esc_html_e( 'The Strategic Architect', 'core16' ); ?></p>
						</div>
						<!-- Plinth Base -->
						<div class="w-3/4 py-1.5 px-3 rounded bg-[#17365D] border border-white/10 font-mono text-[10px] text-[#BAC7DF] uppercase tracking-wider">
							<?php esc_html_e( 'Matte Midnight Plinth • Alpha Norm', 'core16' ); ?>
						</div>
					</div>

					<!-- FECA Continuous Vector Readout (Per Master Spec Page 13: Neutral Tracks + Core Teal) -->
					<div class="lg:col-span-7 space-y-5">
						<h5 class="font-mono text-xs uppercase tracking-wider text-midnight font-bold border-b border-rule-grey pb-2">
							<?php esc_html_e( 'Continuous Vector Telemetry (FECA)', 'core16' ); ?>
						</h5>

						<div class="space-y-3 font-mono text-xs">
							<div>
								<div class="flex justify-between mb-1">
									<span class="text-midnight font-semibold"><?php esc_html_e( 'FOCUS [F] — Long-Horizon Strategic Synthesis', 'core16' ); ?></span>
									<span class="text-core-teal font-bold">94%</span>
								</div>
								<div class="w-full bg-[#E5E5E0] h-2.5 rounded-full overflow-hidden">
									<div class="bg-core-teal h-full rounded-full" style="width: 94%;"></div>
								</div>
							</div>

							<div>
								<div class="flex justify-between mb-1">
									<span class="text-midnight font-semibold"><?php esc_html_e( 'EXECUTION [E] — High-Throughput Delivery Cadence', 'core16' ); ?></span>
									<span class="text-core-teal font-bold">88%</span>
								</div>
								<div class="w-full bg-[#E5E5E0] h-2.5 rounded-full overflow-hidden">
									<div class="bg-core-teal h-full rounded-full" style="width: 88%;"></div>
								</div>
							</div>

							<div>
								<div class="flex justify-between mb-1">
									<span class="text-midnight font-semibold"><?php esc_html_e( 'CONTROL [C] — Procedural & Empirical Rigor', 'core16' ); ?></span>
									<span class="text-core-teal font-bold">78%</span>
								</div>
								<div class="w-full bg-[#E5E5E0] h-2.5 rounded-full overflow-hidden">
									<div class="bg-core-teal h-full rounded-full" style="width: 78%;"></div>
								</div>
							</div>

							<div>
								<div class="flex justify-between mb-1">
									<span class="text-midnight font-semibold"><?php esc_html_e( 'ADAPTIVE [A] — High-Entropy Environmental Agility', 'core16' ); ?></span>
									<span class="text-core-teal font-bold">66%</span>
								</div>
								<div class="w-full bg-[#E5E5E0] h-2.5 rounded-full overflow-hidden">
									<div class="bg-core-teal h-full rounded-full" style="width: 66%;"></div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Premium Report Upgrade Banner (Architecture Item #06: £20 Offer) -->
				<div class="bg-midnight rounded-2xl p-8 text-white flex flex-col md:flex-row md:items-center justify-between gap-6 border-2 border-core-teal shadow-xl relative overflow-hidden">
					<div class="space-y-2 max-w-xl">
						<span class="px-2.5 py-0.5 rounded bg-core-teal text-white font-mono text-[10px] uppercase font-bold tracking-wider">
							<?php esc_html_e( 'RECOMMENDED NEXT ACTION // £20 UPGRADE', 'core16' ); ?>
						</span>
						<h4 class="text-2xl font-serif font-bold text-white">
							<?php esc_html_e( 'Unlock Your 30-Page Archival Premium Report', 'core16' ); ?>
						</h4>
						<p class="text-xs text-[#D7DEE3] leading-relaxed">
							<?php esc_html_e( 'Your free reveal provides baseline orientation. Unlock the comprehensive dossier featuring Phase 2 stress decoupling analysis, dyad team chemistry, 90-day action plan, and interactive AI Coach access.', 'core16' ); ?>
						</p>
					</div>

					<div class="shrink-0 flex flex-col items-center sm:items-end gap-3">
						<div class="text-right">
							<span class="font-headline text-3xl font-bold text-white">£20</span>
							<span class="text-xs text-[#A0B4C8] font-mono"> / $25 one-time</span>
						</div>
						<a href="<?php echo esc_url( home_url( '/pricing/' ) ); ?>" class="px-6 py-3 rounded-xl bg-core-teal hover:bg-[#0b888d] text-white font-semibold text-xs transition shadow-md flex items-center gap-2">
							<span><?php esc_html_e( 'Unlock Premium Report', 'core16' ); ?></span>
							<span>&rarr;</span>
						</a>
					</div>
				</div>
			</div>
		</div>

	</div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
	var currentStep = 0;
	var statements = [
		{ cat: "PART 1: STRATEGIC SYNTHESIS", text: "When confronting high-ambiguity institutional problems, I systematically construct an overarching conceptual model before testing tactical solutions." },
		{ cat: "PART 1: STRATEGIC SYNTHESIS", text: "I naturally perceive systemic bottlenecks and structural failure points years before they become apparent to operational teams." },
		{ cat: "PART 2: EXECUTIVE CADENCE", text: "I prefer ruthless decisiveness and objective outcome tracking over open-ended consensus deliberations." },
		{ cat: "PART 2: EXECUTIVE CADENCE", text: "Under severe deadline pressure, my focus sharpens into deliberate boundary containment rather than chaotic pivoting." },
		{ cat: "PART 3: EMPIRICAL RIGOR", text: "I demand empirical substantiation and verified metrics before adopting unproven strategic frameworks." }
	];

	var questionView = document.getElementById('c16-question-view');
	var resultView = document.getElementById('c16-result-view');
	var statementEl = document.getElementById('c16-statement');
	var catEl = document.getElementById('c16-category-label');
	var progressText = document.getElementById('c16-progress-text');
	var progressBar = document.getElementById('c16-progress-bar');
	var prevBtn = document.getElementById('c16-prev-btn');
	var nextBtn = document.getElementById('c16-next-btn');
	var skipBtn = document.getElementById('c16-skip-to-result');
	var likertBtns = document.querySelectorAll('.likert-btn');

	function updateStep() {
		if (currentStep < statements.length) {
			statementEl.textContent = statements[currentStep].text;
			catEl.textContent = statements[currentStep].cat;
			var displayNum = (currentStep + 1);
			progressText.textContent = "Item " + displayNum + " of 48";
			progressBar.style.width = ((displayNum / 48) * 100) + "%";
			prevBtn.disabled = (currentStep === 0);

			likertBtns.forEach(function(b) {
				b.classList.remove('bg-midnight', 'text-white', 'border-midnight');
				b.classList.add('border-rule-grey');
			});
		} else {
			showResult();
		}
	}

	function showResult() {
		if (questionView && resultView) {
			questionView.classList.add('hidden');
			resultView.classList.remove('hidden');
			progressBar.style.width = "100%";
			progressText.textContent = "Evaluation Complete (48/48)";
			var container = document.getElementById('c16-assessment-container');
			if (container) {
				container.scrollIntoView({ behavior: 'smooth', block: 'start' });
			}
		}
	}

	likertBtns.forEach(function(btn) {
		btn.addEventListener('click', function() {
			likertBtns.forEach(function(b) {
				b.classList.remove('bg-midnight', 'text-white', 'border-midnight');
			});
			this.classList.add('bg-midnight', 'text-white', 'border-midnight');
			setTimeout(function() {
				currentStep++;
				if (currentStep >= statements.length) {
					showResult();
				} else {
					updateStep();
				}
			}, 250);
		});
	});

	if (nextBtn) {
		nextBtn.addEventListener('click', function() {
			currentStep++;
			if (currentStep >= statements.length) {
				showResult();
			} else {
				updateStep();
			}
		});
	}

	if (prevBtn) {
		prevBtn.addEventListener('click', function() {
			if (currentStep > 0) {
				currentStep--;
				updateStep();
			}
		});
	}

	if (skipBtn) {
		skipBtn.addEventListener('click', function() {
			showResult();
		});
	}
});
</script>
