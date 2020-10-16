<?php
declare(strict_types=1);

namespace BS\SchoolBoard\Repository;

use BS\SchoolBoard\Exception\MissingDataException;

/**
 * Class Student
 *
 * @package BS\SchoolBoard\Repository
 */
final class Student implements StudentInterface
{
    /**
     * @var \BS\Common\Db\DatabaseInterface
     */
    private $database;

    /**
     * @var \BS\SchoolBoard\FactoryMethod\Entity\Student
     */
    private $studentFactoryMethod;

    /**
     * Student constructor.
     *
     * @param \BS\Common\Db\DatabaseInterface              $database             database
     * @param \BS\SchoolBoard\FactoryMethod\Entity\Student $studentFactoryMethod student FM
     */
    public function __construct(
        \BS\Common\Db\DatabaseInterface $database,
        \BS\SchoolBoard\FactoryMethod\Entity\Student $studentFactoryMethod
    ) {
        $this->database = $database;
        $this->studentFactoryMethod = $studentFactoryMethod;
    }

    /**
     * Get Student by ID
     *
     * @param int $id id
     *
     * @return \BS\SchoolBoard\Entity\StudentInterface
     */
    public function getStudentById(int $id): \BS\SchoolBoard\Entity\StudentInterface
    {
        $data = $this->database->getStudentsById($id);
        if (count($data) === 0) {
            throw MissingDataException::noItemsFoundByGivenId($id);
        }
        return $this->studentFactoryMethod->make($data);
    }
}
