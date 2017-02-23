<?php

namespace Anytime\ApiClient\IO;

use Anytime\ApiClient\Constant\API;
use Anytime\ApiClient\Constant\Method;
use Anytime\ApiClient\Model\Request\Put\ModelRequestPutCardUpdate;
use Anytime\ApiClient\Model\Response\Put\ModelResponsePutCardUpdate;

/**
 * @method ModelResponsePutCardUpdate sendRequest(ModelRequestPutCardUpdate $modelRequest)
 */
class CardUpdateIO extends IO
{
    /**
     * @return ModelRequestPutCardUpdate
     */
    public function createRequest()
    {
        return parent::createRequestByMethodAndApi(Method::PUT, API::CARD_UPDATE);
    }
}