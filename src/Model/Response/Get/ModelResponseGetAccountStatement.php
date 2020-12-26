<?php

namespace Anytime\ApiClient\Model\Response\Get;

use Anytime\ApiClient\Model\Response\Get\Traits\PagingTrait;

class ModelResponseGetAccountStatement extends ModelResponseGet
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
     * @return ModelResponseGetAccountStatementTransaction[]
     */
    public function getTransactions()
    {
        if(!$this->isGetterCached(__METHOD__)) {
            $transactions = [];
            foreach ($this->data['transactions'] as $elem) {

                if(array_key_exists('iban', $elem)) {
                    $elem['iban'] = $this->hydrator->hydrate(new ModelResponseGetAccountStatementTransactionIban(), $elem['iban']);
                }

                $transactions[] = $this->hydrator->hydrate(
                    new ModelResponseGetAccountStatementTransaction(),
                    $elem
                );
            }

            $this->setGetterCache(__METHOD__, $transactions);
        }

        return $this->getGetterCache(__METHOD__);
    }

}
