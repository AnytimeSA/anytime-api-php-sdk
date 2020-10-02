<?php

namespace Anytime\ApiClient\Parser\ResponseParser;

use Xpmock\TestCase;

class BinaryJsonResponseParserTest extends TestCase
{
    /**
     * @group Parser
     * @group BinaryResponseParser
     */
    public function testParseReturnsArrayWithContentKeyIsValid()
    {
        $jsonResponseParser = new BinaryResponseParser();
        $this->assertSame(['content' => 'SOMEBINARYCONTENT'], $jsonResponseParser->parse('SOMEBINARYCONTENT'));
    }
}
