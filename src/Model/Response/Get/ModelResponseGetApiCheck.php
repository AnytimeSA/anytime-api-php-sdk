<?php

namespace Anytime\ApiClient\Model\Response\Get;

class ModelResponseGetApiCheck extends ModelResponseGet
{
    /**
     * @var \DateTime
     */
    protected $dateTime;

    /**
     * @return \DateTime
     */
    public function getDateTime()
    {
        return $this->dateTime;
    }

    /**
     * @param \DateTime|string $dateTime
     * @return $this
     */
    public function setDateTime($dateTime)
    {
        $this->dateTime = $this->timezoneNormalizer->normalize($dateTime);
        return $this;
    }
}