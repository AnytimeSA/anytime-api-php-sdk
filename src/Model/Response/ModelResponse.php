<?php

namespace Anytime\ApiClient\Model\Response;

use Anytime\ApiClient\DateTime\TimezoneNormalizer\TimezoneNormalizerInterface;
use Anytime\ApiClient\Model\Model;

abstract class ModelResponse extends Model implements ModelResponseInterface
{
    /**
     * @var ModelResponseHeader
     */
    protected $header;

    /**
     * @var array
     */
    protected $data = [];

    /**
     * ModelResponse constructor.
     *
     * @param TimezoneNormalizerInterface $timezoneNormalizer
     * @param ModelResponseHeader $header
     */
    public function __construct(TimezoneNormalizerInterface $timezoneNormalizer, ModelResponseHeader $header)
    {
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
}