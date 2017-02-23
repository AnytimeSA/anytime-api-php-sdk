<?php

namespace Anytime\ApiClient\IO;

use Anytime\ApiClient\Constant\API;
use Anytime\ApiClient\Constant\Method;
use Anytime\ApiClient\Model\Request\Post\ModelRequestPostApiCheckPost;
use Anytime\ApiClient\Model\Response\Post\ModelResponsePostApiCheckPost;

/**
 * @method ModelResponsePostApiCheckPost sendRequest(ModelRequestPostApiCheckPost $modelRequest)
 */
class ApiCheckPostIO extends IO
{
    /**
     * @return ModelRequestPostApiCheckPost
     */
    public function createRequest()
    {
        return parent::createRequestByMethodAndApi(Method::POST, API::APICHECK_POST);
    }
}