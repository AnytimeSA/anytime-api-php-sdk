<?php

namespace Anytime\ApiClient\Model\Response\Get;


class ModelResponseGetAccountCreditTransferListCreditTransfer
{
    /** @var int */
    private $internalId;

    /** @var int */
    private $senderAccountId;

    /** @var string */
    private $senderAccountType;

    /** @var \DateTime */
    private $creationDate;

    /** @var \DateTime */
    private $requestDate;

    /** @var \DateTime */
    private $executionDate;

    /** @var string */
    private $executionReference;

    /** @var string */
    private $transactionType;

    /** @var string */
    private $beneficiaryName;

    /** @var string */
    private $beneficiaryIban;

    /** @var string */
    private $beneficiarySwiftCode;

    /** @var string */
    private $reason;

    /** @var string */
    private $sourceReason;

    /** @var string */
    private $status;

    /** @var float */
    private $amount;

    /** @var string */
    private $currency;

    /**
     * @return int
     */
    public function getInternalId()
    {
        return $this->internalId;
    }

    /**
     * @param int $internalId
     * @return ModelResponseGetAccountCreditTransferListCreditTransfer
     */
    public function setInternalId($internalId)
    {
        $this->internalId = $internalId;
        return $this;
    }

    /**
     * @return int
     */
    public function getSenderAccountId()
    {
        return $this->senderAccountId;
    }

    /**
     * @param int $senderAccountId
     * @return ModelResponseGetAccountCreditTransferListCreditTransfer
     */
    public function setSenderAccountId($senderAccountId)
    {
        $this->senderAccountId = $senderAccountId;
        return $this;
    }

    /**
     * @return string
     */
    public function getSenderAccountType()
    {
        return $this->senderAccountType;
    }

    /**
     * @param string $senderAccountType
     * @return ModelResponseGetAccountCreditTransferListCreditTransfer
     */
    public function setSenderAccountType($senderAccountType)
    {
        $this->senderAccountType = $senderAccountType;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreationDate()
    {
        return $this->creationDate;
    }

    /**
     * @param \DateTime $creationDate
     * @return ModelResponseGetAccountCreditTransferListCreditTransfer
     */
    public function setCreationDate($creationDate)
    {
        $this->creationDate = $creationDate;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getRequestDate()
    {
        return $this->requestDate;
    }

    /**
     * @param \DateTime $requestDate
     * @return ModelResponseGetAccountCreditTransferListCreditTransfer
     */
    public function setRequestDate($requestDate)
    {
        $this->requestDate = $requestDate;
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
     * @return ModelResponseGetAccountCreditTransferListCreditTransfer
     */
    public function setExecutionDate($executionDate)
    {
        $this->executionDate = $executionDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getExecutionReference()
    {
        return $this->executionReference;
    }

    /**
     * @param string $executionReference
     * @return ModelResponseGetAccountCreditTransferListCreditTransfer
     */
    public function setExecutionReference($executionReference)
    {
        $this->executionReference = $executionReference;
        return $this;
    }

    /**
     * @return string
     */
    public function getTransactionType()
    {
        return $this->transactionType;
    }

    /**
     * @param string $transactionType
     * @return ModelResponseGetAccountCreditTransferListCreditTransfer
     */
    public function setTransactionType($transactionType)
    {
        $this->transactionType = $transactionType;
        return $this;
    }

    /**
     * @return string
     */
    public function getBeneficiaryName()
    {
        return $this->beneficiaryName;
    }

    /**
     * @param string $beneficiaryName
     * @return ModelResponseGetAccountCreditTransferListCreditTransfer
     */
    public function setBeneficiaryName($beneficiaryName)
    {
        $this->beneficiaryName = $beneficiaryName;
        return $this;
    }

    /**
     * @return string
     */
    public function getBeneficiaryIban()
    {
        return $this->beneficiaryIban;
    }

    /**
     * @param string $beneficiaryIban
     * @return ModelResponseGetAccountCreditTransferListCreditTransfer
     */
    public function setBeneficiaryIban($beneficiaryIban)
    {
        $this->beneficiaryIban = $beneficiaryIban;
        return $this;
    }

    /**
     * @return string
     */
    public function getBeneficiarySwiftCode()
    {
        return $this->beneficiarySwiftCode;
    }

    /**
     * @param string $beneficiarySwiftCode
     * @return ModelResponseGetAccountCreditTransferListCreditTransfer
     */
    public function setBeneficiarySwiftCode($beneficiarySwiftCode)
    {
        $this->beneficiarySwiftCode = $beneficiarySwiftCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * @param string $reason
     * @return ModelResponseGetAccountCreditTransferListCreditTransfer
     */
    public function setReason($reason)
    {
        $this->reason = $reason;
        return $this;
    }

    /**
     * @return string
     */
    public function getSourceReason()
    {
        return $this->sourceReason;
    }

    /**
     * @param string $sourceReason
     * @return ModelResponseGetAccountCreditTransferListCreditTransfer
     */
    public function setSourceReason($sourceReason)
    {
        $this->sourceReason = $sourceReason;
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
     * @return ModelResponseGetAccountCreditTransferListCreditTransfer
     */
    public function setStatus($status)
    {
        $this->status = $status;
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
     * @return ModelResponseGetAccountCreditTransferListCreditTransfer
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
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
     * @return ModelResponseGetAccountCreditTransferListCreditTransfer
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
        return $this;
    }


}
