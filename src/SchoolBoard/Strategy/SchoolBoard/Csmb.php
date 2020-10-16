<?php
declare(strict_types=1);

namespace BS\SchoolBoard\Strategy\SchoolBoard;

use BS\SchoolBoard\Entity\StudentInterface;

/**
 * Class Csmb
 *
 * @package BS\SchoolBoard\Strategy\SchoolBoard
 */
final class Csmb implements ResultInterface
{
    /**
     * Get result for student
     *
     * @param \BS\SchoolBoard\Entity\StudentInterface $student student
     *
     * @return bool
     */
    public function getResult(StudentInterface $student): bool
    {
        $pass = false;

        foreach ($student->getGrades() as $grade) {
            if ($grade > 8) {
                $pass = true;
            }
        }

        return $pass;
    }
}
