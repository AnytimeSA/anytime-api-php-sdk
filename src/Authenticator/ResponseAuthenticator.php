<?php

namespace Anytime\ApiClient\Authenticator;

class ResponseAuthenticator implements AuthenticatorInterface
{
    /**
     * @var string
     */
    private $hashAlgorithm = 'sha256';

    /**
     * @param array $data
     * @return boolean
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