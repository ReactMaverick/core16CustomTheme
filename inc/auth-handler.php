<?php
/**
 * Authentication and Client Portal Handler for Core16
 *
 * @package Core16
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Handle form submissions on init
 */
function core16_process_auth_actions() {
	// 1. Process Login
	if ( isset( $_POST['core16_login_nonce'] ) && wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['core16_login_nonce'] ) ), 'core16_login_action' ) ) {
		$username = isset( $_POST['log'] ) ? sanitize_user( wp_unslash( $_POST['log'] ) ) : '';
		$password = isset( $_POST['pwd'] ) ? sanitize_text_field( wp_unslash( $_POST['pwd'] ) ) : '';
		$remember = ! empty( $_POST['rememberme'] );

		if ( empty( $username ) || empty( $password ) ) {
			wp_safe_redirect( add_query_arg( 'login_error', 'empty_fields', home_url( '/client-login/' ) ) );
			exit;
		}

		$creds = array(
			'user_login'    => $username,
			'user_password' => $password,
			'remember'      => $remember,
		);

		$user = wp_signon( $creds, is_ssl() );

		if ( is_wp_error( $user ) ) {
			$error_code = $user->get_error_code();
			wp_safe_redirect( add_query_arg( 'login_error', urlencode( $error_code ), home_url( '/client-login/' ) ) );
			exit;
		}

		// Successful login
		$redirect_to = ! empty( $_POST['redirect_to'] ) ? esc_url_raw( wp_unslash( $_POST['redirect_to'] ) ) : home_url( '/client-login/' );
		wp_safe_redirect( $redirect_to );
		exit;
	}

	// 2. Process Logout
	if ( isset( $_GET['core16_action'] ) && 'logout' === $_GET['core16_action'] ) {
		if ( isset( $_GET['_wpnonce'] ) && wp_verify_nonce( sanitize_text_field( wp_unslash( $_GET['_wpnonce'] ) ), 'core16_logout' ) ) {
			wp_logout();
			wp_safe_redirect( add_query_arg( 'logged_out', '1', home_url( '/client-login/' ) ) );
			exit;
		}
	}

	// 3. Process Lost Password
	if ( isset( $_POST['core16_lostpassword_nonce'] ) && wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['core16_lostpassword_nonce'] ) ), 'core16_lostpassword_action' ) ) {
		$user_login = isset( $_POST['user_login'] ) ? sanitize_text_field( wp_unslash( $_POST['user_login'] ) ) : '';

		if ( empty( $user_login ) ) {
			wp_safe_redirect( add_query_arg( array( 'view' => 'lostpassword', 'lost_error' => 'empty' ), home_url( '/client-login/' ) ) );
			exit;
		}

		$result = retrieve_password( $user_login );

		if ( is_wp_error( $result ) ) {
			wp_safe_redirect( add_query_arg( array( 'view' => 'lostpassword', 'lost_error' => urlencode( $result->get_error_code() ) ), home_url( '/client-login/' ) ) );
			exit;
		}

		wp_safe_redirect( add_query_arg( array( 'view' => 'lostpassword', 'lost_success' => '1' ), home_url( '/client-login/' ) ) );
		exit;
	}
}
add_action( 'init', 'core16_process_auth_actions' );

/**
 * Helper to get user-friendly error message
 *
 * @param string $error_code The error code string.
 * @return string Error message.
 */
function core16_get_login_error_message( $error_code ) {
	switch ( $error_code ) {
		case 'empty_fields':
			return __( 'Please enter both your client identifier (email/username) and access key.', 'core16' );
		case 'invalid_username':
		case 'invalid_email':
			return __( 'Unknown client credentials. Please check your username or email address.', 'core16' );
		case 'incorrect_password':
			return __( 'The password you entered is incorrect. Please try again or reset your access key.', 'core16' );
		case 'empty':
			return __( 'Please provide your registered client email or username to request a reset link.', 'core16' );
		default:
			return __( 'Authentication failed. Please verify your credentials and try again.', 'core16' );
	}
}
