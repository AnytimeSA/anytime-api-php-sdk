<?php

namespace Anytime\ApiClient\Model\Request\Post;

use Anytime\ApiClient\Constant\API;
use Anytime\ApiClient\Model\Request\ModelRequest;

class ModelRequestPostRequestMultiRequest extends ModelRequestPost
{
    /**
     * @var ModelRequest[]
     */
    private $requests;

    /**
     * @return string
     */
    public function getApiName()
    {
        return API::REQUEST_MULTI_REQUEST;
    }

    /**
     * @return ModelRequest[]
     */
    public function getRequests()
    {
        return $this->requests;
    }

    /**
     * @param ModelRequest[] $requests
     * @return ModelRequestPostRequestMultiRequest
     */
    public function setRequests($requests)
    {
        $this->requests = $requests;
        return $this;
    }
}
