<?php

$loader = require_once __DIR__.'/vendor/autoload.php';

$loader->add('Controllers', __DIR__ . '/../app');
$loader->add('Services', __DIR__ . '/../app');

$app = new Silex\Application();

include __DIR__ . '/conf/dependency_injections.php';
include __DIR__ . '/conf/routes.php';

$app['env'] = 'prod';

return [$app, $loader];


