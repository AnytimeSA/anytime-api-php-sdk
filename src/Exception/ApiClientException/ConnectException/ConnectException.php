<?php

namespace Anytime\ApiClient\Exception\ApiClientException\ConnectException;

use Anytime\ApiClient\Exception\ApiClientException\ApiClientException;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Response;

class ConnectException extends ApiClientException
{
    protected $responseContent = '';

    /**
     * @var ConnectException
     */
    protected $connectException;

    /**
     * ConnectException constructor.
     * @param string $message
     * @param integer $code
     * @param \GuzzleHttp\Exception\ConnectException $connectException
     */
    public function __construct($message, $code, \GuzzleHttp\Exception\ConnectException $connectException)
    {
        $this->connectException = $connectException;
        parent::__construct($message, $code, $connectException);
    }

    /**
     * @return Request
     */
    public function getRequest()
    {
        return $this->connectException->getRequest();
    }

    /**
     * @return Response
     */
    public function getResponse()
    {
        return $this->connectException->getResponse();
    }

    /**
     * @return null
     */
    public function getResponseContent()
    {
        return null;
    }

}
