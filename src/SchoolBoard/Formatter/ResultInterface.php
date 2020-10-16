<?php
declare(strict_types=1);

namespace BS\SchoolBoard\Formatter;

use BS\SchoolBoard\Entity\StudentInterface;

/**
 * Interface ResultInterface
 *
 * @package BS\SchoolBoard\Formatter
 */
interface ResultInterface
{
    /**
     * Format Result
     *
     * @param \BS\SchoolBoard\Entity\StudentInterface $student student
     * @param bool                                    $pass    pass
     *
     * @return \stdClass
     */
    public function format(StudentInterface $student, bool $pass): \stdClass;
}
