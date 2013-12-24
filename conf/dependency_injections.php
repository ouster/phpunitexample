<?php
/**
 * Created by PhpStorm.
 * User: colshine
 * Date: 23/12/2013
 * Time: 6:28 PM
 */


$app['example.repository'] = $app->share(function ($app) {
  return new Services\ExampleService('complex', 'constructor');
});

$app['example.controller'] = $app->share(function ($app) {
  return new Controllers\ExampleController($app['example.repository']);
});

