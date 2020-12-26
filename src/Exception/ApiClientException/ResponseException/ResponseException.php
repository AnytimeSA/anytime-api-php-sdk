<?php

namespace Anytime\ApiClient\Exception\ApiClientException\ResponseException;

use Anytime\ApiClient\Exception\ApiClientException\ApiClientException;
use Anytime\ApiClient\Model\Response\ModelResponseError;
use Anytime\ApiClient\Model\Response\ModelResponseFactory;
use GuzzleHttp\Exception\BadResponseException;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Response;

abstract class ResponseException extends ApiClientException
{
    /**
     * @var ModelResponseFactory
     */
    protected $modelResponseFactory;

    /**
     * @var BadResponseException
     */
    protected $badResponseException;

    /**
     * @var ModelResponseError
     */
    protected $responseContent;

    /**
     * ResponseException constructor.
     * @param string $message
     * @param integer $code
     * @param BadResponseException $badResponseException
     * @param ModelResponseFactory $modelResponseFactory
     */
    public function __construct(
        $message,
        $code,
        BadResponseException $badResponseException,
        ModelResponseFactory $modelResponseFactory
    )
    {
        $this->modelResponseFactory = $modelResponseFactory;
        $this->badResponseException = $badResponseException;
        parent::__construct($message, $code, $badResponseException);
    }

    /**
     * @param  ModelResponseError $modelResponseError
     * @return ApiClientException
     */
    public function setResponseContent($modelResponseError)
    {
        $this->responseContent = $modelResponseError;
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
     * @return ModelResponseError
     */
    public function getResponseContent()
    {
        return $this->responseContent;
    }

    /**
     * @return integer
     */
    public function getHttpStatusCode()
    {
        return$this->getResponse()->getStatusCode();
    }
}
