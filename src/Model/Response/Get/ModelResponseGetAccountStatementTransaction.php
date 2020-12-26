<?php

namespace Anytime\ApiClient\Model\Response\Get;

class ModelResponseGetAccountStatementTransaction
{
    /**
     * @var string
     */
    private $txid;

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
     * @var ModelResponseGetAccountStatementTransactionIban
     */
    private $iban;

    /**
     * @var string
     */
    private $virtualIban;

    /**
     * @var string
     */
    private $status;

    /**
     * @var \DateTime
     */
    private $executionDate;

    /**
     * @return string
     */
    public function getTxid()
    {
        return $this->txid;
    }

    /**
     * @param string $txid
     * @return ModelResponseGetAccountStatementTransaction
     */
    public function setTxid($txid)
    {
        $this->txid = $txid;
        return $this;
    }

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
        $this->description = (string)$description;
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
    public function setDate(\DateTime $date)
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
        $this->amount = (float)$amount;
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
        $this->type = (string)$type;
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
        $this->balance = (float)$balance;
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
     * @param string $currency
     * @return ModelResponseGetAccountStatementTransaction
     */
    public function setCurrency($currency)
    {
        $this->currency = (string)$currency;
        return $this;
    }

    /**
     * @return string
     */
    public function getVirtualIban()
    {
        return $this->virtualIban;
    }

    /**
     * @param string $virtualIban
     * @return ModelResponseGetAccountStatementTransaction
     */
    public function setVirtualIban($virtualIban)
    {
        $this->virtualIban = $virtualIban;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     * @return ModelResponseGetAccountStatementTransaction
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getExecutionDate()
    {
        return $this->executionDate;
    }

    /**
     * @param \DateTime $executionDate
     * @return ModelResponseGetAccountStatementTransaction
     */
    public function setExecutionDate(\DateTime $executionDate)
    {
        $this->executionDate = $executionDate;
        return $this;
    }

    /**
     * @return ModelResponseGetAccountStatementTransactionIban
     */
    public function getIban()
    {
        return $this->iban;
    }

    /**
     * @param ModelResponseGetAccountStatementTransactionIban $iban
     * @return ModelResponseGetAccountStatementTransaction
     */
    public function setIban($iban)
    {
        $this->iban = $iban;
        return $this;
    }


}
