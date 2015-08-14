<?php

namespace App\Controller;

use App\Model\Material;
use App\Model\Item;

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

        $ipAddress = isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : null;

        if (isset($m['fuel'], $m['ammo'], $m['steel'], $m['bauxite'])) {
            $material = new Material;
            $material->ip      = $ipAddress;
            $material->fuel    = $m['fuel'];
            $material->ammo    = $m['ammo'];
            $material->steel   = $m['steel'];
            $material->bauxite = $m['bauxite'];
            $material->save();
        }

        if (isset($m['item05'], $m['item06'], $m['item07'], $m['item08'])) {
            $item = new Item;
            $item->ip     = $ipAddress;
            $item->item05 = $m['item05'];
            $item->item06 = $m['item06'];
            $item->item07 = $m['item07'];
            $item->item08 = $m['item08'];
            $item->save();
        }

        $response = $this->app->response();
        $response['Access-Control-Allow-Origin'] = '*';
        $response['Access-Control-Allow-Headers'] = 'Origin, X-Requested-With, Content-Type, Accept';
        $response['Content-Type'] = 'application/json';
        $response->status(200);
        $response->body(json_encode($m));

    }

    public function cli()
    {

        $materials = Material::all();

        echo $materials->toJson();

    }

}