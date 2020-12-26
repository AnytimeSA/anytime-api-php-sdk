<?php

namespace Anytime\ApiClient\IO;

use Anytime\ApiClient\Constant\API;
use Anytime\ApiClient\Constant\Method;
use Anytime\ApiClient\Model\Request\Get\ModelRequestGetCardGetPan;
use Anytime\ApiClient\Model\Response\Get\ModelResponseGetCardGetPan;

/**
 * @method ModelResponseGetCardGetPan sendRequest(ModelRequestGetCardGetPan $modelRequest)
 */
class CardGetPanIO extends IO
{
    /**
     * @return ModelRequestGetCardGetPan
     */
    public function createRequest()
    {
        return parent::createRequestByMethodAndApi(Method::GET, API::CARD_GET_PAN);
    }
}
