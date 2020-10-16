<?php
declare(strict_types=1);

namespace BS\SchoolBoard\Strategy\Response;

use Laminas\Diactoros\Response\XmlResponse;
use Psr\Http\Message\ResponseInterface;

/**
 * Class Xml
 *
 * @package BS\SchoolBoard\Strategy\Response
 */
final class Xml implements GeneratorInterface
{
    /**
     * Get Response
     *
     * @param \stdClass $formattedObject formatted object
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function getResponse(\stdClass $formattedObject): ResponseInterface
    {
        return new XmlResponse($formattedObject);
    }
}
