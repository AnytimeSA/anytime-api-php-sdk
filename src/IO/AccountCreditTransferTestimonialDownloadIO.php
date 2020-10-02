<?php

namespace Anytime\ApiClient\IO;

use Anytime\ApiClient\Constant\API;
use Anytime\ApiClient\Constant\Method;
use Anytime\ApiClient\Model\Request\Get\ModelRequestGetAccountCreditTransferTestimonialDownload;
use Anytime\ApiClient\Model\Response\Get\ModelResponseGetAccountCreditTransferTestimonialDownload;

/**
 * @method ModelResponseGetAccountCreditTransferTestimonialDownload sendRequest(ModelRequestGetAccountCreditTransferTestimonialDownload $modelRequest)
 */
class AccountCreditTransferTestimonialDownloadIO extends IO
{
    /**
     * @return ModelRequestGetAccountCreditTransferTestimonialDownload
     */
    public function createRequest()
    {
        return parent::createRequestByMethodAndApi(Method::GET, API::ACCOUNT_CREDIT_TRANSFER_TESTIMONIAL_DOWNLOAD);
    }
}
