<?php

namespace Anytime\ApiClient\Builder\RequestBuilder;

use Anytime\ApiClient\Model\Request\Get\ModelRequestGetCardGetPin;
use Anytime\ApiClient\Model\Request\ModelRequest;

class GetCardGetPinRequestBuilder extends GetRequestBuilder
{
    /**
     * @param ModelRequest|ModelRequestGetCardGetPin $modelRequest
     * @return IORequest
     */
    public function getRequest(ModelRequest $modelRequest)
    {
        $params = ['cvc' => $modelRequest->getCvc()];
        $query = http_build_query($params, '', '&');

        return $this->createIORequestObject(
            $modelRequest->getMethod(),
            $this->getFullUrl($this->preBuiltData['uri']) . '?' . $query
        );
    }
}