<?php
declare(strict_types=1);

namespace BS\SchoolBoard\Exception;

use Throwable;

/**
 * Class NotSupportedException
 *
 * @package BS\SchoolBoard\Exception
 */
final class NotSupportedException extends \BS\Common\Exception\Exception
{
    /**
     * @return static
     */
    public static function unknownSchoolBoardType(): self
    {
        return new self(sprintf('Unknown School Board Type'), 500);
    }

    /**
     * @return static
     */
    public static function unknownSchoolBoardClass(): self
    {
        return new self(sprintf('Unknown School Board Class'), 500);
    }
}
