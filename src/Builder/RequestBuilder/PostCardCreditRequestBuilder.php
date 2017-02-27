<?php

namespace Anytime\ApiClient\Builder\RequestBuilder;

use Anytime\ApiClient\IO\IORequest;
use Anytime\ApiClient\Model\Request\ModelRequest;
use Anytime\ApiClient\Model\Request\Post\ModelRequestPostCardCredit;

class PostCardCreditRequestBuilder extends RequestBuilder
{
    /**
     * @param ModelRequest|ModelRequestPostCardCredit $modelRequest
     * @return IORequest
     */
    public function getRequest(ModelRequest $modelRequest)
    {
        return $this->createRequestObject(
            $modelRequest->getMethod(),
            $this->getFullUrl($this->preBuiltData['uri']),
            [
                'card_ref'      =>  $modelRequest->getCardRef(),
                'amount'        =>  $modelRequest->getAmount(),
                'acc_comment'   =>  $modelRequest->getAccComment(),
                'card_comment'  =>  $modelRequest->getCardComment()
            ]
        );
    }
}