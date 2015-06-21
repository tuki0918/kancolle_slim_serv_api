<?php

require __DIR__ . '/vendor/autoload.php';

$config = require CONFIG_PATH . '/database.php';

$db = new Illuminate\Database\Capsule\Manager;
$db->addConnection($config);
$db->setAsGlobal();
$db->bootEloquent();

$container = new Pimple();

$container['phpmig.adapter'] = function() use ($db) {
    return new Phpmig\Adapter\Illuminate\Database($db, 'migrations');
};

$container['phpmig.migrations_path'] = __DIR__ . DIRECTORY_SEPARATOR . 'migrations';

return $container;
