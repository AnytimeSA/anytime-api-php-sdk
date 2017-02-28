<?php

namespace Anytime\ApiClient\Model\Populator;

use Anytime\ApiClient\DateTime\TimezoneNormalizer\TimezoneNormalizer;
use Anytime\ApiClient\Hydrator\FromSnakeCaseHydrator;
use Anytime\ApiClient\Model\Response\Get\ModelResponseGetApiCheck;
use Anytime\ApiClient\Model\Response\ModelResponseHeader;
use Xpmock\TestCase;

class ModelResponsePopulatorTest extends TestCase
{
    /**
     * @Populator
     * @ModelResponsePopulator
     */
    public function testPopulateReturnsPopulatedObject()
    {
        $modelResponse = new ModelResponseGetApiCheck(
            $this->mock(FromSnakeCaseHydrator::class)->new(),
            $this->mock(TimezoneNormalizer::class)->new(),
            new ModelResponseHeader()
        );
        $populator = new ModelResponsePopulator();

        $modelResponsePopulated = $populator->populate($modelResponse, [
            'hash'          =>  'abcdef0123456789',
            'request_id'    =>  '1234',
            'timestamp'     =>  '1488287940.2326',
            'type_response' =>  'sync',
            'body'          =>  [
                'param1'        =>  'value1',
                'param2'        =>  'value2'
            ]
        ]);

        $this->assertSame(
            [
                'param1'        =>  'value1',
                'param2'        =>  'value2'
            ],
            $modelResponsePopulated->getData()
        );

        $this->assertSame($modelResponsePopulated, $modelResponse); // same object

        $this->assertSame('abcdef0123456789', $modelResponsePopulated->getHeader()->getHash());
        $this->assertSame('1234', $modelResponsePopulated->getHeader()->getRequestId());
        $this->assertSame('1488287940.2326', $modelResponsePopulated->getHeader()->getTimestamp());
        $this->assertSame('sync', $modelResponsePopulated->getHeader()->getTypeResponse());
    }
}