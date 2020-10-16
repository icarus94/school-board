<?php
declare(strict_types=1);

namespace BS\SchoolBoard\Strategy\SchoolBoard;

use BS\SchoolBoard\Entity\StudentInterface;

/**
 * Class Csm
 *
 * @package BS\SchoolBoard\Strategy\SchoolBoard
 */
final class Csm implements ResultInterface
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
        $sum = 0;
        $grades = $student->getGrades();
        foreach ($grades as $grade) {
            $sum += $grade;
        }
        $average = $sum / count($grades);

        $pass = false;
        if ($average >= 7) {
            $pass = true;
        }

        return $pass;
    }
}
