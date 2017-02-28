<?php

namespace Anytime\ApiClient\Parser\ResponseParser;

use Xpmock\TestCase;

class JsonResponseParserTest extends TestCase
{
    /**
     * @Parser
     * @JsonResponseParser
     */
    public function testParseReturnsArrayIfJsonIsValid()
    {
        $jsonResponseParser = new JsonResponseParser();
        $this->assertSame(['some' => 'json'], $jsonResponseParser->parse('{"some":"json"}'));
    }

    /**
     * @Parser
     * @JsonResponseParser
     */
    public function testParseThrowsExceptionIfBadJsonGiven()
    {
        $this->expectException(\RuntimeException::class);
        $jsonResponseParser = new JsonResponseParser();
        $jsonResponseParser->parse('badJsonString');
    }
}