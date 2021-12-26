<?php

require_once __DIR__ . '/vendor/autoload.php';

use Potter\Application\Application;

$app = new Application(
    name: 'SampleApplication'
);

echo $app->getName() . PHP_EOL;
// SampleApplication

$app->setName('NewApplication');

echo $app->getName() . PHP_EOL;
// NewApplication
