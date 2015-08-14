<?php

namespace App\Controller;

use App\Model\Material;

class MaterialController extends AppController
{

    public function index()
    {

        $materials = Material::orderBy('id', 'desc')
            ->take(100)
            ->get();

        $this->app->render(
            'material.index.twig',
            compact('materials')
        );

    }

    public function save()
    {
        $m = $this->app->request()->post('materials');
        $m = @json_decode($m, true);

        if (isset($m['fuel'], $m['ammo'], $m['steel'], $m['bauxite'])) {
            $ipAddress = isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : null;
            $material = new Material;
            $material->ip      = $ipAddress;
            $material->fuel    = $m['fuel'];
            $material->ammo    = $m['ammo'];
            $material->steel   = $m['steel'];
            $material->bauxite = $m['bauxite'];
            $material->save();
        }


    }

    public function cli()
    {

        $materials = Material::all();

        echo $materials->toJson();

    }

}