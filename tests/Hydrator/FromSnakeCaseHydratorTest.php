<?php

namespace Anytime\ApiClient\Hydrator;

use Xpmock\TestCase;

class FromSnakeCaseHydratorTest extends TestCase
{
    /**
     * @group Hydrator
     */
    public function testObjectGettersReturnsTheCorrectValueAfterHydration()
    {
        $object = new class {
            private $valueTest;
            public function setValueTest($valueTest)
            {
                $this->valueTest = $valueTest;
            }
            public function getValueTest()
            {
                return $this->valueTest;
            }
        };

        $hydrator = new FromSnakeCaseHydrator();
        $hydrator->hydrate($object, ['value_test' => 'the-value']);
        $this->assertSame('the-value', $object->getValueTest());
    }
}