<?php
declare(strict_types=1);

namespace BS\SchoolBoard\Strategy\Response;

use Psr\Http\Message\ResponseInterface;

/**
 * Interface GeneratorInterface
 *
 * @package BS\SchoolBoard\Strategy\Response
 */
interface GeneratorInterface
{
    /**
     * Get Response
     *
     * @param \stdClass $formattedObject formatted object
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function getResponse(\stdClass $formattedObject): ResponseInterface;
}
