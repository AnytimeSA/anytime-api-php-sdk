<?php

namespace Anytime\ApiClient\IO\FileReader;

use Anytime\ApiClient\Exception\ApiClientException\UnreachableFileContentsException;

class NullFileReader implements FileReaderInterface
{
    /**
     * @param string $identifier The file path
     * @return string
     * @throws UnreachableFileContentsException
     */
    public function getContents($identifier)
    {
        if(!is_null($identifier)) {
            return $identifier . '-contents';
        }
        throw new UnreachableFileContentsException($identifier);
    }
}