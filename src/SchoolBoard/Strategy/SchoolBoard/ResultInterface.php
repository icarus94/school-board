<?php
declare(strict_types=1);

namespace BS\SchoolBoard\Strategy\SchoolBoard;

use BS\SchoolBoard\Entity\StudentInterface;

/**
 * Interface ResultInterface
 *
 * @package BS\SchoolBoard\Strategy\SchoolBoard
 */
interface ResultInterface
{
    /**
     * Get result for student
     *
     * @param \BS\SchoolBoard\Entity\StudentInterface $student student
     *
     * @return bool
     */
    public function getResult(StudentInterface $student): bool;
}
