<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class b extends Model
{
    public function a()
    {
        return $this->belongsTo('App\a', 'foreign_key');
    }
}
