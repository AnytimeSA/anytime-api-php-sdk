<?php

namespace Anytime\ApiClient\Model\Response\Get;

class ModelResponseGetAccountCardList extends ModelResponseGet
{
    /**
     * @return string
     */
    public function getAccId()
    {
        return $this->getDataValue('acc_id');
    }

    /**
     * @return ModelResponseGetAccountCardListCard[]
     */
    public function getCards()
    {
        $cards = [];
        foreach($this->data['cards'] as $elem) {
            $elem['expiry_date'] = $this->timezoneNormalizer->normalize($elem['expiry_date']);
            $elem['activation_date'] = $this->timezoneNormalizer->normalize($elem['activation_date']);
            $elem['card_holder'] = $this->hydrator->hydrate(
                new ModelResponseGetAccountCardListCardCardHolder(),
                $elem['card_holder']
            );

            $cards[] = $this->hydrator->hydrate(
                new ModelResponseGetAccountCardListCard(),
                $elem
            );
        }
        return $cards;
    }

}