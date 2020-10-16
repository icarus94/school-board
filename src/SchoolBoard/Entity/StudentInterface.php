<?php
declare(strict_types=1);

namespace BS\SchoolBoard\Entity;

/**
 * Interface StudentInterface
 *
 * @package BS\SchoolBoard\Entity
 */
interface StudentInterface
{
    /**
     * Get Id
     *
     * @return int
     */
    public function getId(): int;

    /**
     * Get Name
     *
     * @return string
     */
    public function getName(): string;

    /**
     * Get Grades
     *
     * @return GradesInterface
     */
    public function getGrades(): GradesInterface;

    /**
     * Get SchoolBoard
     *
     * @return SchoolBoard\SchoolBoardInterface
     */
    public function getSchoolBoard(): SchoolBoard\SchoolBoardInterface;
}
