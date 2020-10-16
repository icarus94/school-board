<?php
declare(strict_types=1);

namespace BS\SchoolBoard;

use League\Container\ServiceProvider\AbstractServiceProvider;

/**
 * Class ServiceProvider
 *
 * @package BS\SchoolBoard
 */
final class ServiceProvider extends AbstractServiceProvider
{
    protected $provides = [
        Service\StudentInterface::class,
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
        // service
        $container->add(Service\StudentInterface::class, Service\Student::class)
            ->addArguments(
                [
                    Repository\StudentInterface::class,
                    Formatter\ResultInterface::class,
                    FactoryMethod\Strategy\SchoolBoard\ResultInterface::class,
                    FactoryMethod\Strategy\Response\GeneratorInterface::class
                ]
            );

        // repository
        $container->add(Repository\StudentInterface::class, Repository\Student::class)
            ->addArguments(
                [
                    \BS\Common\Db\DatabaseInterface::class,
                    FactoryMethod\Entity\StudentInterface::class
                ]
            );

        // factory method
        $container->add(FactoryMethod\Entity\StudentInterface::class, FactoryMethod\Entity\Student::class)
            ->addArguments(
                [
                    FactoryMethod\Entity\GradesInterface::class,
                    FactoryMethod\Entity\SchoolBoardInterface::class
                ]
            );
        $container->add(FactoryMethod\Entity\GradesInterface::class, FactoryMethod\Entity\Grades::class);
        $container->add(
            FactoryMethod\Entity\SchoolBoardInterface::class,
            FactoryMethod\Entity\SchoolBoard::class
        );
        $container->add(
            FactoryMethod\Strategy\Response\GeneratorInterface::class,
            FactoryMethod\Strategy\Response\Generator::class
        )->addArguments(
            [
                Strategy\Response\Json::class,
                Strategy\Response\Xml::class,
            ]
        );
        $container->add(
            FactoryMethod\Strategy\SchoolBoard\ResultInterface::class,
            FactoryMethod\Strategy\SchoolBoard\Result::class
        );

        // strategy
        $container->add(Strategy\Response\Json::class, Strategy\Response\Json::class);
        $container->add(Strategy\Response\Xml::class, Strategy\Response\Xml::class);


        // formatter
        $container->add(Formatter\ResultInterface::class, Formatter\Result::class);
    }
}

