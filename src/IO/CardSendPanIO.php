<?php

namespace Anytime\ApiClient\IO;

use Anytime\ApiClient\Constant\API;
use Anytime\ApiClient\Constant\Method;
use Anytime\ApiClient\Model\Request\Post\ModelRequestPostCardSendPan;
use Anytime\ApiClient\Model\Response\Post\ModelResponsePostCardSendPan;

/**
 * @method ModelResponsePostCardSendPan sendRequest(ModelRequestPostCardSendPan $modelRequest)
 */
class CardSendPanIO extends IO
{
    /**
     * @return ModelRequestPostCardSendPan
     */
    public function createRequest()
    {
        return parent::createRequestByMethodAndApi(Method::POST, API::CARD_SEND_PAN);
    }
}
