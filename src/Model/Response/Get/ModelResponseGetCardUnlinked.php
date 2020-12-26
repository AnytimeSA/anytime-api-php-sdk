<?php

namespace Anytime\ApiClient\Model\Response\Get;

use Anytime\ApiClient\Model\Response\Get\Traits\PagingLimitTrait;

class ModelResponseGetCardUnlinked extends ModelResponseGet
{
    use PagingLimitTrait;

    /**
     * @return ModelResponseGetCardUnlinkedCard[]
     */
    public function getCards()
    {
        if(!$this->isGetterCached(__METHOD__)) {
            $cards = [];
            foreach ($this->data['cards'] as $card) {
                $cards[] = $this->hydrator->hydrate(
                    new ModelResponseGetCardUnlinkedCard(),
                    $card
                );
            }
            $this->setGetterCache(__METHOD__, $cards);
        }

        return $this->getGetterCache(__METHOD__);
    }
}
