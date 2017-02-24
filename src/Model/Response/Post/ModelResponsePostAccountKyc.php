<?php

namespace Anytime\ApiClient\Model\Response\Post;

class ModelResponsePostAccountKyc extends ModelResponsePost
{
    /**
     * @return ModelResponsePostAccountKycFileStatus
     */
    public function getFileStatus()
    {
        $modelResponsePostAccountKycFileStatus = (new ModelResponsePostAccountKycFileStatus())
            ->setUserSelfie(new ModelResponsePostAccountKycFileStatusUserSelfie())
            ->setUserIdentity(new ModelResponsePostAccountKycFileStatusUserIdentity())
            ->setUserIdentityHost(new ModelResponsePostAccountKycFileStatusUserIdentityHost())
            ->setUserIdentityBackHost(new ModelResponsePostAccountKycFileStatusUserIdentityBackHost())
            ->setUserIdentityBack(new ModelResponsePostAccountKycFileStatusUserIdentityBack())
            ->setUserDom1(new ModelResponsePostAccountKycFileStatusUserDom1())
            ->setUserDomHost(new ModelResponsePostAccountKycFileStatusUserDomHost())
            ->setUserAffidavit(new ModelResponsePostAccountKycFileStatusUserAffidavit())
            ->setCorpStatus(new ModelResponsePostAccountKycFileStatusCorpStatus())
            ->setCorpKbis(new ModelResponsePostAccountKycFileStatusCorpKbis())
        ;

        $this->hydrateFileStatus($modelResponsePostAccountKycFileStatus);

        return $modelResponsePostAccountKycFileStatus;
    }

    /**
     * @param ModelResponsePostAccountKycFileStatus $modelResponsePostAccountKycFileStatus
     * @return string
     */
    private function hydrateFileStatus(ModelResponsePostAccountKycFileStatus $modelResponsePostAccountKycFileStatus)
    {
        $data = $this->getDataValue('file_status');
        $fileStatusRef = [
            'user_selfie'               =>  'getUserSelfie',
            'user_identity'             =>  'getUserIdentity',
            'user_identity_host'        =>  'getUserIdentityHost',
            'user_identity_back_host'   =>  'getUserIdentityBackHost',
            'user_identity_back'        =>  'getUserIdentityBack',
            'user_dom1'                 =>  'getUserDom1',
            'user_dom_host'             =>  'getUserDomHost',
            'user_affidavit'            =>  'getUserAffidavit',
            'corp_status'               =>  'getCorpStatus',
            'corp_kbis'                 =>  'getCorpKbis',
        ];

        foreach ($fileStatusRef as $fileRef => $method) {
            if (array_key_exists($fileRef, $data)) {
                $modelResponsePostAccountKycFileStatus->$method()
                    ->setError(array_key_exists('error', $data[$fileRef]) ? $data[$fileRef]['error'] : '')
                    ->setStatus(array_key_exists('status', $data[$fileRef]) ? $data[$fileRef]['status'] : '');
            }
        }
    }

}