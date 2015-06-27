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
$extension = array('common.*.php', 'cli.*.php');
$pattern   = '{'.implode(',', $extension).'}';
foreach (glob(ROUTE_PATH . "/{$pattern}", GLOB_BRACE) as $inc) {
    if (is_file($inc)) {
        require_once $inc;
    } else {
        $app->log->addInfo('This file could not be loaded.', array('file' => $inc));
    }
}

$app->run();