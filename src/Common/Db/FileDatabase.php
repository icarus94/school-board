<?php
declare(strict_types=1);

namespace BS\Common\Db;

/**
 * Class FileDatabase
 *
 * @package BS\Common\Db
 */
final class FileDatabase implements DatabaseInterface
{
    /**
     * @var string
     */
    private $filePath;

    /**
     * FileDatabase constructor.
     *
     * @param string $filePath file path
     */
    public function __construct(string $filePath)
    {
        $this->filePath = $filePath;
    }

    /**
     * Get Student by id
     *
     * @param int $id id
     *
     * @return array
     */
    public function getStudentsById(int $id): array
    {
        $jsonFile = file_get_contents($this->filePath);
        $jsonData = json_decode($jsonFile, true);
        foreach ($jsonData as $item) {
            if ($item['id'] === $id) {
                return $item;
            }
        }
        return [];
    }
}
