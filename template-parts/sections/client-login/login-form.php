<?php
/**
 * Client Login Form Section
 *
 * @package Core16
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$login_error = isset( $_GET['login_error'] ) ? sanitize_text_field( wp_unslash( $_GET['login_error'] ) ) : '';
$logged_out  = isset( $_GET['logged_out'] ) && '1' === $_GET['logged_out'];
$redirect_to = isset( $_GET['redirect_to'] ) ? esc_url_raw( wp_unslash( $_GET['redirect_to'] ) ) : home_url( '/client-login/' );
?>

<section class="relative py-20 lg:py-28 bg-[#FAFAF7] overflow-hidden">
	<!-- Background grid -->
	<div class="absolute inset-0 opacity-[0.03] pointer-events-none" style="background-image: radial-gradient(#1A2530 1px, transparent 1px); background-size: 24px 24px;"></div>

	<div class="max-w-xl mx-auto px-4 sm:px-6 relative z-10">
		<!-- Header -->
		<div class="text-center mb-10">
			<div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-[#1A2530]/5 border border-[#1A2530]/10 text-xs font-mono tracking-widest text-[#243342] uppercase mb-4">
				<span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
				ENCRYPTED CLIENT GATEWAY • 256-BIT SSL
			</div>
			<h1 class="text-3xl md:text-4xl font-serif text-[#1A2530] tracking-tight">Client Portal Access</h1>
			<p class="mt-3 text-sm md:text-base text-[#5A6872] max-w-md mx-auto">
				Authenticate with your institutional credentials to access your psychometric dossiers, team matrices, and executive deliverables.
			</p>
		</div>

		<!-- Alerts -->
		<?php if ( $logged_out ) : ?>
			<div class="mb-6 p-4 rounded-xl bg-emerald-50 border border-emerald-200/80 text-emerald-800 text-sm flex items-start gap-3">
				<svg class="w-5 h-5 text-emerald-600 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
				</svg>
				<div>
					<p class="font-semibold text-emerald-900"><?php esc_html_e( 'Session Terminated Successfully', 'core16' ); ?></p>
					<p class="text-xs text-emerald-700 mt-0.5"><?php esc_html_e( 'You have been safely signed out of your client terminal session.', 'core16' ); ?></p>
				</div>
			</div>
		<?php endif; ?>

		<?php if ( ! empty( $login_error ) ) : ?>
			<div class="mb-6 p-4 rounded-xl bg-rose-50 border border-rose-200/80 text-rose-800 text-sm flex items-start gap-3">
				<svg class="w-5 h-5 text-rose-600 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
				</svg>
				<div>
					<p class="font-semibold text-rose-900"><?php esc_html_e( 'Authentication Notice', 'core16' ); ?></p>
					<p class="text-xs text-rose-700 mt-0.5">
						<?php echo esc_html( core16_get_login_error_message( $login_error ) ); ?>
					</p>
				</div>
			</div>
		<?php endif; ?>

		<!-- Login Card -->
		<div class="bg-white rounded-2xl border border-[#E5E5E0] shadow-xl p-8 sm:p-10 relative">
			<form method="post" action="<?php echo esc_url( home_url( '/client-login/' ) ); ?>" class="space-y-6">
				<?php wp_nonce_field( 'core16_login_action', 'core16_login_nonce' ); ?>
				<input type="hidden" name="redirect_to" value="<?php echo esc_attr( $redirect_to ); ?>" />

				<!-- User Login -->
				<div>
					<label for="core16_log" class="block text-xs font-mono uppercase tracking-wider text-[#1A2530] mb-2 font-semibold">
						<?php esc_html_e( 'Client Identifier (Username or Email)', 'core16' ); ?>
					</label>
					<div class="relative">
						<input
							type="text"
							name="log"
							id="core16_log"
							required
							autocomplete="username"
							placeholder="e.g. j.smith@enterprise.com"
							class="w-full px-4 py-3 rounded-xl border border-[#D5D5CF] bg-[#FAFAF8] text-[#1A2530] placeholder-[#9AA6AC] text-sm focus:outline-none focus:ring-2 focus:ring-[#1A2530] focus:border-transparent transition"
						/>
					</div>
				</div>

				<!-- Password -->
				<div>
					<div class="flex items-center justify-between mb-2">
						<label for="core16_pwd" class="block text-xs font-mono uppercase tracking-wider text-[#1A2530] font-semibold">
							<?php esc_html_e( 'Access Key (Password)', 'core16' ); ?>
						</label>
						<a href="<?php echo esc_url( add_query_arg( 'view', 'lostpassword', home_url( '/client-login/' ) ) ); ?>" class="text-xs text-[#5A6872] hover:text-[#1A2530] underline transition">
							<?php esc_html_e( 'Forgot Key?', 'core16' ); ?>
						</a>
					</div>
					<div class="relative">
						<input
							type="password"
							name="pwd"
							id="core16_pwd"
							required
							autocomplete="current-password"
							placeholder="••••••••••••"
							class="w-full px-4 py-3 rounded-xl border border-[#D5D5CF] bg-[#FAFAF8] text-[#1A2530] placeholder-[#9AA6AC] text-sm focus:outline-none focus:ring-2 focus:ring-[#1A2530] focus:border-transparent transition"
						/>
					</div>
				</div>

				<!-- Remember Me -->
				<div class="flex items-center justify-between">
					<label class="flex items-center gap-2 cursor-pointer">
						<input type="checkbox" name="rememberme" value="forever" class="rounded border-[#D5D5CF] text-[#1A2530] focus:ring-[#1A2530] w-4 h-4" />
						<span class="text-xs text-[#5A6872] font-mono"><?php esc_html_e( 'Retain session for 14 days', 'core16' ); ?></span>
					</label>
				</div>

				<!-- Submit Button -->
				<div>
					<button
						type="submit"
						class="w-full py-3.5 px-6 rounded-xl bg-[#1A2530] text-white text-sm font-semibold hover:bg-[#243342] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#1A2530] transition shadow-md flex items-center justify-center gap-2"
					>
						<span><?php esc_html_e( 'Authenticate & Enter Portal', 'core16' ); ?></span>
						<svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
						</svg>
					</button>
				</div>
			</form>

			<!-- Separator -->
			<div class="mt-8 pt-6 border-t border-[#F0F0EB] text-center">
				<p class="text-xs text-[#7A8892]">
					<?php esc_html_e( 'Need an Enterprise clearance or institutional seat?', 'core16' ); ?>
					<a href="<?php echo esc_url( home_url( '/enterprise/' ) ); ?>" class="text-[#1A2530] font-semibold underline ml-1 hover:text-[#008080]">
						<?php esc_html_e( 'Inquire with Operations Desk', 'core16' ); ?>
					</a>
				</p>
			</div>
		</div>

		<!-- Compliance Footer -->
		<div class="mt-8 flex flex-wrap items-center justify-center gap-6 text-[11px] font-mono text-[#8C98A0]">
			<span class="flex items-center gap-1.5">
				<svg class="w-3.5 h-3.5 text-emerald-600" fill="currentColor" viewBox="0 0 20 20">
					<path fill-rule="evenodd" d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
				</svg>
				SOC2 Type II Certified
			</span>
			<span class="flex items-center gap-1.5">
				<svg class="w-3.5 h-3.5 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
					<path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd"/>
				</svg>
				Zero Raw PII Storage
			</span>
			<span class="flex items-center gap-1.5">
				<svg class="w-3.5 h-3.5 text-indigo-600" fill="currentColor" viewBox="0 0 20 20">
					<path d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z"/>
				</svg>
				Audit Logging Active
			</span>
		</div>
	</div>
</section>
