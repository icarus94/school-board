<?php
declare(strict_types=1);

namespace BS\SchoolBoard\FactoryMethod\Entity;

/**
 * Interface StudentInterface
 *
 * @package BS\SchoolBoard\FactoryMethod\Entity
 */
interface StudentInterface
{
    /**
     * Make instance of @StudentInterface
     *
     * @param array $data data
     *
     * @return \BS\SchoolBoard\Entity\StudentInterface
     */
    public function make(array $data): \BS\SchoolBoard\Entity\StudentInterface;
}
