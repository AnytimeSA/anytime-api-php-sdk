<?php

namespace Anytime\ApiClient\Model\Response\Get;

class ModelResponseGetAccountStatementDetails extends ModelResponseGet
{
    /**
     * @return string
     */
    public function getTxid()
    {
        return (string)$this->getDataValue('txid');
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return (string)$this->getDataValue('description');
    }

    /**
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->timezoneNormalizer->normalize($this->getDataValue('date'));
    }

    /**
     * @return float
     */
    public function getAmount()
    {
        return (float)$this->getDataValue('amount');
    }

    /**
     * @return string
     */
    public function getType()
    {
        return (string)$this->getDataValue('type');
    }

    /**
     * @return float
     */
    public function getBalance()
    {
        return (float)$this->getDataValue('balance');
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
        return (string)$this->getDataValue('currency');
    }
}