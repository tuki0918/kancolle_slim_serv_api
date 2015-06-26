<?php

namespace App\Controller\Component;

class Component
{
    protected $app;

    public function __construct($app)
    {
        $this->app = $app;
    }
}
