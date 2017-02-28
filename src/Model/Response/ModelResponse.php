<?php

namespace Anytime\ApiClient\Model\Response;

use Anytime\ApiClient\DateTime\TimezoneNormalizer\TimezoneNormalizerInterface;
use Anytime\ApiClient\Hydrator\HydratorInterface;
use Anytime\ApiClient\Model\Model;

abstract class ModelResponse extends Model implements ModelResponseInterface
{
    /**
     * @var HydratorInterface
     */
    protected $hydrator;

    /**
     * @var ModelResponseHeader
     */
    protected $header;

    /**
     * @var array
     */
    protected $data = [];

    /**
     * @var bool
     */
    protected $authenticated = false;

    /**
     * @var array
     */
    protected $responseCache = [];

    /**
     * ModelResponse constructor.
     *
     * @param HydratorInterface $hydrator
     * @param TimezoneNormalizerInterface $timezoneNormalizer
     * @param ModelResponseHeader $header
     */
    public function __construct(HydratorInterface $hydrator, TimezoneNormalizerInterface $timezoneNormalizer, ModelResponseHeader $header)
    {
        $this->hydrator = $hydrator;
        $this->header = $header;
        parent::__construct($timezoneNormalizer);
    }

    /**
     * @return array
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param array $data
     * @return ModelResponse
     */
    public function setData($data)
    {
        $this->data = $data;
        return $this;
    }

    /**
     * @return ModelResponseHeader
     */
    public function getHeader()
    {
        return $this->header;
    }


    /**
     * @return boolean
     */
    public function isAuthenticated()
    {
        return $this->authenticated;
    }

    /**
     * @param boolean $authenticated
     * @return ModelResponse
     */
    public function setAuthenticated($authenticated)
    {
        $this->authenticated = $authenticated;
        return $this;
    }

    /**
     * @param string $key
     * @return string
     */
    protected function getDataValue($key)
    {
        if(array_key_exists($key, $this->data)) {
            return $this->data[$key];
        }
        return null;
    }

    /**
     * @param $key
     * @return mixed|null
     */
    protected function getGetterCache($key)
    {
        if($this->isGetterCached($key)) {
            return $this->responseCache[$key];
        }
        return null;
    }

    /**
     * @param string $key
     * @param mixed $data
     * @return mixed
     */
    protected function setGetterCache($key, $data)
    {
        $this->responseCache[$key] = $data;
        return $data;
    }

    /**
     * @param string $key
     * @return bool
     */
    protected function isGetterCached($key)
    {
        return array_key_exists($key, $this->responseCache);
    }

}