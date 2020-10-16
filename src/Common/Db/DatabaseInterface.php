<?php
declare(strict_types=1);

namespace BS\Common\Db;

/**
 * Interface DatabaseInterface
 *
 * @package BS\Common\Db
 */
interface DatabaseInterface
{
    /**
     * Get Student by id
     *
     * @param int $id id
     *
     * @return array
     */
    public function getStudentsById(int $id): array;
}
