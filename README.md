Wrapper classes around wp_nonce functions.


To use the wrapper classes:


include them via include_once().

The following is the mapping of WordPress core functions to
the corresponding wrapper functions offered by the classes here.

For example, the nonce generator functions are wrapped in the following class:
include_once("InpsydeNonce\InpsydeWpNonceGenWrapper.php");

$nonce_wrapper = new InpsydeWpNonceGenWrapper();

$nonce_wrapper->i_wp_nonce_ays();

$nonce_wrapper->i_wp_nonce_url($actionurl, $action = -1, $name = '_wpnonce');

$nonce_wrapper->i_wp_nonce_field($action, $name = '_wpnonce', $referer = "None", $echo = "echo");

$nonce_wrapper->i_wp_create_nonce( $action);


The nonce consumer functions are wrapped in the following class.

include_once("InpsydeNonce\InpsydeWpVerifyNonceVerifyWrapper.php");

$nonce_wrapper = new InpsydeWpVerifyNonceVerifyWrapper();

$nonce_wrapper->i_wp_create_nonce( $nonce, $action );

