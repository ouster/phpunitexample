<?php

use Symfony\Component\Debug\ErrorHandler;
use Symfony\Component\HttpKernel\Debug\ExceptionHandler;

$loader = require __DIR__.'/vendor/autoload.php';

$loader->add('Controllers', __DIR__ . '/app');
$loader->add('Services', __DIR__ . '/app');

ErrorHandler::register();
ExceptionHandler::register();


$app = new Silex\Application();

$app->register(new Silex\Provider\ServiceControllerServiceProvider());

include __DIR__ . '/conf/routes.php';

include __DIR__ . '/conf/dependency_injections.php';

require_once __DIR__ . '/app/Utils/conversion.php';

// Detect environment (default: prod) by checking for the existence of $app_env
if (isset($app_env) && in_array($app_env, ['prod', 'dev', 'test', 'qa']))
  $app['env'] = $app_env;
else
  $app['env'] = 'prod';

return [$app, $loader];


