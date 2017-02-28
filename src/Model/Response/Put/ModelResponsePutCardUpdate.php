<?php

namespace Anytime\ApiClient\Model\Response\Put;

class ModelResponsePutCardUpdate extends ModelResponsePut
{
    /**
     * @return string
     */
    public function getCardRef()
    {
        return (string)$this->getDataValue('card_ref');
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return (string)$this->getDataValue('status');
    }

    /**
     * @return integer
     */
    public function getPos()
    {
        return (int)$this->getDataValue('pos');
    }

    /**
     * @return integer
     */
    public function getAtm()
    {
        return (int)$this->getDataValue('atm');
    }

    /**
     * @return integer
     */
    public function getRenew()
    {
        return (int)$this->getDataValue('renew');
    }

}