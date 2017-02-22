<?php

namespace Anytime\ApiClient\Parser;

interface ParserInterface
{
    /**
     * @param string $string
     * @return array
     */
    public function parse($string);
}