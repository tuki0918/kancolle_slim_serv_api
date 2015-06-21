<?php

$app->notFound(function () use ($app) {
    $app->render('error/404.twig');
});

$app->error(function (\Exception $e) use ($app) {
    $msg = $e->getMessage();
    $app->log->addWarning($msg);
    $app->render('error/500.twig');
});