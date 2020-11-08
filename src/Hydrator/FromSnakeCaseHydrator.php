<?php

namespace Anytime\ApiClient\Hydrator;

use Anytime\ApiClient\DateTime\TimezoneNormalizer\TimezoneNormalizerInterface;

class FromSnakeCaseHydrator implements HydratorInterface
{
    /**
     * @var TimezoneNormalizerInterface
     */
    private $timezoneNormalizer;

    /**
     * FromSnakeCaseHydrator constructor.
     * @param TimezoneNormalizerInterface $timezoneNormalizer
     */
    public function __construct(TimezoneNormalizerInterface $timezoneNormalizer)
    {
        $this->timezoneNormalizer = $timezoneNormalizer;
    }

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
                switch($this->getSetterParamType(get_class($object), $setter)) {
                    case 'DateTime':
                        $transformedValue = $this->timezoneNormalizer->normalize($value);
                        break;
                    default:
                        $transformedValue = $value;
                }

                if(!is_null($transformedValue)) {
                    $object->$setter($transformedValue);
                }
            }
        }

        return $object;
    }

    /**
     * @param class-string $class
     * @param string $method
     * @return string
     */
    protected function getSetterParamType($class, $method)
    {
        $reflectionParams = (new \ReflectionMethod($class, $method))->getParameters();
        return count($reflectionParams) > 0 ? (string)$reflectionParams[0]->getType() : 'mixed';
    }

}