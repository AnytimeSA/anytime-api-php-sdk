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
            $account = (new ModelResponseGetAccountListAccount())
                ->setAccId($elem['acc_id'])
                ->setAccType($elem['acc_type'])
            ;
            $accounts[] = $account;
        }
        return $accounts;
    }
}