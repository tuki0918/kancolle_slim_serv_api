<?php

// Database Config
define('DB_HOST', '****');
define('DB_NAME', '****');
define('DB_USER', '****');
define('DB_PASS', '****');

// Application Infomation
define('APP_NAME'      , 'slim');
define('APP_MODE'      , 'production');
define('APP_COOKIE_NAME'      , 'slim_session');
define('APP_COOKIE_SECRET_KEY', 'CHANGE_ME');
define('APP_COOKIE_EXPIRES'   , '20 minutes');

// Directory Path
define('BASE_PATH'     , realpath(__DIR__ . '/../..'));
define('APP_PATH'      , BASE_PATH . '/app');
define('LOGS_PATH'     , BASE_PATH . '/logs');
define('CONFIG_PATH'   , APP_PATH  . '/Config');
define('ROUTE_PATH'    , APP_PATH  . '/Route');
define('VIEW_PATH'     , APP_PATH  . '/View');
define('PUBLIC_PATH'   , '/public');

// File Path
define('LOG_FILENAME'  , LOGS_PATH . '/application.log');