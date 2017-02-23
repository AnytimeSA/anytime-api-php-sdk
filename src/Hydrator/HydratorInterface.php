<?php

namespace Anytime\ApiClient\Hydrator;

interface HydratorInterface
{
    /**
     * @param object $object
     * @param array $values
     * @return object
     */
    public function hydrate($object, array $values);
}