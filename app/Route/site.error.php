<?php

$app->notFound(function () use ($app) {
    $app->render('error/404.twig');
});

$app->error(function (\Exception $e) use ($app) {
    $app->render('error/500.twig');
});