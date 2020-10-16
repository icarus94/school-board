<?php
declare(strict_types=1);

namespace BS\SchoolBoard\FactoryMethod\Strategy\Response;

use BS\SchoolBoard\Entity\SchoolBoard\SchoolBoardInterface;

/**
 * Interface GeneratorInterface
 *
 * @package BS\SchoolBoard\FactoryMethod\Strategy\Response
 */
interface GeneratorInterface
{
    /**
     * @param \BS\SchoolBoard\Entity\SchoolBoard\SchoolBoardInterface $schoolBoard schoolBoard
     *
     * @return \BS\SchoolBoard\Strategy\Response\GeneratorInterface
     */
    public function make(SchoolBoardInterface $schoolBoard): \BS\SchoolBoard\Strategy\Response\GeneratorInterface;
}
