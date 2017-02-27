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
        $files = [];

        if($modelRequest->getUserSelfie())              $files['user_selfie'] = $modelRequest->getUserSelfie();
        if($modelRequest->getUserIdentity())            $files['user_identity'] = $modelRequest->getUserIdentity();
        if($modelRequest->getUserIdentityBack())        $files['user_identity_back'] = $modelRequest->getUserIdentityBack();
        if($modelRequest->getUserIdentityHost())        $files['user_identity_host'] = $modelRequest->getUserIdentityHost();
        if($modelRequest->getUserIdentityBackHost())    $files['user_identity_back_host'] = $modelRequest->getUserIdentityBackHost();
        if($modelRequest->getUserDom1())                $files['user_dom_1'] = $modelRequest->getUserDom1();
        if($modelRequest->getUserDomHost())             $files['user_dom_host'] = $modelRequest->getUserDomHost();
        if($modelRequest->getUserAffidavit())           $files['user_affidavit'] = $modelRequest->getUserAffidavit();
        if($modelRequest->getCorpStatus())              $files['corp_status'] = $modelRequest->getCorpStatus();
        if($modelRequest->getCorpKbis())                $files['corp_kbis'] = $modelRequest->getCorpKbis();

        return $this->createRequestObject(
            $modelRequest->getMethod(),
            $this->getFullUrl($this->preBuiltData['uri']),
            [],
            [],
            $files
        );
    }
}