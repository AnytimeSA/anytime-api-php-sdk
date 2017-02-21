<?php

namespace Anytime\ApiClient\DateTime\TimezoneNormalizer;

interface TimezoneNormalizerInterface
{
    /**
     * @param string $dateTime
     * @return \DateTime
     */
    public function normalize($dateTime);
}