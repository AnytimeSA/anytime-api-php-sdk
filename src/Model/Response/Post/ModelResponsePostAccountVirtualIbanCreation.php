<?php

namespace Anytime\ApiClient\Model\Response\Post;

class ModelResponsePostAccountVirtualIbanCreation extends ModelResponsePost
{
    /**
     * @return string
     */
    public function getIban()
    {
        return (string)$this->getDataValue('iban');
    }

    /**
     * @return string
     */
    public function getSwift()
    {
        return (string)$this->getDataValue('swift');
    }

    /**
     * @return string
     */
    public function getType()
    {
        return (string)$this->getDataValue('type');
    }
}