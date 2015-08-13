<?php

namespace App\Controller;

use App\Model\Material;

class MaterialController extends AppController
{

    public function index()
    {

        $materials = Material::all();

        $this->app->render(
            'material.index.twig',
            compact('materials')
        );

    }

    public function cli()
    {

        $materials = Material::all();

        echo $materials->toJson();

    }

}