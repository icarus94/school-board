<?php
declare(strict_types=1);

namespace BS\SchoolBoard\FactoryMethod\Strategy\SchoolBoard;

use BS\SchoolBoard\Entity\SchoolBoard\Csm;
use BS\SchoolBoard\Entity\SchoolBoard\Csmb;
use BS\SchoolBoard\Entity\SchoolBoard\SchoolBoardInterface;
use BS\SchoolBoard\Exception\NotSupportedException;

/**
 * Class Result
 *
 * @package BS\SchoolBoard\FactoryMethod\Strategy\SchoolBoard
 */
final class Result implements ResultInterface
{
    /**
     * @param \BS\SchoolBoard\Entity\SchoolBoard\SchoolBoardInterface $schoolBoard school board
     *
     * @return \BS\SchoolBoard\Strategy\SchoolBoard\ResultInterface
     */
    public function make(SchoolBoardInterface $schoolBoard): \BS\SchoolBoard\Strategy\SchoolBoard\ResultInterface
    {
        if ($schoolBoard instanceof Csm) {
            return new \BS\SchoolBoard\Strategy\SchoolBoard\Csm();
        }

        if ($schoolBoard instanceof Csmb) {
            return new \BS\SchoolBoard\Strategy\SchoolBoard\Csmb();
        }

        throw NotSupportedException::unknownSchoolBoardClass();
    }
}
