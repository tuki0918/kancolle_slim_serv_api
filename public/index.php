<?php

require __DIR__ . '/../vendor/autoload.php';

$app = new Slim\Slim();

// application setup
require_once CONFIG_PATH . '/application.php';

// application routing setup
require_once ROUTE_PATH . '/default.php';
require_once ROUTE_PATH . '/error.php';

$app->run();
