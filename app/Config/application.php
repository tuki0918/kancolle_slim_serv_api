<?php

// common settings
$app->config('mode', 'production');
$app->config('templates.path', VIEW_PATH);

// if mode is "production"
$app->configureMode('production', function () use ($app) {
    $app->config('debug', false);
});

// if mode is "development"
$app->configureMode('development', function () use ($app) {
    $app->config('debug', true);
});
