<?php

namespace Anytime\ApiClient\Model\Response\Get;

use Anytime\ApiClient\Model\Response\Get\Traits\PagingTrait;

class ModelResponseGetCardTransaction extends ModelResponseGet
{
    use PagingTrait;

    /**
     * @return string
     */
    public function getCardRef()
    {
        return (string)$this->getDataValue('card_ref');
    }

    /**
     * @return integer
     */
    public function getAccId()
    {
        return (int)$this->getDataValue('acc_id');
    }

    /**
     * @return integer
     */
    public function getTotalResults()
    {
        return (int)$this->getDataValue('total_results');
    }

    /**
     * @return ModelResponseGetCardTransactionTransaction[]
     */
    public function getTransactions()
    {
        if(!$this->isGetterCached(__METHOD__)) {
            $transactions = [];
            foreach ($this->data['transactions'] as $elem) {
                $elem['date'] = $this->timezoneNormalizer->normalize($elem['date']);


                $transactions[] = $this->hydrator->hydrate(
                    new ModelResponseGetCardTransactionTransaction(),
                    $elem
                );
            }
            $this->setGetterCache(__METHOD__, $transactions);
        }

        return $this->getGetterCache(__METHOD__);
    }

}