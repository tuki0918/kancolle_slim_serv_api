<?php

// Directory Path
define('BASE_PATH'     , realpath(__DIR__ . '/../..'));
define('APP_PATH'      , BASE_PATH . '/app');
define('CONFIG_PATH'   , APP_PATH  . '/Config');
define('ROUTE_PATH'    , APP_PATH  . '/Route');
define('VIEW_PATH'     , APP_PATH  . '/View');
define('TMP_PATH'      , APP_PATH  . '/tmp');
define('LOGS_PATH'     , TMP_PATH  . '/logs');
define('PUBLIC_PATH'   , '/public');

// File Path
define('LOG_FILENAME'  , LOGS_PATH . '/application.log');
