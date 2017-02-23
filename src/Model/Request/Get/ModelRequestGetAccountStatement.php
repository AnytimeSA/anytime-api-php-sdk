<?php

namespace Anytime\ApiClient\Model\Request\Get;

use Anytime\ApiClient\Constant\API;

class ModelRequestGetAccountStatementList extends ModelRequestGet
{
    /**
     * @return string
     */
    public function getApiName()
    {
        return API::ACCOUNT_STATEMENT;
    }
}