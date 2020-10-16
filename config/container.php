<?php
declare(strict_types=1);

$container = new League\Container\Container();
$container->defaultToShared();

$container->add('config', (require 'global.php'));
$container->addServiceProvider(new \BS\Common\ServiceProvider());
$container->addServiceProvider(new \BS\SchoolBoard\ServiceProvider());

return $container;
