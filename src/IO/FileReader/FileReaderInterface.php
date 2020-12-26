<?php

namespace Anytime\ApiClient\IO\FileReader;

use Anytime\ApiClient\Exception\ApiClientException\UnreachableFileContentsException;

interface FileReaderInterface
{
    /**
     * @param string $identifier The identifier to the resource read. It can be a file path, and ID in the database, or whatever your concrete class can use to get the file content.
     * @return string
     * @throws UnreachableFileContentsException
     */
    public function getContents($identifier);

    /**
     * @param string $identifier
     * @return boolean
     */
    public function fileExists($identifier);
}
