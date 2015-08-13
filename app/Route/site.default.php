<?php

// $app->group('/users', function () use ($app) {

//     $app->get('/', function() use ($app) {
//         (new App\Controller\UserController($app))->index();
//     });

// });

$app->group('/materials', function () use ($app) {

    $app->get('/', function() use ($app) {
        (new App\Controller\MaterialController($app))->index();
    });

});