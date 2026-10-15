<?php
/**
 * Logged In User Dashboard for Client Portal
 *
 * @package Core16
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$current_user = wp_get_current_user();
$logout_url   = wp_nonce_url( add_query_arg( 'core16_action', 'logout', home_url( '/client-login/' ) ), 'core16_logout' );
?>

<section class="relative py-16 lg:py-24 bg-[#FAFAF7]">
	<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
		<!-- Header / Clearance Bar -->
		<div class="bg-white rounded-2xl border border-[#E5E5E0] p-6 lg:p-8 shadow-sm mb-8 flex flex-col md:flex-row md:items-center justify-between gap-6">
			<div class="flex items-center gap-4">
				<div class="w-14 h-14 rounded-2xl bg-[#1A2530] text-white flex items-center justify-center font-serif text-2xl font-bold">
					<?php echo esc_html( strtoupper( substr( $current_user->display_name, 0, 1 ) ) ); ?>
				</div>
				<div>
					<div class="flex items-center gap-2">
						<span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full bg-emerald-50 border border-emerald-200 text-[10px] font-mono uppercase tracking-wider text-emerald-800">
							<span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span>
							Authenticated Clearance
						</span>
						<span class="text-xs text-[#7A8892] font-mono">ID: #<?php echo esc_html( $current_user->ID ); ?></span>
					</div>
					<h1 class="text-2xl font-serif text-[#1A2530] mt-1">
						<?php
						/* translators: %s: User display name */
						printf( esc_html__( 'Terminal Active: %s', 'core16' ), esc_html( $current_user->display_name ) );
						?>
					</h1>
					<p class="text-xs text-[#5A6872] font-mono mt-0.5">
						<?php echo esc_html( $current_user->user_email ); ?>
					</p>
				</div>
			</div>

			<div class="flex items-center gap-3">
				<a
					href="<?php echo esc_url( $logout_url ); ?>"
					class="inline-flex items-center gap-2 px-4 py-2.5 rounded-xl border border-rose-200 bg-rose-50/50 text-rose-700 hover:bg-rose-100 text-xs font-mono font-medium transition"
				>
					<svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
					</svg>
					<span><?php esc_html_e( 'Terminate Session (Log Out)', 'core16' ); ?></span>
				</a>
			</div>
		</div>

		<!-- Grid of Operations -->
		<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
			<!-- Card 1: 16 Profiles Directory -->
			<div class="bg-white rounded-2xl border border-[#E5E5E0] p-6 hover:shadow-lg transition group">
				<div class="w-10 h-10 rounded-xl bg-[#1A2530]/5 text-[#1A2530] flex items-center justify-center mb-4 group-hover:bg-[#1A2530] group-hover:text-white transition">
					<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
					</svg>
				</div>
				<h2 class="text-base font-serif font-bold text-[#1A2530] mb-2"><?php esc_html_e( 'The 16 Profiles Taxonomy', 'core16' ); ?></h2>
				<p class="text-xs text-[#5A6872] leading-relaxed mb-4">
					<?php esc_html_e( 'Access complete psychometric dossiers, FECA cognitive engine equations, and operational variance metrics for all 16 archetypes.', 'core16' ); ?>
				</p>
				<a href="<?php echo esc_url( home_url( '/the-16-profiles/' ) ); ?>" class="inline-flex items-center gap-1.5 text-xs font-mono font-bold text-[#1A2530] group-hover:text-[#008080] transition">
					<span><?php esc_html_e( 'Open Directory', 'core16' ); ?></span>
					<span>&rarr;</span>
				</a>
			</div>

			<!-- Card 2: Individual Assessment -->
			<div class="bg-white rounded-2xl border border-[#E5E5E0] p-6 hover:shadow-lg transition group">
				<div class="w-10 h-10 rounded-xl bg-[#1A2530]/5 text-[#1A2530] flex items-center justify-center mb-4 group-hover:bg-[#1A2530] group-hover:text-white transition">
					<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"/>
					</svg>
				</div>
				<h2 class="text-base font-serif font-bold text-[#1A2530] mb-2"><?php esc_html_e( 'Psychometric Evaluation', 'core16' ); ?></h2>
				<p class="text-xs text-[#5A6872] leading-relaxed mb-4">
					<?php esc_html_e( 'Complete or re-evaluate your 64-vector dynamic assessment across the four cognitive territories.', 'core16' ); ?>
				</p>
				<a href="<?php echo esc_url( home_url( '/individuals/#assessment' ) ); ?>" class="inline-flex items-center gap-1.5 text-xs font-mono font-bold text-[#1A2530] group-hover:text-[#008080] transition">
					<span><?php esc_html_e( 'Launch Assessment Engine', 'core16' ); ?></span>
					<span>&rarr;</span>
				</a>
			</div>

			<!-- Card 3: Enterprise Architecture -->
			<div class="bg-white rounded-2xl border border-[#E5E5E0] p-6 hover:shadow-lg transition group">
				<div class="w-10 h-10 rounded-xl bg-[#1A2530]/5 text-[#1A2530] flex items-center justify-center mb-4 group-hover:bg-[#1A2530] group-hover:text-white transition">
					<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
					</svg>
				</div>
				<h2 class="text-base font-serif font-bold text-[#1A2530] mb-2"><?php esc_html_e( 'Enterprise Matrix & Teams', 'core16' ); ?></h2>
				<p class="text-xs text-[#5A6872] leading-relaxed mb-4">
					<?php esc_html_e( 'Deploy cognitive heatmaps, stress-decoupling models, and executive leadership pipelines.', 'core16' ); ?>
				</p>
				<a href="<?php echo esc_url( home_url( '/enterprise/' ) ); ?>" class="inline-flex items-center gap-1.5 text-xs font-mono font-bold text-[#1A2530] group-hover:text-[#008080] transition">
					<span><?php esc_html_e( 'Enterprise Solutions', 'core16' ); ?></span>
					<span>&rarr;</span>
				</a>
			</div>

			<!-- Card 4: Methodological Papers -->
			<div class="bg-white rounded-2xl border border-[#E5E5E0] p-6 hover:shadow-lg transition group">
				<div class="w-10 h-10 rounded-xl bg-[#1A2530]/5 text-[#1A2530] flex items-center justify-center mb-4 group-hover:bg-[#1A2530] group-hover:text-white transition">
					<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
					</svg>
				</div>
				<h2 class="text-base font-serif font-bold text-[#1A2530] mb-2"><?php esc_html_e( 'Science & Validation Papers', 'core16' ); ?></h2>
				<p class="text-xs text-[#5A6872] leading-relaxed mb-4">
					<?php esc_html_e( 'Explore statistical validity studies, test-retest reliability metrics (r = 0.91), and factor analysis whitepapers.', 'core16' ); ?>
				</p>
				<a href="<?php echo esc_url( home_url( '/science-methodology/' ) ); ?>" class="inline-flex items-center gap-1.5 text-xs font-mono font-bold text-[#1A2530] group-hover:text-[#008080] transition">
					<span><?php esc_html_e( 'Read Methodology', 'core16' ); ?></span>
					<span>&rarr;</span>
				</a>
			</div>

			<!-- Card 5: Core16 Review Resources -->
			<div class="bg-white rounded-2xl border border-[#E5E5E0] p-6 hover:shadow-lg transition group">
				<div class="w-10 h-10 rounded-xl bg-[#1A2530]/5 text-[#1A2530] flex items-center justify-center mb-4 group-hover:bg-[#1A2530] group-hover:text-white transition">
					<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/>
					</svg>
				</div>
				<h2 class="text-base font-serif font-bold text-[#1A2530] mb-2"><?php esc_html_e( 'The Core16 Review', 'core16' ); ?></h2>
				<p class="text-xs text-[#5A6872] leading-relaxed mb-4">
					<?php esc_html_e( 'Quarterly publications, case studies on Fortune 500 cognitive engineering, and psychometric monographs.', 'core16' ); ?>
				</p>
				<a href="<?php echo esc_url( home_url( '/resources/' ) ); ?>" class="inline-flex items-center gap-1.5 text-xs font-mono font-bold text-[#1A2530] group-hover:text-[#008080] transition">
					<span><?php esc_html_e( 'Browse Publications', 'core16' ); ?></span>
					<span>&rarr;</span>
				</a>
			</div>

			<!-- Card 6: Technical Support Desk -->
			<div class="bg-white rounded-2xl border border-[#E5E5E0] p-6 hover:shadow-lg transition group">
				<div class="w-10 h-10 rounded-xl bg-[#1A2530]/5 text-[#1A2530] flex items-center justify-center mb-4 group-hover:bg-[#1A2530] group-hover:text-white transition">
					<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"/>
					</svg>
				</div>
				<h2 class="text-base font-serif font-bold text-[#1A2530] mb-2"><?php esc_html_e( 'Technical Support Desk', 'core16' ); ?></h2>
				<p class="text-xs text-[#5A6872] leading-relaxed mb-4">
					<?php esc_html_e( 'Direct psychometric inquiry ticket desk, API credential management, and enterprise SLA support.', 'core16' ); ?>
				</p>
				<a href="<?php echo esc_url( home_url( '/support/' ) ); ?>" class="inline-flex items-center gap-1.5 text-xs font-mono font-bold text-[#1A2530] group-hover:text-[#008080] transition">
					<span><?php esc_html_e( 'Contact Desk', 'core16' ); ?></span>
					<span>&rarr;</span>
				</a>
			</div>
		</div>

		<!-- SECTION: CORE16 AI COACH CONVERSATIONAL MODULE (Architecture Item #08) -->
		<div class="mt-12 bg-midnight rounded-2xl border border-white/10 p-8 lg:p-10 shadow-2xl relative overflow-hidden">
			<!-- Subtle background grid -->
			<div class="absolute inset-0 opacity-[0.04] pointer-events-none" style="background-image: radial-gradient(#0EA5AB 1px, transparent 1px); background-size: 20px 20px;"></div>

			<div class="relative z-10 space-y-8">
				<div class="flex flex-col md:flex-row md:items-center justify-between gap-4 border-b border-white/10 pb-6">
					<div>
						<div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-core-teal/15 border border-core-teal/30 text-xs font-mono text-[#7DF4FB] uppercase tracking-wider mb-2">
							<span class="w-2 h-2 rounded-full bg-core-teal animate-pulse"></span>
							<?php esc_html_e( 'Core16 AI Coach // Active Terminal', 'core16' ); ?>
						</div>
						<h2 class="text-2xl font-serif text-white font-bold">
							<?php esc_html_e( 'Conversational Guidance & Strategic Telemetry', 'core16' ); ?>
						</h2>
						<p class="text-xs text-[#A0B4C8] mt-1 max-w-2xl leading-relaxed">
							<?php esc_html_e( 'Informed strictly by permitted Core16 psychometric telemetry and your personal leadership context. Bounded within established analytical models to prevent uncalibrated diagnostic drift.', 'core16' ); ?>
						</p>
					</div>

					<div class="flex items-center gap-2 font-mono text-[11px] text-slate-400">
						<span class="w-2 h-2 rounded-full bg-emerald-400"></span>
						<span><?php esc_html_e( 'Model: Core16-L4-Empirical', 'core16' ); ?></span>
					</div>
				</div>

				<!-- Suggested Starting Prompts (Per Architecture Spec #08) -->
				<div>
					<span class="block text-xs font-mono uppercase tracking-wider text-[#BAC7DF] mb-3 font-semibold">
						<?php esc_html_e( 'Recommended Starting Inquiries (Select to Inject)', 'core16' ); ?>
					</span>
					<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-3">
						<button type="button" class="ai-prompt-btn text-left p-3.5 rounded-xl bg-[#132238] hover:bg-[#17365D] border border-white/10 transition text-xs group" data-prompt="<?php esc_attr_e( 'Explain the tension between my primary cognitive domain and secondary FECA baseline.', 'core16' ); ?>">
							<span class="text-core-teal font-mono text-[10px] block mb-1"><?php esc_html_e( '01 // Understand My Results', 'core16' ); ?></span>
							<span class="text-white font-medium group-hover:text-[#7DF4FB] transition"><?php esc_html_e( 'Deconstruct primary vs. secondary cognitive tension', 'core16' ); ?></span>
						</button>

						<button type="button" class="ai-prompt-btn text-left p-3.5 rounded-xl bg-[#132238] hover:bg-[#17365D] border border-white/10 transition text-xs group" data-prompt="<?php esc_attr_e( 'What executive roles and organizational environments maximize my archetype leverage?', 'core16' ); ?>">
							<span class="text-core-teal font-mono text-[10px] block mb-1"><?php esc_html_e( '02 // Career & Leverage', 'core16' ); ?></span>
							<span class="text-white font-medium group-hover:text-[#7DF4FB] transition"><?php esc_html_e( 'Analyze high-leverage roles for my archetype', 'core16' ); ?></span>
						</button>

						<button type="button" class="ai-prompt-btn text-left p-3.5 rounded-xl bg-[#132238] hover:bg-[#17365D] border border-white/10 transition text-xs group" data-prompt="<?php esc_attr_e( 'How do I mitigate cognitive fatigue and operational blindspots under prolonged ambiguity?', 'core16' ); ?>">
							<span class="text-core-teal font-mono text-[10px] block mb-1"><?php esc_html_e( '03 // Leadership Under Stress', 'core16' ); ?></span>
							<span class="text-white font-medium group-hover:text-[#7DF4FB] transition"><?php esc_html_e( 'Mitigate Phase 2 stress decoupling derailers', 'core16' ); ?></span>
						</button>

						<button type="button" class="ai-prompt-btn text-left p-3.5 rounded-xl bg-[#132238] hover:bg-[#17365D] border border-white/10 transition text-xs group" data-prompt="<?php esc_attr_e( 'How can I adapt my communication cadence when collaborating with opposing archetypes?', 'core16' ); ?>">
							<span class="text-core-teal font-mono text-[10px] block mb-1"><?php esc_html_e( '04 // Relationships & Teams', 'core16' ); ?></span>
							<span class="text-white font-medium group-hover:text-[#7DF4FB] transition"><?php esc_html_e( 'Prevent communication friction across dyad types', 'core16' ); ?></span>
						</button>

						<button type="button" class="ai-prompt-btn text-left p-3.5 rounded-xl bg-[#132238] hover:bg-[#17365D] border border-white/10 transition text-xs group" data-prompt="<?php esc_attr_e( 'Recommend 3 concrete behavioral experiments to cultivate my auxiliary cognitive function.', 'core16' ); ?>">
							<span class="text-core-teal font-mono text-[10px] block mb-1"><?php esc_html_e( '05 // Personal Growth', 'core16' ); ?></span>
							<span class="text-white font-medium group-hover:text-[#7DF4FB] transition"><?php esc_html_e( '3 behavioral micro-experiments for this quarter', 'core16' ); ?></span>
						</button>

						<button type="button" class="ai-prompt-btn text-left p-3.5 rounded-xl bg-[#132238] hover:bg-[#17365D] border border-white/10 transition text-xs group" data-prompt="<?php esc_attr_e( 'What are the statistical reliability parameters and normative benchmarks for my profile?', 'core16' ); ?>">
							<span class="text-core-teal font-mono text-[10px] block mb-1"><?php esc_html_e( '06 // Psychometric Calibration', 'core16' ); ?></span>
							<span class="text-white font-medium group-hover:text-[#7DF4FB] transition"><?php esc_html_e( 'Review test-retest reliability & cohort benchmarks', 'core16' ); ?></span>
						</button>
					</div>
				</div>

				<!-- Conversational Interaction Area -->
				<div class="bg-[#0A1220] rounded-xl border border-white/10 p-5 space-y-4">
					<!-- Dialogue Stream Preview -->
					<div id="ai-coach-output" class="space-y-3 text-xs text-[#D7DEE3] max-h-60 overflow-y-auto pr-2">
						<div class="flex items-start gap-3">
							<div class="w-6 h-6 rounded-full bg-core-teal text-white flex items-center justify-center shrink-0 font-mono text-[10px] font-bold">
								AI
							</div>
							<div class="bg-[#132238] rounded-xl p-3.5 border border-white/5 space-y-1.5 flex-1">
								<p class="font-semibold text-[#7DF4FB] font-mono text-[11px]"><?php esc_html_e( 'Core16 Telemetry Initialized', 'core16' ); ?></p>
								<p class="leading-relaxed">
									<?php
									/* translators: %s: User display name */
									printf( esc_html__( 'Greetings, %s. Your normative profile has been calibrated against the ISO 10667 standard cohort. Select any inquiry above or enter a contextual management challenge below to begin our structured coaching dialogue.', 'core16' ), esc_html( $current_user->display_name ) );
									?>
								</p>
							</div>
						</div>
					</div>

					<!-- Prompt Input Box -->
					<div class="flex flex-col sm:flex-row items-center gap-3 pt-2">
						<input
							type="text"
							id="ai-coach-input"
							placeholder="<?php esc_attr_e( 'Enter a strategic question or choose a prompt above...', 'core16' ); ?>"
							class="w-full px-4 py-3 rounded-xl border border-slate-700 bg-[#132238] text-white placeholder-[#8A95AC] text-xs focus:outline-none focus:ring-2 focus:ring-core-teal focus:border-transparent transition"
						/>
						<button
							type="button"
							id="ai-coach-send"
							class="w-full sm:w-auto px-6 py-3 rounded-xl bg-core-teal hover:bg-[#0b888d] text-white font-semibold text-xs transition flex items-center justify-center gap-2 shrink-0 shadow-md"
						>
							<span><?php esc_html_e( 'Submit Inquiry', 'core16' ); ?></span>
							<svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
							</svg>
						</button>
					</div>

					<!-- Compliance Footnote -->
					<div class="flex items-center justify-between pt-2 border-t border-white/5 text-[10px] font-mono text-[#8C98A0]">
						<span><?php esc_html_e( 'Strict Guardrails: Follows Core16 psychometric taxonomy; does not diagnose psychiatric conditions.', 'core16' ); ?></span>
						<span class="text-core-teal"><?php esc_html_e( 'Session Encrypted', 'core16' ); ?></span>
					</div>
				</div>
			</div>
		</div>

		<script>
		document.addEventListener('DOMContentLoaded', function() {
			var input = document.getElementById('ai-coach-input');
			var sendBtn = document.getElementById('ai-coach-send');
			var output = document.getElementById('ai-coach-output');
			var promptBtns = document.querySelectorAll('.ai-prompt-btn');

			promptBtns.forEach(function(btn) {
				btn.addEventListener('click', function() {
					var text = this.getAttribute('data-prompt');
					if (input) {
						input.value = text;
						input.focus();
					}
				});
			});

			if (sendBtn && input && output) {
				sendBtn.addEventListener('click', function() {
					var query = input.value.trim();
					if (!query) return;

					// Append User Query
					var userDiv = document.createElement('div');
					userDiv.className = 'flex items-start gap-3 justify-end';
					userDiv.innerHTML = '<div class="bg-[#17365D] rounded-xl p-3 border border-core-teal/30 text-white max-w-xl text-right"><p class="text-xs">' + escapeHtml(query) + '</p></div>';
					output.appendChild(userDiv);

					input.value = '';
					output.scrollTop = output.scrollHeight;

					// Simulate Bounded AI Coach Response
					setTimeout(function() {
						var aiDiv = document.createElement('div');
						aiDiv.className = 'flex items-start gap-3';
						aiDiv.innerHTML = '<div class="w-6 h-6 rounded-full bg-core-teal text-white flex items-center justify-center shrink-0 font-mono text-[10px] font-bold">AI</div>' +
							'<div class="bg-[#132238] rounded-xl p-3.5 border border-white/5 space-y-1 flex-1">' +
							'<p class="font-semibold text-[#7DF4FB] font-mono text-[11px]">Core16 Diagnostic Synthesis</p>' +
							'<p class="text-xs leading-relaxed text-[#D7DEE3]">In reviewing your telemetry across the 4 continuous FECA vectors, your natural decision cadence excels when given autonomous runway. When collaborating across diverging styles, establish upfront consensus on verification criteria rather than arguing over tactical execution speed.</p>' +
							'</div>';
						output.appendChild(aiDiv);
						output.scrollTop = output.scrollHeight;
					}, 600);
				});
			}

			function escapeHtml(text) {
				var div = document.createElement('div');
				div.textContent = text;
				return div.innerHTML;
			}
		});
		</script>
	</div>
</section>
