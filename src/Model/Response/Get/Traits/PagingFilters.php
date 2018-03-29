<?php

namespace Anytime\ApiClient\Model\Response\Get\Traits;

class PagingFilters
{
    /**
     * @var \DateTime
     */
    private $dateStart;

    /**
     * @var \DateTime
     */
    private $dateEnd;

    /**
     * @var integer
     */
    private $limitStart;

    /**
     * @var integer
     */
    private $limitNumber;

    /**
     * @return \DateTime
     */
    public function getDateStart()
    {
        return $this->dateStart;
    }

    /**
     * @param \DateTime $dateStart
     * @return PagingFilters
     */
    public function setDateStart(\DateTime $dateStart)
    {
        $this->dateStart = $dateStart;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDateEnd()
    {
        return $this->dateEnd;
    }

    /**
     * @param \DateTime $dateEnd
     * @return PagingFilters
     */
    public function setDateEnd(\DateTime $dateEnd)
    {
        $this->dateEnd = $dateEnd;
        return $this;
    }

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