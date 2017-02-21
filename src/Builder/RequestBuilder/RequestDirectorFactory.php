<?php

namespace Anytime\ApiClient\Builder\RequestBuilder;

use Anytime\ApiClient\ApiClientSetting;
use Anytime\ApiClient\RequestSigner\OpenSslRequestSigner;

class RequestDirectorFactory
{
    /**
     * @var ApiClientSetting
     */
    private $setting;

    /**
     * RequestDirectorFactory constructor.
     *
     * @param ApiClientSetting $setting
     */
    public function __construct(ApiClientSetting $setting)
    {
        $this->setting = $setting;
    }

    /**
     * @param string $method
     * @param string $apiName
     * @return GetApiCheckRequestDirector
     */
    public function create($method, $apiName)
    {
        $directorClass =
            'Anytime\\ApiClient\\Builder\\RequestBuilder\\' .
            ucfirst(strtolower($method)) .
            $apiName . 'RequestDirector'
        ;

        $builderClass =
            'Anytime\\ApiClient\\Builder\\RequestBuilder\\' .
            ucfirst(strtolower($method)) .
            $apiName . 'RequestBuilder'
        ;

        if(!class_exists($directorClass)) {
            throw new \RuntimeException('Class "' . $directorClass. '" does not exists');
        }

        if(!class_exists($builderClass)) {
            throw new \RuntimeException('Class "' . $builderClass. '" does not exists');
        }

        return new $directorClass(new $builderClass($this->setting, new OpenSslRequestSigner()));
    }
}