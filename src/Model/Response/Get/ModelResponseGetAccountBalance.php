<?php

namespace Anytime\ApiClient\Model\Response\Get;

class ModelResponseGetAccountBalance extends ModelResponseGet
{
    /**
     * @return integer
     */
    public function getAccId()
    {
        return $this->getDataValue('acc_id');
    }

    /**
     * @return float
     */
    public function getBalance()
    {
        return $this->getDataValue('balance');
    }
}