<?php

namespace Anytime\ApiClient\Builder\RequestBuilder;

use Anytime\ApiClient\ApiClientSetting;
use Anytime\ApiClient\IO\FileReader\FileReaderInterface;
use Anytime\ApiClient\RequestSigner\OpenSslRequestSigner;

class RequestDirectorFactory
{
    /**
     * @var ApiClientSetting
     */
    private $setting;

    /**
     * @var FileReaderInterface
     */
    private $fileReader;

    /**
     * RequestDirectorFactory constructor.
     *
     * @param ApiClientSetting $setting
     * @param FileReaderInterface $fileReader
     */
    public function __construct(ApiClientSetting $setting, FileReaderInterface $fileReader)
    {
        $this->setting = $setting;
        $this->fileReader = $fileReader;
    }

    /**
     * @param string $method
     * @param string $apiName
     * @return RequestDirector
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

        return new $directorClass(new $builderClass(
            $this->setting,
            $this->fileReader,
            new OpenSslRequestSigner(),
            $this
        ));
    }
}
