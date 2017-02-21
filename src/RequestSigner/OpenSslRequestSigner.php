<?php

namespace Anytime\ApiClient\RequestSigner;

use Psr\Http\Message\RequestInterface;

class OpenSslRequestSigner implements RequestSignerInterface
{
    /**
     * @param RequestInterface $request
     * @param $rsaKey
     * @return array
     */
    public function sign(RequestInterface $request, $rsaKey)
    {
        $signature = '';
        $data = sha1(microtime(true).rand(0, PHP_INT_MAX));

        if(@openssl_sign($data, $signature, $rsaKey)) {
            $request = $request->withAddedHeader('X-Validation-Data', $data);
            $request = $request->withAddedHeader('X-Signed-Request', base64_encode($signature));
        }

        return $request;
    }
}