<?php

namespace Anytime\ApiClient\Model\Response\Get;

class ModelResponseGetCardTransactionTransactionFailedReason
{
    /**
     * @var string
     */
    private $code;

    /**
     * @var string
     */
    private $message;

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param string $code
     * @return ModelResponseGetCardTransactionTransactionFailedReason
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param string $message
     * @return ModelResponseGetCardTransactionTransactionFailedReason
     */
    public function setMessage($message)
    {
        $this->message = $message;
        return $this;
    }
}
