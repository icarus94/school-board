<?php
declare(strict_types=1);

namespace BS\SchoolBoard\Entity;

/**
 * Class Grades
 *
 * @package BS\SchoolBoard\Entity
 */
final class Grades implements GradesInterface
{
    /**
     * @var array
     */
    private $grades;

    /**
     * @var int
     */
    private $index;

    /**
     * Grades constructor.
     *
     * @param array $grades grades
     */
    public function __construct(array $grades)
    {
        $this->grades = $grades;
        $this->index = 0;
    }

    /**
     * Return the current element
     *
     * @link https://php.net/manual/en/iterator.current.php
     * @return mixed Can return any type.
     */
    public function current(): int
    {
        return $this->grades[$this->index];
    }

    /**
     * Move forward to next element
     *
     * @link https://php.net/manual/en/iterator.next.php
     * @return void Any returned value is ignored.
     */
    public function next(): void
    {
        $this->index++;
    }

    /**
     * Return the key of the current element
     *
     * @link https://php.net/manual/en/iterator.key.php
     * @return string|float|int|bool|null scalar on success, or null on failure.
     */
    public function key(): int
    {
        return $this->index;
    }

    /**
     * Checks if current position is valid
     *
     * @link https://php.net/manual/en/iterator.valid.php
     * @return bool The return value will be casted to boolean and then evaluated.
     * Returns true on success or false on failure.
     */
    public function valid(): bool
    {
        return isset($this->items[$this->index]);
    }

    /**
     * Rewind the Iterator to the first element
     *
     * @link https://php.net/manual/en/iterator.rewind.php
     * @return void Any returned value is ignored.
     */
    public function rewind(): void
    {
        $this->index = 0;
    }

    /**
     * Count elements of an object
     *
     * @link https://php.net/manual/en/countable.count.php
     * @return int The custom count as an integer.
     * </p>
     * <p>
     * The return value is cast to an integer.
     */
    public function count(): int
    {
        return count($this->grades);
    }

    /**
     * @return array
     */
    public function getGrades(): array
    {
        return $this->grades;
    }
}
