<?php

namespace Anytime\ApiClient\Builder\RequestBuilder;

use Anytime\ApiClient\IO\IORequest;
use Anytime\ApiClient\Model\Request\ModelRequest;
use Anytime\ApiClient\Model\Request\Post\ModelRequestPostCardDebit;

class PostCardDebitRequestBuilder extends RequestBuilder
{
    /**
     * @param ModelRequest|ModelRequestPostCardDebit $modelRequest
     * @return IORequest
     */
    public function getRequest(ModelRequest $modelRequest)
    {
        return $this->createRequestObject(
            $modelRequest->getMethod(),
            $this->getFullUrl($this->preBuiltData['uri']),
            $this->filterNullParams([
                'card_ref'      =>  $modelRequest->getCardRef(),
                'amount'        =>  $modelRequest->getAmount(),
                'acc_comment'   =>  $modelRequest->getAccComment(),
                'card_comment'  =>  $modelRequest->getCardComment()
            ])
        );
    }
}