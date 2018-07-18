<?php

namespace Anytime\ApiClient\Model\Response\Post;

use Anytime\ApiClient\Model\Request\Post\ModelRequestPostRequestMultiRequest;

class ModelResponsePostRequestMultiRequest extends ModelResponsePost
{
    /**
     * @return ModelResponsePostRequestMultiRequestResponse[]
     */
    public function getResponses()
    {
        if(!$this->isGetterCached(__METHOD__)) {
            /** @var ModelRequestPostRequestMultiRequest $modelRequest */
            $modelRequest = $this->modelRequest;

            $subRequests = $modelRequest->getRequests();

            $data = [];
            foreach($this->getDataValue('responses') as $index => $responseData) {
                $subRequest = array_key_exists($index, $subRequests) ? $subRequests[$index] : null;
                $responseElem = new ModelResponsePostRequestMultiRequestResponse();
                $responseElem
                    ->setMethod(array_key_exists('method', $responseData) ? $responseData['method'] : null)
                    ->setUri(array_key_exists('uri', $responseData) ? $responseData['uri'] : null)
                    ->setParams(array_key_exists('params', $responseData) ? $responseData['params'] : null)
                    ->setQueryString(array_key_exists('query_string', $responseData) ? $responseData['query_string'] : null)
                    ->setHttpStatusCode(array_key_exists('http_status_code', $responseData) ? $responseData['http_status_code'] : null)
                ;


                $modelResponse = $this->modelResponseFactory->create($subRequest);
                $modelResponse = $this->modelResponseFactory->getModelResponsePopulator()->populate(
                    $modelResponse,
                    array_key_exists('response', $responseData) ? $responseData['response'] : []
                );
                $responseElem->setResponse($modelResponse);

                $data[] = $responseElem;
            }

            $this->setGetterCache(__METHOD__, $data);
        }

        return $this->getGetterCache(__METHOD__);
    }
}