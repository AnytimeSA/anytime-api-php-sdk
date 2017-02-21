<?php

namespace Anytime\ApiClient\Exception\ApiClientException;

use Exception;
use GuzzleHttp\Exception\BadResponseException;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Response;

abstract class ApiClientException extends \Exception
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
    public function getResponseContents()
    {
        return $this->responseContent;
    }
}