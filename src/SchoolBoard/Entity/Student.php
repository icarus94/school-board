<?php
declare(strict_types=1);

namespace BS\SchoolBoard\Entity;

/**
 * Class Student
 *
 * @package BS\SchoolBoard\Entity
 */
final class Student implements StudentInterface
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var \BS\SchoolBoard\Entity\GradesInterface
     */
    private $grades;

    /**
     * @var \BS\SchoolBoard\Entity\SchoolBoard\SchoolBoardInterface
     */
    private $schoolBoard;

    /**
     * Student constructor.
     *
     * @param int                                                     $id          id
     * @param string                                                  $name        name
     * @param \BS\SchoolBoard\Entity\GradesInterface                  $grades      grades
     * @param \BS\SchoolBoard\Entity\SchoolBoard\SchoolBoardInterface $schoolBoard school board
     */
    public function __construct(
        int $id,
        string $name,
        \BS\SchoolBoard\Entity\GradesInterface $grades,
        \BS\SchoolBoard\Entity\SchoolBoard\SchoolBoardInterface $schoolBoard
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->grades = $grades;
        $this->schoolBoard = $schoolBoard;
    }

    /**
     * Get Id
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Get Name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Get Grades
     *
     * @return GradesInterface
     */
    public function getGrades(): GradesInterface
    {
        return $this->grades;
    }

    /**
     * Get SchoolBoard
     *
     * @return SchoolBoard\SchoolBoardInterface
     */
    public function getSchoolBoard(): SchoolBoard\SchoolBoardInterface
    {
        return $this->schoolBoard;
    }
}
