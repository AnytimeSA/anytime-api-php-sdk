<?php

namespace Anytime\ApiClient\Model\Response\Get;

class ModelResponseGetAccountInfoVirtualIban
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
    private $type;

    /**
     * @return string
     */
    public function getIban()
    {
        return $this->iban;
    }

    /**
     * @param string $iban
     * @return ModelResponseGetAccountInfo
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
     * @return ModelResponseGetAccountInfo
     */
    public function setSwift($swift)
    {
        $this->swift = $swift;
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
     * @return ModelResponseGetAccountInfoIban
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }
}
