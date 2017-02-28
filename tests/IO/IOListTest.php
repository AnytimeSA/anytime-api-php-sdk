<?php

namespace Anytime\ApiClient\IO;

use Anytime\ApiClient\Constant\API;
use Xpmock\TestCase;

class IOListTest extends TestCase
{
    /**
     * @group IO
     * @group IOList
     */
    public function testGetIOFromCacheReturnsTheIOFactoryCreateReturnValue()
    {
        $apiCheckIO = $this->mock(ApiCheckIO::class)->new();
        $IOFactory = $this->mock(IOFactory::class)->create($apiCheckIO)->new();
        $IOList = new IOList($IOFactory);

        // We execute it 2 times because the first time it is instantiated and saved in cache.
        // The second time the cache is used directly.
        $this->assertInstanceOf(ApiCheckIO::class, $IOList->getIOFromCache(API::APICHECK));
        $this->assertInstanceOf(ApiCheckIO::class, $IOList->getIOFromCache(API::APICHECK));
    }
}