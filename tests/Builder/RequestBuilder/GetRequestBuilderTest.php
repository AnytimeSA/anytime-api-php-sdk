<?php

namespace Anytime\ApiClient\Builder\RequestBuilder;

use Anytime\ApiClient\ApiClientSetting;
use Anytime\ApiClient\DateTime\TimezoneNormalizer\TimezoneNormalizer;
use Anytime\ApiClient\IO\FileReader\DiskFileReader;
use Anytime\ApiClient\Model\Request\Get\ModelRequestGetCardTransaction;
use Anytime\ApiClient\RequestSigner\OpenSslRequestSigner;
use Xpmock\TestCase;

class GetRequestBuilderTest extends TestCase
{
    /**
     * @group GetRequestBuilder
     * @group RequestBuilder
     */

    public function testGetQueryStringFiltersReturnsCorrectQueryStringBasedOnDateAndLimitParams()
    {
        /** @var RequestDirectorFactory $requestDirectorFactory */
        $requestDirectorFactory = $this->prophesize(RequestDirectorFactory::class)->reveal();

        $timezoneNormalizer = $this->mock(TimezoneNormalizer::class)->new();
        $modelRequest = (new ModelRequestGetCardTransaction($timezoneNormalizer))
            ->setDateStart(new \DateTime('2015-01-01'))
            ->setDateEnd(new \DateTime('2016-01-01'))
            ->setLimitNumber(10)
            ->setLimitStart(50)
        ;

        $getRequestBuilderInstance = new NullGetRequestBuilder(
            $this->mock(ApiClientSetting::class)->new(),
            $this->mock(DiskFileReader::class)->new(),
            $this->mock(OpenSslRequestSigner::class)->new(),
            $requestDirectorFactory
        );

        // Dates and limit fulfilled
        $this->assertSame('?date_start=2015-01-01&date_end=2016-01-01&limit_start=50&limit_number=10', $getRequestBuilderInstance->getQueryStringFilters($modelRequest));

        // Only Dates
        $modelRequest = (new ModelRequestGetCardTransaction($timezoneNormalizer))
            ->setDateStart(new \DateTime('2015-01-01'))
            ->setDateEnd(new \DateTime('2016-01-01'))
        ;
        $this->assertSame('?date_start=2015-01-01&date_end=2016-01-01', $getRequestBuilderInstance->getQueryStringFilters($modelRequest));

        // Only limit
        $modelRequest = (new ModelRequestGetCardTransaction($timezoneNormalizer))
            ->setLimitNumber(10)
            ->setLimitStart(50)
        ;
        $this->assertSame('?limit_start=50&limit_number=10', $getRequestBuilderInstance->getQueryStringFilters($modelRequest));

        // No params
        $modelRequest = new ModelRequestGetCardTransaction($timezoneNormalizer);
        $this->assertSame('', $getRequestBuilderInstance->getQueryStringFilters($modelRequest));
    }
}