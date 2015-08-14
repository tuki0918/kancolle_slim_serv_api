<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model as Model;

class Item extends Model {

    protected $table = 'items';

    protected $hidden = array('ip');

    public $timestamps = false;
}