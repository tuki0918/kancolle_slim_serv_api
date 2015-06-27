<?php
session_cache_limiter(false);
session_start();

require __DIR__ . '/../vendor/autoload.php';

$app = new Slim\Slim();

$app->add(new Slim\Middleware\SessionCookie(array(
    'expires'     => APP_COOKIE_EXPIRES,
    'path'        => '/',
    'domain'      => null,
    'secure'      => false,
    'httponly'    => false,
    'name'        => APP_COOKIE_NAME,
    'secret'      => APP_COOKIE_SECRET_KEY,
    'cipher'      => MCRYPT_RIJNDAEL_256,
    'cipher_mode' => MCRYPT_MODE_CBC
)));

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
