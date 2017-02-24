<?php

namespace Anytime\ApiClient\RequestSigner;

use Anytime\ApiClient\IO\IORequest;

interface RequestSignerInterface
{
    /**
     * @param IORequest $request
     * @param string $rsaKey
     * @return IORequest
     */
    public function sign(IORequest $request, $rsaKey);
}