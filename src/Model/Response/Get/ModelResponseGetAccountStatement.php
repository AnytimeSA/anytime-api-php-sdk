<?php

namespace Anytime\ApiClient\Model\Response\Get;

class ModelResponseGetAccountStatement extends ModelResponseGet
{
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
                $elem['date'] = $this->timezoneNormalizer->normalize($elem['date']);
                $elem['execution_date'] = $this->timezoneNormalizer->normalize($elem['execution_date']);


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