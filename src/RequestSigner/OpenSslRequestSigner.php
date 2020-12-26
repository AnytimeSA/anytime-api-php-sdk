<?php

namespace Anytime\ApiClient\RequestSigner;

use Anytime\ApiClient\IO\IORequest;

class OpenSslRequestSigner implements RequestSignerInterface
{
    /**
     * @param IORequest $request
     * @param $rsaKey
     * @return IORequest
     */
    public function sign(IORequest $request, $rsaKey)
    {
        $signature = '';
        $data = sha1(microtime(true).rand(0, PHP_INT_MAX));

        try {
            if(openssl_sign($data, $signature, $rsaKey)) {
                $request->addHeader('X-Validation-Data', $data);
                $request->addHeader('X-Signed-Request', base64_encode($signature));
            }
        } catch(\Exception $e) {
            throw new \RuntimeException($e->getMessage(), $e->getCode(), $e);
        }

        return $request;
    }
}
