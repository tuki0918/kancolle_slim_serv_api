#!/usr/bin/env php
<?php

require __DIR__ . '/../vendor/autoload.php';

$app = new Slim\Slim();

// convert all the command line arguments into a URL
$argv = $GLOBALS['argv'];
array_shift($GLOBALS['argv']);
$pathInfo = '/' . implode('/', $argv);

// Set up the environment so that Slim can route
$app->environment = Slim\Environment::mock([
    'PATH_INFO' => $pathInfo
]);

// application setup
require_once CONFIG_PATH . '/application.php';

// application routing setup
foreach (glob(ROUTE_PATH . '/cli.*.php') as $inc) {
    require_once $inc;
}

foreach (glob(ROUTE_PATH . '/common.*.php') as $inc) {
    require_once $inc;
}

$app->run();