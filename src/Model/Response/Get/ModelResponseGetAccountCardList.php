<?php

namespace Anytime\ApiClient\Model\Response\Get;

use Anytime\ApiClient\Model\Response\Get\Traits\PagingLimitTrait;

class ModelResponseGetAccountCardList extends ModelResponseGet
{
    use PagingLimitTrait;

    /**
     * @return integer
     */
    public function getAccId()
    {
        return (int)$this->getDataValue('acc_id');
    }

    /**
     * @return ModelResponseGetAccountCardListCard[]
     */
    public function getCards()
    {
        if(!$this->isGetterCached(__METHOD__)) {
            $cards = [];
            foreach ($this->data['cards'] as $elem) {
                $elem['card_holder'] = $this->hydrator->hydrate(
                    new ModelResponseGetAccountCardListCardCardHolder(),
                    $elem['card_holder']
                );

                $cards[] = $this->hydrator->hydrate(
                    new ModelResponseGetAccountCardListCard(),
                    $elem
                );
            }
            $this->setGetterCache(__METHOD__, $cards);
        }

        return $this->getGetterCache(__METHOD__);
    }

}