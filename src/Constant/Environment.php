<?php

namespace Anytime\ApiClient\Constant;

class Environment
{
    const PRODUCTION = 'PRODUCTION';
    const SANDBOX = 'SANDBOX';
    const SETTINGS = [
        self::PRODUCTION => [
            'scheme'    =>  'https',
            'user-info' =>  '',
            'domain'    =>  'ws.anyti.me',
            'base-path' =>  '/',
            'port'      =>  443
        ],

        self::SANDBOX => [
            'scheme'    =>  'https',
            'user-info' =>  '',
            'domain'    =>  'ws-sandbox.anyti.me',
            'base-path' =>  '/',
            'port'      =>  443
        ]
    ];

    /**
     * @param string $environment
     * @return boolean
     */
    public static function isValidEnvironment($environment)
    {
        return array_key_exists($environment, self::SETTINGS);
    }
}