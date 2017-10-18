<?php

namespace Anytime\ApiClient\IO;

use Anytime\ApiClient\Constant\API;
use Anytime\ApiClient\Constant\Method;
use Anytime\ApiClient\Model\Request\Get\ModelRequestGetCardGetPin;
use Anytime\ApiClient\Model\Response\Get\ModelResponseGetCardGetPin;

/**
 * @method ModelResponseGetCardGetPin sendRequest(ModelRequestGetCardGetPin $modelRequest)
 */
class CardGetPinIO extends IO
{
    /**
     * @return ModelRequestGetCardGetPin
     */
    public function createRequest()
    {
        return parent::createRequestByMethodAndApi(Method::GET, API::CARD_GET_PIN);
    }
}