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

    /**
     * @return string
     */
    public function getStatus()
    {
        return (string)$this->getDataValue('status');
    }

    /**
     * @return \DateTime
     */
    public function getExecutionDate()
    {
        return $this->timezoneNormalizer->normalize($this->getDataValue('execution_date'));
    }

    /**
     * @return ModelResponseGetAccountStatementTransactionIban
     */
    public function getIban()
    {
        if(!$this->isGetterCached(__METHOD__)) {
            $ibanData = $this->getDataValue('iban');
            $iban = $this->hydrator->hydrate(
                new ModelResponseGetAccountStatementTransactionIban(),
                is_null($ibanData) ? [] : $ibanData
            );
            $this->setGetterCache(__METHOD__, $iban);
        }

        return $this->getGetterCache(__METHOD__);
    }
}