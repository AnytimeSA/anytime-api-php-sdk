<?php

namespace Anytime\ApiClient\Model\Request\Get;

use Anytime\ApiClient\Constant\API;

class ModelRequestGetCardTransactionDetails extends ModelRequestGet
{
    /**
     * @var string
     */
    private $cardRef;

    /**
     * @var string
     */
    private $transactionId;

    /**
     * @return string
     */
    public function getApiName()
    {
        return API::CARD_TRANSACTION_DETAILS;
    }

    /**
     * @return string
     */
    public function getCardRef()
    {
        return $this->cardRef;
    }

    /**
     * @param string $cardRef
     * @return ModelRequestGetCardTransactionDetails
     */
    public function setCardRef($cardRef)
    {
        $this->cardRef = $cardRef;
        return $this;
    }

    /**
     * @return string
     */
    public function getTransactionId()
    {
        return $this->transactionId;
    }

    /**
     * @param string $transactionId
     * @return ModelRequestGetCardTransactionDetails
     */
    public function setTransactionId($transactionId)
    {
        $this->transactionId = $transactionId;
        return $this;
    }
}
