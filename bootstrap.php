<?php

use Symfony\Component\Debug\ErrorHandler;
use Symfony\Component\HttpKernel\Debug\ExceptionHandler;

$loader = require_once __DIR__.'/vendor/autoload.php';

$loader->add('Controllers', __DIR__ . '/app');
$loader->add('Services', __DIR__ . '/app');

ErrorHandler::register();
ExceptionHandler::register();


$app = new Silex\Application();

$app->register(new Silex\Provider\ServiceControllerServiceProvider());

include __DIR__ . '/conf/routes.php';

include __DIR__ . '/conf/dependency_injections.php';

$app['env'] = 'prod';

return [$app, $loader];


