<?php
/**
Generator nonce classes.
*/
namespace InspydeNonce;

class InpsydeWpNonceGenWrapper {

	public static function i_wp_nonce_ays( $action = -1 ) {
	/* Executes wp_nonce_ays function. */
		wp_nonce_ays( $action );
	}

	public static function i_wp_nonce_url( $actionurl, $action = -1, $name = '_wpnonce' ) {
		if ( $actionurl == null ) {
			return null;
		}
		
		/* Executes wp_nonce_url for the given parameters */
		return wp_nonce_url( $actionurl, $action, $name );
	}
	
	public static function i_wp_nonce_field( $action, $name = '_wpnonce', $referer = "None", $echo = "echo" ) {
		return wp_nonce_field( $action, $name, $referer, $echo );
	}
	
	public static function i_wp_create_nonce( $action ) {
		return wp_create_nonce( $action );
	}
}
?>