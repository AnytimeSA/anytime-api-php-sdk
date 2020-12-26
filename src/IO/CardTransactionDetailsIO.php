<?php

namespace Anytime\ApiClient\IO;

use Anytime\ApiClient\Constant\API;
use Anytime\ApiClient\Constant\Method;
use Anytime\ApiClient\Model\Request\Get\ModelRequestGetCardTransactionDetails;
use Anytime\ApiClient\Model\Response\Get\ModelResponseGetCardTransactionDetails;

/**
 * @method ModelResponseGetCardTransactionDetails sendRequest(ModelRequestGetCardTransactionDetails $modelRequest)
 */
class CardTransactionDetailsIO extends IO
{
    /**
     * @return ModelRequestGetCardTransactionDetails
     */
    public function createRequest()
    {
        return parent::createRequestByMethodAndApi(Method::GET, API::CARD_TRANSACTION_DETAILS);
    }
}
