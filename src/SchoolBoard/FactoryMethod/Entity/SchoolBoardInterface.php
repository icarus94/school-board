<?php
declare(strict_types=1);

namespace BS\SchoolBoard\FactoryMethod\Entity;

/**
 * Interface SchoolBoardInterface
 *
 * @package BS\SchoolBoard\FactoryMethod\Entity
 */
interface SchoolBoardInterface
{
    /**
     * Make instance of @SchoolBoardInterface
     *
     * @param string $type type
     *
     * @return \BS\SchoolBoard\Entity\SchoolBoard\SchoolBoardInterface
     */
    public function make(string $type): \BS\SchoolBoard\Entity\SchoolBoard\SchoolBoardInterface;
}
