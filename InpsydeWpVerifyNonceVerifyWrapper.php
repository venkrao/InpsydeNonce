<?php
/**
Verifier nonce classes.
*/
namespace InspydeNonce;

class InpsydeWpVerifyNonceVerifyWrapper {
	function __construct() {
	}
	
	public static function i_wp_verify_nonce( $nonce, $action ) {
		return wp_verify_nonce( $nonce, $action );
	}
}
?>