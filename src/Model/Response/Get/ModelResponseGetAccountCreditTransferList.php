<?php

namespace Anytime\ApiClient\Model\Response\Get;

use Anytime\ApiClient\Model\Response\Get\Traits\PagingTrait;

class ModelResponseGetAccountCreditTransferList extends ModelResponseGet
{
    use PagingTrait;

    /**
     * @return array
     */
    public function getCreditTransfers()
    {
        if(!$this->isGetterCached(__METHOD__)) {
            
            if (is_array($this->data['credit-transfers'])) {
                $cts = [];
                foreach ($this->data['credit-transfers'] as $ctData) {
                    $cts[] = $this->hydrator->hydrate(
                        new ModelResponseGetAccountCreditTransferListCreditTransfer(),
                        $ctData
                    );
                }

                $this->setGetterCache(__METHOD__, $cts);
            }
        }

        return $this->getGetterCache(__METHOD__);
    }

}
