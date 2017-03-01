<?php

namespace Anytime\ApiClient\Hydrator;

use Anytime\ApiClient\Constant\Currency;
use Anytime\ApiClient\Model\Response\Get\ModelResponseGetCardTransactionTransaction;
use Xpmock\TestCase;

class FromSnakeCaseHydratorTest extends TestCase
{
    /**
     * @group Hydrator
     */
    public function testObjectGettersReturnsTheCorrectValueAfterHydration()
    {
        $object = new ModelResponseGetCardTransactionTransaction();
        $hydrator = new FromSnakeCaseHydrator();
        $hydrator->hydrate($object, ['amount' => 9.50, 'currency' => Currency::USD]);
        $this->assertSame(9.50, $object->getAmount());
        $this->assertSame(Currency::USD, $object->getCurrency());
    }
}