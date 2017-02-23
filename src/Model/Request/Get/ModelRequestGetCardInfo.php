<?php

namespace Anytime\ApiClient\Model\Request\Get;

use Anytime\ApiClient\Constant\API;

class ModelRequestGetCardInfo extends ModelRequestGet
{
    /**
     * @return string
     */
    public function getApiName()
    {
        return API::CARD_INFO;
    }
}