<?php

namespace Anytime\ApiClient\Model\Response\Get\Traits;

trait PagingFiltersLimitTrait
{

    /**
     * @var integer
     */
    private $limitStart;

    /**
     * @var integer
     */
    private $limitNumber;

    /**
     * @return int
     */
    public function getLimitStart()
    {
        return $this->limitStart;
    }

    /**
     * @param int $limitStart
     * @return PagingFilters
     */
    public function setLimitStart($limitStart)
    {
        $this->limitStart = $limitStart;
        return $this;
    }

    /**
     * @return int
     */
    public function getLimitNumber()
    {
        return $this->limitNumber;
    }

    /**
     * @param int $limitNumber
     * @return PagingFilters
     */
    public function setLimitNumber($limitNumber)
    {
        $this->limitNumber = $limitNumber;
        return $this;
    }
}