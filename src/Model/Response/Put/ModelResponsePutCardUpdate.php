<?php

namespace Anytime\ApiClient\Model\Response\Put;

class ModelResponsePutCardUpdate extends ModelResponsePut
{
    /**
     * @return string
     */
    public function getCardRef()
    {
        return $this->getDataValue('card_ref');
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->getDataValue('status');
    }

    /**
     * @return integer
     */
    public function getPos()
    {
        return $this->getDataValue('pos');
    }

    /**
     * @return integer
     */
    public function getAtm()
    {
        return $this->getDataValue('atm');
    }

    /**
     * @return integer
     */
    public function getRenew()
    {
        return $this->getDataValue('renew');
    }

}