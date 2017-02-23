<?php

namespace Anytime\ApiClient\IO;

use Anytime\ApiClient\Constant\API;
use Anytime\ApiClient\Constant\Method;
use Anytime\ApiClient\Model\Request\Post\ModelRequestPostCardCredit;
use Anytime\ApiClient\Model\Response\Post\ModelResponsePostCardCredit;

/**
 * @method ModelResponsePostCardCredit sendRequest(ModelRequestPostCardCredit $modelRequest)
 */
class CardCreditIO extends IO
{
    /**
     * @return ModelRequestPostCardCredit
     */
    public function createRequest()
    {
        return parent::createRequestByMethodAndApi(Method::POST, API::CARD_CREDIT);
    }
}