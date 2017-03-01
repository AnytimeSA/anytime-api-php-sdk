<?php

namespace Anytime\ApiClient\Builder\RequestBuilder;

use Anytime\ApiClient\IO\IORequest;
use Anytime\ApiClient\Model\Request\ModelRequest;
use Anytime\ApiClient\Model\Request\Post\ModelRequestPostAccountCreditTransfer;

class PostAccountCreditTransferRequestBuilder extends RequestBuilder
{
    /**
     * @param ModelRequest|ModelRequestPostAccountCreditTransfer $modelRequest
     * @return IORequest
     */
    public function getRequest(ModelRequest $modelRequest)
    {
        return $this->createIORequestObject(
            $modelRequest->getMethod(),
            $this->getFullUrl($this->preBuiltData['uri']),
            $this->filterNullParams([
                'dst_acc_id'        =>  $modelRequest->getDstAccId(),
                'src_comment'       =>  $modelRequest->getSrcComment(),
                'dst_comment'       =>  $modelRequest->getDstComment(),
                'dst_name'          =>  $modelRequest->getDstName(),
                'dst_type'          =>  $modelRequest->getDstType(),
                'dst_iban'          =>  $modelRequest->getDstIban(),
                'dst_swift'         =>  $modelRequest->getDstSwift(),
                'amount'            =>  $modelRequest->getAmount()
            ])
        );
    }
}