<?php

namespace Anytime\ApiClient\Model\Response\Get;

class ModelResponseGetCardTransactionTransaction
{
    /**
     * @var integer
     */
    private $txid;

    /**
     * @var integer
     */
    private $mcc;

    /**
     * @var float
     */
    private $amount;

    /**
     * @var float
     */
    private $amountFx;

    /**
     * @var string
     */
    private $currency;

    /**
     * @var float
     */
    private $fx;

    /**
     * @var float
     */
    private $fxFee;

    /**
     * @var string
     */
    private $status;

    /**
     * @var string
     */
    private $type;

    /**
     * @var float
     */
    private $balanceAfter;

    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @var string
     */
    private $description;

    /**
     * @return integer
     */
    public function getTxid()
    {
        return $this->txid;
    }

    /**
     * @param integer $txid
     * @return ModelResponseGetCardTransactionTransaction
     */
    public function setTxid($txid)
    {
        $this->txid = (int)$txid;
        return $this;
    }

    /**
     * @return integer
     */
    public function getMcc()
    {
        return $this->mcc;
    }

    /**
     * @param integer $mcc
     * @return ModelResponseGetCardTransactionTransaction
     */
    public function setMcc($mcc)
    {
        $this->mcc = (int)$mcc;
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
     * @return ModelResponseGetCardTransactionTransaction
     */
    public function setAmount($amount)
    {
        $this->amount = (float)$amount;
        return $this;
    }

    /**
     * @return float
     */
    public function getAmountFx()
    {
        return $this->amountFx;
    }

    /**
     * @param float $amountFx
     * @return ModelResponseGetCardTransactionTransaction
     */
    public function setAmountFx($amountFx)
    {
        $this->amountFx = (float)$amountFx;
        return $this;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     * @return ModelResponseGetCardTransactionTransaction
     */
    public function setCurrency($currency)
    {
        $this->currency = (string)$currency;
        return $this;
    }

    /**
     * @return float
     */
    public function getFx()
    {
        return $this->fx;
    }

    /**
     * @param float $fx
     * @return ModelResponseGetCardTransactionTransaction
     */
    public function setFx($fx)
    {
        $this->fx = (float)$fx;
        return $this;
    }

    /**
     * @return float
     */
    public function getFxFee()
    {
        return $this->fxFee;
    }

    /**
     * @param float $fxFee
     * @return ModelResponseGetCardTransactionTransaction
     */
    public function setFxFee($fxFee)
    {
        $this->fxFee = (float)$fxFee;
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
     * @return ModelResponseGetCardTransactionTransaction
     */
    public function setStatus($status)
    {
        $this->status = (string)$status;
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
     * @return ModelResponseGetCardTransactionTransaction
     */
    public function setType($type)
    {
        $this->type = (string)$type;
        return $this;
    }

    /**
     * @return float
     */
    public function getBalanceAfter()
    {
        return $this->balanceAfter;
    }

    /**
     * @param float $balanceAfter
     * @return ModelResponseGetCardTransactionTransaction
     */
    public function setBalanceAfter($balanceAfter)
    {
        $this->balanceAfter = (float)$balanceAfter;
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
     * @return ModelResponseGetCardTransactionTransaction
     */
    public function setDate($date)
    {
        $this->date = $date;
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
     * @return ModelResponseGetCardTransactionTransaction
     */
    public function setDescription($description)
    {
        $this->description = (string)$description;
        return $this;
    }

}