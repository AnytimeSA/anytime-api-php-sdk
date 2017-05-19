<?php

namespace Anytime\ApiClient\Builder\RequestBuilder;

use Anytime\ApiClient\IO\IORequest;
use Anytime\ApiClient\Model\Request\ModelRequest;
use Anytime\ApiClient\Model\Request\Post\ModelRequestPostAccountKyc;

class PostAccountKycRequestBuilder extends RequestBuilder
{
    /**
     * @param ModelRequest|ModelRequestPostAccountKyc $modelRequest
     * @return IORequest
     */
    public function getRequest(ModelRequest $modelRequest)
    {
        $files = [
            'user_selfie'               => $modelRequest->getUserSelfie(),
            'user_identity'             => $modelRequest->getUserIdentity(),
            'user_identity_back'        => $modelRequest->getUserIdentityBack(),
            'user_identity_host'        => $modelRequest->getUserIdentityHost(),
            'user_identity_back_host'   => $modelRequest->getUserIdentityBackHost(),
            'user_passport'             => $modelRequest->getUserPassport(),
            'user_dom_1'                => $modelRequest->getUserDom1(),
            'user_dom_host'             => $modelRequest->getUserDomHost(),
            'user_affidavit'            => $modelRequest->getUserAffidavit(),
            'corp_status'               => $modelRequest->getCorpStatus(),
            'corp_kbis'                 => $modelRequest->getCorpKbis()
        ];

        return $this->createIORequestObject(
            $modelRequest->getMethod(),
            $this->getFullUrl($this->preBuiltData['uri']),
            [],
            [],
            $this->filterNullParams($files)
        );
    }
}