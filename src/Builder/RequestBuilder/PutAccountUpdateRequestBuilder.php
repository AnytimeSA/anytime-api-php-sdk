<?php

namespace Anytime\ApiClient\Builder\RequestBuilder;

use Anytime\ApiClient\IO\IORequest;
use Anytime\ApiClient\Model\Request\ModelRequest;
use Anytime\ApiClient\Model\Request\Put\ModelRequestPutAccountUpdate;

class PutAccountUpdateRequestBuilder extends RequestBuilder
{
    /**
     * @param ModelRequest|ModelRequestPutAccountUpdate $modelRequest
     * @return IORequest
     */
    public function getRequest(ModelRequest $modelRequest)
    {
        $data = [];

        if(!is_null($modelRequest->getAccCurrency()))               $data['acc_currency']          =  $modelRequest->getAccCurrency();
        if(!is_null($modelRequest->getUserGender()))                $data['user_gender']           =  $modelRequest->getUserGender();
        if(!is_null($modelRequest->getUserFirstName()))             $data['user_first_name']       =  $modelRequest->getUserFirstName();
        if(!is_null($modelRequest->getUserLastName()))              $data['user_last_name']        =  $modelRequest->getUserLastName();
        if(!is_null($modelRequest->getUserDob()))                   $data['user_dob']              =  $modelRequest->getUserDob()->format('Y-m-d');
        if(!is_null($modelRequest->getUserPob()))                   $data['user_pob']              =  $modelRequest->getUserPob();
        if(!is_null($modelRequest->getUserEmail()))                 $data['user_email']            =  $modelRequest->getUserEmail();
        if(!is_null($modelRequest->getUserMobileNumber()))          $data['user_mobile_number']    =  $modelRequest->getUserMobileNumber();
        if(!is_null($modelRequest->getUserAddrLine1()))             $data['user_addr_line_1']      =  $modelRequest->getUserAddrLine1();
        if(!is_null($modelRequest->getUserAddrLine2()))             $data['user_addr_line_2']      =  $modelRequest->getUserAddrLine2();
        if(!is_null($modelRequest->getUserAddrZip()))               $data['user_addr_zip']         =  $modelRequest->getUserAddrZip();
        if(!is_null($modelRequest->getUserAddrCity()))              $data['user_addr_city']        =  $modelRequest->getUserAddrCity();
        if(!is_null($modelRequest->getUserAddrCc()))                $data['user_addr_cc']          =  $modelRequest->getUserAddrCc();
        if(!is_null($modelRequest->getUserNationality()))           $data['user_nationality']      =  $modelRequest->getUserNationality();
        if(!is_null($modelRequest->getCorpName()))                  $data['corp_name']             =  $modelRequest->getCorpName();
        if(!is_null($modelRequest->getCorpRegNum()))                $data['corp_regnum']           =  $modelRequest->getCorpRegNum();
        if(!is_null($modelRequest->getCorpType()))                  $data['corp_type']             =  $modelRequest->getCorpType();
        if(!is_null($modelRequest->getCorpActivity()))              $data['corp_activity']         =  $modelRequest->getCorpActivity();
        if(!is_null($modelRequest->getCorpTva()))                   $data['corp_tva']              =  $modelRequest->getCorpTva();
        if(!is_null($modelRequest->getCorpAddrLine1()))             $data['corp_addr_line_1']      =  $modelRequest->getCorpAddrLine1();
        if(!is_null($modelRequest->getCorpAddrLine2()))             $data['corp_addr_line_2']      =  $modelRequest->getCorpAddrLine2();
        if(!is_null($modelRequest->getcorpAddrZip()))               $data['corp_addr_zip']         =  $modelRequest->getcorpAddrZip();
        if(!is_null($modelRequest->getcorpAddrCity()))              $data['corp_addr_city']        =  $modelRequest->getcorpAddrCity();
        if(!is_null($modelRequest->getcorpAddrCc()))                $data['corp_addr_cc']          =  $modelRequest->getcorpAddrCc();

        return $this->createRequestObject(
            $modelRequest->getMethod(),
            $this->getFullUrl($this->preBuiltData['uri']),
            $data
        );
    }
}