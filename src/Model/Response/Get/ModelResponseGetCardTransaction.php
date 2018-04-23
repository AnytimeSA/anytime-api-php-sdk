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
     * @return ModelResponseGetCardTransactionTransaction[]
     */
    public function getTransactions()
    {
        if(!$this->isGetterCached(__METHOD__)) {
            $transactions = [];

            foreach ($this->data['transactions'] as $elem) {
                $vatDetails = [];
                $elem['date'] = $this->timezoneNormalizer->normalize($elem['date']);

                /** @var ModelResponseGetCardTransactionTransaction $transactionTransaction */
                $transactionTransaction = $this->hydrator->hydrate(
                    new ModelResponseGetCardTransactionTransaction(),
                    $elem
                );

                foreach($elem['vat_details'] as $vatDetail) {
                    $vatDetails[] = $this->hydrator->hydrate(
                        new ModelResponseGetTransactionVatDetail(),
                        $vatDetail
                    );
                }

                $transactionTransaction->setVatDetails($vatDetails);

                $transactions[] = $transactionTransaction;
            }

            $this->setGetterCache(__METHOD__, $transactions);
        }

        return $this->getGetterCache(__METHOD__);
    }

}