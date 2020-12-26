<?php

namespace Anytime\ApiClient\IO\FileReader;

use Anytime\ApiClient\Exception\ApiClientException\UnreachableFileContentsException;

class DiskFileReader implements FileReaderInterface
{
    /**
     * @param string $filePath The file path
     * @return string
     * @throws UnreachableFileContentsException
     */
    public function getContents($filePath)
    {
        if($this->fileExists($filePath)) {
            return file_get_contents($filePath);
        }
        throw new UnreachableFileContentsException($filePath);
    }

    /**
     * @param string $filePath
     * @return bool
     */
    public function fileExists($filePath)
    {
        return (file_exists($filePath) && is_readable($filePath));
    }
}
