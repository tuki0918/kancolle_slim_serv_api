<?php

namespace App\Controller;

use App\Model\User;

class UserController extends AppController
{

    public function index()
    {

        $users = User::all();

        $this->app->render(
            'user.index.twig',
            compact('users')
        );

    }

    public function cli()
    {

        $users = User::all();

        echo $users->toJson();

    }

}