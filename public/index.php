<?php
declare(strict_types=1);

error_reporting(E_ALL & ~E_USER_DEPRECATED & ~E_DEPRECATED & ~E_STRICT & ~E_NOTICE);
ini_set('display_errors', '1');

chdir(dirname(__DIR__));
require 'vendor/autoload.php';

(static function () {
    /** @var \Psr\Container\ContainerInterface $container */
    $container = require 'config/container.php';
    $router = (require 'config/router.php')($container);

    $request = Laminas\Diactoros\ServerRequestFactory::fromGlobals(
        $_SERVER,
        $_GET,
        $_POST,
        $_COOKIE,
        $_FILES
    );
    try {
        $response = $router->handle($request);
    } catch (Throwable $throwable) {
        if ($throwable instanceof Psr\Container\NotFoundExceptionInterface) {
            $response = new \Laminas\Diactoros\Response\JsonResponse(['result' => 'not found'], 404);
        } elseif ($throwable instanceof \BS\Common\Exception\Exception) {
            $response = new \Laminas\Diactoros\Response\JsonResponse(
                ['result' => $throwable->getMessage()],
                $throwable->getCode()
            );
        } else {
            $response = new \Laminas\Diactoros\Response\JsonResponse(['result' => $throwable->getMessage()], 500);
        }
    }

    (new Laminas\HttpHandlerRunner\Emitter\SapiEmitter)->emit($response);
})();
