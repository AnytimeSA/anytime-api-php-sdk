<?php

namespace Anytime\ApiClient\Model\Request\Get;

use Anytime\ApiClient\Constant\API;

class ModelRequestGetApiCheck extends ModelRequestGet
{
    /**
     * @return string
     */
    public function getApiName()
    {
        return API::APICHECK;
    }
}
