<?php

namespace Anytime\ApiClient\Authenticator;

use Xpmock\TestCase;

class ResponseAuthenticatorTest extends TestCase
{
    /**
     * @group ResponseAuthenticator
     */
    public function testAuthenticateReturnsTrueIfHashIsValid()
    {
        $authenticator = new ResponseAuthenticator();
        $this->assertTrue($authenticator->authenticate([
            'hash'      =>  '2a48975b97eb24a16550e1412210b9a221c6f453a24ae52b3e8fcca59c5b4803',
            'timestamp' =>  1234,
            'username'  =>  'some-username'
        ]));
    }

    /**
     * @group ResponseAuthenticator
     */
    public function testAuthenticateReturnsFalseIfHashIsInvalid()
    {
        $authenticator = new ResponseAuthenticator();
        $this->assertFalse($authenticator->authenticate([
            'hash'      =>  'InvalidHashString',
            'timestamp' =>  1234,
            'username'  =>  'some-username'
        ]));
    }
}