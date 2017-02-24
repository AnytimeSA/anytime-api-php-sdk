<?php

namespace Anytime\ApiClient\Model\Response\Get;

class ModelResponseGetAccountStatementTransaction
{
    /**
     * @var string
     */
    private $description;

    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @var float
     */
    private $amount;

    /**
     * @var string
     */
    private $type;

    /**
     * @var float
     */
    private $balance;

    /**
     * @var float
     */
    private $currency;

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return ModelResponseGetAccountStatementTransaction
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param \DateTime $date
     * @return ModelResponseGetAccountStatementTransaction
     */
    public function setDate($date)
    {
        $this->date = $date;
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
     * @return ModelResponseGetAccountStatementTransaction
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return ModelResponseGetAccountStatementTransaction
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return float
     */
    public function getBalance()
    {
        return $this->balance;
    }

    /**
     * @param float $balance
     * @return ModelResponseGetAccountStatementTransaction
     */
    public function setBalance($balance)
    {
        $this->balance = $balance;
        return $this;
    }

    /**
     * @return float
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param float $currency
     * @return ModelResponseGetAccountStatementTransaction
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
        return $this;
    }


}