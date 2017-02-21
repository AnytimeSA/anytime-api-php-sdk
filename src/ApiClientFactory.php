<?php

namespace Anytime\ApiClient;

use Anytime\ApiClient\ApiContainer\GetApiContainer;
use Anytime\ApiClient\ApiContainer\PostApiContainer;
use Anytime\ApiClient\ApiContainer\PutApiContainer;
use Anytime\ApiClient\Builder\RequestBuilder\RequestDirectorFactory;
use Anytime\ApiClient\Constant\Environment;
use Anytime\ApiClient\Exception\ApiClientException\Factory\ApiClientExceptionFactory;
use Anytime\ApiClient\Model\Request\ModelRequestFactory;
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
        $modelRequestFactory = new ModelRequestFactory();

        foreach($this->allowedParams as $allowedParam => $setter) {
            if(array_key_exists($allowedParam, $params)) {
                $setting->$setter($params[$allowedParam]);
            }
        }

        return new ApiClient(
            new Client([
                'timeout'   =>  0
            ]),
            $setting,
            $modelRequestFactory,
            new RequestDirectorFactory($setting),
            new ApiClientExceptionFactory(),
            new GetApiContainer($modelRequestFactory),
            new PostApiContainer($modelRequestFactory),
            new PutApiContainer($modelRequestFactory)
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