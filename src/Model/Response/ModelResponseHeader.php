<?php

namespace Anytime\ApiClient\Model\Response;

class ModelResponseHeader
{
    /**
     * @var integer
     */
    private $requestId;

    /**
     * @var string
     */
    private $typeResponse;

    /**
     * @var string
     */
    private $timestamp;

    /**
     * @var string
     */
    private $hash;

    /**
     * @return integer
     */
    public function getRequestId()
    {
        return $this->requestId;
    }

    /**
     * @param int $requestId
     * @return ModelResponseHeader
     */
    public function setRequestId($requestId)
    {
        $this->requestId = $requestId;
        return $this;
    }

    /**
     * @return string
     */
    public function getTypeResponse()
    {
        return $this->typeResponse;
    }

    /**
     * @param string $typeResponse
     * @return ModelResponseHeader
     */
    public function setTypeResponse($typeResponse)
    {
        $this->typeResponse = $typeResponse;
        return $this;
    }

    /**
     * @return string
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * @param string $timestamp
     * @return ModelResponseHeader
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;
        return $this;
    }

    /**
     * @return string
     */
    public function getHash()
    {
        return $this->hash;
    }

    /**
     * @param string $hash
     * @return ModelResponseHeader
     */
    public function setHash($hash)
    {
        $this->hash = $hash;
        return $this;
    }


}