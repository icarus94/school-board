<?php
declare(strict_types=1);

namespace BS\SchoolBoard\Repository;

/**
 * Interface StudentInterface
 *
 * @package BS\SchoolBoard\Repository
 */
interface StudentInterface
{
    /**
     * Get Student by ID
     *
     * @param int $id id
     *
     * @return \BS\SchoolBoard\Entity\StudentInterface
     */
    public function getStudentById(int $id): \BS\SchoolBoard\Entity\StudentInterface;
}
