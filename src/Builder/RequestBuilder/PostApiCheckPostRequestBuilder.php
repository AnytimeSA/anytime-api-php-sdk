<?php

namespace Anytime\ApiClient\Builder\RequestBuilder;

use Anytime\ApiClient\Model\Request\ModelRequest;
use GuzzleHttp\Psr7\Request;

class PostApiCheckPostRequestBuilder extends RequestBuilder
{
    /**
     * @param ModelRequest $modelRequest
     * @return Request
     */
    public function getRequest(ModelRequest $modelRequest)
    {
        $params = [
            'test_param'  =>  $modelRequest->getTestParam()
        ];

        return new Request(
            $modelRequest->getMethod(),
            $this->getFullUrl($this->preBuiltData['uri']),
            [
                'Content-type' => 'application/x-www-form-urlencoded'
            ],
            http_build_query($params, '', '&amp;')
        );
    }
}