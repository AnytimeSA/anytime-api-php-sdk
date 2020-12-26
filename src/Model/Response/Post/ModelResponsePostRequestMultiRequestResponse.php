<?php

namespace Anytime\ApiClient\Model\Response\Post;

use Anytime\ApiClient\Model\Response\ModelResponse;

class ModelResponsePostRequestMultiRequestResponse
{
    /**
     * @var string
     */
    private $method;

    /**
     * @var string
     */
    private $uri;

    /**
     * @var string
     */
    private $queryString;

    /**
     * @var array
     */
    private $params;

    /**
     * @var int
     */
    private $httpStatusCode;


    /**
     * @var ModelResponse
     */
    private $response;

    /**
     * @return string
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * @param string $method
     * @return ModelResponsePostRequestMultiRequestResponse
     */
    public function setMethod($method)
    {
        $this->method = $method;
        return $this;
    }

    /**
     * @return string
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * @param string $uri
     * @return ModelResponsePostRequestMultiRequestResponse
     */
    public function setUri($uri)
    {
        $this->uri = $uri;
        return $this;
    }

    /**
     * @return string
     */
    public function getQueryString()
    {
        return $this->queryString;
    }

    /**
     * @param string $queryString
     * @return ModelResponsePostRequestMultiRequestResponse
     */
    public function setQueryString($queryString)
    {
        $this->queryString = $queryString;
        return $this;
    }

    /**
     * @return array
     */
    public function getParams()
    {
        return $this->params;
    }

    /**
     * @param array $params
     * @return ModelResponsePostRequestMultiRequestResponse
     */
    public function setParams($params)
    {
        $this->params = $params;
        return $this;
    }

    /**
     * @return ModelResponse
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * @param ModelResponse $response
     * @return ModelResponsePostRequestMultiRequestResponse
     */
    public function setResponse($response)
    {
        $this->response = $response;
        return $this;
    }

    /**
     * @return int
     */
    public function getHttpStatusCode()
    {
        return $this->httpStatusCode;
    }

    /**
     * @param int $httpStatusCode
     * @return ModelResponsePostRequestMultiRequestResponse
     */
    public function setHttpStatusCode($httpStatusCode)
    {
        $this->httpStatusCode = $httpStatusCode;
        return $this;
    }


}
