<?php

namespace Anytime\ApiClient\Authenticator;

interface AuthenticatorInterface
{
    /**
     * @param array $data
     * @return bool
     */
    public function authenticate($data = []);
}