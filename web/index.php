<?php

list($app, $loader) = require __DIR__ . '/../bootstrap.php';

if ('test' === $app['env']) {
  $loader->add('Base', __DIR__ . '/../tests');
  return $app;
} else {
  $app->run();
}
