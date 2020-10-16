<?php
declare(strict_types=1);

$container = new League\Container\Container();
$container->defaultToShared();

$container->add('config', (require 'global.php'));

return $container;