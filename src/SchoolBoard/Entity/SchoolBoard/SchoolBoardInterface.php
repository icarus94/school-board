<?php
declare(strict_types=1);

namespace BS\SchoolBoard\Entity\SchoolBoard;

/**
 * Interface SchoolBoardInterface
 *
 * @package BS\SchoolBoard\Entity\SchoolBoard
 */
interface SchoolBoardInterface
{
    /**
     * Get Type
     *
     * @return string
     */
    public function getType(): string;
}
