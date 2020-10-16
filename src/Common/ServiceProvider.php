<?php
declare(strict_types=1);

namespace BS\Common;

use League\Container\ServiceProvider\AbstractServiceProvider;

/**
 * Class ServiceProvider
 *
 * @package BS\Common
 */
final class ServiceProvider extends AbstractServiceProvider
{
    protected $provides = [
        Db\DatabaseInterface::class,
    ];

    /**
     * Use the register method to register items with the container via the
     * protected $this->leagueContainer property or the `getLeagueContainer` method
     * from the ContainerAwareTrait.
     *
     * @return void
     */
    public function register()
    {
        $container = $this->getLeagueContainer();
        $container->add(Db\DatabaseInterface::class, Db\FileDatabase::class)
            ->addArgument($container->get('config')['database']['filePath']);
    }
}
