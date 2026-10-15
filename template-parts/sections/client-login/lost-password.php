<?php
/**
 * Lost Password Section for Client Portal
 *
 * @package Core16
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$lost_error   = isset( $_GET['lost_error'] ) ? sanitize_text_field( wp_unslash( $_GET['lost_error'] ) ) : '';
$lost_success = isset( $_GET['lost_success'] ) && '1' === $_GET['lost_success'];
?>

<section class="relative py-20 lg:py-28 bg-[#FAFAF7] overflow-hidden">
	<div class="absolute inset-0 opacity-[0.03] pointer-events-none" style="background-image: radial-gradient(#1A2530 1px, transparent 1px); background-size: 24px 24px;"></div>

	<div class="max-w-xl mx-auto px-4 sm:px-6 relative z-10">
		<!-- Header -->
		<div class="text-center mb-10">
			<div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-[#1A2530]/5 border border-[#1A2530]/10 text-xs font-mono tracking-widest text-[#243342] uppercase mb-4">
				<span class="w-2 h-2 rounded-full bg-amber-500 animate-pulse"></span>
				CREDENTIAL RECOVERY PROTOCOL
			</div>
			<h1 class="text-3xl md:text-4xl font-serif text-[#1A2530] tracking-tight">Reset Access Key</h1>
			<p class="mt-3 text-sm md:text-base text-[#5A6872] max-w-md mx-auto">
				Enter the registered institutional email or client username. An encrypted link to reconfigure your key will be transmitted.
			</p>
		</div>

		<!-- Success Notification -->
		<?php if ( $lost_success ) : ?>
			<div class="mb-6 p-5 rounded-2xl bg-emerald-50 border border-emerald-200 text-emerald-900 text-sm">
				<div class="flex items-center gap-3 font-semibold text-emerald-950">
					<svg class="w-5 h-5 text-emerald-600 shrink-0" fill="currentColor" viewBox="0 0 20 20">
						<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
					</svg>
					<span><?php esc_html_e( 'Recovery Transmission Dispatched', 'core16' ); ?></span>
				</div>
				<p class="mt-2 text-xs text-emerald-800 leading-relaxed">
					<?php esc_html_e( 'If the submitted identifier exists in our institutional registry, an email containing key reset instructions has been generated. Please check your inbox and security filters.', 'core16' ); ?>
				</p>
				<div class="mt-4">
					<a href="<?php echo esc_url( home_url( '/client-login/' ) ); ?>" class="text-xs font-semibold text-emerald-950 underline hover:text-emerald-700">
						&larr; <?php esc_html_e( 'Return to Portal Login', 'core16' ); ?>
					</a>
				</div>
			</div>
		<?php endif; ?>

		<!-- Error Notification -->
		<?php if ( ! empty( $lost_error ) ) : ?>
			<div class="mb-6 p-4 rounded-xl bg-rose-50 border border-rose-200/80 text-rose-800 text-sm flex items-start gap-3">
				<svg class="w-5 h-5 text-rose-600 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
				</svg>
				<div>
					<p class="font-semibold text-rose-900"><?php esc_html_e( 'Recovery Error', 'core16' ); ?></p>
					<p class="text-xs text-rose-700 mt-0.5">
						<?php echo esc_html( core16_get_login_error_message( $lost_error ) ); ?>
					</p>
				</div>
			</div>
		<?php endif; ?>

		<?php if ( ! $lost_success ) : ?>
		<!-- Form Card -->
		<div class="bg-white rounded-2xl border border-[#E5E5E0] shadow-xl p-8 sm:p-10 relative">
			<form method="post" action="<?php echo esc_url( home_url( '/client-login/' ) ); ?>" class="space-y-6">
				<?php wp_nonce_field( 'core16_lostpassword_action', 'core16_lostpassword_nonce' ); ?>

				<div>
					<label for="user_login" class="block text-xs font-mono uppercase tracking-wider text-[#1A2530] mb-2 font-semibold">
						<?php esc_html_e( 'Registered Client Identifier or Email', 'core16' ); ?>
					</label>
					<input
						type="text"
						name="user_login"
						id="user_login"
						required
						placeholder="e.g. j.smith@enterprise.com"
						class="w-full px-4 py-3 rounded-xl border border-[#D5D5CF] bg-[#FAFAF8] text-[#1A2530] placeholder-[#9AA6AC] text-sm focus:outline-none focus:ring-2 focus:ring-[#1A2530] focus:border-transparent transition"
					/>
				</div>

				<div>
					<button
						type="submit"
						class="w-full py-3.5 px-6 rounded-xl bg-[#1A2530] text-white text-sm font-semibold hover:bg-[#243342] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#1A2530] transition shadow-md flex items-center justify-center gap-2"
					>
						<span><?php esc_html_e( 'Transmit Reset Key Instructions', 'core16' ); ?></span>
						<svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
						</svg>
					</button>
				</div>
			</form>

			<div class="mt-8 pt-6 border-t border-[#F0F0EB] text-center">
				<a href="<?php echo esc_url( home_url( '/client-login/' ) ); ?>" class="text-xs text-[#5A6872] hover:text-[#1A2530] font-mono">
					&larr; <?php esc_html_e( 'Remembered your key? Return to Login', 'core16' ); ?>
				</a>
			</div>
		</div>
		<?php endif; ?>
	</div>
</section>
