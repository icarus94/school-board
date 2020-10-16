<?php
declare(strict_types=1);

namespace BS\SchoolBoard\FactoryMethod\Strategy\Response;

use BS\SchoolBoard\Entity\SchoolBoard\Csm;
use BS\SchoolBoard\Entity\SchoolBoard\Csmb;
use BS\SchoolBoard\Entity\SchoolBoard\SchoolBoardInterface;
use BS\SchoolBoard\Exception\NotSupportedException;

/**
 * Class Generator
 *
 * @package BS\SchoolBoard\FactoryMethod\Strategy\Response
 */
final class Generator implements GeneratorInterface
{
    /**
     * @var \BS\SchoolBoard\Strategy\Response\Json
     */
    private $jsonResponseGenerator;

    /**
     * @var \BS\SchoolBoard\Strategy\Response\Xml
     */
    private $xmlResponseGenerator;

    /**
     * Generator constructor.
     *
     * @param \BS\SchoolBoard\Strategy\Response\Json $jsonResponseGenerator json response generator
     * @param \BS\SchoolBoard\Strategy\Response\Xml  $xmlResponseGenerator  xml response generator
     */
    public function __construct(
        \BS\SchoolBoard\Strategy\Response\Json $jsonResponseGenerator,
        \BS\SchoolBoard\Strategy\Response\Xml $xmlResponseGenerator
    ) {
        $this->jsonResponseGenerator = $jsonResponseGenerator;
        $this->xmlResponseGenerator = $xmlResponseGenerator;
    }

    /**
     * @param \BS\SchoolBoard\Entity\SchoolBoard\SchoolBoardInterface $schoolBoard schoolBoard
     *
     * @return \BS\SchoolBoard\Strategy\Response\GeneratorInterface
     */
    public function make(SchoolBoardInterface $schoolBoard): \BS\SchoolBoard\Strategy\Response\GeneratorInterface
    {
        if ($schoolBoard instanceof Csm) {
            return $this->jsonResponseGenerator;
        }

        if ($schoolBoard instanceof Csmb) {
            return $this->xmlResponseGenerator;
        }

        throw NotSupportedException::unknownSchoolBoardClass();
    }
}
