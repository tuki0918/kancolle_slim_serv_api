<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model as Model;

class User extends Model {

    protected $table = 'users';

    protected $hidden = array('password');
}