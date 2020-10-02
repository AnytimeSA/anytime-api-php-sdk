<?php

namespace Anytime\ApiClient\Parser\ResponseParser;

use Xpmock\TestCase;

class JsonResponseParserTest extends TestCase
{
    /**
     * @group Parser
     * @group JsonResponseParser
     */
    public function testParseReturnsArrayIfJsonIsValid()
    {
        $jsonResponseParser = new JsonResponseParser();
        $this->assertSame(['some' => 'json'], $jsonResponseParser->parse('{"some":"json"}'));
    }

    /**
     * @group Parser
     * @group JsonResponseParser
     */
    public function testParseThrowsExceptionIfBadJsonGiven()
    {
        $this->expectException(\RuntimeException::class);
        $jsonResponseParser = new JsonResponseParser();
        $jsonResponseParser->parse('badJsonString');
    }
}
