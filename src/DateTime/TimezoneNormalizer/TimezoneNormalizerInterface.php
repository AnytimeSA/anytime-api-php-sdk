<?php

namespace Anytime\ApiClient\DateTime\TimezoneNormalizer;

interface TimezoneNormalizerInterface
{
    /**
     * @param \DateTime|string $dateTime
     * @return \DateTime
     */
    public function normalize($dateTime);
}
