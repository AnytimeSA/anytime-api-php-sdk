<?php

namespace Anytime\ApiClient\IO;

use Anytime\ApiClient\Constant\API;
use Anytime\ApiClient\Constant\Method;
use Anytime\ApiClient\Model\Request\Get\ModelRequestGetCardUnlinked;
use Anytime\ApiClient\Model\Response\Get\ModelResponseGetCardUnlinked;

/**
 * @method ModelResponseGetCardUnlinked sendRequest(ModelRequestGetCardUnlinked $modelRequest)
 */
class CardUnlinkedIO extends IO
{
    /**
     * @return ModelRequestGetCardUnlinked
     */
    public function createRequest()
    {
        return parent::createRequestByMethodAndApi(Method::GET, API::CARD_UNLINKED);
    }
}