<?php

namespace App\Controller;

class AppController
{
    protected $app;

    public function __construct($app)
    {
        $this->app = $app;
    }
}