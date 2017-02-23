<?php

namespace Anytime\ApiClient\IO;

use Anytime\ApiClient\Constant\API;
use Anytime\ApiClient\Constant\Method;
use Anytime\ApiClient\Model\Request\Post\ModelRequestPostCardOrder;
use Anytime\ApiClient\Model\Response\Post\ModelResponsePostCardOrder;

/**
 * @method ModelResponsePostCardOrder sendRequest(ModelRequestPostCardOrder $modelRequest)
 */
class CardOrderIO extends IO
{
    /**
     * @return ModelRequestPostCardOrder
     */
    public function createRequest()
    {
        return parent::createRequestByMethodAndApi(Method::POST, API::CARD_ORDER);
    }
}