<?php
declare(strict_types=1);

namespace BS\SchoolBoard\Formatter;

use BS\SchoolBoard\Entity\StudentInterface;

/**
 * Class Result
 *
 * @package BS\SchoolBoard\Formatter
 */
final class Result implements ResultInterface
{
    /**
     * Format Result
     *
     * @param \BS\SchoolBoard\Entity\StudentInterface $student student
     * @param bool                                    $pass    pass
     *
     * @return \stdClass
     */
    public function format(StudentInterface $student, bool $pass): \stdClass
    {
        $stdClass = new \stdClass();
        $stdClass->id = $student->getId();
        $stdClass->name = $student->getName();
        $stdClass->grades = $student->getGrades()->getGrades();
        $stdClass->schoolBoard = $student->getSchoolBoard()->getType();
        $stdClass->passed = $pass;
        return $stdClass;
    }
}
