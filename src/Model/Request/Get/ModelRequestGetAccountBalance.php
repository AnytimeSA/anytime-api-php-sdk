<?php

namespace Anytime\ApiClient\Model\Request\Get;

use Anytime\ApiClient\Constant\API;

class ModelRequestGetAccountBalance extends ModelRequestGet
{
    /**
     * @return string
     */
    public function getApiName()
    {
        return API::ACCOUNT_BALANCE;
    }
}