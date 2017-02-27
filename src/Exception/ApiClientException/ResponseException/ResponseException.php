<?php

namespace Anytime\ApiClient\Exception\ApiClientException\ResponseException;

use Anytime\ApiClient\Exception\ApiClientException\ApiClientException;
use GuzzleHttp\Exception\BadResponseException;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Response;

abstract class ResponseException extends ApiClientException
{
    protected $badResponseException;
    protected $responseContent = '';

    public function __construct($message, $code, BadResponseException $badResponseException)
    {
        $this->badResponseException = $badResponseException;
        parent::__construct($message, $code, $badResponseException);
    }

    /**
     * @param string $responseContent
     * @return ApiClientException
     */
    public function setResponseContent($responseContent)
    {
        $this->responseContent = $responseContent;
        return $this;
    }

    /**
     * @return Response
     */
    public function getResponse()
    {
        return $this->badResponseException->getResponse();
    }

    /**
     * @return Request
     */
    public function getRequest()
    {
        return $this->badResponseException->getRequest();
    }

    /**
     * @return string
     * @TODO return ResponseModel
     */
    public function getResponseContent()
    {
        return $this->responseContent;
    }
}