<?php

namespace Anytime\ApiClient\Builder\RequestBuilder;

use Anytime\ApiClient\Model\Request\ModelRequest;
use GuzzleHttp\Psr7\Request;

abstract class GetRequestBuilder extends RequestBuilder
{
    /**
     * @param ModelRequest $modelRequest
     * @return Request
     */
    public function getRequest(ModelRequest $modelRequest)
    {
        return $this->createRequestObject(
            $modelRequest->getMethod(),
            $this->getFullUrl($this->preBuiltData['uri']) . $this->getQueryStringFilters($modelRequest)
        );
    }

    /**
     * @param ModelRequest $modelRequest
     * @return string
     */
    public function getQueryStringFilters(ModelRequest $modelRequest)
    {
        $output = [];
        $mappings = [
            'getDateStart'      =>  'date_start',
            'getDateEnd'        =>  'date_end',
            'getLimitStart'     =>  'limit_start',
            'getLimitNumber'    =>  'limit_number'
        ];

        foreach($mappings as $methodName => $paramName) {
            if(method_exists($modelRequest, $methodName) && !is_null($paramName)) {
                $value = $modelRequest->$methodName();
                if(is_object($value)) {
                    if(get_class($value) === 'DateTime') {
                        $value = $value->format('Y-m-d');
                    } else {
                        $value = '';
                    }
                }
                $output[$paramName] = $value;
            }
        }

        $query = http_build_query($output, '', '&');

        if(!empty($query)) {
            return '?' . $query;
        }

        return '';
    }
}