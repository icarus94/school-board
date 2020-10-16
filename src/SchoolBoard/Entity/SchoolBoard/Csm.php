<?php
declare(strict_types=1);

namespace BS\SchoolBoard\Entity\SchoolBoard;

/**
 * Class Csm
 *
 * @package BS\SchoolBoard\Entity\SchoolBoard
 */
final class Csm implements SchoolBoardInterface
{
    /**
     * Get Type
     *
     * @return string
     */
    public function getType(): string
    {
        return SchoolBoardTypes::TYPE_CSM;
    }
}
