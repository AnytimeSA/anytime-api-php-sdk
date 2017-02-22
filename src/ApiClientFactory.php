<?php

namespace Anytime\ApiClient;

use Anytime\ApiClient\Authenticator\ResponseAuthenticator;
use Anytime\ApiClient\Builder\RequestBuilder\RequestDirectorFactory;
use Anytime\ApiClient\Constant\Environment;
use Anytime\ApiClient\Exception\ApiClientException\Factory\ApiClientExceptionFactory;
use Anytime\ApiClient\IO\IOFactory;
use Anytime\ApiClient\IO\IOList;
use Anytime\ApiClient\Model\Populator\ModelResponsePopulator;
use Anytime\ApiClient\Model\Request\ModelRequestFactory;
use Anytime\ApiClient\Model\Response\ModelResponseFactory;
use Anytime\ApiClient\Parser\ResponseParser\JsonResponseParser;
use GuzzleHttp\Client;

class ApiClientFactory
{
    /**
     * @var array
     */
    private $allowedParams = [
        'version'           =>  'setApiVersion',
        'client-id'         =>  'setOAuth2ClientId',
        'client-secret'     =>  'setOAuth2ClientSecret',
        'username'          =>  'setOAuth2Username',
        'password'          =>  'setOAuth2Password',
        'private-key'       =>  'setPrivateRSAKey'
    ];

    /**
     * @param array $params Accepted params: version, client-id, client-secret, username, password, private-key
     * @param string $environment
     * @return ApiClient
     */
    public function create($params = [], $environment = Environment::SANDBOX)
    {
        if(!Environment::isValidEnvironment($environment)) {
            throw new \RuntimeException('Invalid environment "' . $environment . '"');
        }

        $setting = $this->createSettingObject($environment, $params);

        foreach($this->allowedParams as $allowedParam => $setter) {
            if(array_key_exists($allowedParam, $params)) {
                $setting->$setter($params[$allowedParam]);
            }
        }

        return new ApiClient(
            $setting,
            new IOList(
                new IOFactory(
                    new Client([
                        'timeout'   =>  0
                    ]),
                    $setting,
                    new ModelRequestFactory(),
                    new ModelResponseFactory(),
                    new RequestDirectorFactory($setting),
                    new ApiClientExceptionFactory(),
                    new ModelResponsePopulator(),
                    new JsonResponseParser(),
                    new ResponseAuthenticator($setting)
                )
            )
        );
    }

    /**
     * @param string $environment
     * @param array $params
     * @return ApiClientSetting
     */
    public function createSettingObject($environment = Environment::PRODUCTION, $params = [])
    {
        $setting = new ApiClientSetting($environment);

        foreach($this->allowedParams as $allowedParam => $setter) {
            if(array_key_exists($allowedParam, $params)) {
                $setting->$setter($params[$allowedParam]);
            }
        }
        return $setting;
    }
}