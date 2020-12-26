<?php

namespace Anytime\ApiClient\IO;

use Anytime\ApiClient\Constant\API;
use Anytime\ApiClient\Constant\Method;
use Anytime\ApiClient\Model\Request\Post\ModelRequestPostOAuth2Token;
use Anytime\ApiClient\Model\Response\Post\ModelResponsePostOAuth2Token;

/**
 * @method ModelResponsePostOAuth2Token sendRequest(ModelRequestPostOAuth2Token $modelRequest)
 */
class OAuth2TokenIO extends IO
{
    /**
     * @return ModelRequestPostOAuth2Token
     */
    public function createRequest()
    {
        return parent::createRequestByMethodAndApi(Method::POST, API::OAUTH2_TOKEN);
    }
}
