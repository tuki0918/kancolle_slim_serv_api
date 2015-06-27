<?php

require __DIR__ . '/../vendor/autoload.php';

$app = new Slim\Slim();

// application setup
require_once CONFIG_PATH . '/application.php';

// application routing setup
foreach (glob(ROUTE_PATH . '/site.*.php') as $inc) {
    require_once $inc;
}

foreach (glob(ROUTE_PATH . '/common.*.php') as $inc) {
    require_once $inc;
}

$app->run();
