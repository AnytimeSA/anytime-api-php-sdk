<?php

namespace Anytime\ApiClient\Model\Response\Get;

class ModelResponseGetCardTransaction extends ModelResponseGet
{
    /**
     * @return string
     */
    public function getCardRef()
    {
        return $this->getDataValue('card_ref');
    }

    /**
     * @return integer
     */
    public function getAccId()
    {
        return $this->getDataValue('acc_id');
    }

    /**
     * @return ModelResponseGetCardTransactionTransaction[]
     */
    public function getTransactions()
    {
        $transactions = [];
        foreach($this->data['transactions'] as $elem) {
            $elem['date'] = $this->timezoneNormalizer->normalize($elem['date']);


            $transactions[] = $this->hydrator->hydrate(
                new ModelResponseGetCardTransactionTransaction(),
                $elem
            );
        }
        return $transactions;
    }

}