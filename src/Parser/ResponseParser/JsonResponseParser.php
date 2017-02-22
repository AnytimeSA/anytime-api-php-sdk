<?php

namespace Anytime\ApiClient\Parser\ResponseParser;

use Anytime\ApiClient\Parser\ParserInterface;

class JsonResponseParser implements ParserInterface
{
    /**
     * @param string $string
     * @return array
     */
    public function parse($string)
    {
        $array = json_decode($string, true);

        if(!is_array($array)) {
            throw new \RuntimeException('Fail to parse JSON response data');
        }

        return $array;
    }
}