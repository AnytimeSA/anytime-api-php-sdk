<?php

namespace Anytime\ApiClient\Model\Response\Get;

class ModelResponseGetAccountList extends ModelResponseGet
{
    /**
     * @return ModelResponseGetAccountListAccount[]
     */
    public function getAccounts()
    {
        $accounts = [];
        foreach($this->data['accounts'] as $elem) {
            $accounts[] = $this->hydrator->hydrate(new ModelResponseGetAccountListAccount(), $elem);
        }
        return $accounts;
    }
}