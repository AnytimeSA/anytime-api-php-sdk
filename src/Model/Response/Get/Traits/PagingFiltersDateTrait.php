<?php

namespace Anytime\ApiClient\Model\Response\Get\Traits;

trait PagingFiltersDateTrait
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
}