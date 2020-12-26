<?php

namespace Anytime\ApiClient\Model\Response\Get;

class ModelResponseGetOrderTracking extends ModelResponseGet
{
    /**
     * @return integer
     */
    public function getTrackingLink()
    {
        return $this->getDataValue('tracking_link');
    }

}
