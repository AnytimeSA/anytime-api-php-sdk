<?php

namespace Anytime\ApiClient\Model\Response\Get\Traits;

/**
 * @method mixed getDataValue($key)
 * @method bool isGetterCached($key)
 * @method \Anytime\ApiClient\Model\Response\ModelResponse setGetterCache($key, $data)
 * @method mixed getGetterCache($key)
 */
trait PagingTotalResultsTrait
{
    /**
     * @return integer
     */
    public function getTotalResults()
    {
        return (int)$this->getDataValue('total_results');
    }
}
