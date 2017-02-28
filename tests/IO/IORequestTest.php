<?php

namespace Anytime\ApiClient\IO;

use Anytime\ApiClient\IO\FileReader\DiskFileReader;
use Xpmock\TestCase;

class IORequestTest extends TestCase
{
    /**
     * @group IO
     * @group IORequest
     */
    public function testGetMultipartOption()
    {
        $fileReader = $this->mock(DiskFileReader::class)->getContents('the.file.contents')->new();
        $IORequest = (new IORequest($fileReader))
            ->setFiles([
                'file1' =>  '/filePath1',
                'file2' =>  '/filePath2'
            ])
            ->setFormData([
                'field1'    =>  'value1',
                'field2'    =>  'value2'
            ])
        ;

        $this->assertSame(
            [
                [
                    'name'      =>  'file1',
                    'contents'  => 'the.file.contents',
                    'filename'  =>  'file1.jpg'
                ],
                [
                    'name'      =>  'file2',
                    'contents'  => 'the.file.contents',
                    'filename'  =>  'file2.jpg'
                ],
                [
                    'name'      =>  'field1',
                    'contents'  =>  'value1'
                ],
                [
                    'name'      =>  'field2',
                    'contents'  =>  'value2'
                ]
            ],
            $IORequest->getMultipartOption()
        );
    }

    /**
     * @group IO
     * @group IORequest
     */
    public function testGetRequestArrangedOptionsHasCorrectKeysDependingOfTheStructureOfData()
    {
        $fileReader = $this->mock(DiskFileReader::class)->getContents('the.file.contents')->new();
        $IORequest = (new IORequest($fileReader))
            ->setHeaders([
                'someHeader'    =>  '1234'
            ])
            ->setFormData([
                'field1'    =>  'value1'
            ])
        ;

        $options = $IORequest->getRequestArrangedOptions();
        $this->assertArrayHasKey('headers', $options);
        $this->assertArrayHasKey('form_params', $options);
        $this->assertArrayNotHasKey('multipart', $options);

        // Now we add some files
        $IORequest->setFiles([
            'file1' =>  '/filePath1'
        ]);
        $options = $IORequest->getRequestArrangedOptions();
        $this->assertArrayHasKey('headers', $options);
        $this->assertArrayNotHasKey('form_params', $options);
        $this->assertArrayHasKey('multipart', $options);
    }
}