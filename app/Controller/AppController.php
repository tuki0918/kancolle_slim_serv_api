<?php

namespace App\Controller;

class AppController
{
    protected $app;
    protected $log;

    public function __construct($app)
    {
        $this->app = $app;
        $this->log = $app->log;
    }
}