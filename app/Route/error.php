<?php

$app->notFound(function () use ($app) {
    $app->render('error/404.php');
});

$app->error(function (\Exception $e) use ($app) {
    $app->render('error/500.php');
});