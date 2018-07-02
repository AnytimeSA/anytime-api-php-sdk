<?php

namespace Anytime\ApiClient\IO;

use Anytime\ApiClient\Constant\API;
use Anytime\ApiClient\Constant\Method;
use Anytime\ApiClient\Model\Request\Post\ModelRequestPostAccountLinkCards;
use Anytime\ApiClient\Model\Response\Post\ModelResponsePostAccountLinkCards;

/**
 * @method ModelResponsePostAccountLinkCards sendRequest(ModelRequestPostAccountLinkCards $modelRequest)
 */
class AccountLinkCardsIO extends IO
{
    /**
     * @return ModelRequestPostAccountLinkCards
     */
    public function createRequest()
    {
        return parent::createRequestByMethodAndApi(Method::POST, API::ACCOUNT_LINK_CARDS);
    }
}