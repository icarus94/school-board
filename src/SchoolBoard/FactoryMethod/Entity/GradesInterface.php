<?php
declare(strict_types=1);

namespace BS\SchoolBoard\FactoryMethod\Entity;

/**
 * Interface GradesInterface
 *
 * @package BS\SchoolBoard\FactoryMethod\Entity
 */
interface GradesInterface
{
    /**
     * Makes instance of @GradesInterface
     *
     * @param array $data data
     *
     * @return \BS\SchoolBoard\Entity\GradesInterface
     */
    public function make(array $data): \BS\SchoolBoard\Entity\GradesInterface;
}
