<?php
declare(strict_types=1);

namespace BS\SchoolBoard\Service;

use BS\SchoolBoard\Exception\MissingDataException;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

/**
 * Class Student
 *
 * @package BS\SchoolBoard\Service
 */
final class Student implements StudentInterface
{
    /**
     * @var \BS\SchoolBoard\Repository\StudentInterface
     */
    private $repository;

    /**
     * @var \BS\SchoolBoard\Formatter\ResultInterface
     */
    private $formatter;

    /**
     * @var \BS\SchoolBoard\FactoryMethod\Strategy\SchoolBoard\ResultInterface
     */
    private $resultFactoryMethod;

    /**
     * @var \BS\SchoolBoard\FactoryMethod\Strategy\Response\GeneratorInterface
     */
    private $responseGeneratorFactoryMethod;

    /**
     * Student constructor.
     *
     * @param \BS\SchoolBoard\Repository\StudentInterface                        $repository
     * @param \BS\SchoolBoard\Formatter\ResultInterface                          $formatter
     * @param \BS\SchoolBoard\FactoryMethod\Strategy\SchoolBoard\ResultInterface $resultFactoryMethod
     * @param \BS\SchoolBoard\FactoryMethod\Strategy\Response\GeneratorInterface $responseGeneratorFactoryMethod
     */
    public function __construct(
        \BS\SchoolBoard\Repository\StudentInterface $repository,
        \BS\SchoolBoard\Formatter\ResultInterface $formatter,
        \BS\SchoolBoard\FactoryMethod\Strategy\SchoolBoard\ResultInterface $resultFactoryMethod,
        \BS\SchoolBoard\FactoryMethod\Strategy\Response\GeneratorInterface $responseGeneratorFactoryMethod
    ) {
        $this->repository = $repository;
        $this->formatter = $formatter;
        $this->resultFactoryMethod = $resultFactoryMethod;
        $this->responseGeneratorFactoryMethod = $responseGeneratorFactoryMethod;
    }

    /**
     * @param \Psr\Http\Message\ServerRequestInterface $request request
     * @param array                                    $args    args
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function getStudentStatistics(ServerRequestInterface $request, array $args): ResponseInterface
    {
        $idUrlParam = ((int)$args['id']) ?? false;
        if (!$idUrlParam) {
            throw MissingDataException::missingUrlParam('id');
        }
        $student = $this->repository->getStudentById($idUrlParam);
        $resultCalculator = $this->resultFactoryMethod->make($student->getSchoolBoard());
        $result = $resultCalculator->getResult($student);
        $formattedObject = $this->formatter->format($student, $result);
        $responseGenerator = $this->responseGeneratorFactoryMethod->make($student->getSchoolBoard());
        return $responseGenerator->getResponse($formattedObject);
    }
}
