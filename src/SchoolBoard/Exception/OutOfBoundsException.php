<?php
declare(strict_types=1);

namespace BS\SchoolBoard\Exception;

/**
 * Class OutOfBoundsException
 *
 * @package BS\SchoolBoard\Exception
 */
final class OutOfBoundsException extends \BS\Common\Exception\Exception
{
    /**
     * @return static
     */
    public static function gradesCountOutOfBounds(): self
    {
        return new self(sprintf('Student should have 1-4 grades'), 500);
    }

    /**
     * @return static
     */
    public static function markValueNotAllowed(): self
    {
        return new self(sprintf('Student should have a mark between 5-10'), 500);
    }
}
