<?php

namespace Anytime\ApiClient\Model\Response\Put;

class ModelResponsePutAccountUpdate extends ModelResponsePut
{
    /**
     * @return integer
     */
    public function getAccId()
    {
        return $this->getDataValue('acc_id');
    }

    /**
     * @return string
     */
    public function getAccType()
    {
        return $this->getDataValue('acc_type');
    }




}