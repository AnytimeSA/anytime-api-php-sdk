<?php

namespace Anytime\ApiClient\Model\Request\Get;

use Anytime\ApiClient\Constant\API;

class ModelRequestGetAccountCreditTransferTestimonialDownload extends ModelRequestGet
{
    /**
     * @var integer
     */
    private $accountId;

    /**
     * @var integer
     */
    private $creditTransferId;

    /**
     * @return int
     */
    public function getAccountId()
    {
        return $this->accountId;
    }

    /**
     * @param int $accountId
     * @return ModelRequestGetAccountCreditTransferTestimonialDownload
     */
    public function setAccountId($accountId)
    {
        $this->accountId = $accountId;
        return $this;
    }

    /**
     * @return int
     */
    public function getCreditTransferId()
    {
        return $this->creditTransferId;
    }

    /**
     * @param int $creditTransferId
     * @return ModelRequestGetAccountCreditTransferTestimonialDownload
     */
    public function setCreditTransferId($creditTransferId)
    {
        $this->creditTransferId = $creditTransferId;
        return $this;
    }



    /**
     * @return string
     */
    public function getApiName()
    {
        return API::ACCOUNT_CREDIT_TRANSFER_TESTIMONIAL_DOWNLOAD;
    }

}
