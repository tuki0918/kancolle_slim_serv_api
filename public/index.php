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
$extension = array('common.*.php', 'site.*.php');
$pattern   = '{'.implode(',', $extension).'}';
foreach (glob(ROUTE_PATH . "/{$pattern}", GLOB_BRACE) as $inc) {
    if (is_file($inc)) {
        require_once $inc;
    } else {
        $app->log->addInfo('This file could not be loaded.', array('file' => $inc));
    }
}

$app->run();
