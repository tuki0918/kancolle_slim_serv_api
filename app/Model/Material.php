<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model as Model;

class Material extends Model {

    protected $table = 'materials';

    protected $hidden = array('ip');

    public $timestamps = false;
}