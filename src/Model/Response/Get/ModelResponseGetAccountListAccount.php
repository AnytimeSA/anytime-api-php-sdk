<?php

namespace Anytime\ApiClient\Model\Response\Get;

class ModelResponseGetAccountListAccount
{
    /**
     * @var integer
     */
    private $accId;

    /**
     * @var string
     */
    private $accType;

    /**
     * @return int
     */
    public function getAccId()
    {
        return $this->accId;
    }

    /**
     * @param int $accId
     * @return ModelResponseGetAccountListAccount
     */
    public function setAccId($accId)
    {
        $this->accId = $accId;
        return $this;
    }

    /**
     * @return string
     */
    public function getAccType()
    {
        return $this->accType;
    }

    /**
     * @param string $accType
     * @return ModelResponseGetAccountListAccount
     */
    public function setAccType($accType)
    {
        $this->accType = $accType;
        return $this;
    }


}