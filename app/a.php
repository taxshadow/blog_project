<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class a extends Model
{
    public function b()
    {
        return $this->hasOne('App\b');
    }
}
