<?php

namespace Anytime\ApiClient\IO;

use Anytime\ApiClient\Constant\API;
use Anytime\ApiClient\Constant\Method;
use Anytime\ApiClient\Model\Request\Post\ModelRequestPostCardDetailsDisplay;
use Anytime\ApiClient\Model\Response\Post\ModelResponsePostCardDetailsDisplay;

/**
 * @method ModelResponsePostCardDetailsDisplay sendRequest(ModelRequestPostCardDetailsDisplay $modelRequest)
 */
class CardDetailsDisplayIO extends IO
{
    /**
     * @return ModelRequestPostCardDetailsDisplay
     */
    public function createRequest()
    {
        return parent::createRequestByMethodAndApi(Method::POST, API::CARD_DETAILS_DISPLAY);
    }
}
