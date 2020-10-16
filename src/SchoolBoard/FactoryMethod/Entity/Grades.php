<?php
declare(strict_types=1);

namespace BS\SchoolBoard\FactoryMethod\Entity;

use BS\SchoolBoard\Exception\OutOfBoundsException;

/**
 * Class Grades
 *
 * @package BS\SchoolBoard\FactoryMethod\Entity
 */
final class Grades implements GradesInterface
{
    /**
     * Makes instance of @GradesInterface
     *
     * @param array $data data
     *
     * @return \BS\SchoolBoard\Entity\GradesInterface
     */
    public function make(array $data): \BS\SchoolBoard\Entity\GradesInterface
    {
        $count = count($data);
        if ($count < 1 || $count > 4) {
            throw OutOfBoundsException::gradesCountOutOfBounds();
        }
        $marks = [];

        foreach ($data as $item) {
            $mark = $item['mark'];
            if ($mark < 5 || $mark > 10) {
                throw OutOfBoundsException::markValueNotAllowed();
            }
            $marks[] = $mark;
        }

        return new \BS\SchoolBoard\Entity\Grades($marks);
    }
}
