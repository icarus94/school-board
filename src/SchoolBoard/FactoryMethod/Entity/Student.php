<?php
declare(strict_types=1);

namespace BS\SchoolBoard\FactoryMethod\Entity;

use BS\SchoolBoard\Exception\MissingDataException;

/**
 * Class Student
 *
 * @package BS\SchoolBoard\FactoryMethod\Entity
 */
final class Student implements StudentInterface
{
    /**
     * @var \BS\SchoolBoard\FactoryMethod\Entity\GradesInterface
     */
    private $gradesFactoryMethod;

    /**
     * @var \BS\SchoolBoard\FactoryMethod\Entity\SchoolBoardInterface
     */
    private $schoolBoardFactoryMethod;

    /**
     * Student constructor.
     *
     * @param \BS\SchoolBoard\FactoryMethod\Entity\GradesInterface      $gradesFactoryMethod
     * @param \BS\SchoolBoard\FactoryMethod\Entity\SchoolBoardInterface $schoolBoardFactoryMethod
     */
    public function __construct(
        \BS\SchoolBoard\FactoryMethod\Entity\GradesInterface $gradesFactoryMethod,
        \BS\SchoolBoard\FactoryMethod\Entity\SchoolBoardInterface $schoolBoardFactoryMethod
    ) {
        $this->gradesFactoryMethod = $gradesFactoryMethod;
        $this->schoolBoardFactoryMethod = $schoolBoardFactoryMethod;
    }

    /**
     * Make instance of @StudentInterface
     *
     * @param array $data data
     *
     * @return \BS\SchoolBoard\Entity\StudentInterface
     */
    public function make(array $data): \BS\SchoolBoard\Entity\StudentInterface
    {
        if (!isset($data['id']) || !is_numeric($data['id'])) {
            throw MissingDataException::missingData('id');
        }
        $id = (int) $data['id'];

        if (!isset($data['name']) || !is_string($data['name'])) {
            throw MissingDataException::missingData('id');
        }
        $name = $data['name'];

        $grades = $this->gradesFactoryMethod->make($data['grades']);
        $schoolBoard = $this->schoolBoardFactoryMethod->make($data['school_board']);

        return new \BS\SchoolBoard\Entity\Student(
            $id,
            $name,
            $grades,
            $schoolBoard
        );
    }
}
