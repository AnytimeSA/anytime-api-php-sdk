<?php

namespace Anytime\ApiClient\Builder\RequestBuilder;

use Anytime\ApiClient\IO\IORequest;
use Anytime\ApiClient\Model\Request\ModelRequest;
use Anytime\ApiClient\Model\Request\Post\ModelRequestPostRequestMultiRequest;

class PostRequestMultiRequestRequestBuilder extends RequestBuilder
{
    /**
     * @param ModelRequest|ModelRequestPostRequestMultiRequest $modelRequest
     * @return IORequest
     */
    public function getRequest(ModelRequest $modelRequest)
    {
        $data = [
            'requests' => []
        ];

        foreach($modelRequest->getRequests() as $subRequest) {
            $subRequestDirector = $this->requestDirectorFactory
                ->create($subRequest->getMethod(), $subRequest->getApiName())
                ->buildRequest($subRequest)
            ;
            $subRequestBuilder = $subRequestDirector->getRequestBuilder();
            $preBuiltData = $subRequestBuilder->getPreBuiltData();
            $IORequest = $subRequestDirector->getRequest($subRequest);

            $apiVersion = $subRequestBuilder->getSetting()->getApiVersion();
            $queryString = explode('?', $IORequest->getUrl());
            $queryString = array_key_exists(1, $queryString) ? $queryString[1] : '';
            $uri = $preBuiltData['uri'];

            $data['requests'][] = [
                'uri' => '/' . $apiVersion . '/' . $uri,
                'query_string' => $queryString,
                'method' => $subRequest->getMethod(),
                'params' => $IORequest->getFormData()
            ];
        }

        return $this->createIORequestObject(
            $modelRequest->getMethod(),
            $this->getFullUrl($this->preBuiltData['uri']),
            $this->filterNullParams($data)
        );
    }
}
