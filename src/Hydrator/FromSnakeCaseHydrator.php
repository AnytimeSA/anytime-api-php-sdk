<?php

namespace Anytime\ApiClient\Hydrator;

class FromSnakeCaseHydrator implements HydratorInterface
{
    /**
     * @param object $object
     * @param array $values
     * @return object
     */
    public function hydrate($object, array $values)
    {
        foreach($values as $key => $value) {

            $setter = 'set' . implode('', array_map(
                function($elem) {
                    return ucfirst($elem);
                },
                explode('_', strtolower($key))
            ));

            if(method_exists($object, $setter)) {
                $object->$setter($value);
            }
        }

        return $object;
    }
}