<?php

namespace Anytime\ApiClient\Model\Response\Get;

class ModelResponseGetAccountStatement extends ModelResponseGet
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

    /**
     * @return ModelResponseGetAccountStatementTransaction[]
     */
    public function getTransactions()
    {
        $transactions = [];
        foreach($this->data['transactions'] as $elem) {
            $elem['date'] = $this->timezoneNormalizer->normalize($elem['date']);


            $transactions[] = $this->hydrator->hydrate(
                new ModelResponseGetAccountStatementTransaction(),
                $elem
            );
        }
        return $transactions;
    }

}