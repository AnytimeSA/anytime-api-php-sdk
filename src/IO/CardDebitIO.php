<?php

namespace Anytime\ApiClient\IO;

use Anytime\ApiClient\Constant\API;
use Anytime\ApiClient\Constant\Method;
use Anytime\ApiClient\Model\Request\Post\ModelRequestPostCardDebit;
use Anytime\ApiClient\Model\Response\Post\ModelResponsePostCardDebit;

/**
 * @method ModelResponsePostCardDebit sendRequest(ModelRequestPostCardDebit $modelRequest)
 */
class CardDebitIO extends IO
{
    /**
     * @return ModelRequestPostCardDebit
     */
    public function createRequest()
    {
        return parent::createRequestByMethodAndApi(Method::POST, API::CARD_DEBIT);
    }
}