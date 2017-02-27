<?php

namespace Anytime\ApiClient\Builder\RequestBuilder;

use Anytime\ApiClient\IO\IORequest;
use Anytime\ApiClient\Model\Request\ModelRequest;
use Anytime\ApiClient\Model\Request\Put\ModelRequestPutCardUpdate;

class PutCardUpdateRequestBuilder extends RequestBuilder
{
    /**
     * @param ModelRequest|ModelRequestPutCardUpdate $modelRequest
     * @return IORequest
     */
    public function getRequest(ModelRequest $modelRequest)
    {
        return $this->createRequestObject(
            $modelRequest->getMethod(),
            $this->getFullUrl($this->preBuiltData['uri']),
            [
                'card_ref'      => $modelRequest->getCardRef(),
                'card_status'   => $modelRequest->getCardStatus(),
                'card_pos'      => $modelRequest->getCardPos(),
                'card_atm'      => $modelRequest->getCardAtm(),
                'card_renew'    => $modelRequest->getCardRenew()
            ]
        );
    }
}