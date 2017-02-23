<?php

namespace Anytime\ApiClient\IO;

use Anytime\ApiClient\Constant\API;
use Anytime\ApiClient\Constant\Method;
use Anytime\ApiClient\Model\Request\Get\ModelRequestGetCardInfo;
use Anytime\ApiClient\Model\Response\Get\ModelResponseGetCardInfo;

/**
 * @method ModelResponseGetCardInfo sendRequest(ModelRequestGetCardInfo $modelRequest)
 */
class CardInfoIO extends IO
{
    /**
     * @return ModelRequestGetCardInfo
     */
    public function createRequest()
    {
        return parent::createRequestByMethodAndApi(Method::GET, API::CARD_INFO);
    }
}