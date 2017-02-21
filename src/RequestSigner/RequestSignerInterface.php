<?php

namespace Anytime\ApiClient\RequestSigner;

use Psr\Http\Message\RequestInterface;

interface RequestSignerInterface
{
    /**
     * @param RequestInterface $request
     * @param string $rsaKey
     * @return RequestInterface
     */
    public function sign(RequestInterface $request, $rsaKey);
}