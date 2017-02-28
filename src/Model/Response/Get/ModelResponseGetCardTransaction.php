<?php

namespace Anytime\ApiClient\Model\Response\Get;

class ModelResponseGetCardTransaction extends ModelResponseGet
{
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