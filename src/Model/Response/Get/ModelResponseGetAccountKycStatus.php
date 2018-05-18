<?php

namespace Anytime\ApiClient\Model\Response\Get;

class ModelResponseGetAccountKycStatus extends ModelResponseGet
{
    /**
     * @return string
     */
    public function getStatus()
    {
        return (string)$this->getDataValue('status');
    }

    /**
     * @return string[]
     */
    public function getMissingKycTypes()
    {
        return $this->getDataValue('missing-kyc-types');
    }


    /**
     * @param null|string $kycUploadedFileStatus See Anytime\ApiClient\Constant\KycUploadedFileStatus
     * @return ModelResponseGetAccountKycUploadedFile[]
     */
    public function getUploadedKycStatus($kycUploadedFileStatus = null)
    {
        $cacheKey = __METHOD__ . (is_null($kycUploadedFileStatus) ? '' : ':' . $kycUploadedFileStatus);

        if(!$this->isGetterCached($cacheKey)) {

            $uploadedKycStatusFullList = $this->getDataValue('uploaded-kyc-status');
            $modelKycUploadedFileList = [];


            if ($kycUploadedFileStatus) {
                if (!array_key_exists($kycUploadedFileStatus, $uploadedKycStatusFullList)) {
                    return [];
                }

                foreach ($uploadedKycStatusFullList[$kycUploadedFileStatus] as $elem) {
                    $modelKycUploadedFile = $this->hydrator->hydrate(new ModelResponseGetAccountKycUploadedFile(), $elem);
                    $modelKycUploadedFile->setStatus($kycUploadedFileStatus);
                    $modelKycUploadedFileList[] = $modelKycUploadedFile;
                }


            } else {
                foreach ($uploadedKycStatusFullList as $kycUploadedFileStatus => $kycList) {
                    foreach ($kycList as $elem) {
                        $modelKycUploadedFile = $this->hydrator->hydrate(new ModelResponseGetAccountKycUploadedFile(), $elem);
                        $modelKycUploadedFile->setStatus($kycUploadedFileStatus);
                        $modelKycUploadedFileList[] = $modelKycUploadedFile;
                    }
                }
            }

            $this->setGetterCache($cacheKey, $modelKycUploadedFileList);
        }

        return $this->getGetterCache($cacheKey);
    }
}