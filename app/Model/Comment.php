<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model as Model;

class Comment extends Model {

    protected $table = 'comments';

    protected $hidden = array('ip');

    public $timestamps = false;
}