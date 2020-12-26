<?php

namespace Anytime\ApiClient\IO;

use Anytime\ApiClient\Constant\API;
use Anytime\ApiClient\Constant\Method;
use Anytime\ApiClient\Model\Request\Post\ModelRequestPostCardSendPin;
use Anytime\ApiClient\Model\Response\Post\ModelResponsePostCardSendPin;

/**
 * @method ModelResponsePostCardSendPin sendRequest(ModelRequestPostCardSendPin $modelRequest)
 */
class CardSendPinIO extends IO
{
    /**
     * @return ModelRequestPostCardSendPin
     */
    public function createRequest()
    {
        return parent::createRequestByMethodAndApi(Method::POST, API::CARD_SEND_PIN);
    }
}
