<?php
declare(strict_types=1);

namespace BS\SchoolBoard\Service;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

/**
 * Interface StudentInterface
 *
 * @package BS\SchoolBoard\Service
 */
interface StudentInterface
{
    /**
     * @param \Psr\Http\Message\ServerRequestInterface $request request
     * @param array                                    $args    args
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function getStudentStatistics(
        ServerRequestInterface $request,
        array $args
    ): ResponseInterface;
}
