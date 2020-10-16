<?php
declare(strict_types=1);

namespace BS\Common\Helper;

/**
 * Interface XmlConverterInterface
 *
 * @package BS\Common\Helper
 */
interface XmlConverterInterface
{
    /**
     * @param object $object object
     *
     * @return string
     */
    public function convert($object): string;
}
