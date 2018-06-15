<?php

namespace Anytime\ApiClient\Model\Response\Get;

class ModelResponseGetAccountStatementTransactionIban
{
    /**
     * @var string
     */
    private $iban;

    /**
     * @var string
     */
    private $swift;

    /**
     * @var string
     */
    private $comment;

    /**
     * @return string
     */
    public function getIban()
    {
        return $this->iban;
    }

    /**
     * @param string $iban
     * @return ModelResponseGetAccountStatementTransactionIban
     */
    public function setIban($iban)
    {
        $this->iban = $iban;
        return $this;
    }

    /**
     * @return string
     */
    public function getSwift()
    {
        return $this->swift;
    }

    /**
     * @param string $swift
     * @return ModelResponseGetAccountStatementTransactionIban
     */
    public function setSwift($swift)
    {
        $this->swift = $swift;
        return $this;
    }

    /**
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @param string $comment
     * @return ModelResponseGetAccountStatementTransactionIban
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
        return $this;
    }
}