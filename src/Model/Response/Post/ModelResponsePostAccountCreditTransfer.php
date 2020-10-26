<?php

namespace Anytime\ApiClient\Model\Response\Post;

class ModelResponsePostAccountCreditTransfer extends ModelResponsePost
{
    /**
     * @return int
     */
    public function getInternalId()
    {
        return (int)$this->getDataValue('internal_id');
    }

    /**
     * @return int
     */
    public function getSenderAccountId()
    {
        return (int)$this->getDataValue('sender_account_id');
    }

    /**
     * @return string
     */
    public function getSenderAccountType()
    {
        return (string)$this->getDataValue('sender_account_type');
    }

    /**
     * @return \DateTime
     */
    public function getCreationDate()
    {
        return $this->timezoneNormalizer->normalize($this->getDataValue('creation_date'));
    }

    /**
     * @return \DateTime
     */
    public function getRequestDate()
    {
        return $this->timezoneNormalizer->normalize($this->getDataValue('request_date'));
    }

    /**
     * @return \DateTime
     */
    public function getExecutionDate()
    {
        return $this->timezoneNormalizer->normalize($this->getDataValue('execution_date'));
    }

    /**
     * @return string
     */
    public function getExecutionReference()
    {
        return (string)$this->getDataValue('execution_reference');
    }

    /**
     * @return string
     */
    public function getTransactionType()
    {
        return (string)$this->getDataValue('transaction_type');
    }

    /**
     * @return string
     */
    public function getBeneficiaryName()
    {
        return (string)$this->getDataValue('beneficiary_name');
    }

    /**
     * @return string
     */
    public function getBeneficiaryIban()
    {
        return (string)$this->getDataValue('beneficiary_iban');
    }

    /**
     * @return string
     */
    public function getBeneficiarySwiftCode()
    {
        return (string)$this->getDataValue('beneficiary_swift_code');
    }

    /**
     * @return string
     */
    public function getReason()
    {
        return (string)$this->getDataValue('reason');
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return (string)$this->getDataValue('status');
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
    public function getCurrency()
    {
        return (string)$this->getDataValue('currency');
    }
}
