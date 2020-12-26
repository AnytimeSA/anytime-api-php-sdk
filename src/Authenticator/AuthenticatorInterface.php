<?php

namespace Anytime\ApiClient\Authenticator;

interface AuthenticatorInterface
{
    /**
     * @param array $data
     * @return boolean
     */
    public function authenticate($data = []);
}
