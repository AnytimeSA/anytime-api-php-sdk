<?php

namespace Anytime\ApiClient\Model\Request\Post;

use Anytime\ApiClient\Constant\API;

class ModelRequestPostAccountCreditTransfer extends ModelRequestPost
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $dstAccId;

    /**
     * @var string
     */
    private $srcComment;

    /**
     * @var string
     */
    private $dstComment;

    /**
     * @var string
     */
    private $dstName;

    /**
     * @var string
     */
    private $dstType;

    /**
     * @var string
     */
    private $dstIban;

    /**
     * @var string
     */
    private $dstSwift;

    /**
     * @var float
     */
    private $amount;


    /**
     * @return string
     */
    public function getApiName()
    {
        return API::ACCOUNT_CREDIT_TRANSFER;
    }

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return ModelRequestPostAccountCreditTransfer
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return integer
     */
    public function getDstAccId()
    {
        return $this->dstAccId;
    }

    /**
     * @param int $dstAccId
     * @return ModelRequestPostAccountCreditTransfer
     */
    public function setDstAccId($dstAccId)
    {
        $this->dstAccId = $dstAccId;
        return $this;
    }

    /**
     * @return string
     */
    public function getSrcComment()
    {
        return $this->srcComment;
    }

    /**
     * @param string $srcComment
     * @return ModelRequestPostAccountCreditTransfer
     */
    public function setSrcComment($srcComment)
    {
        $this->srcComment = $srcComment;
        return $this;
    }

    /**
     * @return string
     */
    public function getDstComment()
    {
        return $this->dstComment;
    }

    /**
     * @param string $dstComment
     * @return ModelRequestPostAccountCreditTransfer
     */
    public function setDstComment($dstComment)
    {
        $this->dstComment = $dstComment;
        return $this;
    }

    /**
     * @return string
     */
    public function getDstName()
    {
        return $this->dstName;
    }

    /**
     * @param string $dstName
     * @return ModelRequestPostAccountCreditTransfer
     */
    public function setDstName($dstName)
    {
        $this->dstName = $dstName;
        return $this;
    }

    /**
     * @return string
     */
    public function getDstType()
    {
        return $this->dstType;
    }

    /**
     * @param string $dstType
     * @return ModelRequestPostAccountCreditTransfer
     */
    public function setDstType($dstType)
    {
        $this->dstType = $dstType;
        return $this;
    }

    /**
     * @return string
     */
    public function getDstIban()
    {
        return $this->dstIban;
    }

    /**
     * @param string $dstIban
     * @return ModelRequestPostAccountCreditTransfer
     */
    public function setDstIban($dstIban)
    {
        $this->dstIban = $dstIban;
        return $this;
    }

    /**
     * @return string
     */
    public function getDstSwift()
    {
        return $this->dstSwift;
    }

    /**
     * @param string $dstSwift
     * @return ModelRequestPostAccountCreditTransfer
     */
    public function setDstSwift($dstSwift)
    {
        $this->dstSwift = $dstSwift;
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
     * @return ModelRequestPostAccountCreditTransfer
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }

}