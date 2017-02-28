<?php

namespace Anytime\ApiClient\Model\Response\Get;

class ModelResponseGetAccountList extends ModelResponseGet
{
    /**
     * @return ModelResponseGetAccountListAccount[]
     */
    public function getAccounts()
    {
        if(!$this->isGetterCached(__METHOD__)) {
            $accounts = [];
            foreach ($this->data['accounts'] as $elem) {
                $accounts[] = $this->hydrator->hydrate(new ModelResponseGetAccountListAccount(), $elem);
            }
            $this->setGetterCache(__METHOD__, $accounts);
        }

        return $this->getGetterCache(__METHOD__);
    }
}