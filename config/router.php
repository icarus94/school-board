<?php
declare(strict_types=1);

return static function (\Psr\Container\ContainerInterface $container): \Psr\Http\Server\RequestHandlerInterface {
    $router = new League\Route\Router;
    $strategy = (new League\Route\Strategy\ApplicationStrategy())->setContainer($container);

    $router->setStrategy($strategy);


    return $router;
};
