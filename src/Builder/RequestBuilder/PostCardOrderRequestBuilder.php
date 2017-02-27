<?php

namespace Anytime\ApiClient\Builder\RequestBuilder;

use Anytime\ApiClient\IO\IORequest;
use Anytime\ApiClient\Model\Request\ModelRequest;
use Anytime\ApiClient\Model\Request\Post\ModelRequestPostCardOrder;

class PostCardOrderRequestBuilder extends RequestBuilder
{
    /**
     * @param ModelRequest|ModelRequestPostCardOrder $modelRequest
     * @return IORequest
     */
    public function getRequest(ModelRequest $modelRequest)
    {
        return $this->createRequestObject(
            $modelRequest->getMethod(),
            $this->getFullUrl($this->preBuiltData['uri']),
            [
                'acc_id'                =>  $modelRequest->getAccId(),
                'card_name'             =>  $modelRequest->getCardName(),
                'card_type'             =>  $modelRequest->getCardType(),
                'expiry_date'           =>  $modelRequest->getExpiryDate()->format('Y-m-d'),
                'amount'                =>  $modelRequest->getAmount(),
                'language'              =>  $modelRequest->getLanguage(),
                'delivery_company_name' =>  $modelRequest->getDeliveryCompanyName(),
                'delivery_gender'       =>  $modelRequest->getDeliveryGender(),
                'delivery_first_name'   =>  $modelRequest->getDeliveryFirstName(),
                'delivery_last_name'    =>  $modelRequest->getDeliveryLastName(),
                'delivery_addr_1'       =>  $modelRequest->getDeliveryAddr1(),
                'delivery_addr_2'       =>  $modelRequest->getDeliveryAddr2(),
                'delivery_zip'          =>  $modelRequest->getDeliveryZip(),
                'delivery_city'         =>  $modelRequest->getDeliveryCity(),
                'delivery_cc'           =>  $modelRequest->getDeliveryCc()
            ]
        );
    }
}