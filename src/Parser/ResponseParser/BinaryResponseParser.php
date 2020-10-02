<?php

namespace Anytime\ApiClient\Parser\ResponseParser;

use Anytime\ApiClient\Parser\ParserInterface;

class BinaryResponseParser implements ParserInterface
{
    /**
     * @param string $string
     * @return array
     */
    public function parse($string)
    {
        return ['content' => $string];
    }
}
