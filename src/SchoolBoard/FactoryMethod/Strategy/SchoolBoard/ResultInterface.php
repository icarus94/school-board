<?php
declare(strict_types=1);

namespace BS\SchoolBoard\FactoryMethod\Strategy\SchoolBoard;

use BS\SchoolBoard\Entity\SchoolBoard\SchoolBoardInterface;

/**
 * Interface ResultInterface
 *
 * @package BS\SchoolBoard\FactoryMethod\Strategy\SchoolBoard
 */
interface ResultInterface
{
    /**
     * @param \BS\SchoolBoard\Entity\SchoolBoard\SchoolBoardInterface $schoolBoard school board
     *
     * @return \BS\SchoolBoard\Strategy\SchoolBoard\ResultInterface
     */
    public function make(SchoolBoardInterface $schoolBoard): \BS\SchoolBoard\Strategy\SchoolBoard\ResultInterface;
}
