<?php

namespace Anytime\ApiClient\IO;

use Anytime\ApiClient\Constant\API;
use Anytime\ApiClient\Constant\Method;
use Anytime\ApiClient\Model\Request\Get\ModelRequestGetAccountCardList;
use Anytime\ApiClient\Model\Response\Get\ModelResponseGetAccountCardList;

/**
 * @method ModelResponseGetAccountCardList sendRequest(ModelRequestGetAccountCardList $modelRequest)
 */
class AccountCardListIO extends IO
{
    /**
     * @return ModelRequestGetAccountCardList
     */
    public function createRequest()
    {
        return parent::createRequestByMethodAndApi(Method::GET, API::ACCOUNT_CARD_LIST);
    }
}