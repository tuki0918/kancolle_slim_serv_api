<?php

// common settings
$app->config('mode', APP_MODE);
$app->config('templates.path', VIEW_PATH);

// if mode is "production"
$app->configureMode('production', function () use ($app) {
    $app->config('debug', false);
});

// if mode is "development"
$app->configureMode('development', function () use ($app) {
    $app->config('debug', true);
});

// Logging setup
$app->container->singleton('log', function () {
    $log = new Monolog\Logger(APP_NAME);
    $log->pushHandler(new Monolog\Handler\StreamHandler(LOG_FILENAME, Monolog\Logger::DEBUG));
    return $log;
});
