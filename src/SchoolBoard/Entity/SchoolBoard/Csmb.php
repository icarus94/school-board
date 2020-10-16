<?php
declare(strict_types=1);

namespace BS\SchoolBoard\Entity\SchoolBoard;

/**
 * Class Csmb
 *
 * @package BS\SchoolBoard\Entity\SchoolBoard
 */
final class Csmb implements SchoolBoardInterface
{
    /**
     * Get Type
     *
     * @return string
     */
    public function getType(): string
    {
        return SchoolBoardTypes::TYPE_CSMB;
    }
}
