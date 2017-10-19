<?php

namespace Anytime\ApiClient\Model\Request\Get;

use Anytime\ApiClient\Constant\API;

class ModelRequestGetAccountStatementDetails extends ModelRequestGet
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $txid;

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param integer $id
     * @return ModelRequestGetAccountStatementDetails
     */
    public function setId($id)
    {
        $this->id = (int)$id;
        return $this;
    }

    /**
     * @return string
     */
    public function getApiName()
    {
        return API::ACCOUNT_STATEMENT_DETAILS;
    }

    /**
     * @return int
     */
    public function getTxid()
    {
        return $this->txid;
    }

    /**
     * @param int $txid
     * @return ModelRequestGetAccountStatementDetails
     */
    public function setTxid($txid)
    {
        $this->txid = $txid;
        return $this;
    }

}