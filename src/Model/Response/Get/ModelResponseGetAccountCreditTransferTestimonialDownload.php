<?php

namespace Anytime\ApiClient\Model\Response\Get;

class ModelResponseGetAccountCreditTransferTestimonialDownload extends ModelResponseGet
{
    protected $responseFormat = 'binary';

    /**
     * @return string
     */
    public function getPDF()
    {
        return $this->data['content'];
    }
}
