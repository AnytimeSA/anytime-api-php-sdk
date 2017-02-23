<?php

namespace Anytime\ApiClient\Model\Request\Get;

use Anytime\ApiClient\Constant\API;

class ModelRequestGetAccountCardList extends ModelRequestGet
{
    /**
     * @return string
     */
    public function getApiName()
    {
        return API::ACCOUNT_CARD_LIST;
    }
}