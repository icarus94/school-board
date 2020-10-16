<?php
declare(strict_types=1);

namespace BS\SchoolBoard\Entity;

/**
 * Interface GradesInterface
 *
 * @package BS\SchoolBoard\Entity
 */
interface GradesInterface extends \Iterator, \Countable
{
    /**
     * @return array
     */
    public function getGrades(): array;
}
