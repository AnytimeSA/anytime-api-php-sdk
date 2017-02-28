<?php

namespace Anytime\ApiClient\Exception\ApiClientException;

class UnreachableFileContentsException extends ApiClientException
{
    /**
     * UnreachableFileContentsException constructor.
     *
     * @param string $identifier
     * @param \Exception|null $previous
     */
    public function __construct($identifier, \Exception $previous = null)
    {
        parent::__construct('The file contents with the identifier "'.$identifier.'" is not reachable', 0, $previous);
    }
}