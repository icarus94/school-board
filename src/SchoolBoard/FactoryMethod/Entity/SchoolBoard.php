<?php
declare(strict_types=1);

namespace BS\SchoolBoard\FactoryMethod\Entity;

use BS\SchoolBoard\Entity\SchoolBoard\Csm;
use BS\SchoolBoard\Entity\SchoolBoard\Csmb;
use BS\SchoolBoard\Exception\NotSupportedException;

/**
 * Class SchoolBoard
 *
 * @package BS\SchoolBoard\FactoryMethod\Entity
 */
final class SchoolBoard implements SchoolBoardInterface
{
    /**
     * Make instance of @SchoolBoardInterface
     *
     * @param string $type type
     *
     * @return \BS\SchoolBoard\Entity\SchoolBoard\SchoolBoardInterface
     */
    public function make(string $type): \BS\SchoolBoard\Entity\SchoolBoard\SchoolBoardInterface
    {
        $schoolBoard = null;
        switch ($type) {
            case \BS\SchoolBoard\Entity\SchoolBoard\SchoolBoardTypes::TYPE_CSM:
                $schoolBoard = new Csm();
                break;
            case \BS\SchoolBoard\Entity\SchoolBoard\SchoolBoardTypes::TYPE_CSMB:
                $schoolBoard = new Csmb();
                break;
            default:
                throw NotSupportedException::unknownSchoolBoardType();
        }
        return $schoolBoard;
    }
}
