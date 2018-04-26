<?php

namespace Anytime\ApiClient\Hydrator;

use Anytime\ApiClient\Constant\Currency;
use Anytime\ApiClient\DateTime\TimezoneNormalizer\TimezoneNormalizer;
use Anytime\ApiClient\Model\Response\Get\ModelResponseGetCardTransactionTransaction;
use Anytime\ApiClient\Model\Response\Get\Traits\PagingFilters;
use Xpmock\TestCase;

class FromSnakeCaseHydratorTest extends TestCase
{
    /**
     * @group Hydrator
     */
    public function testObjectGettersReturnsTheCorrectValueAfterHydration()
    {
        $object = new ModelResponseGetCardTransactionTransaction();
        $hydrator = new FromSnakeCaseHydrator(new TimezoneNormalizer());
        $hydrator->hydrate($object, ['amount' => 9.50, 'currency' => Currency::USD]);
        $this->assertSame(9.50, $object->getAmount());
        $this->assertSame(Currency::USD, $object->getCurrency());
    }

    /**
     * @group Hydrator
     */
    public function testHydrationWithSetterHavingDateTimeHintingSetDateTimeObject()
    {
        $object = new PagingFilters();
        $hydrator = new FromSnakeCaseHydrator(new TimezoneNormalizer());
        $hydrator->hydrate($object, [
            'date_start' => '2018-01-01 00:00:00',
            'date_end' => '2018-01-01 23:59:59',
            'limit_start' => 0,
            'limit_number' => 10
        ]);

        $this->assertInstanceOf(\DateTime::class, $object->getDateStart());
        $this->assertInstanceOf(\DateTime::class, $object->getDateEnd());
        $this->assertSame('2018-01-01 00:00:00', $object->getDateStart()->format('Y-m-d H:i:s'));
        $this->assertSame('2018-01-01 23:59:59', $object->getDateEnd()->format('Y-m-d H:i:s'));
        $this->assertSame(0, $object->getLimitStart());
        $this->assertSame(10, $object->getLimitNumber());
    }
}