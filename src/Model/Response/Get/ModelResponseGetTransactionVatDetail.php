<?php

namespace Anytime\ApiClient\Model\Response\Get;

class ModelResponseGetTransactionVatDetail
{
    /**
     * @var float
     */
    private $rate;

    /**
     * @var float
     */
    private $amount;

    /**
     * @return float
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * @param float $rate
     * @return ModelResponseGetTransactionVatDetail
     */
    public function setRate($rate)
    {
        $this->rate = (float)$rate;
        return $this;
    }

    /**
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param float $amount
     * @return ModelResponseGetTransactionVatDetail
     */
    public function setAmount($amount)
    {
        $this->amount = (float)$amount;
        return $this;
    }
}
