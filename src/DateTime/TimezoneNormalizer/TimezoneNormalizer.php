<?php

namespace Anytime\ApiClient\DateTime\TimezoneNormalizer;

class TimezoneNormalizer implements TimezoneNormalizerInterface
{
    /**
     * Anytime works with the UTC+1 timezone
     *
     * @var string
     */
    private $forceTimezone = 'Europe/Paris';

    /**
     * @param \DateTime|string $dateTime
     * @return \DateTime
     */
    public function normalize($dateTime)
    {
        if(is_object($dateTime) && get_class($dateTime) === \DateTime::class) {
            $dateTime->setTimezone(new \DateTimeZone(
                $this->forceTimezone
            ));
        }

        elseif(is_string($dateTime)) {
            return new \DateTime(
                $dateTime,
                new \DateTimeZone($this->forceTimezone)
            );
        }

        throw new \RuntimeException('Bad date/time passed to the normalizer.');
    }
}