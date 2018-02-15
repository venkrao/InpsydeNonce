<?php
namespace InspydeNonce\Test;

use InspydeNonce\InpsydeWpNonceGenWrapper;
use PHPUnit\Framework\TestCase;
use Mockery as m;

include_once(__DIR__ . "/../InpsydeWpNonceGenWrapper.php");

function wp_nonce_ays( $action ) {
    return InpsydeWpNonceGenWrapperTest::$functions->wp_nonce_ays( $action );
}

class InpsydeWpNonceGenWrapperTest extends TestCase {

    public static $functions;
    private $nonceGenerator;

    public function setUp() {
        self::$functions = m::mock();
        $this->nonceGenerator = new InpsydeWpNonceGenWrapper();
    }

    public function tearDown() {
        // see Mockery's documentation for why we do this
        m::close();
    }

    public function test_i_wp_nonce_ays_with_action_should_call_wp_nonce_ays_method_with_given_action
    ( $action = "action-name" ) {
        self::$functions->shouldReceive("wp_nonce_ays")->with( $action )->once();
        $this->nonceGenerator->i_wp_nonce_ays("action-name");
    }

    public function test_i_wp_nonce_ays_with_default_action_should_send_1_as_default_action() {
        self::$functions->shouldReceive("wp_nonce_ays")->with(-1)->once();
        $this->nonceGenerator->i_wp_nonce_ays();
    }

    public function test_i_wp_nonce_url_should_return_null_if_no_url_is_passed() {
        $this->assertEquals(null, $this->nonceGenerator->i_wp_nonce_url());
    }


    public function test_i_wp_nonce_url_should_call_i_wp_nonce_url_with_given_url(
        $actionurl = "http://localhost/url") {
        self::$functions->shouldReceive("wp_nonce_url")->with($actionurl, -1)->once();
        $this->nonceGenerator->i_wp_nonce_url( $actionurl, -1, "_nonce");
    }

    public function test_i_wp_nonce_url_should_call_i_wp_nonce_url_with_given_url_and_nonce_param_name(
        $actionurl = "http://localhost/url", $name="_wpnonce") {
        self::$functions->shouldReceive("wp_nonce_url")->with($actionurl, $name)->once();
        $this->nonceGenerator->i_wp_nonce_url( $actionurl, -1, $name );
    }

}
?>