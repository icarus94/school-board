<?php
declare(strict_types=1);

namespace BS\SchoolBoard\Exception;

/**
 * Class MissingDataException
 *
 * @package BS\SchoolBoard\Exception
 */
final class MissingDataException extends \BS\Common\Exception\Exception
{
    /**
     * @param string $key
     *
     * @return static
     */
    public static function missingData(string $key): self
    {
        return new self(sprintf('Missing data %s', $key), 500);
    }

    /**
     * @param int $id
     *
     * @return static
     */
    public static function noItemsFoundByGivenId(int $id): self
    {
        return new self(sprintf('No items found by given id %s', $id), 500);
    }

    /**
     * @param int $id
     *
     * @return static
     */
    public static function missingUrlParam(int $id): self
    {
        return new self(sprintf('Missing Url Param %s', $id), 500);
    }
}
