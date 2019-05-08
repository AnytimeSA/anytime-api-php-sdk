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
     * @param string $txid
     * @return ModelRequestGetAccountStatementDetails
     */
    public function setTxid($txid)
    {
        $matches = [];
        if(preg_match('/^([0-9]+)\-([0-9]+)$/', $txid, $matches)) {
            $this->setId((int)$matches[1]);
            $this->txid = (int)$matches[2];
        } else {
            $this->txid = (int)$txid;
        }

        return $this;
    }
}
