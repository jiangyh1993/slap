<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public $primaryKey = 'id';
    public $timeStamps = true;

    public function user() {
        return $this->belongsTo('App\User');
    }
}
