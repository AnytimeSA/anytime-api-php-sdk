<?php

namespace Anytime\ApiClient\Authenticator;

use Anytime\ApiClient\ApiClientSetting;

class ResponseAuthenticator implements AuthenticatorInterface
{
    /**
     * @var ApiClientSetting
     */
    private $setting;

    /**
     * @var string
     */
    private $hashAlgorithm = 'sha256';

    /**
     * ResponseAuthenticator constructor.
     *
     * @param ApiClientSetting $setting
     */
    public function __construct(ApiClientSetting $setting)
    {
        $this->setting = $setting;
    }

    /**
     * @param array $data
     * @return bool
     */
    public function authenticate($data = [])
    {
        if(array_key_exists('hash', $data) && array_key_exists('timestamp', $data) && array_key_exists('username', $data)) {
            $expectedHash = hash($this->hashAlgorithm, (string)$data['timestamp'] . '|' . $data['username']);
            return ($data['hash'] === $expectedHash);
        }

        return false;
    }
}