<?php

namespace Anytime\ApiClient\Model\Response\Get;

class ModelResponseGetApiCheck extends ModelResponseGet
{
    /**
     * @return \DateTime
     */
    public function getDateTime()
    {
        return $this->timezoneNormalizer->normalize($this->getDataValue('date_time'));
    }
}
