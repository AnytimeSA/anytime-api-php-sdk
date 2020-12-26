<?php

namespace Anytime\ApiClient\Model;

use Anytime\ApiClient\DateTime\TimezoneNormalizer\TimezoneNormalizerInterface;

abstract class Model
{
    /**
     * @var TimezoneNormalizerInterface
     */
    protected $timezoneNormalizer;

    /**
     * Model constructor.
     * @param TimezoneNormalizerInterface $timezoneNormalizer
     */
    public function __construct(TimezoneNormalizerInterface $timezoneNormalizer)
    {
        $this->timezoneNormalizer = $timezoneNormalizer;
    }
}
