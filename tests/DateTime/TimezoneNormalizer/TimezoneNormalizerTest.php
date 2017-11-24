<?php

namespace Anytime\ApiClient\DateTime\TimezoneNormalizer;

use Xpmock\TestCase;

class TimezoneNormalizerTest extends TestCase
{
    /**
     * @group TimezoneNormalizer
     */
    public function testNormalizeThrowsRuntimeExceptionIfNotDateTimeObject()
    {
        $this->expectException(\RuntimeException::class);
        $normalizer = new TimezoneNormalizer();
        $normalizer->normalize(new \stdClass());
    }

    /**
     * @group TimezoneNormalizer
     */
    public function testNormalizeUTCIsCorrectAfterNormalizedAnRFC2822String()
    {
        $normalizer = new TimezoneNormalizer();
        $this->assertSame('02:00:00', $normalizer->normalize(new \DateTime('2016-01-01T00:00:00-01:00'))->format('H:i:s'));
        $this->assertSame('01:00:00', $normalizer->normalize(new \DateTime('2016-01-01T00:00:00+00:00'))->format('H:i:s'));
        $this->assertSame('00:30:00', $normalizer->normalize(new \DateTime('2016-01-01T00:00:00+00:30'))->format('H:i:s'));
        $this->assertSame('00:00:00', $normalizer->normalize(new \DateTime('2016-01-01T00:00:00+01:00'))->format('H:i:s'));
        $this->assertSame('23:00:00', $normalizer->normalize(new \DateTime('2016-01-01T00:00:00+02:00'))->format('H:i:s'));

        $dateTime = $normalizer->normalize(new \DateTime('2016-01-01T00:00:00+02:00'));
        $this->assertSame('Europe/Paris', $dateTime->getTimezone()->getName());
    }

    /**
     * @group TimezoneNormalizer
     */
    public function testNormalizeUTCIsCorrectAfterNormalizedADateTimeObject()
    {
        $normalizer = new TimezoneNormalizer();
        $dateTime = new \DateTime('2016-01-01 00:00:00', new \DateTimeZone('Europe/London'));
        $normalizedDateTime = $normalizer->normalize($dateTime);
        $this->assertSame('Europe/Paris', $normalizedDateTime->getTimezone()->getName());
        $this->assertSame('01:00:00', $normalizedDateTime->format('H:i:s'));
    }

    /**
     * @group TimezoneNormalizer
     */
    public function testNormalizeUTCIsCorrectAfterNormalizedAnUnspecifiedTimezoneDateTimeString()
    {
        $normalizer = new TimezoneNormalizer();
        $normalizedDateTime = $normalizer->normalize('2016-01-01 00:00:00');
        $this->assertSame('Europe/Paris', $normalizedDateTime->getTimezone()->getName());
        $this->assertSame('00:00:00', $normalizedDateTime->format('H:i:s'));
    }

    /**
     * @group TimezoneNormalizer
     */
    public function testNormalizeNullValueReturnsNull()
    {
        $normalizer = new TimezoneNormalizer();
        $this->assertNull($normalizer->normalize(null));
    }

    /**
     * @group TimezoneNormalizer
     */
    public function testNormalizeThrowsAnExceptionIfDateStringIsInvalid()
    {
        $this->expectException(\RuntimeException::class);
        $normalizer = new TimezoneNormalizer();
        $normalizer->normalize('InvalidDateString');
    }
}