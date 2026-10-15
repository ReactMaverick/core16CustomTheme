<?php
/**
 * Template Name: Client Login
 * Description: Secure authentication terminal, credential recovery, and client dashboard
 *
 * @package Core16
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();

$view = isset( $_GET['view'] ) ? sanitize_text_field( wp_unslash( $_GET['view'] ) ) : 'login';
?>

<div class="flex flex-col w-full bg-[#FAFAF7] min-h-[70vh]">
	<?php
	if ( is_user_logged_in() ) {
		// Logged in user dashboard
		get_template_part( 'template-parts/sections/client-login/user-dashboard' );
	} elseif ( 'lostpassword' === $view ) {
		// Credential recovery view
		get_template_part( 'template-parts/sections/client-login/lost-password' );
	} else {
		// Default secure login form
		get_template_part( 'template-parts/sections/client-login/login-form' );
	}
	?>
</div>

<?php
get_footer();
