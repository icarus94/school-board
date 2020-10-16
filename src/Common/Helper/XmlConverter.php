<?php
declare(strict_types=1);

namespace BS\Common\Helper;

/**
 * Class XmlConverter
 *
 * @package BS\Common\Helper
 */
final class XmlConverter implements XmlConverterInterface
{
    /**
     * @param object $object object
     *
     * @return string
     */
    public function convert($object): string
    {
        $serializer = \JMS\Serializer\SerializerBuilder::create()->build();
        return $serializer->serialize($object, 'xml');
    }
}
