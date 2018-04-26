<?php

namespace Anytime\ApiClient\Model\Response\Get;

use Anytime\ApiClient\Model\Response\Get\Traits\PagingTrait;

class ModelResponseGetAccountIbanStatement extends ModelResponseGet
{
    use PagingTrait;

    /**
     * @return integer
     */
    public function getAccId()
    {
        return (int)$this->getDataValue('acc_id');
    }

    /**
     * @return string
     */
    public function getAccType()
    {
        return (string)$this->getDataValue('acc_type');
    }

    /**
     * @return ModelResponseGetAccountIbanStatementTransaction[]
     */
    public function getTransactions()
    {
        if(!$this->isGetterCached(__METHOD__)) {
            $transactions = [];
            foreach ($this->data['transactions'] as $elem) {
                $transactions[] = $this->hydrator->hydrate(
                    new ModelResponseGetAccountIbanStatementTransaction(),
                    $elem
                );
            }

            $this->setGetterCache(__METHOD__, $transactions);
        }

        return $this->getGetterCache(__METHOD__);
    }

}