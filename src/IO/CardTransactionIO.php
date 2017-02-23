<?php

namespace Anytime\ApiClient\IO;

use Anytime\ApiClient\Constant\API;
use Anytime\ApiClient\Constant\Method;
use Anytime\ApiClient\Model\Request\Get\ModelRequestGetCardTransaction;
use Anytime\ApiClient\Model\Response\Get\ModelResponseGetCardTransaction;

/**
 * @method ModelResponseGetCardTransaction sendRequest(ModelRequestGetCardTransaction $modelRequest)
 */
class CardTransactionIO extends IO
{
    /**
     * @return ModelRequestGetCardTransaction
     */
    public function createRequest()
    {
        return parent::createRequestByMethodAndApi(Method::GET, API::CARD_TRANSACTION);
    }
}