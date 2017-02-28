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
        $data = [
            'acc_currency'          =>  $modelRequest->getAccCurrency(),
            'user_gender'           =>  $modelRequest->getUserGender(),
            'user_first_name'       =>  $modelRequest->getUserFirstName(),
            'user_last_name'        =>  $modelRequest->getUserLastName(),
            'user_dob'              =>  ($modelRequest->getUserDob() ? $modelRequest->getUserDob()->format('Y-m-d') : null),
            'user_pob'              =>  $modelRequest->getUserPob(),
            'user_email'            =>  $modelRequest->getUserEmail(),
            'user_mobile_number'    =>  $modelRequest->getUserMobileNumber(),
            'user_addr_line_1'      =>  $modelRequest->getUserAddrLine1(),
            'user_addr_line_2'      =>  $modelRequest->getUserAddrLine2(),
            'user_addr_zip'         =>  $modelRequest->getUserAddrZip(),
            'user_addr_city'        =>  $modelRequest->getUserAddrCity(),
            'user_addr_cc'          =>  $modelRequest->getUserAddrCc(),
            'user_nationality'      =>  $modelRequest->getUserNationality(),
            'corp_name'             =>  $modelRequest->getCorpName(),
            'corp_regnum'           =>  $modelRequest->getCorpRegNum(),
            'corp_type'             =>  $modelRequest->getCorpType(),
            'corp_activity'         =>  $modelRequest->getCorpActivity(),
            'corp_tva'              =>  $modelRequest->getCorpTva(),
            'corp_addr_line_1'      =>  $modelRequest->getCorpAddrLine1(),
            'corp_addr_line_2'      =>  $modelRequest->getCorpAddrLine2(),
            'corp_addr_zip'         =>  $modelRequest->getcorpAddrZip(),
            'corp_addr_city'        =>  $modelRequest->getcorpAddrCity(),
            'corp_addr_cc'          =>  $modelRequest->getcorpAddrCc()
        ];

        return $this->createRequestObject(
            $modelRequest->getMethod(),
            $this->getFullUrl($this->preBuiltData['uri']),
            $this->filterNullParams($data)
        );
    }
}