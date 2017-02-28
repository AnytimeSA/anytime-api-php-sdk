<?php

namespace Anytime\ApiClient\Model\Response\Post;

class ModelResponsePostAccountCreditTransfer extends ModelResponsePost
{
    /**
     * @return float
     */
    public function getSrcBalanceAfter()
    {
        return (float)$this->getDataValue('src_balance_after');
    }

    /**
     * @return float
     */
    public function getDstBalanceAfter()
    {
        return (float)$this->getDataValue('dst_balance_after');
    }

}